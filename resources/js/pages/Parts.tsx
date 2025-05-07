import React, { useMemo, lazy, Suspense } from 'react';
import Layout from '../layouts/Layout';
import { Head } from '@inertiajs/react';

// Lazy load components
const PartsGrid   = lazy(() => import('../components/PartsGrid'));
const Breadcrumbs = lazy(() => import('../components/breadcrumbs'));

type Part = {
  id: number;
  name: string;
};

type SeoProps = {
  title: string;
  description: string;
  canonical: string;
  heading: string;
};

type PartsProps = {
  parts: Part[];
  subjectName: string;
  examId: number;
  subjectId: number;
  examName: string;
  seo: SeoProps;
};

const Parts: React.FC<PartsProps> = ({ parts, subjectName, examId, subjectId, examName, seo }) => {
  const memoizedParts = useMemo(() => parts, [parts]);

  const breadcrumbItems = [
    { label: 'Home', href: '/' },
    { label: 'Exams', href: '/exams' },
    { label: examName, href: `/exams/${examId}` },
    { label: subjectName },
  ];

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
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      <div className="p-6 max-w-4xl mx-auto">
        {/* Breadcrumbs */}
        <Suspense fallback={<div className="text-center py-4">Loading breadcrumbs...</div>}>
          <Breadcrumbs items={breadcrumbItems} />
        </Suspense>

        {/* Page Title */}
        <h1 className="text-3xl font-bold mb-4 text-center text-green-700">
          {seo.heading}
        </h1>

        {/* Parts Grid */}
        <Suspense fallback={<div className="text-center py-6">Loading parts…</div>}>
          <PartsGrid parts={memoizedParts} examId={examId} subjectId={subjectId} />
        </Suspense>
      </div>
    </Layout>
  );
};

export default Parts;
