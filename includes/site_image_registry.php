<?php
/**
 * Master list of every CMS-managed image on the site.
 * Format: [image_key, label, page_group, default_file_path]
 */
function site_image_registry(): array
{
    return [
        // Home
        ['home_poster', 'Home — Video hero poster', 'Home', 'assets/images/capitol-dc.jpg'],
        ['home_intro', 'Home — “Who We Are” image', 'Home', 'https://images.unsplash.com/photo-1563720360172-67b8f3dce741?auto=format&fit=crop&w=1200&q=80'],
        ['home_service_diplomatic', 'Home — Diplomatic Transportation tile', 'Home', 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=1000&q=80'],
        ['home_service_meetings', 'Home — Meeting & Events tile', 'Home', 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1000&q=80'],
        ['home_service_airport', 'Home — Private Aviation & Airport tile', 'Home', 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1000&q=80'],
        ['home_service_leisure', 'Home — Leisure & Entertainment tile', 'Home', 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=1000&q=80'],
        ['home_service_corporate', 'Home — Corporate Transportation tile', 'Home', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1000&q=80'],
        ['home_fleet_sedan', 'Home — Fleet preview (Sedan)', 'Home', 'https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=900&q=80'],
        ['home_fleet_suv', 'Home — Fleet preview (SUV)', 'Home', 'https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?auto=format&fit=crop&w=900&q=80'],
        ['home_fleet_sprinter', 'Home — Fleet preview (Sprinter)', 'Home', 'https://images.unsplash.com/photo-1527786356703-4b100091cd2c?auto=format&fit=crop&w=900&q=80'],

        // Services (matches services.php)
        ['services_hero', 'Services — Page hero background', 'Services', 'https://images.unsplash.com/photo-1485291571150-772bcfc10da5?auto=format&fit=crop&w=1920&q=80'],
        ['service_diplomatic', 'Services — Diplomatic Transportation section', 'Services', 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=1200&q=80'],
        ['service_meetings', 'Services — Meeting & Events section', 'Services', 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=1200&q=80'],
        ['service_airport', 'Services — Private Aviation & Airport section', 'Services', 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&w=1200&q=80'],
        ['service_leisure', 'Services — Leisure & Entertainment section', 'Services', 'https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?auto=format&fit=crop&w=1200&q=80'],
        ['service_corporate', 'Services — Corporate Transportation section', 'Services', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1200&q=80'],

        // About
        ['about_hero', 'About — Page hero background', 'About', 'https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?auto=format&fit=crop&w=1920&q=80'],
        ['about_split_1', 'About — Story section image', 'About', 'https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1200&q=80'],
        ['about_split_2', 'About — Commitment section image', 'About', 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1000&q=80'],

        // Fleet
        ['fleet_hero', 'Fleet — Page hero background', 'Fleet', 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=1920&q=80'],
        ['fleet_sedan', 'Fleet — Luxury Sedan card', 'Fleet', 'https://images.unsplash.com/photo-1563720223185-11003d516935?auto=format&fit=crop&w=1200&q=80'],
        ['fleet_suv', 'Fleet — SUV Executive card', 'Fleet', 'https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?auto=format&fit=crop&w=1200&q=80'],
        ['fleet_sprinter', 'Fleet — Sprinter Van card', 'Fleet', 'https://images.unsplash.com/photo-1527786356703-4b100091cd2c?auto=format&fit=crop&w=1200&q=80'],
        ['fleet_limo', 'Fleet — Stretch Limo card', 'Fleet', 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1200&q=80'],
        ['fleet_minibus', 'Fleet — Mini Bus card', 'Fleet', 'https://images.unsplash.com/photo-1570125909232-eb263c188f7e?auto=format&fit=crop&w=1200&q=80'],
        ['fleet_coach', 'Fleet — Motor Coaches card', 'Fleet', 'https://images.unsplash.com/photo-1544620341-1adc1baa5c40?auto=format&fit=crop&w=1200&q=80'],

        // Contact & Book
        ['contact_hero', 'Contact — Page hero background', 'Contact', 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=1920&q=80'],
        ['book_hero', 'Book — Page hero background', 'Book', 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?auto=format&fit=crop&w=1920&q=80'],

        // Global
        ['cta_band', 'Global — CTA band background (all pages)', 'Global', 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=1800&q=80'],

        // Trusted By — partner logos (upload real logos in Admin → Partners)
        ['partner_air_sprint', 'Partner logo — Air Sprint', 'Partners', 'assets/images/partners/placeholder.svg'],
        ['partner_algeria_embassy', 'Partner logo — Algeria Embassy', 'Partners', 'assets/images/partners/placeholder.svg'],
        ['partner_ethiopian_embassy', 'Partner logo — Ethiopian Embassy', 'Partners', 'assets/images/partners/placeholder.svg'],
        ['partner_igad', 'Partner logo — IGAD', 'Partners', 'assets/images/partners/placeholder.svg'],
        ['partner_ethiopian_airlines', 'Partner logo — Ethiopian Airlines', 'Partners', 'assets/images/partners/placeholder.svg'],
    ];
}

/**
 * Insert missing slots; refresh labels/groups. Does not overwrite existing file_path.
 */
function sync_site_image_registry(): int
{
    require_once __DIR__ . '/db.php';
    $added = 0;
    $ins = db()->prepare(
        'INSERT INTO site_images (image_key, label, page_group, file_path) VALUES (?, ?, ?, ?)
         ON DUPLICATE KEY UPDATE label = VALUES(label), page_group = VALUES(page_group)'
    );
    foreach (site_image_registry() as $row) {
        $ins->execute($row);
        if ($ins->rowCount() === 1) {
            $added++;
        }
    }
    return $added;
}
