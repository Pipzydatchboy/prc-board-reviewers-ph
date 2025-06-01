import React, { useState, useEffect, useCallback, useRef } from 'react';
import { Head, router } from '@inertiajs/react';
import Layout from '../layouts/Layout';
import Breadcrumbs from '../components/breadcrumbs';
import QuestionView from '../components/quiz/QuestionView';
import SummaryView from '../components/quiz/SummaryView';
import IntroModal from '../components/modals/IntroModal';
import CommunityJoinModal from '../components/modals/CommunityJoinModal';

export type Question = {
  id: number;
  question: string;
  choices: string[];
  answer: string;
  explanation: string;
};

export interface Answer {
  questionId: number;
  question: string;
  choices: string[];
  selected: string;
  correct: string;
  explanation: string;
}

type SeoProps = {
  title: string;
  description: string;
  canonical: string;
};

export type QuestionsProps = {
  questions: Question[];
  subjectId: number;
  subjectName: string;
  part: number;
  examId: number;
  seo: SeoProps;

  // Provided by GroupModalController.php:
  hasJoinedGroup: boolean;
  fbUrl: string;
  examName: string;
  modalMessage: string;
};

// Fisher–Yates shuffle utility
const shuffleArray = <T,>(arr: T[]): T[] => {
  const a = [...arr];
  for (let i = a.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [a[i], a[j]] = [a[j], a[i]];
  }
  return a;
};

const Questions: React.FC<QuestionsProps> = ({
  questions,
  subjectId,
  subjectName,
  part,
  examId,
  seo,
  hasJoinedGroup: initialHasJoined,
  fbUrl,
  examName,
  modalMessage,
}) => {
  // Log incoming props to verify fbUrl, examName, etc.
  console.log(
    '[Questions.tsx] Props →',
    'examId:', examId,
    'hasJoinedGroup:', initialHasJoined,
    'fbUrl:', fbUrl,
    'examName:', examName,
    'modalMessage:', modalMessage
  );

  const [showIntro, setShowIntro] = useState(true);
  const [shuffled, setShuffled] = useState<Question[]>([]);
  const [index, setIndex] = useState(0);
  const [selected, setSelected] = useState<string | null>(null);
  const [score, setScore] = useState(0);
  const [userAnswers, setUserAnswers] = useState<Answer[]>([]);
  const [showSummary, setShowSummary] = useState(false);
  const [elapsed, setElapsed] = useState(0);

  // Local “hasJoined” state, seeded from initialHasJoined
  const [hasJoined, setHasJoined] = useState<boolean>(initialHasJoined);

  // Timer
  const timerRef = useRef<number | null>(null);
  useEffect(() => {
    timerRef.current = window.setInterval(() => setElapsed(e => e + 1), 1000);
    return () => {
      if (timerRef.current) window.clearInterval(timerRef.current);
    };
  }, []);

  // Stop timer when summary is shown
  useEffect(() => {
    if (showSummary && timerRef.current) {
      window.clearInterval(timerRef.current);
    }
  }, [showSummary]);

  // Prepare quiz: shuffle questions and their choices
  const prepareQuiz = useCallback(() => {
    const qShuffled = shuffleArray(questions).map(q => {
      const choices = shuffleArray(q.choices);
      return { ...q, choices };
    });
    setShuffled(qShuffled);
    setIndex(0);
    setSelected(null);
    setScore(0);
    setUserAnswers([]);
    setShowSummary(false);
    setElapsed(0);

    if (timerRef.current) window.clearInterval(timerRef.current);
    timerRef.current = window.setInterval(() => setElapsed(e => e + 1), 1000);
  }, [questions]);

  // Initialize on mount
  useEffect(() => {
    prepareQuiz();
  }, [prepareQuiz]);

  // Handle choice and record progress
  const handleChoice = useCallback(
    (choice: string) => {
      setSelected(choice);
      const current = shuffled[index];
      if (choice === current.answer) {
        setScore(s => s + 1);
      }

      setUserAnswers(prev => {
        const updated = [
          ...prev,
          {
            questionId: current.id,
            question: current.question,
            choices: current.choices,
            selected: choice,
            correct: current.answer,
            explanation: current.explanation,
          },
        ];
        const key = `prc_progress_${examId}_${subjectId}_${part}`;
        window.localStorage.setItem(
          key,
          JSON.stringify({ answered: updated.length, total: shuffled.length })
        );
        return updated;
      });
    },
    [index, shuffled, examId, subjectId, part]
  );

  // Next or show summary
  const handleNext = () => {
    if (index + 1 < shuffled.length) {
      setIndex(i => i + 1);
      setSelected(null);
    } else {
      const unlockKey = `prc_unlocked_${examId}_${subjectId}`;
      const unlocked: number[] = JSON.parse(
        window.localStorage.getItem(unlockKey) || '[]'
      );
      if (!unlocked.includes(part)) {
        unlocked.push(part);
        window.localStorage.setItem(unlockKey, JSON.stringify(unlocked));
      }
      setShowSummary(true);
    }
  };

  const percentage = Math.round((score / shuffled.length) * 100);
  const passed = percentage >= 80;

  const breadcrumbs = [
    { label: 'Home', href: '/' },
    { label: subjectName, href: `/exams/${examId}/subjects/${subjectId}/parts` },
    { label: `Part ${part}` },
  ];

  // Show the Facebook modal on question 5 (index === 4) if not already joined
  const showGroupModal = index === 4 && !hasJoined;

  // When "I've Joined" is clicked, post to backend, then hide modal
  const handleJoinedClick = async (): Promise<void> => {
    console.log('[Questions.tsx] handleJoinedClick: examId =', examId, 'fbUrl =', fbUrl);
    try {
      await fetch(`/group-modal/joined/${examId}`, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN':
            document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '',
        },
      });
    } catch (error) {
      console.error('[Questions.tsx] Failed to mark joined:', error);
    } finally {
      setHasJoined(true);
    }
  };

  return (
    <Layout>
      <Head>
        <title>{seo.title}</title>
        <meta name="description" content={seo.description} />
        <link rel="canonical" href={seo.canonical} />
      </Head>

      {showIntro ? (
        <IntroModal
          subjectName={subjectName}
          part={part}
          onStart={() => setShowIntro(false)}
        />
      ) : !showSummary ? (
        <div className="max-w-4xl mx-auto p-6">
          <Breadcrumbs items={breadcrumbs} />

          {showGroupModal ? (
            <CommunityJoinModal
              isOpen={showGroupModal}
              onContinue={handleJoinedClick}
              groupLink={fbUrl}
              examName={examName}
              modalMessage={modalMessage}
            />
          ) : (
            <QuestionView
              currentQuestion={shuffled[index]}
              selectedChoice={selected}
              onChoiceClick={handleChoice}
              onNext={handleNext}
              questionNumber={index + 1}
              totalQuestions={shuffled.length}
              formatElapsedTime={`${Math.floor(elapsed / 60)}m ${elapsed % 60}s`}
            />
          )}
        </div>
      ) : (
        <div className="max-w-4xl mx-auto p-6">
          <SummaryView
            score={score}
            total={shuffled.length}
            percentage={percentage}
            formatElapsedTime={`${Math.floor(elapsed / 60)}m ${elapsed % 60}s`}
            passed={passed}
            onRetake={prepareQuiz}
            onNextPart={() =>
              router.visit(
                `/exams/${examId}/subjects/${subjectId}/parts/${part + 1}/questions`
              )
            }
            userAnswers={userAnswers}
          />
        </div>
      )}
    </Layout>
  );
};

export default Questions;
