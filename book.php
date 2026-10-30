<?php
$page_title = 'Book Now';
$page_description = 'Book your luxury chauffeur service with Trust Luxury Transportation. Secure online reservations via BookRidesOnline.';
$nav_over_dark = true;
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="page-hero__bg" style="<?= site_img_style('book_hero', 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1920&q=80') ?>"></div>
  <div class="page-hero__overlay"></div>
  <div class="page-hero__content">
    <div class="container">
      <div class="page-hero__panel reveal">
        <p class="eyebrow">Reservations</p>
        <h1>Book your luxury car service</h1>
        <hr class="gold-rule">
        <p class="page-hero__lead">Reserve online instantly — or call us 24/7 at <?= htmlspecialchars($site_phone) ?>.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-champagne texture-dot">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-8 text-center reveal">
        <p class="eyebrow">Online Booking</p>
        <h2 class="display-section" style="font-size: clamp(1.8rem, 3.5vw, 2.6rem);">Complete your reservation</h2>
        <hr class="gold-rule mx-auto">
        <p class="text-muted-lux mb-0">Prefer to speak with someone? Call <a href="tel:<?= $site_phone_raw ?>" style="color: var(--gold-deep); font-weight: 600;"><?= $site_phone ?></a> — available 24/7.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-xl-10 reveal">
        <div class="bro-reservation-wrap">
          <div id="bro_reservation"></div>
          <input type="hidden" id="cid" value="CW9C5J%2bcInPKPW4xkSS6Eg%3d%3d" />
          <input type="hidden" id="dbaid" value="8NsJFvysUBAsQz3Ws8u%2bGg%3d%3d" />
        </div>
        <p class="text-center text-muted-lux mt-3 mb-0" style="font-size: 0.85rem;">
          Powered by BookRidesOnline ·
          <a href="https://bookridesonline.com/book/?dbaid=8NsJFvysUBAsQz3Ws8u%2bGg%3d%3d" target="_blank" rel="noopener" style="color: var(--gold-deep);">Open full booking page</a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section-sm bg-pearl">
  <div class="container">
    <div class="promise-row">
      <div class="promise-item reveal">
        <i class="bi bi-shield-check"></i>
        <h3>Vetted Chauffeurs</h3>
        <p>Background-checked professionals trained for hospitality and safety.</p>
      </div>
      <div class="promise-item reveal reveal-delay-1">
        <i class="bi bi-lightning-charge"></i>
        <h3>Fast Confirmation</h3>
        <p>Our team responds quickly so you can lock in your schedule with confidence.</p>
      </div>
      <div class="promise-item reveal reveal-delay-2">
        <i class="bi bi-stars"></i>
        <h3>Premium Fleet</h3>
        <p>From sedans to coaches — always spotless, always prepared.</p>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
(function () {
  var po = document.createElement('script');
  po.type = 'text/javascript';
  po.async = true;
  po.src = 'https://bookridesonline.com/web/reservation.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(po, s);
})();
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
