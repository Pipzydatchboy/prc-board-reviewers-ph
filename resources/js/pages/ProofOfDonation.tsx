// resources/js/pages/ProofOfDonation.tsx

import React from 'react';
import { Head } from '@inertiajs/react';
import Layout from '../layouts/Layout';
import Breadcrumbs from '../components/breadcrumbs';

type Props = {
  seo: {
    title: string;
    description: string;
    canonical: string;
    heading: string;
  };
};

export default function ProofOfDonation({ seo }: Props) {
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
        <div className="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-6 md:p-8">
          <h1 className="text-3xl sm:text-4xl font-extrabold text-center text-green-700 mb-6">
            {seo.heading}
          </h1>
          <p className="text-base sm:text-lg text-gray-800 mb-8 text-center">
            Thank you to everyone who has donated via GCash. Below is our official record of donations that help keep this platform free and updated.
          </p>

          {/* Donation Records Table */}
          <div className="overflow-x-auto mb-8">
            <table className="min-w-full bg-white shadow rounded-lg text-xs sm:text-sm">
              <thead className="bg-gray-100">
                <tr>
                  <th className="px-4 sm:px-6 py-2 text-left font-medium uppercase tracking-wider text-gray-900">
                    Date
                  </th>
                  <th className="px-4 sm:px-6 py-2 text-left font-medium uppercase tracking-wider text-gray-900">
                    Reference No.
                  </th>
                  <th className="px-4 sm:px-6 py-2 text-right font-medium uppercase tracking-wider text-gray-900">
                    Amount
                  </th>
                </tr>
              </thead>
              <tbody className="divide-y divide-gray-200">
                <tr>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    May 23, 2025
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    5028957700445
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-right text-gray-900">
                    ₱ 100.00
                  </td>
                </tr>
                <tr>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    May 21, 2025
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    7028909157196
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-right text-gray-900">
                    ₱ 5.00
                  </td>
                </tr>
                <tr>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    May 20, 2025
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    1028882862690
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-right text-gray-900">
                    ₱ 40.00
                  </td>
                </tr>
                <tr>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    May 11, 2025
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">
                    9028575847182
                  </td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-right text-gray-900">
                    ₱ 1.00
                  </td>
                </tr>
                <tr>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">&nbsp;</td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-gray-900">&nbsp;</td>
                  <td className="px-4 sm:px-6 py-3 whitespace-nowrap text-right text-gray-900">&nbsp;</td>
                </tr>
              </tbody>
            </table>
          </div>

          {/* Share Message */}
          <div className="mt-6 text-center">
            <p className="text-base sm:text-lg text-gray-700">
              We will include you in our prayers. Love our free board exam reviewers? 🎉 Spread the word! Share this site with your friends and help us keep everything free and up-to-date for everyone. Thank you for your support!
            </p>
          </div>
        </div>
      </div>
    </Layout>
  );
}
