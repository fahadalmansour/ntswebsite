<?php
/**
 * Template Name: Advisory Disclaimer
 * 
 * @package NeoTechnology_Solutions
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-white pt-12 pb-20 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
            <?php _e('Advisory Disclaimer', 'neotech'); ?>
        </h1>
        <p class="text-sm text-slate-600 mb-12"><?php _e('Last updated: January 2026', 'neotech'); ?></p>

        <div class="prose prose-slate max-w-none space-y-8">
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Scope of Services', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('NeoTechnology Solutions provides technology advisory services only.', 'neotech'); ?>
                </p>
                <div class="grid md:grid-cols-2 gap-8 mb-6">
                    <div class="bg-sky-50 p-6 rounded-xl border border-sky-100">
                        <strong class="block text-sky-900 mb-2"><?php _e('We Provide:', 'neotech'); ?></strong>
                        <ul class="list-disc pl-5 text-sky-800 text-sm space-y-1">
                            <li><?php _e('Analysis of technology options and trade-offs', 'neotech'); ?></li>
                            <li><?php _e('Recommendations based on requirements', 'neotech'); ?></li>
                            <li><?php _e('Documentation of decision frameworks', 'neotech'); ?></li>
                            <li><?php _e('Vendor evaluation guidance', 'neotech'); ?></li>
                        </ul>
                    </div>
                    <div class="bg-slate-50 p-6 rounded-xl border border-slate-200">
                        <strong class="block text-slate-900 mb-2"><?php _e('We Do Not Provide:', 'neotech'); ?></strong>
                        <ul class="list-disc pl-5 text-slate-600 text-sm space-y-1">
                            <li><?php _e('Implementation of technology solutions', 'neotech'); ?></li>
                            <li><?php _e('Project management or execution', 'neotech'); ?></li>
                            <li><?php _e('Ongoing IT support or managed services', 'neotech'); ?></li>
                            <li><?php _e('Product sales, licensing, or reselling', 'neotech'); ?></li>
                        </ul>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('No Guarantees', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('Technology decisions involve inherent uncertainty. We do not guarantee specific business outcomes, return on investment, project success, or vendor performance.', 'neotech'); ?>
                </p>
                <p class="text-slate-700 italic">
                    <?php _e('Our recommendations represent our professional judgment based on information available at the time of engagement.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Client Responsibility', 'neotech'); ?></h2>
                <ul class="space-y-4 text-slate-700">
                    <li>
                        <strong class="text-slate-900"><?php _e('Final Decisions:', 'neotech'); ?></strong>
                        <?php _e(' All technology decisions are made by you. Our recommendations are inputs to your process.', 'neotech'); ?>
                    </li>
                    <li>
                        <strong class="text-slate-900"><?php _e('Implementation:', 'neotech'); ?></strong>
                        <?php _e(' Execution of any recommendations is your responsibility. We do not supervise implementation.', 'neotech'); ?>
                    </li>
                    <li>
                        <strong class="text-slate-900"><?php _e('Vendor Contracts:', 'neotech'); ?></strong>
                        <?php _e(' Relationships with vendors are between you and those vendors directly.', 'neotech'); ?>
                    </li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Not Professional Advice', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('Our services do not constitute legal, tax, or financial advice. For such matters, please engage appropriate licensed professionals.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Limitation of Liability', 'neotech'); ?></h2>
                <ul class="list-disc pl-5 text-slate-700 space-y-2">
                    <li><?php _e('Our liability is limited to the fees paid for the engagement.', 'neotech'); ?></li>
                    <li><?php _e('We are not liable for indirect, incidental, or consequential damages.', 'neotech'); ?></li>
                    <li><?php _e('We are not liable for lost profits, lost data, or business interruption.', 'neotech'); ?></li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Contact', 'neotech'); ?></h2>
                <p class="text-slate-700">
                    <?php _e('Questions about this disclaimer:', 'neotech'); ?> 
                    <a href="mailto:info@neotechnology.solutions" class="text-sky-600 underline">info@neotechnology.solutions</a>
                </p>
            </section>
        </div>
    </div>
</main>

<?php
get_footer();
