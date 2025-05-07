// resources/js/pages/About.tsx
import React, { lazy, Suspense } from 'react';
import Layout from '../layouts/Layout';
import { Head } from '@inertiajs/react';

// Lazy‑loaded components
const Breadcrumbs = lazy(() => import('../components/breadcrumbs'));
const MissionSection = lazy(() => import('../components/MissionSection'));
const VisionSection = lazy(() => import('../components/VisionSection'));
const CoreValuesSection = lazy(() => import('../components/CoreValuesSection'));

type SeoProps = {
  title: string;
  description: string;
  canonical: string;
  heading: string;
};

type AboutProps = {
  seo: SeoProps;
};

const About: React.FC<AboutProps> = ({ seo }) => {
  const breadcrumbItems = [
    { label: 'Home', href: '/' },
    { label: seo.heading },
  ];

  return (
    <>
      {/* SEO tags */}
      <Head>
        <title>{seo.title}</title>
        <meta name="description" content={seo.description} />
        <link rel="canonical" href={seo.canonical} />

        {/* Open Graph */}
        <meta property="og:title" content={seo.title} />
        <meta property="og:description" content={seo.description} />
        <meta property="og:type" content="website" />
        <meta property="og:url" content={seo.canonical} />
        <meta property="og:image" content="https://prcboardreviewersph.com/images/og-image.jpg" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content={seo.title} />
        <meta name="twitter:description" content={seo.description} />
        <meta name="twitter:image" content="https://prcboardreviewersph.com/images/og-image.jpg" />
      </Head>

      <Layout>
        {/* Breadcrumbs */}
        <Suspense fallback={<div className="mb-4 text-gray-500 text-center">Loading breadcrumbs...</div>}>
          <Breadcrumbs items={breadcrumbItems} />
        </Suspense>

        {/* Page Header */}
        <div className="max-w-4xl mx-auto p-6 text-center">
          <h1 className="text-4xl font-bold text-green-700 mb-4">{seo.heading}</h1>
          <p className="text-gray-700 text-lg">
            PRC Board Reviewers PH is dedicated to helping aspiring professionals pass their board exams
            with confidence. We provide free, quality reviewers for Civil Service, LET, Criminology, and more.
          </p>
        </div>

        {/* Mission Section */}
        <Suspense fallback={<div className="text-center py-12">Loading Mission...</div>}>
          <MissionSection />
        </Suspense>

        {/* Vision Section */}
        <Suspense fallback={<div className="text-center py-12">Loading Vision...</div>}>
          <VisionSection />
        </Suspense>

        {/* Core Values Section */}
        <Suspense fallback={<div className="text-center py-12">Loading Core Values...</div>}>
          <CoreValuesSection />
        </Suspense>
      </Layout>
    </>
  );
};

export default About;
