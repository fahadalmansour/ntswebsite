<?php
/**
 * Template Name: Contact Page
 *
 * Comprehensive contact page with two-step engagement process,
 * qualification form, and complete contact information.
 *
 * @package NeoTechnology_Solutions
 */

get_header();
$is_rtl = is_rtl();
?>

<main id="primary" class="site-main min-h-screen bg-white pt-12 pb-20 px-6">
    <div class="max-w-6xl mx-auto">

        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
                <?php _e("Let's Start a Conversation", 'neotech'); ?>
            </h1>
            <p class="text-xl text-slate-600 mb-2 leading-relaxed max-w-2xl mx-auto">
                <?php _e('Professional IT consulting begins with understanding your unique challenges.', 'neotech'); ?>
            </p>
        </div>

        <!-- Engagement Steps (Two-Step Process) -->
        <?php echo do_shortcode('[neotech_engagement_steps]'); ?>

        <!-- Main Content: Sidebar + Form -->
        <div class="grid lg:grid-cols-3 gap-8">

            <!-- Left Sidebar: Contact Info -->
            <div class="lg:col-span-1 order-2 lg:order-1">
                <?php echo do_shortcode('[neotech_contact_info]'); ?>
            </div>

            <!-- Right: Intake Form -->
            <div class="lg:col-span-2 order-1 lg:order-2">
                <?php echo do_shortcode('[neotech_intake_form]'); ?>
            </div>

        </div>

        <!-- What to Expect Section -->
        <?php echo do_shortcode('[neotech_what_to_expect]'); ?>

    </div>
</main>

<?php
get_footer();
