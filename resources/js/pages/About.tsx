import React, { lazy, Suspense } from 'react';
import { Head } from '@inertiajs/react';
import Layout from '../layouts/Layout';

const Breadcrumbs = lazy(() => import('../components/breadcrumbs'));
const MissionSection = lazy(() => import('../components/MissionSection'));
const VisionSection = lazy(() => import('../components/VisionSection'));
const CoreValuesSection = lazy(() => import('../components/CoreValuesSection'));

const About: React.FC = () => {
  return (
    <>
      <Head>
        <title>About Us | PRC Board Reviewers PH</title>
        <meta name="description" content="Learn about PRC Board Reviewers PH, your trusted source for free online reviewers for Civil Service Exam, LET, and more." />
        <meta property="og:title" content="About Us | PRC Board Reviewers PH" />
        <meta property="og:description" content="Learn about PRC Board Reviewers PH, your trusted source for free online reviewers for Civil Service Exam, LET, and more." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://prcboardreviewersph.com/about" />
        <meta property="og:image" content="https://prcboardreviewersph.com/images/og-image.jpg" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="About Us | PRC Board Reviewers PH" />
        <meta name="twitter:description" content="Learn about PRC Board Reviewers PH, your trusted source for free online reviewers for Civil Service Exam, LET, and more." />
        <meta name="twitter:image" content="https://prcboardreviewersph.com/images/og-image.jpg" />
      </Head>

      <Layout>
        {/* Breadcrumbs */}
        <Suspense fallback={<div className="mb-4 text-gray-500 text-center">Loading breadcrumbs...</div>}>
          <Breadcrumbs items={[
            { label: 'Home', href: '/' },
            { label: 'About' }
          ]} />
        </Suspense>

        {/* Page Header */}
        <div className="max-w-4xl mx-auto p-6 text-center">
          <h1 className="text-4xl font-bold text-green-700 mb-4">About PRC Board Reviewers PH</h1>
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
