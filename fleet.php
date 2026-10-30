<?php
$page_title = 'Our Fleet';
$page_description = 'Explore the Trust Luxury Transportation fleet — luxury sedans, executive SUVs, sprinter vans, stretch limos, mini buses, and motor coaches.';
$nav_over_dark = true;
require __DIR__ . '/includes/header.php';

$fleet = [
  [
    'name' => 'Luxury Sedan',
    'passengers' => '2–3 Passengers',
    'luggage' => '4 Suitcases',
    'blurb' => 'Sleek and discreet — ideal for executives, couples, and VIP airport arrivals who prefer a refined, private cabin.',
    'img' => site_img('fleet_sedan', 'https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=1200&q=80'),
  ],
  [
    'name' => 'SUV Executive',
    'passengers' => '6 Passengers',
    'luggage' => '6 Suitcases',
    'blurb' => 'Commanding presence with generous space. Perfect for small groups, client entertainment, and all-weather comfort.',
    'img' => site_img('fleet_suv', 'https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?auto=format&fit=crop&w=1200&q=80'),
  ],
  [
    'name' => 'Sprinter Van',
    'passengers' => '10–15 Passengers',
    'luggage' => '15 Suitcases',
    'blurb' => 'Elevated group travel with lounge-like seating — conferences, wedding parties, and corporate shuttles.',
    'img' => site_img('fleet_sprinter', 'https://images.unsplash.com/photo-1527786356703-4b100091cd2c?auto=format&fit=crop&w=1200&q=80'),
  ],
  [
    'name' => 'Stretch Limo',
    'passengers' => '6–10 Passengers',
    'luggage' => '10 Suitcases',
    'blurb' => 'Celebrate in classic style. Weddings, nights out, and milestone moments that deserve a grand entrance.',
    'img' => site_img('fleet_limo', 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1200&q=80'),
  ],
  [
    'name' => 'Mini Bus',
    'passengers' => '20–30 Passengers',
    'luggage' => '30 Suitcases',
    'blurb' => 'Keep larger parties together. Smooth, comfortable group movement for tours, events, and team outings.',
    'img' => site_img('fleet_minibus', 'https://images.unsplash.com/photo-1570125909232-eb263c188f7e?auto=format&fit=crop&w=1200&q=80'),
  ],
  [
    'name' => 'Motor Coaches',
    'passengers' => '40–56 Passengers',
    'luggage' => '56 Suitcases',
    'blurb' => 'Full-scale charter comfort for corporate retreats, sports travel, and city-to-city group itineraries.',
    'img' => site_img('fleet_coach', 'https://images.unsplash.com/photo-1544620341-1adc1baa5c40?auto=format&fit=crop&w=1200&q=80'),
  ],
];
?>

<section class="page-hero">
  <div class="page-hero__bg" style="<?= site_img_style('fleet_hero', 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1920&q=80') ?>"></div>
  <div class="page-hero__overlay"></div>
  <div class="page-hero__content">
    <div class="container">
      <div class="page-hero__panel reveal">
        <p class="eyebrow">Top Class Fleet</p>
        <h1>Meticulously maintained. Distinctly luxurious.</h1>
        <hr class="gold-rule">
        <p class="page-hero__lead">From luxury sedans to motor coaches — a vehicle for every occasion.</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-pearl">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8 reveal">
        <p class="eyebrow">Choose Your Ride</p>
        <h2 class="display-section">A vehicle for every occasion</h2>
        <hr class="gold-rule mx-auto">
        <p class="text-muted-lux">From luxury sedans to spacious motor coaches, our selection ensures comfort and style. Every vehicle is equipped with modern safety technology and premium amenities.</p>
      </div>
    </div>

    <div class="row g-4">
      <?php foreach ($fleet as $i => $v): ?>
      <div class="col-md-6 col-xl-4 reveal<?= ($i % 3) ? ' reveal-delay-' . ($i % 3) : '' ?>">
        <article class="fleet-item h-100">
          <div class="fleet-item__img" style="background-image: url('<?= $v['img'] ?>');"></div>
          <div class="fleet-item__body">
            <span class="pill-gold mb-2">Available 24/7</span>
            <h3><?= htmlspecialchars($v['name']) ?></h3>
            <div class="fleet-meta">
              <span><i class="bi bi-people"></i> <?= $v['passengers'] ?></span>
              <span><i class="bi bi-suitcase-lg"></i> <?= $v['luggage'] ?></span>
            </div>
            <p class="text-muted-lux" style="font-size: 0.92rem;"><?= htmlspecialchars($v['blurb']) ?></p>
            <a href="book.php?vehicle=<?= urlencode($v['name']) ?>" class="btn-gold w-100 mt-2">Book Now</a>
          </div>
        </article>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section-sm bg-cream">
  <div class="container">
    <div class="promise-row">
      <div class="promise-item reveal">
        <i class="bi bi-clock-history"></i>
        <h3>24/7 Availability</h3>
        <p>Call us anytime: <?= $site_phone ?></p>
      </div>
      <div class="promise-item reveal reveal-delay-1">
        <i class="bi bi-check2-circle"></i>
        <h3>On-Time, Every Time</h3>
        <p>We value your time with punctual pickups and drop-offs.</p>
      </div>
      <div class="promise-item reveal reveal-delay-2">
        <i class="bi bi-gem"></i>
        <h3>Luxury Standard</h3>
        <p>Premium vehicles for a truly first-class experience.</p>
      </div>
    </div>
  </div>
</section>

<section class="section cta-band" style="background-image: linear-gradient(120deg, rgba(28, 22, 16, 0.88), rgba(28, 22, 16, 0.55)), url('<?= htmlspecialchars(site_img('cta_band', 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1800&q=80')) ?>');">
  <div class="container text-center reveal">
    <p class="eyebrow" style="color: var(--gold-bright);">Need a Recommendation?</p>
    <h2 class="display-section mb-3">Not sure which vehicle fits?</h2>
    <p class="mx-auto mb-4" style="max-width: 34rem; color: rgba(255,252,247,0.8);">Tell us your passenger count, luggage, and destination — we’ll match you with the perfect ride.</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="book.php" class="btn-gold">Request a Quote</a>
      <a href="tel:<?= $site_phone_raw ?>" class="btn-outline-lux btn-outline-light"><?= $site_phone ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
