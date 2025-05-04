// resources/js/components/PopUpAd.tsx
import React, { useEffect, useRef } from 'react';

/**
 * PopUpAd – a modal wrapper that can display adsense ad slots
 * Ensure you include AdSense script in your Layout (<script async src="https://pagead2.googlesyndication.com/pagead/js?client=ca-pub-5380449482931469" crossOrigin="anonymous"></script>)
 */

type PopUpAdProps = {
  /** Controls visibility of the modal */
  isOpen: boolean;
  /** Callback to close the modal */
  onClose: () => void;
  /** Any children, such as an AdSlot component */
  children?: React.ReactNode;
};

const PopUpAd: React.FC<PopUpAdProps> = ({ isOpen, onClose, children }) => {
  const containerRef = useRef<HTMLDivElement>(null);
  const closeBtnRef = useRef<HTMLButtonElement>(null);
  const prevFocusRef = useRef<HTMLElement | null>(null);

  // Trap focus and set up ESC key and ad push when modal opens
  useEffect(() => {
    if (isOpen) {
      // Remember previously focused element
      prevFocusRef.current = document.activeElement as HTMLElement;
      // Focus close button after render
      setTimeout(() => closeBtnRef.current?.focus(), 0);

      // Trigger AdSense render for manual slots inside modal
      try {
        // @ts-ignore
        (window.adsbygoogle = window.adsbygoogle || []).push({});
      } catch (e) {
        console.warn('AdSense pop-up slot push failed:', e);
      }

      const handleKeyDown = (e: KeyboardEvent) => {
        if (e.key === 'Escape') {
          onClose();
        }
        if (e.key === 'Tab') {
          e.preventDefault();
          closeBtnRef.current?.focus();
        }
      };

      document.addEventListener('keydown', handleKeyDown);
      return () => {
        document.removeEventListener('keydown', handleKeyDown);
        // Return focus to previous element
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
