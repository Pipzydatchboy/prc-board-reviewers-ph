import React, { lazy, Suspense } from 'react';
import Layout from '../layouts/Layout';
import { Link, Head } from '@inertiajs/react';
import Breadcrumbs from '../components/breadcrumbs';
import LazyAdSlot from '../components/LazyAdSlot';

type Subject = { id: number; name: string };
type SubjectsProps = {
  subjects: Subject[];
  examId: number;
  examName: string;
};

const Subjects: React.FC<SubjectsProps> = ({ subjects, examId, examName }) => {
  const breadcrumbItems = [
    { label: 'Home', href: '/' },
    { label: 'Exams', href: '/exams' },
    { label: examName },
  ];

  return (
    <Layout>
      {/* Set page title via prop */}
      <Head title={`${examName} Subjects | PRC Board Reviewers PH`}>
        <meta
          name="description"
          content={`Browse all subjects for the ${examName} exam and start reviewing now!`}
        />
      </Head>

      <div className="p-6 max-w-4xl mx-auto">
        {/* Breadcrumbs */}
        <div className="text-sm text-gray-400 mb-6">
          <Breadcrumbs items={breadcrumbItems} />
        </div>

        {/* Page Title */}
        <h1 className="text-3xl font-bold mb-4 text-center text-green-700">
          📖 {examName} Subjects
        </h1>

        {/* Top Ad */}
        <div className="mb-8">
          <LazyAdSlot slotId="top-subjects-leaderboard" className="w-full h-24" />
        </div>

        {/* Subjects Grid */}
        <div className="grid gap-6 md:grid-cols-2">
          {subjects.map((subject) => (
            <Link
              key={subject.id}
              href={`/exams/${examId}/subjects/${subject.id}/parts`}
              className="p-6 bg-white border rounded-2xl shadow-sm hover:shadow-md transform hover:-translate-y-1 transition"
            >
              <h2 className="text-xl font-semibold text-gray-800">{subject.name}</h2>
              <p className="mt-2 text-gray-500">Start reviewing this subject!</p>
            </Link>
          ))}
        </div>

        {/* Bottom Ad */}
        <div className="mt-12 flex justify-center">
          <div className="w-full md:w-1/2 h-64">
            <LazyAdSlot slotId="bottom-subjects-rectangle" className="w-full h-full" />
          </div>
        </div>
      </div>
    </Layout>
  );
};

export default Subjects;
