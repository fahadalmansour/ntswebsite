import { useState } from 'react';
import { Mail, Check } from 'lucide-react';

export function ContactPageAr() {
  const [formData, setFormData] = useState({
    companyName: '',
    yourName: '',
    email: '',
    phone: '',
    decisionType: '',
    description: '',
    consent: false
  });

  const [errors, setErrors] = useState<Record<string, string>>({});
  const [isSubmitted, setIsSubmitted] = useState(false);

  const decisionTypes = [
    'السحابة مقابل محلي/هجين',
    'اختيار المورد/النطاق',
    'التوسع مقابل الاستقرار',
    'أخرى'
  ];

  const validateForm = () => {
    const newErrors: Record<string, string> = {};

    if (!formData.companyName.trim()) {
      newErrors.companyName = 'اسم الشركة مطلوب';
    }

    if (!formData.yourName.trim()) {
      newErrors.yourName = 'اسمك مطلوب';
    }

    if (!formData.email.trim()) {
      newErrors.email = 'البريد الإلكتروني مطلوب';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.email)) {
      newErrors.email = 'يرجى إدخال بريد إلكتروني صحيح';
    }

    if (!formData.decisionType) {
      newErrors.decisionType = 'يرجى اختيار نوع القرار';
    }

    if (!formData.description.trim()) {
      newErrors.description = 'يرجى وصف استفسارك';
    }

    if (!formData.consent) {
      newErrors.consent = 'يجب الموافقة على أن هذه خدمة استشارية فقط';
    }

    setErrors(newErrors);
    return Object.keys(newErrors).length === 0;
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    if (!validateForm()) {
      return;
    }

    const subject = encodeURIComponent(`استفسار استشاري: ${formData.decisionType}`);
    const body = encodeURIComponent(
      `الشركة: ${formData.companyName}\n` +
      `الاسم: ${formData.yourName}\n` +
      `البريد الإلكتروني: ${formData.email}\n` +
      `الهاتف: ${formData.phone || 'غير مقدم'}\n` +
      `نوع القرار: ${formData.decisionType}\n\n` +
      `الرسالة:\n${formData.description}\n\n` +
      `---\n` +
      `أفهم أن هذه خدمة استشارية فقط (وليس تنفيذ).`
    );

    window.location.href = `mailto:contact@neotechnology.solutions?subject=${subject}&body=${body}`;
    setIsSubmitted(true);
  };

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLSelectElement | HTMLTextAreaElement>) => {
    const { name, value, type } = e.target;
    const checked = (e.target as HTMLInputElement).checked;

    setFormData({
      ...formData,
      [name]: type === 'checkbox' ? checked : value
    });

    if (errors[name]) {
      setErrors({
        ...errors,
        [name]: ''
      });
    }
  };

  if (isSubmitted) {
    return (
      <div className="min-h-screen bg-white pt-32 pb-20 px-6" dir="rtl">
        <div className="max-w-2xl mx-auto">
          <div className="bg-slate-50 rounded-3xl p-10 text-center border border-slate-200">
            <div className="w-16 h-16 bg-slate-900 rounded-full flex items-center justify-center mx-auto mb-6">
              <Check className="w-8 h-8 text-white" />
            </div>
            <h3 className="text-2xl text-slate-900 mb-4 font-medium">
              تم إرسال الطلب
            </h3>
            <p className="text-slate-700 mb-4 leading-relaxed">
              يجب أن يفتح برنامج البريد الإلكتروني الخاص بك برسالة معبأة مسبقًا. يرجى مراجعتها وإرسالها لإكمال طلبك.
            </p>
            <p className="text-sm text-slate-600">
              إذا لم يفتح برنامج البريد الإلكتروني، يرجى التواصل معنا مباشرة على{' '}
              <a href="mailto:contact@neotechnology.solutions" className="text-slate-900 underline font-medium">
                contact@neotechnology.solutions
              </a>
            </p>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-white pt-32 pb-20 px-6" dir="rtl">
      <div className="max-w-3xl mx-auto">
        <div className="text-center mb-12">
          <h1 className="text-4xl sm:text-5xl text-slate-900 mb-4 tracking-tight font-light">
            طلب جلسة استشارية
          </h1>
          <p className="text-xl text-slate-700 mb-4 leading-relaxed">
            إذا كانت شركتك بحاجة إلى اتخاذ قرار تقني وتريد توجيهًا منظمًا وصادقًا، اطلب جلسة استشارية أولية.
          </p>
          <p className="text-sm text-slate-600">
            نرد خلال يوم عمل واحد.
          </p>
        </div>

        <form onSubmit={handleSubmit} className="bg-slate-50 rounded-3xl p-8 border border-slate-200">
          <div className="space-y-6">
            {/* Company Name */}
            <div>
              <label htmlFor="companyName" className="block text-sm font-medium text-slate-900 mb-2">
                اسم الشركة *
              </label>
              <input
                type="text"
                id="companyName"
                name="companyName"
                value={formData.companyName}
                onChange={handleChange}
                className={`w-full px-4 py-3 rounded-xl border ${
                  errors.companyName ? 'border-red-500' : 'border-slate-300'
                } focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent bg-white`}
                placeholder="مؤسستك"
              />
              {errors.companyName && (
                <p className="mt-2 text-sm text-red-600">{errors.companyName}</p>
              )}
            </div>

            {/* Your Name */}
            <div>
              <label htmlFor="yourName" className="block text-sm font-medium text-slate-900 mb-2">
                اسمك *
              </label>
              <input
                type="text"
                id="yourName"
                name="yourName"
                value={formData.yourName}
                onChange={handleChange}
                className={`w-full px-4 py-3 rounded-xl border ${
                  errors.yourName ? 'border-red-500' : 'border-slate-300'
                } focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent bg-white`}
                placeholder="الاسم الكامل"
              />
              {errors.yourName && (
                <p className="mt-2 text-sm text-red-600">{errors.yourName}</p>
              )}
            </div>

            {/* Business Email */}
            <div>
              <label htmlFor="email" className="block text-sm font-medium text-slate-900 mb-2">
                البريد الإلكتروني الخاص بالعمل *
              </label>
              <input
                type="email"
                id="email"
                name="email"
                value={formData.email}
                onChange={handleChange}
                className={`w-full px-4 py-3 rounded-xl border ${
                  errors.email ? 'border-red-500' : 'border-slate-300'
                } focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent bg-white`}
                placeholder="your.name@company.com"
                dir="ltr"
              />
              {errors.email && (
                <p className="mt-2 text-sm text-red-600">{errors.email}</p>
              )}
            </div>

            {/* Phone (optional) */}
            <div>
              <label htmlFor="phone" className="block text-sm font-medium text-slate-900 mb-2">
                الهاتف (اختياري)
              </label>
              <input
                type="tel"
                id="phone"
                name="phone"
                value={formData.phone}
                onChange={handleChange}
                className="w-full px-4 py-3 rounded-xl border border-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent bg-white"
                placeholder="٩٦٦+ XX XXX XXXX"
              />
            </div>

            {/* Decision Type */}
            <div>
              <label htmlFor="decisionType" className="block text-sm font-medium text-slate-900 mb-2">
                نوع القرار *
              </label>
              <select
                id="decisionType"
                name="decisionType"
                value={formData.decisionType}
                onChange={handleChange}
                className={`w-full px-4 py-3 rounded-xl border ${
                  errors.decisionType ? 'border-red-500' : 'border-slate-300'
                } focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent bg-white`}
              >
                <option value="">اختر نوع</option>
                {decisionTypes.map((type) => (
                  <option key={type} value={type}>
                    {type}
                  </option>
                ))}
              </select>
              {errors.decisionType && (
                <p className="mt-2 text-sm text-red-600">{errors.decisionType}</p>
              )}
            </div>

            {/* Message */}
            <div>
              <label htmlFor="description" className="block text-sm font-medium text-slate-900 mb-2">
                ما الذي تحتاج المساعدة فيه؟ *
              </label>
              <textarea
                id="description"
                name="description"
                value={formData.description}
                onChange={handleChange}
                rows={5}
                className={`w-full px-4 py-3 rounded-xl border ${
                  errors.description ? 'border-red-500' : 'border-slate-300'
                } focus:outline-none focus:ring-2 focus:ring-slate-900 focus:border-transparent bg-white resize-none`}
                placeholder="وصف موجز لوضعك والقرار الذي تواجهه..."
              />
              {errors.description && (
                <p className="mt-2 text-sm text-red-600">{errors.description}</p>
              )}
            </div>

            {/* Consent Checkbox */}
            <div className="bg-white rounded-xl p-4 border border-slate-300">
              <label className="flex items-start gap-3 cursor-pointer">
                <input
                  type="checkbox"
                  name="consent"
                  checked={formData.consent}
                  onChange={handleChange}
                  className="mt-1 w-4 h-4 text-slate-900 border-slate-300 rounded focus:ring-slate-900"
                />
                <span className="text-sm text-slate-700 leading-relaxed">
                  أفهم أن هذه خدمة استشارية فقط (وليس تنفيذ). شركة نيوتكنولوجي سوليوشنز ذ.م.م لا تنفذ الأنظمة ولا تقدم خدمات مُدارة.
                </span>
              </label>
              {errors.consent && (
                <p className="mt-2 text-sm text-red-600 mr-7">{errors.consent}</p>
              )}
            </div>

            {/* Submit Button */}
            <button
              type="submit"
              className="w-full bg-slate-900 text-white py-4 px-6 rounded-full hover:bg-slate-800 transition-all font-medium text-base"
            >
              إرسال الطلب
            </button>

            <p className="text-center text-sm text-slate-600">
              نرد خلال يوم عمل واحد
            </p>
          </div>
        </form>

        {/* Mailto Fallback */}
        <div className="mt-8 text-center">
          <p className="text-sm text-slate-600 mb-3">
            تفضل المراسلة مباشرة عبر البريد الإلكتروني؟
          </p>
          <a
            href="mailto:contact@neotechnology.solutions"
            className="inline-flex items-center gap-2 text-slate-900 hover:text-slate-700 transition-colors"
          >
            <Mail className="w-4 h-4" />
            <span className="font-medium">contact@neotechnology.solutions</span>
          </a>
        </div>
      </div>
    </div>
  );
}
