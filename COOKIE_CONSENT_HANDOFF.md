# Cookie Consent System - Developer Handoff Notes

## ⚖️ Legal Requirements (MUST NOT BE CHANGED)

These requirements ensure GDPR and ePrivacy Directive compliance. **Any deviation may expose NeoTechnology Solutions LLC to legal risk.**

### 1. Essential Cookies
- ✅ **Must always be enabled**
- ❌ **Cannot be disabled by the user**
- **Implementation**: The `essential` category toggle must have `disabled={true}` prop

### 2. Analytics, Functional, Marketing Cookies
- ✅ **Must be disabled by default**
- ❌ **Must not load before user consent**
- **Implementation**: Default state in `CookieConsent.tsx` must be:
  ```typescript
  {
    essential: true,
    analytics: false,  // ← Must be false
    functional: false, // ← Must be false
    marketing: false   // ← Must be false
  }
  ```

### 3. Button Visibility & Equality
- ✅ **"Accept all" and "Reject all" must be equally visible**
- ❌ **Reject must not be hidden, reduced, or delayed**
- **Implementation**: 
  - Both buttons must use same size classes
  - No visual hierarchy between Accept/Reject (both are `type="secondary"` or equal)
  - No setTimeout delays on Reject button
  - No hidden overflow or scroll requirements

### 4. Consent Behavior
- ✅ **No pre-checked toggles except essential**
- ✅ **User must be able to change consent later**
- ✅ **Consent choice must be respected before loading scripts**
- **Implementation**:
  - Check localStorage before initializing any analytics/marketing
  - Provide a way to re-open preferences (footer link, settings page)
  - Do not auto-accept on scroll, time, or navigation

### 5. Copy Requirements
- ❌ **Do not alter meaning to imply consent by usage**
- ❌ **Do not remove "Reject all" option**
- **Examples of prohibited changes**:
  - "By continuing to use this site, you agree..." ← ❌ Not allowed
  - Removing or renaming "Reject all" to "Minimize" ← ❌ Not allowed
  - "Necessary for site functionality" for non-essential cookies ← ❌ Not allowed

### 6. UI Behavior (No Dark Patterns)
- ❌ **No forced scrolling to reject**
- ❌ **No countdowns or blocking content beyond the banner**
- ❌ **No misleading button colors or positions**
- **Prohibited patterns**:
  - Making reject button tiny or hard to click
  - Auto-closing modal after X seconds
  - Requiring multiple clicks to reject
  - Hiding reject in a submenu

---

## 🏗️ Architecture Overview

### Component Hierarchy

```
CookieConsent (Main controller)
├── CookieBanner (Bottom-fixed banner)
│   └── CookieButton × 3
├── CookieBannerAr (RTL variant)
│   └── CookieButton × 3
├── CookieModal (Preferences modal)
│   ├── CookieCategoryRow × 4
│   └── CookieButton × 3
└── CookieModalAr (RTL variant)
    ├── CookieCategoryRowAr × 4
    └── CookieButton × 3

Shared Components:
├── CookieButton (Primary/Secondary/Tertiary)
├── CookieToggle (Switch control)
├── CookieCategoryRow (Category + toggle)
└── CookieCategoryRowAr (RTL variant)
```

### File Structure

```
/components/cookie-consent/
├── CookieConsent.tsx        # Main controller, auto-detects language
├── CookieBanner.tsx          # English banner
├── CookieBannerAr.tsx        # Arabic banner (RTL)
├── CookieModal.tsx           # English modal
├── CookieModalAr.tsx         # Arabic modal (RTL)
├── CookieButton.tsx          # Reusable button (3 variants, 2 themes)
├── CookieToggle.tsx          # Toggle switch
├── CookieCategoryRow.tsx     # English category row
└── CookieCategoryRowAr.tsx   # Arabic category row (RTL)
```

---

## 🔧 Integration Guide

### Step 1: Add to Your Application

```tsx
// App.tsx or _app.tsx (Next.js)
import { CookieConsent } from './components/cookie-consent/CookieConsent';

function App() {
  return (
    <>
      <YourAppContent />
      <CookieConsent language="en" theme="light" />
    </>
  );
}
```

### Step 2: Language Detection (Auto)

The component auto-detects language from:
```tsx
// Checks HTML lang attribute
const currentLanguage = document.documentElement.lang === 'ar' ? 'ar' : 'en';
```

For manual control:
```tsx
<CookieConsent language="ar" />  {/* Force Arabic */}
<CookieConsent language="en" />  {/* Force English */}
```

### Step 3: Theme Detection (Auto)

Auto-detects from HTML class:
```tsx
const currentTheme = document.documentElement.classList.contains('dark') 
  ? 'dark' 
  : 'light';
```

For manual control:
```tsx
<CookieConsent theme="dark" />  {/* Force dark mode */}
<CookieConsent theme="light" /> {/* Force light mode */}
```

### Step 4: Initialize Tracking Scripts

**⚠️ CRITICAL**: Only load scripts after consent is given.

```tsx
// CookieConsent.tsx - saveConsent function (lines 45-67)

const saveConsent = (prefs: CookiePreferences) => {
  localStorage.setItem(COOKIE_CONSENT_KEY, 'true');
  localStorage.setItem(COOKIE_PREFERENCES_KEY, JSON.stringify(prefs));
  
  // ✅ REPLACE THESE CONSOLE.LOGS WITH ACTUAL INITIALIZATION
  
  if (prefs.analytics) {
    console.log('Analytics cookies accepted');
    // TODO: Initialize Google Analytics
    // window.gtag('consent', 'update', { 'analytics_storage': 'granted' });
  }
  
  if (prefs.functional) {
    console.log('Functional cookies accepted');
    // TODO: Initialize functional features
    // Example: Load user preference system, language persistence
  }
  
  if (prefs.marketing) {
    console.log('Marketing cookies accepted');
    // TODO: Initialize marketing pixels
    // Example: Facebook Pixel, LinkedIn Insight Tag
  }
};
```

### Example: Google Analytics Integration

```tsx
const saveConsent = (prefs: CookiePreferences) => {
  localStorage.setItem(COOKIE_CONSENT_KEY, 'true');
  localStorage.setItem(COOKIE_PREFERENCES_KEY, JSON.stringify(prefs));
  
  if (prefs.analytics) {
    // Initialize Google Analytics
    if (typeof window.gtag !== 'undefined') {
      window.gtag('consent', 'update', {
        'analytics_storage': 'granted'
      });
    }
    
    // Or initialize GA4 manually
    const script = document.createElement('script');
    script.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX';
    script.async = true;
    document.head.appendChild(script);
    
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-XXXXXXXXXX');
  } else {
    // Deny analytics
    if (typeof window.gtag !== 'undefined') {
      window.gtag('consent', 'update', {
        'analytics_storage': 'denied'
      });
    }
  }
  
  // ... similar for functional and marketing
};
```

---

## 📦 LocalStorage Keys

The system uses two localStorage keys:

| Key | Value | Purpose |
|-----|-------|---------|
| `neotechnology-cookie-consent` | `"true"` | Tracks if user has made ANY choice |
| `neotechnology-cookie-preferences` | `JSON` | Stores actual preferences object |

### Preference Object Structure

```typescript
{
  essential: true,    // Always true, cannot be changed
  analytics: boolean, // User choice
  functional: boolean,// User choice
  marketing: boolean  // User choice
}
```

### Reading Consent State

```typescript
// Check if user has consented
const hasConsent = localStorage.getItem('neotechnology-cookie-consent');

// Get specific preferences
const prefs = JSON.parse(
  localStorage.getItem('neotechnology-cookie-preferences') || '{}'
);

if (prefs.analytics) {
  // Load analytics scripts
}
```

---

## 🎨 Theme & Variant Support

### Supported Combinations

| Language | Theme | Component |
|----------|-------|-----------|
| English  | Light | `CookieBanner` + `CookieModal` |
| English  | Dark  | `CookieBanner` + `CookieModal` (theme="dark") |
| Arabic   | Light | `CookieBannerAr` + `CookieModalAr` |
| Arabic   | Dark  | `CookieBannerAr` + `CookieModalAr` (theme="dark") |

### Manual Component Usage

If you need to use components separately:

```tsx
// English Light
<CookieBanner 
  onAcceptAll={handleAccept}
  onRejectAll={handleReject}
  onCustomize={handleCustomize}
  theme="light"
/>

// English Dark
<CookieBanner 
  onAcceptAll={handleAccept}
  onRejectAll={handleReject}
  onCustomize={handleCustomize}
  theme="dark"
/>

// Arabic Light
<CookieBannerAr 
  onAcceptAll={handleAccept}
  onRejectAll={handleReject}
  onCustomize={handleCustomize}
  theme="light"
/>

// Arabic Dark
<CookieBannerAr 
  onAcceptAll={handleAccept}
  onRejectAll={handleReject}
  onCustomize={handleCustomize}
  theme="dark"
/>
```

---

## ♿ Accessibility

All components follow WCAG 2.1 AA standards:

### Keyboard Navigation
- ✅ All buttons focusable via Tab
- ✅ Toggle switches have keyboard controls (Space/Enter)
- ✅ Modal traps focus while open
- ✅ ESC closes modal

### Screen Readers
- ✅ Toggles have `role="switch"` and `aria-checked`
- ✅ Modal has `role="dialog"` and `aria-modal="true"`
- ✅ Close button has `aria-label="Close modal"`
- ✅ Descriptive labels on all interactive elements

### Focus Management
```tsx
// Modal receives focus when opened
// Focus returns to trigger element when closed
// Focus visible indicators on all interactive elements
className="focus:outline-none focus:ring-2 focus:ring-slate-900"
```

### Color Contrast

| Element | Light Mode | Dark Mode | Contrast Ratio |
|---------|-----------|-----------|----------------|
| Body text | `#475569` on `#FFFFFF` | `#CBD5E1` on `#0F172A` | 7.5:1 ✅ |
| Titles | `#0F172A` on `#FFFFFF` | `#F1F5F9` on `#0F172A` | 15.5:1 ✅ |
| Primary button | `#FFFFFF` on `#0F172A` | `#0F172A` on `#F1F5F9` | 15.5:1 ✅ |
| Borders | `#E2E8F0` | `#334155` | 1.5:1 ✅ (UI component) |

---

## 🧪 Testing Checklist

### Functional Testing

- [ ] **Banner shows on first visit**
  - Clear localStorage
  - Refresh page
  - Banner should appear after 1 second

- [ ] **Accept All works**
  - Click "Accept all"
  - Check localStorage: all preferences should be true
  - Banner should disappear
  - Analytics scripts should initialize

- [ ] **Reject All works**
  - Click "Reject all"
  - Check localStorage: only essential should be true
  - Banner should disappear
  - No analytics scripts should load

- [ ] **Customize works**
  - Click "Customize"
  - Modal should open
  - Toggle analytics ON
  - Click "Save preferences"
  - Modal closes, only analytics should be enabled

- [ ] **Consent persists**
  - Make a choice
  - Refresh page
  - Banner should NOT reappear
  - Preferences should be remembered

- [ ] **Essential cannot be disabled**
  - Open modal
  - Try to toggle "Essential"
  - Toggle should not respond
  - Shows "(Always on)" label

### Responsive Testing

- [ ] **Desktop (1440px+)**
  - Banner: Horizontal layout
  - Modal: Centered, 672px max width
  - All buttons visible side-by-side

- [ ] **Tablet (768px - 1439px)**
  - Banner: Horizontal layout (slightly compressed)
  - Modal: Still centered
  - Buttons may wrap on small tablets

- [ ] **Mobile (< 768px)**
  - Banner: Vertical layout
  - Modal: Full width with padding
  - Buttons stack vertically

### RTL Testing

- [ ] **Arabic layout**
  - Set `<html lang="ar">`
  - Banner should show in Arabic
  - Buttons in RTL order: قبول الكل → رفض الكل → تخصيص
  - Toggle on right side
  - Text right-aligned

- [ ] **Language switching**
  - Start with English banner
  - Change HTML lang to "ar"
  - Component should switch to Arabic on next mount

### Dark Mode Testing

- [ ] **Theme toggle**
  - Add `class="dark"` to `<html>`
  - All components should use dark colors
  - Text remains readable (high contrast)
  - Primary button inverts to light

- [ ] **Manual theme**
  - Pass `theme="dark"` prop
  - Component should render in dark mode
  - Independent of HTML class

### Accessibility Testing

- [ ] **Keyboard navigation**
  - Tab through all buttons
  - Focus indicators visible
  - Space/Enter activates buttons
  - ESC closes modal

- [ ] **Screen reader**
  - Test with NVDA/JAWS/VoiceOver
  - Toggle announces state changes
  - Modal announces when opened
  - All buttons have clear labels

- [ ] **Color contrast**
  - Run WAVE or axe DevTools
  - No contrast errors
  - Passes WCAG AA (4.5:1 for text)

### Legal Compliance Testing

- [ ] **Default state correct**
  - Fresh install: only essential enabled
  - No auto-accept on page load
  - No auto-accept on scroll

- [ ] **Reject button equal to Accept**
  - Same size
  - Same visual weight
  - Same accessibility
  - No delays or hiding

- [ ] **Consent is respected**
  - Reject all → no analytics cookies set
  - Accept analytics → analytics initializes
  - Check browser DevTools → Network tab

---

## ⚠️ Common Pitfalls

### ❌ DO NOT: Auto-accept on scroll

```tsx
// BAD - ILLEGAL
useEffect(() => {
  const handleScroll = () => {
    if (window.scrollY > 100) {
      handleAcceptAll(); // ← ❌ Not allowed
    }
  };
  window.addEventListener('scroll', handleScroll);
}, []);
```

### ❌ DO NOT: Pre-check non-essential toggles

```tsx
// BAD - ILLEGAL
const [preferences, setPreferences] = useState({
  essential: true,
  analytics: true,  // ← ❌ Must be false
  functional: true, // ← ❌ Must be false
  marketing: false
});
```

### ❌ DO NOT: Hide or delay Reject button

```tsx
// BAD - ILLEGAL
<CookieButton 
  type="secondary" 
  onClick={onRejectAll}
  className="opacity-50 text-xs" // ← ❌ Visual de-emphasis
>
  Reject all
</CookieButton>

// BAD - ILLEGAL
setTimeout(() => {
  setShowRejectButton(true); // ← ❌ Delayed appearance
}, 5000);
```

### ❌ DO NOT: Load scripts before consent

```tsx
// BAD - ILLEGAL
useEffect(() => {
  // Loads immediately on mount
  initializeGoogleAnalytics(); // ← ❌ Must wait for consent
}, []);

// GOOD - LEGAL
const handleAcceptAll = () => {
  saveConsent({ analytics: true, ... });
  initializeGoogleAnalytics(); // ✅ Only after consent
};
```

### ❌ DO NOT: Rename or remove legal options

```tsx
// BAD - ILLEGAL
<CookieButton onClick={onRejectAll}>
  Decline optional cookies // ← ❌ Too vague
</CookieButton>

<CookieButton onClick={onRejectAll}>
  Minimize cookies // ← ❌ Misleading
</CookieButton>

// GOOD - LEGAL
<CookieButton onClick={onRejectAll}>
  Reject all // ✅ Clear and honest
</CookieButton>
```

---

## 🔄 Allowing Users to Change Consent

Users must be able to revoke or modify consent. Add a trigger in your UI:

### Example: Footer Link

```tsx
// Footer.tsx
import { useState } from 'react';
import { CookieModal } from './components/cookie-consent/CookieModal';

export function Footer() {
  const [showCookieSettings, setShowCookieSettings] = useState(false);
  const [preferences, setPreferences] = useState(() => {
    const saved = localStorage.getItem('neotechnology-cookie-preferences');
    return saved ? JSON.parse(saved) : {
      essential: true,
      analytics: false,
      functional: false,
      marketing: false
    };
  });

  const handleSave = () => {
    localStorage.setItem('neotechnology-cookie-preferences', JSON.stringify(preferences));
    setShowCookieSettings(false);
    // Re-initialize or remove scripts based on new preferences
  };

  return (
    <footer>
      {/* ... other footer content ... */}
      <button 
        onClick={() => setShowCookieSettings(true)}
        className="text-sm text-slate-600 hover:text-slate-900"
      >
        Cookie Settings
      </button>

      <CookieModal
        isOpen={showCookieSettings}
        onClose={() => setShowCookieSettings(false)}
        preferences={preferences}
        onPreferencesChange={setPreferences}
        onSavePreferences={handleSave}
        onAcceptAll={() => {
          setPreferences({
            essential: true,
            analytics: true,
            functional: true,
            marketing: true
          });
          handleSave();
        }}
        onRejectAll={() => {
          setPreferences({
            essential: true,
            analytics: false,
            functional: false,
            marketing: false
          });
          handleSave();
        }}
      />
    </footer>
  );
}
```

---

## 📝 Copy Translation Notes

If translating to additional languages:

### Required Labels

| English | Arabic | Purpose |
|---------|--------|---------|
| Cookie Preferences | إعدادات ملفات تعريف الارتباط | Title |
| Accept all | قبول الكل | Primary CTA |
| Reject all | رفض الكل | Reject CTA |
| Customize | تخصيص | Open modal |
| Save preferences | حفظ التفضيلات | Save in modal |
| Essential | الضرورية | Cookie category |
| Analytics | التحليلية | Cookie category |
| Functional | الوظيفية | Cookie category |
| Marketing | التسويقية | Cookie category |
| Always on | مفعّلة دائمًا | Essential indicator |

### Copy Requirements for Legal Compliance

**DO** keep these concepts:
- Clear distinction between essential and optional
- Explicit "reject" option (not "minimize" or "decline")
- Neutral language (not "help us improve" in essential description)

**DON'T** add:
- Emotional appeals ("Help us serve you better")
- False urgency ("Accept now to continue")
- Implied consent ("By using this site...")

---

## 🎯 Performance Considerations

### Initial Load
- Banner shows after **1 second delay** (improves perceived performance)
- Components are not tree-shaken (always bundled)
- Consider code-splitting if bundle size is critical

### Optimization Tips

```tsx
// Lazy load if consent system is not critical-path
const CookieConsent = lazy(() => 
  import('./components/cookie-consent/CookieConsent').then(m => ({
    default: m.CookieConsent
  }))
);

// Use in App
<Suspense fallback={null}>
  <CookieConsent />
</Suspense>
```

### Bundle Size (Approximate)
- Full system: ~15KB (minified, not gzipped)
- English only: ~10KB
- With Lucide icons: +5KB

---

## 🌍 WordPress Integration Notes

This system was designed for a **WordPress migration** of NeoTechnology Solutions' website.

### WordPress Implementation Path

1. **Convert to vanilla JS/jQuery**
   - Remove React hooks → use vanilla state management
   - Replace `useState` with DOM manipulation
   - Store preferences in cookies instead of localStorage

2. **Create WordPress shortcodes**
   ```php
   [neotechnology_cookie_banner]
   [neotechnology_cookie_settings]
   ```

3. **Enqueue scripts conditionally**
   ```php
   function neotechnology_enqueue_cookie_consent() {
     wp_enqueue_script('cookie-consent', 
       get_template_directory_uri() . '/js/cookie-consent.js',
       array(), '1.0.0', true
     );
   }
   add_action('wp_enqueue_scripts', 'neotechnology_enqueue_cookie_consent');
   ```

4. **Integrate with plugins**
   - **Complianz** or **CookieYes** as backends
   - This UI as the frontend
   - Connect to plugin's consent API

### Alternative: Keep React

Use WordPress + React via:
- **@wordpress/scripts** build system
- Gutenberg block for cookie consent
- Render via `wp_enqueue_script` with React runtime

---

## 📞 Support & Questions

### Component Showcase
Live documentation at: `/components`

### Key Files to Review
- `/components/cookie-consent/CookieConsent.tsx` - Main controller
- `/COOKIE_CONSENT_HANDOFF.md` - This document

### Contact
For legal compliance questions, consult with:
- Legal team (before changing defaults)
- Privacy officer (before altering copy)
- GDPR consultant (for EU deployments)

---

## ✅ Pre-Deployment Checklist

Before going live:

- [ ] All default preferences are FALSE except essential
- [ ] Accept/Reject buttons are equal size and visibility
- [ ] No scripts load before consent
- [ ] Banner delay is ~1 second (good UX)
- [ ] LocalStorage keys are namespaced correctly
- [ ] Footer has "Cookie Settings" link
- [ ] RTL works on `/ar/` pages
- [ ] Dark mode works if site supports it
- [ ] Tested on Chrome, Firefox, Safari, Edge
- [ ] Tested on iOS Safari, Android Chrome
- [ ] Screen reader tested (NVDA or VoiceOver)
- [ ] Legal team reviewed copy
- [ ] Privacy policy updated to mention cookie usage

---

**Last Updated**: January 11, 2026  
**Version**: 1.0  
**Maintained by**: NeoTechnology Solutions LLC Development Team
