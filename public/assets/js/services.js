/**
 * Snipezon - Service Detail Pages Reusable Interactive Script
 * Provides scoped interactions for service detail pages (hotspots, architecture diagram highlights,
 * smooth anchor scrolling, and process stage focus).
 * Safely exits on non-service pages.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const servicePage = document.querySelector('[data-page="service-detail"]');
  if (!servicePage) return; // Safely exit on non-service pages

  // 1. Architecture Diagram Hotspots / Nodes Interaction
  const archNodes = document.querySelectorAll('.arch-node');
  archNodes.forEach(node => {
    node.addEventListener('mouseenter', () => {
      node.classList.add('is-active');
    });
    node.addEventListener('mouseleave', () => {
      node.classList.remove('is-active');
    });
  });

  // 2. Showcase Hotspot Tooltips (if present)
  const hotspots = document.querySelectorAll('.showcase-hotspot');
  hotspots.forEach(spot => {
    spot.addEventListener('click', (e) => {
      e.preventDefault();
      hotspots.forEach(s => s.classList.remove('active'));
      spot.classList.add('active');
    });
  });

  // 3. Document Visibility Optimization
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
      document.body.classList.add('animations-paused');
    } else {
      document.body.classList.remove('animations-paused');
    }
  });
});
