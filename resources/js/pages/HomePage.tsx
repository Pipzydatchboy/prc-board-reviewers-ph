// resources/js/pages/HomePage.tsx
import React, { lazy, Suspense } from 'react';
import Layout from '../layouts/Layout';
import { Head, Link } from '@inertiajs/react';

// Lazy-loaded content
const Testimonials = lazy(() => import('@/components/Testimonials'));
const FAQs = lazy(() => import('@/components/FAQs'));

type SeoProps = {
  title: string;
  description: string;
  canonical: string;
  heading: string;
};

type HomePageProps = {
  seo: SeoProps;
};

const HomePage: React.FC<HomePageProps> = ({ seo }) => {
  const structuredData = {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "PRC Board Reviewers PH",
    "url": "https://prcboardreviewersph.com/",
    "logo": "https://prcboardreviewersph.com/images/logo.png",
    "sameAs": [
      "https://facebook.com/prcboardreviewersph",
      "https://twitter.com/prcboardreviewersph"
    ]
  };

  const breadcrumbs = {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home",  "item": "https://prcboardreviewersph.com/" },
      { "@type": "ListItem", "position": 2, "name": "Exams", "item": "https://prcboardreviewersph.com/exams" }
    ]
  };

  const reviewRating = {
    "@context": "https://schema.org",
    "@type": "AggregateRating",
    "itemReviewed": { "@type": "Organization", "name": "PRC Board Reviewers PH" },
    "ratingValue": "4.8",
    "reviewCount": "256"
  };

  const examList = [
    { title: 'Civil Service Exam (CSE)', desc: 'Professional and Sub-Professional levels.', link: '/exams/1/subjects' },
    { title: 'Licensure Exam for Teachers (LET)', desc: 'GenEd, ProfEd, and Major Subjects.', link: '/let-reviewers' },
    { title: 'Criminology Board Exam', desc: 'Prepare for Criminology licensure.', link: '/cle-reviewers' },
    { title: 'NAPOLCOM Exam', desc: 'Entrance and Promotional levels.', comingSoon: true },
    { title: 'Librarian Licensure Exam', desc: 'Ace the Librarian board exam.', link: '/lle-reviewers' },
    { title: 'Midwifery Licensure Exam', desc: 'Review for Midwifery board exam.', link: '/mle-reviewers' },
  ];

  return (
    <>
      {/* SEO tags */}
      <Head>
        <title>{seo.title}</title>
        <meta name="description" content={seo.description} />
        <link rel="canonical" href={seo.canonical} />
        <meta property="og:title" content={seo.title} />
        <meta property="og:description" content={seo.description} />
        <meta property="og:url" content={seo.canonical} />
        <meta name="twitter:card" content="summary_large_image" />
        <script type="application/ld+json">{JSON.stringify(structuredData)}</script>
        <script type="application/ld+json">{JSON.stringify(breadcrumbs)}</script>
        <script type="application/ld+json">{JSON.stringify(reviewRating)}</script>
      </Head>

      <Layout>
        {/* Hero + Top Banner */}
        <section className="bg-green-700 text-white py-16 text-center">
          <h1 className="text-4xl font-bold mb-4">{seo.heading}</h1>
          <p className="text-lg mb-6">
            Free Online Reviewers for Civil Service, LET, Criminology, NAPOLCOM, Librarian, Midwifery, and More!
          </p>
          <Link
            href="/exams"
            className="bg-yellow-300 text-green-800 px-6 py-3 rounded-full font-semibold hover:bg-yellow-400 transition"
          >
            Start Reviewing Now
          </Link>
        </section>

        {/* Why Choose */}
        <section className="max-w-7xl mx-auto px-6 py-12">
          <h2 className="text-3xl font-bold text-center mb-8 text-green-700">
            Why Choose PRC Board Reviewers PH?
          </h2>
          <ul className="grid md:grid-cols-2 gap-6 text-gray-900">
            <li className="p-4 border rounded-lg hover:shadow-sm">
              ✔️ 100% Free access to reviewers anytime
            </li>
            <li className="p-4 border rounded-lg hover:shadow-sm">
              ✔️ Covers Civil Service, LET, Criminology, NAPOLCOM, Librarian, Midwifery
            </li>
            <li className="p-4 border rounded-lg hover:shadow-sm">
              ✔️ Detailed explanations for every answer
            </li>
            <li className="p-4 border rounded-lg hover:shadow-sm">
              ✔️ Track scores and monitor progress
            </li>
          </ul>
        </section>

        {/* Featured Exams */}
        <section className="bg-gray-100 py-12 text-gray-900">
          <div className="max-w-7xl mx-auto px-6">
            <h2 className="text-3xl font-bold text-center mb-8 text-green-700">
              Available Exam Reviewers
            </h2>
            <div className="grid md:grid-cols-3 gap-6">
              {examList.map((exam, idx) => (
                <div key={idx} className="p-6 border rounded-lg bg-white hover:shadow-sm">
                  <h3 className="text-xl font-bold mb-2">{exam.title}</h3>
                  <p className="mb-4">{exam.desc}</p>
                  {exam.comingSoon ? (
                    <span className="text-green-600">Coming Soon</span>
                  ) : (
                    <Link
                      href={exam.link!}
                      className="text-green-600 hover:underline"
                    >
                      Start Reviewing
                    </Link>
                  )}
                </div>
              ))}
            </div>
            <div className="mt-8 text-center">
              <Link
                href="/exams"
                className="inline-block bg-green-700 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-800 transition"
              >
                Explore More Exams
              </Link>
            </div>
          </div>
        </section>

        {/* Testimonials + FAQs */}
        <Suspense fallback={<div className="py-12 text-center">Loading testimonials…</div>}>
          <Testimonials />
        </Suspense>
        <Suspense fallback={<div className="py-12 text-center">Loading FAQs…</div>}>
          <FAQs />
        </Suspense>

        {/* Footer */}
        <section className="max-w-7xl mx-auto px-6 py-8 text-center text-sm text-gray-600">
          <p>
            PRC Board Reviewers PH offers free online reviewers and practice tests for Civil Service Exam,
            LET, Criminology, NAPOLCOM, Librarian, Midwifery, and more. Study anytime, anywhere with
            detailed explanations to help you pass confidently.
          </p>
        </section>
      </Layout>
    </>
  );
};

export default HomePage;
