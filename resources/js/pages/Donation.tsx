// resources/js/pages/Donation.tsx
import React from 'react';
import Layout from '../layouts/Layout';
import { Head } from '@inertiajs/react';

const Donation: React.FC = () => {
  return (
    <Layout>
      <Head title="Support PRC Board Reviewers PH" />

      <div className="bg-gray-50 py-8">
        <div className="max-w-2xl mx-auto bg-white shadow-xl rounded-2xl p-8 space-y-6">
          <h1 className="text-3xl md:text-4xl font-bold text-center">
            🙏 Be a Hero for Future Professionals
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
