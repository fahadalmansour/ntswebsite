# NeoTechnology Solutions - WordPress Migration Guide

This guide details how to migrate the React-based design and cookie consent system to a WordPress environment.

## 📂 Deliverables Package

The `/wordpress-assets/` directory contains the complete code you need:

1.  `style.css`: Core design tokens (colors, typography, spacing) and utility classes.
2.  `functions.php`: PHP shortcodes for ALL homepage sections and enqueue logic.
3.  `cookie-consent.js`: Vanilla JS implementation of the cookie consent banner.

## 🚀 Step 1: Theme Setup

### Option A: Child Theme (Recommended)
If you are using a base theme (like Hello Elementor or Astra), create a child theme.

1.  **Drop the CSS**: Copy the content of `/wordpress-assets/style.css` into your child theme's `style.css`.
2.  **Paste the PHP**: Copy the functions from `/wordpress-assets/functions.php` into your child theme's `functions.php`.
3.  **Drop the JS**: Place `cookie-consent.js` in a `/js/` folder in your child theme directory.

### Option B: Custom Theme
If building from scratch:
1.  Use `style.css` as your main stylesheet.
2.  Ensure `functions.php` is loaded.

## 🍪 Step 2: Cookie Consent Integration

The cookie consent system is ready to go.

1.  **Enqueue**: The provided `functions.php` already handles this via `neotechnology_enqueue_scripts`.
2.  **Verify**: Check your footer logic. The script injects the Banner HTML automatically.
3.  **Analytics**:
    *   **Do not** hardcode Google Analytics in your `header.php`.
    *   Edit `/js/cookie-consent.js` and find the `applyConsent` function.
    *   Add your GA/GTM code inside the `if (prefs.analytics)` block.

## 📝 Step 3: Build the Pages

Use the provided Shortcodes to build your layouts. You can paste these directly into the WordPress "Shortcode" block or Classic Editor.

### Homepage Structure
Copy and paste this stack into your Homepage content area:

```
[neotech_hero]
[neotech_how_we_work]
[neotech_decision_areas]
[neotech_reference_architecture]
[neotech_tools_standards]
[neotech_what_you_receive]
[neotech_advisory_services]
[neotech_boundaries]
[neotech_engagement]
```

## 🌍 Step 4: Translation (Polylang / WPML)

The codebase is fully prepared for translation plugins.

1.  **Install Polylang**: Or WPML.
2.  **Scan for Strings**: Use the plugin to scan the theme files. It will detect all strings wrapped in `_e()` or `__()` in our `functions.php`.
3.  **Translate**: Enter the Arabic translations in the WP Admin panel.
4.  **RTL Support**: The `style.css` and `functions.php` automatically handle RTL layout (flipping arrows, etc.) when the language is set to Arabic.

## ✅ Checklist for Developer

- [ ] `style.css` loaded and fonts (Inter) working.
- [ ] `cookie-consent.js` loading in footer.
- [ ] Analytics tags moved *inside* the JS consent logic.
- [ ] Shortcodes rendering correctly on Homepage.
- [ ] Polylang/WPML configured for EN/AR.
- [ ] Contact Form 7 or WPForms set up for the `/contact` page.

---
**NeoTechnology Solutions**
IT Decision Advisory
