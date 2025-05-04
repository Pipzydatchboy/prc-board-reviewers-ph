// resources/js/components/AdSlot.tsx
import React, { useEffect, useRef } from 'react';

type AdSlotProps = {
  /** your AdSense slot ID */
  slotId: string;
  /** optional extra wrapper classes */
  className?: string;
  /** optional inline styles */
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
      console.warn('Adsense push failed', e);
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
      />
    </div>
  );
};

export default AdSlot;
