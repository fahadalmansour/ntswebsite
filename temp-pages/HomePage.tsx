import { useState, useEffect } from 'react';
import { Hero } from '../components/Hero';
import { HowWeWork } from '../components/HowWeWork';
import { DecisionAreas } from '../components/DecisionAreas';
import { ReferenceArchitecture } from '../components/ReferenceArchitecture';
import { ToolsStandards } from '../components/ToolsStandards';
import { WhatYouReceive } from '../components/WhatYouReceive';
import { AdvisoryServices } from '../components/AdvisoryServices';
import { Boundaries } from '../components/Boundaries';
import { Engagement } from '../components/Engagement';

export function HomePage() {
  const [activeSection, setActiveSection] = useState('');

  useEffect(() => {
    const handleScroll = () => {
      const sections = [
        'how-we-work',
        'decision-areas',
        'reference-architecture',
        'tools-standards',
        'what-you-receive',
        'advisory-services',
        'boundaries',
        'engagement'
      ];
      const scrollPosition = window.scrollY + 100;

      for (const section of sections) {
        const element = document.getElementById(section);
        if (element) {
          const { offsetTop, offsetHeight } = element;
          if (scrollPosition >= offsetTop && scrollPosition < offsetTop + offsetHeight) {
            setActiveSection(section);
            break;
          }
        }
      }
    };

    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <div>
      <Hero />
      <HowWeWork />
      <DecisionAreas />
      <ReferenceArchitecture />
      <ToolsStandards />
      <WhatYouReceive />
      <AdvisoryServices />
      <Boundaries />
      <Engagement />
    </div>
  );
}
