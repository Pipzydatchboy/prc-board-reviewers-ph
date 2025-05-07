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
        // ignore malformed data
      }
    }

    // Auto-unlock parts with full progress
    const autoUnlocked = parts.reduce<number[]>((acc, part) => {
      const progressKey = `prc_progress_${examId}_${subjectId}_${part.id}`;
      const raw = localStorage.getItem(progressKey);
      if (raw) {
        try {
          const { answered, total } = JSON.parse(raw);
          if (total > 0 && answered >= total) {
            acc.push(part.id);
          }
        } catch {
          // ignore parse errors
        }
      }
      return acc;
    }, []);

    setUnlockedParts(Array.from(new Set([...initialUnlocked, ...autoUnlocked])));
  }, [examId, subjectId, parts]);

  return (
    <div className="grid gap-6 md:grid-cols-2">
      {parts.map((part) => {
        const isUnlocked = unlockedParts.includes(part.id);

        // Load progress for this part
        const progressKey = `prc_progress_${examId}_${subjectId}_${part.id}`;
        const raw = localStorage.getItem(progressKey);
        let percent = 0;
        let hasProgress = false;

        if (raw) {
          try {
            const { answered, total } = JSON.parse(raw);
            percent = total > 0 ? Math.round((answered / total) * 100) : 0;
            hasProgress = true;
          } catch {
            // ignore malformed progress data
          }
        } else if (isUnlocked) {
          // if auto-unlocked but no progress record, show full
          percent = 100;
          hasProgress = true;
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
              <h2 className="text-xl font-semibold text-gray-800">{part.name}</h2>
              {hasProgress && (
                <p className="mt-1 text-sm text-green-600">
                  {percent}% completed
                </p>
              )}
            </div>

            {!isUnlocked && (
              <p className="mt-2 text-red-500 text-sm">
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
