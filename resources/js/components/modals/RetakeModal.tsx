import React from 'react';

type RetakeModalProps = {
  onRetake: () => void;
};

const RetakeModal: React.FC<RetakeModalProps> = ({ onRetake }) => (
  <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div className="bg-white rounded-lg p-6 max-w-sm w-full text-center">
      <h2 className="text-xl font-semibold mb-4">Keep Going!</h2>
      <p className="mb-4">Every attempt is progress. Believe in yourself and try again!</p>
      <button
        onClick={onRetake}
        className="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition"
      >
        Let's Go Again
      </button>
    </div>
  </div>
);

export default React.memo(RetakeModal);