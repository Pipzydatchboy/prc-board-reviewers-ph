// resources/js/components/PopUpAd.tsx
import React from 'react';

type PopUpAdProps = {
  isOpen: boolean;
  onClose: () => void;
  adSlotId: string;
};

// Popup functionality removed; component now no-op
const PopUpAd: React.FC<PopUpAdProps> = () => null;

export default PopUpAd;
