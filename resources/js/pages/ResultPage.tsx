import React, { useEffect, useState } from 'react';
import { usePage } from '@inertiajs/react';

// Custom function to extract parameters from the URL
const extractParams = (url: string) => {
    const regex = /exams\/(\d+)\/subjects\/([^/]+)\/parts\/(\d+)\/result/;
    const match = url.match(regex);
    if (match) {
        return {
            examId: match[1],
            subjectId: match[2],
            partId: match[3],
        };
    }
    return null;
};

const ResultPage: React.FC = () => {
    const { url } = usePage();  // Get current URL
    const params = extractParams(url);

    const [result, setResult] = useState<any>(null);

    useEffect(() => {
        if (params) {
            const key = `cse_${params.subjectId}_part${params.partId}`;
            const storedResult = localStorage.getItem(key);
            if (storedResult) {
                setResult(JSON.parse(storedResult));
            }
        }
    }, [params]);

    if (!params) {
        return <p className="p-6">Invalid URL structure.</p>;
    }

    if (!result) {
        return (
            <div className="p-6">
                <h1 className="text-2xl font-bold mb-4">Result Page</h1>
                <p>No result found for this part.</p>
            </div>
        );
    }

    const percentage = ((result.score || 0) / 20) * 100;
    const displayTime = result.time || 'No time recorded';

    return (
        <div className="p-6">
            <h1 className="text-2xl font-bold mb-4">Result Page</h1>
            <p><strong>Exam ID:</strong> {params.examId}</p>
            <p><strong>Subject:</strong> {params.subjectId.replace('-', ' ')}</p>
            <p><strong>Part:</strong> {params.partId}</p>
            <p><strong>Score:</strong> {result.score} out of {result.total}</p>
            <p><strong>Percentage:</strong> {percentage.toFixed(2)}%</p>
            <p><strong>Time:</strong> {displayTime}</p>
        </div>
    );
};

export default ResultPage;
