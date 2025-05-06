import React, { lazy, Suspense } from 'react';
import Layout from '../layouts/Layout';
import { Link, Head } from '@inertiajs/react';

// Lazy load Breadcrumbs
const Breadcrumbs = lazy(() => import('../components/breadcrumbs'));

type Exam = {
  id: number;
  name: string;
};

type ExamsProps = {
  exams: Exam[];
};

const Exams: React.FC<ExamsProps> = ({ exams }) => {
  // hard-coded “coming soon” list
  const comingSoonExams = [
    'NAPOLCOM Exam',
    'Librarian Licensure Exam',
    'Midwifery Licensure Exam',
    'PNPA Cadet Admission Test',
    'Fire Officer Exam',
    'Customs Broker Licensure Exam',
  ];

  const breadcrumbItems = [
    { label: 'Home', href: '/' },
    { label: 'Exams' }, // current page, no link
  ];

  return (
    <Layout>
      {/* Inertia's Head for dynamic title */}
      <Head>
        <title>Available Exams - PRC Board Reviewers PH</title>
        <meta
          name="description"
          content="Browse and review available exams for the Laravel exam preparation. Get ready with practice tests and explanations."
        />
      </Head>

      <div className="p-6 max-w-5xl mx-auto">
        {/* Breadcrumbs */}
        <Suspense fallback={<div className="text-sm text-gray-400 mb-4">Loading breadcrumbs…</div>}>
          <Breadcrumbs items={breadcrumbItems} />
        </Suspense>

        {/* Page Title */}
        <h1 className="text-3xl font-bold mb-8 text-center text-green-700">📚 Available Exams</h1>

        {/* Live Exams Grid */}
        <div className="grid gap-6 md:grid-cols-2 mb-12">
          {exams.map((exam) => (
            <Link
              key={exam.id}
              href={`/exams/${exam.id}/subjects`}
              className="p-6 bg-white border rounded-2xl shadow-sm hover:shadow-md transform hover:-translate-y-1 transition"
            >
              <h2 className="text-xl font-semibold text-gray-800">{exam.name}</h2>
              <p className="mt-2 text-gray-500">Start reviewing now!</p>
            </Link>
          ))}
        </div>

        {/* Coming Soon Section */}
        <h2 className="text-2xl font-bold mb-4 text-center text-gray-600">🚧 Coming Soon</h2>
        <div className="grid gap-6 md:grid-cols-2 mb-12">
          {comingSoonExams.map((name, idx) => (
            <div
              key={idx}
              className="p-6 bg-gray-50 border rounded-2xl text-center shadow-sm hover:shadow-md transform hover:-translate-y-1 transition"
            >
              <h3 className="text-lg font-semibold text-gray-700">{name}</h3>
              <p className="mt-2 text-yellow-600 font-medium">Coming Soon!</p>
            </div>
          ))}
        </div>
      </div>
    </Layout>
  );
};

export default Exams;
