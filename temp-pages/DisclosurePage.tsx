export function DisclosurePage() {
  return (
    <div className="min-h-screen bg-white pt-32 pb-20 px-6">
      <div className="max-w-4xl mx-auto">
        <h1 className="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
          Disclosure Policy
        </h1>
        <p className="text-sm text-slate-600 mb-12">Last updated: January 11, 2026</p>

        <div className="prose prose-slate max-w-none space-y-8">
          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Our commitment to transparency</h2>
            <p className="text-slate-700 leading-relaxed">
              NeoTechnology Solutions LLC is committed to maintaining transparency in all client relationships. 
              This Disclosure Policy outlines how we handle vendor relationships, referrals, and any 
              potential conflicts of interest.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Vendor introductions</h2>
            <p className="text-slate-700 leading-relaxed">
              When requested by clients, we may introduce or recommend vendors, implementation partners, 
              or other specialists who may be able to assist with execution of recommendations. These 
              introductions are made based on our professional assessment of fit with client requirements.
            </p>
          </section>

          <section className="bg-slate-50 rounded-2xl p-8 border border-slate-200">
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Referral fees and commissions</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              In some cases, we may receive referral fees or commissions from vendors or service providers 
              when clients engage those parties. When this occurs:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span><strong>All such arrangements are disclosed to the client in writing before any introduction is made</strong></span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>The amount or structure of any fees is documented in advance</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Clients are free to work with any vendor of their choice and are under no obligation to use introduced vendors</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Our advisory recommendations remain independent and based on client needs, not commission structures</span>
              </li>
            </ul>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Client choice</h2>
            <p className="text-slate-700 leading-relaxed">
              Clients always retain full freedom to select vendors, implementation partners, or service 
              providers of their choice. There is no obligation to work with any party we introduce. 
              Our advisory services and recommendations are not contingent upon client selection of any 
              specific vendor.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Independence of advisory work</h2>
            <p className="text-slate-700 leading-relaxed">
              Our primary advisory services—including decision analysis, vendor comparison, architecture 
              review, and strategic guidance—are performed independently and based solely on client 
              requirements and professional assessment. We do not allow vendor relationships to influence 
              our advisory recommendations.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">No undisclosed relationships</h2>
            <p className="text-slate-700 leading-relaxed">
              We do not maintain undisclosed partnerships, affiliate relationships, or financial 
              arrangements with vendors. Any material relationships that could reasonably affect our 
              advisory work are disclosed to clients in writing.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Questions and concerns</h2>
            <p className="text-slate-700 leading-relaxed">
              If you have questions about our disclosure practices or wish to understand any relationships 
              related to your engagement, please contact us at{' '}
              <a href="mailto:contact@neotechnology.solutions" className="text-slate-900 underline font-medium">
                contact@neotechnology.solutions
              </a>
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Updates to this policy</h2>
            <p className="text-slate-700 leading-relaxed">
              We may update this Disclosure Policy from time to time. Material changes will be 
              communicated to active clients. The "Last updated" date at the top of this page reflects 
              the most recent revision.
            </p>
          </section>
        </div>
      </div>
    </div>
  );
}
