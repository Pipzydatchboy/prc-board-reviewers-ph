import React, { useState, lazy, Suspense } from 'react';
import { Head, Link } from '@inertiajs/react';
import Layout from '../layouts/Layout';

// Lazy load Breadcrumbs
const Breadcrumbs = lazy(() => import('../components/breadcrumbs'));

type Exam = { id: number; name: string; };
type SeoProps = { title: string; description: string; canonical: string; heading: string; };
type ExamsProps = { exams: Exam[]; seo: SeoProps; };

export default function Exams({ exams, seo }: ExamsProps) {
  const [search, setSearch] = useState('');

  // filter exams by search term
  const filtered = exams.filter(e =>
    e.name.toLowerCase().includes(search.toLowerCase())
  );

  const comingSoon = [
    'NAPOLCOM Exam',
    'Librarian Licensure Exam',
    'PNPA Cadet Admission Test',
    'Fire Officer Exam',
    'Customs Broker Licensure Exam',
  ];

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
        <meta name="twitter:card" content="summary_large_image" />
      </Head>

      {/* Breadcrumbs + Search */}
      <div className="max-w-6xl mx-auto px-4 py-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <Suspense fallback={<div>Loading...</div>}>
          <Breadcrumbs items={breadcrumbs} />
        </Suspense>
        <input
          type="text"
          value={search}
          onChange={e => setSearch(e.target.value)}
          placeholder="Search exams..."
          className="
            w-full sm:w-1/3
            px-4 py-2
            border rounded-lg shadow
            text-gray-900
            placeholder-gray-400
            focus:outline-none
            focus:ring-2 focus:ring-green-500
          "
        />
      </div>

      {/* Hero */}
      <section className="relative bg-green-600 text-white py-16">
        <div className="absolute inset-0 bg-gradient-to-br from-green-700 to-green-500 opacity-50"></div>
        <div className="relative max-w-4xl mx-auto px-4 text-center">
          <h1 className="text-5xl font-extrabold mb-4 text-gray-100">{seo.heading}</h1>
          <p className="text-lg text-gray-200">{seo.description}</p>
        </div>
      </section>

      {/* Live Exams Grid */}
      <section className="max-w-6xl mx-auto px-4 py-12">
        <h2 className="text-3xl font-bold mb-6 text-gray-800">Available Exams</h2>
        <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {filtered.map(exam => (
            <Link
              key={exam.id}
              href={`/exams/${exam.id}/subjects`}
              className="group block bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-200 transform hover:-translate-y-1"
            >
              <div className="p-6">
                <h3 className="text-2xl font-semibold mb-2 text-gray-800">
                  {exam.name}
                </h3>
                <p className="text-gray-600">Click to begin review</p>
              </div>
              <div className="h-1 bg-gradient-to-r from-green-500 to-green-300 transition-all"></div>
            </Link>
          ))}
        </div>
      </section>

      {/* Coming Soon */}
      <section className="max-w-6xl mx-auto px-4 pb-12">
        <h2 className="text-3xl font-bold mb-6 text-gray-800">🚧 Coming Soon</h2>
        <div className="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {comingSoon.map((name, idx) => (
            <div
              key={idx}
              className="bg-gray-100 p-6 rounded-2xl text-center shadow-inner"
            >
              <h3 className="text-xl font-semibold text-gray-800 mb-2">{name}</h3>
              <span className="inline-block px-3 py-1 bg-yellow-200 text-yellow-800 rounded-full text-sm font-medium">
                Coming Soon
              </span>
            </div>
          ))}
        </div>
      </section>
    </Layout>
  );
}
