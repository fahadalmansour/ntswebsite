<?php
/**
 * Template Name: How We Work
 * 
 * @package NeoTechnology_Solutions
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 px-6 bg-white border-b border-slate-100">
        <div class="max-w-4xl mx-auto text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-slate-50 border border-slate-200 text-slate-600 text-xs font-medium tracking-wide uppercase mb-6">
                <?php _e('Our Methodology', 'neotech'); ?>
            </span>
            <h1 class="text-4xl md:text-6xl font-light text-slate-900 mb-6 tracking-tight">
                <?php _e('How We Work', 'neotech'); ?>
            </h1>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                <?php _e('A structured, predictable approach to technology advisory. We define scope clearly, deliver documented recommendations, and respect boundaries.', 'neotech'); ?>
            </p>
        </div>
    </section>

    <!-- Process Timeline -->
    <section class="py-24 px-6 bg-slate-50">
        <div class="max-w-4xl mx-auto">
            
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-light text-slate-900 mb-4"><?php _e('Our Engagement Process', 'neotech'); ?></h2>
                <div class="w-16 h-1 bg-sky-500 mx-auto rounded-full"></div>
            </div>

            <div class="relative space-y-12 md:space-y-24">
                <!-- Vertical Line (Desktop only) -->
                <div class="hidden md:block absolute left-1/2 top-0 bottom-0 w-px bg-slate-200 -ml-px"></div>

                <?php
                $steps = [
                    [
                        'number' => '01',
                        'title' => __('Decision Session', 'neotech'),
                        'duration' => __('90 Minutes', 'neotech'),
                        'desc' => __('A focused discussion about your decision context. We identify objectives and determine if deeper engagement is warranted.'),
                        'outcome' => __('Initial recommendations & fit determination', 'neotech')
                    ],
                    [
                        'number' => '02',
                        'title' => __('Scoping & Proposal', 'neotech'),
                        'duration' => __('3-5 Days', 'neotech'),
                        'desc' => __('We define the engagement scope, deliverables, timeline, and fees. The proposal is specific and fixed-scope.'),
                        'outcome' => __('Fixed-scope proposal with clear terms', 'neotech')
                    ],
                    [
                        'number' => '03',
                        'title' => __('Context Gathering', 'neotech'),
                        'duration' => __('1-2 Weeks', 'neotech'),
                        'desc' => __('We interview stakeholders, review documentation, and assess current state to understand constraints & requirements.'),
                        'outcome' => __('Documented requirements & constraints', 'neotech')
                    ],
                    [
                        'number' => '04',
                        'title' => __('Options Development', 'neotech'),
                        'duration' => __('1-2 Weeks', 'neotech'),
                        'desc' => __('We develop 2-3 viable approaches. Each option is distinct, with different trade-offs in cost, risk, and capability.'),
                        'outcome' => __('Documented options with clear descriptions', 'neotech')
                    ],
                    [
                        'number' => '05',
                        'title' => __('Trade-off Analysis', 'neotech'),
                        'duration' => __('1 Week', 'neotech'),
                        'desc' => __('We complete detailed analysis of each option, document trade-offs, and develop our recommendation with rationale.'),
                        'outcome' => __('Complete deliverables package', 'neotech')
                    ],
                    [
                        'number' => '06',
                        'title' => __('Presentation & Handoff', 'neotech'),
                        'duration' => __('Scheduled', 'neotech'),
                        'desc' => __('We present findings to leadership, answer questions, and transfer final deliverables for your execution.'),
                        'outcome' => __('Clear path forward for your team', 'neotech')
                    ]
                ];

                foreach ($steps as $index => $step) :
                    $is_even = $index % 2 == 0;
                ?>
                <div class="relative md:flex items-center justify-between group">
                    <!-- Marker -->
                    <div class="hidden md:flex absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 w-12 h-12 bg-white border border-slate-200 rounded-full items-center justify-center text-sm font-bold text-slate-300 shadow-sm z-10 group-hover:border-sky-500 group-hover:text-sky-500 transition-colors">
                        <?php echo $step['number']; ?>
                    </div>

                    <!-- Content Left (or Right on Mobile) -->
                    <div class="md:w-[45%] <?php echo $is_even ? 'md:order-1 text-left md:text-right' : 'md:order-3 text-left'; ?>">
                        <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow relative">
                            <!-- Mobile Number -->
                            <div class="md:hidden absolute -top-4 left-6 bg-slate-900 text-white text-xs font-bold px-3 py-1 rounded-full">
                                <?php echo __('Step', 'neotech') . ' ' . $step['number']; ?>
                            </div>
                            
                            <h3 class="text-xl font-medium text-slate-900 mb-2"><?php echo $step['title']; ?></h3>
                            <span class="inline-block text-xs font-semibold text-sky-600 bg-sky-50 px-2 py-1 rounded mb-4">
                                <?php echo $step['duration']; ?>
                            </span>
                            <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                <?php echo $step['desc']; ?>
                            </p>
                            <div class="pt-4 border-t border-slate-100">
                                <span class="text-xs uppercase tracking-wide text-slate-400 font-medium"><?php _e('Outcome:', 'neotech'); ?></span>
                                <p class="text-slate-800 text-sm font-medium mt-1"><?php echo $step['outcome']; ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Spacer for Grid -->
                    <div class="md:w-[45%] md:order-2"></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <!-- Client Role -->
    <section class="py-20 px-6 bg-white border-y border-slate-200">
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-light text-slate-900 mb-6"><?php _e('Your Role in the Engagement', 'neotech'); ?></h2>
                    <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                        <?php _e('For our advisory to be effective, we rely on a partnership approach. While we provide the analysis, your input is critical.', 'neotech'); ?>
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-slate-700"><?php _e('Access to decision-makers and stakeholders', 'neotech'); ?></span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-slate-700"><?php _e('Relevant documentation (diagrams, policies, contracts)', 'neotech'); ?></span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-slate-700"><?php _e('Honest feedback on priorities and constraints', 'neotech'); ?></span>
                        </li>
                        <li class="flex items-start gap-4">
                            <div class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-slate-700"><?php _e('Timely review of draft deliverables', 'neotech'); ?></span>
                        </li>
                    </ul>
                </div>
                <!-- Simple Visual/Card -->
                <div class="bg-slate-900 rounded-3xl p-8 md:p-12 text-white text-center">
                    <h3 class="text-xl font-medium mb-4"><?php _e('Timeline Estimates', 'neotech'); ?></h3>
                    <div class="space-y-4 text-left">
                        <div class="flex justify-between items-center py-3 border-b border-white/10">
                            <span class="text-slate-400"><?php _e('Decision Session', 'neotech'); ?></span>
                            <span class="font-medium text-sky-400">90 <?php _e('min', 'neotech'); ?></span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-white/10">
                            <span class="text-slate-400"><?php _e('Simple Advisory', 'neotech'); ?></span>
                            <span class="font-medium text-white">2-3 <?php _e('weeks', 'neotech'); ?></span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-white/10">
                            <span class="text-slate-400"><?php _e('Standard Advisory', 'neotech'); ?></span>
                            <span class="font-medium text-white">4-6 <?php _e('weeks', 'neotech'); ?></span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-white/10">
                            <span class="text-slate-400"><?php _e('Complex Advisory', 'neotech'); ?></span>
                            <span class="font-medium text-white">6-8 <?php _e('weeks', 'neotech'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 px-6 bg-slate-50">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-light text-slate-900 mb-6"><?php _e('Start with a Decision Session', 'neotech'); ?></h2>
            <p class="text-xl text-slate-600 mb-10 max-w-2xl mx-auto">
                <?php _e("90 minutes to discuss your specific technology decision. We'll provide initial guidance and determine if deeper engagement is appropriate.", 'neotech'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center justify-center px-8 py-4 bg-slate-900 text-white rounded-full font-medium text-lg hover:bg-slate-800 transition-colors shadow-lg">
                <?php _e('Request a Session', 'neotech'); ?>
                <svg class="w-5 h-5 ml-2 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <p class="text-sm text-slate-500 mt-6"><?php _e('No obligation. We respond within one business day.', 'neotech'); ?></p>
        </div>
    </section>

</main>

<?php
get_footer();
