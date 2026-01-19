<?php
/**
 * NeoTechnology Solutions - Theme Functions & Shortcodes
 *
 * @package NeoTechnology_Solutions
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function neotech_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    // Register navigation menus
    register_nav_menus([
        'primary' => __('Primary Menu', 'neotech'),
        'footer'  => __('Footer Menu', 'neotech'),
    ]);

    // Load text domain for translations
    load_theme_textdomain('neotech', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'neotech_setup');

/**
 * Enqueue Scripts & Styles
 */
function neotech_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style(
        'neotech-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'neotech-animations',
        get_template_directory_uri() . '/assets/css/animations.css',
        [],
        '1.0.0'
    );

    // Navigation script
    wp_enqueue_script(
        'neotech-navigation',
        get_template_directory_uri() . '/js/navigation.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );

    // Cookie consent script
    wp_enqueue_script(
        'neotech-cookie-consent',
        get_template_directory_uri() . '/js/cookie-consent.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );

    // Form tools script (copy, print, PDF)
    wp_enqueue_script(
        'neotech-form-tools',
        get_template_directory_uri() . '/js/form-tools.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'neotech_enqueue_scripts');

/**
 * Body Classes
 */
function neotech_body_classes($classes) {
    if (is_rtl()) {
        $classes[] = 'rtl';
    }
    return $classes;
}
add_filter('body_class', 'neotech_body_classes');

/**
 * Helper: SVG Icons
 */
function neotech_get_icon($name) {
    $icons = [
        'arrow-right' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>',
        'arrow-left'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>',
        'check'       => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>',
        'mail'        => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>',
    ];
    return isset($icons[$name]) ? $icons[$name] : '';
}

/* ============================================
   SHORTCODES: Homepage Sections
   ============================================ */

/**
 * Load Shortcodes from external file
 */
require get_template_directory() . '/inc/shortcodes.php';
/* ============================================
   SOCIAL MEDIA SETTINGS & SHORTCODE
   ============================================ */

/**
 * Register Social Media Customizer Settings
 */
function neotech_customize_social($wp_customize) {
    // Section: Social Media
    $wp_customize->add_section('neotech_social_section', [
        'title'       => __('Social Media Links', 'neotech'),
        'description' => __('Add your social media profile URLs here.', 'neotech'),
        'priority'    => 121,
    ]);

    // LinkedIn
    $wp_customize->add_setting('neotech_linkedin', ['sanitize_callback' => 'esc_url_raw']);
    $wp_customize->add_control('neotech_linkedin', [
        'type'     => 'url',
        'label'    => __('LinkedIn URL', 'neotech'),
        'section'  => 'neotech_social_section',
    ]);

    // Twitter / X
    $wp_customize->add_setting('neotech_twitter', ['sanitize_callback' => 'esc_url_raw']);
    $wp_customize->add_control('neotech_twitter', [
        'type'     => 'url',
        'label'    => __('Twitter / X URL', 'neotech'),
        'section'  => 'neotech_social_section',
    ]);

    // YouTube
    $wp_customize->add_setting('neotech_youtube', ['sanitize_callback' => 'esc_url_raw']);
    $wp_customize->add_control('neotech_youtube', [
        'type'     => 'url',
        'label'    => __('YouTube URL', 'neotech'),
        'section'  => 'neotech_social_section',
    ]);
}
add_action('customize_register', 'neotech_customize_social');

/* ============================================
   CUSTOMIZER & TRACKING SCRIPTS
   ============================================ */

/**
 * Register Customizer Settings for Tracking
 */
function neotech_customize_register($wp_customize) {
    // Section: Tracking & Scripts
    $wp_customize->add_section('neotech_tracking_section', [
        'title'       => __('Tracking & Scripts', 'neotech'),
        'description' => __('Add tracking IDs. These will normally be loaded via the Cookie Consent banner for compliance.', 'neotech'),
        'priority'    => 120,
    ]);

    // 1. Google Analytics ID
    $wp_customize->add_setting('neotech_ga_id', ['sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('neotech_ga_id', [
        'type'     => 'text',
        'label'    => __('Google Analytics ID (G-XXXXXXXXXX)', 'neotech'),
        'section'  => 'neotech_tracking_section',
    ]);

    // 2. Google Tag Manager ID
    $wp_customize->add_setting('neotech_gtm_id', ['sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('neotech_gtm_id', [
        'type'     => 'text',
        'label'    => __('Google Tag Manager ID (GTM-XXXXXXX)', 'neotech'),
        'section'  => 'neotech_tracking_section',
    ]);

    // 3. Meta Pixel ID (New)
    $wp_customize->add_setting('neotech_pixel_id', ['sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('neotech_pixel_id', [
        'type'     => 'text',
        'label'    => __('Meta Pixel ID (1234567890)', 'neotech'),
        'section'  => 'neotech_tracking_section',
    ]);

    // 4. Custom Head Scripts (Always loaded)
    $wp_customize->add_setting('neotech_header_scripts', ['sanitize_callback' => 'neotech_sanitize_scripts']);
    $wp_customize->add_control('neotech_header_scripts', [
        'type'     => 'textarea',
        'label'    => __('Custom Header Scripts (Always Loaded)', 'neotech'),
        'description' => __('Scripts essential for the site (e.g., verification tags). NOT for tracking.', 'neotech'),
        'section'  => 'neotech_tracking_section',
    ]);
}
add_action('customize_register', 'neotech_customize_register');

/**
 * Sanitize Scripts
 */
function neotech_sanitize_scripts($input) {
    return $input; 
}

/**
 * Pass IDs to JavaScript (for Cookie Consent)
 */
function neotech_localize_tracking_scripts() {
    $data = [
        'ga_id'    => get_theme_mod('neotech_ga_id'),
        'gtm_id'   => get_theme_mod('neotech_gtm_id'),
        'pixel_id' => get_theme_mod('neotech_pixel_id'),
    ];
    wp_localize_script('neotech-cookie-consent', 'neotechParams', $data);
}
add_action('wp_enqueue_scripts', 'neotech_localize_tracking_scripts', 20);

/**
 * Output Essential Scripts only
 */
function neotech_essential_scripts_head() {
    $header_scripts = get_theme_mod('neotech_header_scripts');
    if ($header_scripts) {
        echo $header_scripts . "\n";
    }
}
add_action('wp_head', 'neotech_essential_scripts_head', 1);

/* ============================================
   SEO OPTIMIZATION - AI RECOMMENDED
   ============================================ */

/**
 * SEO: Custom Title Tag Optimization
 */
function neotech_seo_title($title) {
    $is_rtl = is_rtl();
    $brand = 'NeoTechnology Solutions';

    if (is_front_page()) {
        return $is_rtl
            ? 'نيوتكنولوجي سولوشنز | استشارات تقنية المعلومات الاحترافية | السعودية'
            : 'NeoTechnology Solutions | Professional IT Consulting Services | Cloud, Digital Transformation, Cybersecurity';
    }

    if (is_page('contact')) {
        return $is_rtl
            ? 'تواصل معنا | استشارة مجانية | نيوتكنولوجي سولوشنز'
            : 'Contact Us | Free IT Consultation | NeoTechnology Solutions';
    }

    if (is_page('services')) {
        return $is_rtl
            ? 'خدماتنا | السحابة، التحول الرقمي، الأمن السيبراني | نيوتكنولوجي'
            : 'IT Consulting Services | Cloud Strategy, Digital Transformation, Cybersecurity | NeoTechnology';
    }

    if (is_page('about')) {
        return $is_rtl
            ? 'من نحن | شركة استشارات تقنية معلومات مستقلة | نيوتكنولوجي'
            : 'About Us | Independent IT Consulting Firm | NeoTechnology Solutions';
    }

    return $title;
}
add_filter('pre_get_document_title', 'neotech_seo_title', 10);

/**
 * SEO: Meta Description & Open Graph Tags
 */
function neotech_seo_meta_tags() {
    $is_rtl = is_rtl();
    $site_url = home_url('/');
    $logo_url = get_template_directory_uri() . '/assets/brand/social-square.svg';

    // Default meta descriptions
    $meta_desc_en = 'NeoTechnology Solutions provides expert IT consulting services including cloud strategy, digital transformation, and cybersecurity. Vendor-neutral guidance for businesses. Free discovery call available.';
    $meta_desc_ar = 'نيوتكنولوجي سولوشنز تقدم خدمات استشارات تقنية المعلومات المتخصصة بما في ذلك استراتيجية السحابة والتحول الرقمي والأمن السيبراني. إرشادات محايدة للشركات. مكالمة استكشافية مجانية متاحة.';

    $meta_keywords_en = 'IT consulting, cloud consulting, digital transformation, cybersecurity consulting, IT strategy, cloud migration, enterprise technology, IT advisory, technology consulting, Wyoming IT consultant';
    $meta_keywords_ar = 'استشارات تقنية المعلومات، استشارات السحابة، التحول الرقمي، استشارات الأمن السيبراني، استراتيجية تقنية المعلومات، الترحيل السحابي، تقنية المؤسسات، مستشار تقنية المعلومات';

    // Page-specific descriptions
    if (is_page('contact')) {
        $meta_desc_en = 'Schedule a free discovery call with NeoTechnology Solutions. Get expert IT consulting advice on cloud strategy, digital transformation, and cybersecurity. Response within 1 business day.';
        $meta_desc_ar = 'احجز مكالمة استكشافية مجانية مع نيوتكنولوجي سولوشنز. احصل على استشارات تقنية متخصصة في استراتيجية السحابة والتحول الرقمي والأمن السيبراني. رد خلال يوم عمل واحد.';
    } elseif (is_page('services')) {
        $meta_desc_en = 'Comprehensive IT consulting services: Cloud & Infrastructure Strategy, Digital Transformation, Cybersecurity Consulting. Vendor-neutral expert guidance for your business technology decisions.';
        $meta_desc_ar = 'خدمات استشارات تقنية شاملة: استراتيجية السحابة والبنية التحتية، التحول الرقمي، استشارات الأمن السيبراني. إرشادات خبراء محايدين لقرارات التقنية في عملك.';
    } elseif (is_page('about')) {
        $meta_desc_en = 'NeoTechnology Solutions is an independent IT consulting firm providing vendor-neutral technology guidance. 15+ years experience, 100+ successful projects. Based in Wyoming, USA.';
        $meta_desc_ar = 'نيوتكنولوجي سولوشنز شركة استشارات تقنية مستقلة تقدم إرشادات تقنية محايدة. أكثر من 15 عاماً خبرة، أكثر من 100 مشروع ناجح. مقرها وايومنغ، الولايات المتحدة.';
    }

    $meta_desc = $is_rtl ? $meta_desc_ar : $meta_desc_en;
    $meta_keywords = $is_rtl ? $meta_keywords_ar : $meta_keywords_en;
    $current_url = (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $og_title = wp_get_document_title();

    ?>
    <!-- SEO Meta Tags - AI Optimized -->
    <meta name="description" content="<?php echo esc_attr($meta_desc); ?>">
    <meta name="keywords" content="<?php echo esc_attr($meta_keywords); ?>">
    <meta name="author" content="NeoTechnology Solutions LLC">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url($current_url); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url($current_url); ?>">
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($meta_desc); ?>">
    <meta property="og:image" content="<?php echo esc_url($logo_url); ?>">
    <meta property="og:image:width" content="512">
    <meta property="og:image:height" content="512">
    <meta property="og:site_name" content="NeoTechnology Solutions">
    <meta property="og:locale" content="<?php echo $is_rtl ? 'ar_SA' : 'en_US'; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo esc_url($current_url); ?>">
    <meta name="twitter:title" content="<?php echo esc_attr($og_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($meta_desc); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($logo_url); ?>">

    <!-- Additional SEO Tags -->
    <meta name="geo.region" content="US-WY">
    <meta name="geo.placename" content="Cheyenne, Wyoming">
    <meta name="geo.position" content="41.1400;-104.8202">
    <meta name="ICBM" content="41.1400, -104.8202">

    <!-- Language Alternates for International SEO -->
    <link rel="alternate" hreflang="en" href="<?php echo esc_url($site_url); ?>">
    <link rel="alternate" hreflang="ar" href="<?php echo esc_url($site_url . 'ar/'); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo esc_url($site_url); ?>">
    <?php
}
add_action('wp_head', 'neotech_seo_meta_tags', 2);

/**
 * SEO: Schema.org Structured Data (JSON-LD)
 */
function neotech_schema_markup() {
    $is_rtl = is_rtl();
    $site_url = home_url('/');
    $logo_url = get_template_directory_uri() . '/assets/brand/social-square.svg';

    // Organization Schema
    $organization_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        '@id' => $site_url . '#organization',
        'name' => 'NeoTechnology Solutions LLC',
        'alternateName' => $is_rtl ? 'نيوتكنولوجي سولوشنز' : 'NeoTech Solutions',
        'url' => $site_url,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $logo_url,
            'width' => 400,
            'height' => 400
        ],
        'image' => $logo_url,
        'description' => $is_rtl
            ? 'شركة استشارات تقنية معلومات مستقلة تقدم خدمات استراتيجية السحابة والتحول الرقمي والأمن السيبراني.'
            : 'Independent IT consulting firm providing cloud strategy, digital transformation, and cybersecurity services.',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '1021 E Lincolnway, Suite 8983',
            'addressLocality' => 'Cheyenne',
            'addressRegion' => 'WY',
            'postalCode' => '82001',
            'addressCountry' => 'US'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 41.1400,
            'longitude' => -104.8202
        ],
        'telephone' => '+1-307-507-3999',
        'email' => 'info@neotechnology.solutions',
        'foundingDate' => '2020',
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'United States'],
            ['@type' => 'Country', 'name' => 'Saudi Arabia'],
            ['@type' => 'Country', 'name' => 'United Arab Emirates'],
            ['@type' => 'GeoShape', 'name' => 'Worldwide']
        ],
        'serviceType' => [
            'IT Consulting',
            'Cloud Strategy Consulting',
            'Digital Transformation Consulting',
            'Cybersecurity Consulting',
            'IT Strategy Advisory',
            'Enterprise Architecture',
            'Technology Assessment'
        ],
        'priceRange' => '$$$$',
        'paymentAccepted' => ['Bank Transfer', 'Wire Transfer'],
        'currenciesAccepted' => 'USD',
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'],
                'opens' => '09:00',
                'closes' => '17:00'
            ]
        ],
        'sameAs' => array_filter([
            get_theme_mod('neotech_linkedin'),
            get_theme_mod('neotech_twitter'),
            get_theme_mod('neotech_youtube')
        ]),
        'knowsAbout' => [
            'Cloud Computing',
            'AWS',
            'Microsoft Azure',
            'Google Cloud Platform',
            'Digital Transformation',
            'Cybersecurity',
            'IT Strategy',
            'Enterprise Architecture',
            'Vendor Management',
            'IT Governance'
        ],
        'slogan' => $is_rtl
            ? 'استشارات تقنية المعلومات الاحترافية'
            : 'Professional IT Consulting'
    ];

    // WebSite Schema
    $website_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        '@id' => $site_url . '#website',
        'url' => $site_url,
        'name' => 'NeoTechnology Solutions',
        'description' => $is_rtl
            ? 'استشارات تقنية المعلومات الاحترافية للشركات'
            : 'Professional IT Consulting for Businesses',
        'publisher' => [
            '@id' => $site_url . '#organization'
        ],
        'inLanguage' => $is_rtl ? 'ar-SA' : 'en-US',
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => $site_url . '?s={search_term_string}',
            'query-input' => 'required name=search_term_string'
        ]
    ];

    // Page-specific schemas
    $page_schema = null;

    if (is_front_page()) {
        // Homepage: Add WebPage schema
        $page_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            '@id' => $site_url . '#webpage',
            'url' => $site_url,
            'name' => $is_rtl ? 'نيوتكنولوجي سولوشنز | استشارات تقنية المعلومات' : 'NeoTechnology Solutions | IT Consulting Services',
            'isPartOf' => ['@id' => $site_url . '#website'],
            'about' => ['@id' => $site_url . '#organization'],
            'description' => $is_rtl
                ? 'خدمات استشارات تقنية المعلومات المتخصصة: استراتيجية السحابة، التحول الرقمي، الأمن السيبراني'
                : 'Expert IT consulting services: cloud strategy, digital transformation, cybersecurity consulting',
            'inLanguage' => $is_rtl ? 'ar-SA' : 'en-US'
        ];
    } elseif (is_page('contact')) {
        // Contact page: Add ContactPage schema
        $page_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            '@id' => home_url('/contact/') . '#contactpage',
            'url' => home_url('/contact/'),
            'name' => $is_rtl ? 'تواصل معنا' : 'Contact Us',
            'isPartOf' => ['@id' => $site_url . '#website'],
            'about' => ['@id' => $site_url . '#organization'],
            'description' => $is_rtl
                ? 'تواصل مع نيوتكنولوجي سولوشنز للحصول على استشارة مجانية'
                : 'Contact NeoTechnology Solutions for a free IT consultation',
            'mainEntity' => ['@id' => $site_url . '#organization']
        ];
    } elseif (is_page('services')) {
        // Services page: Add Service schema
        $page_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            '@id' => home_url('/services/') . '#services',
            'name' => $is_rtl ? 'خدماتنا' : 'Our Services',
            'description' => $is_rtl
                ? 'خدمات استشارات تقنية المعلومات الشاملة'
                : 'Comprehensive IT consulting services',
            'numberOfItems' => 3,
            'itemListElement' => [
                [
                    '@type' => 'Service',
                    'position' => 1,
                    'name' => $is_rtl ? 'السحابة والبنية التحتية' : 'Cloud & Infrastructure',
                    'description' => $is_rtl
                        ? 'استراتيجية السحابة، الترحيل السحابي، البنية التحتية الهجينة'
                        : 'Cloud strategy, cloud migration, hybrid infrastructure solutions',
                    'provider' => ['@id' => $site_url . '#organization']
                ],
                [
                    '@type' => 'Service',
                    'position' => 2,
                    'name' => $is_rtl ? 'التحول الرقمي' : 'Digital Transformation',
                    'description' => $is_rtl
                        ? 'أتمتة العمليات، تكامل الأنظمة، تحليل البيانات'
                        : 'Process automation, system integration, data analytics',
                    'provider' => ['@id' => $site_url . '#organization']
                ],
                [
                    '@type' => 'Service',
                    'position' => 3,
                    'name' => $is_rtl ? 'الأمن السيبراني' : 'Cybersecurity',
                    'description' => $is_rtl
                        ? 'تدقيق الأمان، الامتثال، إدارة المخاطر'
                        : 'Security audits, compliance, risk management',
                    'provider' => ['@id' => $site_url . '#organization']
                ]
            ]
        ];
    }

    // FAQ Schema for homepage
    $faq_schema = null;
    if (is_front_page()) {
        $faq_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => $is_rtl ? 'ما هي خدمات نيوتكنولوجي سولوشنز؟' : 'What services does NeoTechnology Solutions provide?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $is_rtl
                            ? 'نقدم استشارات تقنية المعلومات بما في ذلك استراتيجية السحابة والتحول الرقمي والأمن السيبراني واستراتيجية تقنية المعلومات.'
                            : 'We provide IT consulting services including cloud strategy, digital transformation, cybersecurity consulting, and IT strategy advisory.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => $is_rtl ? 'كيف أبدأ مع نيوتكنولوجي سولوشنز؟' : 'How do I get started with NeoTechnology Solutions?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $is_rtl
                            ? 'ابدأ بطلب مكالمة استكشافية مجانية مدتها 15-30 دقيقة. سنفهم تحدياتك ونحدد إذا كنا مناسبين لك.'
                            : 'Start by requesting a free 15-30 minute discovery call. We will understand your challenges and determine if we are a good fit for your needs.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => $is_rtl ? 'ما هي مناطق خدمتكم؟' : 'What areas do you serve?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $is_rtl
                            ? 'مقرنا في وايومنغ، الولايات المتحدة، ونخدم عملاء حول العالم بما في ذلك الولايات المتحدة والمملكة العربية السعودية والإمارات ودولياً.'
                            : 'We are based in Wyoming, USA and serve clients globally including the United States, Saudi Arabia, UAE, and internationally.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => $is_rtl ? 'هل تقدمون استشارات محايدة؟' : 'Do you provide vendor-neutral consulting?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $is_rtl
                            ? 'نعم، نحن مستقلون تماماً ولا نبيع منتجات. نقدم توصيات موضوعية بناءً على احتياجاتك فقط.'
                            : 'Yes, we are completely independent and do not sell products. We provide objective recommendations based solely on your business needs.'
                    ]
                ]
            ]
        ];
    }

    // Output JSON-LD
    echo "\n<!-- Schema.org Structured Data - AI Optimized for SEO -->\n";
    echo '<script type="application/ld+json">' . wp_json_encode($organization_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
    echo '<script type="application/ld+json">' . wp_json_encode($website_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";

    if ($page_schema) {
        echo '<script type="application/ld+json">' . wp_json_encode($page_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    if ($faq_schema) {
        echo '<script type="application/ld+json">' . wp_json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'neotech_schema_markup', 3);

/**
 * SEO: Breadcrumb Schema
 */
function neotech_breadcrumb_schema() {
    if (is_front_page()) return;

    $is_rtl = is_rtl();
    $site_url = home_url('/');
    $breadcrumbs = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => $is_rtl ? 'الرئيسية' : 'Home',
            'item' => $site_url
        ]
    ];

    $position = 2;

    if (is_page()) {
        $page_title = get_the_title();
        $page_url = get_permalink();
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $page_title,
            'item' => $page_url
        ];
    }

    $breadcrumb_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $breadcrumbs
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($breadcrumb_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
}
add_action('wp_head', 'neotech_breadcrumb_schema', 4);

/**
 * SEO: Preload Critical Resources
 */
function neotech_preload_resources() {
    ?>
    <!-- Preload Critical Resources -->
    <link rel="preload" as="style" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/inter/v18/UcCO3FwrK3iLTeHuS_nVMrMxCp50SjIw2boKoduKmMEVuLyfAZ9hjp-Ek-_0.woff2" crossorigin>
    <?php if (is_rtl()): ?>
    <link rel="preload" as="font" type="font/woff2" href="https://fonts.gstatic.com/s/tajawal/v9/Iura6YBj_oCad4k1nzSBC45I.woff2" crossorigin>
    <?php endif; ?>

    <!-- DNS Prefetch for Performance -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <?php
}
add_action('wp_head', 'neotech_preload_resources', 1);

/**
 * SEO: Add Skip Links for Accessibility (also helps SEO)
 */
function neotech_skip_links() {
    $is_rtl = is_rtl();
    ?>
    <a class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-slate-900 text-white px-4 py-2 rounded-lg z-[100]" href="#primary">
        <?php echo $is_rtl ? 'تخطي إلى المحتوى الرئيسي' : 'Skip to main content'; ?>
    </a>
    <?php
}
add_action('wp_body_open', 'neotech_skip_links');

/**
 * SEO: Optimize Image Alt Text
 */
function neotech_auto_alt_text($attr, $attachment, $size) {
    if (empty($attr['alt'])) {
        $attr['alt'] = get_the_title($attachment->ID);
        if (empty($attr['alt'])) {
            $attr['alt'] = 'NeoTechnology Solutions - IT Consulting';
        }
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'neotech_auto_alt_text', 10, 3);

/**
 * SEO: Add Loading=lazy to Images
 */
function neotech_lazy_load_images($content) {
    if (is_admin()) return $content;
    return preg_replace('/<img((?:(?!loading=).)*?)(\s*\/?>)/i', '<img$1 loading="lazy"$2', $content);
}
add_filter('the_content', 'neotech_lazy_load_images');

/**
 * SEO: Security Headers (helps with rankings)
 */
function neotech_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('send_headers', 'neotech_security_headers');

/**
 * SEO: Remove WordPress Version for Security
 */
remove_action('wp_head', 'wp_generator');

/**
 * SEO: Optimize RSS Feeds
 */
function neotech_rss_featured_image($content) {
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $content = '<p>' . get_the_post_thumbnail($post->ID, 'medium') . '</p>' . $content;
    }
    return $content;
}
add_filter('the_excerpt_rss', 'neotech_rss_featured_image');
add_filter('the_content_feed', 'neotech_rss_featured_image');
