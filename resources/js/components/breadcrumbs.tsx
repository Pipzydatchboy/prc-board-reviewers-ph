import React from 'react';
import { Link } from '@inertiajs/react';

// Breadcrumb item type
type Breadcrumb = {
  label: string;
  href?: string; // Optional for the current page (no link)
};

type BreadcrumbsProps = {
  items: Breadcrumb[];
};

const Breadcrumbs: React.FC<BreadcrumbsProps> = ({ items }) => {
  // Remove any empty or whitespace-only labels
  const filteredItems = items.filter(item => item.label && item.label.trim() !== '');

  return (
    <nav aria-label="Breadcrumb" className="text-sm text-gray-600 mb-4 overflow-x-auto whitespace-nowrap">
      <ol className="flex items-center">
        {filteredItems.map((item, index) => (
          <li key={index} className="flex items-center">
            {item.href ? (
              <Link href={item.href} className="hover:underline text-green-700">
                {item.label}
              </Link>
            ) : (
              <span className="text-gray-500" aria-current="page">
                {item.label}
              </span>
            )}

            {/* Only render slash between items */}
            {index < filteredItems.length - 1 && <span className="mx-2">/</span>}
          </li>
        ))}
      </ol>
    </nav>
  );
};

export default React.memo(Breadcrumbs);
