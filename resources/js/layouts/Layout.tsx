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
 * Global layout wrapper: includes Head for meta and AdSense script,
 * navbar, footer, and main content area.
 */
const Layout: React.FC<LayoutProps> = ({ children }) => {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <>
      {/* Global head: meta tags, AdSense script */}
      <Head>
        <script
          async
          src="https://pagead2.googlesyndication.com/pagead/js?client=ca-pub-5380449482931469"
          crossOrigin="anonymous"
        ></script>
      </Head>

      {/* Navbar */}
      <nav className="bg-green-700 text-white shadow-md">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <Link href="/" className="text-2xl font-bold">
              PRC Board Reviewers PH
            </Link>
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
        <div className={`md:hidden overflow-hidden transition-max-height duration-300 ${
          isOpen ? 'max-h-40' : 'max-h-0'
        }`}>
          <div className="px-4 pt-2 pb-4 space-y-2 bg-green-600">
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
        </div>
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
          © {new Date().getFullYear()} PRC Board Reviewers PH. All rights reserved.
        </div>
      </footer>
    </>
  );
};

export default Layout;
