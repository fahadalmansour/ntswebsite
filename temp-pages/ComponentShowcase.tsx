import { useState } from 'react';
import { CookieButton } from '../components/cookie-consent/CookieButton';
import { CookieToggle } from '../components/cookie-consent/CookieToggle';
import { CookieCategoryRow } from '../components/cookie-consent/CookieCategoryRow';
import { CookieCategoryRowAr } from '../components/cookie-consent/CookieCategoryRowAr';
import { CookieBanner } from '../components/cookie-consent/CookieBanner';
import { CookieBannerAr } from '../components/cookie-consent/CookieBannerAr';
import { CookieModal } from '../components/cookie-consent/CookieModal';
import { CookieModalAr } from '../components/cookie-consent/CookieModalAr';
import { Copy, Check } from 'lucide-react';

export function ComponentShowcase() {
  const [showBanner, setShowBanner] = useState(false);
  const [showBannerAr, setShowBannerAr] = useState(false);
  const [showModal, setShowModal] = useState(false);
  const [showModalAr, setShowModalAr] = useState(false);
  const [showDarkBanner, setShowDarkBanner] = useState(false);
  const [showDarkModal, setShowDarkModal] = useState(false);
  const [copied, setCopied] = useState<string | null>(null);
  const [preferences, setPreferences] = useState({
    essential: true,
    analytics: false,
    functional: false,
    marketing: false
  });

  const copyToClipboard = (text: string, id: string) => {
    navigator.clipboard.writeText(text);
    setCopied(id);
    setTimeout(() => setCopied(null), 2000);
  };

  const CodeBlock = ({ code, id }: { code: string; id: string }) => (
    <div className="relative">
      <button
        onClick={() => copyToClipboard(code, id)}
        className="absolute top-3 right-3 p-2 bg-slate-800 hover:bg-slate-700 rounded-lg transition-colors"
        aria-label="Copy code"
      >
        {copied === id ? (
          <Check className="w-4 h-4 text-green-400" />
        ) : (
          <Copy className="w-4 h-4 text-slate-300" />
        )}
      </button>
      <pre className="bg-slate-900 text-slate-100 p-4 rounded-xl overflow-x-auto text-sm">
        <code>{code}</code>
      </pre>
    </div>
  );

  const SpecRow = ({ label, value }: { label: string; value: string }) => (
    <div className="flex justify-between py-2 border-b border-slate-200 last:border-0">
      <span className="text-sm text-slate-600">{label}</span>
      <span className="text-sm font-mono text-slate-900">{value}</span>
    </div>
  );

  return (
    <div className="min-h-screen bg-slate-50">
      {/* Header */}
      <div className="bg-white border-b border-slate-200">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 py-8">
          <h1 className="text-3xl font-medium text-slate-900 mb-2 tracking-tight">
            Cookie Consent Component Library
          </h1>
          <p className="text-slate-600">
            Interactive showcase and documentation for NeoTechnology Solutions cookie consent system
          </p>
        </div>
      </div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 py-12 space-y-16">
        
        {/* 1. Cookie/Button */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              Cookie/Button
            </h2>
            <p className="text-slate-600">
              Reusable button component with three visual variants and states
            </p>
          </div>

          <div className="space-y-8">
            {/* Primary */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Type: Primary</h3>
              <div className="flex flex-wrap gap-4 mb-4">
                <div className="space-y-2">
                  <CookieButton type="primary">Default</CookieButton>
                  <p className="text-xs text-slate-500">Default</p>
                </div>
                <div className="space-y-2">
                  <CookieButton type="primary" disabled>Disabled</CookieButton>
                  <p className="text-xs text-slate-500">Disabled</p>
                </div>
              </div>
              <CodeBlock 
                id="button-primary"
                code={`<CookieButton type="primary" onClick={handleClick}>
  Accept all
</CookieButton>`}
              />
            </div>

            {/* Secondary */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Type: Secondary</h3>
              <div className="flex flex-wrap gap-4 mb-4">
                <div className="space-y-2">
                  <CookieButton type="secondary">Default</CookieButton>
                  <p className="text-xs text-slate-500">Default</p>
                </div>
                <div className="space-y-2">
                  <CookieButton type="secondary" disabled>Disabled</CookieButton>
                  <p className="text-xs text-slate-500">Disabled</p>
                </div>
              </div>
              <CodeBlock 
                id="button-secondary"
                code={`<CookieButton type="secondary" onClick={handleClick}>
  Reject all
</CookieButton>`}
              />
            </div>

            {/* Tertiary */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Type: Tertiary</h3>
              <div className="flex flex-wrap gap-4 mb-4">
                <div className="space-y-2">
                  <CookieButton type="tertiary">Default</CookieButton>
                  <p className="text-xs text-slate-500">Default</p>
                </div>
                <div className="space-y-2">
                  <CookieButton type="tertiary" disabled>Disabled</CookieButton>
                  <p className="text-xs text-slate-500">Disabled</p>
                </div>
              </div>
              <CodeBlock 
                id="button-tertiary"
                code={`<CookieButton type="tertiary" onClick={handleClick}>
  Customize
</CookieButton>`}
              />
            </div>

            {/* Specs */}
            <div className="bg-slate-50 rounded-xl p-6">
              <h3 className="text-sm font-medium text-slate-900 mb-4">Design Specifications</h3>
              <SpecRow label="Padding X" value="24px (1.5rem)" />
              <SpecRow label="Padding Y" value="12px (0.75rem)" />
              <SpecRow label="Border Radius" value="9999px (rounded-full)" />
              <SpecRow label="Font Size" value="14px (0.875rem)" />
              <SpecRow label="Font Weight" value="500 (medium)" />
              <SpecRow label="Transition" value="200ms all" />
              <SpecRow label="Primary Background" value="bg-slate-900" />
              <SpecRow label="Secondary Border" value="border-slate-300" />
              <SpecRow label="Tertiary Text" value="text-slate-700" />
            </div>
          </div>
        </section>

        {/* 2. Cookie/Toggle */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              Cookie/Toggle
            </h2>
            <p className="text-slate-600">
              Toggle switch for cookie category preferences
            </p>
          </div>

          <div className="space-y-8">
            <div className="flex flex-wrap gap-8">
              <div className="space-y-2">
                <CookieToggle checked={true} onChange={() => {}} />
                <p className="text-xs text-slate-500">State: On</p>
              </div>
              <div className="space-y-2">
                <CookieToggle checked={false} onChange={() => {}} />
                <p className="text-xs text-slate-500">State: Off</p>
              </div>
              <div className="space-y-2">
                <CookieToggle checked={true} disabled />
                <p className="text-xs text-slate-500">State: Disabled</p>
              </div>
            </div>

            <CodeBlock 
              id="toggle"
              code={`<CookieToggle
  checked={isEnabled}
  onChange={setIsEnabled}
  label="Toggle analytics cookies"
/>`}
            />

            <div className="bg-slate-50 rounded-xl p-6">
              <h3 className="text-sm font-medium text-slate-900 mb-4">Design Specifications</h3>
              <SpecRow label="Width" value="44px (2.75rem)" />
              <SpecRow label="Height" value="24px (1.5rem)" />
              <SpecRow label="Knob Size" value="16px (1rem)" />
              <SpecRow label="Border Radius" value="9999px (rounded-full)" />
              <SpecRow label="Transition" value="200ms transform, 200ms colors" />
              <SpecRow label="On Background" value="bg-slate-900" />
              <SpecRow label="Off Background" value="bg-slate-300" />
              <SpecRow label="Focus Ring" value="ring-slate-900" />
            </div>
          </div>
        </section>

        {/* 3. Cookie/CategoryRow */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              Cookie/CategoryRow
            </h2>
            <p className="text-slate-600">
              Row displaying cookie category with description and toggle
            </p>
          </div>

          <div className="space-y-8">
            <div className="border border-slate-200 rounded-xl p-4 space-y-0">
              <CookieCategoryRow
                title="Essential"
                description="Required for core website functionality and security."
                checked={true}
                disabled={true}
              />
              <CookieCategoryRow
                title="Analytics"
                description="Helps us understand how visitors use the site."
                checked={false}
                onChange={() => {}}
              />
              <CookieCategoryRow
                title="Functional"
                description="Remembers preferences such as language or region."
                checked={false}
                onChange={() => {}}
              />
              <CookieCategoryRow
                title="Marketing"
                description="Used for advertising and tracking across websites."
                checked={false}
                onChange={() => {}}
              />
            </div>

            <CodeBlock 
              id="category-row"
              code={`<CookieCategoryRow
  title="Analytics"
  description="Helps us understand how visitors use the site."
  checked={preferences.analytics}
  onChange={(value) => updatePreference('analytics', value)}
/>`}
            />

            <div className="bg-slate-50 rounded-xl p-6">
              <h3 className="text-sm font-medium text-slate-900 mb-4">Design Specifications</h3>
              <SpecRow label="Padding Y" value="16px (1rem)" />
              <SpecRow label="Gap" value="16px (1rem)" />
              <SpecRow label="Border Bottom" value="border-slate-200" />
              <SpecRow label="Title Size" value="16px (1rem)" />
              <SpecRow label="Title Weight" value="500 (medium)" />
              <SpecRow label="Description Size" value="14px (0.875rem)" />
              <SpecRow label="Description Color" value="text-slate-600" />
            </div>
          </div>
        </section>

        {/* 4. Cookie/Banner */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              Cookie/Banner
            </h2>
            <p className="text-slate-600">
              Bottom-positioned consent banner with responsive layouts
            </p>
          </div>

          <div className="space-y-8">
            <div className="flex gap-3">
              <button
                onClick={() => setShowBanner(!showBanner)}
                className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
              >
                {showBanner ? 'Hide' : 'Show'} English Banner
              </button>
              <button
                onClick={() => setShowBannerAr(!showBannerAr)}
                className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
              >
                {showBannerAr ? 'إخفاء' : 'عرض'} Arabic Banner
              </button>
              <button
                onClick={() => setShowDarkBanner(!showDarkBanner)}
                className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
              >
                {showDarkBanner ? 'Hide' : 'Show'} Dark Banner
              </button>
            </div>
            <p className="text-sm text-slate-600 mt-2">
              {showBanner ? 'Banner is visible at the bottom of the page' : 'Click to preview the banner'}
            </p>
          </div>

          <CodeBlock 
            id="banner"
            code={`<CookieBanner
  onAcceptAll={handleAcceptAll}
  onRejectAll={handleRejectAll}
  onCustomize={handleCustomize}
/>`}
          />

          <div className="bg-slate-50 rounded-xl p-6">
            <h3 className="text-sm font-medium text-slate-900 mb-4">Design Specifications</h3>
            <SpecRow label="Position" value="fixed bottom-0" />
            <SpecRow label="Border Top" value="border-slate-200" />
            <SpecRow label="Shadow" value="shadow-sm" />
            <SpecRow label="Max Width" value="1280px (7xl)" />
            <SpecRow label="Padding (Desktop)" value="24px vertical" />
            <SpecRow label="Padding (Mobile)" value="20px vertical" />
            <SpecRow label="Desktop Layout" value="Horizontal (flex-row)" />
            <SpecRow label="Mobile Layout" value="Vertical (flex-col)" />
            <SpecRow label="Button Gap" value="12px (0.75rem)" />
          </div>
        </section>

        {/* 5. Cookie/Modal */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              Cookie/Modal
            </h2>
            <p className="text-slate-600">
              Centered preferences modal for detailed cookie management
            </p>
          </div>

          <div className="space-y-8">
            <div className="flex gap-3">
              <button
                onClick={() => setShowModal(true)}
                className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
              >
                Show English Modal
              </button>
              <button
                onClick={() => setShowModalAr(true)}
                className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
              >
                عرض النافذة العربية
              </button>
              <button
                onClick={() => setShowDarkModal(true)}
                className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
              >
                Show Dark Modal
              </button>
            </div>
          </div>

          <CodeBlock 
            id="modal"
            code={`<CookieModal
  isOpen={showModal}
  onClose={handleClose}
  preferences={preferences}
  onPreferencesChange={setPreferences}
  onSavePreferences={handleSave}
  onAcceptAll={handleAcceptAll}
  onRejectAll={handleRejectAll}
/>`}
          />

          <div className="bg-slate-50 rounded-xl p-6">
            <h3 className="text-sm font-medium text-slate-900 mb-4">Design Specifications</h3>
            <SpecRow label="Max Width" value="672px (2xl)" />
            <SpecRow label="Max Height" value="90vh" />
            <SpecRow label="Border Radius" value="16px (rounded-2xl)" />
            <SpecRow label="Backdrop" value="bg-slate-900/50 + blur" />
            <SpecRow label="Shadow" value="shadow-lg" />
            <SpecRow label="Header Padding" value="20px vertical, 32px horizontal" />
            <SpecRow label="Content Padding" value="24px vertical, 32px horizontal" />
            <SpecRow label="Footer Background" value="bg-slate-50" />
            <SpecRow label="Border" value="border-slate-200" />
          </div>
        </section>

        {/* Dark Mode Theme */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              Dark Mode Theme
            </h2>
            <p className="text-slate-600">
              All components support dark mode with accessible contrast
            </p>
          </div>

          <div className="space-y-8">
            {/* Dark Mode Buttons */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Dark Mode Buttons</h3>
              <div className="bg-slate-900 rounded-xl p-6">
                <div className="flex flex-wrap gap-4">
                  <CookieButton type="primary" theme="dark">Primary</CookieButton>
                  <CookieButton type="secondary" theme="dark">Secondary</CookieButton>
                  <CookieButton type="tertiary" theme="dark">Tertiary</CookieButton>
                </div>
              </div>
            </div>

            {/* Dark Mode Toggle */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Dark Mode Toggle</h3>
              <div className="bg-slate-900 rounded-xl p-6">
                <div className="flex gap-6">
                  <CookieToggle checked={true} onChange={() => {}} theme="dark" />
                  <CookieToggle checked={false} onChange={() => {}} theme="dark" />
                  <CookieToggle checked={true} disabled theme="dark" />
                </div>
              </div>
            </div>

            {/* Dark Mode Banner Preview */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Dark Mode Banner & Modal</h3>
              <div className="flex gap-3">
                <button
                  onClick={() => setShowDarkBanner(!showDarkBanner)}
                  className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
                >
                  {showDarkBanner ? 'Hide' : 'Show'} Dark Banner
                </button>
                <button
                  onClick={() => setShowDarkModal(true)}
                  className="px-6 py-3 bg-slate-900 text-white rounded-full hover:bg-slate-800 transition-all text-sm font-medium"
                >
                  Show Dark Modal
                </button>
              </div>
            </div>

            {/* Dark Mode Color Tokens */}
            <div className="bg-slate-50 rounded-xl p-6">
              <h3 className="text-sm font-medium text-slate-900 mb-4">Dark Mode Colors</h3>
              <div className="grid grid-cols-2 gap-4">
                <div>
                  <div className="flex items-center gap-3 mb-2">
                    <div className="w-10 h-10 rounded-lg bg-slate-900 border border-slate-300" />
                    <div>
                      <p className="text-xs font-medium">Background</p>
                      <p className="text-xs text-slate-500 font-mono">bg-slate-900</p>
                    </div>
                  </div>
                  <div className="flex items-center gap-3 mb-2">
                    <div className="w-10 h-10 rounded-lg bg-slate-100 border border-slate-300" />
                    <div>
                      <p className="text-xs font-medium">Primary Button</p>
                      <p className="text-xs text-slate-500 font-mono">bg-slate-100</p>
                    </div>
                  </div>
                </div>
                <div>
                  <div className="flex items-center gap-3 mb-2">
                    <div className="w-10 h-10 rounded-lg bg-slate-800 border border-slate-300" />
                    <div>
                      <p className="text-xs font-medium">Border</p>
                      <p className="text-xs text-slate-500 font-mono">border-slate-800</p>
                    </div>
                  </div>
                  <div className="flex items-center gap-3 mb-2">
                    <div className="w-10 h-10 rounded-lg bg-slate-700 border border-slate-300" />
                    <div>
                      <p className="text-xs font-medium">Divider</p>
                      <p className="text-xs text-slate-500 font-mono">border-slate-700</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {/* RTL Support */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              RTL (Arabic) Support
            </h2>
            <p className="text-slate-600">
              All components support RTL layout with proper Arabic text
            </p>
          </div>

          <div className="space-y-6">
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-3">Arabic Category Rows</h3>
              <div className="border border-slate-200 rounded-xl p-4 space-y-0">
                <CookieCategoryRowAr
                  title="الضرورية"
                  description="مطلوبة لوظائف الموقع الأساسية والأمان."
                  checked={true}
                  disabled={true}
                />
                <CookieCategoryRowAr
                  title="التحليلية"
                  description="تساعدنا على فهم كيفية استخدام الزوار للموقع."
                  checked={false}
                  onChange={() => {}}
                />
                <CookieCategoryRowAr
                  title="الوظيفية"
                  description="تتذكر التفضيلات مثل اللغة أو المنطقة."
                  checked={false}
                  onChange={() => {}}
                />
                <CookieCategoryRowAr
                  title="التسويقية"
                  description="تُستخدم للإعلانات والتتبع عبر المواقع."
                  checked={false}
                  onChange={() => {}}
                />
              </div>
            </div>

            <div className="bg-slate-50 rounded-xl p-6">
              <h3 className="text-sm font-medium text-slate-900 mb-4">RTL Implementation</h3>
              <SpecRow label="Text Direction" value="RTL (dir='rtl')" />
              <SpecRow label="Button Order" value="Reversed for RTL reading" />
              <SpecRow label="Layout Mirror" value="Horizontally flipped" />
              <SpecRow label="Toggle Position" value="Right side in RTL" />
              <SpecRow label="Typography" value="font-semibold for titles" />
            </div>
          </div>
        </section>

        {/* Original Design Tokens Section */}
        <section className="bg-white rounded-2xl p-8 border border-slate-200">
          <div className="mb-8">
            <h2 className="text-2xl font-medium text-slate-900 mb-2 tracking-tight">
              Design Tokens
            </h2>
            <p className="text-slate-600">
              Color palette and typography system
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8">
            {/* Colors */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Colors</h3>
              <div className="space-y-3">
                <div className="flex items-center gap-3">
                  <div className="w-12 h-12 rounded-lg bg-slate-900 border border-slate-200" />
                  <div>
                    <p className="text-sm font-medium">Primary</p>
                    <p className="text-xs text-slate-500 font-mono">bg-slate-900</p>
                  </div>
                </div>
                <div className="flex items-center gap-3">
                  <div className="w-12 h-12 rounded-lg bg-slate-800 border border-slate-200" />
                  <div>
                    <p className="text-sm font-medium">Primary Hover</p>
                    <p className="text-xs text-slate-500 font-mono">bg-slate-800</p>
                  </div>
                </div>
                <div className="flex items-center gap-3">
                  <div className="w-12 h-12 rounded-lg bg-white border border-slate-300" />
                  <div>
                    <p className="text-sm font-medium">Secondary</p>
                    <p className="text-xs text-slate-500 font-mono">bg-white</p>
                  </div>
                </div>
                <div className="flex items-center gap-3">
                  <div className="w-12 h-12 rounded-lg bg-slate-50 border border-slate-200" />
                  <div>
                    <p className="text-sm font-medium">Background Light</p>
                    <p className="text-xs text-slate-500 font-mono">bg-slate-50</p>
                  </div>
                </div>
                <div className="flex items-center gap-3">
                  <div className="w-12 h-12 rounded-lg bg-slate-200 border border-slate-200" />
                  <div>
                    <p className="text-sm font-medium">Border</p>
                    <p className="text-xs text-slate-500 font-mono">border-slate-200</p>
                  </div>
                </div>
              </div>
            </div>

            {/* Typography */}
            <div>
              <h3 className="text-sm font-medium text-slate-900 mb-4">Typography</h3>
              <div className="space-y-3">
                <div>
                  <p className="text-xl font-medium text-slate-900 tracking-tight">Modal Title</p>
                  <p className="text-xs text-slate-500 font-mono">text-xl font-medium tracking-tight</p>
                </div>
                <div>
                  <p className="text-base font-medium text-slate-900 tracking-tight">Banner Title</p>
                  <p className="text-xs text-slate-500 font-mono">text-base font-medium tracking-tight</p>
                </div>
                <div>
                  <p className="text-sm text-slate-600">Body Text</p>
                  <p className="text-xs text-slate-500 font-mono">text-sm text-slate-600</p>
                </div>
                <div>
                  <p className="text-sm font-medium">Button Text</p>
                  <p className="text-xs text-slate-500 font-mono">text-sm font-medium</p>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>

      {/* Live Previews */}
      {showBanner && (
        <CookieBanner
          onAcceptAll={() => setShowBanner(false)}
          onRejectAll={() => setShowBanner(false)}
          onCustomize={() => {
            setShowBanner(false);
            setShowModal(true);
          }}
        />
      )}

      {showBannerAr && (
        <CookieBannerAr
          onAcceptAll={() => setShowBannerAr(false)}
          onRejectAll={() => setShowBannerAr(false)}
          onCustomize={() => {
            setShowBannerAr(false);
            setShowModalAr(true);
          }}
        />
      )}

      {showDarkBanner && (
        <CookieBanner
          onAcceptAll={() => setShowDarkBanner(false)}
          onRejectAll={() => setShowDarkBanner(false)}
          onCustomize={() => {
            setShowDarkBanner(false);
            setShowDarkModal(true);
          }}
          theme="dark"
        />
      )}

      <CookieModal
        isOpen={showModal}
        onClose={() => setShowModal(false)}
        preferences={preferences}
        onPreferencesChange={setPreferences}
        onSavePreferences={() => setShowModal(false)}
        onAcceptAll={() => setShowModal(false)}
        onRejectAll={() => setShowModal(false)}
      />

      <CookieModalAr
        isOpen={showModalAr}
        onClose={() => setShowModalAr(false)}
        preferences={preferences}
        onPreferencesChange={setPreferences}
        onSavePreferences={() => setShowModalAr(false)}
        onAcceptAll={() => setShowModalAr(false)}
        onRejectAll={() => setShowModalAr(false)}
      />

      <CookieModal
        isOpen={showDarkModal}
        onClose={() => setShowDarkModal(false)}
        preferences={preferences}
        onPreferencesChange={setPreferences}
        onSavePreferences={() => setShowDarkModal(false)}
        onAcceptAll={() => setShowDarkModal(false)}
        onRejectAll={() => setShowDarkModal(false)}
        theme="dark"
      />
    </div>
  );
}