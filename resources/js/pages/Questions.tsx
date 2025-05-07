import React, { useState, useEffect, useCallback, useRef } from 'react';
import { Head, router } from '@inertiajs/react';
import Layout from '../layouts/Layout';
import Breadcrumbs from '../components/breadcrumbs';
import QuestionView from '../components/quiz/QuestionView';
import SummaryView from '../components/quiz/SummaryView';
import IntroModal from '../components/modals/IntroModal';

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
};

const shuffleQuestions = (arr: Question[]) => [...arr].sort(() => Math.random() - 0.5);

const Questions: React.FC<QuestionsProps> = ({
  questions,
  subjectId,
  subjectName,
  part,
  examId,
  seo,
}) => {
  const [showIntro, setShowIntro] = useState(true);
  const [shuffled, setShuffled] = useState<Question[]>(() => shuffleQuestions(questions));
  const [index, setIndex] = useState(0);
  const [selected, setSelected] = useState<string | null>(null);
  const [score, setScore] = useState(0);
  const [userAnswers, setUserAnswers] = useState<Answer[]>([]);
  const [showSummary, setShowSummary] = useState(false);
  const [elapsed, setElapsed] = useState(0);

  // Timer
  const timerRef = useRef<number | null>(null);
  useEffect(() => {
    timerRef.current = window.setInterval(() => setElapsed(e => e + 1), 1000);
    return () => {
      if (timerRef.current) {
        window.clearInterval(timerRef.current);
      }
    };
  }, []);

  // Stop timer when summary is shown
  useEffect(() => {
    if (showSummary && timerRef.current) {
      window.clearInterval(timerRef.current);
    }
  }, [showSummary]);

  // Handle choice and record progress
  const handleChoice = useCallback((choice: string) => {
    setSelected(choice);
    const current = shuffled[index];
    if (choice === current.answer) setScore(s => s + 1);

    setUserAnswers(prev => {
      const updated = [...prev, {
        questionId: current.id,
        question: current.question,
        choices: current.choices,
        selected: choice,
        correct: current.answer,
        explanation: current.explanation,
      }];
      const key = `prc_progress_${examId}_${subjectId}_${part}`;
      window.localStorage.setItem(key, JSON.stringify({ answered: updated.length, total: shuffled.length }));
      return updated;
    });
  }, [index, shuffled, examId, subjectId, part]);

  // Next or summary
  const handleNext = () => {
    if (index + 1 < shuffled.length) {
      setIndex(i => i + 1);
      setSelected(null);
    } else {
      const unlockKey = `prc_unlocked_${examId}_${subjectId}`;
      const unlocked: number[] = JSON.parse(window.localStorage.getItem(unlockKey) || '[]');
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

  return (
    <Layout>
      <Head>
        <title>{seo.title}</title>
        <meta name="description" content={seo.description} />
        <link rel="canonical" href={seo.canonical} />
      </Head>

      {showIntro ? (
        <IntroModal subjectName={subjectName} part={part} onStart={() => setShowIntro(false)} />
      ) : !showSummary ? (
        <div className="max-w-4xl mx-auto p-6">
          <Breadcrumbs items={breadcrumbs} />
          <QuestionView
            currentQuestion={shuffled[index]}
            selectedChoice={selected}
            onChoiceClick={handleChoice}
            onNext={handleNext}
            questionNumber={index + 1}
            totalQuestions={shuffled.length}
            formatElapsedTime={`${Math.floor(elapsed / 60)}m ${elapsed % 60}s`}
          />
        </div>
      ) : (
        <div className="max-w-4xl mx-auto p-6">
          <SummaryView
            score={score}
            total={shuffled.length}
            percentage={percentage}
            formatElapsedTime={`${Math.floor(elapsed / 60)}m ${elapsed % 60}s`}
            passed={passed}
            onRetake={() => window.location.reload()}
            onNextPart={() => router.visit(`/exams/${examId}/subjects/${subjectId}/parts/${part + 1}/questions`)}
            userAnswers={userAnswers}
          />
        </div>
      )}
    </Layout>
  );
};

export default Questions;
