<?php
$page_title = 'Terms & Conditions';
$page_description = 'Terms and conditions for Trust Luxury Transportation chauffeur and luxury car services in Washington D.C., Maryland, and Virginia.';
$nav_over_dark = true;
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="page-hero__bg" style="<?= site_img_style('about_hero', 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&w=1920&q=80') ?>"></div>
  <div class="page-hero__overlay"></div>
  <div class="page-hero__content">
    <div class="container">
      <div class="page-hero__panel reveal">
        <p class="eyebrow">Legal</p>
        <h1>Terms &amp; Conditions</h1>
        <hr class="gold-rule">
        <p class="page-hero__lead">Please review these terms before booking with Trust Luxury Transportation.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-pearl">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">
        <article class="terms-doc reveal">
          <p class="text-muted-lux mb-5">By booking or using Trust Luxury Transportation services, you agree to the following terms and conditions.</p>

          <section class="terms-block">
            <h2>1. Booking and Reservations</h2>
            <ul>
              <li>All reservations must be made in advance and are subject to vehicle availability.</li>
              <li>A confirmation will be sent via email or text once a booking is finalized.</li>
              <li>For hourly service, a minimum booking time may apply depending on vehicle type.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>2. Payment Terms</h2>
            <ul>
              <li>Full payment is due at the time of booking unless otherwise agreed.</li>
              <li>We accept all major credit cards, business checks, and electronic transfers.</li>
              <li>Invoices must be paid within 10 days of receipt, unless otherwise arranged.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>3. Cancellation Policy</h2>
            <ul>
              <li><strong>Sedans/SUVs:</strong> Free cancellation up to 12 hours before the scheduled pickup time.</li>
              <li><strong>Sprinters/Limousines:</strong> 24-hour notice required for full refund.</li>
              <li>Cancellations made after the cutoff time are subject to full charge.</li>
              <li>No-shows will be charged the full fare.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>4. Waiting Time and Delays</h2>
            <ul>
              <li>Airport pickups include a 45-minute grace period after flight arrival.</li>
              <li>Non-airport pickups include a 15-minute grace period.</li>
              <li>After grace period, waiting time will be charged in 15-minute increments.</li>
              <li>Trust Luxury Transportation is not responsible for delays caused by weather or unforeseen circumstances.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>5. Passenger Conduct</h2>
            <ul>
              <li>Smoking and drug use are strictly prohibited in all vehicles.</li>
              <li>Any damage to the vehicle caused by passengers will be billed to the client.</li>
              <li>The chauffeur reserves the right to refuse service to anyone acting in an unsafe or inappropriate manner.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>6. Liability</h2>
            <ul>
              <li>Trust Luxury Transportation is not responsible for lost, stolen, or damaged items left in the vehicle.</li>
              <li>We are insured and licensed to operate in Maryland, Virginia, and Washington D.C.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>7. Vehicle Substitution</h2>
            <ul>
              <li>We reserve the right to substitute vehicles of equal or higher value in the event of mechanical issues or scheduling conflicts.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>8. Special Requests</h2>
            <ul>
              <li>Any special accommodations such as child seats or additional stops must be requested in advance and may incur additional fees.</li>
            </ul>
          </section>

          <section class="terms-block">
            <h2>9. Privacy</h2>
            <ul>
              <li>All client information is kept strictly confidential and will not be shared with any third parties.</li>
            </ul>
          </section>

          <div class="mt-5 pt-4" style="border-top: 1px solid rgba(201,162,39,0.25);">
            <p class="text-muted-lux mb-3">Questions about these terms? Contact us anytime.</p>
            <div class="d-flex flex-wrap gap-3">
              <a href="contact.php" class="btn-outline-lux">Contact Us</a>
              <a href="book.php" class="btn-gold">Book a Ride</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

<style>
.terms-doc h2 {
  font-family: var(--font-display);
  font-size: 1.55rem;
  color: var(--ink);
  margin-bottom: 0.85rem;
}
.terms-block {
  margin-bottom: 2.25rem;
  padding-bottom: 1.75rem;
  border-bottom: 1px solid rgba(201, 162, 39, 0.18);
}
.terms-block:last-of-type {
  border-bottom: none;
}
.terms-doc ul {
  margin: 0;
  padding-left: 1.15rem;
  color: var(--muted);
}
.terms-doc li {
  margin-bottom: 0.55rem;
  line-height: 1.65;
}
.terms-doc li strong {
  color: var(--ink-soft);
}
</style>

<?php require __DIR__ . '/includes/footer.php'; ?>
