<?php
if (!isset($admin_title)) {
    $admin_title = 'Admin';
}
$admin_user = $_SESSION['admin_user'] ?? 'admin';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($admin_title) ?> | Trust Luxury CMS</title>
  <link rel="icon" type="image/png" href="../assets/images/logo_icon_version.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="assets/admin.css" rel="stylesheet">
</head>
<body>
<aside class="admin-side">
  <div class="admin-brand">
    <img src="../assets/images/logo_icon_version.png" alt="" width="40" height="40" style="object-fit:contain;">
    <div>
      <strong>Trust Luxury</strong>
      <small>Content Manager</small>
    </div>
  </div>
  <nav class="admin-nav">
    <a href="index.php" class="<?= ($admin_nav ?? '') === 'dashboard' ? 'active' : '' ?>"><i class="bi bi-grid"></i> Dashboard</a>
    <a href="images.php" class="<?= ($admin_nav ?? '') === 'images' ? 'active' : '' ?>"><i class="bi bi-images"></i> Site Images</a>
    <a href="../index.php" target="_blank"><i class="bi bi-box-arrow-up-right"></i> View Website</a>
  </nav>
  <div class="admin-side__foot">
    <span><?= htmlspecialchars($admin_user) ?></span>
    <a href="logout.php">Logout</a>
  </div>
</aside>
<main class="admin-main">
  <header class="admin-top">
    <h1><?= htmlspecialchars($admin_title) ?></h1>
  </header>
  <div class="admin-body">
