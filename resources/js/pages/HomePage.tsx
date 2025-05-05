// resources/js/pages/HomePage.tsx
import React, { lazy, Suspense } from 'react';
import { Head, Link } from '@inertiajs/react';
import Layout from '../layouts/Layout';

// Lazy-loaded content
const Testimonials = lazy(() => import('@/components/Testimonials'));
const FAQs = lazy(() => import('@/components/FAQs'));

const HomePage: React.FC = () => {
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

  return (
    <>
      <Head>
        <title>Free Civil Service, LET, Criminology, NAPOLCOM, Librarian & More Reviewers | PRC Board Reviewers PH</title>
        <meta name="description" content="Get free online reviewers for Civil Service Exam, LET, Criminology, NAPOLCOM, Librarian, Midwifery, and other board exams. Practice tests with explanations at PRC Board Reviewers PH!" />
        {/* ... other meta tags ... */}
        <script type="application/ld+json">{JSON.stringify(structuredData)}</script>
        <script type="application/ld+json">{JSON.stringify(breadcrumbs)}</script>
        <script type="application/ld+json">{JSON.stringify(reviewRating)}</script>
      </Head>

      <Layout>
        {/* Hero + Top Banner */}
        <section className="bg-green-700 text-white py-16 text-center">
          <h1 className="text-4xl font-bold mb-4">Your Ultimate Reviewer Hub</h1>
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
        <section className="bg-gray-100 py-12">
          <div className="max-w-7xl mx-auto px-6">
            <h2 className="text-3xl font-bold text-center mb-8 text-green-700">
              Available Exam Reviewers
            </h2>
            <div className="grid md:grid-cols-3 gap-6">
              {[
                { title: 'Civil Service Exam (CSE)', desc: 'Professional and Sub-Professional levels.', link: '/exams/1/subjects' },
                { title: 'Licensure Exam for Teachers (LET)', desc: 'GenEd, ProfEd, and Major Subjects.', link: '/exams/2/subjects' },
                { title: 'Criminology Board Exam', desc: 'Prepare for Criminology licensure.', comingSoon: true },
                { title: 'NAPOLCOM Exam', desc: 'Entrance and Promotional levels.', comingSoon: true },
                { title: 'Librarian Licensure Exam', desc: 'Ace the Librarian board exam.', comingSoon: true },
                { title: 'Midwifery Licensure Exam', desc: 'Review for Midwifery board exam.', comingSoon: true },
              ].map((exam, idx) => (
                <div key={idx} className="p-6 border rounded-lg bg-white hover:shadow-sm">
                  <h3 className="text-xl font-bold mb-2">{exam.title}</h3>
                  <p className="text-gray-800 mb-4">{exam.desc}</p>
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
