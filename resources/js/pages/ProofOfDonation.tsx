// resources/js/pages/ProofOfDonation.tsx
import React from 'react';
import { Head } from '@inertiajs/react';
import Layout from '../layouts/Layout';
import Breadcrumbs from '../components/breadcrumbs';

type Props = {
  images: string[];
  seo: {
    title: string;
    description: string;
    canonical: string;
    heading: string;
  };
};

export default function ProofOfDonation({ images, seo }: Props) {
  const breadcrumbs = [
    { label: 'Home', href: '/' },
    { label: seo.heading }
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
        <meta property="og:image" content="/images/og-donation.jpg" />
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      <div className="max-w-4xl mx-auto p-6">
        <Breadcrumbs items={breadcrumbs} />
      </div>

      <div className="bg-green-50 py-12">
        <div className="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8">
          <h1 className="text-4xl font-extrabold text-center text-green-700 mb-6">
            {seo.heading}
          </h1>
          <p className="text-lg text-gray-800 mb-8 text-center">
            Thank you to everyone who has donated via GCash. Below are the proofs of donations that keep our platform free and up-to-date.
          </p>

          <div className="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            {images.length > 0 ? (
              images.map((url, idx) => (
                <div key={idx} className="border rounded-lg overflow-hidden">
                  <img src={url} alt={`Donation proof ${idx + 1}`} className="w-full h-auto" />
                </div>
              ))
            ) : (
              <p className="text-center text-gray-600 col-span-full">
                No donation proofs available at the moment.
              </p>
            )}
          </div>
        </div>
      </div>
    </Layout>
  );
}
