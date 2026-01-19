# NeoTechnology Solutions — Brand Kit

**Version:** 1.0
**Last Updated:** January 2026
**Company:** NeoTechnology Solutions LLC
**Domain:** neotechnology.solutions

---

## 1. Brand Positioning Statement

### English

> **NeoTechnology Solutions** provides independent IT decision consulting for businesses navigating complex technology choices. We deliver structured analysis, vendor-neutral recommendations, and documented decision frameworks — then step aside. No implementation. No managed services. No product sales. Your decision. Our clarity.

**Tagline options:**
- "Clarity before commitment."
- "Decisions. Documented. Done."
- "Independent IT guidance."

### Arabic (العربية)

> **نيوتكنولوجي سولوشنز** تقدم استشارات مستقلة لقرارات تقنية المعلومات للشركات التي تواجه خيارات تقنية معقدة. نقدم تحليلاً منظماً وتوصيات محايدة وأطر قرارات موثقة — ثم نتنحى جانباً. لا تنفيذ. لا خدمات مُدارة. لا بيع منتجات. قرارك. وضوحنا.

**خيارات الشعار:**
- "الوضوح قبل الالتزام"
- "قرارات. موثقة. منجزة."
- "إرشاد تقني مستقل"

### Positioning Matrix

| Attribute | NeoTechnology | Traditional Consultants | Vendors |
|-----------|---------------|------------------------|---------|
| Sells products | No | Sometimes | Yes |
| Implements | No | Yes | Yes |
| Vendor-neutral | Yes | Variable | No |
| Fixed-scope | Yes | Rarely | No |
| Ongoing contracts | No | Yes | Yes |

### Vendor Neutrality Statement

**English:**
> We do not resell products as part of our advisory service.
> If a client requests vendor introductions, any referral fees are disclosed and documented in advance. Clients are free to choose any provider.

**Arabic (العربية):**
> لا نبيع منتجات ضمن الخدمة الاستشارية.
> وفي حال طلب العميل ترشيح مورد/تعريف بمزوّد، يتم الإفصاح عن أي عمولة وتوثيقها مسبقاً، والعميل حر في اختيار أي مزود.

**Usage:** This statement should appear on:
- Homepage (after "How We Work" or before "Consulting Models")
- Disclosure Policy page (prominently)
- Proposals and contracts (standard clause)

---

## 2. Tone of Voice

### Core Tone: **Calm Authority**

We speak like a trusted advisor in a quiet meeting room — not a salesperson on a trade show floor.

### Tone Rules

| Do | Don't |
|----|-------|
| State facts plainly | Use superlatives ("best", "leading", "revolutionary") |
| Use "we recommend" or "consider" | Use "you must" or "you need" |
| Present options objectively | Push a single solution |
| Acknowledge trade-offs | Promise guaranteed outcomes |
| Write contract-ready language | Use marketing buzzwords |
| Be direct and concise | Pad with filler phrases |

### Voice Characteristics

1. **Measured** — Every word earns its place. No fluff.
2. **Neutral** — We present; you decide.
3. **Professional** — Suitable for board presentations and legal review.
4. **Respectful** — We assume intelligence; we don't oversimplify.
5. **Transparent** — Limitations stated upfront.

### Example Transformations

| Instead of... | Write... |
|---------------|----------|
| "We're the best IT consultants in the region!" | "We provide independent technology guidance." |
| "You need to migrate to the cloud immediately." | "Cloud migration may reduce costs by 20-30% for your workload profile." |
| "Our experts will solve all your IT problems." | "We deliver a documented decision framework. Implementation is yours to manage." |
| "Contact us for a FREE consultation!" | "Request a discovery call." |

### Arabic Tone Notes

- Maintain formal Modern Standard Arabic (فصحى) for documents
- Avoid colloquial expressions in written materials
- Mirror the calm, professional English tone
- Use "نقدم" (we provide) over "نضمن" (we guarantee)

---

## 3. Color Palette

### Primary Colors

| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| **White** | `#FFFFFF` | 255, 255, 255 | Primary background |
| **Off-White** | `#F8FAFC` | 248, 250, 252 | Alternate sections (slate-50) |
| **Light Gray** | `#F1F5F9` | 241, 245, 249 | Cards, containers (slate-100) |

### Accent Colors

| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| **Deep Navy** | `#0F172A` | 15, 23, 42 | Primary accent, CTAs, headings (slate-900) |
| **Navy** | `#1E293B` | 30, 41, 59 | Secondary accent, hover states (slate-800) |
| **Steel** | `#334155` | 51, 65, 85 | Body text emphasis (slate-700) |
| **Muted** | `#64748B` | 100, 116, 139 | Secondary text, captions (slate-500) |

### Micro-Accent (Optional)

| Name | Hex | RGB | Usage |
|------|-----|-----|-------|
| **Trust Green** | `#059669` | 5, 150, 105 | Success states, checkmarks only (emerald-600) |
| **Trust Green Light** | `#D1FAE5` | 209, 250, 229 | Success backgrounds (emerald-100) |

### Color Ratios

```
Background (white/off-white): 85%
Text (slate-600/700):         10%
Accent (slate-900):            4%
Micro-accent (green):          1%
```

### CSS Variables

```css
:root {
  /* Backgrounds */
  --color-bg-primary: #FFFFFF;
  --color-bg-secondary: #F8FAFC;
  --color-bg-tertiary: #F1F5F9;

  /* Text */
  --color-text-primary: #0F172A;
  --color-text-secondary: #334155;
  --color-text-muted: #64748B;

  /* Accent */
  --color-accent: #0F172A;
  --color-accent-hover: #1E293B;

  /* Success (micro-accent) */
  --color-success: #059669;
  --color-success-bg: #D1FAE5;

  /* Borders */
  --color-border: #E2E8F0;
  --color-border-hover: #CBD5E1;
}
```

### Accessibility

- All text combinations meet WCAG 2.1 AA contrast requirements
- Deep Navy (#0F172A) on White (#FFFFFF): **15.98:1** ratio
- Steel (#334155) on White (#FFFFFF): **8.19:1** ratio
- Muted (#64748B) on White (#FFFFFF): **4.54:1** ratio (AA for large text)

---

## 4. Typography

### Font Stack

```css
/* Primary (Latin) */
font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;

/* Arabic */
font-family: 'Tajawal', 'Segoe UI', Tahoma, sans-serif;
```

### Type Scale

| Element | Size | Weight | Line Height | Letter Spacing |
|---------|------|--------|-------------|----------------|
| **Display** | 72px (4.5rem) | 300 | 1.1 | -0.02em |
| **H1** | 48px (3rem) | 300 | 1.2 | -0.02em |
| **H2** | 36px (2.25rem) | 400 | 1.3 | -0.01em |
| **H3** | 24px (1.5rem) | 500 | 1.4 | 0 |
| **H4** | 20px (1.25rem) | 500 | 1.4 | 0 |
| **Body Large** | 18px (1.125rem) | 400 | 1.7 | 0 |
| **Body** | 16px (1rem) | 400 | 1.6 | 0 |
| **Body Small** | 14px (0.875rem) | 400 | 1.5 | 0 |
| **Caption** | 12px (0.75rem) | 500 | 1.4 | 0.02em |

### CSS Implementation

```css
/* Headings */
h1, .h1 {
  font-size: 3rem;
  font-weight: 300;
  line-height: 1.2;
  letter-spacing: -0.02em;
  color: var(--color-text-primary);
}

h2, .h2 {
  font-size: 2.25rem;
  font-weight: 400;
  line-height: 1.3;
  letter-spacing: -0.01em;
}

h3, .h3 {
  font-size: 1.5rem;
  font-weight: 500;
  line-height: 1.4;
}

/* Body */
body {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.6;
  color: var(--color-text-secondary);
}

/* Large body text */
.text-lg {
  font-size: 1.125rem;
  line-height: 1.7;
}
```

### Typography Principles

1. **Light headings** — H1/Display use weight 300 for elegance
2. **Generous line height** — Body text at 1.6-1.7 for readability
3. **Tight letter spacing on headings** — Creates premium feel
4. **System fallbacks** — Ensure consistent rendering across devices

### Arabic Typography Notes

- Tajawal font supports weights 200-900
- Use weight 400-500 for Arabic body text (renders better than light weights)
- Increase line height by ~10% for Arabic text
- RTL: Text aligns right, numbers remain LTR

---

## 5. UI Style Guide

### Design Philosophy

**Apple-clean + Consulting Firm + Modern SaaS**

- **Apple-clean**: Generous whitespace, restrained color, precision alignment
- **Consulting Firm**: Professional, trustworthy, document-ready
- **Modern SaaS**: Accessible, responsive, component-based

### Spacing System

```css
--space-1: 0.25rem;   /* 4px */
--space-2: 0.5rem;    /* 8px */
--space-3: 0.75rem;   /* 12px */
--space-4: 1rem;      /* 16px */
--space-6: 1.5rem;    /* 24px */
--space-8: 2rem;      /* 32px */
--space-12: 3rem;     /* 48px */
--space-16: 4rem;     /* 64px */
--space-20: 5rem;     /* 80px */
--space-24: 6rem;     /* 96px */
```

### Border Radius

```css
--radius-sm: 0.375rem;    /* 6px - inputs, small elements */
--radius-md: 0.5rem;      /* 8px - buttons */
--radius-lg: 0.75rem;     /* 12px - cards */
--radius-xl: 1rem;        /* 16px - modals */
--radius-2xl: 1.5rem;     /* 24px - large cards */
--radius-full: 9999px;    /* Pills, avatars */
```

### Shadows

```css
--shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
--shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
--shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
```

### Component Patterns

#### Buttons

```
Primary:    bg-slate-900, text-white, rounded-full, px-8 py-3
Secondary:  bg-transparent, border-slate-300, text-slate-700, rounded-full
Ghost:      bg-transparent, text-slate-600, hover:text-slate-900
```

#### Cards

```
Default:    bg-white, border border-slate-200, rounded-2xl, p-8
Elevated:   bg-white, shadow-md, rounded-2xl, p-8
Subtle:     bg-slate-50, rounded-2xl, p-8
```

#### Forms

```
Input:      bg-white, border border-slate-300, rounded-lg, px-4 py-3
            focus:border-slate-500, focus:ring-2 focus:ring-slate-200
Label:      text-sm font-medium text-slate-700, mb-2
Error:      text-red-600 text-sm, border-red-500
```

### Layout Principles

1. **Max content width**: 1280px (80rem)
2. **Section padding**: 96px vertical (space-24) on desktop, 48px on mobile
3. **Grid**: 12-column with 32px gutters
4. **Card grids**: 3-column on desktop, 2 on tablet, 1 on mobile

### Interaction States

| State | Style |
|-------|-------|
| Default | Base styling |
| Hover | Subtle background shift or border color change |
| Focus | Ring outline (2px slate-400) |
| Active | Slight scale (0.98) or darker background |
| Disabled | Opacity 0.5, cursor not-allowed |

### Animation Guidelines

- **Duration**: 150-300ms for micro-interactions
- **Easing**: `ease-out` for entrances, `ease-in` for exits
- **Properties**: Prefer `transform` and `opacity` for performance
- **Restraint**: Animation should be subtle, never distracting

```css
.transition-default {
  transition: all 150ms ease-out;
}

.transition-slow {
  transition: all 300ms ease-out;
}
```

---

## 6. Brand Words

### The 10 Core Brand Words

| # | English | Arabic | Usage Context |
|---|---------|--------|---------------|
| 1 | **Clarity** | الوضوح | We provide clarity in complex decisions |
| 2 | **Neutrality** | الحياد | Vendor-neutral recommendations |
| 3 | **Trust** | الثقة | Built through transparency |
| 4 | **Independence** | الاستقلالية | No vendor affiliations |
| 5 | **Structure** | المنهجية | Documented frameworks |
| 6 | **Objectivity** | الموضوعية | Data-driven analysis |
| 7 | **Precision** | الدقة | Specific, actionable guidance |
| 8 | **Transparency** | الشفافية | Clear scope and limitations |
| 9 | **Expertise** | الخبرة | Deep technical knowledge |
| 10 | **Integrity** | النزاهة | We recommend what's right, not what pays |

### Word Usage Guidelines

**Use freely:**
- Clarity, structure, documented, framework, options, analysis
- Independent, neutral, objective, transparent
- Advisory, guidance, recommendations

**Use sparingly:**
- Expert, professional, trusted (earned, not claimed)

**Never use:**
- Best, leading, revolutionary, cutting-edge
- Guarantee, promise, ensure (outcome-related)
- Solution, partner, synergy (overused consulting terms)

### Brand Voice Examples

| Context | Example |
|---------|---------|
| Website hero | "Independent IT decision consulting" |
| Service description | "Structured analysis. Documented options. Your decision." |
| Contact CTA | "Request a discovery call" |
| Deliverable | "Decision Framework: Cloud Migration Assessment" |
| Email sign-off | "With clarity," |

---

## 7. Logo Concepts

### Design Requirements

- Must work as SVG (scalable, no raster effects)
- Legible at 16px favicon size
- Works in single color (navy or white)
- No gradients, shadows, or complex effects
- Professional, not playful

### Concept A: The Decision Node

```
Visual: Abstract network node with three connection points
        representing options A, B, C converging to a decision point

Structure:
    ○
   /|\
  ○ ○ ○
    ↓
   [■]

Meaning: Multiple inputs → single clear decision
Style: Geometric, minimal, tech-forward
Colors: Slate-900 primary, optional slate-400 secondary paths
```

**SVG Safe Zone**: 24x24 grid minimum, 2px stroke weight at standard size

### Concept B: The Clarity Mark

```
Visual: Stylized "N" formed by two parallel ascending lines
        with a connecting diagonal, suggesting upward clarity

Structure:
  |  /|
  | / |
  |/  |

Meaning: Ascent from confusion to clarity
Style: Lettermark, architectural, timeless
Colors: Solid slate-900, works as knockout on dark backgrounds
```

**SVG Safe Zone**: Square lockup, can be used independently

### Concept C: The Framework Grid

```
Visual: 2x2 grid with one quadrant emphasized,
        representing structured decision-making

Structure:
  ┌───┬───┐
  │ ■ │   │
  ├───┼───┤
  │   │   │
  └───┴───┘

Meaning: Options laid out clearly, one selected
Style: Systematic, consulting-oriented, modern
Colors: Slate-900 frame, emphasized quadrant slightly darker or with subtle fill
```

**SVG Safe Zone**: Perfect square, scales well to favicon

### Logo Lockups

```
Horizontal:    [Icon] NeoTechnology Solutions
Stacked:       [Icon]
               NeoTechnology
               Solutions
Icon only:     [Icon] (for favicon, app icon, social profile)
```

### Clear Space

Minimum clear space around logo = height of the "N" in "NeoTechnology"

### Minimum Sizes

| Format | Minimum Width |
|--------|---------------|
| Print | 25mm |
| Digital | 100px |
| Favicon | 16px (icon only) |

---

## 8. Social Media Templates

### LinkedIn Banner

**Dimensions:** 1584 × 396 px (4:1 ratio)

```
┌─────────────────────────────────────────────────────────────┐
│                                                             │
│  [Logo]                                                     │
│                                                             │
│  Independent IT Decision Consulting                         │
│                                                             │
│  ─────────────────────────────────────                      │
│  Cloud Strategy | Digital Transformation | Cybersecurity    │
│                                                             │
│                                    neotechnology.solutions  │
└─────────────────────────────────────────────────────────────┘

Background: #F8FAFC (off-white) or #FFFFFF
Text: #0F172A (slate-900)
Accent line: #0F172A, 2px height
```

**Safe zones:**
- Left 200px: May be covered by profile photo
- Keep text centered or right-aligned
- Bottom 60px: May be cropped on mobile

### Profile Logo / Avatar

**Dimensions:** 400 × 400 px (1:1 ratio)

```
┌─────────────────┐
│                 │
│                 │
│     [Icon]      │
│                 │
│                 │
└─────────────────┘

Background: #0F172A (slate-900)
Icon: #FFFFFF (white)
Padding: 25% of width on all sides
```

**Favicon version:** 32×32px, 16×16px
- Use icon only, maximum simplicity
- Test legibility at smallest size

### Open Graph Image (OG Image)

**Dimensions:** 1200 × 630 px (1.91:1 ratio)

```
┌─────────────────────────────────────────────────────────────┐
│                                                             │
│                                                             │
│     NeoTechnology Solutions                                 │
│     ────────────────────────                                │
│                                                             │
│     [Page Title or Tagline]                                 │
│                                                             │
│                                                             │
│     ○ neotechnology.solutions                               │
│                                                             │
└─────────────────────────────────────────────────────────────┘

Background: #FFFFFF or #F8FAFC
Logo/Title: #0F172A
Subtitle: #64748B
Accent line: #0F172A, 3px
```

**Variations:**
- Homepage: Tagline "Independent IT Decision Consulting"
- Service pages: Service name as subtitle
- Contact: "Let's discuss your IT decisions"

### Social Post Template

**Dimensions:** 1200 × 1200 px (1:1 ratio) for feed posts

```
┌─────────────────────────┐
│                         │
│  [Headline text         │
│   up to 3 lines]        │
│                         │
│  ─────────────          │
│                         │
│  [Supporting text       │
│   or key stat]          │
│                         │
│                         │
│  [Logo] neotechnology   │
│         .solutions      │
└─────────────────────────┘

Background: #F8FAFC
Headline: #0F172A, 48-64px
Body: #334155, 24-32px
Logo: Bottom left corner, small
```

### Twitter/X Header

**Dimensions:** 1500 × 500 px (3:1 ratio)

Same layout as LinkedIn banner, adjusted for wider format.
Keep text in center 60% to avoid profile photo overlap.

### Email Signature

```
──────────────────────────────────────

Fahad Al Mansour
NeoTechnology Solutions LLC

info@neotechnology.solutions
+1 (307) 507-3999
neotechnology.solutions

Independent IT Decision Consulting
──────────────────────────────────────

Font: System default (for email client compatibility)
Color: #0F172A for name/company, #64748B for contact details
No images (improves deliverability)
```

---

## 9. File Naming Conventions

### Brand Assets

```
logo-nts-primary.svg           # Full logo, dark on light
logo-nts-primary-light.svg     # Full logo, light on dark (knockout)
logo-nts-icon.svg              # Icon only
logo-nts-icon-light.svg        # Icon only, knockout

favicon-16.png                 # 16×16 favicon
favicon-32.png                 # 32×32 favicon
favicon.svg                    # SVG favicon
apple-touch-icon.png           # 180×180 iOS icon

og-default.png                 # Default OG image
og-contact.png                 # Contact page OG
og-services.png                # Services page OG

linkedin-banner.png            # LinkedIn cover
linkedin-banner-ar.png         # Arabic version
twitter-header.png             # Twitter/X header

social-profile.png             # Square profile image
social-post-template.png       # Post template
```

---

## 10. Brand Checklist

### Before Publishing

- [ ] Colors match brand palette exactly
- [ ] Typography uses Inter/Tajawal only
- [ ] Tone is calm, professional, non-salesy
- [ ] No superlatives or guarantees
- [ ] Scope limitations clearly stated
- [ ] Logo has proper clear space
- [ ] All images have alt text
- [ ] Arabic content reviewed for RTL
- [ ] Links work and point to correct language version
- [ ] Contact information is current

### Quality Standards

- [ ] Meets WCAG 2.1 AA accessibility
- [ ] Loads under 3 seconds
- [ ] Responsive on mobile
- [ ] Print-friendly where applicable
- [ ] Consistent across all platforms

---

## Appendix: Quick Reference

### Color Codes

```
White:      #FFFFFF
Off-White:  #F8FAFC
Light Gray: #F1F5F9
Border:     #E2E8F0
Muted Text: #64748B
Body Text:  #334155
Headings:   #0F172A
Accent:     #0F172A
Green:      #059669 (micro-accent only)
```

### Font Sizes

```
Display: 72px / 4.5rem
H1:      48px / 3rem
H2:      36px / 2.25rem
H3:      24px / 1.5rem
Body:    16px / 1rem
Small:   14px / 0.875rem
```

### Key Dimensions

```
LinkedIn Banner:  1584 × 396 px
Twitter Header:   1500 × 500 px
OG Image:         1200 × 630 px
Social Post:      1200 × 1200 px
Profile Avatar:   400 × 400 px
Favicon:          16 × 16 px, 32 × 32 px
Apple Touch:      180 × 180 px
```

---

**Document maintained by:** NeoTechnology Solutions LLC
**Contact:** info@neotechnology.solutions
