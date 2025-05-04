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
  // Default unlocked part is 1
  const [unlockedParts, setUnlockedParts] = useState<number[]>([1]);

  // Load unlocked parts from localStorage
  useEffect(() => {
    const key = `prc_unlocked_${examId}_${subjectId}`;
    const stored = localStorage.getItem(key);
    if (stored) {
      try {
        const parsed = JSON.parse(stored);
        if (Array.isArray(parsed)) {
          setUnlockedParts(parsed.map((n: any) => Number(n)));
        }
      } catch {
        // ignore malformed data
      }
    }
  }, [examId, subjectId]);

  return (
    <div className="grid gap-6 md:grid-cols-2">
      {parts.map((part) => {
        const isUnlocked = unlockedParts.includes(part.id);

        // Load progress for this part
        const progressKey = `prc_progress_${examId}_${subjectId}_${part.id}`;
        const rawProgress = localStorage.getItem(progressKey);
        let percent = 0;
        if (rawProgress) {
          try {
            const { answered, total } = JSON.parse(rawProgress);
            percent = total > 0 ? Math.round((answered / total) * 100) : 0;
          } catch {
            // ignore malformed
          }
        }

        return (
          <Link
            key={part.id}
            href={
              isUnlocked
                ? `/exams/${examId}/subjects/${subjectId}/parts/${part.id}/questions`
                : '#'
            }
            className={`p-6 bg-white border rounded-2xl shadow-sm transition-transform flex flex-col justify-between h-32
              ${isUnlocked
                ? 'hover:shadow-md hover:-translate-y-1 cursor-pointer'
                : 'opacity-50 cursor-not-allowed'}
            `}
            onClick={(e) => {
              if (!isUnlocked) e.preventDefault();
            }}
          >
            <div>
              <h2 className="text-xl font-semibold text-gray-800">Part {part.id}</h2>
              {isUnlocked && (
                <p className="mt-1 text-sm text-green-600">
                  {percent}% completed
                </p>
              )}
            </div>
            {!isUnlocked ? (
              <p className="mt-2 text-red-500 text-sm">
                Unlock by passing Part {part.id - 1}
              </p>
            ) : null}
          </Link>
        );
      })}
    </div>
  );
};

export default React.memo(PartsGrid);
