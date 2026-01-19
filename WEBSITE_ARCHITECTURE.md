# NeoTechnology Solutions — Website Architecture

## Company Profile
- **Entity:** NeoTechnology Solutions LLC
- **Jurisdiction:** Wyoming, USA
- **Target Market:** Saudi Arabia, GCC, Global (remote)
- **Positioning:** Independent IT Decision Consulting (vendor-neutral advisory)
- **Domain:** neotechnology.solutions

---

## 1. SITEMAP

### URL Structure
```
/                           → Language selector (redirect to /en/ or /ar/)
├── /en/                    → English Homepage
│   ├── /en/services/       → Services Overview
│   ├── /en/how-we-work/    → Process & Methodology
│   ├── /en/case-studies/   → Case Studies (anonymized)
│   ├── /en/about/          → About Us
│   ├── /en/contact/        → Contact + Intake Form
│   ├── /en/privacy/        → Privacy Policy
│   ├── /en/cookies/        → Cookie Policy
│   ├── /en/terms/          → Terms of Use
│   ├── /en/disclaimer/     → Advisory Disclaimer
│   └── /en/disclosure/     → Disclosure Policy
│
└── /ar/                    → Arabic Homepage
    ├── /ar/services/       → الخدمات
    ├── /ar/how-we-work/    → كيف نعمل
    ├── /ar/case-studies/   → دراسات الحالة
    ├── /ar/about/          → من نحن
    ├── /ar/contact/        → تواصل معنا
    ├── /ar/privacy/        → سياسة الخصوصية
    ├── /ar/cookies/        → سياسة ملفات تعريف الارتباط
    ├── /ar/terms/          → شروط الاستخدام
    ├── /ar/disclaimer/     → إخلاء المسؤولية
    └── /ar/disclosure/     → سياسة الإفصاح
```

### Page Count
| Category | English | Arabic | Total |
|----------|---------|--------|-------|
| Main Pages | 6 | 6 | 12 |
| Legal Pages | 5 | 5 | 10 |
| **Total** | **11** | **11** | **22** |

---

## 2. NAVIGATION

### Header Navigation (Minimal)
```
┌─────────────────────────────────────────────────────────────────────┐
│ [Logo]  NeoTechnology Solutions                                     │
│                                                                     │
│         Services    How We Work    About    Contact    [EN|عربي]   │
│                                                                     │
│                                        [Request a Decision Session] │
└─────────────────────────────────────────────────────────────────────┘
```

**English:**
| Item | URL | Notes |
|------|-----|-------|
| Services | /en/services/ | Dropdown optional |
| How We Work | /en/how-we-work/ | |
| About | /en/about/ | |
| Contact | /en/contact/ | |
| CTA Button | /en/contact/ | "Request a Decision Session" |
| Language | /ar/ | Toggle to Arabic |

**Arabic:**
| Item | URL | Notes |
|------|-----|-------|
| الخدمات | /ar/services/ | |
| كيف نعمل | /ar/how-we-work/ | |
| من نحن | /ar/about/ | |
| تواصل معنا | /ar/contact/ | |
| CTA Button | /ar/contact/ | "اطلب جلسة قرار" |
| Language | /en/ | Toggle to English |

### Footer Navigation (Legal-Heavy)
```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│  NeoTechnology Solutions              Quick Links                   │
│  Independent IT Decision Consulting   ├── Services                  │
│                                       ├── How We Work               │
│  Wyoming, United States               ├── About                     │
│  info@neotechnology.solutions         └── Contact                   │
│  +1 (307) 507-3999                                                  │
│                                                                     │
│  ─────────────────────────────────────────────────────────────────  │
│                                                                     │
│  Privacy Policy  │  Cookie Policy  │  Terms of Use  │  Disclaimer  │
│                  │  Disclosure Policy                               │
│                                                                     │
│  © 2026 NeoTechnology Solutions LLC. All rights reserved.          │
│                                                                     │
│  [LinkedIn]  [Twitter/X]                                            │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**Footer Links - English:**
| Section | Links |
|---------|-------|
| Quick Links | Services, How We Work, About, Contact |
| Legal (Row 1) | Privacy Policy, Cookie Policy, Terms of Use, Disclaimer |
| Legal (Row 2) | Disclosure Policy |
| Social | LinkedIn, Twitter/X |

**Footer Links - Arabic:**
| Section | Links |
|---------|-------|
| روابط سريعة | الخدمات، كيف نعمل، من نحن، تواصل معنا |
| قانوني | سياسة الخصوصية، سياسة ملفات تعريف الارتباط، شروط الاستخدام، إخلاء المسؤولية، سياسة الإفصاح |

---

## 3. PAGE SPECIFICATIONS

---

### PAGE: Homepage
**URLs:** `/en/` | `/ar/`

#### Page Goal
Convert visitors into qualified leads by establishing credibility, clarifying the advisory-only model, and prompting action.

#### What User Must Understand
- This is an independent consulting firm (not a vendor)
- We help with technology *decisions*, not implementation
- We serve Saudi Arabia and the GCC
- Clear next step: Request a decision session

#### Sections

| # | Section | Component | Purpose |
|---|---------|-----------|---------|
| 1 | Hero | Full-width hero | Hook + value proposition |
| 2 | Trust Indicators | Icon row | Establish credibility |
| 3 | Decision Areas | 4-card grid | Show scope of expertise |
| 4 | How We Work | 3-step process | Demystify the engagement |
| 5 | What You Receive | Checklist | Tangible deliverables |
| 6 | Boundaries | Gray box | "What we DON'T do" |
| 7 | Why Us | 4 differentiators | Build trust |
| 8 | CTA Section | Full-width | Drive conversion |

#### Content Outline

**HERO**
```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│           Independent IT Decision Consulting                        │
│                                                                     │
│     Vendor-neutral technology advisory for Saudi Arabia             │
│     and the GCC. We help you decide — you decide what to do.        │
│                                                                     │
│     [Request a Decision Session]     [Our Services]                 │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

**TRUST INDICATORS**
- ✓ Vendor-Neutral
- ✓ Documented Deliverables
- ✓ Fixed-Scope Engagements
- ✓ No Implementation Conflicts

**DECISION AREAS** (4 cards)
1. Cloud Strategy — Cloud vs. on-prem, migration, multi-cloud, cost
2. Security & Compliance — PDPL, risk frameworks, posture assessment
3. Vendor Selection — RFP, evaluation, negotiation support
4. Digital Strategy — Roadmaps, portfolio, build vs. buy

**HOW WE WORK** (3 steps)
1. Decision Session (90 min) → Understand your situation
2. Analysis & Options → Research, evaluate, document
3. Recommendation → Clear deliverable, your decision

**WHAT YOU RECEIVE**
- Written analysis document
- Options comparison matrix
- Risk and trade-off summary
- Clear recommendation with rationale
- Q&A session to clarify

**BOUNDARIES** (Critical section)
```
┌─────────────────────────────────────────────────────────────────────┐
│  What We Don't Do                                                   │
│                                                                     │
│  • No implementation or project execution                           │
│  • No managed services or ongoing support                           │
│  • No product sales or reselling                                    │
│  • No vendor partnerships or commissions                            │
│  • No guarantees on business outcomes                               │
│                                                                     │
│  Advisory only. You make the final decision.                        │
└─────────────────────────────────────────────────────────────────────┘
```

**WHY US**
1. Independence — No vendor affiliations
2. Clarity — Complex made understandable
3. Structure — Documented, not verbal
4. Transparency — Limitations stated upfront

**CTA SECTION**
```
┌─────────────────────────────────────────────────────────────────────┐
│                                                                     │
│           Start With a Decision Session                             │
│                                                                     │
│     90 minutes. We analyze your situation and provide a clear       │
│     recommendation — or tell you if we're not the right fit.        │
│                                                                     │
│                  [Request a Decision Session]                       │
│                                                                     │
│     We respond within 1 business day.                               │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

---

### PAGE: Services
**URLs:** `/en/services/` | `/ar/services/`

#### Page Goal
Detail the service offerings with clear scope and deliverables for each.

#### What User Must Understand
- Specific decision areas we cover
- What deliverables they receive
- The "advisory only" boundary for each service
- How to engage

#### Sections

| # | Section | Component | Purpose |
|---|---------|-----------|---------|
| 1 | Hero | Page header | Context |
| 2 | Service Grid | 4 detailed cards | Full service details |
| 3 | Deliverables | Unified list | What client receives |
| 4 | Scope Note | Gray box | Advisory-only reminder |
| 5 | CTA | Contact prompt | Conversion |

#### Service Cards (Expanded)

**1. Cloud Strategy & Architecture**
- Cloud vs. on-premise analysis
- Migration readiness assessment
- Multi-cloud strategy
- Cost optimization review
- *Deliverable:* Cloud Decision Document

**2. Security & Compliance Advisory**
- Security posture assessment
- PDPL compliance gap analysis
- Risk framework recommendations
- Vendor security evaluation
- *Deliverable:* Security Assessment Report

**3. Vendor Selection Support**
- Requirements documentation
- RFP development
- Vendor evaluation criteria
- Proposal analysis
- *Deliverable:* Vendor Evaluation Matrix

**4. Digital Transformation Strategy**
- Current state assessment
- Technology roadmap
- Build vs. buy analysis
- Integration considerations
- *Deliverable:* Transformation Roadmap

---

### PAGE: How We Work
**URLs:** `/en/how-we-work/` | `/ar/how-we-work/`

#### Page Goal
Demystify the engagement process and set expectations.

#### What User Must Understand
- The process is structured and predictable
- What happens at each stage
- Timeline expectations
- Client responsibilities

#### Sections

| # | Section | Component | Purpose |
|---|---------|-----------|---------|
| 1 | Hero | Page header | Context |
| 2 | Process Steps | 6-step timeline | Full methodology |
| 3 | Timeline | Typical durations | Set expectations |
| 4 | Client Role | Responsibilities | Two-way engagement |
| 5 | CTA | Next step | Conversion |

#### 6-Step Process

```
Step 1: Initial Contact
├── You submit an inquiry via our form
├── We review within 1 business day
└── We respond to schedule a discovery call

Step 2: Discovery Call (30 min, free)
├── We learn about your situation
├── We assess if we can help
└── If aligned, we propose a decision session

Step 3: Decision Session (90 min, paid)
├── Deep dive into your specific challenge
├── We ask structured questions
├── We identify key decision points
└── Deliverable: Session summary + next steps

Step 4: Analysis Phase
├── We research your options
├── We evaluate trade-offs
├── We document findings
└── Duration: Varies by scope (typically 1-4 weeks)

Step 5: Recommendation Delivery
├── Written analysis document
├── Options matrix with pros/cons
├── Clear recommendation
├── Q&A session to discuss

Step 6: Engagement Complete
├── You have the deliverable
├── You make the decision
├── You proceed with implementation (not us)
└── Optional: Follow-up session if needed
```

#### Client Responsibilities
- Provide accurate information about current state
- Make key stakeholders available
- Respond to questions within agreed timeframes
- Make the final decision (we advise, you decide)

---

### PAGE: Case Studies
**URLs:** `/en/case-studies/` | `/ar/case-studies/`

#### Page Goal
Demonstrate credibility through realistic (anonymized) examples.

#### What User Must Understand
- We've handled similar situations
- Our structured approach works
- We maintain confidentiality
- Results depend on client execution

#### Sections

| # | Section | Component | Purpose |
|---|---------|-----------|---------|
| 1 | Hero | Page header | Context |
| 2 | Case Study Cards | 2-3 cards | Examples |
| 3 | Confidentiality Note | Disclaimer | Trust |
| 4 | CTA | Contact prompt | Conversion |

#### Case Study Template
```
┌─────────────────────────────────────────────────────────────────────┐
│  [Industry Icon]                                                    │
│                                                                     │
│  [Title: Decision Type]                                             │
│  Industry: [Sector] │ Region: [Location]                            │
│                                                                     │
│  THE SITUATION                                                      │
│  Brief context about the client's challenge                         │
│                                                                     │
│  THE DECISION                                                       │
│  What they needed to decide                                         │
│                                                                     │
│  OUR APPROACH                                                       │
│  What we analyzed and evaluated                                     │
│                                                                     │
│  THE DELIVERABLE                                                    │
│  What we provided                                                   │
│                                                                     │
│  Note: Client made final decision and managed implementation.       │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

#### Case Study 1: Regional Bank Cloud Migration
- **Industry:** Financial Services
- **Region:** GCC
- **Situation:** Legacy on-premise systems, pressure to modernize
- **Decision:** Cloud migration strategy (public/private/hybrid)
- **Approach:** Regulatory analysis, vendor evaluation, TCO modeling
- **Deliverable:** Cloud Strategy Document with phased roadmap

#### Case Study 2: Manufacturing ERP Selection
- **Industry:** Manufacturing
- **Region:** Saudi Arabia
- **Situation:** Outgrown current ERP, multiple vendors pitching
- **Decision:** ERP platform selection
- **Approach:** Requirements mapping, RFP development, vendor scoring
- **Deliverable:** Vendor Evaluation Matrix with recommendation

---

### PAGE: About
**URLs:** `/en/about/` | `/ar/about/`

#### Page Goal
Build trust through transparency about who we are and how we operate.

#### What User Must Understand
- We are a real, registered company
- Our advisory-only model is intentional
- Our values align with client interests
- We're qualified to advise

#### Sections

| # | Section | Component | Purpose |
|---|---------|-----------|---------|
| 1 | Hero | Page header | Context |
| 2 | Company Overview | Text block | Who we are |
| 3 | Why Advisory Only | Explanation | Differentiation |
| 4 | Our Values | 5 values | Trust signals |
| 5 | Company Info | Details | Legitimacy |
| 6 | CTA | Contact prompt | Conversion |

#### Content

**Company Overview**
> NeoTechnology Solutions is an independent IT consulting firm helping organizations make better technology decisions. We provide analysis, evaluation, and recommendations — then step back so you can execute with the partners you choose.

**Why Advisory Only**
> Many consultancies blur the line between advice and implementation. When advisors also implement, incentives conflict. We chose a different path: provide objective guidance without the temptation to recommend what we can later sell or build.

**Our Values**
1. **Independence** — No vendor affiliations or hidden incentives
2. **Clarity** — Complex decisions made understandable
3. **Transparency** — Limitations stated upfront, not hidden
4. **Integrity** — Right advice over easy advice
5. **Structure** — Documented deliverables, not verbal opinions

**Company Information**
- Legal Entity: NeoTechnology Solutions LLC
- Jurisdiction: State of Wyoming, USA
- Service Area: Saudi Arabia, GCC, Global (remote)

---

### PAGE: Contact
**URLs:** `/en/contact/` | `/ar/contact/`

#### Page Goal
Convert interest into qualified leads via structured intake.

#### What User Must Understand
- How to reach us
- What information to provide
- What happens after contact
- This is advisory only (consent)

#### Sections

| # | Section | Component | Purpose |
|---|---------|-----------|---------|
| 1 | Hero | Page header | Context |
| 2 | Contact Info | Methods | Direct contact |
| 3 | Intake Form | Structured form | Lead qualification |
| 4 | What to Expect | Process | Set expectations |

#### Structured Intake Form

**Form Title:** Request a Decision Session

**Form Subtitle:** Complete this form so we can prepare for our discussion. We respond within one business day.

---

**SECTION: About You**

| Field | Type | Label (EN) | Label (AR) | Helper Text | Required |
|-------|------|------------|------------|-------------|----------|
| company | text | Organization Name | اسم المنظمة | Your company or entity name | Yes |
| contact_name | text | Contact Name | اسم جهة الاتصال | Your full name | Yes |
| contact_title | text | Title / Role | المسمى الوظيفي | Your position in the organization | Yes |
| email | email | Business Email | البريد الإلكتروني للعمل | We'll respond to this address | Yes |
| industry | dropdown | Industry | القطاع | Your primary industry | Yes |

**Industry Options:**
- Financial Services & Banking | الخدمات المالية والمصرفية
- Healthcare & Pharmaceuticals | الرعاية الصحية والأدوية
- Retail & E-commerce | التجزئة والتجارة الإلكترونية
- Manufacturing & Industrial | التصنيع والصناعة
- Government & Public Sector | الحكومة والقطاع العام
- Technology & Software | التقنية والبرمجيات
- Energy & Utilities | الطاقة والمرافق
- Real Estate & Construction | العقارات والإنشاءات
- Telecommunications | الاتصالات
- Other | أخرى

---

**SECTION: About Your Decision**

| Field | Type | Label (EN) | Label (AR) | Helper Text | Required |
|-------|------|------------|------------|-------------|----------|
| decision_type | dropdown | Decision Type | نوع القرار | What type of technology decision? | Yes |
| timeline | dropdown | Timeline | الجدول الزمني | When do you need to decide? | Yes |
| current_situation | dropdown | Current Situation | الوضع الحالي | Your current state | Yes |
| vendors_involved | dropdown | Vendors Involved | الموردون المعنيون | Evaluating specific vendors? | Yes |

**Decision Type Options:**
- Cloud vs. On-Prem / Hybrid | السحابة مقابل المحلي / الهجين
- Vendor / Integrator Selection | اختيار المورد / المتكامل
- Compliance Readiness (PDPL + GCC) | جاهزية الامتثال
- Security Baseline + Risk Assessment | خط الأساس الأمني وتقييم المخاطر
- Monitoring + Backups + DR | المراقبة والنسخ الاحتياطي والتعافي
- Cost Control / Scale Decision | التحكم بالتكاليف / قرار التوسع
- Digital Transformation Strategy | استراتيجية التحول الرقمي
- ERP / Core Systems Selection | اختيار نظام ERP / الأنظمة الأساسية
- Other (specify in message) | أخرى (حدد في الرسالة)

**Timeline Options:**
- Urgent — Decision needed within 2 weeks | عاجل — خلال أسبوعين
- Near-term — 1-2 months | قريب — 1-2 شهر
- Planning — 3-6 months | تخطيط — 3-6 أشهر
- Exploring — No fixed timeline | استكشاف — بدون جدول محدد

**Current Situation Options:**
- Greenfield — Starting from scratch | بداية جديدة
- Migration — Moving from existing systems | ترحيل من أنظمة حالية
- Modernization — Upgrading current approach | تحديث النهج الحالي
- Consolidation — Combining multiple systems | دمج أنظمة متعددة
- Assessment — Need to understand current state | تقييم — فهم الوضع الحالي
- Other | أخرى

**Vendors Involved Options:**
- Yes — Actively evaluating | نعم — نقيّم حاليًا
- Partially — Have some in mind | جزئيًا — لدينا بعض الخيارات
- No — Need help identifying | لا — نحتاج مساعدة في التحديد
- Not applicable | لا ينطبق

---

**SECTION: Your Message**

| Field | Type | Label (EN) | Label (AR) | Helper Text | Required |
|-------|------|------------|------------|-------------|----------|
| message | textarea | Situation Description | وصف الوضع | Describe your situation and the decision you're facing. | Yes |

Character guidance: 100-1000 characters

---

**SECTION: Consent**

| Field | Type | Label (EN) | Label (AR) | Required |
|-------|------|------------|------------|----------|
| advisory_consent | checkbox | I understand this is advisory only. NeoTechnology Solutions provides analysis, recommendations, and decision frameworks. You do not implement solutions, manage projects, or provide ongoing IT services. | أفهم أن هذه خدمة استشارية فقط. تقدم نيوتكنولوجي سولوشنز التحليل والتوصيات وأطر القرار. لا تنفذون الحلول أو تديرون المشاريع أو تقدمون خدمات تقنية مستمرة. | Yes |
| privacy_consent | checkbox | I agree to the Privacy Policy and consent to being contacted regarding this inquiry. | أوافق على سياسة الخصوصية وأوافق على التواصل معي بشأن هذا الاستفسار. | Yes |

---

**Submit Button:** Submit Request | إرسال الطلب

**Below Button:** By submitting, you agree to our Terms of Use. We respond within one business day (Sunday-Thursday).

---

### PAGE: Privacy Policy
**URLs:** `/en/privacy/` | `/ar/privacy/`

#### Page Goal
Comply with PDPL and build trust through transparency.

#### What User Must Understand
- What data we collect and why
- How we protect their data
- Their rights (PDPL-aligned)
- How to contact us

#### Sections
1. Introduction
2. Information We Collect
3. How We Use Your Information
4. Legal Basis for Processing
5. Data Retention
6. Your Rights (Access, Correction, Deletion, Withdrawal, Portability)
7. Data Sharing
8. Data Security
9. International Data
10. Cookies
11. Changes to Policy
12. Contact

---

### PAGE: Cookie Policy
**URLs:** `/en/cookies/` | `/ar/cookies/`

#### Page Goal
Comply with requirements and explain cookie usage.

#### What User Must Understand
- What cookies we use
- Essential vs. optional
- How to control cookies
- Third-party cookies (analytics)

#### Sections
1. What Are Cookies
2. Cookies We Use (Essential, Analytics)
3. Your Choices
4. Third-Party Cookies
5. Contact

---

### PAGE: Terms of Use
**URLs:** `/en/terms/` | `/ar/terms/`

#### Page Goal
Establish website usage terms.

#### What User Must Understand
- Acceptable use of website
- Intellectual property
- Limitations of liability
- Governing law

#### Sections
1. Acceptance
2. Website Use
3. Intellectual Property
4. Information Accuracy
5. No Professional Advice
6. Third-Party Links
7. Limitation of Liability
8. Indemnification
9. Changes
10. Governing Law
11. Contact

---

### PAGE: Advisory Disclaimer
**URLs:** `/en/disclaimer/` | `/ar/disclaimer/`

#### Page Goal
Legal protection and expectation setting.

#### What User Must Understand
- Services are advisory only
- No guarantees on outcomes
- Client responsible for decisions
- Not legal/tax/financial advice

#### Sections

| # | Section | Content Summary |
|---|---------|-----------------|
| 1 | Scope of Services | Advisory only, no implementation |
| 2 | No Guarantees | No outcome guarantees |
| 3 | Client Responsibility | Client makes decisions, validates, implements |
| 4 | Information Provided | Based on info client provides |
| 5 | Not Professional Advice | Not legal, tax, or financial advice |
| 6 | Limitation of Liability | Capped at fees paid |

---

### PAGE: Disclosure Policy
**URLs:** `/en/disclosure/` | `/ar/disclosure/`

#### Page Goal
Transparency about potential conflicts of interest.

#### What User Must Understand
- We are vendor-neutral
- How referral arrangements work (if any)
- Client always has choice
- We disclose everything in writing

#### Sections

| # | Section | Content Summary |
|---|---------|-----------------|
| 1 | Our Commitment | Vendor neutrality is core |
| 2 | Vendor Neutrality | No ongoing vendor payments |
| 3 | Vendor Introductions | If requested, disclosed in writing |
| 4 | What We Disclose | Any relationship, fee, interest |
| 5 | Past Relationships | Disclosed if relevant |
| 6 | Ongoing Monitoring | We assess conflicts continuously |
| 7 | Questions | Contact to ask about any engagement |

---

## 4. DESIGN SYSTEM

### Colors
```
Primary:
--slate-900: #0f172a    (Navy - primary text, headers)
--slate-800: #1e293b    (Dark backgrounds)
--slate-700: #334155    (Body text)
--slate-600: #475569    (Secondary text)
--slate-500: #64748b    (Muted text)

Backgrounds:
--slate-50:  #f8fafc    (Light background)
--slate-100: #f1f5f9    (Section background)
--white:     #ffffff    (Cards)

Accent:
--sky-500:   #0ea5e9    (Primary CTA)
--sky-600:   #0284c7    (CTA hover)
--sky-400:   #38bdf8    (Highlights)
```

### Typography
```
English: Inter (400, 500, 600, 700)
Arabic:  Tajawal (400, 500, 700)

Hierarchy:
H1: 48px / 700 / 1.1 line-height
H2: 32px / 700 / 1.2 line-height
H3: 24px / 600 / 1.3 line-height
H4: 20px / 600 / 1.4 line-height
Body: 16px / 400 / 1.6 line-height
Small: 14px / 400 / 1.5 line-height
```

### Components
- Cards: White bg, 1px slate-200 border, 16px radius
- Buttons: 48px height, 8px radius, 600 weight
- Forms: 48px inputs, 8px radius, slate-300 border
- Sections: 80px top/bottom padding (desktop), 48px (mobile)

### Layout
- Max-width: 1200px
- Grid: 12-column, 24px gutters
- Mobile breakpoint: 768px

---

## 5. TECHNICAL REQUIREMENTS

### Bilingual Support
- URL structure: `/en/*` and `/ar/*`
- `<html lang="en" dir="ltr">` / `<html lang="ar" dir="rtl">`
- hreflang tags for SEO
- Language switcher in header
- Cookie to remember preference

### SEO
- Unique meta titles per page
- Meta descriptions (150-160 chars)
- Open Graph tags
- Twitter Card tags
- Schema.org: Organization, WebSite, Service
- Sitemap.xml
- robots.txt

### Performance
- Lazy load images
- Preload critical fonts
- Minify CSS/JS
- Target: <3s load time

### Analytics
- Google Analytics 4 (with consent)
- No tracking without cookie consent

### Forms
- Server-side validation
- Email notification to info@
- Auto-response to submitter
- CSRF protection
- Rate limiting

---

## 6. CONTENT FILES REFERENCE

The complete content for all pages is available in:
- `WEBSITE_CONTENT_EN.md` — Full English content
- `WEBSITE_CONTENT_AR.md` — Full Arabic content
- `SOCIAL_MEDIA_PACK.md` — Social media templates

---

**Document Version:** 1.0
**Last Updated:** January 2026
