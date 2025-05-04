import '../css/app.css';

import { createInertiaApp } from '@inertiajs/react';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createRoot } from 'react-dom/client';
import { initializeTheme } from './hooks/use-appearance';
import { Suspense } from 'react';

// App name from .env or fallback
const appName = import.meta.env.VITE_APP_NAME || 'PRC Board Reviewers PH';

// Create Inertia App
createInertiaApp({
  // Use exactly the title passed from <Head>, or fallback to appName
  title: (title) => title || appName,

  resolve: (name) => {
    // Lazy load all pages
    return resolvePageComponent(
      `./pages/${name}.tsx`,
      import.meta.glob('./pages/**/*.tsx')
    );
  },

  setup({ el, App, props }) {
    const root = createRoot(el);
    root.render(
      <Suspense fallback={<div className="text-center py-12">Loading...</div>}>
        <App {...props} />
      </Suspense>
    );
  },

  progress: {
    color: '#4B5563', // Loading bar color (gray)
  },
});

// Initialize dark/light mode on page load
initializeTheme();
