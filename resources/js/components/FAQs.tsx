import React from 'react';

const FAQs: React.FC = () => {
    const faqs = [
        { q: 'Is PRC Board Reviewers PH really free?', a: 'Yes! All reviewers are 100% free to access anytime.' },
        { q: 'How often do you update your reviewers?', a: 'We regularly add new questions and explanations to keep the content fresh.' },
        { q: 'Can I use this on mobile?', a: 'Absolutely! The platform is mobile-friendly for studying on the go.' },
    ];

    return (
        <section className="bg-gray-100 py-12">
            <div className="max-w-7xl mx-auto px-6">
                <h2 className="text-3xl font-bold text-center mb-8 text-green-700">Frequently Asked Questions</h2>
                <div className="space-y-6">
                    {faqs.map((faq, idx) => (
                        <div key={idx} className="p-4 border rounded-lg bg-white hover:shadow-sm transition duration-200">
                            <p className="font-bold text-green-700">{faq.q}</p>
                            <p className="mt-2 text-gray-600">{faq.a}</p>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
};

export default FAQs;
