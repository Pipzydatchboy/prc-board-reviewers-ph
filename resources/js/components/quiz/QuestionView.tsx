import React from 'react';

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
}) => {
  return (
    <div>
      <h1 className="text-3xl font-bold mb-4 text-green-700">
        📋 Question {questionNumber} of {totalQuestions}
      </h1>
      <p className="text-sm text-gray-600 mb-4">Elapsed Time: {formatElapsedTime}</p>

      <div className="p-6 bg-white border rounded-2xl shadow relative">
        <p className="font-semibold mb-4">{currentQuestion.question}</p>
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
                  className={`block w-full text-left p-2 border rounded ${choiceColor} pointer-events-auto ${
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
          <div className="mt-4 p-3 rounded border bg-gray-100 border-gray-300">
            <p className="font-semibold">Explanation:</p>
            <p className="mt-2">{currentQuestion.explanation}</p>
          </div>
        )}

        {selectedChoice && (
          <button
            onClick={onNext}
            className="mt-6 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600"
          >
            {questionNumber < totalQuestions ? 'Next' : 'Finish'}
          </button>
        )}
      </div>
    </div>
  );
};

export default QuestionView;
