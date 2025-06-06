// resources/js/components/quiz/SummaryView.tsx
import React, { useState } from 'react';
import type { FC } from 'react';

type Answer = {
  question: string;
  choices: string[];
  selected: string;
  correct: string;
  explanation: string;
};

type Props = {
  score: number;
  total: number;
  percentage: number;
  formatElapsedTime: string;
  passed: boolean;
  onRetake: () => void;
  onNextPart: () => void;
  userAnswers: Answer[];
};

const SummaryView: FC<Props> = ({
  score,
  total,
  percentage,
  formatElapsedTime,
  passed,
  onRetake,
  onNextPart,
  userAnswers,
}) => {
  const [showDonate, setShowDonate] = useState(false);

  const handleContinuePrint = () => {
    setShowDonate(false);
    setTimeout(() => window.print(), 100);
  };

  return (
    <>
      <div className="max-w-4xl mx-auto">
        <h1 className="text-3xl font-bold mb-4 text-green-700 antialiased">✅ Summary</h1>

        <div className="bg-white rounded-2xl shadow p-6 space-y-1 text-gray-800 antialiased">
          <p>Points: {score} / {total}</p>
          <p>Percentage Score: {percentage.toFixed(2)}%</p>
          <p>Total Time: {formatElapsedTime}</p>
        </div>

        <div className="mt-6 flex flex-wrap gap-2 text-gray-800 antialiased">
          <button
            onClick={onRetake}
            className="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition"
          >
            Retake
          </button>

          <button
            onClick={onNextPart}
            disabled={!passed}
            className={`px-4 py-2 rounded transition font-semibold text-white
              ${passed ? 'bg-blue-500 hover:bg-blue-600' : 'bg-gray-300 cursor-not-allowed opacity-75'}`}
          >
            Next Part
          </button>

          <button
            onClick={() => setShowDonate(true)}
            className="px-4 py-2 bg-purple-500 text-white rounded hover:bg-purple-600 transition"
          >
            Print
          </button>
        </div>

        <div className="mt-8">
          <h2 className="text-2xl font-bold mb-4 text-gray-800 antialiased">Review of Answers:</h2>
          {userAnswers.map((ans, idx) => (
            <div key={idx} className="p-4 border rounded mb-4 bg-white text-gray-800 antialiased">
              <p className="font-semibold mb-2">{`${idx + 1}. ${ans.question}`}</p>
              <ul className="list-disc list-inside mb-2">
                {ans.choices.map((ch, i) => {
                  const cls = ch === ans.correct
                    ? 'text-green-600'
                    : ch === ans.selected
                    ? 'text-red-600'
                    : 'text-gray-700';
                  return <li key={i} className={cls}>{ch}</li>;
                })}
              </ul>
              <p className="text-sm">
                Your Answer:{' '}
                <span className={ans.selected === ans.correct ? 'text-green-600' : 'text-red-600'}>
                  {ans.selected}
                </span>
              </p>
              <p className="text-sm">
                Correct Answer:{' '}
                <span className="text-green-600">{ans.correct}</span>
              </p>
              <p className="text-sm italic mt-1">{ans.explanation}</p>
            </div>
          ))}
        </div>
      </div>

      {/* Donation / Print Modal */}
      {showDonate && (
        <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 print:hidden">
          <div className="bg-white rounded-lg p-6 max-w-sm w-full text-center text-gray-800 antialiased">
            <h2 className="text-xl font-semibold mb-4">Support Our Site</h2>
            <p className="mb-4">
              If you find this site helpful, you can donate any amount by scanning the Gcash QR code below.
            </p>
            <img
              src="/images/gcash-qr.webp"
              alt="Donation QR Code"
              className="mx-auto w-48 h-48 mb-4"
            />
            <button
              onClick={handleContinuePrint}
              className="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition"
            >
              Continue to Print
            </button>
          </div>
        </div>
      )}
    </>
  );
};

export default SummaryView;
