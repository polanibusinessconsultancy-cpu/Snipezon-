/**
 * Snipezon - UI Interactions & Reusable Component Helpers Module
 * Back to top, button ripples, WhatsApp interaction listener, reusable SnipezonAccordion, SnipezonTabs, Toast helpers.
 */

'use strict';

// ==========================================
// 1. Reusable Accordion Class Architecture
// ==========================================
class SnipezonAccordion {
  constructor(containerSelector) {
    this.container = typeof containerSelector === 'string' 
      ? document.querySelector(containerSelector) 
      : containerSelector;
    if (!this.container) return;
    this.init();
  }

  init() {
    const items = this.container.querySelectorAll('.faq-item, .accordion-item');
    items.forEach(item => {
      const btn = item.querySelector('.faq-button, .accordion-header');
      const panel = item.querySelector('.faq-panel, .accordion-panel');
      if (!btn || !panel) return;

      // Set initial dynamic max-height for items open by default
      if (item.classList.contains('is-open')) {
        btn.setAttribute('aria-expanded', 'true');
        panel.style.maxHeight = panel.scrollHeight + 'px';
      } else {
        btn.setAttribute('aria-expanded', 'false');
        panel.style.maxHeight = '0px';
      }

      // Single click event listener
      btn.addEventListener('click', () => {
        this.toggle(item, btn, panel);
      });

      // Keyboard navigation (Enter / Space)
      btn.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          this.toggle(item, btn, panel);
        }
      });
    });

    // Handle window resize so open panels dynamically recalculate max-height
    window.addEventListener('resize', () => {
      const openItems = this.container.querySelectorAll('.faq-item.is-open, .accordion-item.is-open');
      openItems.forEach(item => {
        const panel = item.querySelector('.faq-panel, .accordion-panel');
        if (panel) {
          panel.style.maxHeight = panel.scrollHeight + 'px';
        }
      });
    }, { passive: true });
  }

  toggle(targetItem, targetBtn, targetPanel) {
    const isOpen = targetItem.classList.contains('is-open');
    const allItems = this.container.querySelectorAll('.faq-item, .accordion-item');

    // Close all items in container for accordion single-open behavior
    allItems.forEach(item => {
      item.classList.remove('is-open');
      const btn = item.querySelector('.faq-button, .accordion-header');
      const panel = item.querySelector('.faq-panel, .accordion-panel');
      if (btn) btn.setAttribute('aria-expanded', 'false');
      if (panel) panel.style.maxHeight = '0px';
    });

    // If target was not open, open it
    if (!isOpen) {
      targetItem.classList.add('is-open');
      targetBtn.setAttribute('aria-expanded', 'true');
      targetPanel.style.maxHeight = targetPanel.scrollHeight + 'px';
    }
  }
}

// Global Export for programmatic usage if needed
window.SnipezonAccordion = SnipezonAccordion;

document.addEventListener('DOMContentLoaded', () => {
  // Initialize all accordions on the current page automatically
  const accordionContainers = document.querySelectorAll('.faq-container, .accordion-container');
  accordionContainers.forEach(container => {
    new SnipezonAccordion(container);
  });

  // ==========================================
  // 2. Back To Top Button Logic
  // ==========================================
  const backToTopBtn = document.querySelector('.back-to-top');

  if (backToTopBtn) {
    const handleScrollVisibility = () => {
      if (window.scrollY > 400) {
        backToTopBtn.classList.add('is-visible');
      } else {
        backToTopBtn.classList.remove('is-visible');
      }
    };

    window.addEventListener('scroll', handleScrollVisibility, { passive: true });
    handleScrollVisibility();

    backToTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // ==========================================
  // 3. Floating WhatsApp Pulse Stop Listener
  // ==========================================
  const floatingWhatsApp = document.querySelector('.floating-whatsapp');
  if (floatingWhatsApp) {
    floatingWhatsApp.addEventListener('click', () => {
      floatingWhatsApp.classList.remove('has-pulse');
    });
  }

  // ==========================================
  // 4. Button Ripple Effect Handler
  // ==========================================
  const buttons = document.querySelectorAll('.button, .button-primary, .button-secondary');

  buttons.forEach(btn => {
    btn.addEventListener('click', function (e) {
      const rect = this.getBoundingClientRect();
      const ripple = document.createElement('span');
      const diameter = Math.max(rect.width, rect.height);
      const radius = diameter / 2;

      ripple.style.width = ripple.style.height = `${diameter}px`;
      ripple.style.left = `${e.clientX - rect.left - radius}px`;
      ripple.style.top = `${e.clientY - rect.top - radius}px`;
      ripple.classList.add('btn-ripple');

      const existingRipple = this.querySelector('.btn-ripple');
      if (existingRipple) {
        existingRipple.remove();
      }

      this.appendChild(ripple);

      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });
});

// ==========================================
// 5. Reusable Tabs Class Architecture
// ==========================================
class SnipezonTabs {
  constructor(containerSelector) {
    this.container = document.querySelector(containerSelector);
    if (!this.container) return;
    this.init();
  }

  init() {
    const tabButtons = this.container.querySelectorAll('.tab-button');
    const tabPanels = this.container.querySelectorAll('.tab-panel');

    tabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const target = btn.getAttribute('data-tab');

        tabButtons.forEach(b => b.classList.remove('active'));
        tabPanels.forEach(p => p.classList.remove('active'));

        btn.classList.add('active');
        const activePanel = this.container.querySelector(`#tab-panel-${target}`);
        if (activePanel) activePanel.classList.add('active');
      });
    });
  }
}
window.SnipezonTabs = SnipezonTabs;

// ==========================================
// 6. Reusable Toast Notification Helper
// ==========================================
window.showSnipezonToast = function (message, type = 'info') {
  let toastContainer = document.querySelector('.toast-container');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.className = 'toast-container';
    document.body.appendChild(toastContainer);
  }

  const toast = document.createElement('div');
  toast.className = `toast-item toast-${type}`;
  toast.textContent = message;

  toastContainer.appendChild(toast);

  setTimeout(() => {
    toast.classList.add('is-show');
  }, 10);

  setTimeout(() => {
    toast.classList.remove('is-show');
    setTimeout(() => toast.remove(), 300);
  }, 3500);
};
