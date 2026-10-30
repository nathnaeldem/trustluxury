<?php
require __DIR__ . '/auth.php';
require_admin();
require_once dirname(__DIR__) . '/includes/site_image_registry.php';

try {
    sync_site_image_registry();
} catch (Throwable $e) {
    /* dashboard still loads */
}

$count = (int) db()->query('SELECT COUNT(*) FROM site_images')->fetchColumn();
$activeCount = count(site_image_registry());
$groups = db()->query('SELECT page_group, COUNT(*) AS c FROM site_images GROUP BY page_group ORDER BY page_group')->fetchAll();
$recent = db()->query('SELECT label, page_group, updated_at FROM site_images ORDER BY updated_at DESC LIMIT 6')->fetchAll();

$admin_title = 'Dashboard';
$admin_nav = 'dashboard';
require __DIR__ . '/layout.php';
?>

<div class="stat-grid">
  <div class="stat">
    <div class="n"><?= $activeCount ?></div>
    <div class="l">Active image slots</div>
  </div>
  <div class="stat">
    <div class="n"><?= $count ?></div>
    <div class="l">Total in database</div>
  </div>
  <div class="stat">
    <div class="n"><?= count($groups) ?></div>
    <div class="l">Page Groups</div>
  </div>
  <div class="stat">
    <div class="n"><i class="bi bi-images" style="font-size:1.6rem;color:var(--teal);"></i></div>
    <div class="l"><a href="images.php" style="color:inherit;text-decoration:none;">Open Image Manager →</a></div>
  </div>
</div>

<div class="row g-3">
  <div class="col-lg-6">
    <div class="admin-card">
      <h2 class="h5 mb-3">By page</h2>
      <ul class="list-unstyled mb-0">
        <?php foreach ($groups as $g): ?>
          <li class="d-flex justify-content-between py-2 border-bottom">
            <a href="images.php?group=<?= urlencode($g['page_group']) ?>"><?= htmlspecialchars($g['page_group']) ?></a>
            <span class="badge text-bg-light"><?= (int) $g['c'] ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="admin-card">
      <h2 class="h5 mb-3">Recently updated</h2>
      <?php if (!$recent): ?>
        <p class="text-muted mb-0">No images yet. Run setup.php first.</p>
      <?php else: ?>
        <ul class="list-unstyled mb-0">
          <?php foreach ($recent as $r): ?>
            <li class="py-2 border-bottom">
              <strong><?= htmlspecialchars($r['label']) ?></strong>
              <div class="small text-muted"><?= htmlspecialchars($r['page_group']) ?> · <?= htmlspecialchars($r['updated_at']) ?></div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php require __DIR__ . '/layout_end.php'; ?>
