<?php
/**
 * Template Name: Cookie Policy
 * 
 * @package NeoTechnology_Solutions
 */

get_header();
?>

<main id="primary" class="site-main min-h-screen bg-white pt-12 pb-20 px-6">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
            <?php _e('Cookie Policy', 'neotech'); ?>
        </h1>
        <p class="text-sm text-slate-600 mb-12"><?php _e('Last updated: January 11, 2026', 'neotech'); ?></p>

        <div class="prose prose-slate max-w-none space-y-8">
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('What are cookies?', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('Cookies are small text files that are placed on your device when you visit a website. They are widely used to make websites work more efficiently and to provide information to website owners.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('How we use cookies', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('We use cookies for the following purposes:', 'neotech'); ?>
                </p>
                
                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200 mb-4">
                    <h3 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Essential Cookies', 'neotech'); ?></h3>
                    <p class="text-slate-600 text-sm">
                        <?php _e('These cookies are necessary for the website to function properly. They enable basic functions like page navigation and access to secure areas. The website cannot function properly without these cookies.', 'neotech'); ?>
                    </p>
                </div>
                
                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Analytics Cookies (Optional)', 'neotech'); ?></h3>
                    <p class="text-slate-600 text-sm">
                        <?php _e('With your consent, we may use analytics cookies to understand how visitors interact with our website. This helps us improve our content and user experience. These cookies collect information anonymously.', 'neotech'); ?>
                    </p>
                </div>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Third-party cookies', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('We do not use third-party advertising cookies. If you consent to analytics, we may use Google Analytics which sets its own cookies. These cookies help us understand aggregate traffic patterns but do not identify you personally.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Managing cookies', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('You can control and manage cookies in several ways:', 'neotech'); ?>
                </p>
                <ul class="space-y-2 text-slate-700">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Use our cookie consent banner to accept or decline optional cookies', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Adjust your browser settings to block or delete cookies', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Use browser extensions that manage cookie consent preferences', 'neotech'); ?></span>
                    </li>
                </ul>
                <p class="text-slate-700 leading-relaxed mt-4">
                    <?php _e('Please note that blocking certain cookies may impact your experience on our website.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Cookie list', 'neotech'); ?></h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-slate-200">
                                <th class="text-left py-3 font-medium text-slate-900"><?php _e('Cookie Name', 'neotech'); ?></th>
                                <th class="text-left py-3 font-medium text-slate-900"><?php _e('Purpose', 'neotech'); ?></th>
                                <th class="text-left py-3 font-medium text-slate-900"><?php _e('Duration', 'neotech'); ?></th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-600">
                            <tr class="border-b border-slate-100">
                                <td class="py-3">neotech_consent</td>
                                <td class="py-3"><?php _e('Stores your cookie preferences', 'neotech'); ?></td>
                                <td class="py-3"><?php _e('1 year', 'neotech'); ?></td>
                            </tr>
                            <tr class="border-b border-slate-100">
                                <td class="py-3">_ga, _gid</td>
                                <td class="py-3"><?php _e('Google Analytics (if consented)', 'neotech'); ?></td>
                                <td class="py-3"><?php _e('2 years / 24 hours', 'neotech'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Contact', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('For questions about our cookie policy, please contact us at', 'neotech'); ?>
                    <a href="mailto:privacy@neotechnology.solutions" class="text-slate-900 underline font-medium">
                        privacy@neotechnology.solutions
                    </a>
                </p>
            </section>
        </div>
    </div>
</main>

<?php
get_footer();
