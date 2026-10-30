<?php
/**
 * Trust Luxury Transportation — site config
 */
$site_name    = 'Trust Luxury Transportation';
$site_tagline = 'Premier chauffeur service across Northern Virginia, Washington D.C. & Maryland';
$site_phone   = '+1 (703) 868-1811';
$site_phone_raw = '17038681811';
$site_email   = 'contact@trustluxurytransportation.com';
$site_address = '7918 Jones Branch Dr, McLean, Virginia 22102, US';
$site_year    = date('Y');

$site_social = [
  ['label' => 'Instagram', 'icon' => 'bi-instagram', 'url' => 'https://www.instagram.com/trustluxurytransportation'],
  ['label' => 'Facebook',  'icon' => 'bi-facebook',  'url' => 'https://www.facebook.com/trustluxurytransportation'],
  ['label' => 'X',         'icon' => 'bi-twitter-x', 'url' => 'https://x.com/trustluxury_'],
  ['label' => 'LinkedIn',  'icon' => 'bi-linkedin',  'url' => 'https://www.linkedin.com/company/trustluxurytransportation'],
  ['label' => 'TikTok',    'icon' => 'bi-tiktok',    'url' => 'https://www.tiktok.com/@trustluxurytransport'],
  ['label' => 'YouTube',   'icon' => 'bi-youtube',   'url' => 'https://www.youtube.com/@trustluxurytransportation0'],
];

$current_page = basename($_SERVER['PHP_SELF'], '.php');
if ($current_page === 'index') {
    $current_page = 'home';
}

function is_active($page) {
    global $current_page;
    return $current_page === $page ? 'active' : '';
}
