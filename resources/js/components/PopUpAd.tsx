// resources/js/components/PopUpAd.tsx
import React, { useEffect, useRef } from 'react';

type PopUpAdProps = {
  isOpen: boolean;
  onClose: () => void;
  children?: React.ReactNode;
};

const PopUpAd: React.FC<PopUpAdProps> = ({ isOpen, onClose, children }) => {
  const containerRef = useRef<HTMLDivElement>(null);
  const closeBtnRef = useRef<HTMLButtonElement>(null);
  const prevFocusRef = useRef<HTMLElement | null>(null);

  useEffect(() => {
    if (isOpen) {
      prevFocusRef.current = document.activeElement as HTMLElement;
      setTimeout(() => closeBtnRef.current?.focus(), 0);

      const handleKeyDown = (e: KeyboardEvent) => {
        if (e.key === 'Escape') onClose();
        if (e.key === 'Tab') {
          e.preventDefault();
          closeBtnRef.current?.focus();
        }
      };

      document.addEventListener('keydown', handleKeyDown);
      return () => {
        document.removeEventListener('keydown', handleKeyDown);
        prevFocusRef.current?.focus();
      };
    }
  }, [isOpen, onClose]);

  if (!isOpen) return null;

  return (
    <div
      className="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 p-4"
      ref={containerRef}
      role="dialog"
      aria-modal="true"
    >
      <div className="bg-white rounded-lg relative w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl p-4 sm:p-6">
        <button
          ref={closeBtnRef}
          onClick={onClose}
          className="absolute top-3 right-3 text-gray-600 hover:text-gray-800 focus:outline-none"
          aria-label="Close advertisement"
        >
          ✕
        </button>
        <div className="w-full">
          {children}
        </div>
      </div>
    </div>
  );
};

export default PopUpAd;
