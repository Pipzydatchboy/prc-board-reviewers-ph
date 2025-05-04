// resources/js/components/LazyAdSlot.tsx
import React, { useState, useRef, useEffect, lazy, Suspense } from 'react';

type LazyAdSlotProps = {
  slotId: string;
  className?: string;
  style?: React.CSSProperties;
  height?: string;
};

const AdSlot = lazy(() => import('./AdSlot'));  // <-- same folder

const LazyAdSlot: React.FC<LazyAdSlotProps> = ({ slotId, className, style, height = '200px' }) => {
  const ref = useRef<HTMLDivElement>(null);
  const [inView, setInView] = useState(false);

  useEffect(() => {
    if (!ref.current) return;
    const obs = new IntersectionObserver(([e]) => {
      if (e.isIntersecting) {
        setInView(true);
        obs.disconnect();
      }
    }, { threshold: 0.2 });
    obs.observe(ref.current);
    return () => obs.disconnect();
  }, []);

  return (
    <div ref={ref} className={className} style={{ minHeight: height, ...style }}>
      {inView && (
        <Suspense fallback={<div style={{ height }}>Loading Ad…</div>}>
          <AdSlot slotId={slotId} />
        </Suspense>
      )}
    </div>
  );
};

export default LazyAdSlot;
