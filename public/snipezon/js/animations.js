/**
 * Snipezon - Scroll Animations Module
 * Uses IntersectionObserver to reveal elements as they enter the viewport.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  // Check reduced motion preference
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  const animatedElements = document.querySelectorAll('[data-animate]');
  if (animatedElements.length === 0) return;

  if (prefersReducedMotion || !('IntersectionObserver' in window)) {
    // Reveal all elements immediately if reduced motion preferred or observer unsupported
    animatedElements.forEach(el => el.classList.add('is-animated'));
    return;
  }

  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -50px 0px',
    threshold: 0.12
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const delay = target.getAttribute('data-delay') || 0;

        setTimeout(() => {
          target.classList.add('is-animated');
        }, parseInt(delay, 10));

        obs.unobserve(target); // Unobserve after animating once
      }
    });
  }, observerOptions);

  animatedElements.forEach(el => observer.observe(el));
});
