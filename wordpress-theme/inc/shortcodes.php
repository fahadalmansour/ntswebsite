<?php
/**
 * NeoTechnology Solutions - Theme Shortcodes
 *
 * @package NeoTechnology_Solutions
 */

if (!defined('ABSPATH')) {
    exit;
}

/* ============================================
   SHORTCODES: Homepage Sections
   ============================================ */

/**
 * 1. HERO SECTION
 * [neotech_hero]
 */
function neotech_hero_shortcode() {
    ob_start();
    ?>
    <section class="py-20 px-6 bg-white relative overflow-hidden">
        <!-- Subtle background pattern -->
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%230f172a%22 fill-opacity=%221%22%3E%3Cpath d=%22M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        
        <div class="max-w-4xl mx-auto text-center mb-16 relative animate-slide-up">
            <p class="text-sm font-medium text-slate-500 uppercase tracking-wider mb-4"><?php _e('NeoTechnology Solutions', 'neotech'); ?></p>
            <h1 class="text-5xl sm:text-6xl font-light tracking-tight mb-6 text-slate-900">
                <?php _e('Professional IT Consulting', 'neotech'); ?>
            </h1>
            <p class="text-xl text-slate-600 mb-12 max-w-2xl mx-auto leading-relaxed">
                <?php _e('Strategic technology guidance for businesses seeking digital transformation and IT excellence.', 'neotech'); ?>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">
                    <?php _e('Request initial discussion', 'neotech'); ?>
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#how-we-work" class="btn btn-secondary">
                    <?php _e('How we work', 'neotech'); ?>
                </a>
            </div>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-4xl mx-auto text-center relative">
            <div class="animate-fade-in" style="animation-delay: 0.1s">
                <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
                    </svg>
                </div>
                <p class="font-medium mb-2 text-slate-900"><?php _e('Expert Guidance', 'neotech'); ?></p>
                <p class="text-sm text-slate-600"><?php _e('Strategic IT consulting from experienced professionals', 'neotech'); ?></p>
            </div>
            <div class="animate-fade-in" style="animation-delay: 0.2s">
                <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <p class="font-medium mb-2 text-slate-900"><?php _e('Custom Solutions', 'neotech'); ?></p>
                <p class="text-sm text-slate-600"><?php _e('Tailored technology strategies for your business', 'neotech'); ?></p>
            </div>
            <div class="animate-fade-in" style="animation-delay: 0.3s">
                <div class="w-10 h-10 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <p class="font-medium mb-2 text-slate-900"><?php _e('Proven Results', 'neotech'); ?></p>
                <p class="text-sm text-slate-600"><?php _e('Track record of successful digital transformations', 'neotech'); ?></p>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_hero', 'neotech_hero_shortcode');

/**
 * 2. HOW WE WORK
 * [neotech_how_we_work]
 */
function neotech_how_we_work_shortcode() {
    ob_start();
    $steps = [
        ['01', __('Discovery & Assessment', 'neotech'), __('We analyze your current IT infrastructure, business goals, and identify opportunities for improvement', 'neotech')],
        ['02', __('Strategy Development', 'neotech'), __('Creating a comprehensive technology roadmap aligned with your business objectives', 'neotech')],
        ['03', __('Implementation Support', 'neotech'), __('Guiding your team through the implementation process with hands-on expertise', 'neotech')],
        ['04', __('Optimization & Growth', 'neotech'), __('Continuous improvement and scaling your technology infrastructure as your business grows', 'neotech')],
    ];
    ?>
    <section id="how-we-work" class="py-16 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('Our Process', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('A proven methodology to deliver exceptional IT consulting results.', 'neotech'); ?></p>
            </div>
            <div class="grid gap-4">
                <?php foreach ($steps as $step): ?>
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200">
                    <div class="flex items-start gap-6">
                        <div class="text-3xl font-light text-slate-400"><?php echo $step[0]; ?></div>
                        <div>
                            <h3 class="text-xl font-medium mb-2 text-slate-900"><?php echo $step[1]; ?></h3>
                            <p class="text-slate-600"><?php echo $step[2]; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_how_we_work', 'neotech_how_we_work_shortcode');

/**
 * NEUTRALITY & VENDOR INTRODUCTIONS CARD
 * [neotech_neutrality_card]
 */
function neotech_neutrality_card_shortcode() {
    ob_start();
    ?>
    <section class="py-10 px-6 bg-slate-50 border-t border-b border-slate-200">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white border border-slate-200 rounded-2xl p-8 text-center" style="box-shadow: var(--shadow-sm);">
                <h3 class="text-2xl font-medium mb-4 text-slate-900"><?php _e('Vendor Neutrality & Introductions', 'neotech'); ?></h3>
                <p class="text-slate-600 mb-4"><?php _e('We provide independent, vendor-neutral consulting. We do not sell products as part of our advisory services.', 'neotech'); ?></p>
                <p class="text-slate-600">
                    <?php _e('If a client requests a vendor introduction, any referral fees or commissions are', 'neotech'); ?>
                    <strong><?php _e('disclosed and documented in advance', 'neotech'); ?></strong>.
                    <?php _e('The client is free to choose any vendor with no obligation.', 'neotech'); ?>
                    <a href="<?php echo esc_url(home_url('/disclosure/')); ?>" class="text-sky-600 hover:text-sky-700"><?php _e('Read our disclosure policy', 'neotech'); ?></a>
                </p>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_neutrality_card', 'neotech_neutrality_card_shortcode');

/**
 * 3. DECISION AREAS
 * [neotech_decision_areas]
 */
function neotech_decision_areas_shortcode() {
    ob_start();
    $areas = [
        [
            'title' => __('Cloud & Infrastructure', 'neotech'),
            'desc'  => __('Design and implement scalable cloud solutions that drive business growth.', 'neotech'),
            'items' => [__('Cloud migration', 'neotech'), __('Hybrid solutions', 'neotech'), __('Cost optimization', 'neotech')]
        ],
        [
            'title' => __('Digital Transformation', 'neotech'),
            'desc'  => __('Modernize your business processes with cutting-edge technology solutions.', 'neotech'),
            'items' => [__('Process automation', 'neotech'), __('System integration', 'neotech'), __('Data analytics', 'neotech')]
        ],
        [
            'title' => __('Cybersecurity', 'neotech'),
            'desc'  => __('Protect your business with comprehensive security strategies and solutions.', 'neotech'),
            'items' => [__('Security audits', 'neotech'), __('Compliance', 'neotech'), __('Risk management', 'neotech')]
        ]
    ];
    ?>
    <section id="decision-areas" class="py-16 px-6 bg-slate-50">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('Our Services', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('Comprehensive IT consulting services to accelerate your business success.', 'neotech'); ?></p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($areas as $area): ?>
                <div class="bg-white rounded-2xl p-8 border border-slate-200">
                    <h3 class="text-xl font-medium mb-4 text-slate-900"><?php echo $area['title']; ?></h3>
                    <p class="text-slate-600 mb-6"><?php echo $area['desc']; ?></p>
                    <ul class="space-y-3">
                        <?php foreach ($area['items'] as $item): ?>
                        <li class="flex items-center gap-3">
                            <div class="w-1.5 h-1.5 bg-slate-400 rounded-full"></div>
                            <span class="text-sm text-slate-600"><?php echo $item; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_decision_areas', 'neotech_decision_areas_shortcode');

/**
 * 4. REFERENCE ARCHITECTURE
 * [neotech_reference_architecture]
 */
function neotech_ref_arch_shortcode() {
    ob_start();
    $layers = [
        __('Users/Branches', 'neotech'),
        __('Identity & Access', 'neotech'),
        __('Network', 'neotech'),
        __('Apps', 'neotech'),
        __('Data', 'neotech'),
        __('Monitoring/Backups', 'neotech')
    ];
    $is_rtl = is_rtl();
    ?>
    <section id="reference-architecture" class="py-16 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('Reference Architecture', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('We help you think through the full stack.', 'neotech'); ?></p>
            </div>
            <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-6">
                    <?php foreach ($layers as $index => $layer): ?>
                        <div class="flex items-center gap-6 w-full lg:w-auto">
                            <div class="flex-1 lg:flex-initial">
                                <div class="bg-white rounded-xl px-6 py-5 border border-slate-200 text-center min-w-[140px]">
                                    <p class="text-slate-900 font-medium text-sm whitespace-nowrap"><?php echo $layer; ?></p>
                                </div>
                            </div>
                            <?php if ($index < count($layers) - 1): ?>
                                <div class="hidden lg:block text-slate-400">
                                    <?php echo $is_rtl ? neotech_get_icon('arrow-left') : neotech_get_icon('arrow-right'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="mt-8 pt-8 border-t border-slate-200 text-center">
                    <p class="text-sm text-slate-600"><?php _e('High-level view only. We document responsibilities for each layer.', 'neotech'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_reference_architecture', 'neotech_ref_arch_shortcode');

/**
 * 5. TOOLS & STANDARDS
 * [neotech_tools_standards]
 */
function neotech_tools_shortcode() {
    ob_start();
    $cats = [
        [__('SSO/MFA', 'neotech'), __('Identity federation, multi-factor authentication', 'neotech')],
        [__('Monitoring', 'neotech'), __('Infrastructure metrics, application logs', 'neotech')],
        [__('Backups (RPO/RTO)', 'neotech'), __('Recovery point objectives, testing cadence', 'neotech')],
        [__('Security Baseline', 'neotech'), __('Patching, hardening, access controls', 'neotech')],
        [__('Cloud Cost Controls', 'neotech'), __('Budget alerts, resource tagging', 'neotech')],
        [__('Network', 'neotech'), __('VPN, direct connect, segmentation', 'neotech')]
    ];
    ?>
    <section id="tools-standards" class="py-16 px-6 bg-slate-50">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('Tools & Standards', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('Clarifying requirements without pushing vendors.', 'neotech'); ?></p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($cats as $cat): ?>
                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <h3 class="text-slate-900 font-medium mb-2"><?php echo $cat[0]; ?></h3>
                    <p class="text-sm text-slate-600"><?php echo $cat[1]; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_tools_standards', 'neotech_tools_shortcode');

/**
 * 6. WHAT YOU RECEIVE
 * [neotech_what_you_receive]
 */
function neotech_deliverables_shortcode() {
    ob_start();
    $items = [
        [__('Decision summary PDF', 'neotech'), __('Comprehensive documentation of context and options', 'neotech')],
        [__('A/B/C comparison', 'neotech'), __('Structured analysis of alternatives', 'neotech')],
        [__('Scope map', 'neotech'), __('Clear definition of responsibilities', 'neotech')],
        [__('Vendor questions', 'neotech'), __('Structured questions to clarify proposals', 'neotech')],
        [__('Architecture notes', 'neotech'), __('Reference diagram and integration points', 'neotech')]
    ];
    ?>
    <section id="what-you-receive" class="py-16 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('What you receive', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('Structured deliverables designed to support your decision-making.', 'neotech'); ?></p>
            </div>
            <div class="space-y-3">
                <?php foreach ($items as $idx => $item): ?>
                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-8 h-8 bg-slate-900 text-white rounded-lg flex items-center justify-center text-sm font-medium">
                            <?php echo $idx + 1; ?>
                        </div>
                        <div>
                            <h3 class="text-slate-900 font-medium mb-1"><?php echo $item[0]; ?></h3>
                            <p class="text-sm text-slate-600"><?php echo $item[1]; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_what_you_receive', 'neotech_deliverables_shortcode');

/**
 * 7. ADVISORY SERVICES
 * [neotech_advisory_services]
 */
function neotech_advisory_services_shortcode() {
    ob_start();
    ?>
    <section id="advisory-services" class="py-16 px-6 bg-slate-50">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('Consulting Packages', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('Flexible engagement models tailored to your needs.', 'neotech'); ?></p>
            </div>

            <div class="grid lg:grid-cols-2 gap-6">
                <!-- Strategic -->
                <div class="bg-white rounded-2xl p-10 border border-slate-200">
                    <h3 class="text-2xl font-medium mb-4 text-slate-900"><?php _e('Strategic Consulting', 'neotech'); ?></h3>
                    <p class="text-slate-600 mb-8"><?php _e('Long-term partnership for comprehensive IT strategy, planning, and ongoing guidance for your organization.', 'neotech'); ?></p>
                    <div class="pt-6 border-t border-slate-200">
                        <p class="text-slate-900 font-medium mb-1"><?php _e('Ideal for growing businesses seeking transformation.', 'neotech'); ?></p>
                    </div>
                </div>
                <!-- Project -->
                <div class="bg-white rounded-2xl p-10 border border-slate-200">
                    <h3 class="text-2xl font-medium mb-4 text-slate-900"><?php _e('Project-Based Consulting', 'neotech'); ?></h3>
                    <p class="text-slate-600 mb-8"><?php _e('Focused engagement for specific IT initiatives, migrations, or technology implementations.', 'neotech'); ?></p>
                    <div class="pt-6 border-t border-slate-200">
                         <p class="text-sm text-slate-600"><?php _e('Clear scope, timeline, and deliverables.', 'neotech'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_advisory_services', 'neotech_advisory_services_shortcode');

/**
 * 8. BOUNDARIES - What We Don't Do
 * [neotech_boundaries]
 */
function neotech_boundaries_shortcode() {
    ob_start();
    $boundaries = [
        ['icon' => '✕', 'text' => __('No implementation, development, or installation', 'neotech')],
        ['icon' => '✕', 'text' => __('No ongoing operational support or Managed Services', 'neotech')],
        ['icon' => '✕', 'text' => __('No guarantees of results or performance', 'neotech')],
        ['icon' => '✕', 'text' => __('No product sales as part of consulting', 'neotech')],
        ['icon' => '✓', 'text' => __('Vendor introductions are optional, by client request only, with documented disclosure in advance — client is free to choose any vendor', 'neotech')]
    ];
    ?>
    <section id="boundaries" class="py-16 px-6 bg-slate-50 border-t border-b border-slate-200">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12 text-center mx-auto">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('What We Don\'t Do', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('Clarity in scope ensures aligned expectations', 'neotech'); ?></p>
            </div>
            <div class="bg-white rounded-2xl p-8 border border-slate-200 max-w-3xl mx-auto" style="box-shadow: var(--shadow-sm);">
                <ul class="space-y-4">
                    <?php foreach ($boundaries as $item): ?>
                    <li class="flex items-start gap-4">
                        <span class="w-6 h-6 flex items-center justify-center flex-shrink-0 text-lg <?php echo $item['icon'] === '✓' ? 'text-green-600' : 'text-red-500'; ?>"><?php echo $item['icon']; ?></span>
                        <span class="text-slate-700"><?php echo $item['text']; ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <p class="text-center text-slate-600 mt-6 pt-6 border-t border-slate-200">
                    <?php _e('Our independence is our value. We succeed when you make an informed decision.', 'neotech'); ?>
                </p>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_boundaries', 'neotech_boundaries_shortcode');

/**
 * VENDOR NEUTRALITY
 * [neotech_vendor_neutrality]
 */
function neotech_vendor_neutrality_shortcode() {
    ob_start();
    ?>
    <section class="py-12 px-6 bg-white">
        <div class="max-w-4xl mx-auto">
            <div class="bg-slate-900 text-white rounded-2xl p-8 md:p-12">
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-medium mb-2"><?php _e('Vendor Neutrality & Introductions', 'neotech'); ?></h2>
                        <p class="text-slate-400 text-sm"><?php _e('Our commitment to independent advice', 'neotech'); ?></p>
                    </div>
                </div>
                <p class="text-lg text-white leading-relaxed mb-4">
                    <?php _e('NeoTechnology Solutions LLC provides decision consulting independently. We do not resell products as part of the advisory service.', 'neotech'); ?>
                </p>
                <p class="text-slate-300 leading-relaxed">
                    <?php _e('If a client requests introductions to vendors or specialists, any referral fees are disclosed and documented in advance, and the client remains free to choose any provider.', 'neotech'); ?>
                </p>
                <div class="mt-6 pt-6 border-t border-white/10">
                    <a href="<?php echo esc_url(home_url('/disclosure/')); ?>" class="text-white/80 hover:text-white text-sm inline-flex items-center gap-2 transition-colors">
                        <?php _e('Read our full Disclosure Policy', 'neotech'); ?>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_vendor_neutrality', 'neotech_vendor_neutrality_shortcode');

/**
 * 9. ENGAGEMENT
 * [neotech_engagement]
 */
function neotech_engagement_shortcode() {
    ob_start();
    ?>
    <section id="engagement" class="py-16 px-6 bg-slate-50">
        <div class="max-w-5xl mx-auto">
            <div class="max-w-3xl mb-12">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('Engagement structure', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('Professional, transparent, and accountable.', 'neotech'); ?></p>
            </div>
            <div class="grid sm:grid-cols-3 gap-6 mb-10">
                <div class="bg-white rounded-xl p-8 border border-slate-200 text-center">
                    <p class="text-lg text-slate-900 font-medium"><?php _e('Fixed-scope', 'neotech'); ?></p>
                </div>
                <div class="bg-white rounded-xl p-8 border border-slate-200 text-center">
                    <p class="text-lg text-slate-900 font-medium"><?php _e('Documented', 'neotech'); ?></p>
                </div>
                <div class="bg-white rounded-xl p-8 border border-slate-200 text-center">
                    <p class="text-lg text-slate-900 font-medium"><?php _e('Contractual', 'neotech'); ?></p>
                </div>
            </div>
            <div class="max-w-3xl mx-auto bg-white rounded-2xl p-10 border border-slate-200 text-center">
                <p class="text-slate-700 text-lg">
                    <?php _e('Our responsibility is to explain options and implications clearly. The client is responsible for the final decision and execution.', 'neotech'); ?>
                </p>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_engagement', 'neotech_engagement_shortcode');

/**
 * 10. CONTACT FORM SHORTCODE
 * [neotech_contact_form]
 */
function neotech_contact_form_shortcode() {
    ob_start();
    ?>
    <div class="bg-slate-50 rounded-3xl p-8 border border-slate-200">
        <?php
        // Use Contact Form 7 if available
        if (shortcode_exists('contact-form-7')) {
            // Look for a contact form with the slug 'advisory-inquiry'
            $form = get_page_by_path('advisory-inquiry', OBJECT, 'wpcf7_contact_form');
            if ($form) {
                echo do_shortcode('[contact-form-7 id="' . $form->ID . '"]');
            } else {
                echo '<p class="text-slate-600">' . __('Please configure Contact Form 7 with a form titled "advisory-inquiry"', 'neotech') . '</p>';
            }
        } else {
            // Fallback mailto form
            ?>
            <form action="mailto:info@neotechnology.solutions" method="post" enctype="text/plain" class="space-y-6">
                <div>
                    <label for="company" class="block text-sm font-medium text-slate-900 mb-2">
                        <?php _e('Company name *', 'neotech'); ?>
                    </label>
                    <input type="text" id="company" name="company" required
                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                           placeholder="<?php esc_attr_e('Your organization', 'neotech'); ?>">
                </div>
                
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-900 mb-2">
                        <?php _e('Your name *', 'neotech'); ?>
                    </label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                           placeholder="<?php esc_attr_e('Full name', 'neotech'); ?>">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-900 mb-2">
                        <?php _e('Business email *', 'neotech'); ?>
                    </label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                           placeholder="your.name@company.com">
                </div>
                
                <div>
                    <label for="phone" class="block text-sm font-medium text-slate-900 mb-2">
                        <?php _e('Phone (optional)', 'neotech'); ?>
                    </label>
                    <input type="tel" id="phone" name="phone"
                           class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                           placeholder="+1 XXX XXX XXXX">
                </div>
                
                <div>
                    <label for="decision_type" class="block text-sm font-medium text-slate-900 mb-2">
                        <?php _e('Service Interest *', 'neotech'); ?>
                    </label>
                    <select id="decision_type" name="decision_type" required
                            class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white">
                        <option value=""><?php _e('Select one', 'neotech'); ?></option>
                        <option value="cloud"><?php _e('Cloud & Infrastructure', 'neotech'); ?></option>
                        <option value="digital"><?php _e('Digital Transformation', 'neotech'); ?></option>
                        <option value="security"><?php _e('Cybersecurity', 'neotech'); ?></option>
                        <option value="consulting"><?php _e('IT Strategy Consulting', 'neotech'); ?></option>
                        <option value="other"><?php _e('Other', 'neotech'); ?></option>
                    </select>
                </div>
                
                <div>
                    <label for="message" class="block text-sm font-medium text-slate-900 mb-2">
                        <?php _e('What do you need help with? *', 'neotech'); ?>
                    </label>
                    <textarea id="message" name="message" rows="5" required
                              class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white resize-none"
                              placeholder="<?php esc_attr_e('Brief description of your situation and what decision you\'re facing...', 'neotech'); ?>"></textarea>
                </div>
                
                <div class="bg-white rounded-xl p-4 border border-slate-300">
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="checkbox" name="consent" required
                               class="mt-1 w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900">
                        <span class="text-sm text-slate-700 leading-relaxed">
                            <?php _e('I agree to receive communications from NeoTechnology Solutions LLC and accept the Privacy Policy.', 'neotech'); ?>
                        </span>
                    </label>
                </div>
                
                <button type="submit" class="w-full btn btn-primary">
                    <?php _e('Submit request', 'neotech'); ?>
                </button>
                
                <p class="text-center text-sm text-slate-600">
                    <?php _e('We reply within 1 business day', 'neotech'); ?>
                </p>
            </form>
            <?php
        }
        ?>
    </div>
    
    <div class="mt-8 text-center">
        <p class="text-sm text-slate-600 mb-3">
            <?php _e('Prefer email directly?', 'neotech'); ?>
        </p>
        <a href="mailto:info@neotechnology.solutions" class="inline-flex items-center gap-2 text-slate-900 hover:text-slate-700 transition-colors">
            <?php echo neotech_get_icon('mail'); ?>
            <span class="font-medium">info@neotechnology.solutions</span>
        </a>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_contact_form', 'neotech_contact_form_shortcode');

/**
 * 11. WHY US
 * [neotech_why_us]
 */
function neotech_why_us_shortcode() {
    ob_start();
    ?>
    <section id="why-us" class="py-16 px-6 bg-slate-900 text-white">
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-slide-up">
                    <h2 class="text-4xl font-light tracking-tight mb-6 text-white text-gradient"><?php _e('Why Choose Us?', 'neotech'); ?></h2>
                    <p class="text-xl text-slate-300 mb-8"><?php _e('We combine deep technical expertise with business acumen to deliver real results.', 'neotech'); ?></p>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4">
                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                            <span class="text-slate-200"><?php _e('Certified IT Professionals', 'neotech'); ?></span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                            <span class="text-slate-200"><?php _e('15+ Years Industry Experience', 'neotech'); ?></span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                            <span class="text-slate-200"><?php _e('100+ Successful Projects', 'neotech'); ?></span>
                        </li>
                        <li class="flex items-center gap-4">
                            <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse"></div>
                            <span class="text-slate-200"><?php _e('24/7 Support Available', 'neotech'); ?></span>
                        </li>
                    </ul>
                </div>
                <div class="relative animate-fade-in">
                    <div class="absolute inset-0 bg-blue-500/20 blur-3xl rounded-full animate-pulse"></div>
                    <div class="relative bg-white/5 backdrop-blur-sm border border-white/10 p-8 rounded-2xl">
                        <p class="text-lg italic text-slate-300 mb-4">
                            "<?php _e('NeoTechnology Solutions transformed our IT infrastructure and helped us achieve 40% cost reduction while improving performance.', 'neotech'); ?>"
                        </p>
                        <p class="font-medium text-white">- <?php _e('Enterprise Client', 'neotech'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_why_us', 'neotech_why_us_shortcode');

/**
 * 12. LATEST INSIGHTS
 * [neotech_latest_insights]
 */
function neotech_latest_insights_shortcode() {
    ob_start();
    ?>
    <section id="latest-insights" class="py-16 px-6 bg-white">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-12 animate-slide-up">
                <h2 class="text-4xl font-light tracking-tight mb-4 text-slate-900"><?php _e('Latest Insights', 'neotech'); ?></h2>
                <p class="text-xl text-slate-600"><?php _e('Thoughts on the changing landscape of enterprise IT.', 'neotech'); ?></p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Insight 1 -->
                <article class="group cursor-pointer animate-fade-in">
                    <div class="aspect-video bg-slate-100 rounded-xl mb-4 overflow-hidden relative">
                        <div class="absolute inset-0 bg-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                        <div class="w-full h-full bg-slate-200 group-hover:scale-105 transition-transform duration-500"></div>
                    </div>
                    <h3 class="text-xl font-medium text-slate-900 mb-2 group-hover:text-blue-600 transition-colors"><?php _e('The Cloud Exit Strategy', 'neotech'); ?></h3>
                    <p class="text-sm text-slate-500"><?php _e('Why having a way out is as important as getting in.', 'neotech'); ?></p>
                </article>

                <!-- Insight 2 -->
                <article class="group cursor-pointer animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="aspect-video bg-slate-100 rounded-xl mb-4 overflow-hidden relative">
                         <div class="absolute inset-0 bg-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                         <div class="w-full h-full bg-slate-200 group-hover:scale-105 transition-transform duration-500"></div>
                    </div>
                    <h3 class="text-xl font-medium text-slate-900 mb-2 group-hover:text-blue-600 transition-colors"><?php _e('Vendor Management 101', 'neotech'); ?></h3>
                    <p class="text-sm text-slate-500"><?php _e('How to keep your partners honest and aligned.', 'neotech'); ?></p>
                </article>

                <!-- Insight 3 -->
                <article class="group cursor-pointer animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="aspect-video bg-slate-100 rounded-xl mb-4 overflow-hidden relative">
                         <div class="absolute inset-0 bg-blue-600/10 opacity-0 group-hover:opacity-100 transition-opacity z-10"></div>
                         <div class="w-full h-full bg-slate-200 group-hover:scale-105 transition-transform duration-500"></div>
                    </div>
                    <h3 class="text-xl font-medium text-slate-900 mb-2 group-hover:text-blue-600 transition-colors"><?php _e('Technical Debt vs. Investment', 'neotech'); ?></h3>
                    <p class="text-sm text-slate-500"><?php _e('Knowing the difference saves millions.', 'neotech'); ?></p>
                </article>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_latest_insights', 'neotech_latest_insights_shortcode');

/**
 * Shortcode: Display Social Icons
 * [neotech_social_links]
 */
function neotech_social_links_shortcode() {
    $linkedin = get_theme_mod('neotech_linkedin');
    $twitter  = get_theme_mod('neotech_twitter');
    $youtube  = get_theme_mod('neotech_youtube');

    if (!$linkedin && !$twitter && !$youtube) return '';

    ob_start();
    ?>
    <div class="flex items-center gap-4 social-links">
        <?php if ($linkedin): ?>
            <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-[#0077b5] transition-colors" aria-label="LinkedIn">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
        <?php endif; ?>
        
        <?php if ($twitter): ?>
            <a href="<?php echo esc_url($twitter); ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-black transition-colors" aria-label="Twitter / X">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
            </a>
        <?php endif; ?>

        <?php if ($youtube): ?>
            <a href="<?php echo esc_url($youtube); ?>" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-[#FF0000] transition-colors" aria-label="YouTube">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_social_links', 'neotech_social_links_shortcode');

/**
 * 13. TRUST BADGES / CREDENTIALS
 * [neotech_trust_badges]
 */
function neotech_trust_badges_shortcode() {
    ob_start();
    ?>
    <section id="trust" class="py-12 px-6 bg-slate-50 border-y border-slate-200">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-8">
                <p class="text-sm font-medium text-slate-500 uppercase tracking-wider"><?php _e('Trusted By Businesses Worldwide', 'neotech'); ?></p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Badge 1: Certified -->
                <div class="bg-white rounded-xl p-6 border border-slate-200 text-center">
                    <div class="w-12 h-12 bg-slate-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <h4 class="font-medium text-slate-900 mb-1"><?php _e('Certified Experts', 'neotech'); ?></h4>
                    <p class="text-sm text-slate-500"><?php _e('AWS, Azure, GCP certified', 'neotech'); ?></p>
                </div>

                <!-- Badge 2: Secure -->
                <div class="bg-white rounded-xl p-6 border border-slate-200 text-center">
                    <div class="w-12 h-12 bg-slate-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h4 class="font-medium text-slate-900 mb-1"><?php _e('Data Security', 'neotech'); ?></h4>
                    <p class="text-sm text-slate-500"><?php _e('NDA & compliance ready', 'neotech'); ?></p>
                </div>

                <!-- Badge 3: Support -->
                <div class="bg-white rounded-xl p-6 border border-slate-200 text-center">
                    <div class="w-12 h-12 bg-slate-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h4 class="font-medium text-slate-900 mb-1"><?php _e('24/7 Support', 'neotech'); ?></h4>
                    <p class="text-sm text-slate-500"><?php _e('Always available', 'neotech'); ?></p>
                </div>

                <!-- Badge 4: Registered -->
                <div class="bg-white rounded-xl p-6 border border-slate-200 text-center">
                    <div class="w-12 h-12 bg-slate-900 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h4 class="font-medium text-slate-900 mb-1"><?php _e('Registered LLC', 'neotech'); ?></h4>
                    <p class="text-sm text-slate-500"><?php _e('Wyoming, USA', 'neotech'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_trust_badges', 'neotech_trust_badges_shortcode');

/**
 * 14. ENGAGEMENT STEPS (Two-Step Process)
 * [neotech_engagement_steps]
 */
function neotech_engagement_steps_shortcode() {
    ob_start();
    $is_rtl = is_rtl();
    ?>
    <section class="py-12 px-6 bg-slate-50 rounded-3xl border border-slate-200 mb-12">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-medium text-slate-900 mb-2"><?php _e('Our Engagement Process', 'neotech'); ?></h2>
                <p class="text-slate-600"><?php _e('We believe in understanding before advising. That\'s why we start with a brief discovery call.', 'neotech'); ?></p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Step 1: Discovery Call -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200 relative">
                    <div class="absolute -top-3 <?php echo $is_rtl ? 'right-6' : 'left-6'; ?>">
                        <span class="bg-slate-900 text-white text-xs font-medium px-3 py-1 rounded-full"><?php _e('Step 1', 'neotech'); ?></span>
                    </div>
                    <div class="pt-4">
                        <h3 class="text-xl font-medium text-slate-900 mb-2"><?php _e('Discovery Call', 'neotech'); ?></h3>
                        <p class="text-3xl font-light text-slate-400 mb-4">15-30 <span class="text-base"><?php _e('min', 'neotech'); ?></span></p>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span><?php _e('Understand your challenges', 'neotech'); ?></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span><?php _e('Determine if we\'re a good fit', 'neotech'); ?></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span><?php _e('No obligation, completely free', 'neotech'); ?></span>
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100">
                            <span class="inline-flex items-center gap-1 text-sm font-medium text-green-600">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <?php _e('FREE', 'neotech'); ?>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Arrow between steps (hidden on mobile) -->
                <div class="hidden md:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10">
                    <?php if ($is_rtl): ?>
                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    <?php else: ?>
                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    <?php endif; ?>
                </div>

                <!-- Step 2: Strategy Session -->
                <div class="bg-white rounded-2xl p-8 border border-slate-200 relative">
                    <div class="absolute -top-3 <?php echo $is_rtl ? 'right-6' : 'left-6'; ?>">
                        <span class="bg-slate-900 text-white text-xs font-medium px-3 py-1 rounded-full"><?php _e('Step 2', 'neotech'); ?></span>
                    </div>
                    <div class="pt-4">
                        <h3 class="text-xl font-medium text-slate-900 mb-2"><?php _e('Strategy Session', 'neotech'); ?></h3>
                        <p class="text-3xl font-light text-slate-400 mb-4">60 <span class="text-base"><?php _e('min', 'neotech'); ?></span></p>
                        <ul class="space-y-2 text-sm text-slate-600">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span><?php _e('Deep-dive into requirements', 'neotech'); ?></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span><?php _e('Present preliminary approach', 'neotech'); ?></span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span><?php _e('Discuss engagement options', 'neotech'); ?></span>
                            </li>
                        </ul>
                        <div class="mt-6 pt-4 border-t border-slate-100">
                            <span class="text-sm text-slate-500"><?php _e('If aligned after discovery call', 'neotech'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_engagement_steps', 'neotech_engagement_steps_shortcode');

/**
 * 15. CONTACT INFO SIDEBAR
 * [neotech_contact_info]
 */
function neotech_contact_info_shortcode() {
    ob_start();
    ?>
    <div class="bg-slate-50 rounded-2xl p-8 border border-slate-200 space-y-6">
        <h3 class="text-lg font-medium text-slate-900 mb-6"><?php _e('Contact Information', 'neotech'); ?></h3>

        <!-- Email -->
        <div class="flex items-start gap-4">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-slate-200 flex-shrink-0">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 mb-1"><?php _e('Email', 'neotech'); ?></p>
                <a href="mailto:info@neotechnology.solutions" class="text-slate-900 font-medium hover:text-slate-700 transition-colors">
                    info@neotechnology.solutions
                </a>
            </div>
        </div>

        <!-- Phone/WhatsApp -->
        <div class="flex items-start gap-4">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-slate-200 flex-shrink-0">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 mb-1"><?php _e('Phone / WhatsApp', 'neotech'); ?></p>
                <a href="tel:+13075073999" class="text-slate-900 font-medium hover:text-slate-700 transition-colors">
                    +1 (307) 507-3999
                </a>
            </div>
        </div>

        <!-- Working Hours -->
        <div class="flex items-start gap-4">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-slate-200 flex-shrink-0">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 mb-1"><?php _e('Working Hours', 'neotech'); ?></p>
                <p class="text-slate-900 font-medium"><?php _e('Sun - Thu: 9AM - 5PM', 'neotech'); ?></p>
                <p class="text-xs text-slate-500">(AST / UTC+3)</p>
            </div>
        </div>

        <!-- Response Time -->
        <div class="flex items-start gap-4">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-slate-200 flex-shrink-0">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 mb-1"><?php _e('Response Time', 'neotech'); ?></p>
                <p class="text-slate-900 font-medium"><?php _e('Within 1 business day', 'neotech'); ?></p>
            </div>
        </div>

        <!-- Location -->
        <div class="flex items-start gap-4">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center border border-slate-200 flex-shrink-0">
                <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
            </div>
            <div>
                <p class="text-xs text-slate-500 mb-1"><?php _e('Location', 'neotech'); ?></p>
                <p class="text-slate-900 font-medium"><?php _e('Wyoming, USA', 'neotech'); ?></p>
                <p class="text-xs text-slate-500"><?php _e('Serving clients globally', 'neotech'); ?></p>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-slate-200 pt-6">
            <p class="text-sm text-slate-600 mb-4"><?php _e('Prefer to schedule directly?', 'neotech'); ?></p>
            <a href="#" class="inline-flex items-center gap-2 w-full justify-center bg-white border border-slate-300 text-slate-700 px-4 py-3 rounded-xl font-medium hover:bg-slate-50 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <?php _e('Book a Time Slot', 'neotech'); ?>
            </a>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_contact_info', 'neotech_contact_info_shortcode');

/**
 * 16. ENHANCED INTAKE FORM
 * [neotech_intake_form]
 */
function neotech_intake_form_shortcode() {
    ob_start();

    $industries = [
        'technology'    => __('Technology & Software', 'neotech'),
        'finance'       => __('Finance & Banking', 'neotech'),
        'healthcare'    => __('Healthcare & Life Sciences', 'neotech'),
        'retail'        => __('Retail & E-commerce', 'neotech'),
        'manufacturing' => __('Manufacturing & Industrial', 'neotech'),
        'government'    => __('Government & Public Sector', 'neotech'),
        'education'     => __('Education & Research', 'neotech'),
        'energy'        => __('Energy & Utilities', 'neotech'),
        'real_estate'   => __('Real Estate & Construction', 'neotech'),
        'other'         => __('Other', 'neotech'),
    ];
    ?>
    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm">
        <h3 class="text-xl font-medium text-slate-900 mb-6"><?php _e('Request a Discovery Call', 'neotech'); ?></h3>

        <?php
        // Use Contact Form 7 if available
        if (shortcode_exists('contact-form-7')) {
            $form = get_page_by_path('discovery-call-request', OBJECT, 'wpcf7_contact_form');
            if ($form) {
                echo do_shortcode('[contact-form-7 id="' . $form->ID . '"]');
            } else {
                // Fallback to custom form
                neotech_render_intake_form($industries);
            }
        } else {
            // Custom mailto form with qualification fields
            neotech_render_intake_form($industries);
        }
        ?>
    </div>
    <?php
    return ob_get_clean();
}

/**
 * Helper: Render intake form HTML
 */
function neotech_render_intake_form($industries) {
    ?>
    <form action="mailto:info@neotechnology.solutions" method="post" enctype="text/plain" class="space-y-6">
        <!-- Company Name -->
        <div>
            <label for="company" class="block text-sm font-medium text-slate-900 mb-2">
                <?php _e('Company Name', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <input type="text" id="company" name="company" required
                   class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                   placeholder="<?php esc_attr_e('Your organization', 'neotech'); ?>">
        </div>

        <!-- Your Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-slate-900 mb-2">
                <?php _e('Your Name', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <input type="text" id="name" name="name" required
                   class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                   placeholder="<?php esc_attr_e('Full name', 'neotech'); ?>">
        </div>

        <!-- Business Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-slate-900 mb-2">
                <?php _e('Business Email', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <input type="email" id="email" name="email" required
                   class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                   placeholder="you@company.com">
        </div>

        <!-- Phone -->
        <div>
            <label for="phone" class="block text-sm font-medium text-slate-900 mb-2">
                <?php _e('Phone (WhatsApp preferred)', 'neotech'); ?>
            </label>
            <input type="tel" id="phone" name="phone"
                   class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white"
                   placeholder="+1 XXX XXX XXXX">
        </div>

        <!-- Company Size -->
        <div>
            <label class="block text-sm font-medium text-slate-900 mb-3">
                <?php _e('Company Size', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <div class="grid grid-cols-2 gap-3">
                <label class="relative">
                    <input type="radio" name="company_size" value="1-10" required class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm text-slate-700">1-10</span>
                    </div>
                </label>
                <label class="relative">
                    <input type="radio" name="company_size" value="11-50" class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm text-slate-700">11-50</span>
                    </div>
                </label>
                <label class="relative">
                    <input type="radio" name="company_size" value="51-200" class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm text-slate-700">51-200</span>
                    </div>
                </label>
                <label class="relative">
                    <input type="radio" name="company_size" value="200+" class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm text-slate-700">200+</span>
                    </div>
                </label>
            </div>
        </div>

        <!-- Industry -->
        <div>
            <label for="industry" class="block text-sm font-medium text-slate-900 mb-2">
                <?php _e('Industry', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <select id="industry" name="industry" required
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white">
                <option value=""><?php _e('Select your industry', 'neotech'); ?></option>
                <?php foreach ($industries as $value => $label): ?>
                    <option value="<?php echo esc_attr($value); ?>"><?php echo esc_html($label); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Service Interest (Multi-select) -->
        <div>
            <label class="block text-sm font-medium text-slate-900 mb-3">
                <?php _e('Service Interest', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <div class="space-y-2">
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="checkbox" name="services[]" value="cloud" class="w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900">
                    <span class="text-sm text-slate-700"><?php _e('Cloud & Infrastructure', 'neotech'); ?></span>
                </label>
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="checkbox" name="services[]" value="digital" class="w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900">
                    <span class="text-sm text-slate-700"><?php _e('Digital Transformation', 'neotech'); ?></span>
                </label>
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="checkbox" name="services[]" value="security" class="w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900">
                    <span class="text-sm text-slate-700"><?php _e('Cybersecurity', 'neotech'); ?></span>
                </label>
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="checkbox" name="services[]" value="strategy" class="w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900">
                    <span class="text-sm text-slate-700"><?php _e('IT Strategy Consulting', 'neotech'); ?></span>
                </label>
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="checkbox" name="services[]" value="other" class="w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900">
                    <span class="text-sm text-slate-700"><?php _e('Other', 'neotech'); ?></span>
                </label>
            </div>
        </div>

        <!-- Project Clarity -->
        <div>
            <label class="block text-sm font-medium text-slate-900 mb-3">
                <?php _e('Project Clarity', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <div class="space-y-2">
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="radio" name="clarity" value="clear" required class="w-4 h-4 text-slate-900 border-slate-300 focus:ring-slate-900">
                    <div>
                        <span class="text-sm font-medium text-slate-700"><?php _e('I have a clear project', 'neotech'); ?></span>
                        <p class="text-xs text-slate-500"><?php _e('Defined scope and requirements', 'neotech'); ?></p>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="radio" name="clarity" value="general" class="w-4 h-4 text-slate-900 border-slate-300 focus:ring-slate-900">
                    <div>
                        <span class="text-sm font-medium text-slate-700"><?php _e('I have a general idea', 'neotech'); ?></span>
                        <p class="text-xs text-slate-500"><?php _e('Know the problem, need help defining solution', 'neotech'); ?></p>
                    </div>
                </label>
                <label class="flex items-center gap-3 p-3 rounded-xl border border-slate-300 cursor-pointer hover:bg-slate-50 transition-colors">
                    <input type="radio" name="clarity" value="guidance" class="w-4 h-4 text-slate-900 border-slate-300 focus:ring-slate-900">
                    <div>
                        <span class="text-sm font-medium text-slate-700"><?php _e('I need guidance', 'neotech'); ?></span>
                        <p class="text-xs text-slate-500"><?php _e('Exploring options and need expert direction', 'neotech'); ?></p>
                    </div>
                </label>
            </div>
        </div>

        <!-- Timeline -->
        <div>
            <label class="block text-sm font-medium text-slate-900 mb-3">
                <?php _e('Timeline', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <div class="grid grid-cols-2 gap-3">
                <label class="relative">
                    <input type="radio" name="timeline" value="urgent" required class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm font-medium text-slate-700"><?php _e('Urgent', 'neotech'); ?></span>
                        <p class="text-xs text-slate-500"><?php _e('< 1 month', 'neotech'); ?></p>
                    </div>
                </label>
                <label class="relative">
                    <input type="radio" name="timeline" value="near-term" class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm font-medium text-slate-700"><?php _e('Near-term', 'neotech'); ?></span>
                        <p class="text-xs text-slate-500"><?php _e('1-3 months', 'neotech'); ?></p>
                    </div>
                </label>
                <label class="relative">
                    <input type="radio" name="timeline" value="planning" class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm font-medium text-slate-700"><?php _e('Planning', 'neotech'); ?></span>
                        <p class="text-xs text-slate-500"><?php _e('3-6 months', 'neotech'); ?></p>
                    </div>
                </label>
                <label class="relative">
                    <input type="radio" name="timeline" value="exploring" class="peer sr-only">
                    <div class="p-3 rounded-xl border border-slate-300 text-center cursor-pointer peer-checked:border-slate-900 peer-checked:bg-slate-50 hover:bg-slate-50 transition-colors">
                        <span class="text-sm font-medium text-slate-700"><?php _e('Exploring', 'neotech'); ?></span>
                        <p class="text-xs text-slate-500"><?php _e('No rush', 'neotech'); ?></p>
                    </div>
                </label>
            </div>
        </div>

        <!-- Vendor Introductions -->
        <div>
            <label for="intro_request" class="block text-sm font-medium text-slate-900 mb-2">
                <?php _e('Do you want vendor introductions?', 'neotech'); ?>
            </label>
            <select id="intro_request" name="intro_request"
                    class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white">
                <option value="no"><?php _e('No, advisory only', 'neotech'); ?></option>
                <option value="yes"><?php _e('Yes, I want introductions (disclosure required)', 'neotech'); ?></option>
                <option value="unsure"><?php _e('Not sure', 'neotech'); ?></option>
            </select>
            <p class="mt-2 text-xs text-slate-500">
                <?php
                printf(
                    __('If yes, referral fees are disclosed per our %sDisclosure Policy%s.', 'neotech'),
                    '<a href="' . esc_url(home_url('/disclosure/')) . '" class="text-slate-700 underline hover:no-underline">',
                    '</a>'
                );
                ?>
            </p>
        </div>

        <!-- Message -->
        <div>
            <label for="message" class="block text-sm font-medium text-slate-900 mb-2">
                <?php _e('Tell us about your situation', 'neotech'); ?> <span class="text-red-500">*</span>
            </label>
            <textarea id="message" name="message" rows="4" required
                      class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 bg-white resize-none"
                      placeholder="<?php esc_attr_e('Brief description of your challenges and what you\'re hoping to achieve...', 'neotech'); ?>"></textarea>
        </div>

        <!-- Privacy Consent -->
        <div class="bg-slate-50 rounded-xl p-4">
            <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" name="consent" required
                       class="mt-1 w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900">
                <span class="text-sm text-slate-700 leading-relaxed">
                    <?php
                    printf(
                        __('I agree to receive communications from NeoTechnology Solutions LLC and accept the %sPrivacy Policy%s.', 'neotech'),
                        '<a href="' . esc_url(home_url('/privacy/')) . '" class="text-slate-900 underline hover:no-underline">',
                        '</a>'
                    );
                    ?>
                </span>
            </label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="w-full btn btn-primary text-base py-4">
            <?php _e('Request Discovery Call', 'neotech'); ?>
        </button>

        <p class="text-center text-sm text-slate-500">
            <?php _e('No commitment. No pressure. Just a conversation.', 'neotech'); ?>
        </p>
    </form>
    <?php
}
add_shortcode('neotech_intake_form', 'neotech_intake_form_shortcode');

/**
 * 17. WHAT TO EXPECT
 * [neotech_what_to_expect]
 */
function neotech_what_to_expect_shortcode() {
    ob_start();
    $steps = [
        [__('We review your inquiry', 'neotech'), __('Same business day', 'neotech')],
        [__('We reach out to schedule', 'neotech'), __('Via email or WhatsApp', 'neotech')],
        [__('Discovery call', 'neotech'), __('15-30 min to understand your needs', 'neotech')],
        [__('If aligned, strategy session', 'neotech'), __('60 min deep-dive', 'neotech')],
        [__('Proposal & next steps', 'neotech'), __('Clear path forward', 'neotech')],
    ];
    ?>
    <section class="py-12 px-6 bg-white rounded-3xl border border-slate-200 mt-12">
        <div class="max-w-3xl mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-medium text-slate-900 mb-2"><?php _e('What to Expect', 'neotech'); ?></h2>
                <p class="text-slate-600"><?php _e('After you submit, here\'s what happens:', 'neotech'); ?></p>
            </div>

            <div class="space-y-4">
                <?php foreach ($steps as $index => $step): ?>
                <div class="flex items-start gap-4 p-4 rounded-xl bg-slate-50">
                    <div class="w-8 h-8 bg-slate-900 text-white rounded-full flex items-center justify-center text-sm font-medium flex-shrink-0">
                        <?php echo $index + 1; ?>
                    </div>
                    <div>
                        <p class="font-medium text-slate-900"><?php echo $step[0]; ?></p>
                        <p class="text-sm text-slate-500"><?php echo $step[1]; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="mt-8 text-center p-6 bg-slate-50 rounded-xl">
                <p class="text-slate-700 font-medium"><?php _e('No pressure. No commitment until you\'re ready.', 'neotech'); ?></p>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('neotech_what_to_expect', 'neotech_what_to_expect_shortcode');
