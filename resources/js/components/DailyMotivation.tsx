// resources/js/components/DailyMotivation.tsx

import React, { useState, useEffect } from 'react';

const MESSAGES = [
  "Trust in God’s plan as you prepare; He gives you strength for each study session.",
  "Begin each study time with a prayer asking for wisdom and focus.",
  "Remember: your effort honors God, no matter the outcome.",
  "When you feel overwhelmed, pause and let His peace calm your mind.",
  "Every chapter you review is a step closer to growing in faith and knowledge.",
  "God’s grace is enough—even when the material feels hard.",
  "Pray over each verse; let His Spirit guide your understanding.",
  "A peaceful heart studies better: invite God’s presence into your work.",
  "Thank God for the opportunity to learn His Word and serve others.",
  "Small progress each day pleases God; keep taking steady steps forward.",
  "When you’re tired, ask God to renew your strength and give you rest.",
  "Let God’s love be your motivation—He cares more about your heart than a grade.",
  "Study with a grateful heart: every answer is a gift from Him.",
  "When doubt creeps in, remember that God believes in you and your purpose.",
  "Keep your eyes on Christ; He walks with you through every challenge.",
  "Study with humility: ask God to teach you what you still don’t know.",
  "Your willingness to learn honors God’s calling on your life.",
  "Even tough chapters can bless you—God uses challenges to grow you.",
  "Pray for clarity before each practice quiz; let His light guide your mind.",
  "Remember your “why”: you study to serve others and glorify God.",
  "God gave you this season to grow—embrace it with joy and perseverance.",
  "Let each success and mistake point you back to His grace.",
  "Stay disciplined in prayer and study; God rewards faithful effort.",
  "Keep a thankful attitude: every answered question is God’s provision.",
  "When stress builds, fix your eyes on Jesus and breathe in His promise of peace.",
  "Ask God to help you trust Him more than your own abilities.",
  "Surround yourself with scripture that reminds you of His faithfulness.",
  "Pray for fellow students; lifting others up honors God’s love.",
  "As you study, remember: God’s power works best in your weakness.",
  "Finish each day by thanking God for how He has helped you learn and grow."
];


export default function DailyMotivation() {
  const [visible, setVisible] = useState(false);
  const [message, setMessage] = useState<string>("");

  useEffect(() => {
    // Build a YYYY-MM-DD key for today
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    const dateKey = `${yyyy}-${mm}-${dd}`;

    // If we already closed it today, do nothing
    const dismissed = window.localStorage.getItem("motivationDismissedDate");
    if (dismissed === dateKey) return;

    // Pick a “day of year” index into our MESSAGES array
    const startOfYear = new Date(today.getFullYear(), 0, 0);
    const diff = today.getTime() - startOfYear.getTime();
    const oneDay = 1000 * 60 * 60 * 24;
    const dayOfYear = Math.floor(diff / oneDay);
    const index = dayOfYear % MESSAGES.length;

    setMessage(MESSAGES[index]);
    setVisible(true);
  }, []);

  const handleClose = () => {
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    const dateKey = `${yyyy}-${mm}-${dd}`;
    window.localStorage.setItem("motivationDismissedDate", dateKey);
    setVisible(false);
  };

  if (!visible) return null;

  return (
    <div className="mt-4 p-4 bg-yellow-50 border-l-4 border-yellow-400 rounded shadow-sm max-w-3xl mx-auto">
      <div className="flex justify-between items-start">
        <p className="text-yellow-800">{message}</p>
        <button
          onClick={handleClose}
          className="ml-4 text-yellow-600 hover:text-yellow-800"
          aria-label="Close daily message"
        >
          ×
        </button>
      </div>
    </div>
  );
}
