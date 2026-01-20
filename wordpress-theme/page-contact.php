<?php
/**
 * Template Name: Contact
 * 
 * @package NeoTechnology_Solutions
 */

get_header();
?>

<main id="primary" class="site-main bg-slate-50">

    <!-- Hero Section -->
    <section class="relative pt-32 pb-12 px-6 bg-white border-b border-slate-100">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-light text-slate-900 mb-6 tracking-tight">
                <?php _e('Contact Us', 'neotech'); ?>
            </h1>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                <?php _e('Request a decision session or send us an inquiry. We respond within one business day.', 'neotech'); ?>
            </p>
        </div>
    </section>

    <!-- Content Grid -->
    <section class="py-16 px-6">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-12 gap-12">
            
            <!-- Left Column: Contact Info & What to Expect (4 cols) -->
            <div class="lg:col-span-4 space-y-8">
                <!-- Contact Info Shortcode -->
                <?php echo do_shortcode('[neotech_contact_info]'); ?>

                <!-- What To Expect Shortcode -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200 shadow-sm">
                    <?php echo do_shortcode('[neotech_what_to_expect]'); ?>
                </div>

                <!-- Privacy Note -->
                <div class="text-sm text-slate-500 px-2">
                    <p>
                        <?php _e('Your privacy is important to us. Read our', 'neotech'); ?> 
                        <a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="text-sky-600 hover:text-sky-700 underline"><?php _e('Privacy Policy', 'neotech'); ?></a>.
                    </p>
                </div>
            </div>

            <!-- Right Column: Intake Form (8 cols) -->
            <div class="lg:col-span-8">
                <?php echo do_shortcode('[neotech_intake_form]'); ?>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
