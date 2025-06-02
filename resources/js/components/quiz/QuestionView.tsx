import React from 'react';
import DailyMotivation from '@/components/DailyMotivation';

type Question = {
  id: number;
  question: string;
  choices: string[];
  answer: string;
  explanation: string;
};

type QuestionViewProps = {
  currentQuestion: Question;
  selectedChoice: string | null;
  onChoiceClick: (choice: string) => void;
  onNext: () => void;
  formatElapsedTime: string;
  questionNumber: number;
  totalQuestions: number;
};

const QuestionView: React.FC<QuestionViewProps> = ({
  currentQuestion,
  selectedChoice,
  onChoiceClick,
  onNext,
  formatElapsedTime,
  questionNumber,
  totalQuestions,
}) => (
  <div>
    <h1 className="text-3xl font-bold mb-4 text-green-700 antialiased">
      📋 Question {questionNumber} of {totalQuestions}
    </h1>
    <p className="text-sm text-gray-600 mb-4 antialiased">
      Elapsed Time: {formatElapsedTime}
    </p>

    <div className="p-6 bg-white border rounded-2xl shadow relative text-gray-800 antialiased">
      <p className="font-semibold mb-4 text-lg leading-relaxed">
        {currentQuestion.question}
      </p>
      <ul className="space-y-2">
        {currentQuestion.choices.map((choice, idx) => {
          let choiceColor = '';
          if (selectedChoice) {
            if (choice === currentQuestion.answer) {
              choiceColor = 'bg-green-200 border-green-500';
            } else if (choice === selectedChoice) {
              choiceColor = 'bg-red-200 border-red-500';
            }
          }
          return (
            <li key={idx}>
              <button
                onClick={() => onChoiceClick(choice)}
                disabled={!!selectedChoice}
                className={`block w-full text-left p-3 border rounded text-gray-800 ${choiceColor} ${
                  !selectedChoice ? 'hover:bg-gray-100' : ''
                }`}
              >
                {choice}
              </button>
            </li>
          );
        })}
      </ul>

      {selectedChoice && (
        <div className="mt-6 p-4 rounded border bg-gray-100 border-gray-300">
          <p className="font-semibold mb-2">Explanation:</p>
          <p className="italic leading-relaxed">{currentQuestion.explanation}</p>
        </div>
      )}

      {selectedChoice && (
        <button
          onClick={onNext}
          className="mt-6 px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-medium"
        >
          {questionNumber < totalQuestions ? 'Next Question' : 'Finish'}
        </button>
      )}
    </div>

    {/* Daily motivational message underneath each question */}
    <DailyMotivation />
  </div>
);

export default QuestionView;
