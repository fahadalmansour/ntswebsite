export function DisclaimerPage() {
  return (
    <div className="min-h-screen bg-white pt-32 pb-20 px-6">
      <div className="max-w-4xl mx-auto">
        <h1 className="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
          Advisory Disclaimer
        </h1>
        <p className="text-sm text-slate-600 mb-12">Last updated: January 11, 2026</p>

        <div className="prose prose-slate max-w-none space-y-8">
          <section className="bg-slate-50 rounded-2xl p-8 border border-slate-200">
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Scope of services</h2>
            <p className="text-slate-700 leading-relaxed mb-4">
              NeoTechnology Solutions LLC provides <strong>advisory services only</strong>. We do not:
            </p>
            <ul className="space-y-2 text-slate-700">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Implement IT systems or solutions</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Provide managed services or ongoing IT support</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Sell hardware, software, or technology products</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Perform operational or administrative system management</span>
              </li>
            </ul>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">No guarantees</h2>
            <p className="text-slate-700 leading-relaxed">
              We do not provide guarantees, warranties, or assurances regarding outcomes, performance, 
              cost savings, or results from any decisions made based on our advisory services. Our role 
              is to provide structured analysis and recommendations—not to guarantee specific outcomes.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Client responsibility</h2>
            <p className="text-slate-700 leading-relaxed">
              The final decision and execution of any IT strategy, vendor selection, or system changes 
              are the sole responsibility of the client. Clients are responsible for:
            </p>
            <ul className="space-y-2 text-slate-700 mt-4">
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Making all final decisions based on their business judgment</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Implementation and execution of any recommended strategies</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Validating all information and performing due diligence</span>
              </li>
              <li className="flex items-start gap-3">
                <span className="w-1.5 h-1.5 bg-slate-400 rounded-full mt-2 flex-shrink-0"></span>
                <span>Compliance with all applicable laws and regulations</span>
              </li>
            </ul>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Vendor neutrality</h2>
            <p className="text-slate-700 leading-relaxed">
              We maintain independence and vendor neutrality in our advisory services. When we provide 
              vendor comparisons or recommendations, they are based on our professional assessment of 
              your specific requirements. Any relationships with vendors or service providers are disclosed 
              in accordance with our Disclosure Policy.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Not legal or tax advice</h2>
            <p className="text-slate-700 leading-relaxed">
              Our advisory services focus on IT decision-making and technology strategy. We do not provide 
              legal, tax, accounting, or regulatory compliance advice. Clients should consult with 
              appropriate licensed professionals for such matters.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Information accuracy</h2>
            <p className="text-slate-700 leading-relaxed">
              While we strive to provide accurate and current information, technology markets and vendor 
              offerings change rapidly. Clients are responsible for verifying all information with vendors 
              and conducting their own due diligence before making commitments.
            </p>
          </section>

          <section>
            <h2 className="text-2xl text-slate-900 mb-4 font-medium">Contact</h2>
            <p className="text-slate-700 leading-relaxed">
              If you have questions about the scope of our advisory services, please contact us at{' '}
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
