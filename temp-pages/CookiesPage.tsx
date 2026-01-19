export function CookiesPage() {
  return (
    <div className="min-h-screen bg-white pt-32 pb-20 px-6">
      <div className="max-w-4xl mx-auto">
        <h1 className="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
          Cookie Policy
        </h1>
        <p className="text-sm text-slate-600 mb-12">Last updated: January 11, 2026</p>

        <div className="prose prose-slate max-w-none space-y-8">
          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">What are cookies</h2>
            <p className="text-slate-700 leading-relaxed">
              Cookies are small text files that are placed on your device when you visit a website. 
              They help websites remember your preferences and improve your browsing experience.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Cookies we use</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              Our website uses the following types of cookies:
            </p>
            
            <div className="bg-slate-50 rounded-xl p-6 border border-slate-200 mb-4">
              <h3 className="text-lg text-slate-900 font-medium mb-2">Essential Cookies</h3>
              <p className="text-slate-700 text-sm leading-relaxed">
                These cookies are necessary for the website to function properly. They enable basic 
                features like page navigation and access to secure areas of the website.
              </p>
            </div>

            <div className="bg-slate-50 rounded-xl p-6 border border-slate-200">
              <h3 className="text-lg text-slate-900 font-medium mb-2">Analytics Cookies (Optional)</h3>
              <p className="text-slate-700 text-sm leading-relaxed">
                If enabled, we use anonymized analytics to understand how visitors interact with our 
                website. This helps us improve our content and services. These cookies do not collect 
                personally identifiable information.
              </p>
            </div>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">How to control cookies</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              You can control and manage cookies through your browser settings. Most browsers allow you to:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>View what cookies are stored and delete them individually</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Block third-party cookies</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Block all cookies from specific websites</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Delete all cookies when you close your browser</span>
              </li>
            </ul>
            <p className="text-slate-700 leading-relaxed mt-4">
              Please note that blocking or deleting cookies may impact your experience on our website and 
              limit certain functionality.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Third-party cookies</h2>
            <p className="text-slate-700 leading-relaxed">
              We do not use third-party advertising cookies. Any third-party services we use are limited 
              to essential website functionality and analytics (if enabled).
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Contact</h2>
            <p className="text-slate-700 leading-relaxed">
              If you have questions about our use of cookies, please contact us at{' '}
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
