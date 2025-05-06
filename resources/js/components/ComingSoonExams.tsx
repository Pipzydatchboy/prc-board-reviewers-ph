import React from 'react';

const ComingSoonExams: React.FC = () => {
    const exams = [
        { name: 'NAPOLCOM Exam' },
        { name: 'Librarian Licensure Exam' },
        { name: 'Midwifery Licensure Exam' },
        { name: 'PNPA Cadet Admission Test' },
        { name: 'Fire Officer Exam' },
        { name: 'Customs Broker Licensure Exam' },
    ];

    return (
        <>
            <h2 className="text-2xl font-bold mb-4 text-center text-gray-600">🚧 Coming Soon</h2>
            <div className="grid gap-6 md:grid-cols-2">
                {exams.map((exam, index) => (
                    <div key={index} className="p-6 bg-gray-100 border rounded-2xl text-center shadow-sm hover:shadow-md transition-transform hover:translate-y-1">
                        <h3 className="text-lg font-semibold text-gray-700">{exam.name}</h3>
                        <p className="mt-2 text-yellow-600 font-medium">Coming Soon!</p>
                    </div>
                ))}
            </div>
        </>
    );
};

export default ComingSoonExams;
