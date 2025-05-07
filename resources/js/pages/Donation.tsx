// resources/js/pages/Donation.tsx
import React from 'react';
import Layout from '../layouts/Layout';
import { Head } from '@inertiajs/react';

type SeoProps = {
  title: string;
  description: string;
  canonical: string;
  heading: string;
};

type DonationProps = {
  seo: SeoProps;
};

const Donation: React.FC<DonationProps> = ({ seo }) => {
  return (
    <Layout>
      {/* SEO tags */}
      <Head>
        <title>{seo.title}</title>
        <meta name="description" content={seo.description} />
        <link rel="canonical" href={seo.canonical} />

        {/* Open Graph */}
        <meta property="og:title" content={seo.title} />
        <meta property="og:description" content={seo.description} />
        <meta property="og:url" content={seo.canonical} />
        <meta property="og:image" content="https://prcboardreviewersph.com/images/og-donation.jpg" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content={seo.title} />
        <meta name="twitter:description" content={seo.description} />
        <meta name="twitter:image" content="https://prcboardreviewersph.com/images/og-donation.jpg" />
      </Head>

      <div className="bg-gray-50 py-8">
        <div className="max-w-2xl mx-auto bg-white shadow-xl rounded-2xl p-8 space-y-6">
          <h1 className="text-3xl md:text-4xl font-bold text-center text-green-700">
            {seo.heading}
          </h1>

          <p className="text-lg text-gray-700 leading-relaxed">
            Imagine a fresh graduate in a small province, burning the midnight oil on our free quizzes so they can finally pass their licensure exam. Every question they practice, every explanation they read, brings them one step closer to their dream job. Your donation is more than support—it’s hope, opportunity, and a lifeline for hardworking individuals striving for a better future.
          </p>

          <p className="text-lg text-gray-700 leading-relaxed">
            We’re a volunteer-driven community pouring our hearts into creating accurate practice tests, detailed explanations, and new features that empower thousands of learners daily. But keeping our servers online, securing our site, and dedicating time to build new reviewers costs money—and your generosity makes it possible.
          </p>

          {/* Donation instructions */}
          <div className="text-center space-y-4">
            <img
              src="/images/gcash-qr.webp"
              alt="GCash QR Code"
              className="mx-auto w-40 h-auto"
            />
            <p className="text-gray-500">Scan the QR code to donate via GCash and change a life today.</p>
          </div>
        </div>
      </div>
    </Layout>
  );
};

export default Donation;
