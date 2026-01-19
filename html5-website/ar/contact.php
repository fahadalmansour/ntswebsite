<?php
session_start();
if (empty($_SESSION["csrf_token"])) {
    $_SESSION["csrf_token"] = bin2hex(random_bytes(32));
}
$csrf = $_SESSION["csrf_token"];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا | NeoTechnology Solutions</title>
    <meta name="description" content="احجز جلسة قرار أو أرسل استفساراً. نرد خلال يوم عمل واحد.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><rect fill='%230f172a' width='100' height='100' rx='20'/><text x='50' y='68' font-size='50' font-family='system-ui' font-weight='bold' fill='%2338bdf8' text-anchor='middle'>N</text></svg>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href="index.html" class="logo">
                    <div class="logo-icon">N</div>
                    <span class="logo-text">NeoTechnology Solutions</span>
                </a>
                <nav class="nav">
                    <button class="menu-toggle" aria-label="تبديل القائمة">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <ul class="nav-links">
                        <li><a href="services.html" class="nav-link">الخدمات</a></li>
                        <li><a href="how-we-work.html" class="nav-link">كيف نعمل</a></li>
                        <li><a href="about.html" class="nav-link">من نحن</a></li>
                        <li><a href="contact.php" class="nav-link active">تواصل معنا</a></li>
                        <li><a href="contact.php" class="nav-cta">احجز جلسة</a></li>
                    </ul>
                    <div class="lang-switch">
                        <a href="../en/contact.php" class="lang-btn">EN</a>
                        <a href="contact.php" class="lang-btn active">عربي</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <!-- Page Hero -->
        <section class="page-hero">
            <div class="container">
                <h1>تواصل معنا</h1>
                <p class="page-hero-subtitle">احجز جلسة قرار أو أرسل استفساراً. نرد خلال يوم عمل واحد.</p>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="section">
            <div class="container">
                <div class="contact-grid">
                    <!-- Contact Info -->
                    <div class="contact-info">
                        <h2>دعنا نتحدث</h2>
                        <p>ابدأ بجلسة قرار مدتها 90 دقيقة. سنحلل وضعك ونقدم توصيات أولية — أو نخبرك إذا لم نكن الأنسب لاحتياجاتك.</p>

                        <div class="contact-methods">
                            <a href="mailto:contact@neotechnology.solutions" class="contact-method">
                                <div class="contact-method-icon">&#9993;</div>
                                <div>
                                    <div class="contact-method-label">البريد الإلكتروني</div>
                                    <div class="contact-method-value">contact@neotechnology.solutions</div>
                                </div>
                            </a>
                            <a href="tel:+13075073999" class="contact-method">
                                <div class="contact-method-icon">&#9742;</div>
                                <div>
                                    <div class="contact-method-label">الهاتف</div>
                                    <div class="contact-method-value" dir="ltr">+1 (307) 507-3999</div>
                                </div>
                            </a>
                            <div class="contact-method">
                                <div class="contact-method-icon">&#128337;</div>
                                <div>
                                    <div class="contact-method-label">وقت الرد</div>
                                    <div class="contact-method-value">خلال يوم عمل واحد</div>
                                </div>
                            </div>
                            <div class="contact-method">
                                <div class="contact-method-icon">&#128197;</div>
                                <div>
                                    <div class="contact-method-label">ساعات العمل</div>
                                    <div class="contact-method-value">الأحد - الخميس، ٩ ص - ٦ م (توقيت الرياض)</div>
                                </div>
                            </div>
                        </div>

                        <!-- What to Expect -->
                        <div style="margin-top: 2rem; padding: 1.5rem; background: var(--slate-100); border-radius: 0.75rem;">
                            <h4 style="margin-bottom: 1rem;">ماذا تتوقع</h4>
                            <ol style="margin-bottom: 0; padding-right: 1.25rem;">
                                <li><strong>في نفس اليوم:</strong> نراجع طلبك ونقيّم الملاءمة</li>
                                <li><strong>خلال يوم واحد:</strong> نرد بالأوقات المتاحة أو بأسئلة المتابعة</li>
                                <li><strong>جلسة القرار:</strong> مناقشة مركزة لمدة 90 دقيقة حول وضعك</li>
                                <li><strong>الخطوات التالية:</strong> إذا كان مناسباً، نقدم عرضاً لمشاركة أعمق</li>
                            </ol>
                            <p style="margin-top: 1rem; margin-bottom: 0; font-size: 0.875rem; color: var(--slate-600);"><strong>لا التزام.</strong> جلسة القرار تساعد الطرفين في تحديد ما إذا كانت مقاربتنا الاستشارية تناسب احتياجاتك.</p>
                        </div>
                    </div>

                    <!-- Intake Form -->
                    <div class="form-card">
                        <h3>احجز جلسة قرار</h3>
                        <p>أخبرنا عن وضعك. سنرد خلال يوم عمل واحد.</p>

                        <form action="../forms/submit.php" method="POST" id="intake-form">
                            <!-- Hidden Fields -->
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf); ?>">
                            <input type="hidden" name="lang" value="ar">
                            <!-- Honeypot - invisible to humans, bots fill it -->
                            <div style="position: absolute; left: -9999px;" aria-hidden="true">
                                <label for="website">الموقع (اتركه فارغاً)</label>
                                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                            </div>

                            <!-- About You -->
                            <div class="form-section">
                                <div class="form-section-title">معلوماتك</div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">اسم المنشأة <span class="required">*</span></label>
                                        <input type="text" name="company" class="form-input" required placeholder="اسم شركتك أو جهتك">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">اسم المسؤول <span class="required">*</span></label>
                                        <input type="text" name="name" class="form-input" required placeholder="اسمك الكامل">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">المسمى الوظيفي</label>
                                        <input type="text" name="title" class="form-input" placeholder="منصبك">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">البريد الإلكتروني للعمل <span class="required">*</span></label>
                                        <input type="email" name="email" class="form-input" required placeholder="سنرد على هذا العنوان">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">رقم الهاتف</label>
                                        <input type="tel" name="phone" class="form-input" placeholder="+966 5xx xxx xxxx" dir="ltr">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">القطاع <span class="required">*</span></label>
                                        <select name="industry" class="form-select" required>
                                            <option value="">اختر قطاعك</option>
                                            <option value="الخدمات المالية والمصرفية">الخدمات المالية والمصرفية</option>
                                            <option value="الرعاية الصحية والأدوية">الرعاية الصحية والأدوية</option>
                                            <option value="التجزئة والتجارة الإلكترونية">التجزئة والتجارة الإلكترونية</option>
                                            <option value="التصنيع والصناعة">التصنيع والصناعة</option>
                                            <option value="الحكومة والقطاع العام">الحكومة والقطاع العام</option>
                                            <option value="التقنية والبرمجيات">التقنية والبرمجيات</option>
                                            <option value="الطاقة والمرافق">الطاقة والمرافق</option>
                                            <option value="العقارات والإنشاءات">العقارات والإنشاءات</option>
                                            <option value="الاتصالات">الاتصالات</option>
                                            <option value="أخرى">أخرى</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- About Your Decision -->
                            <div class="form-section">
                                <div class="form-section-title">عن قرارك</div>

                                <div class="form-group">
                                    <label class="form-label">نوع القرار <span class="required">*</span></label>
                                    <select name="decision_type" class="form-select" required>
                                        <option value="">ما نوع القرار التقني الذي تواجهه؟</option>
                                        <option value="السحابة مقابل المحلي / الهجين">السحابة مقابل المحلي / الهجين</option>
                                        <option value="اختيار المزود / المكامل">اختيار المزود / المكامل</option>
                                        <option value="جاهزية الامتثال (PDPL + أنظمة الخليج)">جاهزية الامتثال (نظام حماية البيانات الشخصية + أنظمة الخليج)</option>
                                        <option value="خط الأساس الأمني + تقييم المخاطر">خط الأساس الأمني + تقييم المخاطر</option>
                                        <option value="المراقبة + النسخ الاحتياطي + التعافي من الكوارث">المراقبة + النسخ الاحتياطي + التعافي من الكوارث (RPO/RTO)</option>
                                        <option value="التحكم في التكاليف / قرار التوسع">التحكم في التكاليف / قرار التوسع</option>
                                        <option value="استراتيجية التحول الرقمي">استراتيجية التحول الرقمي</option>
                                        <option value="اختيار ERP / الأنظمة الأساسية">اختيار ERP / الأنظمة الأساسية</option>
                                        <option value="أخرى">أخرى (حدد في الرسالة)</option>
                                    </select>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">الجدول الزمني <span class="required">*</span></label>
                                        <select name="timeline" class="form-select" required>
                                            <option value="">متى تحتاج اتخاذ القرار؟</option>
                                            <option value="عاجل - خلال أسبوعين">عاجل — القرار مطلوب خلال أسبوعين</option>
                                            <option value="قريب المدى - 1-2 شهر">قريب المدى — 1-2 شهر</option>
                                            <option value="تخطيط - 3-6 أشهر">تخطيط — 3-6 أشهر</option>
                                            <option value="استكشاف - لا جدول محدد">استكشاف — لا جدول زمني محدد</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">الوضع الحالي <span class="required">*</span></label>
                                        <select name="situation" class="form-select" required>
                                            <option value="">وضعك الحالي</option>
                                            <option value="بداية جديدة">بداية جديدة — نبدأ من الصفر</option>
                                            <option value="ترحيل">ترحيل — الانتقال من أنظمة قائمة</option>
                                            <option value="تحديث">تحديث — تطوير المقاربة الحالية</option>
                                            <option value="توحيد">توحيد — دمج أنظمة متعددة</option>
                                            <option value="تقييم">تقييم — نحتاج فهم الوضع الحالي</option>
                                            <option value="أخرى">أخرى</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">المزودون المعنيون</label>
                                        <select name="vendors" class="form-select">
                                            <option value="">هل تقيّم مزودين محددين؟</option>
                                            <option value="نعم - نقيّم بنشاط">نعم — نقيّم مزودين محددين بنشاط</option>
                                            <option value="جزئياً - لدينا بعض الخيارات">جزئياً — لدينا بعض المزودين في الاعتبار</option>
                                            <option value="لا - نحتاج مساعدة في التحديد">لا — نحتاج مساعدة في تحديد المزودين</option>
                                            <option value="غير منطبق">غير منطبق</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">نطاق الميزانية</label>
                                        <select name="budget" class="form-select">
                                            <option value="">ما نطاق ميزانيتك؟</option>
                                            <option value="أقل من 200 ألف ريال">أقل من 200 ألف ريال</option>
                                            <option value="200 - 400 ألف ريال">200 - 400 ألف ريال</option>
                                            <option value="400 ألف - مليون ريال">400 ألف - مليون ريال</option>
                                            <option value="مليون - مليوني ريال">مليون - مليوني ريال</option>
                                            <option value="أكثر من مليوني ريال">أكثر من مليوني ريال</option>
                                            <option value="غير محددة بعد">غير محددة بعد</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">رابط لطلب تقديم العروض / العرض (اختياري)</label>
                                    <input type="url" name="link" class="form-input" placeholder="https://..." dir="ltr">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">ترشيح الموردين؟</label>
                                    <select name="intro_request" class="form-select">
                                        <option value="">هل تريد ترشيح/تعريف بمورد؟</option>
                                        <option value="لا، استشارة فقط">لا، استشارة فقط</option>
                                        <option value="نعم، أريد ترشيح/تعريف بمورد (مع الإفصاح)">نعم، أريد ترشيح/تعريف بمورد (مع الإفصاح)</option>
                                        <option value="غير متأكد">غير متأكد</option>
                                    </select>
                                    <div class="form-helper">إذا نعم، يتم <a href="disclosure.html" target="_blank">الإفصاح كتابياً</a> عن أي عمولة.</div>
                                </div>
                            </div>

                            <!-- Your Message -->
                            <div class="form-section">
                                <div class="form-section-title">رسالتك</div>

                                <div class="form-group">
                                    <label class="form-label">وصف الوضع <span class="required">*</span></label>
                                    <textarea name="message" class="form-textarea" required placeholder="صف وضعك، والقرار الذي تواجهه، وأي أسئلة محددة. هذا يساعدنا في التحضير لنقاشنا."></textarea>
                                    <div class="form-helper">100-1000 حرف موصى به</div>
                                </div>
                            </div>

                            <!-- Consent -->
                            <div class="form-section">
                                <div class="form-section-title">الموافقات</div>

                                <div class="form-group">
                                    <div class="form-checkbox">
                                        <input type="checkbox" id="consent" name="consent" value="yes" required>
                                        <label for="consent" class="form-checkbox-label">
                                            <strong>أفهم أن هذه استشارات فقط.</strong> NeoTechnology Solutions تقدم التحليل والتوصيات وأطر القرارات. لا تنفذون الحلول، ولا تديرون المشاريع، ولا تقدمون خدمات تقنية معلومات مستمرة. أوافق أيضاً على <a href="privacy.html" target="_blank">سياسة الخصوصية</a> وأوافق على التواصل معي بخصوص هذا الاستفسار.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg form-submit">إرسال الطلب</button>

                            <p class="form-note">بالإرسال، توافق على <a href="terms.html">شروط الاستخدام</a>. نرد خلال يوم عمل واحد (الأحد - الخميس).</p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Company Info Bar -->
        <section class="section-sm bg-slate-100">
            <div class="container">
                <div style="text-align: center;">
                    <p style="margin-bottom: 0.5rem;"><strong>NeoTechnology Solutions LLC</strong></p>
                    <p style="margin-bottom: 0; color: var(--slate-600);">وايومنغ، الولايات المتحدة الأمريكية | contact@neotechnology.solutions | <span dir="ltr">+1 (307) 507-3999</span></p>
                    <p style="margin-bottom: 0; color: var(--slate-500); font-size: 0.875rem; margin-top: 0.5rem;">استفسارات الخصوصية: privacy@neotechnology.solutions</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="index.html" class="logo">
                        <div class="logo-icon">N</div>
                        <span class="logo-text">NeoTechnology Solutions</span>
                    </a>
                    <p>استشارات مستقلة لقرارات تقنية المعلومات للمنشآت التي تتخذ قرارات تقنية مهمة.</p>
                </div>
                <div class="footer-column">
                    <h4>الخدمات</h4>
                    <ul class="footer-links">
                        <li><a href="services.html">استراتيجية الحوسبة السحابية</a></li>
                        <li><a href="services.html">الأمن والامتثال</a></li>
                        <li><a href="services.html">اختيار المزودين</a></li>
                        <li><a href="services.html">التحول الرقمي</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>الشركة</h4>
                    <ul class="footer-links">
                        <li><a href="about.html">من نحن</a></li>
                        <li><a href="how-we-work.html">كيف نعمل</a></li>
                        <li><a href="case-studies.html">دراسات الحالة</a></li>
                        <li><a href="contact.php">تواصل معنا</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h4>قانوني</h4>
                    <ul class="footer-links">
                        <li><a href="privacy.html">سياسة الخصوصية</a></li>
                        <li><a href="cookies.html">سياسة ملفات الارتباط</a></li>
                        <li><a href="terms.html">شروط الاستخدام</a></li>
                        <li><a href="disclaimer.html">إخلاء المسؤولية</a></li>
                        <li><a href="disclosure.html">سياسة الإفصاح</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="footer-copy">&copy; 2026 NeoTechnology Solutions LLC. وايومنغ، الولايات المتحدة الأمريكية. جميع الحقوق محفوظة.</p>
                <div class="footer-social">
                    <a href="#" aria-label="LinkedIn"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                    <a href="#" aria-label="Twitter"><svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="../assets/js/main.js"></script>
</body>
</html>
