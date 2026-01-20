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
        <p class="text-sm text-slate-600 mb-12"><?php _e('Last updated: January 2026', 'neotech'); ?></p>

        <div class="prose prose-slate max-w-none space-y-8">
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('What Are Cookies', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('Cookies are small text files stored on your device when you visit a website. They help websites function properly, remember your preferences, and understand how you use the site.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Cookies We Use', 'neotech'); ?></h2>
                
                <h3 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Essential Cookies', 'neotech'); ?></h3>
                <p class="text-slate-700 mb-3 text-sm">
                    <?php _e('These cookies are necessary for the website to function. They enable basic features like page navigation and form submission. You cannot opt out of essential cookies.', 'neotech'); ?>
                </p>
                <div class="overflow-x-auto mb-6">
                    <table class="w-full text-left text-sm border-collapse">
                        <thead class="bg-slate-50 text-slate-900">
                            <tr>
                                <th class="p-3 border border-slate-200"><?php _e('Cookie', 'neotech'); ?></th>
                                <th class="p-3 border border-slate-200"><?php _e('Purpose', 'neotech'); ?></th>
                                <th class="p-3 border border-slate-200"><?php _e('Duration', 'neotech'); ?></th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-700">
                            <tr>
                                <td class="p-3 border border-slate-200 font-mono text-xs">session_id</td>
                                <td class="p-3 border border-slate-200"><?php _e('Maintains your session state', 'neotech'); ?></td>
                                <td class="p-3 border border-slate-200"><?php _e('Session', 'neotech'); ?></td>
                            </tr>
                            <tr>
                                <td class="p-3 border border-slate-200 font-mono text-xs">cookie_consent</td>
                                <td class="p-3 border border-slate-200"><?php _e('Stores your cookie preferences', 'neotech'); ?></td>
                                <td class="p-3 border border-slate-200"><?php _e('1 Year', 'neotech'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 class="text-lg font-medium text-slate-900 mb-2"><?php _e('Analytics Cookies (Optional)', 'neotech'); ?></h3>
                <p class="text-slate-700 mb-3 text-sm">
                    <?php _e('These cookies help us understand how visitors use our website. They collect aggregated, anonymized data about page views and traffic sources. They are only set if you consent.', 'neotech'); ?>
                </p>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm border-collapse">
                        <thead class="bg-slate-50 text-slate-900">
                            <tr>
                                <th class="p-3 border border-slate-200"><?php _e('Cookie', 'neotech'); ?></th>
                                <th class="p-3 border border-slate-200"><?php _e('Purpose', 'neotech'); ?></th>
                                <th class="p-3 border border-slate-200"><?php _e('Duration', 'neotech'); ?></th>
                            </tr>
                        </thead>
                        <tbody class="text-slate-700">
                            <tr>
                                <td class="p-3 border border-slate-200 font-mono text-xs">_ga</td>
                                <td class="p-3 border border-slate-200"><?php _e('Google Analytics unique ID', 'neotech'); ?></td>
                                <td class="p-3 border border-slate-200"><?php _e('2 Years', 'neotech'); ?></td>
                            </tr>
                            <tr>
                                <td class="p-3 border border-slate-200 font-mono text-xs">_gid</td>
                                <td class="p-3 border border-slate-200"><?php _e('Google Analytics session ID', 'neotech'); ?></td>
                                <td class="p-3 border border-slate-200"><?php _e('24 Hours', 'neotech'); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Your Choices', 'neotech'); ?></h2>
                <ul class="list-disc pl-5 text-slate-700 space-y-2">
                    <li>
                        <strong class="text-slate-900"><?php _e('Cookie Banner:', 'neotech'); ?></strong>
                        <?php _e(' When you first visit, you can accept or decline optional cookies.', 'neotech'); ?>
                    </li>
                    <li>
                        <strong class="text-slate-900"><?php _e('Browser Settings:', 'neotech'); ?></strong>
                        <?php _e(' You can block all cookies via your browser settings.', 'neotech'); ?>
                    </li>
                    <li>
                        <strong class="text-slate-900"><?php _e('Withdraw Consent:', 'neotech'); ?></strong>
                        <?php _e(' You can clear your cookies and revisit the site to reset your preferences.', 'neotech'); ?>
                    </li>
                </ul>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Third-Party Cookies', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('We use Google Analytics for website analytics. Google\'s privacy policy applies to data collected through their services.', 'neotech'); ?>
                </p>
                <p class="text-slate-700 italic">
                    <?php _e('We do not use advertising cookies or allow third-party advertising on our website.', 'neotech'); ?>
                </p>
            </section>

            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('Contact', 'neotech'); ?></h2>
                <p class="text-slate-700">
                    <?php _e('Questions about cookies:', 'neotech'); ?> 
                    <a href="mailto:privacy@neotechnology.solutions" class="text-sky-600 underline">privacy@neotechnology.solutions</a>
                </p>
            </section>
        </div>
    </div>
</main>

<?php
get_footer();
