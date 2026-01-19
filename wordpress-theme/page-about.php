<?php
/**
 * Template Name: About Us
 *
 * @package NeoTechnology_Solutions
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-white">
    <!-- Hero Section -->
    <section class="pt-16 pb-12 px-6 bg-slate-50">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl sm:text-5xl text-slate-900 mb-6 tracking-tight font-light">
                <?php _e('About NeoTechnology Solutions', 'neotech'); ?>
            </h1>
            <p class="text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto">
                <?php _e('We are a team of experienced IT professionals dedicated to helping businesses navigate complex technology decisions and achieve digital excellence.', 'neotech'); ?>
            </p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl text-slate-900 mb-6 font-light"><?php _e('Our Story', 'neotech'); ?></h2>
                    <p class="text-slate-700 leading-relaxed mb-4">
                        <?php _e('NeoTechnology Solutions was founded with a clear mission: to provide businesses with expert IT consulting that drives real results. We saw too many organizations struggling with technology decisions, often receiving biased advice from vendors with conflicting interests.', 'neotech'); ?>
                    </p>
                    <p class="text-slate-700 leading-relaxed mb-4">
                        <?php _e('Our approach is different. We combine deep technical expertise with business acumen to deliver strategic guidance that aligns technology investments with business objectives.', 'neotech'); ?>
                    </p>
                    <p class="text-slate-700 leading-relaxed">
                        <?php _e('Based in Wyoming, USA, we serve clients across multiple industries, helping them modernize their IT infrastructure, implement digital transformation initiatives, and make informed technology decisions.', 'neotech'); ?>
                    </p>
                </div>
                <div class="bg-slate-100 rounded-2xl p-8 text-center">
                    <div class="w-24 h-24 bg-slate-900 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <p class="text-2xl font-light text-slate-900 mb-2"><?php _e('15+ Years', 'neotech'); ?></p>
                    <p class="text-slate-600"><?php _e('Industry Experience', 'neotech'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 px-6 bg-slate-50">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl p-8 border border-slate-200">
                    <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Our Mission', 'neotech'); ?></h3>
                    <p class="text-slate-700 leading-relaxed">
                        <?php _e('To empower businesses with strategic IT consulting that transforms technology from a cost center into a competitive advantage. We deliver honest, vendor-neutral guidance that puts our clients\' interests first.', 'neotech'); ?>
                    </p>
                </div>
                <div class="bg-white rounded-2xl p-8 border border-slate-200">
                    <div class="w-12 h-12 bg-slate-900 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Our Vision', 'neotech'); ?></h3>
                    <p class="text-slate-700 leading-relaxed">
                        <?php _e('To be the most trusted IT consulting partner for businesses worldwide, known for our technical excellence, integrity, and commitment to delivering measurable results.', 'neotech'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl text-slate-900 mb-12 font-light text-center"><?php _e('Our Values', 'neotech'); ?></h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Integrity', 'neotech'); ?></h4>
                    <p class="text-slate-600 text-sm"><?php _e('Honest, transparent advice you can trust', 'neotech'); ?></p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Excellence', 'neotech'); ?></h4>
                    <p class="text-slate-600 text-sm"><?php _e('Highest standards in everything we do', 'neotech'); ?></p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Partnership', 'neotech'); ?></h4>
                    <p class="text-slate-600 text-sm"><?php _e('Your success is our success', 'neotech'); ?></p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Results', 'neotech'); ?></h4>
                    <p class="text-slate-600 text-sm"><?php _e('Focused on measurable outcomes', 'neotech'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 px-6 bg-slate-900 text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl mb-12 font-light text-center"><?php _e('Why Choose NeoTechnology Solutions?', 'neotech'); ?></h2>
            <div class="grid sm:grid-cols-2 gap-8">
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-medium mb-2"><?php _e('Certified Professionals', 'neotech'); ?></h4>
                        <p class="text-slate-400 text-sm"><?php _e('AWS, Azure, and GCP certified consultants with proven expertise.', 'neotech'); ?></p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-medium mb-2"><?php _e('Vendor Neutral', 'neotech'); ?></h4>
                        <p class="text-slate-400 text-sm"><?php _e('We recommend solutions based on your needs, not vendor commissions.', 'neotech'); ?></p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-medium mb-2"><?php _e('Proven Track Record', 'neotech'); ?></h4>
                        <p class="text-slate-400 text-sm"><?php _e('100+ successful projects across diverse industries.', 'neotech'); ?></p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-medium mb-2"><?php _e('24/7 Support', 'neotech'); ?></h4>
                        <p class="text-slate-400 text-sm"><?php _e('Round-the-clock support for critical consulting engagements.', 'neotech'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 px-6">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl text-slate-900 mb-6 font-light"><?php _e('Ready to Get Started?', 'neotech'); ?></h2>
            <p class="text-slate-600 mb-8 leading-relaxed">
                <?php _e('Let\'s discuss how NeoTechnology Solutions can help your business achieve its technology goals.', 'neotech'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center gap-2 bg-slate-900 text-white px-8 py-4 rounded-full text-sm font-medium hover:bg-slate-800 transition-all">
                <?php _e('Request a Discussion', 'neotech'); ?>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </section>
</main>

<?php
get_footer();
