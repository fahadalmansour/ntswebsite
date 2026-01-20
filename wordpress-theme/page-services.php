<?php
/**
 * Template Name: Services
 * 
 * @package NeoTechnology_Solutions
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 px-6 bg-white border-b border-slate-100">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-slate-50 border border-slate-200 text-sky-600 text-xs font-medium tracking-wide uppercase mb-6">
                <?php _e('Our Capabilities', 'neotech'); ?>
            </span>
            <h1 class="text-4xl md:text-6xl font-light text-slate-900 mb-6 tracking-tight">
                <?php _e('Advisory Services', 'neotech'); ?>
            </h1>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                <?php _e('Vendor-neutral guidance for complex technology decisions. We help you evaluate options, understand trade-offs, and choose with confidence.', 'neotech'); ?>
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12">
                
                <!-- Service 1: Cloud & Infrastructure -->
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 md:p-10 transition-shadow hover:shadow-lg">
                    <div class="w-14 h-14 bg-sky-100 rounded-2xl flex items-center justify-center mb-8">
                        <svg class="w-7 h-7 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-medium text-slate-900 mb-4"><?php _e('Cloud & Infrastructure Strategy', 'neotech'); ?></h2>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        <?php _e('Organizations face critical decisions about cloud adoption, provider selection, and infrastructure architecture. We provide independent analysis to guide these choices.', 'neotech'); ?>
                    </p>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('We Help With', 'neotech'); ?></h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-sky-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Cloud vs. on-premise vs. hybrid architecture decisions', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-sky-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Multi-cloud strategy evaluation and provider comparison', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-sky-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Migration approach assessment and sequencing', 'neotech'); ?>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="pt-6 border-t border-slate-200">
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('Deliverables', 'neotech'); ?></h3>
                            <p class="text-sm text-slate-600">
                                <?php _e('Cloud readiness assessment, Provider comparison matrix, Migration trade-off analysis.', 'neotech'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 2: Digital Transformation -->
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 md:p-10 transition-shadow hover:shadow-lg">
                    <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center mb-8">
                        <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-medium text-slate-900 mb-4"><?php _e('Digital Transformation Advisory', 'neotech'); ?></h2>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        <?php _e('Modernizing technology requires evaluating platforms, integration approaches, and transformation sequencing. We help you build a technology roadmap aligned with business objectives.', 'neotech'); ?>
                    </p>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('We Help With', 'neotech'); ?></h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Current state assessment and technology landscape mapping', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Platform and technology stack evaluation', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-purple-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Process automation opportunity identification', 'neotech'); ?>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="pt-6 border-t border-slate-200">
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('Deliverables', 'neotech'); ?></h3>
                            <p class="text-sm text-slate-600">
                                <?php _e('Technology landscape map, Transformation options analysis, Platform evaluation framework.', 'neotech'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 3: Cybersecurity & Compliance -->
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 md:p-10 transition-shadow hover:shadow-lg">
                    <div class="w-14 h-14 bg-emerald-100 rounded-2xl flex items-center justify-center mb-8">
                        <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-medium text-slate-900 mb-4"><?php _e('Cybersecurity & Compliance', 'neotech'); ?></h2>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        <?php _e('Security and compliance decisions require balancing risk, investment, and operational impact. We help you prioritize and select the right approach for your organization.', 'neotech'); ?>
                    </p>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('We Help With', 'neotech'); ?></h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Security framework selection (ISO 27001, NIST, SOC 2)', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Compliance gap analysis and readiness assessment', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Security vendor evaluation criteria', 'neotech'); ?>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="pt-6 border-t border-slate-200">
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('Deliverables', 'neotech'); ?></h3>
                            <p class="text-sm text-slate-600">
                                <?php _e('Security posture assessment, Compliance roadmap, Risk register with prioritizations.', 'neotech'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Service 4: Vendor Selection -->
                <div class="bg-slate-50 border border-slate-200 rounded-3xl p-8 md:p-10 transition-shadow hover:shadow-lg">
                    <div class="w-14 h-14 bg-amber-100 rounded-2xl flex items-center justify-center mb-8">
                        <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-medium text-slate-900 mb-4"><?php _e('Vendor Selection & Governance', 'neotech'); ?></h2>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        <?php _e('Selecting the right technology vendors requires structured evaluation beyond sales presentations. We help you ask the right questions and compare objectively.', 'neotech'); ?>
                    </p>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('We Help With', 'neotech'); ?></h3>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Requirements definition and RFP development', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Vendor shortlisting and evaluation criteria', 'neotech'); ?>
                                </li>
                                <li class="flex items-start gap-3 text-slate-700 text-sm">
                                    <svg class="w-5 h-5 text-amber-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    <?php _e('Reference check frameworks', 'neotech'); ?>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="pt-6 border-t border-slate-200">
                            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wider mb-3"><?php _e('Deliverables', 'neotech'); ?></h3>
                            <p class="text-sm text-slate-600">
                                <?php _e('Requirements specification, Vendor evaluation scorecard, Selection recommendation.', 'neotech'); ?>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Boundaries Reminder -->
    <section class="py-20 px-6 bg-slate-50 border-t border-slate-200">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-light text-slate-900 mb-6"><?php _e('Advisory Only', 'neotech'); ?></h2>
            <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                <?php _e('We do not implement solutions, manage projects, or provide ongoing support. Our role is to provide the analysis and recommendations that enable your informed decision. Execution is the responsibility of your team or selected vendors.', 'neotech'); ?>
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-lg border border-slate-200 text-sm text-slate-500">
                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    <?php _e('No Implementation', 'neotech'); ?>
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-lg border border-slate-200 text-sm text-slate-500">
                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    <?php _e('No Managed Services', 'neotech'); ?>
                </span>
                <span class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-lg border border-slate-200 text-sm text-slate-500">
                    <svg class="w-4 h-4 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    <?php _e('No Products For Sale', 'neotech'); ?>
                </span>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 px-6 bg-slate-900 text-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-light mb-6"><?php _e('Discuss Your Situation', 'neotech'); ?></h2>
            <p class="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
                <?php _e("Every organization's context is different. Contact us to discuss your specific decision and determine if our advisory approach is appropriate.", 'neotech'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-sky-500 text-white rounded-full font-medium text-lg hover:bg-sky-400 transition-colors shadow-lg hover:shadow-sky-500/30">
                <?php _e('Request a Conversation', 'neotech'); ?>
                <svg class="w-5 h-5 ml-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </section>

</main>

<?php
get_footer();
