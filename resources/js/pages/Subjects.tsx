import React from 'react';
import { Head, Link } from '@inertiajs/react';
import Layout from '@/layouts/Layout';

interface Subject {
  id: number;
  name: string;
}

interface SeoProps {
  title: string;
  description: string;
  canonical: string;
  heading: string;
}

interface Props {
  subjects: Subject[];
  examId: number;
  examName: string;
  seo: SeoProps;
}

export default function Subjects({ subjects, examId, examName, seo }: Props) {
  return (
    <Layout>
      <Head>
        <title>{seo.title}</title>
        <meta name="description" content={seo.description} />
        <link rel="canonical" href={seo.canonical} />
        {/* Open Graph Tags */}
        <meta property="og:title" content={seo.title} />
        <meta property="og:description" content={seo.description} />
        <meta property="og:url" content={seo.canonical} />
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      {/* Page Header */}
      <section className="py-12 bg-gray-50">
        <div className="max-w-4xl mx-auto px-4 text-center">
          <h1 className="text-4xl font-extrabold text-green-700 mb-2">
            {seo.heading}
          </h1>
          <p className="text-lg text-gray-600">
            Choose a topic under <span className="font-semibold">{examName}</span> to start reviewing.
          </p>
        </div>
      </section>

      {/* Subjects Grid */}
      <section className="max-w-6xl mx-auto px-4 py-8">
        <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {subjects.map((subject) => (
            <Link
              key={subject.id}
              href={`/exams/${examId}/subjects/${subject.id}/parts`}
              className="block p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200"
            >
              <div className="flex items-center justify-between mb-4">
                <h2 className="text-xl font-semibold text-gray-800">
                  {subject.name}
                </h2>
                <span className="inline-block px-3 py-1 text-sm bg-green-100 text-green-800 rounded-full">
                  {examName}
                </span>
              </div>
              <p className="text-gray-500 text-sm">
                Click to view all parts and start practicing questions.
              </p>
            </Link>
          ))}
        </div>
      </section>
    </Layout>
  );
}
