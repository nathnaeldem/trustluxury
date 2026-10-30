<?php
$page_title = 'Home';
$page_description = 'Trust Luxury Transportation — premier chauffeur and luxury fleet service across Northern VA, Washington D.C., and Maryland. Available 24/7.';
$nav_over_dark = true;
require __DIR__ . '/includes/header.php';
?>

<!-- Video Hero -->
<section class="hero-video">
  <div class="hero-video__media">
    <video
      id="heroVideo"
      class="hero-video__el"
      autoplay
      muted
      defaultMuted
      loop
      playsinline
      webkit-playsinline="true"
      x5-playsinline="true"
      x5-video-player-type="h5"
      preload="auto"
      disablepictureinpicture
      disableremoteplayback
      poster="<?= htmlspecialchars(site_img('home_poster', 'assets/images/capitol-dc.jpg')) ?>"
    >
      <source src="assets/videos/videoplayback.mp4" type="video/mp4">
    </video>
  </div>
  <div class="hero-video__overlay"></div>
  <div class="hero-video__content">
    <div class="container">
      <p class="eyebrow eyebrow-coral">Since 2014</p>
      <h1 class="hero-brand">Trust <em>Luxury</em><br>Transportation</h1>
      <p class="hero-region">In Washington DC, Maryland and Virginia.</p>
      <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="book.php" class="btn-gold">Book Your Ride</a>
        <a href="fleet.php" class="btn-outline-lux btn-outline-light">Explore Fleet</a>
      </div>
    </div>
  </div>
  <div class="hero-scroll" aria-hidden="true">
    <span>Scroll</span>
    <i class="bi bi-chevron-down"></i>
  </div>
</section>

<!-- Promises -->
<section class="bg-cream">
  <div class="container">
    <div class="promise-row">
      <div class="promise-item reveal">
        <i class="bi bi-clock-history"></i>
        <h3>24/7 Availability</h3>
        <p>We operate around the clock so you’re never left waiting. Call us anytime.</p>
      </div>
      <div class="promise-item reveal reveal-delay-1">
        <i class="bi bi-geo-alt"></i>
        <h3>On-Time, Every Time</h3>
        <p>Punctuality is our promise. Timely pickups and drop-offs, every ride.</p>
      </div>
      <div class="promise-item reveal reveal-delay-2">
        <i class="bi bi-stars"></i>
        <h3>Luxury Fleet</h3>
        <p>Premium vehicles maintained to exacting standards for a first-class experience.</p>
      </div>
    </div>
  </div>
</section>

<!-- Intro -->
<section class="section bg-pearl">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal">
        <div class="split-media" style="<?= site_img_style('home_intro', 'https://images.unsplash.com/photo-1563720360172-67b8f3dce741?auto=format&fit=crop&w=1200&q=80') ?>"></div>
      </div>
      <div class="col-lg-6 reveal reveal-delay-1">
        <p class="eyebrow">Who We Are</p>
        <h2 class="display-section">Elevated travel for those who expect more</h2>
        <hr class="gold-rule">
        <p class="text-muted-lux">Trust Transportation offers chauffeur services for families and business professionals across Northern VA, Washington D.C., and Maryland. We go beyond ride-share and traditional taxis with personalized chauffeurs and luxury vehicles.</p>
        <p class="text-muted-lux">Regardless of your itinerary, we coordinate every transportation detail so you can stay on schedule — and arrive composed.</p>
        <a href="about.php" class="btn-outline-lux mt-2">Our Story</a>
      </div>
    </div>
  </div>
</section>

<!-- Trusted Partners Marquee — logos managed in Admin → Site Images → Partners -->
<?php
$partners = [
  [
    'name' => 'Air Sprint',
    'key' => 'partner_air_sprint',
    'url' => 'https://www.airsprint.com/',
  ],
  [
    'name' => 'Algeria Embassy',
    'key' => 'partner_algeria_embassy',
    'url' => 'https://embwashington.mfa.gov.dz/',
  ],
  [
    'name' => 'Ethiopian Embassy',
    'key' => 'partner_ethiopian_embassy',
    'url' => 'https://ethiopianembassy.org/',
  ],
  [
    'name' => 'IGAD',
    'key' => 'partner_igad',
    'url' => 'https://igad.int/',
  ],
  [
    'name' => 'Ethiopian Airlines',
    'key' => 'partner_ethiopian_airlines',
    'url' => 'https://www.ethiopianairlines.com/',
  ],
];
$partner_placeholder = 'assets/images/partners/placeholder.svg';
?>
<style>
  /* Critical partners styles (guaranteed on desktop + mobile) */
  .clients-section { overflow: hidden; }
  .partners-marquee { width: 100%; padding: .5rem 0; }
  .partners-marquee__viewport {
    width: 100%;
    overflow: hidden;
    -webkit-mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
    mask-image: linear-gradient(90deg, transparent, #000 6%, #000 94%, transparent);
  }
  .partners-marquee__track {
    display: flex !important;
    flex-direction: row !important;
    flex-wrap: nowrap !important;
    align-items: center !important;
    gap: 1.25rem;
    width: max-content !important;
    will-change: transform;
  }
  .partner-logo {
    flex: 0 0 220px !important;
    width: 220px !important;
    min-width: 220px !important;
    height: 96px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 1rem 1.25rem !important;
    background: #fff !important;
    border: 1px solid rgba(201, 162, 39, .3) !important;
    border-top: 3px solid #c9a227 !important;
    box-shadow: 0 10px 28px rgba(28, 22, 16, .06);
    box-sizing: border-box !important;
    position: relative;
    text-decoration: none !important;
    color: inherit;
    transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
  }
  .partner-logo:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 32px rgba(201, 162, 39, .22);
    border-color: #c9a227 !important;
  }
  .partner-logo:nth-child(3n) { border-top-color: #e85d3b !important; }
  .partner-logo:nth-child(3n+2) { border-top-color: #1f8a7a !important; }
  .partner-logo img {
    width: 160px !important;
    height: 52px !important;
    object-fit: contain !important;
  }
  .partner-logo.is-placeholder img { opacity: .55; }
  .partner-logo__caption {
    position: absolute;
    left: 8px;
    right: 8px;
    bottom: 6px;
    font-size: .62rem;
    letter-spacing: .06em;
    text-transform: uppercase;
    text-align: center;
    color: #7a6e5c;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
<section class="section-sm bg-sand clients-section">
  <div class="container">
    <div class="text-center mb-4 reveal">
      <p class="eyebrow">Trusted By</p>
      <h2 class="display-section" style="font-size: clamp(1.8rem, 3vw, 2.4rem);">Clients who rely on Trust Luxury</h2>
      <hr class="gold-rule mx-auto">
    </div>
  </div>
  <div class="partners-marquee" id="partnersMarquee" aria-label="Trusted partners">
    <div class="partners-marquee__viewport">
      <div class="partners-marquee__track" id="partnersTrack">
        <?php foreach ($partners as $p):
          $logo = site_img($p['key'], $partner_placeholder);
          $is_placeholder = ($logo === '' || str_contains($logo, 'placeholder.svg'));
        ?>
          <a
            class="partner-logo<?= $is_placeholder ? ' is-placeholder' : '' ?>"
            href="<?= htmlspecialchars($p['url']) ?>"
            target="_blank"
            rel="noopener noreferrer"
            title="Visit <?= htmlspecialchars($p['name']) ?>"
            aria-label="Visit <?= htmlspecialchars($p['name']) ?> website"
          >
            <img
              src="<?= htmlspecialchars($logo) ?>"
              alt="<?= htmlspecialchars($p['name']) ?>"
              width="160"
              height="52"
              loading="eager"
            >
            <?php if ($is_placeholder): ?>
              <span class="partner-logo__caption"><?= htmlspecialchars($p['name']) ?></span>
            <?php endif; ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Featured Services -->
<?php
$home_services = [
  [
    'title' => 'Diplomatic Transportation Services',
    'text' => 'Maximize the impact of your next delegation visit with seamless, secure transportation tailored to your needs.',
    'key' => 'home_service_diplomatic',
    'fallback' => 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=1000&q=80',
    'badge' => 'coral',
  ],
  [
    'title' => 'Meeting & Events',
    'text' => 'Move your group safely and comfortably with our spacious, luxury vehicles designed for corporate teams, families, or special occasions.',
    'key' => 'home_service_meetings',
    'fallback' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1000&q=80',
    'badge' => 'gold',
  ],
  [
    'title' => 'Private Aviation & Airport Services',
    'text' => 'Stress-free pickups and drop-offs to all major airports including DCA, IAD, and BWI. Flight-tracking ensures on-time service, even with early arrivals or delays.',
    'key' => 'home_service_airport',
    'fallback' => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1000&q=80',
    'badge' => 'teal',
  ],
  [
    'title' => 'Leisure & Entertainment Travel',
    'text' => 'Enjoy comfortable travel between cities with our private chauffeur-driven rides — ideal for business trips or personal journeys.',
    'key' => 'home_service_leisure',
    'fallback' => 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=1000&q=80',
    'badge' => 'coral',
  ],
  [
    'title' => 'Corporate Transportation Services',
    'text' => 'Designed for executives and professionals who demand timeliness, discretion, and a polished ride. Ideal for board meetings, client entertainment, and executive travel.',
    'key' => 'home_service_corporate',
    'fallback' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1000&q=80',
    'badge' => 'gold',
  ],
];
?>
<section class="section bg-champagne texture-dot">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 reveal">
        <p class="eyebrow">Our Services</p>
        <h2 class="display-section">Premium transportation for every occasion</h2>
        <hr class="gold-rule">
        <p class="text-muted-lux mb-0">Diplomatic, corporate, private aviation, meetings &amp; events, and leisure travel — delivered with discretion across the DC metro.</p>
      </div>
    </div>
    <div class="row g-3">
      <?php foreach ($home_services as $i => $s): ?>
      <div class="col-md-6 col-xl-3 reveal<?= $i ? ' reveal-delay-' . min($i, 3) : '' ?>">
        <a href="book.php?service=<?= urlencode($s['title']) ?>" class="service-tile">
          <div class="service-tile__img" style="<?= site_img_style($s['key'], $s['fallback']) ?>"></div>
          <div class="service-tile__shade"></div>
          <span class="service-tile__badge service-tile__badge--<?= $s['badge'] ?>">Premium</span>
          <div class="service-tile__body">
            <h3><?= htmlspecialchars($s['title']) ?></h3>
            <p><?= htmlspecialchars($s['text']) ?></p>
            <span class="link-gold">Book Now →</span>
          </div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5 reveal">
      <a href="services.php" class="btn-outline-lux">View All Services</a>
    </div>
  </div>
</section>

<!-- Fleet Preview -->
<section class="section bg-pearl">
  <div class="container">
    <div class="row align-items-end mb-5">
      <div class="col-lg-7 reveal">
        <p class="eyebrow">The Fleet</p>
        <h2 class="display-section">Vehicles for every occasion</h2>
        <hr class="gold-rule">
      </div>
      <div class="col-lg-5 text-lg-end reveal reveal-delay-1">
        <a href="fleet.php" class="btn-gold">Full Fleet</a>
      </div>
    </div>
    <div class="row g-4">
      <?php
      $preview_fleet = [
        ['Luxury Sedan', '2–3 Passengers', '4 Suitcases', site_img('home_fleet_sedan', 'https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=900&q=80')],
        ['SUV Executive', '6 Passengers', '6 Suitcases', site_img('home_fleet_suv', 'https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?auto=format&fit=crop&w=900&q=80')],
        ['Sprinter Van', '10–15 Passengers', '15 Suitcases', site_img('home_fleet_sprinter', 'https://images.unsplash.com/photo-1527786356703-4b100091cd2c?auto=format&fit=crop&w=900&q=80')],
      ];
      foreach ($preview_fleet as $i => $v):
      ?>
      <div class="col-md-4 reveal<?= $i ? ' reveal-delay-' . $i : '' ?>">
        <article class="fleet-item">
          <div class="fleet-item__img" style="background-image: url('<?= $v[3] ?>');"></div>
          <div class="fleet-item__body">
            <h3><?= $v[0] ?></h3>
            <div class="fleet-meta">
              <span><i class="bi bi-people"></i> <?= $v[1] ?></span>
              <span><i class="bi bi-suitcase-lg"></i> <?= $v[2] ?></span>
            </div>
            <a href="book.php" class="btn-outline-lux w-100">Book Now</a>
          </div>
        </article>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Stats -->
<section class="section-sm bg-sand">
  <div class="container">
    <div class="row justify-content-center text-center mb-4">
      <div class="col-lg-8 reveal">
        <p class="eyebrow">Only the Best</p>
        <h2 class="display-section">Over 10 years of helping clients arrive on time and in style</h2>
      </div>
    </div>
    <div class="row g-4 mt-2">
      <div class="col-6 col-md-3 reveal">
        <div class="stat-block">
          <span class="num">10<span>+</span></span>
          <div class="label">Years Experience</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal reveal-delay-1">
        <div class="stat-block">
          <span class="num">157<span>k</span></span>
          <div class="label">Satisfied Clients</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal reveal-delay-2">
        <div class="stat-block">
          <span class="num">24<span>/7</span></span>
          <div class="label">Always Available</div>
        </div>
      </div>
      <div class="col-6 col-md-3 reveal reveal-delay-3">
        <div class="stat-block">
          <span class="num">6<span>+</span></span>
          <div class="label">Luxury Vehicles</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section cta-band" style="background-image: linear-gradient(120deg, rgba(28, 22, 16, 0.88), rgba(28, 22, 16, 0.55)), url('<?= htmlspecialchars(site_img('cta_band', 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1800&q=80')) ?>');">
  <div class="container text-center reveal">
    <p class="eyebrow" style="color: var(--gold-bright);">Free Consultation</p>
    <h2 class="display-section mb-3">Book your luxury car service now</h2>
    <p class="mx-auto mb-4" style="max-width: 36rem; color: rgba(255,252,247,0.8);">Tell us where you’re going — we’ll handle the rest with a professionally trained chauffeur and a meticulously prepared vehicle.</p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="book.php" class="btn-gold">Book Online</a>
      <a href="tel:<?= $site_phone_raw ?>" class="btn-outline-lux btn-outline-light"><?= $site_phone ?></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
