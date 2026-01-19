import { useEffect, useState } from 'react';
import { LanguageProvider } from './contexts/LanguageContext';
import { HeaderMultiPage } from './components/HeaderMultiPage';
import { FooterMultiPage } from './components/FooterMultiPage';
import { CookieConsent } from './components/cookie-consent/CookieConsent';
import { HomePage } from './pages/HomePage';
import { PrivacyPage } from './pages/PrivacyPage';
import { PrivacyPageAr } from './pages/PrivacyPageAr';
import { CookiesPage } from './pages/CookiesPage';
import { CookiesPageAr } from './pages/CookiesPageAr';
import { TermsPage } from './pages/TermsPage';
import { TermsPageAr } from './pages/TermsPageAr';
import { DisclaimerPage } from './pages/DisclaimerPage';
import { DisclaimerPageAr } from './pages/DisclaimerPageAr';
import { DisclosurePage } from './pages/DisclosurePage';
import { DisclosurePageAr } from './pages/DisclosurePageAr';
import { ContactPage } from './pages/ContactPage';
import { ContactPageAr } from './pages/ContactPageAr';
import { ComponentShowcase } from './pages/ComponentShowcase';

export default function AppRouter() {
  const [currentPage, setCurrentPage] = useState('home');
  const [language, setLanguage] = useState<'en' | 'ar'>('en');

  useEffect(() => {
    const path = window.location.pathname;
    
    // Determine language from path
    if (path.startsWith('/ar')) {
      setLanguage('ar');
      document.documentElement.dir = 'rtl';
      document.documentElement.lang = 'ar';
    } else {
      setLanguage('en');
      document.documentElement.dir = 'ltr';
      document.documentElement.lang = 'en';
    }

    // Determine current page
    if (path.includes('/components')) {
      setCurrentPage('components');
    } else if (path.includes('/privacy')) {
      setCurrentPage('privacy');
    } else if (path.includes('/cookies')) {
      setCurrentPage('cookies');
    } else if (path.includes('/terms')) {
      setCurrentPage('terms');
    } else if (path.includes('/disclaimer')) {
      setCurrentPage('disclaimer');
    } else if (path.includes('/disclosure')) {
      setCurrentPage('disclosure');
    } else if (path.includes('/contact')) {
      setCurrentPage('contact');
    } else {
      setCurrentPage('home');
    }
  }, []);

  const renderPage = () => {
    const isArabic = language === 'ar';

    switch (currentPage) {
      case 'components':
        return <ComponentShowcase />;
      case 'privacy':
        return isArabic ? <PrivacyPageAr /> : <PrivacyPage />;
      case 'cookies':
        return isArabic ? <CookiesPageAr /> : <CookiesPage />;
      case 'terms':
        return isArabic ? <TermsPageAr /> : <TermsPage />;
      case 'disclaimer':
        return isArabic ? <DisclaimerPageAr /> : <DisclaimerPage />;
      case 'disclosure':
        return isArabic ? <DisclosurePageAr /> : <DisclosurePage />;
      case 'contact':
        return isArabic ? <ContactPageAr /> : <ContactPage />;
      default:
        return <HomePage />;
    }
  };

  return (
    <LanguageProvider>
      <div className="min-h-screen bg-white">
        {currentPage !== 'components' && <HeaderMultiPage currentPage={currentPage} />}
        {renderPage()}
        {currentPage !== 'components' && <FooterMultiPage />}
        {currentPage !== 'components' && <CookieConsent language={language} />}
      </div>
    </LanguageProvider>
  );
}