import React, {
  useState,
  useEffect,
  useMemo,
  useCallback,
  lazy,
  Suspense,
  useRef,
} from 'react';
import Layout from '../layouts/Layout';
import { Head, router } from '@inertiajs/react';
import Modal from '../components/Modal'; // For Oops modal

// Lazy-load heavy components
const Breadcrumbs   = lazy(() => import('../components/breadcrumbs'));
const QuestionView  = lazy(() => import('../components/quiz/QuestionView'));
const SummaryView   = lazy(() => import('../components/quiz/SummaryView'));
const IntroModal    = lazy(() => import('../components/modals/IntroModal'));
const RetakeModal   = lazy(() => import('../components/modals/RetakeModal'));
const NextModal     = lazy(() => import('../components/modals/NextModal'));

export type Question = { id: number; question: string; choices: string[]; answer: string; explanation: string; };
export interface Answer { questionId: number; question: string; choices: string[]; selected: string; correct: string; explanation: string; }

type SeoProps = {
  title: string;
  description: string;
  canonical: string;
  heading: string;
};

export type QuestionsProps = {
  questions: Question[];
  subjectId: number;
  subjectName: string;
  part: number;
  examType: string;
  examId: number;
  seo: SeoProps;
};

const shuffleArray = (array: Question[]) => [...array].sort(() => Math.random() - 0.5);

const Questions: React.FC<QuestionsProps> = ({
  questions,
  subjectId,
  subjectName,
  part,
  examType,
  examId,
  seo,
}) => {
  // State & refs
  const [showIntro, setShowIntro] = useState(true);
  const [showRetakeEncouragement, setShowRetakeEncouragement] = useState(false);
  const [showNextEncouragement, setShowNextEncouragement] = useState(false);
  const [shuffledQuestions, setShuffledQuestions] = useState(() => shuffleArray(questions));
  const [currentIndex, setCurrentIndex] = useState(0);
  const [selectedChoice, setSelectedChoice] = useState<string | null>(null);
  const [score, setScore] = useState(0);
  const [showSummary, setShowSummary] = useState(false);
  const [showModal, setShowModal] = useState(false);
  const [userAnswers, setUserAnswers] = useState<Answer[]>([]);
  const [elapsedTime, setElapsedTime] = useState(0);
  const timerRef = useRef<NodeJS.Timeout | null>(null);

  // Handlers omitted for brevity… same as before

  // Timer effect
  useEffect(() => {
    timerRef.current = setInterval(() => setElapsedTime(t => t + 1), 1000);
    return () => clearInterval(timerRef.current!);
  }, []);
  useEffect(() => { if (showSummary) clearInterval(timerRef.current!); }, [showSummary]);

  // Quiz navigation… same as before

  const formattedTime = useMemo(() => `${Math.floor(elapsedTime/60)}m ${elapsedTime%60}s`, [elapsedTime]);
  const percentage = (score/shuffledQuestions.length)*100;
  const passed = percentage >= 80;

  // Breadcrumbs
  const breadcrumbs = [
    { label: 'Home', href: '/' },
    { label: 'Exams', href: '/exams' },
    { label: subjectName, href: `/exams/${examId}/subjects/${subjectId}/parts` },
    { label: `Part ${part}` },
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

      {/* Modals lazy-loaded via Suspense */}
      <Suspense fallback={null}>
        {showIntro && <IntroModal subjectName={subjectName} part={part} onStart={() => setShowIntro(false)} />}
        {showRetakeEncouragement && <RetakeModal onRetake={() => {/* retake logic */}} />}
        {showNextEncouragement && <NextModal part={part} onContinue={() => {/* next logic */}} />}
      </Suspense>

      {/* Main Content */}
      {!showIntro && !showRetakeEncouragement && !showNextEncouragement && (
        <div className="p-6 max-w-4xl mx-auto text-gray-900">
          <Suspense fallback={<div className="mb-4 h-4 w-32 bg-gray-300 animate-pulse rounded" />}>
            <Breadcrumbs items={breadcrumbs} />
          </Suspense>

          <Suspense fallback={
            <div className="animate-pulse space-y-4 py-10">
              <div className="h-6 bg-gray-300 rounded w-3/4" />
              <div className="h-48 bg-gray-300 rounded w-full" />
              <div className="h-10 bg-gray-300 rounded w-1/2" />
            </div>
          }>
            {showSummary ? (
              <SummaryView
                score={score}
                total={shuffledQuestions.length}
                percentage={percentage}
                formatElapsedTime={formattedTime}
                passed={passed}
                userAnswers={userAnswers}
                onRetake={() => {/* retake click */}}
                onNextPart={() => {/* next part click */}}
              />
            ) : (
              <QuestionView
                currentQuestion={shuffledQuestions[currentIndex]}
                selectedChoice={selectedChoice}
                onChoiceClick={(choice) => {/* choice click */}}
                onNext={() => {/* next */}}
                formatElapsedTime={formattedTime}
                questionNumber={currentIndex+1}
                totalQuestions={shuffledQuestions.length}
              />
            )}
          </Suspense>

          <Modal
            isOpen={showModal}
            onClose={() => setShowModal(false)}
            title="Oops! 😟"
            message="You need at least 80% to proceed."
          />
        </div>
      )}
    </Layout>
  );
};

export default Questions;