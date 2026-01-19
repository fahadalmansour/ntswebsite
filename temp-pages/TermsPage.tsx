export function TermsPage() {
  return (
    <div className="min-h-screen bg-white pt-32 pb-20 px-6">
      <div className="max-w-4xl mx-auto">
        <h1 className="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
          Terms of Use
        </h1>
        <p className="text-sm text-slate-600 mb-12">Last updated: January 11, 2026</p>

        <div className="prose prose-slate max-w-none space-y-8">
          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Website usage</h2>
            <p className="text-slate-700 leading-relaxed">
              By accessing and using this website, you accept and agree to be bound by these Terms of Use. 
              If you do not agree to these terms, please do not use this website.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Intellectual property</h2>
            <p className="text-slate-700 leading-relaxed">
              All content on this website, including text, graphics, logos, and software, is the property 
              of NeoTechnology Solutions LLC or its content suppliers and is protected by international 
              copyright and intellectual property laws. You may not reproduce, distribute, or create 
              derivative works from this content without express written permission.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">No warranties</h2>
            <p className="text-slate-700 leading-relaxed">
              This website and its content are provided "as is" without warranties of any kind, either 
              express or implied. We do not warrant that the website will be uninterrupted, error-free, 
              or free of viruses or other harmful components.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Limitation of liability</h2>
            <p className="text-slate-700 leading-relaxed">
              NeoTechnology Solutions LLC shall not be liable for any direct, indirect, incidental, 
              consequential, or punitive damages arising from your use of this website or inability to 
              use the website, even if we have been advised of the possibility of such damages.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Advisory services disclaimer</h2>
            <p className="text-slate-700 leading-relaxed">
              Information on this website about our services is for general information purposes only. 
              Actual advisory engagements are governed by separate written agreements. Our services are 
              advisory in nature only—we do not provide implementation, managed services, or operational 
              guarantees.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Third-party links</h2>
            <p className="text-slate-700 leading-relaxed">
              This website may contain links to third-party websites. These links are provided for your 
              convenience only. We do not endorse or assume responsibility for the content, privacy 
              policies, or practices of third-party websites.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Changes to terms</h2>
            <p className="text-slate-700 leading-relaxed">
              We reserve the right to modify these Terms of Use at any time. Changes will be posted on 
              this page with an updated "Last updated" date. Your continued use of the website after 
              changes are posted constitutes your acceptance of the modified terms.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Governing law</h2>
            <p className="text-slate-700 leading-relaxed">
              These Terms of Use shall be governed by and construed in accordance with the laws of the 
              Kingdom of Saudi Arabia. Any disputes arising from these terms shall be subject to the 
              exclusive jurisdiction of the courts of Saudi Arabia.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Contact</h2>
            <p className="text-slate-700 leading-relaxed">
              For questions about these Terms of Use, please contact us at{' '}
              <a href="mailto:contact@neotechnology.solutions" className="text-slate-900 underline font-medium">
                contact@neotechnology.solutions
              </a>
            </p>
          </section>
        </div>
      </div>
    </div>
  );
}
