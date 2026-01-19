/**
 * NeoTechnology Solutions - Main JavaScript
 * Handles navigation, form interactions, and UI enhancements
 */

(function() {
    'use strict';

    // ========================================
    // Mobile Navigation Toggle
    // ========================================
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    if (menuToggle && navLinks) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');

            // Update aria-expanded
            const isExpanded = navLinks.classList.contains('active');
            menuToggle.setAttribute('aria-expanded', isExpanded);
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!menuToggle.contains(e.target) && !navLinks.contains(e.target)) {
                navLinks.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Close menu when clicking a link
        navLinks.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                navLinks.classList.remove('active');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // ========================================
    // Smooth Scroll for Anchor Links
    // ========================================
    document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // ========================================
    // Form Validation Enhancement
    // ========================================
    const forms = document.querySelectorAll('form');

    forms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(function(field) {
                // Remove previous error states
                field.classList.remove('error');

                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                }

                // Email validation
                if (field.type === 'email' && field.value) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(field.value)) {
                        isValid = false;
                        field.classList.add('error');
                    }
                }
            });

            // Check consent checkboxes
            const consentCheckboxes = form.querySelectorAll('input[type="checkbox"][required]');
            consentCheckboxes.forEach(function(checkbox) {
                if (!checkbox.checked) {
                    isValid = false;
                    checkbox.parentElement.classList.add('error');
                } else {
                    checkbox.parentElement.classList.remove('error');
                }
            });

            if (!isValid) {
                e.preventDefault();

                // Scroll to first error
                const firstError = form.querySelector('.error');
                if (firstError) {
                    firstError.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                    firstError.focus();
                }
            }
        });

        // Real-time validation feedback
        form.querySelectorAll('input, select, textarea').forEach(function(field) {
            field.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.classList.add('error');
                } else {
                    this.classList.remove('error');
                }
            });

            field.addEventListener('input', function() {
                this.classList.remove('error');
            });
        });
    });

    // ========================================
    // Header Scroll Effect
    // ========================================
    const header = document.querySelector('.header');
    let lastScroll = 0;

    if (header) {
        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            // Add shadow on scroll
            if (currentScroll > 10) {
                header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = 'none';
            }

            lastScroll = currentScroll;
        }, { passive: true });
    }

    // ========================================
    // Intersection Observer for Animations
    // ========================================
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.card, .deliverable-item, .process-step, .case-study');

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            elements.forEach(function(el) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(el);
            });
        }
    };

    // Run animations after page load
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', animateOnScroll);
    } else {
        animateOnScroll();
    }

    // ========================================
    // Character Counter for Textarea
    // ========================================
    const textareas = document.querySelectorAll('textarea');

    textareas.forEach(function(textarea) {
        const helper = textarea.parentElement.querySelector('.form-helper');
        if (helper && helper.textContent.includes('characters')) {
            const maxLength = 1000;

            textarea.addEventListener('input', function() {
                const currentLength = this.value.length;
                const remaining = maxLength - currentLength;

                if (remaining < 100) {
                    helper.style.color = remaining < 0 ? '#ef4444' : '#f59e0b';
                } else {
                    helper.style.color = '';
                }
            });
        }
    });

    // ========================================
    // Print Function for Legal Pages
    // ========================================
    window.printPage = function() {
        window.print();
    };

    // ========================================
    // Cookie Consent (Basic Implementation)
    // ========================================
    const COOKIE_CONSENT_KEY = 'neotech_cookie_consent';

    function checkCookieConsent() {
        return localStorage.getItem(COOKIE_CONSENT_KEY);
    }

    function setCookieConsent(value) {
        localStorage.setItem(COOKIE_CONSENT_KEY, value);
    }

    // Show cookie banner if not consented
    if (!checkCookieConsent()) {
        // Create cookie banner
        const banner = document.createElement('div');
        banner.id = 'cookie-banner';
        banner.innerHTML = `
            <div style="position: fixed; bottom: 0; left: 0; right: 0; background: #0f172a; color: white; padding: 1rem; z-index: 9999; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <p style="margin: 0; flex: 1; min-width: 200px;">We use essential cookies for site functionality. <a href="cookies.html" style="color: #38bdf8;">Learn more</a></p>
                <div style="display: flex; gap: 0.5rem;">
                    <button onclick="acceptCookies()" style="padding: 0.5rem 1rem; background: #0ea5e9; color: white; border: none; border-radius: 0.375rem; cursor: pointer; font-weight: 500;">Accept</button>
                    <button onclick="declineCookies()" style="padding: 0.5rem 1rem; background: transparent; color: white; border: 1px solid #475569; border-radius: 0.375rem; cursor: pointer; font-weight: 500;">Essential Only</button>
                </div>
            </div>
        `;
        document.body.appendChild(banner);
    }

    window.acceptCookies = function() {
        setCookieConsent('all');
        const banner = document.getElementById('cookie-banner');
        if (banner) banner.remove();
    };

    window.declineCookies = function() {
        setCookieConsent('essential');
        const banner = document.getElementById('cookie-banner');
        if (banner) banner.remove();
    };

    // ========================================
    // Language Detection (Auto-redirect)
    // ========================================
    function detectLanguagePreference() {
        // Check if on root index
        if (window.location.pathname === '/' || window.location.pathname === '/index.html') {
            const savedLang = localStorage.getItem('neotech_lang');
            const browserLang = navigator.language || navigator.userLanguage;

            if (savedLang === 'ar' || (!savedLang && browserLang.startsWith('ar'))) {
                // Redirect to Arabic
                // window.location.href = '/ar/';
            }
        }
    }

    // Save language preference when switching
    document.querySelectorAll('.lang-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            const lang = this.href.includes('/ar/') ? 'ar' : 'en';
            localStorage.setItem('neotech_lang', lang);
        });
    });

    // ========================================
    // Accessibility Enhancements
    // ========================================

    // Skip to main content
    const skipLink = document.createElement('a');
    skipLink.href = '#main-content';
    skipLink.className = 'skip-link';
    skipLink.textContent = 'Skip to main content';
    skipLink.style.cssText = 'position: absolute; top: -40px; left: 0; background: #0f172a; color: white; padding: 8px 16px; z-index: 10000; transition: top 0.3s;';
    skipLink.addEventListener('focus', function() {
        this.style.top = '0';
    });
    skipLink.addEventListener('blur', function() {
        this.style.top = '-40px';
    });
    document.body.insertBefore(skipLink, document.body.firstChild);

    // Add id to main element
    const main = document.querySelector('main');
    if (main) {
        main.id = 'main-content';
        main.setAttribute('tabindex', '-1');
    }

    // Focus visible polyfill for better keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            document.body.classList.add('keyboard-navigation');
        }
    });

    document.addEventListener('mousedown', function() {
        document.body.classList.remove('keyboard-navigation');
    });

    // ========================================
    // Console Branding
    // ========================================
    console.log('%cNeoTechnology Solutions', 'font-size: 24px; font-weight: bold; color: #0ea5e9;');
    console.log('%cIndependent IT Decision Consulting', 'font-size: 14px; color: #64748b;');
    console.log('%chttps://neotechnology.solutions', 'font-size: 12px; color: #94a3b8;');

})();
