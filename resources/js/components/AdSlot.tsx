import React, { useEffect, useRef } from 'react';

/**
 * AdSlot – a manual AdSense slot component for React/Inertia
 *
 * Don't forget to include this in your <head> (e.g. in Layout.tsx or Blade):
 * <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 */

type AdSlotProps = {
  /** Your AdSense ad unit slot ID */
  slotId: string;
  /** Optional wrapper classes */
  className?: string;
  /** Optional inline styles */
  style?: React.CSSProperties;
};

const AdSlot: React.FC<AdSlotProps> = ({
  slotId,
  className = 'block',
  style,
}) => {
  const wrapperRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    try {
      // @ts-ignore
      (window.adsbygoogle = window.adsbygoogle || []).push({});
    } catch (e) {
      console.warn('AdSense slot push failed:', e);
    }
  }, [slotId]);

  return (
    <div ref={wrapperRef} className={className} style={style}>
      <ins
        className="adsbygoogle"
        style={{ display: 'block' }}
        data-ad-client="ca-pub-5380449482931469"
        data-ad-slot={slotId}
        data-ad-format="auto"
        data-full-width-responsive="true"
      ></ins>
    </div>
  );
};

export default AdSlot;
