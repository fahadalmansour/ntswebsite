# NeoTechnology Solutions - WordPress Site Structure

## Company Information
- **Company**: NeoTechnology Solutions LLC
- **Domain**: neotechnology.solutions
- **Positioning**: IT Decision Consulting (Advisory Only — No Implementation)

## Site Structure

### English Version (Base URL: /en/)
- **Homepage**: `/en/` 
- **Privacy Policy**: `/en/privacy`
- **Cookie Policy**: `/en/cookies`
- **Terms of Use**: `/en/terms`
- **Advisory Disclaimer**: `/en/disclaimer`
- **Disclosure Policy**: `/en/disclosure`
- **Contact**: `/en/contact`

### Arabic Version (Base URL: /ar/)
- **Homepage**: `/ar/` (الصفحة الرئيسية)
- **Privacy Policy**: `/ar/privacy` (سياسة الخصوصية)
- **Cookie Policy**: `/ar/cookies` (سياسة ملفات الارتباط)
- **Terms of Use**: `/ar/terms` (شروط الاستخدام)
- **Advisory Disclaimer**: `/ar/disclaimer` (إخلاء المسؤولية)
- **Disclosure Policy**: `/ar/disclosure` (سياسة الإفصاح)
- **Contact**: `/ar/contact` (تواصل معنا)

## Navigation Structure

### Header Navigation
**English:**
- How we work → #how-we-work (homepage anchor)
- Consulting Models → #advisory-services (homepage anchor)
- Deliverables → #what-you-receive (homepage anchor)
- Contact → /en/contact
- CTA Button: "Request discussion" → /en/contact
- Language Switcher: EN | AR

**Arabic:**
- كيف نعمل → #how-we-work
- نماذج الاستشارات → #advisory-services
- المخرجات → #what-you-receive
- تواصل معنا → /ar/contact
- CTA Button: "طلب جلسة" → /ar/contact
- Language Switcher: EN | AR

### Footer Menu
**English:**
- Privacy Policy → /en/privacy
- Cookie Policy → /en/cookies
- Terms of Use → /en/terms
- Advisory Disclaimer → /en/disclaimer
- Disclosure Policy → /en/disclosure
- Contact → /en/contact
- Back to top ↑

**Arabic:**
- سياسة الخصوصية → /ar/privacy
- سياسة ملفات الارتباط → /ar/cookies
- شروط الاستخدام → /ar/terms
- إخلاء المسؤولية → /ar/disclaimer
- سياسة الإفصاح → /ar/disclosure
- تواصل معنا → /ar/contact
- العودة للأعلى ↑

## Homepage Sections (Both Languages)

1. **Hero Section**
   - Main headline
   - Subheadline
   - Two CTAs (Request discussion + How we work)
   - Trust principles (3 cards: No selling, No implementation, Client decides)

2. **How We Work**
   - 4-step process
   - Context & constraints → Options A/B/C → Trade-offs documented → Decision summary delivered

3. **Decision Areas**
   - 3-card grid:
     - Cloud vs On-Prem/Hybrid
     - Vendor & Scope Selection
     - Scale vs Stability

4. **Reference Architecture**
   - Visual flow diagram
   - Users/Branches → Identity & Access → Network → Apps → Data → Monitoring/Backups

5. **Tools & Standards**
   - 6 categories:
     - SSO/MFA
     - Monitoring
     - Backups (RPO/RTO)
     - Security Baseline
     - Cloud Cost Controls
     - Network & Connectivity

6. **What You Receive**
   - 5 deliverables:
     1. Decision summary PDF
     2. A/B/C comparison
     3. Scope map
     4. Vendor questions checklist
     5. High-level architecture notes (1 page)

7. **Advisory Services**
   - Two models:
     - Direct Decision Advisory
     - Vendor-Assisted Decision Advisory

8. **Boundaries** (What We Do Not Do)
   - No ongoing IT support
   - No implementation
   - No managed services
   - No guarantees

9. **Engagement Structure**
   - Fixed-scope
   - Documented
   - Contractual

## Legal Pages Content Summary

### Privacy Policy (/en/privacy, /ar/privacy)
- Data collection (name, email, company, phone, message)
- Purpose (response, scheduling, contractual communication)
- Legal basis (consent)
- Retention (12 months)
- Sharing (service providers only, no selling)
- Security measures
- User rights (access, correction, deletion, withdrawal)
- Contact: privacy@neotechnology.solutions
- Last updated: January 11, 2026

### Cookie Policy (/en/cookies, /ar/cookies)
- Definition of cookies
- Types used (essential + optional analytics)
- Browser control instructions
- No third-party advertising
- Contact: privacy@neotechnology.solutions
- Last updated: January 11, 2026

### Terms of Use (/en/terms, /ar/terms)
- Website usage rules
- Intellectual property protection
- No warranties
- Limitation of liability
- Advisory services disclaimer
- Third-party links
- Changes to terms
- Governing law: Saudi Arabia
- Contact: contact@neotechnology.solutions
- Last updated: January 11, 2026

### Advisory Disclaimer (/en/disclaimer, /ar/disclaimer)
**Key Points:**
- Advisory only (no implementation, managed services, or selling)
- No guarantees or warranties
- Client responsible for final decisions and execution
- Vendor neutrality maintained
- Not legal/tax advice
- Information verification is client responsibility
- Contact: contact@neotechnology.solutions
- Last updated: January 11, 2026

### Disclosure Policy (/en/disclosure, /ar/disclosure)
**Key Points:**
- Transparency commitment
- Vendor introductions when requested
- Referral fees/commissions disclosed in writing BEFORE introduction
- Amount/structure documented in advance
- Client free to choose any vendor
- No obligation to use introduced vendors
- Advisory remains independent
- No undisclosed relationships
- Contact: contact@neotechnology.solutions
- Last updated: January 11, 2026

### Contact Page (/en/contact, /ar/contact)
**Form Fields:**
- Company name * (required)
- Your name * (required)
- Business email * (required)
- Phone (optional)
- Decision type * (dropdown):
  - Cloud vs On-Prem/Hybrid
  - Vendor/Scope selection
  - Scale vs Stability
  - Other
- Message * (textarea)
- Consent checkbox *: "I understand this is advisory only (not implementation)"

**Features:**
- Form validation
- mailto fallback
- Response time: "We reply within 1 business day"
- Direct email link: contact@neotechnology.solutions

## Design Guidelines

### Colors
- White/light gray backgrounds
- Slate-50 for alternate sections
- Slate-900 (deep navy) for accents and CTAs
- Slate-600/700 for body text

### Typography
- Font: Inter (or system font)
- Headings: font-light, tracking-tight
- Body: leading-relaxed
- Strong typography scale (text-4xl to text-7xl for h1)

### Components
- Rounded-full buttons
- Rounded-2xl/3xl cards
- Subtle borders (border-slate-200)
- Soft shadows
- Large whitespace (py-16 sections)
- Hover states with transitions

### Responsive
- Mobile-first approach
- Grid breakpoints: sm, md, lg
- Stack on mobile, side-by-side on desktop

## WordPress Implementation Notes

### Pages to Create
1. Homepage (both languages)
2. Privacy Policy (both languages)
3. Cookie Policy (both languages)
4. Terms of Use (both languages)
5. Advisory Disclaimer (both languages)
6. Disclosure Policy (both languages)
7. Contact (both languages)

### Menus
- **Primary Menu** (Header): How we work, Consulting Models, Deliverables, Contact
- **Footer Menu**: Privacy, Cookies, Terms, Disclaimer, Disclosure, Contact

### Language Switcher
- Position: Header (top right)
- EN | AR toggle
- Switches to corresponding page in other language

### Contact Form
- Use Contact Form 7 or WPForms
- Include all specified fields
- Validation required
- Email to: contact@neotechnology.solutions
- Privacy email: privacy@neotechnology.solutions

### SEO & Meta
- Each page needs translated meta titles and descriptions
- hreflang tags for bilingual setup
- Canonical URLs

### Hosting Considerations
- Saudi Arabia-friendly hosting
- HTTPS required
- Fast loading times
- Arabic font support

## Key Messaging (Must Include)

### Scope Statement (Repeat Throughout)
- "Advisory only — no implementation"
- "No managed services"
- "No selling of products"
- "Client makes final decision"

### Trust Elements
- "We reply within 1 business day"
- "Fixed-scope, documented, contractual"
- "Vendor neutrality"
- "Transparency in all disclosures"

### Exclusions (Always Clear)
- No implementation
- No managed IT
- No reselling
- No guarantees
- No legal/tax advice

## Contact Information
- **General**: contact@neotechnology.solutions
- **Privacy**: privacy@neotechnology.solutions
- **Response Time**: Within 1 business day
- **Governing Law**: Saudi Arabia

## Compliance Notes
- GDPR-aware privacy policy
- Cookie consent (if analytics enabled)
- Clear data retention periods
- User rights documentation
- Saudi Arabia legal jurisdiction
- Professional advisory disclaimer
- Full fee disclosure policy

---

**Last Updated**: January 11, 2026
**Company**: NeoTechnology Solutions LLC
**Domain**: neotechnology.solutions
