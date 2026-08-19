/**
 * Snipezon - Portfolio Interactive Functionality
 * Manages capability filtering, accessible aria-live status announcements,
 * keyboard accessibility, and smooth anchor scrolling.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const portfolioPage = document.querySelector('[data-page="portfolio"]');
  // Safely exit if not on Portfolio page
  if (!portfolioPage) return;

  const filterContainer = document.getElementById('portfolio-filters');
  const projectCards = document.querySelectorAll('.portfolio-project-card');
  const liveStatus = document.getElementById('filter-results-status');

  if (filterContainer && projectCards.length > 0) {
    const filterButtons = filterContainer.querySelectorAll('.filter-btn');

    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const filterVal = btn.getAttribute('data-filter');

        // Update aria-pressed and active classes
        filterButtons.forEach(b => {
          b.classList.remove('active');
          b.setAttribute('aria-pressed', 'false');
        });
        btn.classList.add('active');
        btn.setAttribute('aria-pressed', 'true');

        let visibleCount = 0;

        projectCards.forEach(card => {
          const categories = card.getAttribute('data-category') || '';
          const matches = filterVal === 'all' || categories.split(' ').includes(filterVal);

          if (matches) {
            card.style.display = 'flex';
            card.hidden = false;
            card.removeAttribute('aria-hidden');
            card.querySelectorAll('a, button').forEach(el => el.removeAttribute('tabindex'));
            visibleCount++;
          } else {
            card.style.display = 'none';
            card.hidden = true;
            card.setAttribute('aria-hidden', 'true');
            card.querySelectorAll('a, button').forEach(el => el.setAttribute('tabindex', '-1'));
          }
        });

        // Announce result to screen readers
        if (liveStatus) {
          const filterLabel = btn.textContent.trim();
          liveStatus.textContent = `Showing ${visibleCount} project${visibleCount === 1 ? '' : 's'} for ${filterLabel}.`;
        }
      });
    });
  }
});
