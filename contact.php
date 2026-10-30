<?php
$page_title = 'Contact';
$page_description = 'Contact Trust Luxury Transportation in McLean, VA. Call +1 (703) 868-1811 or email contact@trustluxurytransportation.com.';
$nav_over_dark = true;

$sent = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $phone   = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $email === '' || $message === '') {
        $error = 'Please fill in your name, email, and message.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        // In production, wire this to mail() or a CRM. For now we confirm receipt.
        $sent = true;
    }
}

require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="page-hero__bg" style="<?= site_img_style('contact_hero', 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1920&q=80') ?>"></div>
  <div class="page-hero__overlay"></div>
  <div class="page-hero__content">
    <div class="container">
      <div class="page-hero__panel reveal">
        <p class="eyebrow">Get in Touch</p>
        <h1>We’re here around the clock</h1>
        <hr class="gold-rule">
        <p class="page-hero__lead">Reach our team anytime — McLean, VA · Available 24/7.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-pearl">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5 reveal">
        <p class="eyebrow">Contact Info</p>
        <h2 class="display-section" style="font-size: clamp(2rem, 3.5vw, 2.8rem);">Speak with our team</h2>
        <hr class="gold-rule">
        <p class="text-muted-lux mb-4">Questions about a transfer, fleet recommendation, or corporate account? Reach out anytime — we operate 24/7.</p>

        <div class="contact-detail">
          <i class="bi bi-telephone"></i>
          <div>
            <strong>Phone</strong>
            <a href="tel:<?= $site_phone_raw ?>"><?= $site_phone ?></a>
          </div>
        </div>
        <div class="contact-detail">
          <i class="bi bi-envelope"></i>
          <div>
            <strong>Email</strong>
            <a href="mailto:<?= $site_email ?>"><?= $site_email ?></a>
          </div>
        </div>
        <div class="contact-detail">
          <i class="bi bi-geo-alt"></i>
          <div>
            <strong>Address</strong>
            <span><?= htmlspecialchars($site_address) ?></span>
          </div>
        </div>
        <div class="contact-detail">
          <i class="bi bi-clock"></i>
          <div>
            <strong>Hours</strong>
            <span>Available 24 hours, 7 days a week</span>
          </div>
        </div>
        <div class="mt-4">
          <strong class="d-block mb-2" style="font-family: var(--font-display); font-size: 1.2rem;">Follow us</strong>
          <div class="social-links social-links--light" aria-label="Social media">
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
        </div>
      </div>

      <div class="col-lg-7 reveal reveal-delay-1">
        <div class="contact-panel form-lux">
          <?php if ($sent): ?>
            <div class="alert-success-lux mb-0">
              <strong>Thank you!</strong> Your message has been received. Our team will respond shortly — or call us now at <?= $site_phone ?>.
            </div>
          <?php else: ?>
            <?php if ($error): ?>
              <div class="alert-error-lux mb-4"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <h3 class="mb-4" style="font-size: 1.75rem;">Send a message</h3>
            <form method="post" action="contact.php" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="name">Full Name</label>
                  <input type="text" class="form-control" id="name" name="name" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="phone">Phone</label>
                  <input type="tel" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">
                </div>
                <div class="col-12">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
                </div>
                <div class="col-12">
                  <label class="form-label" for="message">Message</label>
                  <textarea class="form-control" id="message" name="message" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn-gold">Send Message</button>
                </div>
              </div>
            </form>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-sm bg-sand">
  <div class="container">
    <div class="row">
      <div class="col-12 reveal">
        <iframe
          class="map-embed"
          title="Trust Luxury Transportation location"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          src="https://maps.google.com/maps?q=7918%20Jones%20Branch%20Dr%2C%20McLean%2C%20Virginia%2022102&t=&z=14&ie=UTF8&iwloc=&output=embed">
        </iframe>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
