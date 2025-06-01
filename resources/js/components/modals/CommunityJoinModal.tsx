// resources/js/components/modals/CommunityJoinModal.tsx

import React from 'react';

type CommunityJoinModalProps = {
  isOpen: boolean;
  onContinue: () => void;
  groupLink: string;       // expected to be non-empty
  modalMessage?: string;
  examName?: string;
};

export default function CommunityJoinModal({
  isOpen,
  onContinue,
  groupLink,
  modalMessage,
  examName,
}: CommunityJoinModalProps) {
  // 1. If isOpen is false, render nothing
  if (!isOpen) return null;

  // 2. Warn if no valid URL
  if (!groupLink) {
    console.warn('[CommunityJoinModal] No groupLink provided.');
  }

  return (
    <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
      <div className="bg-white rounded-lg p-6 max-w-md w-full text-center text-gray-900">
        <h2 className="text-2xl font-bold mb-4">
          {examName
            ? `Join Our ${examName} Facebook Community`
            : 'Join Our Facebook Community'}
        </h2>

        <p className="mb-4">
          {modalMessage
            ? modalMessage
            : 'Before you continue, please join our FB group for free review materials:'}
        </p>

        {/* 3. Only show this button if groupLink is a non-empty string */}
        {groupLink ? (
          <button
            onClick={() => window.open(groupLink, '_blank')}
            className="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4"
          >
            Join the Group
          </button>
        ) : (
          <div className="text-red-600 mb-4">
            Facebook group link is missing.
          </div>
        )}

        <br />

        <button
          onClick={onContinue}
          className="mt-2 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700"
        >
          I’ve Joined, Continue to Quiz
        </button>
      </div>
    </div>
  );
}
