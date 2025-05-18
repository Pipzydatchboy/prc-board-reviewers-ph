// resources/js/layouts/Layout.tsx
import React, { useState, ReactNode } from 'react';
import { Head, Link } from '@inertiajs/react';

interface LayoutProps {
  children: ReactNode;
}

const navItems = [
  { label: 'Home', href: '/' },
  { label: 'Exams', href: '/exams' },
  { label: 'About', href: '/about' },
  { label: 'Donation', href: '/donation' },
];

/**
 * Global layout wrapper: navbar (desktop + mobile), footer, and main content area.
 */
const Layout: React.FC<LayoutProps> = ({ children }) => {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <>
      {/* Inertia Head (for page titles, meta tags, etc.) */}
      <Head>
        {/* OneSignal SDK loader */}
        <script
          src="https://cdn.onesignal.com/sdks/web/v16/OneSignalSDK.page.js"
          defer
        />
        {/* OneSignal init for production */}
        <script dangerouslySetInnerHTML={{ __html: `
          window.OneSignal = window.OneSignal || [];
          OneSignal.push(function() {
            OneSignal.init({
              appId: 'e5530784-caef-4c7b-8a92-fdd8a0379016'
            });
            // Automatically prompt the user for notification permission
            OneSignal.showNativePrompt();
          });
          });
        `}} />
      </Head>

      {/* Navbar */}
      <nav className="bg-green-700 text-white shadow-md">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <Link href="/" className="text-2xl font-bold">
              PRC Board Reviewers PH
            </Link>

            {/* Desktop menu */}
            <div className="hidden md:flex space-x-6">
              {navItems.map(item => (
                <Link
                  key={item.label}
                  href={item.href}
                  className="px-3 py-2 rounded-md hover:bg-yellow-300 hover:text-green-700 transition"
                >
                  {item.label}
                </Link>
              ))}
            </div>

            {/* Mobile toggle */}
            <button
              className="md:hidden focus:outline-none"
              onClick={() => setIsOpen(!isOpen)}
              aria-label="Toggle menu"
            >
              <span className="text-3xl">☰</span>
            </button>
          </div>
        </div>

        {/* Mobile menu panel */}
        {isOpen && (
          <div className="md:hidden px-4 pt-2 pb-4 bg-green-600">
            {navItems.map(item => (
              <Link
                key={item.label}
                href={item.href}
                className="block px-3 py-2 rounded-md hover:bg-yellow-300 hover:text-green-700 transition"
              >
                {item.label}
              </Link>
            ))}
          </div>
        )}
      </nav>

      {/* Main content area */}
      <main className="flex-grow bg-gray-50 min-h-screen">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
          {children}
        </div>
      </main>

      {/* Footer */}
      <footer className="bg-green-700 text-white">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-center text-sm">
          © {new Date().getFullYear()} PRC Board Reviewers PH. All rights reserved. {' '}
          <Link href="/privacy-policy" className="underline hover:text-yellow-300">
            Privacy Policy
          </Link>
        </div>
      </footer>
    </>
  );
};

export default Layout;
