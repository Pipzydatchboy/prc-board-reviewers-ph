import React from 'react';

type NextModalProps = {
  part: number;
  onContinue: () => void;
};

const NextModal: React.FC<NextModalProps> = ({ part, onContinue }) => (
  <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div className="bg-white rounded-lg p-6 max-w-sm w-full text-center">
      <h2 className="text-xl font-semibold mb-4">Great Job!</h2>
      <p className="mb-4">You passed Part {part}! Are you ready for the next part?</p>
      <button
        onClick={onContinue}
        className="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition"
      >
        Continue
      </button>
    </div>
  </div>
);

export default React.memo(NextModal);
