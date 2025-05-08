import React, { useState, useEffect } from 'react';
import { Link } from '@inertiajs/react';

type Part = {
  id: number;
  name: string;
};

type PartsGridProps = {
  parts: Part[];
  examId: number;
  subjectId: number;
};

const PartsGrid: React.FC<PartsGridProps> = ({ parts, examId, subjectId }) => {
  const [unlockedParts, setUnlockedParts] = useState<number[]>([1]);

  useEffect(() => {
    const key = `prc_unlocked_${examId}_${subjectId}`;
    const stored = localStorage.getItem(key);
    let initialUnlocked: number[] = [1];

    if (stored) {
      try {
        const parsed = JSON.parse(stored);
        if (Array.isArray(parsed)) {
          initialUnlocked = parsed.map((n: any) => Number(n));
        }
      } catch {
        // ignore
      }
    }

    // auto-unlock completed parts
    const autoUnlocked = parts.reduce<number[]>((acc, part) => {
      const progKey = `prc_progress_${examId}_${subjectId}_${part.id}`;
      const raw = localStorage.getItem(progKey);

      if (raw) {
        try {
          const { answered, total } = JSON.parse(raw);
          if (total > 0 && answered >= total) {
            acc.push(part.id);
          }
        } catch {
          // ignore
        }
      }
      return acc;
    }, []);

    setUnlockedParts([...new Set([...initialUnlocked, ...autoUnlocked])]);
  }, [examId, subjectId, parts]);

  return (
    <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
      {parts.map((part) => {
        const isUnlocked = unlockedParts.includes(part.id);

        // load progress
        const progKey = `prc_progress_${examId}_${subjectId}_${part.id}`;
        const raw = localStorage.getItem(progKey);
        let percent = 0;
        let hasProgress = false;

        if (raw) {
          try {
            const { answered, total } = JSON.parse(raw);
            percent = total > 0 ? Math.round((answered / total) * 100) : 0;
            hasProgress = true;
          } catch {
            // ignore
          }
        } else if (isUnlocked) {
          // unlocked but no record
          hasProgress = true;
          percent = 0;
        }

        return (
          <Link
            key={part.id}
            href={
              isUnlocked
                ? `/exams/${examId}/subjects/${subjectId}/parts/${part.id}/questions`
                : '#'
            }
            onClick={(e) => {
              if (!isUnlocked) e.preventDefault();
            }}
            className={`
              p-5 bg-white border rounded-2xl shadow-sm transition-transform
              flex flex-col justify-between min-h-[150px]
              ${isUnlocked
                ? 'hover:shadow-md hover:-translate-y-1 cursor-pointer'
                : 'opacity-50 cursor-not-allowed'}
            `}
          >
            <div>
              <h2 className="text-lg font-semibold text-gray-800">{part.name}</h2>
              {hasProgress && (
                <p className="mt-2 text-sm text-green-600">{percent}% completed</p>
              )}
            </div>

            {!isUnlocked && (
              <p className="mt-4 text-red-500 text-sm">
                Unlock by finishing Part {part.id - 1}
              </p>
            )}
          </Link>
        );
      })}
    </div>
  );
};

export default React.memo(PartsGrid);
