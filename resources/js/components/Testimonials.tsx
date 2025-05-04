import React from 'react';

const Testimonials: React.FC = () => {
    const testimonials = [
        { quote: 'This reviewer helped me pass the Civil Service Exam on my first try!', name: 'Juan D.' },
        { quote: 'I love the explanations after each question. Very helpful for LET preparation!', name: 'Maria S.' },
        { quote: 'The best free reviewer platform I’ve found for NAPOLCOM.', name: 'Carlos R.' }
    ];

    return (
        <section className="max-w-7xl mx-auto px-6 py-12">
            <h2 className="text-3xl font-bold text-center mb-8 text-green-700">What Our Users Say</h2>
            <div className="grid md:grid-cols-3 gap-6 text-gray-700">
                {testimonials.map((t, idx) => (
                    <div key={idx} className="p-4 border rounded-lg bg-white hover:shadow-sm">
                        <p className="italic">“{t.quote}”</p>
                        <p className="mt-2 font-bold text-green-700">{t.name}</p>
                    </div>
                ))}
            </div>
        </section>
    );
};

export default Testimonials;
