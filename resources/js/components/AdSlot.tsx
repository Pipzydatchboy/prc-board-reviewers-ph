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

const ADSENSE_CLIENT = 'ca-pub-5380449482931469';
const ADSENSE_SRC = `https://pagead2.googlesyndication.com/pagead/js?client=${ADSENSE_CLIENT}`;

const loadAdsenseScript = (): Promise<void> => {
  return new Promise((resolve, reject) => {
    if (document.querySelector(`script[src^="${ADSENSE_SRC}"]`)) {
      resolve();
      return;
    }
    const script = document.createElement('script');
    script.src = ADSENSE_SRC;
    script.async = true;
    script.crossOrigin = 'anonymous';
    script.onload = () => resolve();
    script.onerror = () => reject(new Error('Failed to load adsbygoogle script'));
    document.head.appendChild(script);
  });
};

const AdSlot: React.FC<AdSlotProps> = ({
  slotId,
  className = 'block',
  style,
}) => {
  const wrapperRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    let mounted = true;
    loadAdsenseScript()
      .then(() => {
        if (!mounted) return;
        try {
          // @ts-ignore
          (window.adsbygoogle = window.adsbygoogle || []).push({});
        } catch (e) {
          console.warn('Adsense push failed', e);
        }
      })
      .catch(err => {
        console.error('Adsense script load error:', err);
      });

    return () => {
      mounted = false;
    };
  }, [slotId]);

  return (
    <div ref={wrapperRef} className={className} style={style}>
      <ins
        className="adsbygoogle"
        style={{ display: 'block' }}
        data-ad-client={ADSENSE_CLIENT}
        data-ad-slot={slotId}
        data-ad-format="auto"
        data-full-width-responsive="true"
      />
    </div>
  );
};

export default AdSlot;
