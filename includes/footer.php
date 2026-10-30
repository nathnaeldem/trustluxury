</main>
<footer class="site-footer">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4">
        <a class="footer-logo mb-3 d-inline-block" href="index.php">
          <img src="assets/images/logo.avif" alt="Trust Luxury Transportation" class="brand-logo-full">
        </a>
        <p class="mt-3 mb-4" style="max-width: 32ch;">
          First-class chauffeur service for families and professionals across Northern Virginia, Washington D.C., and Maryland since 2014.
        </p>
        <div class="social-links mb-4" aria-label="Social media">
          <?php foreach ($site_social as $social): ?>
            <a
              href="<?= htmlspecialchars($social['url']) ?>"
              class="social-link"
              target="_blank"
              rel="noopener noreferrer"
              aria-label="<?= htmlspecialchars($social['label']) ?>"
              title="<?= htmlspecialchars($social['label']) ?>"
            >
              <i class="bi <?= htmlspecialchars($social['icon']) ?>"></i>
            </a>
          <?php endforeach; ?>
        </div>
        <a href="tel:<?= $site_phone_raw ?>" class="btn-gold">Call <?= $site_phone ?></a>
      </div>
      <div class="col-6 col-lg-2">
        <h5>Explore</h5>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="fleet.php">Our Fleet</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="book.php">Book Online</a></li>
          <li><a href="terms.php">Terms &amp; Conditions</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3">
        <h5>Services</h5>
        <ul class="footer-links">
          <li><a href="services.php#diplomatic">Diplomatic Transportation</a></li>
          <li><a href="services.php#corporate">Corporate Transportation</a></li>
          <li><a href="services.php#aviation">Private Aviation &amp; Airport</a></li>
          <li><a href="services.php#meetings">Meeting &amp; Events</a></li>
          <li><a href="services.php#leisure">Leisure &amp; Entertainment</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h5>Contact</h5>
        <ul class="footer-links">
          <li><a href="tel:<?= $site_phone_raw ?>"><?= $site_phone ?></a></li>
          <li><a href="mailto:<?= $site_email ?>"><?= $site_email ?></a></li>
          <li><?= htmlspecialchars($site_address) ?></li>
        </ul>
        <p class="mt-3 mb-0" style="font-size: 0.85rem; color: var(--gold-bright);">
          <i class="bi bi-clock me-1"></i> Available 24/7
        </p>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?= $site_year ?> Trust Luxury Transportation. All rights reserved.</span>
      <a href="terms.php" style="color: var(--gold-bright);">Terms &amp; Conditions</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/chat.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/chat.js"></script>
</body>
</html>
