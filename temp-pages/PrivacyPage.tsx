export function PrivacyPage() {
  return (
    <div className="min-h-screen bg-white pt-32 pb-20 px-6">
      <div className="max-w-4xl mx-auto">
        <h1 className="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
          Privacy Policy
        </h1>
        <p className="text-sm text-slate-600 mb-12">Last updated: January 11, 2026</p>

        <div className="prose prose-slate max-w-none space-y-8">
          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">What data we collect</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              When you contact us through our website or email, we may collect the following information:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Your name and company name</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Business email address</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Phone number (if provided)</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Message content and inquiry details</span>
              </li>
            </ul>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Why we collect it</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              We collect this information to:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Respond to your inquiries and requests</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Schedule and coordinate advisory consultations</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Provide contractual communication related to our advisory services</span>
              </li>
            </ul>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Legal basis</h2>
            <p className="text-slate-700 leading-relaxed">
              We process your personal data based on your consent when you voluntarily submit information 
              through our contact form or email. For contractual relationships, we process data as necessary 
              to fulfill our advisory services.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Data retention</h2>
            <p className="text-slate-700 leading-relaxed">
              We retain inquiry information for 12 months from the date of last contact, unless a longer 
              retention period is required by law or contractual obligations. Client engagement records are 
              retained as required by applicable business and tax regulations.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Data sharing</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              We do not sell or rent your personal information. We may share your data only with:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Service providers (hosting, email services) necessary to operate our website and communicate with you</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Legal authorities when required by law</span>
              </li>
            </ul>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Security measures</h2>
            <p className="text-slate-700 leading-relaxed">
              We implement appropriate technical and organizational security measures to protect your personal 
              data against unauthorized access, loss, or alteration. However, no method of transmission over 
              the internet is 100% secure.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Your rights</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              You have the right to:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Access your personal data</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Request correction of inaccurate data</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Request deletion of your data (subject to legal retention requirements)</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Withdraw consent at any time</span>
              </li>
            </ul>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Contact</h2>
            <p className="text-slate-700 leading-relaxed">
              For privacy-related questions or to exercise your rights, please contact us at{' '}
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
