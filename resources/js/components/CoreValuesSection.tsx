import React from 'react';

const CoreValuesSection: React.FC = () => {
    const coreValues = [
        { title: 'Accessibility', description: 'We believe that every aspiring professional deserves free access to quality learning resources.' },
        { title: 'Excellence', description: 'We commit to providing reliable and updated reviewers that help users pass their exams confidently.' },
        { title: 'Integrity', description: 'We uphold honesty and transparency in delivering accurate information and fair assessments.' },
        { title: 'Empowerment', description: 'We aim to empower Filipinos to achieve their goals and uplift their communities through education.' },
    ];

    return (
        <section className="max-w-4xl mx-auto px-6 py-12">
            <h2 className="text-3xl font-bold text-green-700 text-center mb-8">💡 Our Core Values</h2>
            <div className="grid gap-6 md:grid-cols-2">
                {coreValues.map((value, index) => (
                    <div key={index} className="p-6 bg-white border rounded-lg shadow-sm hover:shadow-md transition-transform hover:translate-y-1">
                        <h3 className="text-xl font-bold text-green-700 mb-2">{value.title}</h3>
                        <p className="text-gray-600">{value.description}</p>
                    </div>
                ))}
            </div>
        </section>
    );
};

export default CoreValuesSection;
