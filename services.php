<?php
$page_title = 'Services';
$page_description = 'Diplomatic, corporate, private aviation, meetings & events, and leisure transportation across Washington D.C., Maryland, and Virginia.';
$nav_over_dark = true;
require __DIR__ . '/includes/header.php';

$services = [
  [
    'id' => 'diplomatic',
    'key' => 'service_diplomatic',
    'title' => 'Diplomatic Transportation Services',
    'text' => 'Maximize the impact of your next delegation visit with seamless, secure transportation tailored to your needs.',
    'fallback' => 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=1200&q=80',
  ],
  [
    'id' => 'meetings',
    'key' => 'service_meetings',
    'title' => 'Meeting & Events',
    'text' => 'Move your group safely and comfortably with our spacious, luxury vehicles designed for corporate teams, families, or special occasions.',
    'fallback' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1200&q=80',
  ],
  [
    'id' => 'aviation',
    'key' => 'service_airport',
    'title' => 'Private Aviation & Airport Services',
    'text' => 'Stress-free pickups and drop-offs to all major airports including DCA, IAD, and BWI. Flight-tracking ensures on-time service, even with early arrivals or delays.',
    'fallback' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1200&q=80',
  ],
  [
    'id' => 'leisure',
    'key' => 'service_leisure',
    'title' => 'Leisure & Entertainment Travel',
    'text' => 'Enjoy comfortable travel between cities with our private chauffeur-driven rides — ideal for business trips or personal journeys.',
    'fallback' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=1200&q=80',
  ],
  [
    'id' => 'corporate',
    'key' => 'service_corporate',
    'title' => 'Corporate Transportation Services',
    'text' => 'Designed for executives and professionals who demand timeliness, discretion, and a polished ride. Ideal for board meetings, client entertainment, roadshows, and executive travel across the DC metro.',
    'fallback' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80',
  ],
];
?>

<section class="page-hero">
  <div class="page-hero__bg" style="<?= site_img_style('services_hero', 'https://images.unsplash.com/photo-1485291571150-772bcfc10da5?auto=format&fit=crop&w=1920&q=80') ?>"></div>
  <div class="page-hero__overlay"></div>
  <div class="page-hero__content">
    <div class="container">
      <div class="page-hero__panel reveal">
        <p class="eyebrow">What We Offer</p>
        <h1>Five premium services. One trusted standard.</h1>
        <hr class="gold-rule">
        <p class="page-hero__lead">Diplomatic, corporate, aviation, meetings, and leisure — fully coordinated.</p>
      </div>
    </div>
  </div>
</section>

<section class="section-sm bg-cream">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 reveal">
        <p class="eyebrow">DC Metro Coverage</p>
        <h2 class="display-section">Services designed around your itinerary</h2>
        <hr class="gold-rule mx-auto">
        <p class="text-muted-lux mb-0">From embassy delegations to executive calendars and airport runs — we keep every transfer on time and first-class.</p>
      </div>
    </div>
  </div>
</section>

<?php foreach ($services as $i => $s): ?>
<section id="<?= $s['id'] ?>" class="section <?= $i % 2 === 0 ? 'bg-pearl' : 'bg-champagne texture-dot' ?>">
  <div class="container">
    <div class="row g-5 align-items-center <?= $i % 2 ? 'flex-lg-row-reverse' : '' ?>">
      <div class="col-lg-6 reveal">
        <div class="split-media" style="<?= site_img_style($s['key'], $s['fallback'], 'min-height: 400px;') ?>"></div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="eyebrow">Service 0<?= $i + 1 ?></p>
        <h2 class="display-section" style="font-size: clamp(2rem, 3.5vw, 2.8rem);"><?= htmlspecialchars($s['title']) ?></h2>
        <hr class="gold-rule">
        <p class="text-muted-lux"><?= htmlspecialchars($s['text']) ?></p>
        <a href="book.php?service=<?= urlencode($s['title']) ?>" class="btn-gold mt-2">Book Now</a>
      </div>
    </div>
  </div>
</section>
<?php endforeach; ?>

<section class="section cta-band" style="background-image: linear-gradient(120deg, rgba(28, 22, 16, 0.88), rgba(28, 22, 16, 0.55)), url('<?= htmlspecialchars(site_img('cta_band', 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1800&q=80')) ?>');">
  <div class="container text-center reveal">
    <p class="eyebrow" style="color: var(--gold-bright);">Free Consultation</p>
    <h2 class="display-section mb-3">Let’s plan your next transfer</h2>
    <p class="mx-auto mb-4" style="max-width: 34rem; color: rgba(255,252,247,0.8);">Share your schedule and preferences — we’ll recommend the right vehicle and chauffeur for a flawless experience.</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="book.php" class="btn-gold">Book Online</a>
      <a href="tel:<?= $site_phone_raw ?>" class="btn-outline-lux btn-outline-light"><?= $site_phone ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
