// resources/js/pages/PrivacyPolicy.tsx
import React from 'react';
import { Head } from '@inertiajs/react';
import Layout from '../layouts/Layout';
import Breadcrumbs from '../components/breadcrumbs';

type Seo = {
  title: string;
  description: string;
  canonical: string;
  heading: string;
};

type Props = {
  seo: Seo;
};

export default function PrivacyPolicy({ seo }: Props) {
  const crumbs = [
    { label: 'Home', href: '/' },
    { label: seo.heading },
  ];

  return (
    <Layout>
      <Head>
        <title>{seo.title}</title>
        <meta name="description" content={seo.description} />
        <link rel="canonical" href={seo.canonical} />
        <meta property="og:title" content={seo.title} />
        <meta property="og:description" content={seo.description} />
        <meta property="og:url" content={seo.canonical} />
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      <div className="max-w-4xl mx-auto px-4 py-12">
        {/* Breadcrumbs */}
        <Breadcrumbs items={crumbs} />

        {/* Page Heading */}
        <h1 className="text-4xl font-bold mb-6 text-green-700">
          {seo.heading}
        </h1>

        {/* Privacy Policy Content */}
        <section className="space-y-6 text-gray-800 antialiased">
          <p>
            <strong>Effective Date:</strong> May 8, 2025
          </p>

          <h2 className="text-2xl font-semibold">1. Information We Collect</h2>
          <p>
            We use HTML5 local storage to save your quiz progress, scores, and any preferences—right in your browser. No sign-ups or personal data required.
          </p>

          <h2 className="text-2xl font-semibold">2. How We Use Your Information</h2>
          <ul className="list-disc list-inside">
            <li>
              <strong>Quiz Progress:</strong> To restore where you left off and show your scores.
            </li>
            <li>
              <strong>Service Improvement:</strong> To see which features work best, so we can keep making the site better.
            </li>
          </ul>

          <h2 className="text-2xl font-semibold">3. Data Security</h2>
          <p>
            We do our best to protect your local storage data, but please keep your device secure—no client-side storage method is 100% foolproof.
          </p>

          <h2 className="text-2xl font-semibold">4. Third-Party Services</h2>
          <p>
            We don’t share any of your quiz data with outside services. Your progress stays private on your device.
          </p>

          <h2 className="text-2xl font-semibold">5. Cookies & Tracking</h2>
          <p>
            We don’t use cookies or external trackers—everything lives in your browser’s local storage.
          </p>

          <h2 className="text-2xl font-semibold">6. Children’s Privacy</h2>
          <p>
            Our quizzes aren’t aimed at kids under 13, and we don’t knowingly collect data from them. If we find such data, we’ll delete it right away.
          </p>

          <h2 className="text-2xl font-semibold">7. Changes to This Policy</h2>
          <p>
            We may update this page now and then. Any changes will show a new “Effective Date” at the top.
          </p>

          <h2 className="text-2xl font-semibold">8. Contact Us</h2>
          <p>
            Questions? Email us at{' '}
            <a
              href="prcboardreviewersph@gmail.com"
              className="text-green-700 hover:underline"
            >
              privacy@prcboardreviewersph.com
            </a>
            .
          </p>
        </section>
      </div>
    </Layout>
  );
}
