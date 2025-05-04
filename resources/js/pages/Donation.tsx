// resources/js/pages/Donation.tsx

import React from 'react';
import Layout from '../layouts/Layout';
import { Head } from '@inertiajs/react';
import LazyAdSlot from '../components/LazyAdSlot';

const Donation: React.FC = () => {
  return (
    <Layout>
      <Head title="Support PRC Board Reviewers PH">
        <meta
          name="description"
          content="PRC Board Reviewers PH is free for everyone. Your donation helps cover hosting, domain, and content creation costs."
        />
      </Head>

      <div className="bg-gray-50 py-8">
        <div className="max-w-2xl mx-auto bg-white shadow-xl rounded-2xl p-6 md:p-8">
          <h1 className="text-3xl md:text-4xl font-bold text-center text-green-700 mb-4">
            🙏 Support Our Free Platform
          </h1>

          <p className="text-lg text-gray-700 leading-relaxed">
            Every day, countless aspiring professionals turn to PRC Board Reviewers PH for guidance—and we’re proud to be part of their journey. Our site is crafted with passion by volunteers dedicated to making education accessible to all, regardless of budget.
          </p>

          <p className="text-lg text-gray-700 leading-relaxed">
            But passion isn’t free: hosting costs, domain renewals, security certificates, and content creation require real funding. Your heartfelt support helps us keep this service alive, safe, and filled with fresh, reliable review materials.
          </p>

          <div className="bg-gray-100 rounded-lg p-6 text-center">
            <h2 className="text-2xl font-semibold text-gray-800 mb-4">Donate via GCash</h2>
            <img
              src="/images/gcash-qr.webp"
              alt="GCash QR Code"
              className="mx-auto w-48 h-48 mb-4"
            />
            <p className="text-gray-600">
              Open your GCash app, scan the QR code above, and enter any amount you can spare. Every peso makes a difference!
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div className="text-center">
              <div className="text-2xl md:text-3xl font-bold text-green-600">
                Free Access
              </div>
              <div className="text-gray-600 mt-1">Always no paywalls</div>
            </div>
            <div className="text-center">
              <div className="text-2xl md:text-3xl font-bold text-green-600">
                24/7 Availability
              </div>
              <div className="text-gray-600 mt-1">Never down</div>
            </div>
            <div className="text-center">
              <div className="text-2xl md:text-3xl font-bold text-green-600">
                Updated Content
              </div>
              <div className="text-gray-600 mt-1">Fresh every month</div>
            </div>
          </div>

        </div>

        {/* Optional bottom banner ad - remove or adjust height to reduce whitespace */}
        <div className="max-w-2xl mx-auto mt-6">
          <LazyAdSlot slotId="donation-bottom-banner" className="w-full h-20 md:h-24" />
        </div>
      </div>
    </Layout>
  );
};

export default Donation;
