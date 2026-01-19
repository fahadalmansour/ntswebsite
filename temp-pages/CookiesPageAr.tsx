export function CookiesPageAr() {
  return (
    <div className="min-h-screen bg-white pt-32 pb-20 px-6" dir="rtl">
      <div className="max-w-4xl mx-auto">
        <h1 className="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
          سياسة ملفات الارتباط
        </h1>
        <p className="text-sm text-slate-600 mb-12">آخر تحديث: 11 يناير 2026</p>

        <div className="prose prose-slate max-w-none space-y-8">
          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">ما هي ملفات الارتباط</h2>
            <p className="text-slate-700 leading-relaxed">
              ملفات الارتباط (Cookies) هي ملفات نصية صغيرة يتم وضعها على جهازك عند زيارة موقع إلكتروني. 
              تساعد هذه الملفات المواقع على تذكر تفضيلاتك وتحسين تجربة التصفح الخاصة بك.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">ملفات الارتباط التي نستخدمها</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              يستخدم موقعنا الأنواع التالية من ملفات الارتباط:
            </p>
            
            <div className="bg-slate-50 rounded-xl p-6 border border-slate-200 mb-4">
              <h3 className="text-lg text-slate-900 font-medium mb-2">ملفات الارتباط الأساسية</h3>
              <p className="text-slate-700 text-sm leading-relaxed">
                هذه الملفات ضرورية لعمل الموقع بشكل صحيح. تتيح الميزات الأساسية مثل التنقل بين الصفحات والوصول إلى المناطق الآمنة في الموقع.
              </p>
            </div>

            <div className="bg-slate-50 rounded-xl p-6 border border-slate-200">
              <h3 className="text-lg text-slate-900 font-medium mb-2">ملفات الارتباط التحليلية (اختيارية)</h3>
              <p className="text-slate-700 text-sm leading-relaxed">
                إذا تم تفعيلها، نستخدم التحليلات المجهولة لفهم كيفية تفاعل الزوار مع موقعنا. يساعدنا ذلك على تحسين محتوانا وخدماتنا. 
                هذه الملفات لا تجمع معلومات تحدد الهوية الشخصية.
              </p>
            </div>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">كيفية التحكم في ملفات الارتباط</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              يمكنك التحكم وإدارة ملفات الارتباط من خلال إعدادات المتصفح. تتيح معظم المتصفحات:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>عرض ملفات الارتباط المخزنة وحذفها بشكل فردي</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>حظر ملفات الارتباط من جهات خارجية</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>حظر جميع ملفات الارتباط من مواقع معينة</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>حذف جميع ملفات الارتباط عند إغلاق المتصفح</span>
              </li>
            </ul>
            <p className="text-slate-700 leading-relaxed mt-4">
              يرجى ملاحظة أن حظر أو حذف ملفات الارتباط قد يؤثر على تجربتك في موقعنا ويحد من بعض الوظائف.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">ملفات الارتباط من جهات خارجية</h2>
            <p className="text-slate-700 leading-relaxed">
              نحن لا نستخدم ملفات ارتباط إعلانية من جهات خارجية. أي خدمات طرف ثالث نستخدمها تقتصر على وظائف الموقع الأساسية والتحليلات (إذا تم تفعيلها).
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">التواصل</h2>
            <p className="text-slate-700 leading-relaxed">
              إذا كانت لديك أسئلة حول استخدامنا لملفات الارتباط، يرجى التواصل معنا على{' '}
              <a href="mailto:privacy@neotechnology.solutions" className="text-slate-900 underline font-medium">
                privacy@neotechnology.solutions
              </a>
            </p>
          </section>
        </div>
      </div>
    </div>
  );
}
