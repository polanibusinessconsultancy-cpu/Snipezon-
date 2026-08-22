/**
 * Snipezon - Service Detail Pages Reusable Interactive Script
 * Provides scoped interactions for service detail pages (hotspots, architecture diagram highlights,
 * smooth anchor scrolling, and process stage focus).
 * Safely exits on non-service pages.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  // 1. General Supply Requirement Group Cards Prefill & Smooth Scroll
  const reqCards = document.querySelectorAll('.requirement-group-card');
  reqCards.forEach(card => {
    const handleActivate = (e) => {
      e.preventDefault();
      const category = card.getAttribute('data-category');
      const reqName = card.getAttribute('data-req-name') || card.querySelector('.req-card-title')?.textContent.trim();

      const catSelect = document.getElementById('quote-category');
      const itemsTextarea = document.getElementById('quote-items');
      const quoteSection = document.getElementById('request-quote');

      if (catSelect && category) {
        catSelect.value = category;
      }

      if (itemsTextarea && reqName) {
        const currentVal = itemsTextarea.value.trim();
        if (currentVal) {
          if (!currentVal.includes(reqName)) {
            itemsTextarea.value = currentVal + '\n- ' + reqName;
          }
        } else {
          itemsTextarea.value = 'Required Item: ' + reqName;
        }
      }

      if (quoteSection) {
        const headerHeight = document.querySelector('.site-header')?.offsetHeight || 80;
        const targetTop = quoteSection.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
        window.scrollTo({ top: targetTop, behavior: 'smooth' });
      }

      if (catSelect) {
        catSelect.focus();
      }
    };

    card.addEventListener('click', handleActivate);
    card.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        handleActivate(e);
      }
    });
  });

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

  // 4. Customer Care Hub Dashboard Scoped Interaction
  const careHub = document.getElementById('care-hub-dashboard');
  if (careHub) {
    const tabs = Array.from(careHub.querySelectorAll('[role="tab"]'));
    const panels = Array.from(careHub.querySelectorAll('[role="tabpanel"]'));

    const activateTab = (targetPanelId) => {
      panels.forEach(panel => {
        if (panel.id === targetPanelId) {
          panel.removeAttribute('hidden');
        } else {
          panel.setAttribute('hidden', '');
        }
      });

      tabs.forEach(t => {
        const controlsId = t.getAttribute('aria-controls');
        const isActive = (controlsId === targetPanelId);
        t.classList.toggle('active', isActive);
        t.setAttribute('aria-selected', isActive ? 'true' : 'false');
        t.setAttribute('tabindex', isActive ? '0' : '-1');
      });
    };

    tabs.forEach((t) => {
      t.addEventListener('click', () => {
        const targetPanelId = t.getAttribute('aria-controls');
        activateTab(targetPanelId);
      });

      t.addEventListener('keydown', (e) => {
        const list = Array.from(t.parentElement.querySelectorAll('[role="tab"]'));
        const currentIdx = list.indexOf(t);
        let nextIdx = null;

        if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
          e.preventDefault();
          nextIdx = (currentIdx + 1) % list.length;
        } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
          e.preventDefault();
          nextIdx = (currentIdx - 1 + list.length) % list.length;
        } else if (e.key === 'Home') {
          e.preventDefault();
          nextIdx = 0;
        } else if (e.key === 'End') {
          e.preventDefault();
          nextIdx = list.length - 1;
        }

        if (nextIdx !== null) {
          const nextTab = list[nextIdx];
          nextTab.focus();
          const targetPanelId = nextTab.getAttribute('aria-controls');
          activateTab(targetPanelId);
        }
      });
    });
  }

  // 5. Sales Bots Dashboard Scoped Interaction
  const salesBotHub = document.getElementById('sales-bots-dashboard');
  if (salesBotHub) {
    const sbTabs = Array.from(salesBotHub.querySelectorAll('[role="tab"]'));
    const sbPanels = Array.from(salesBotHub.querySelectorAll('[role="tabpanel"]'));

    const activateSbTab = (targetPanelId) => {
      sbPanels.forEach(panel => {
        if (panel.id === targetPanelId) {
          panel.removeAttribute('hidden');
        } else {
          panel.setAttribute('hidden', '');
        }
      });

      sbTabs.forEach(t => {
        const controlsId = t.getAttribute('aria-controls');
        const isActive = (controlsId === targetPanelId);
        t.classList.toggle('active', isActive);
        t.setAttribute('aria-selected', isActive ? 'true' : 'false');
        t.setAttribute('tabindex', isActive ? '0' : '-1');
      });
    };

    sbTabs.forEach((t) => {
      t.addEventListener('click', () => {
        const targetPanelId = t.getAttribute('aria-controls');
        activateSbTab(targetPanelId);
      });

      t.addEventListener('keydown', (e) => {
        const list = Array.from(t.parentElement.querySelectorAll('[role="tab"]'));
        const currentIdx = list.indexOf(t);
        let nextIdx = null;

        if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
          e.preventDefault();
          nextIdx = (currentIdx + 1) % list.length;
        } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
          e.preventDefault();
          nextIdx = (currentIdx - 1 + list.length) % list.length;
        } else if (e.key === 'Home') {
          e.preventDefault();
          nextIdx = 0;
        } else if (e.key === 'End') {
          e.preventDefault();
          nextIdx = list.length - 1;
        }

        if (nextIdx !== null) {
          const nextTab = list[nextIdx];
          nextTab.focus();
          const targetPanelId = nextTab.getAttribute('aria-controls');
          activateSbTab(targetPanelId);
        }
      });
    });
  }

  // 6. AI Chatbot Control Center Scoped Interaction (#ai-chatbot-showcase)
  const chatbotShowcase = document.getElementById('ai-chatbot-showcase');
  if (chatbotShowcase) {
    const controls = Array.from(chatbotShowcase.querySelectorAll('[data-chatbot-target]'));
    const panels = Array.from(chatbotShowcase.querySelectorAll('[data-chatbot-panel]'));

    const activateChatbotTarget = (targetKey) => {
      // 1. Synchronize all sidebar and bottom controls
      controls.forEach(ctrl => {
        const isMatch = (ctrl.getAttribute('data-chatbot-target') === targetKey);
        ctrl.classList.toggle('active', isMatch);
        ctrl.classList.toggle('is-active', isMatch);
        ctrl.setAttribute('aria-selected', isMatch ? 'true' : 'false');
        ctrl.setAttribute('tabindex', isMatch ? '0' : '-1');
      });

      // 2. Hide all panels, show only matching panel
      panels.forEach(panel => {
        const isMatch = (panel.getAttribute('data-chatbot-panel') === targetKey);
        if (isMatch) {
          panel.hidden = false;
          panel.removeAttribute('hidden');
          panel.classList.add('is-active');
          panel.style.display = '';
        } else {
          panel.hidden = true;
          panel.setAttribute('hidden', '');
          panel.classList.remove('is-active');
          panel.style.display = 'none';
        }
      });
    };

    controls.forEach(ctrl => {
      ctrl.addEventListener('click', (e) => {
        e.preventDefault();
        const targetKey = ctrl.getAttribute('data-chatbot-target');
        activateChatbotTarget(targetKey);
      });

      ctrl.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          const targetKey = ctrl.getAttribute('data-chatbot-target');
          activateChatbotTarget(targetKey);
        } else {
          const list = Array.from(ctrl.parentElement.querySelectorAll('[data-chatbot-target]'));
          const currentIdx = list.indexOf(ctrl);
          let nextIdx = null;

          if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
            e.preventDefault();
            nextIdx = (currentIdx + 1) % list.length;
          } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
            e.preventDefault();
            nextIdx = (currentIdx - 1 + list.length) % list.length;
          } else if (e.key === 'Home') {
            e.preventDefault();
            nextIdx = 0;
          } else if (e.key === 'End') {
            e.preventDefault();
            nextIdx = list.length - 1;
          }

          if (nextIdx !== null) {
            const nextCtrl = list[nextIdx];
            nextCtrl.focus();
            const targetKey = nextCtrl.getAttribute('data-chatbot-target');
            activateChatbotTarget(targetKey);
          }
        }
      });
    });
  }

  // 7. Accounting Software Dashboard Scoped Interaction (#accounting-software-dashboard)
  const accShowcase = document.getElementById('accounting-software-dashboard');
  if (accShowcase) {
    const controls = Array.from(accShowcase.querySelectorAll('[data-acc-target]'));
    const panels = Array.from(accShowcase.querySelectorAll('[data-acc-panel]'));

    const activateAccTarget = (targetKey) => {
      // 1. Synchronize all sidebar and bottom controls
      controls.forEach(ctrl => {
        const isMatch = (ctrl.getAttribute('data-acc-target') === targetKey);
        ctrl.classList.toggle('active', isMatch);
        ctrl.classList.toggle('is-active', isMatch);
        ctrl.setAttribute('aria-selected', isMatch ? 'true' : 'false');
        ctrl.setAttribute('tabindex', isMatch ? '0' : '-1');
      });

      // 2. Hide all panels, show only matching panel
      panels.forEach(panel => {
        const isMatch = (panel.getAttribute('data-acc-panel') === targetKey);
        if (isMatch) {
          panel.hidden = false;
          panel.removeAttribute('hidden');
          panel.classList.add('is-active');
          panel.style.display = '';
        } else {
          panel.hidden = true;
          panel.setAttribute('hidden', '');
          panel.classList.remove('is-active');
          panel.style.display = 'none';
        }
      });
    };

    controls.forEach(ctrl => {
      ctrl.addEventListener('click', (e) => {
        e.preventDefault();
        const targetKey = ctrl.getAttribute('data-acc-target');
        activateAccTarget(targetKey);
      });

      ctrl.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          const targetKey = ctrl.getAttribute('data-acc-target');
          activateAccTarget(targetKey);
        } else {
          const list = Array.from(ctrl.parentElement.querySelectorAll('[data-acc-target]'));
          const currentIdx = list.indexOf(ctrl);
          let nextIdx = null;

          if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
            e.preventDefault();
            nextIdx = (currentIdx + 1) % list.length;
          } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
            e.preventDefault();
            nextIdx = (currentIdx - 1 + list.length) % list.length;
          } else if (e.key === 'Home') {
            e.preventDefault();
            nextIdx = 0;
          } else if (e.key === 'End') {
            e.preventDefault();
            nextIdx = list.length - 1;
          }

          if (nextIdx !== null) {
            const nextCtrl = list[nextIdx];
            nextCtrl.focus();
            const targetKey = nextCtrl.getAttribute('data-acc-target');
            activateAccTarget(targetKey);
          }
        }
      });
    });
  }

  // 8. E-commerce Websites Dashboard Scoped Interaction (#ecommerce-websites-dashboard)
  const ecomShowcase = document.getElementById('ecommerce-websites-dashboard');
  if (ecomShowcase) {
    const controls = Array.from(ecomShowcase.querySelectorAll('[data-ecom-target]'));
    const panels = Array.from(ecomShowcase.querySelectorAll('[data-ecom-panel]'));

    const activateEcomTarget = (targetKey) => {
      // 1. Synchronize all sidebar and bottom controls
      controls.forEach(ctrl => {
        const isMatch = (ctrl.getAttribute('data-ecom-target') === targetKey);
        ctrl.classList.toggle('active', isMatch);
        ctrl.classList.toggle('is-active', isMatch);
        ctrl.setAttribute('aria-selected', isMatch ? 'true' : 'false');
        ctrl.setAttribute('tabindex', isMatch ? '0' : '-1');
      });

      // 2. Hide all panels, show only matching panel
      panels.forEach(panel => {
        const isMatch = (panel.getAttribute('data-ecom-panel') === targetKey);
        if (isMatch) {
          panel.hidden = false;
          panel.removeAttribute('hidden');
          panel.classList.add('is-active');
          panel.style.display = '';
        } else {
          panel.hidden = true;
          panel.setAttribute('hidden', '');
          panel.classList.remove('is-active');
          panel.style.display = 'none';
        }
      });
    };

    controls.forEach(ctrl => {
      ctrl.addEventListener('click', (e) => {
        e.preventDefault();
        const targetKey = ctrl.getAttribute('data-ecom-target');
        activateEcomTarget(targetKey);
      });

      ctrl.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          const targetKey = ctrl.getAttribute('data-ecom-target');
          activateEcomTarget(targetKey);
        } else {
          const list = Array.from(ctrl.parentElement.querySelectorAll('[data-ecom-target]'));
          const currentIdx = list.indexOf(ctrl);
          let nextIdx = null;

          if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
            e.preventDefault();
            nextIdx = (currentIdx + 1) % list.length;
          } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
            e.preventDefault();
            nextIdx = (currentIdx - 1 + list.length) % list.length;
          } else if (e.key === 'Home') {
            e.preventDefault();
            nextIdx = 0;
          } else if (e.key === 'End') {
            e.preventDefault();
            nextIdx = list.length - 1;
          }

          if (nextIdx !== null) {
            const nextCtrl = list[nextIdx];
            nextCtrl.focus();
            const targetKey = nextCtrl.getAttribute('data-ecom-target');
            activateEcomTarget(targetKey);
          }
        }
      });
    });
  }

  // 9. Static & Dynamic Websites Dashboard Scoped Interaction (#static-dynamic-websites-dashboard)
  const sdwShowcase = document.getElementById('static-dynamic-websites-dashboard');
  if (sdwShowcase) {
    const controls = Array.from(sdwShowcase.querySelectorAll('[data-sdw-target]'));
    const panels = Array.from(sdwShowcase.querySelectorAll('[data-sdw-panel]'));

    const activateSdwTarget = (targetKey) => {
      // 1. Synchronize all sidebar and bottom controls
      controls.forEach(ctrl => {
        const isMatch = (ctrl.getAttribute('data-sdw-target') === targetKey);
        ctrl.classList.toggle('active', isMatch);
        ctrl.classList.toggle('is-active', isMatch);
        ctrl.setAttribute('aria-selected', isMatch ? 'true' : 'false');
        ctrl.setAttribute('tabindex', isMatch ? '0' : '-1');
      });

      // 2. Hide all panels, show only matching panel
      panels.forEach(panel => {
        const isMatch = (panel.getAttribute('data-sdw-panel') === targetKey);
        if (isMatch) {
          panel.hidden = false;
          panel.removeAttribute('hidden');
          panel.classList.add('is-active');
          panel.style.display = '';
        } else {
          panel.hidden = true;
          panel.setAttribute('hidden', '');
          panel.classList.remove('is-active');
          panel.style.display = 'none';
        }
      });
    };

    controls.forEach(ctrl => {
      ctrl.addEventListener('click', (e) => {
        e.preventDefault();
        const targetKey = ctrl.getAttribute('data-sdw-target');
        activateSdwTarget(targetKey);
      });

      ctrl.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          const targetKey = ctrl.getAttribute('data-sdw-target');
          activateSdwTarget(targetKey);
        } else {
          const list = Array.from(ctrl.parentElement.querySelectorAll('[data-sdw-target]'));
          const currentIdx = list.indexOf(ctrl);
          let nextIdx = null;

          if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
            e.preventDefault();
            nextIdx = (currentIdx + 1) % list.length;
          } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
            e.preventDefault();
            nextIdx = (currentIdx - 1 + list.length) % list.length;
          } else if (e.key === 'Home') {
            e.preventDefault();
            nextIdx = 0;
          } else if (e.key === 'End') {
            e.preventDefault();
            nextIdx = list.length - 1;
          }

          if (nextIdx !== null) {
            const nextCtrl = list[nextIdx];
            nextCtrl.focus();
            const targetKey = nextCtrl.getAttribute('data-sdw-target');
            activateSdwTarget(targetKey);
          }
        }
      });
    });
  }
});
