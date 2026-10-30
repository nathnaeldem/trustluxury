<?php
/**
 * One-time setup: create tables, seed images & admin on your Hostinger DB.
 * Run once on the live server: https://your-domain.com/setup.php
 * Delete this file after setup for security.
 */
$db_host = 'localhost';
$db_name = 'u624686682_trus_nath';
$db_user = 'u624686682_trust';
$db_pass = 's?0E5@4O';

require_once __DIR__ . '/includes/site_image_registry.php';
$images = site_image_registry();

try {
    $pdo = new PDO(
        "mysql:host={$db_host};dbname={$db_name};charset=utf8mb4",
        $db_user,
        $db_pass,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    $pdo->exec("CREATE TABLE IF NOT EXISTS admins (
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(80) NOT NULL UNIQUE,
      password_hash VARCHAR(255) NOT NULL,
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB");

    $pdo->exec("CREATE TABLE IF NOT EXISTS site_images (
      id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      image_key VARCHAR(100) NOT NULL UNIQUE,
      label VARCHAR(160) NOT NULL,
      page_group VARCHAR(80) NOT NULL,
      file_path VARCHAR(500) NOT NULL,
      updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE=InnoDB");

    $hash = password_hash('admin123', PASSWORD_DEFAULT);
    $stmt = $pdo->prepare('INSERT INTO admins (username, password_hash) VALUES (?, ?)
      ON DUPLICATE KEY UPDATE password_hash = VALUES(password_hash)');
    $stmt->execute(['admin', $hash]);

    $ins = $pdo->prepare('INSERT INTO site_images (image_key, label, page_group, file_path) VALUES (?, ?, ?, ?)
      ON DUPLICATE KEY UPDATE label = VALUES(label), page_group = VALUES(page_group)');
    foreach ($images as $img) {
        $ins->execute($img);
    }

    $ok = true;
    $msg = 'Setup complete on u624686682_trus_nath. Admin login: admin / admin123';
} catch (Throwable $e) {
    $ok = false;
    $msg = 'Setup failed: ' . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trust Luxury Setup</title>
  <style>
    body { font-family: system-ui, sans-serif; background: #fffcf7; color: #1c1610; display: grid; place-items: center; min-height: 100vh; margin: 0; }
    .card { background: #fff; border: 1px solid #e0b84a55; padding: 2rem; max-width: 480px; box-shadow: 0 20px 50px rgba(0,0,0,.08); }
    a { color: #c2452a; font-weight: 600; }
  </style>
</head>
<body>
  <div class="card">
    <h1><?= $ok ? 'Ready' : 'Error' ?></h1>
    <p><?= htmlspecialchars($msg) ?></p>
    <?php if ($ok): ?>
      <p><a href="admin/login.php">Go to Admin Panel →</a></p>
      <p style="font-size:.85rem;color:#7a6e5c;">Delete <code>setup.php</code> after first login.</p>
    <?php endif; ?>
  </div>
</body>
</html>
