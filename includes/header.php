<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/images.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($page_description ?? $site_tagline) ?>">
  <title><?= htmlspecialchars(($page_title ?? 'Home') . ' | ' . $site_name) ?></title>
  <link rel="icon" type="image/png" href="assets/images/logo_icon_version.png">
  <link rel="apple-touch-icon" href="assets/images/logo_icon_version.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,500&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<?php $nav_over_dark = !empty($nav_over_dark); ?>
<header class="site-nav<?= $nav_over_dark ? ' nav-over-dark' : ' nav-solid' ?>" id="siteNav">
  <nav class="navbar navbar-expand-lg w-100">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo_icon_version.png" alt="Trust Luxury Transportation" class="brand-logo-icon" width="40" height="40">
        <span class="brand-name">
          Trust Luxury
          <span>Transportation</span>
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-1">
          <li class="nav-item"><a class="nav-link nav-link-lux <?= is_active('home') ?>" href="index.php"><i class="bi bi-house-door"></i> Home</a></li>
          <li class="nav-item"><a class="nav-link nav-link-lux <?= is_active('about') ?>" href="about.php"><i class="bi bi-building"></i> About</a></li>
          <li class="nav-item"><a class="nav-link nav-link-lux <?= is_active('fleet') ?>" href="fleet.php"><i class="bi bi-car-front"></i> Fleet</a></li>
          <li class="nav-item"><a class="nav-link nav-link-lux <?= is_active('services') ?>" href="services.php"><i class="bi bi-briefcase"></i> Services</a></li>
          <li class="nav-item"><a class="nav-link nav-link-lux <?= is_active('contact') ?>" href="contact.php"><i class="bi bi-envelope"></i> Contact</a></li>
        </ul>
        <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-3 mt-3 mt-lg-0">
          <a class="nav-phone" href="tel:<?= $site_phone_raw ?>"><i class="bi bi-telephone-fill"></i><?= $site_phone ?></a>
          <a href="book.php" class="btn-gold py-2 px-3">Book Now</a>
        </div>
      </div>
    </div>
  </nav>
</header>
<main>
