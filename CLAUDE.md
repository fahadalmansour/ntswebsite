# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

---

## Project Overview

NeoTechnology Solutions bilingual (English/Arabic) WordPress theme with RTL support for an IT Decision Advisory company based in Wyoming, USA. Includes a standalone Python document generation tool.

**Company Details:**
- Name: NeoTechnology Solutions LLC
- Email: info@neotechnology.solutions
- Phone: +1 (307) 507-3999
- Location: Wyoming, USA
- Domain: neotechnology.solutions

---

## Commands

### WordPress Theme

**Package for distribution:**
```bash
cd /Users/fahadalmansour/Downloads/NTS
zip -r neotechnology-solutions-theme.zip wordpress-theme -x "*.DS_Store" -x "__MACOSX/*"
```

**Install:** Upload zip via WordPress Admin → Appearance → Themes → Add New → Upload, then activate.

### Document Tools (Python)

```bash
cd neotech-document-tools
pip install -r requirements.txt        # Install dependencies
python document_designer.py            # Run interactive tool
```

**Optional AI features:** Set `ANTHROPIC_API_KEY` environment variable or create `.env` file.

---

## Architecture

### Repository Structure

```
NTS/
├── wordpress-theme/           # Production WordPress theme
│   ├── functions.php          # Theme setup, customizer, SEO, enqueues
│   ├── inc/shortcodes.php     # All homepage section shortcodes
│   ├── style.css              # CSS variables + Tailwind-like utilities
│   ├── header.php / footer.php
│   ├── front-page.php         # Homepage template
│   ├── page-*.php             # Page templates (about, services, contact, legal)
│   ├── js/
│   │   ├── navigation.js      # Mobile nav toggle
│   │   ├── cookie-consent.js  # GDPR cookie banner
│   │   └── form-tools.js      # Copy/print/PDF utilities
│   ├── languages/ar.po        # Arabic translations
│   ├── assets/brand/          # SVG logos, favicons, social assets
│   └── templates/             # Email/proposal/contract HTML templates
├── neotech-document-tools/    # Standalone Python tool
│   ├── document_designer.py   # AI-powered document generator
│   └── output/                # Generated PDFs and HTML
└── temp-pages/                # React prototypes (reference only)
```

### Shortcode System

All homepage sections are shortcodes in `inc/shortcodes.php`:

| Shortcode | Purpose |
|-----------|---------|
| `[neotech_hero]` | Hero with tagline |
| `[neotech_how_we_work]` | 4-step process |
| `[neotech_decision_areas]` | Service areas grid |
| `[neotech_advisory_services]` | Consulting packages |
| `[neotech_what_you_receive]` | Deliverables list |
| `[neotech_boundaries]` | Scope limitations |
| `[neotech_why_us]` | Trust/credentials |
| `[neotech_trust_badges]` | Certification badges |
| `[neotech_contact_form]` | Contact form (CF7 fallback) |
| `[neotech_social_links]` | Social media icons |

### Page Templates

WordPress naming convention: `page-{slug}.php`
- `page-about.php`, `page-services.php`, `page-contact.php`
- Legal: `page-privacy.php`, `page-cookies.php`, `page-terms.php`, `page-disclaimer.php`, `page-disclosure.php`

### CSS Architecture

CSS variables in `style.css`:
- Colors: `--slate-50` through `--slate-950`
- Spacing: `--space-1` through `--space-20`
- Radius: `--radius-sm` through `--radius-full`

Utility classes mirror Tailwind CSS (`px-6`, `text-slate-600`, `rounded-2xl`).

### Customizer Settings (`functions.php`)

- **Social Media Links**: LinkedIn, Twitter/X, YouTube URLs
- **Tracking & Scripts**: GA4 ID, GTM ID, Meta Pixel ID, custom header scripts

Tracking IDs are passed to JS via `wp_localize_script()` for cookie consent integration.

---

## Bilingual/RTL Support

- Text domain: `neotech`
- Translation functions: `_e()`, `__()`
- Arabic translations: `languages/ar.po`
- RTL detection: `is_rtl()` function
- Arabic font: Tajawal (conditionally loaded)
- RTL-specific CSS: `[dir="rtl"]` selectors in `style.css`

---

## Cookie Consent (GDPR)

Vanilla JS implementation in `js/cookie-consent.js`:

**Storage keys:**
- `neotechnology-cookie-consent` - consent given
- `neotechnology-cookie-preferences` - category preferences

**Legal requirements:**
- Essential cookies: always ON (cannot disable)
- Analytics/Functional/Marketing: default FALSE
- Accept/Reject buttons equally visible
- No auto-accept on scroll/time

---

## SEO Implementation

`functions.php` includes comprehensive SEO:

- **Custom titles**: `pre_get_document_title` filter with page-specific bilingual titles
- **Meta tags**: description, keywords, Open Graph, Twitter Cards
- **Schema.org**: Organization, WebSite, WebPage, ContactPage, Service, FAQ, Breadcrumb
- **Performance**: preload fonts, DNS prefetch, lazy loading images
- **Security headers**: X-Content-Type-Options, X-Frame-Options, X-XSS-Protection

---

## Document Tools

Python tool for generating proposals, contracts, and emails.

**Dependencies:** `reportlab`, `jinja2`, `anthropic`

**Output formats:**
- `proposal_NTS-*.pdf` - Proposals
- `contract_CSA-*.pdf` - Contracts
- `email_*.html` - Email templates

**AI features (optional, requires API key):**
- AI Proposal Generator
- AI Email Writer
- AI Text Improver

---

## Content Guidelines

### Company Positioning
- "IT Consulting" (not "IT Advisory")
- Vendor-neutral, independent
- Advisory only — no implementation or managed services
- No product sales, no guarantees on outcomes

### Key Messaging (repeat throughout)
- "Advisory only — no implementation"
- "Client makes final decision"
- "We reply within 1 business day"
- "Fixed-scope, documented, contractual"

### Contact
- General: info@neotechnology.solutions
- Privacy: privacy@neotechnology.solutions
- Governing law: State of Wyoming, USA
