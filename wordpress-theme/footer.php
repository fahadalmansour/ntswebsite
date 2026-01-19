<?php
/**
 * The footer template
 *
 * @package NeoTechnology_Solutions
 */

$is_rtl = is_rtl();
?>
    </div><!-- #content -->

    <footer id="colophon" class="site-footer bg-slate-50 border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-16">
            <!-- Footer Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Company Info -->
                <div class="lg:col-span-2">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="neotech-footer-logo inline-flex items-center gap-3 mb-4">
                        <svg class="neotech-logo-icon" width="60" height="24" viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- N -->
                            <path d="M4 36 L4 4 L20 36 L20 4" stroke="#0a1628" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                            <!-- T -->
                            <path d="M30 4 L50 4" stroke="#0a1628" stroke-width="4" stroke-linecap="round"/>
                            <path d="M40 4 L40 36" stroke="#0a1628" stroke-width="4" stroke-linecap="round"/>
                            <!-- S -->
                            <path d="M56 10 C56 4 60 4 66 4 L74 4 C80 4 84 4 84 10 C84 16 80 18 74 18 L66 18 C60 18 56 20 56 26 L56 30 C56 36 60 36 66 36 L74 36 C80 36 84 36 84 30" stroke="#3d4f5f" stroke-width="5" stroke-linecap="round" fill="none"/>
                        </svg>
                        <span class="neotech-logo-text">
                            <span class="neotech-logo-neo">Neo</span><span class="neotech-logo-tech">Technology</span>
                        </span>
                    </a>
                    <p class="text-sm text-slate-500 mb-4"><?php _e('Solutions LLC', 'neotech'); ?></p>
                    <p class="text-slate-600 mb-4 max-w-md">
                        <?php _e('Professional IT consulting services for businesses. We provide strategic technology guidance, system architecture consulting, and digital transformation expertise.', 'neotech'); ?>
                    </p>
                    <p class="text-sm text-slate-500">
                        <?php _e('Your trusted technology partner', 'neotech'); ?>
                    </p>
                </div>

                <!-- Legal Links -->
                <div>
                    <h4 class="font-medium text-slate-900 mb-4"><?php _e('Legal', 'neotech'); ?></h4>
                    <nav class="space-y-2">
                        <a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="block text-slate-600 hover:text-slate-900 transition-colors text-sm">
                            <?php _e('Privacy Policy', 'neotech'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/cookies/')); ?>" class="block text-slate-600 hover:text-slate-900 transition-colors text-sm">
                            <?php _e('Cookie Policy', 'neotech'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/terms/')); ?>" class="block text-slate-600 hover:text-slate-900 transition-colors text-sm">
                            <?php _e('Terms of Use', 'neotech'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/disclaimer/')); ?>" class="block text-slate-600 hover:text-slate-900 transition-colors text-sm">
                            <?php _e('Advisory Disclaimer', 'neotech'); ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/disclosure/')); ?>" class="block text-slate-600 hover:text-slate-900 transition-colors text-sm">
                            <?php _e('Disclosure Policy', 'neotech'); ?>
                        </a>
                    </nav>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-medium text-slate-900 mb-4"><?php _e('Contact', 'neotech'); ?></h4>
                    <div class="space-y-3">
                        <!-- Email -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <p class="text-xs text-slate-500 mb-1"><?php _e('Email', 'neotech'); ?></p>
                                <a href="mailto:info@neotechnology.solutions" class="text-slate-700 hover:text-slate-900 transition-colors text-sm font-medium">
                                    info@neotechnology.solutions
                                </a>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div>
                                <p class="text-xs text-slate-500 mb-1"><?php _e('Phone / WhatsApp', 'neotech'); ?></p>
                                <a href="tel:+13075073999" class="text-slate-700 hover:text-slate-900 transition-colors text-sm font-medium">
                                    +1 (307) 507-3999
                                </a>
                            </div>
                        </div>
                        
                        <!-- Location -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <div>
                                <p class="text-xs text-slate-500 mb-1"><?php _e('Location', 'neotech'); ?></p>
                                <p class="text-slate-700 text-sm font-medium">
                                    1021 E Lincolnway, Suite 8983<br>
                                    Cheyenne, WY 82001, USA
                                </p>
                            </div>
                        </div>
                        
                        <!-- Working Hours -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-slate-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div>
                                <p class="text-xs text-slate-500 mb-1"><?php _e('Working Hours', 'neotech'); ?></p>
                                <p class="text-slate-700 text-sm font-medium">
                                    <?php _e('Sun - Thu: 9AM - 5PM', 'neotech'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Links & CTA -->
                    <div class="mt-6 pt-4 border-t border-slate-200">
                        <div class="mb-4">
                            <?php echo do_shortcode('[neotech_social_links]'); ?>
                        </div>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center gap-2 text-sm font-medium text-slate-900 hover:text-slate-700 transition-colors">
                            <?php _e('Request a Discussion', 'neotech'); ?>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <p class="text-xs text-slate-500 mt-2">
                            <?php _e('We reply within 1 business day', 'neotech'); ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-sm text-slate-500">
                    © <?php echo date('Y'); ?> NeoTechnology Solutions LLC. <?php _e('All rights reserved.', 'neotech'); ?>
                </p>
                <a href="#page" class="text-sm text-slate-600 hover:text-slate-900 transition-colors inline-flex items-center gap-1">
                    <?php _e('Back to top', 'neotech'); ?>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
