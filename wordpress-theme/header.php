<?php
/**
 * The header template
 *
 * @package NeoTechnology_Solutions
 */

$is_rtl = is_rtl();
$lang = $is_rtl ? 'ar' : 'en';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="<?php echo $is_rtl ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Rajdhani:wght@500;700&family=Exo+2:wght@300;600&display=swap" rel="stylesheet">
    <?php if ($is_rtl): ?>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php endif; ?>

    <!-- Favicons -->
    <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/brand/favicon.svg">
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/brand/favicon-16.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/brand/apple-touch-icon.svg">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="min-h-screen bg-white">
    <header id="masthead" class="site-header fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 text-slate-900 font-semibold text-lg neotech-logo">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        // Inline SVG logo for better performance
                        ?>
                        <svg class="neotech-logo-icon" width="70" height="28" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- N -->
                            <path d="M4 36 L4 4 L20 36 L20 4" stroke="#0a1628" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <!-- T -->
                            <path d="M30 4 L50 4" stroke="#0a1628" stroke-width="4" stroke-linecap="round"/>
                            <path d="M40 4 L40 36" stroke="#0a1628" stroke-width="4" stroke-linecap="round"/>
                            <!-- S -->
                            <path d="M56 10 C56 4 60 4 66 4 L74 4 C80 4 84 4 84 10 C84 16 80 18 74 18 L66 18 C60 18 56 20 56 26 L56 30 C56 36 60 36 66 36 L74 36 C80 36 84 36 84 30" stroke="#3d4f5f" stroke-width="5" stroke-linecap="round" fill="none"/>
                        </svg>
                        <span class="neotech-logo-text">
                            <span class="neotech-logo-neo">Neo</span><span class="neotech-logo-tech">Technology</span>
                        </span>
                        <?php
                    }
                    ?>
                </a>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center gap-8">
                    <a href="<?php echo esc_url(home_url('/#how-we-work')); ?>" class="text-slate-700 hover:text-slate-900 transition-colors text-sm font-medium">
                        <?php _e('How we work', 'neotech'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/#advisory-services')); ?>" class="text-slate-700 hover:text-slate-900 transition-colors text-sm font-medium">
                        <?php _e('Consulting Models', 'neotech'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/#what-you-receive')); ?>" class="text-slate-700 hover:text-slate-900 transition-colors text-sm font-medium">
                        <?php _e('Deliverables', 'neotech'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="text-slate-700 hover:text-slate-900 transition-colors text-sm font-medium">
                        <?php _e('About', 'neotech'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-slate-700 hover:text-slate-900 transition-colors text-sm font-medium">
                        <?php _e('Contact', 'neotech'); ?>
                    </a>
                </nav>

                <!-- CTA & Language Switcher -->
                <div class="hidden lg:flex items-center gap-4">
                    <!-- Language Switcher -->
                    <div class="flex items-center gap-1 text-sm">
                        <?php if (function_exists('pll_the_languages')): ?>
                            <?php pll_the_languages(['display_names_as' => 'slug', 'hide_current' => false]); ?>
                        <?php else: ?>
                            <a href="<?php echo esc_url(home_url('/en/')); ?>" class="px-2 py-1 <?php echo !$is_rtl ? 'text-slate-900 font-medium' : 'text-slate-500 hover:text-slate-700'; ?>">EN</a>
                            <span class="text-slate-300">|</span>
                            <a href="<?php echo esc_url(home_url('/ar/')); ?>" class="px-2 py-1 <?php echo $is_rtl ? 'text-slate-900 font-medium' : 'text-slate-500 hover:text-slate-700'; ?>">AR</a>
                        <?php endif; ?>
                    </div>

                    <!-- CTA Button -->
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary text-sm">
                        <?php $is_rtl ? _e('طلب جلسة', 'neotech') : _e('Request discussion', 'neotech'); ?>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button type="button" class="lg:hidden p-2 text-slate-700 hover:text-slate-900" id="mobile-menu-toggle" aria-label="<?php _e('Toggle menu', 'neotech'); ?>">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white">
            <nav class="px-6 py-4 space-y-2">
                <a href="<?php echo esc_url(home_url('/#how-we-work')); ?>" class="block py-2 text-slate-700 hover:text-slate-900 text-base font-medium">
                    <?php _e('How we work', 'neotech'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/#advisory-services')); ?>" class="block py-2 text-slate-700 hover:text-slate-900 text-base font-medium">
                    <?php _e('Consulting Models', 'neotech'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/#what-you-receive')); ?>" class="block py-2 text-slate-700 hover:text-slate-900 text-base font-medium">
                    <?php _e('Deliverables', 'neotech'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/about/')); ?>" class="block py-2 text-slate-700 hover:text-slate-900 text-base font-medium">
                    <?php _e('About', 'neotech'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="block py-2 text-slate-700 hover:text-slate-900 text-base font-medium">
                    <?php _e('Contact', 'neotech'); ?>
                </a>
                <div class="pt-4 border-t border-slate-200">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="block w-full btn btn-primary text-center">
                        <?php $is_rtl ? _e('طلب جلسة', 'neotech') : _e('Request discussion', 'neotech'); ?>
                    </a>
                </div>
            </nav>
        </div>
    </header>

    <div id="content" class="site-content pt-20">
