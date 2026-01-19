<?php
/**
 * Template Name: Services
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
                <?php _e('Our Services', 'neotech'); ?>
            </h1>
            <p class="text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto">
                <?php _e('Comprehensive IT consulting services designed to accelerate your digital transformation and drive business success.', 'neotech'); ?>
            </p>
        </div>
    </section>

    <!-- Cloud & Infrastructure -->
    <section id="cloud" class="py-16 px-6 border-b border-slate-100">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="md:col-span-1">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl text-slate-900 font-medium mb-2"><?php _e('Cloud & Infrastructure', 'neotech'); ?></h2>
                </div>
                <div class="md:col-span-2">
                    <p class="text-slate-700 leading-relaxed mb-6">
                        <?php _e('Design and implement scalable cloud solutions that drive business growth. We help you navigate the complexities of cloud adoption and optimize your infrastructure for performance, security, and cost efficiency.', 'neotech'); ?>
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Cloud Migration', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Strategic planning and execution of cloud migration projects with minimal disruption.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Hybrid Solutions', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Design hybrid architectures that balance on-premise and cloud resources.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Cost Optimization', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Reduce cloud spending through right-sizing, reserved instances, and architecture optimization.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Infrastructure Design', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Architect resilient, scalable infrastructure that supports business growth.', 'neotech'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Transformation -->
    <section id="transformation" class="py-16 px-6 border-b border-slate-100">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="md:col-span-1">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl text-slate-900 font-medium mb-2"><?php _e('Digital Transformation', 'neotech'); ?></h2>
                </div>
                <div class="md:col-span-2">
                    <p class="text-slate-700 leading-relaxed mb-6">
                        <?php _e('Modernize your business processes with cutting-edge technology solutions. We guide you through the digital transformation journey, from strategy development to implementation support.', 'neotech'); ?>
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Process Automation', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Streamline operations with intelligent automation and workflow optimization.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('System Integration', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Connect disparate systems for seamless data flow and unified operations.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Data Analytics', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Transform data into actionable insights with modern analytics platforms.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Legacy Modernization', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Upgrade legacy systems to modern platforms while preserving business logic.', 'neotech'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cybersecurity -->
    <section id="security" class="py-16 px-6 border-b border-slate-100">
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="md:col-span-1">
                    <div class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl text-slate-900 font-medium mb-2"><?php _e('Cybersecurity', 'neotech'); ?></h2>
                </div>
                <div class="md:col-span-2">
                    <p class="text-slate-700 leading-relaxed mb-6">
                        <?php _e('Protect your business with comprehensive security strategies and solutions. We help you build a robust security posture that safeguards your data, systems, and reputation.', 'neotech'); ?>
                    </p>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Security Audits', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Comprehensive assessments to identify vulnerabilities and security gaps.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Compliance', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Navigate regulatory requirements including GDPR, HIPAA, SOC 2, and ISO 27001.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Risk Management', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Develop risk frameworks and mitigation strategies tailored to your business.', 'neotech'); ?></p>
                        </div>
                        <div class="bg-slate-50 rounded-xl p-4">
                            <h4 class="font-medium text-slate-900 mb-2"><?php _e('Security Architecture', 'neotech'); ?></h4>
                            <p class="text-slate-600 text-sm"><?php _e('Design security architectures that protect without impeding productivity.', 'neotech'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Consulting Packages -->
    <section class="py-16 px-6 bg-slate-50">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl text-slate-900 mb-4 font-light text-center"><?php _e('Consulting Packages', 'neotech'); ?></h2>
            <p class="text-slate-600 text-center mb-12 max-w-xl mx-auto"><?php _e('Flexible engagement models tailored to your needs.', 'neotech'); ?></p>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white rounded-2xl p-8 border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-slate-900 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-slate-900"><?php _e('Strategic Consulting', 'neotech'); ?></h3>
                    </div>
                    <p class="text-slate-700 mb-6">
                        <?php _e('Long-term partnership for comprehensive IT strategy, planning, and ongoing guidance for your organization.', 'neotech'); ?>
                    </p>
                    <ul class="space-y-3 text-slate-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Ongoing strategic guidance', 'neotech'); ?>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Technology roadmap development', 'neotech'); ?>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Regular strategy reviews', 'neotech'); ?>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Priority support access', 'neotech'); ?>
                        </li>
                    </ul>
                    <p class="text-sm text-slate-500 mt-6 pt-6 border-t border-slate-100"><?php _e('Ideal for growing businesses seeking transformation.', 'neotech'); ?></p>
                </div>

                <div class="bg-white rounded-2xl p-8 border border-slate-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-slate-900 rounded-xl flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-slate-900"><?php _e('Project-Based Consulting', 'neotech'); ?></h3>
                    </div>
                    <p class="text-slate-700 mb-6">
                        <?php _e('Focused engagement for specific IT initiatives, migrations, or technology implementations.', 'neotech'); ?>
                    </p>
                    <ul class="space-y-3 text-slate-600 text-sm">
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Defined scope and deliverables', 'neotech'); ?>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Expert project guidance', 'neotech'); ?>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Implementation support', 'neotech'); ?>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-slate-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <?php _e('Knowledge transfer', 'neotech'); ?>
                        </li>
                    </ul>
                    <p class="text-sm text-slate-500 mt-6 pt-6 border-t border-slate-100"><?php _e('Clear scope, timeline, and deliverables.', 'neotech'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Expertise -->
    <section class="py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl text-slate-900 mb-4 font-light text-center"><?php _e('Additional Expertise', 'neotech'); ?></h2>
            <p class="text-slate-600 text-center mb-12"><?php _e('Beyond our core services, we offer specialized consulting in:', 'neotech'); ?></p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-slate-50 rounded-xl p-6 text-center">
                    <svg class="w-8 h-8 text-slate-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    <h4 class="font-medium text-slate-900 text-sm"><?php _e('Enterprise Architecture & Design', 'neotech'); ?></h4>
                </div>
                <div class="bg-slate-50 rounded-xl p-6 text-center">
                    <svg class="w-8 h-8 text-slate-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"></path>
                    </svg>
                    <h4 class="font-medium text-slate-900 text-sm"><?php _e('Technology Stack Selection', 'neotech'); ?></h4>
                </div>
                <div class="bg-slate-50 rounded-xl p-6 text-center">
                    <svg class="w-8 h-8 text-slate-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <h4 class="font-medium text-slate-900 text-sm"><?php _e('Vendor Evaluation & Negotiation', 'neotech'); ?></h4>
                </div>
                <div class="bg-slate-50 rounded-xl p-6 text-center">
                    <svg class="w-8 h-8 text-slate-600 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    <h4 class="font-medium text-slate-900 text-sm"><?php _e('IT Governance & Compliance', 'neotech'); ?></h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor Neutrality -->
    <?php echo do_shortcode('[neotech_vendor_neutrality]'); ?>

    <!-- CTA Section -->
    <section class="py-16 px-6 bg-slate-900 text-white">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl mb-6 font-light"><?php _e('Ready to Transform Your IT?', 'neotech'); ?></h2>
            <p class="text-slate-400 mb-8 leading-relaxed">
                <?php _e('Schedule a consultation to discuss how our services can help your business achieve its technology goals.', 'neotech'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center gap-2 bg-white text-slate-900 px-8 py-4 rounded-full text-sm font-medium hover:bg-slate-100 transition-all">
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
