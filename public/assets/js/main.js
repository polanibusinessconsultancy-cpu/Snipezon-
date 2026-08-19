/**
 * Snipezon - Main Application & Homepage Script
 * Global initialization, performance-optimized pointer parallax for visual wrappers, tab visibility handler, dynamic copyright year.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  // Update Footer Dynamic Year
  const yearElement = document.getElementById('current-year');
  if (yearElement) {
    yearElement.textContent = new Date().getFullYear().toString();
  }

  // Prevent empty anchor clicks from jumping to top
  document.querySelectorAll('a[href="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      e.preventDefault();
    });
  });

  // ==========================================
  // Pointer Parallax (Scoped to visual wrappers)
  // ==========================================
  const parallaxWrapper = document.querySelector('.hero-visual-wrapper, .command-centre-wrapper');
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const isTouchDevice = (navigator.maxTouchPoints > 0 || window.matchMedia('(pointer: coarse)').matches);

  if (parallaxWrapper && !prefersReducedMotion && !isTouchDevice) {
    let ticking = false;
    let mouseX = 0;
    let mouseY = 0;
    let targetX = 0;
    let targetY = 0;
    let currentX = 0;
    let currentY = 0;

    const updateParallax = () => {
      currentX += (targetX - currentX) * 0.1;
      currentY += (targetY - currentY) * 0.1;

      parallaxWrapper.style.transform = `translate3d(${currentX.toFixed(2)}px, ${currentY.toFixed(2)}px, 0)`;

      if (Math.abs(targetX - currentX) > 0.05 || Math.abs(targetY - currentY) > 0.05) {
        requestAnimationFrame(updateParallax);
      } else {
        ticking = false;
      }
    };

    const handleMouseMove = (e) => {
      if (document.hidden) return;
      const bounds = parallaxWrapper.getBoundingClientRect();
      mouseX = e.clientX - (bounds.left + bounds.width / 2);
      mouseY = e.clientY - (bounds.top + bounds.height / 2);

      targetX = (mouseX / bounds.width) * 14;
      targetY = (mouseY / bounds.height) * 14;

      if (!ticking) {
        ticking = true;
        requestAnimationFrame(updateParallax);
      }
    };

    const resetParallax = () => {
      targetX = 0;
      targetY = 0;
      if (!ticking) {
        ticking = true;
        requestAnimationFrame(updateParallax);
      }
    };

    document.addEventListener('mousemove', handleMouseMove, { passive: true });
    document.addEventListener('mouseleave', resetParallax, { passive: true });
  }

  // ==========================================
  // Tab Visibility Listener (Pause animations when hidden)
  // ==========================================
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      document.body.classList.add('tab-hidden');
    } else {
      document.body.classList.remove('tab-hidden');
    }
  });

  console.log('Snipezon main script initialized.');
});
