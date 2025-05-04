import React, { useMemo, lazy, Suspense } from 'react';
import Layout from '../layouts/Layout';
import { Head } from '@inertiajs/react';       // <-- import Head
import LazyAdSlot from '../components/LazyAdSlot'; // Lazy-loaded ad wrapper

// Lazy load components
const PartsGrid   = lazy(() => import('../components/PartsGrid'));
const Breadcrumbs = lazy(() => import('../components/breadcrumbs'));

type Part = {
  id: number;
  name: string;
};

type PartsProps = {
  parts: Part[];
  subjectName: string;
  examId: number;
  subjectId: number;
  examName: string;
};

const Parts: React.FC<PartsProps> = ({ parts, subjectName, examId, subjectId, examName }) => {
  const memoizedParts = useMemo(() => parts, [parts]);

  const breadcrumbItems = [
    { label: 'Home', href: '/' },
    { label: 'Exams', href: '/exams' },
    { label: examName, href: `/exams/${examId}` },
    { label: subjectName },
  ];

  return (
    <Layout>
      {/* Inertia Head for dynamic title/meta */}
      <Head title={`${subjectName} Parts | PRC Board Reviewers PH`}>
        <meta
          name="description"
          content={`View and review all parts of the ${subjectName} subject for your PRC board exam under ${examName}.`}
        />
      </Head>

      <div className="p-6 max-w-4xl mx-auto">
        {/* Breadcrumbs */}
        <Suspense fallback={<div className="text-center py-4">Loading breadcrumbs...</div>}>
          <Breadcrumbs items={breadcrumbItems} />
        </Suspense>

        {/* Page Title */}
        <h1 className="text-3xl font-bold mb-4 text-center text-green-700">
          🗂️ {subjectName} – Parts List
        </h1>

        {/* Top Leaderboard Ad */}
        <div className="mb-8">
          <LazyAdSlot slotId="parts-top-leaderboard" className="w-full h-24" />
        </div>

        {/* Parts Grid */}
        <Suspense fallback={<div className="text-center py-6">Loading Parts…</div>}>
          <PartsGrid parts={memoizedParts} examId={examId} subjectId={subjectId} />
        </Suspense>

        {/* Bottom Medium Rectangle Ad */}
        <div className="mt-12 flex justify-center">
          <div className="w-full md:w-1/2 h-64">
            <LazyAdSlot slotId="parts-bottom-rectangle" className="w-full h-full" />
          </div>
        </div>
      </div>
    </Layout>
  );
};

export default Parts;