import React from 'react';

type IntroModalProps = {
  subjectName: string;
  part: number;
  onStart: () => void;
};

const IntroModal: React.FC<IntroModalProps> = ({ subjectName, part, onStart }) => (
  <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div className="bg-white rounded-lg p-6 max-w-md w-full text-center text-gray-900">
      <h2 className="text-2xl font-bold mb-4">
        Welcome to {subjectName} Part {part}
      </h2>
      <p className="mb-4">
        You are about to start <strong>Part {part}</strong> of <strong>{subjectName}</strong>.  
        Aim to score at least <strong>80%</strong> to unlock the next part!
      </p>
      <p className="italic mb-6">
        Stay focused and do your best. You’ve got this! 💪
      </p>
      <button
        onClick={onStart}
        className="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"
      >
        Start Quiz
      </button>
    </div>
  </div>
);

export default React.memo(IntroModal);
