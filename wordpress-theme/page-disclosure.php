<?php
/**
 * Template Name: Disclosure Policy
 *
 * Disclosure Policy for Vendor Introductions & Referral Fees
 *
 * @package NeoTechnology_Solutions
 */

get_header();
$is_rtl = is_rtl();
?>

<main id="primary" class="site-main min-h-screen bg-white pt-12 pb-20 px-6">
    <div class="max-w-4xl mx-auto">
        <!-- Page Header -->
        <h1 class="text-4xl sm:text-5xl text-slate-900 mb-2 tracking-tight font-light">
            <?php _e('Disclosure Policy', 'neotech'); ?>
        </h1>
        <p class="text-lg text-slate-600 mb-4">
            <?php _e('Vendor Introductions & Referral Fees', 'neotech'); ?>
        </p>
        <p class="text-sm text-slate-500 mb-12">
            <?php _e('NeoTechnology Solutions LLC', 'neotech'); ?> &bull;
            <?php _e('Last updated: January 2026', 'neotech'); ?>
        </p>

        <div class="prose prose-slate max-w-none space-y-8">

            <!-- Purpose -->
            <section class="bg-slate-50 rounded-2xl p-8 border border-slate-200">
                <h2 class="text-xl text-slate-900 mb-4 font-medium"><?php _e('Purpose', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('NeoTechnology Solutions LLC provides IT Decision Consulting on an advisory-only basis. This Disclosure Policy explains how we handle vendor introductions and any potential referral fees, to maintain transparency and trust.', 'neotech'); ?>
                </p>
            </section>

            <!-- 1) Vendor Neutrality -->
            <section class="bg-slate-900 text-white rounded-2xl p-8">
                <h2 class="text-2xl mb-4 font-medium"><?php _e('1) Vendor Neutrality', 'neotech'); ?></h2>
                <p class="leading-relaxed text-slate-200">
                    <?php _e('Our advisory work is designed to remain independent and decision-focused. We do not resell products or services as part of the advisory engagement.', 'neotech'); ?>
                </p>
            </section>

            <!-- 2) Vendor Introductions -->
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('2) Vendor Introductions', 'neotech'); ?></h2>
                <p class="text-sm text-slate-500 mb-3"><?php _e('Optional, Client-Requested', 'neotech'); ?></p>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('If a client requests introductions to vendors, integrators, or specialist service providers, we may facilitate introductions. Vendor introductions are always optional and only provided at the client\'s request.', 'neotech'); ?>
                </p>
            </section>

            <!-- 3) Referral Fees / Commissions -->
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('3) Referral Fees / Commissions', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('If any referral fee, commission, or benefit may apply as a result of an introduction, it will be:', 'neotech'); ?>
                </p>
                <ul class="space-y-3 text-slate-700">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-slate-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span><?php _e('Disclosed clearly in writing, and', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-slate-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span><?php _e('Agreed in advance before any referral arrangement applies.', 'neotech'); ?></span>
                    </li>
                </ul>
                <div class="mt-6 p-4 bg-slate-100 rounded-xl">
                    <p class="text-slate-700 font-medium">
                        <?php _e('No referral fees are taken "silently" or without documented disclosure.', 'neotech'); ?>
                    </p>
                </div>
            </section>

            <!-- 4) Client Freedom of Choice -->
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('4) Client Freedom of Choice', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('Clients are always free to:', 'neotech'); ?>
                </p>
                <ul class="space-y-3 text-slate-700">
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Choose any vendor/provider', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Request multiple options, or', 'neotech'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                        <span><?php _e('Proceed without any introductions.', 'neotech'); ?></span>
                    </li>
                </ul>
                <p class="text-slate-700 leading-relaxed mt-4 font-medium">
                    <?php _e('Clients have no obligation to select any vendor we introduce.', 'neotech'); ?>
                </p>
            </section>

            <!-- 5) Separation from Advisory Recommendations -->
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('5) Separation from Advisory Recommendations', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('Advisory recommendations are based on the client\'s stated needs, constraints, and trade-offs. Recommendations are documented regardless of vendor selection and are not conditioned on referrals.', 'neotech'); ?>
                </p>
            </section>

            <!-- 6) Conflicts of Interest -->
            <section>
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('6) Conflicts of Interest', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed">
                    <?php _e('We aim to avoid conflicts of interest. Where a potential conflict may exist, we disclose it and document the client\'s acknowledgement.', 'neotech'); ?>
                </p>
            </section>

            <!-- 7) Contact -->
            <section class="bg-slate-50 rounded-2xl p-8 border border-slate-200">
                <h2 class="text-2xl text-slate-900 mb-4 font-medium"><?php _e('7) Contact', 'neotech'); ?></h2>
                <p class="text-slate-700 leading-relaxed mb-4">
                    <?php _e('For questions related to this policy, contact:', 'neotech'); ?>
                </p>
                <div class="space-y-2">
                    <p>
                        <a href="mailto:info@neotechnology.solutions" class="text-slate-900 underline font-medium">
                            info@neotechnology.solutions
                        </a>
                    </p>
                    <p class="text-slate-600">
                        <?php _e('Privacy inquiries:', 'neotech'); ?>
                        <a href="mailto:privacy@neotechnology.solutions" class="text-slate-900 underline font-medium">
                            privacy@neotechnology.solutions
                        </a>
                    </p>
                </div>
            </section>

        </div>
    </div>
</main>

<?php
get_footer();
