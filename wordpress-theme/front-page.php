<?php
/**
 * The template for displaying the front page (homepage)
 *
 * @package NeoTechnology_Solutions
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    // Homepage sections using shortcodes - White Premium layout
    // 1. Hero with Advisory Badge + Trust
    echo do_shortcode('[neotech_hero]');

    // 2. How We Work (4 cards)
    echo do_shortcode('[neotech_how_we_work]');

    // 3. Neutrality & Vendor Introductions (premium card)
    echo do_shortcode('[neotech_neutrality_card]');

    // 4. Decision Areas (grid)
    echo do_shortcode('[neotech_decision_areas]');

    // 5. What You Receive (deliverables)
    echo do_shortcode('[neotech_what_you_receive]');

    // 6. Boundaries - What We Don't Do (clean list)
    echo do_shortcode('[neotech_boundaries]');

    // 7. Why Us (value cards)
    echo do_shortcode('[neotech_why_us]');

    // 8. Trust Badges
    echo do_shortcode('[neotech_trust_badges]');
    ?>

    <!-- 9. CTA Section - 90 min session -->
    <section class="py-16 px-6 bg-white">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900">
                <?php _e('Start With a 90-Minute Decision Session', 'neotech'); ?>
            </h2>
            <p class="text-xl text-slate-600 mb-8">
                <?php _e('Bring a specific technology decision. We\'ll provide structured analysis and initial recommendations. No commitment to continue.', 'neotech'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary inline-flex items-center gap-2 rounded-full px-8 py-4">
                <?php _e('Request a Session', 'neotech'); ?>
            </a>
            <p class="text-sm text-slate-500 mt-4">
                <?php _e('We respond within one business day.', 'neotech'); ?>
            </p>
        </div>
    </section>

    <!-- 10. Contact Form -->
    <section id="contact" class="py-16 px-6 bg-slate-50 border-t border-b border-slate-200">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-10">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900">
                    <?php _e('Contact Us', 'neotech'); ?>
                </h2>
                <p class="text-xl text-slate-600">
                    <?php _e('Send your inquiry and we\'ll respond within one business day', 'neotech'); ?>
                </p>
            </div>
            <?php echo do_shortcode('[neotech_contact_form]'); ?>
        </div>
    </section>
</main>

<?php
get_footer();
