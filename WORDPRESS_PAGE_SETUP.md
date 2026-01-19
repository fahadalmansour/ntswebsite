# WordPress Page Setup Guide

The NeoTechnology Solutions theme has **all content built into the templates**. You just need to create pages with the correct slugs and select the right template.

---

## Pages to Create

Go to **Pages → Add New** for each page:

### 1. Home Page
| Field | Value |
|-------|-------|
| Title | `Home` |
| Slug | `home` |
| Template | `Default template` (uses front-page.php automatically) |
| Content | Leave empty |

**After creating:** Go to **Settings → Reading** → Set "Your homepage displays" to "A static page" → Select "Home"

---

### 2. About Page
| Field | Value |
|-------|-------|
| Title | `About` |
| Slug | `about` |
| Template | `About Us` |
| Content | Leave empty |

---

### 3. Services Page
| Field | Value |
|-------|-------|
| Title | `Services` |
| Slug | `services` |
| Template | `Services` |
| Content | Leave empty |

---

### 4. Contact Page
| Field | Value |
|-------|-------|
| Title | `Contact` |
| Slug | `contact` |
| Template | `Contact Page` |
| Content | Leave empty |

---

### 5. Privacy Policy
| Field | Value |
|-------|-------|
| Title | `Privacy Policy` |
| Slug | `privacy` |
| Template | `Privacy Policy` |
| Content | Leave empty |

---

### 6. Terms of Use
| Field | Value |
|-------|-------|
| Title | `Terms of Use` |
| Slug | `terms` |
| Template | `Terms of Service` |
| Content | Leave empty |

---

### 7. Cookie Policy
| Field | Value |
|-------|-------|
| Title | `Cookie Policy` |
| Slug | `cookies` |
| Template | `Cookie Policy` |
| Content | Leave empty |

---

### 8. Advisory Disclaimer
| Field | Value |
|-------|-------|
| Title | `Disclaimer` |
| Slug | `disclaimer` |
| Template | `Advisory Disclaimer` |
| Content | Leave empty |

---

### 9. Disclosure Policy
| Field | Value |
|-------|-------|
| Title | `Disclosure` |
| Slug | `disclosure` |
| Template | `Disclosure Policy` |
| Content | Leave empty |

---

## Menu Setup

### Primary Menu (Header)
Go to **Appearance → Menus → Create New Menu**

Name: `Primary Menu`

Add these pages in order:
1. Home
2. About
3. Services
4. Contact

**Menu Settings:** Check "Primary Menu" location → Save

---

### Footer Menu
Create another menu named `Footer Menu`

Add these pages:
1. Privacy Policy
2. Terms of Use
3. Cookie Policy
4. Disclaimer
5. Disclosure

**Menu Settings:** Check "Footer Menu" location → Save

---

## Settings Configuration

### Reading Settings
**Settings → Reading**
- Your homepage displays: **A static page**
- Homepage: **Home**
- Posts page: (leave blank or select a blog page if you have one)

### Permalinks
**Settings → Permalinks**
- Select: **Post name** (`/%postname%/`)
- Save Changes

### Site Identity
**Appearance → Customize → Site Identity**
- Site Title: `NeoTechnology Solutions`
- Tagline: `Professional IT Consulting`
- Site Icon: Upload `favicon.svg` from theme's `assets/brand/` folder

---

## Theme Customizer Options

**Appearance → Customize**

### Social Media Links
- LinkedIn URL: `https://linkedin.com/company/neotechnology-solutions`
- Twitter URL: `https://twitter.com/neotechsol`
- YouTube URL: (optional)

### Tracking & Scripts (Optional)
- GA4 Measurement ID: `G-XXXXXXXXXX`
- GTM Container ID: `GTM-XXXXXXX`
- Meta Pixel ID: (if using Facebook)

---

## Quick Checklist

- [ ] Theme activated
- [ ] Home page created and set as front page
- [ ] About page created with "About Us" template
- [ ] Services page created with "Services" template
- [ ] Contact page created with "Contact Page" template
- [ ] Privacy Policy page created
- [ ] Terms of Use page created
- [ ] Cookie Policy page created
- [ ] Disclaimer page created
- [ ] Disclosure page created
- [ ] Primary menu created and assigned
- [ ] Footer menu created and assigned
- [ ] Permalinks set to "Post name"
- [ ] Site identity configured

---

## Available Page Templates

| Template Name | Slug | Purpose |
|---------------|------|---------|
| Default | - | Standard page |
| About Us | about | Company information |
| Services | services | Service offerings |
| Contact Page | contact | Contact form + info |
| Privacy Policy | privacy | GDPR/PDPL privacy |
| Terms of Service | terms | Terms of use |
| Cookie Policy | cookies | Cookie consent info |
| Advisory Disclaimer | disclaimer | Service limitations |
| Disclosure Policy | disclosure | Conflict of interest |

---

## Shortcodes Reference (For Custom Pages)

If you create custom pages, you can use these shortcodes:

```
[neotech_hero]              - Hero banner
[neotech_how_we_work]       - Process steps
[neotech_decision_areas]    - Service areas grid
[neotech_advisory_services] - Consulting packages
[neotech_what_you_receive]  - Deliverables list
[neotech_boundaries]        - Scope limitations
[neotech_why_us]            - Trust/credentials
[neotech_trust_badges]      - Certification badges
[neotech_contact_form]      - Simple contact form
[neotech_intake_form]       - Full qualification form
[neotech_contact_info]      - Contact information block
[neotech_social_links]      - Social media icons
[neotech_engagement_steps]  - Engagement process
[neotech_what_to_expect]    - Post-contact expectations
```

---

## Troubleshooting

**Page shows wrong content:**
- Check the template is selected correctly in Page Attributes
- Make sure the slug matches exactly (lowercase, no spaces)

**Menu not showing:**
- Verify menu is assigned to correct location (Primary/Footer)
- Check theme supports the menu location

**Homepage not working:**
- Settings → Reading → Ensure "A static page" is selected
- Ensure "Home" page exists and is selected

**Contact form not sending:**
- Install Contact Form 7 plugin for email functionality
- Configure SMTP settings for reliable email delivery
