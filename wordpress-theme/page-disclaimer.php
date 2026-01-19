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
        <p class="text-sm text-slate-600 mb-12"><?php _e('Last updated: January 11, 2026', 'neotech'); ?></p>

        <div class="prose prose-slate max-w-none space-y-8">
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200 mb-8">
                <p class="text-lg text-slate-900 font-medium text-center">
                    <?php _e('NeoTechnology Solutions LLC provides IT consulting services. This page explains the scope of our services and client responsibilities.', 'neotech'); ?>
                </p>
            </div>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Scope of services', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('Our services are strictly limited to:', 'neotech'); ?>
                </p>
                <ul class="space-y-2 text-slate-700">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Providing structured guidance for IT decisions', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Documenting options, trade-offs, and implications', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Preparing decision support materials', 'neotech'); ?></span>
                    </li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('What we do NOT do', 'neotech'); ?></h2>
                <ul class="space-y-2 text-slate-700">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Implement or configure systems', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Provide managed IT services or ongoing support', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Sell hardware, software, or third-party products', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Make decisions on behalf of clients', 'neotech'); ?></span>
                    </li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('No guarantees', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('We do not guarantee any specific outcomes or results. Our advisory services are based on the information provided to us and our professional judgment at the time. Technology environments, business conditions, and vendor offerings change over time, and our advice reflects a point-in-time analysis.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Client responsibility', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('The client is solely responsible for: making the final decision on any IT matter, implementing any chosen solution, verifying all information and recommendations, and managing all relationships with vendors and service providers. We provide guidance; execution is the client\'s responsibility.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Vendor neutrality', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('We maintain vendor neutrality in our advisory work. When we discuss specific vendors or products, we do so based on their technical fit for the client\'s situation, not based on commercial relationships. Any referral arrangements are disclosed separately per our Disclosure Policy.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Not legal or tax advice', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('Our advisory services do not constitute legal, tax, financial, or regulatory advice. Clients should consult appropriate professionals for matters requiring specialized legal, accounting, or financial expertise.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Information verification', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('While we strive for accuracy, clients are responsible for independently verifying any critical information, pricing, or technical specifications before making decisions. Technology landscapes evolve rapidly, and information may become outdated.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Contact', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('For questions about this disclaimer, please contact us at', 'neotech'); ?>
                    <a href="mailto:info@neotechnology.solutions" class="text-slate-900 underline font-medium">
                        info@neotechnology.solutions
                    </a>
                </p>
            </section>
        </div>
    </div>
</main>

<?php
get_footer();
