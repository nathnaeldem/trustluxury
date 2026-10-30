<?php
require __DIR__ . '/auth.php';
require_admin();
require_once dirname(__DIR__) . '/includes/site_image_registry.php';

$syncNotice = '';
try {
    $added = sync_site_image_registry();
    if ($added > 0) {
        $syncNotice = $added . ' new image slot(s) added from the site registry.';
    }
} catch (Throwable $e) {
    $syncNotice = '';
}

$uploadDir = dirname(__DIR__) . '/assets/uploads';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int) ($_POST['id'] ?? 0);
    $action = $_POST['action'] ?? 'upload';

    $stmt = db()->prepare('SELECT * FROM site_images WHERE id = ? LIMIT 1');
    $stmt->execute([$id]);
    $row = $stmt->fetch();

    if (!$row) {
        $error = 'Image slot not found.';
    } elseif ($action === 'url') {
        $url = trim($_POST['external_url'] ?? '');
        $isHttp = $url !== '' && filter_var($url, FILTER_VALIDATE_URL);
        $isLocal = $url !== '' && preg_match('#^(assets/|\./|\/)?[a-zA-Z0-9_./-]+\.(jpe?g|png|gif|webp|avif)$#i', $url);
        if ($url === '' || (!$isHttp && !$isLocal)) {
            $error = 'Enter a valid image URL (https://…) or site path (assets/uploads/…).';
        } else {
            $upd = db()->prepare('UPDATE site_images SET file_path = ? WHERE id = ?');
            $upd->execute([$url, $id]);
            $success = 'Updated “' . $row['label'] . '” with external URL.';
        }
    } elseif ($action === 'upload') {
        if (empty($_FILES['image']['name']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
            $error = 'Please choose an image file to upload.';
        } else {
            $allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp', 'image/gif' => 'gif'];
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mime = $finfo->file($_FILES['image']['tmp_name']);
            if (!isset($allowed[$mime])) {
                $error = 'Only JPG, PNG, WEBP, or GIF allowed.';
            } elseif ($_FILES['image']['size'] > 8 * 1024 * 1024) {
                $error = 'File too large (max 8MB).';
            } else {
                $ext = $allowed[$mime];
                $filename = $row['image_key'] . '-' . time() . '.' . $ext;
                $dest = $uploadDir . '/' . $filename;
                if (!move_uploaded_file($_FILES['image']['tmp_name'], $dest)) {
                    $error = 'Upload failed. Check folder permissions.';
                } else {
                    $public = 'assets/uploads/' . $filename;
                    $upd = db()->prepare('UPDATE site_images SET file_path = ? WHERE id = ?');
                    $upd->execute([$public, $id]);
                    $success = 'Uploaded new image for “' . $row['label'] . '”.';
                }
            }
        }
    }
}

$groups = db()->query('SELECT DISTINCT page_group FROM site_images ORDER BY page_group')->fetchAll(PDO::FETCH_COLUMN);
$group = $_GET['group'] ?? 'All';
if ($group !== 'All' && !in_array($group, $groups, true)) {
    $group = 'All';
}

if ($group === 'All') {
    $images = db()->query('SELECT * FROM site_images ORDER BY page_group, label')->fetchAll();
} else {
    $stmt = db()->prepare('SELECT * FROM site_images WHERE page_group = ? ORDER BY label');
    $stmt->execute([$group]);
    $images = $stmt->fetchAll();
}

$admin_title = 'Site Images';
$admin_nav = 'images';
require __DIR__ . '/layout.php';
?>

<?php if ($success): ?><div class="alert-ok mb-3"><?= htmlspecialchars($success) ?></div><?php endif; ?>
<?php if ($error): ?><div class="alert-soft mb-3"><?= htmlspecialchars($error) ?></div><?php endif; ?>
<?php if ($syncNotice): ?><div class="alert-ok mb-3"><?= htmlspecialchars($syncNotice) ?></div><?php endif; ?>

<p class="text-muted mb-3">Each card matches a live image on the website. Preview shows the <strong>current</strong> image. Upload a file or update the URL below.</p>

<div class="group-tabs">
  <a href="images.php" class="<?= $group === 'All' ? 'active' : '' ?>">All</a>
  <?php foreach ($groups as $g): ?>
    <a href="images.php?group=<?= urlencode($g) ?>" class="<?= $group === $g ? 'active' : '' ?>"><?= htmlspecialchars($g) ?></a>
  <?php endforeach; ?>
</div>

<div class="img-grid">
  <?php foreach ($images as $img): ?>
    <?php
      $path = $img['file_path'];
      $preview = $path;
      if (!preg_match('#^https?://#i', $path)) {
          $preview = '../' . ltrim($path, '/');
      }
    ?>
    <?php
      $registryKeys = array_column(site_image_registry(), 0);
      $isLegacy = !in_array($img['image_key'], $registryKeys, true);
    ?>
    <article class="img-card<?= $isLegacy ? ' img-card--legacy' : '' ?>">
      <div class="img-card__preview" style="background-image:url('<?= htmlspecialchars($preview, ENT_QUOTES) ?>');"></div>
      <div class="img-card__body">
        <h3><?= htmlspecialchars($img['label']) ?></h3>
        <div class="key">
          <?= htmlspecialchars($img['page_group']) ?> · <code><?= htmlspecialchars($img['image_key']) ?></code>
          <?php if ($isLegacy): ?><span class="badge text-bg-secondary ms-1">Not used on site</span><?php endif; ?>
        </div>
        <p class="current-path" title="Current image path"><?= htmlspecialchars($path) ?></p>
        <form method="post" enctype="multipart/form-data" class="mb-2">
          <input type="hidden" name="id" value="<?= (int) $img['id'] ?>">
          <input type="hidden" name="action" value="upload">
          <input type="file" name="image" class="form-control form-control-sm mb-2" accept="image/*" required>
          <button type="submit" class="btn btn-admin btn-sm w-100">Upload Image</button>
        </form>
        <form method="post">
          <input type="hidden" name="id" value="<?= (int) $img['id'] ?>">
          <input type="hidden" name="action" value="url">
          <label class="form-label small mb-1">Current / new image URL</label>
          <div class="input-group input-group-sm">
            <input type="text" name="external_url" class="form-control" value="<?= htmlspecialchars($path) ?>" placeholder="https://… or assets/uploads/…">
            <button type="submit" class="btn btn-outline-secondary">Save</button>
          </div>
        </form>
      </div>
    </article>
  <?php endforeach; ?>
</div>

<?php if (!$images): ?>
  <div class="admin-card">No image slots found. Run <code>../setup.php</code> first.</div>
<?php endif; ?>

<?php require __DIR__ . '/layout_end.php'; ?>
