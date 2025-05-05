// resources/js/pages/Questions.tsx
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
export type QuestionsProps = { questions: Question[]; subjectId: number; subjectName: string; part: number; examType: string; examId: number; };

const shuffleArray = (array: Question[]) => [...array].sort(() => Math.random() - 0.5);

const Questions: React.FC<QuestionsProps> = ({ questions, subjectId, subjectName, part, examType, examId }) => {
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

  // Handlers
  const handleStart = () => setShowIntro(false);
  const handleRetakeClick = () => setShowRetakeEncouragement(true);
  const handleNextPartClick = () => setShowNextEncouragement(true);
  const performRetake = () => {
    setShowRetakeEncouragement(false);
    resetQuiz();
  };
  const performNextPart = () => {
    setShowNextEncouragement(false);
    const key = `prc_unlocked_${examId}_${subjectId}`;
    const saved: number[] = JSON.parse(localStorage.getItem(key) || '[1]');
    const next = part + 1;
    if (!saved.includes(next)) {
      saved.push(next);
      localStorage.setItem(key, JSON.stringify(saved));
    }
    router.visit(`/exams/${examId}/subjects/${subjectId}/parts/${next}/questions`);
  };
  const resetQuiz = () => {
    clearInterval(timerRef.current!);
    setElapsedTime(0);
    timerRef.current = setInterval(() => setElapsedTime(t => t + 1), 1000);
    setShuffledQuestions(shuffleArray(questions));
    setCurrentIndex(0);
    setSelectedChoice(null);
    setScore(0);
    setShowSummary(false);
    setUserAnswers([]);
  };

  // Timer effect
  useEffect(() => {
    timerRef.current = setInterval(() => setElapsedTime(t => t + 1), 1000);
    return () => clearInterval(timerRef.current!);
  }, []);
  useEffect(() => { if (showSummary) clearInterval(timerRef.current!); }, [showSummary]);

  // Quiz navigation
  const currentQuestion = shuffledQuestions[currentIndex];
  const goNext = useCallback(() => {
    if (currentIndex < shuffledQuestions.length - 1) {
      setCurrentIndex(i => i + 1);
      setSelectedChoice(null);
    } else {
      setShowSummary(true);
    }
  }, [currentIndex, shuffledQuestions.length]);
  const handleNext = useCallback(() => goNext(), [goNext]);
  const handleChoice = useCallback((choice: string) => {
    setSelectedChoice(choice);
    if (choice === currentQuestion.answer) setScore(s => s + 1);
    setUserAnswers(prev => [
      ...prev,
      {
        questionId: currentQuestion.id,
        question: currentQuestion.question,
        choices: currentQuestion.choices,
        selected: choice,
        correct: currentQuestion.answer,
        explanation: currentQuestion.explanation,
      },
    ]);
    try {
      const progressKey = `prc_progress_${examId}_${subjectId}_${part}`;
      const answeredCount = currentIndex + 1;
      const totalCount = shuffledQuestions.length;
      localStorage.setItem(progressKey, JSON.stringify({ answered: answeredCount, total: totalCount }));
    } catch (e) {
      console.error('Failed to save progress:', e);
    }
  }, [currentQuestion, currentIndex, shuffledQuestions.length, examId, subjectId, part]);

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
      <Head title={`${subjectName} Part ${part} Questions | PRC Board Reviewers PH`}>      
        <meta name="description" content={`Part ${part} of ${subjectName} quiz.`} />
      </Head>

      {/* Modals lazy-loaded via Suspense */}
      <Suspense fallback={null}>
        {showIntro && <IntroModal subjectName={subjectName} part={part} onStart={handleStart} />}
        {showRetakeEncouragement && <RetakeModal onRetake={performRetake} />}
        {showNextEncouragement && <NextModal part={part} onContinue={performNextPart} />}
      </Suspense>

      {/* Main Content */}
      {!(showIntro || showRetakeEncouragement || showNextEncouragement) && (
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
                onRetake={handleRetakeClick}
                onNextPart={handleNextPartClick}
              />
            ) : (
              <QuestionView
                currentQuestion={currentQuestion}
                selectedChoice={selectedChoice}
                onChoiceClick={handleChoice}
                onNext={handleNext}
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
