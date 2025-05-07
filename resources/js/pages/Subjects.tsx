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
  lastmod?: string;
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

      {/* Page Heading */}
      <h1 className="text-3xl font-bold mb-6">{seo.heading}</h1>

      {/* Subjects Grid */}
      <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        {subjects.map((subject) => (
          <Link
            key={subject.id}
            href={`/exams/${examId}/subjects/${subject.id}/parts`}
            className="block p-4 bg-white rounded shadow hover:bg-gray-100 transition"
          >
            {subject.name}
          </Link>
        ))}
      </div>
    </Layout>
  );
}
