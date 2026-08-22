/**
 * Snipezon - Navigation Architecture Module
 * Handles fixed header scroll state, desktop Solutions dropdown, mobile hamburger drawer, and active page highlighting.
 */

'use strict';

document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  const dropdownToggle = document.querySelector('.nav-dropdown-toggle');
  const dropdownItem = document.querySelector('.nav-item.has-dropdown');
  const hamburgerBtn = document.querySelector('.hamburger-btn');
  const mobileDrawer = document.querySelector('.mobile-drawer');
  const mobileBackdrop = document.querySelector('.mobile-backdrop');
  const mobileDrawerClose = document.querySelector('.mobile-drawer-close');
  const mobileSubmenuToggle = document.querySelector('.mobile-submenu-toggle');
  const mobileSubmenu = document.querySelector('.mobile-submenu');

  // ==========================================
  // 1. Header Scroll State Listener
  // ==========================================
  const handleHeaderScroll = () => {
    if (!header) return;
    if (window.scrollY > 20) {
      header.classList.add('is-scrolled');
    } else {
      header.classList.remove('is-scrolled');
    }
  };

  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll(); // Initial check

  // ==========================================
  // 2. Active Page Highlighting
  // ==========================================
  const currentPage = document.body.getAttribute('data-page');
  if (currentPage) {
    // Highlight matching desktop and mobile links
    const desktopLinks = document.querySelectorAll('.nav-link');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link, .mobile-submenu-link');

    const markActive = (link) => {
      const pageTarget = link.getAttribute('data-nav');
      if (pageTarget === currentPage) {
        link.classList.add('active');
        link.setAttribute('aria-current', 'page');
        
        // If inside a dropdown or submenu, highlight parent Solutions item
        const parentNavItem = link.closest('.nav-item.has-dropdown');
        if (parentNavItem) {
          parentNavItem.classList.add('active');
          const parentLink = parentNavItem.querySelector('.nav-link');
          if (parentLink) parentLink.classList.add('active');
        }
      }
    };

    desktopLinks.forEach(markActive);
    mobileLinks.forEach(markActive);
  }

  // ==========================================
  // 3. Desktop Solutions Dropdown Logic
  // ==========================================
  if (dropdownToggle && dropdownItem) {
    const toggleDropdown = (show) => {
      const isExpanded = show !== undefined ? show : !dropdownItem.classList.contains('dropdown-open');
      if (isExpanded) {
        dropdownItem.classList.add('dropdown-open');
        dropdownToggle.setAttribute('aria-expanded', 'true');
      } else {
        dropdownItem.classList.remove('dropdown-open');
        dropdownToggle.setAttribute('aria-expanded', 'false');
      }
    };

    dropdownToggle.addEventListener('click', (e) => {
      e.preventDefault();
      toggleDropdown();
    });

    // Close dropdown on click outside
    document.addEventListener('click', (e) => {
      if (!dropdownItem.contains(e.target)) {
        toggleDropdown(false);
      }
    });

    // Keyboard Escape Key close
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && dropdownItem.classList.contains('dropdown-open')) {
        toggleDropdown(false);
        dropdownToggle.focus();
      }
    });
  }

  // ==========================================
  // 4. Mobile Hamburger Navigation Drawer
  // ==========================================
  const openMobileMenu = () => {
    if (!mobileDrawer) return;
    mobileDrawer.classList.add('is-active');
    mobileDrawer.setAttribute('aria-hidden', 'false');
    if (mobileBackdrop) {
      mobileBackdrop.classList.add('is-active');
      mobileBackdrop.setAttribute('aria-hidden', 'false');
    }
    if (hamburgerBtn) {
      hamburgerBtn.classList.add('is-active');
      hamburgerBtn.setAttribute('aria-expanded', 'true');
    }
    document.body.style.overflow = 'hidden'; // Lock body scroll
  };

  const closeMobileMenu = () => {
    if (!mobileDrawer) return;
    mobileDrawer.classList.remove('is-active');
    mobileDrawer.setAttribute('aria-hidden', 'true');
    if (mobileBackdrop) {
      mobileBackdrop.classList.remove('is-active');
      mobileBackdrop.setAttribute('aria-hidden', 'true');
    }
    if (hamburgerBtn) {
      hamburgerBtn.classList.remove('is-active');
      hamburgerBtn.setAttribute('aria-expanded', 'false');
    }
    document.body.style.overflow = ''; // Restore body scroll
  };

  if (hamburgerBtn) {
    hamburgerBtn.addEventListener('click', () => {
      const isOpen = mobileDrawer && mobileDrawer.classList.contains('is-active');
      if (isOpen) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    });
  }

  if (mobileDrawerClose) {
    mobileDrawerClose.addEventListener('click', closeMobileMenu);
  }

  if (mobileBackdrop) {
    mobileBackdrop.addEventListener('click', closeMobileMenu);
  }

  // Close mobile drawer on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileDrawer && mobileDrawer.classList.contains('is-active')) {
      closeMobileMenu();
      if (hamburgerBtn) hamburgerBtn.focus();
    }
  });

  // Mobile Submenu Accordion Toggle
  if (mobileSubmenuToggle && mobileSubmenu) {
    mobileSubmenuToggle.addEventListener('click', (e) => {
      e.preventDefault();
      const isOpen = mobileSubmenu.classList.contains('is-open');
      if (isOpen) {
        mobileSubmenu.classList.remove('is-open');
        mobileSubmenuToggle.setAttribute('aria-expanded', 'false');
      } else {
        mobileSubmenu.classList.add('is-open');
        mobileSubmenuToggle.setAttribute('aria-expanded', 'true');
      }
    });
  }

  // Close mobile menu when clicking any nav link
  document.querySelectorAll('.mobile-drawer a:not(.mobile-submenu-toggle)').forEach(link => {
    link.addEventListener('click', closeMobileMenu);
  });
});
