import React, { useState } from 'react';
import { Head, router } from '@inertiajs/react';
import Layout from '../layouts/Layout';
import Breadcrumbs from '../components/breadcrumbs';

type SeoProps = {
  title: string;
  description: string;
  canonical: string;
  heading: string;
};

type DonationProps = {
  seo: SeoProps;
};

export default function Donation({ seo }: DonationProps) {
  const [showThanks, setShowThanks] = useState(false);

  const handlePrint = () => {
    setShowThanks(false);
    setTimeout(() => window.print(), 100);
  };

  const breadcrumbs = [
    { label: 'Home', href: '/' },
    { label: 'Donation' }
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
        <meta property="og:image" content="https://prcboardreviewersph.com/images/og-donation.jpg" />
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      <div className="max-w-4xl mx-auto p-6">
        <Breadcrumbs items={breadcrumbs} />
      </div>

      <div className="bg-green-50 py-12">
        <div className="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8">
          <h1 className="text-4xl font-extrabold text-center text-green-700 mb-4">
            {seo.heading}
          </h1>
          <p className="text-lg text-gray-800 mb-6">
            Your donation supports future professionals as they prepare for their licensure exams. It ensures our platform remains free, fresh, and full of up-to-date practice questions and detailed explanations.
          </p>
          <p className="text-lg text-gray-800 mb-6">
            We are a small team of dedicated volunteers pouring our time and passion into building this resource. Your gift is more than financial support—it’s a message of belief in their dreams, helping shape the next generation of professionals.
          </p>

          <div className="text-center mb-6">
            <img
              src="/images/gcash-qr.webp"
              alt="GCash QR Code"
              className="mx-auto w-48 h-auto mb-4"
            />
            <p className="text-gray-600">Scan with GCash to make a real impact today.</p>
          </div>

          <div className="flex justify-center gap-4">
            <button
              onClick={() => setShowThanks(true)}
              className="px-6 py-3 bg-yellow-500 text-white rounded-lg font-semibold hover:bg-yellow-600 transition"
            >
              I’ve Donated!
            </button>
            <button
              onClick={() => router.visit(route('donations.proof'))}
              className="px-6 py-3 bg-purple-600 text-white rounded-lg font-semibold hover:bg-purple-700 transition"
            >
              View Proof of Donation
            </button>
          </div>

          {showThanks && (
            <div className="mt-6 p-4 bg-green-100 rounded-lg text-green-800 text-center">
              Thank you! Your generosity fuels futures and makes this journey possible. 🙏
            </div>
          )}
        </div>
      </div>
    </Layout>
  );
}
