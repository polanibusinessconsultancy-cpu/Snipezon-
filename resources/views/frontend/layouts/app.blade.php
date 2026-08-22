<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Snipezon | Smart Digital Solutions Powered by AI')</title>
  <meta name="description" content="@yield('meta_description', 'Snipezon provides custom software, AI solutions, WhatsApp Business API setup, business automation, websites and general item supply services.')">
  <meta name="theme-color" content="#030712">

  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="@yield('og_title', 'Snipezon | Smart Digital Solutions Powered by AI')">
  <meta property="og:description" content="@yield('og_description', 'Custom software, AI automation systems, WhatsApp API setup, and quality general business supply under one trusted partner.')">
  <meta property="og:type" content="website">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="{{ asset('snipezon/favicon.svg') }}">
  <link rel="alternate icon" href="{{ asset('snipezon/favicon.ico') }}">

  <!-- Global & Component Stylesheets (Exact Order) -->
  <link rel="stylesheet" href="{{ asset('snipezon/css/global.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/components.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/animations.css') }}">
  @yield('page_css')
  <link rel="stylesheet" href="{{ asset('snipezon/css/responsive.css') }}">

  <!-- Defer JavaScript Files (Exact Order) -->
  <script defer src="{{ asset('snipezon/js/main.js') }}"></script>
  <script defer src="{{ asset('snipezon/js/navigation.js') }}"></script>
  <script defer src="{{ asset('snipezon/js/animations.js') }}"></script>
  <script defer src="{{ asset('snipezon/js/interactions.js') }}"></script>
  <script defer src="{{ asset('snipezon/js/forms.js') }}"></script>
  <script defer src="{{ asset('snipezon/js/portfolio.js') }}"></script>
  <script defer src="{{ asset('snipezon/js/services.js') }}"></script>
</head>
<body data-page="@yield('body_data_page', 'home')">
  <!-- Accessibility Skip Link -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <!-- Ambient Grid Overlay -->
  <div class="bg-grid-overlay" aria-hidden="true"></div>

  <!-- Shared Fixed Glass Header -->
  <header class="site-header">
    <div class="container header-container">
      <a href="{{ route('home') }}" class="header-logo" aria-label="Snipezon Home">
        <img src="{{ asset('snipezon/images/logo/logo.svg') }}" alt="Snipezon Logo" width="160" height="42">
      </a>

      <!-- Desktop Navigation -->
      <nav class="desktop-nav" aria-label="Main Navigation">
        <ul class="nav-list">
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link" data-nav="home">Home</a>
          </li>
          <li class="nav-item has-dropdown">
            <button type="button" class="nav-link nav-dropdown-toggle" data-nav="digital-solutions" aria-expanded="false" aria-haspopup="true">
              Solutions
              <svg class="dropdown-arrow" viewBox="0 0 12 12" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
            </button>
            <div class="nav-dropdown" aria-label="Digital Solutions Submenu">
              <span class="dropdown-header-link is-disabled" aria-disabled="true">
                View All Digital Solutions
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </span>
              <div class="dropdown-list">
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="custom-software-development">Custom Software Development</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="ai-software-solutions">AI-Based Software Solutions</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="whatsapp-business-api">WhatsApp Business API Setup</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="customer-care-automation">Customer Care Automation</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="sales-bots">Sales Bots for Products & Services</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="ai-chatbot-solutions">Full AI Chatbot Solutions</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="accounting-software">Accounting Software</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="ecommerce-websites">E-commerce Websites</span>
                <span class="dropdown-link is-disabled" aria-disabled="true" data-nav="static-dynamic-websites">Static & Dynamic Websites</span>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <span class="nav-link is-disabled" aria-disabled="true" data-nav="general-supply">Supply Division</span>
          </li>
          <li class="nav-item">
            <span class="nav-link is-disabled" aria-disabled="true" data-nav="portfolio">Work</span>
          </li>
          <li class="nav-item">
            <a href="{{ route('about') }}" class="nav-link" data-nav="about">About</a>
          </li>
          <li class="nav-item">
            <span class="nav-link is-disabled" aria-disabled="true" data-nav="contact">Contact</span>
          </li>
        </ul>
      </nav>

      <!-- Header Actions -->
      <div class="header-actions">
        <span class="button button-primary is-disabled" aria-disabled="true">
          <span>Let’s Talk</span>
          <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
        <button class="hamburger-btn" aria-label="Toggle Mobile Navigation" aria-expanded="false" aria-controls="mobile-drawer">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Drawer Menu -->
  <div class="mobile-backdrop" aria-hidden="true"></div>
  <aside id="mobile-drawer" class="mobile-drawer" aria-label="Mobile Navigation Menu">
    <div class="mobile-drawer-header">
      <a href="{{ route('home') }}" class="header-logo">
        <img src="{{ asset('snipezon/images/logo/logo.svg') }}" alt="Snipezon Logo" width="140" height="36">
      </a>
      <button class="mobile-drawer-close" aria-label="Close Navigation Menu">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12"/></svg>
      </button>
    </div>
    <nav class="mobile-nav">
      <ul class="mobile-nav-list">
        <li><a href="{{ route('home') }}" class="mobile-nav-link" data-nav="home">Home</a></li>
        <li>
          <button type="button" class="mobile-nav-link mobile-submenu-toggle" data-nav="digital-solutions" aria-expanded="false">
            Solutions
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <ul class="mobile-submenu">
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true">View All Solutions</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="custom-software-development">Custom Software Development</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="ai-software-solutions">AI-Based Software Solutions</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="whatsapp-business-api">WhatsApp Business API Setup</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="customer-care-automation">Customer Care Automation</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="sales-bots">Sales Bots</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="ai-chatbot-solutions">AI Chatbot Solutions</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="accounting-software">Accounting Software</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="ecommerce-websites">E-commerce Websites</span></li>
            <li><span class="mobile-submenu-link is-disabled" aria-disabled="true" data-nav="static-dynamic-websites">Static & Dynamic Websites</span></li>
          </ul>
        </li>
        <li><span class="mobile-nav-link is-disabled" aria-disabled="true" data-nav="general-supply">Supply Division</span></li>
        <li><span class="mobile-nav-link is-disabled" aria-disabled="true" data-nav="portfolio">Work</span></li>
        <li><a href="{{ route('about') }}" class="mobile-nav-link" data-nav="about">About</a></li>
        <li><span class="mobile-nav-link is-disabled" aria-disabled="true" data-nav="contact">Contact</span></li>
      </ul>
    </nav>
    <div class="mobile-drawer-footer">
      <span class="button button-primary is-disabled" aria-disabled="true">
        <span>Let’s Talk</span>
        <svg class="button-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </span>
      <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20requirement." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
        <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
        <span>WhatsApp Support</span>
      </a>
    </div>
  </aside>

  <!-- Main Content Area -->
  <main id="main-content">
    @yield('content')
  </main>

  <!-- Shared Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1: Brand -->
        <div class="footer-brand">
          <a href="{{ route('home') }}" class="footer-logo">
            <img src="{{ asset('snipezon/images/logo/logo.svg') }}" alt="Snipezon Logo" width="160" height="40">
          </a>
          <p class="footer-description">
            Smart digital solutions powered by AI. We build software, websites and automation systems—and supply quality items for business needs.
          </p>
          <div class="footer-socials">
            <span class="social-icon-btn" role="img" aria-label="Snipezon on LinkedIn">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
            </span>
            <span class="social-icon-btn" role="img" aria-label="Snipezon on Twitter">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.05c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
            </span>
            <span class="social-icon-btn" role="img" aria-label="Snipezon on Facebook">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04z"/></svg>
            </span>
          </div>
        </div>

        <!-- Col 2: Navigation -->
        <div>
          <h3 class="footer-heading">Navigation</h3>
          <ul class="footer-links">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Solutions</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Supply Division</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Work</span></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Contact</span></li>
          </ul>
        </div>

        <!-- Col 3: Digital Solutions -->
        <div>
          <h3 class="footer-heading">Digital Solutions</h3>
          <ul class="footer-links">
            <li><span class="footer-link-disabled" aria-disabled="true">Custom Software Development</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">AI Software Solutions</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">WhatsApp Business API</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Customer Care Automation</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Sales Bots</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">AI Chatbot Solutions</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Accounting Software</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">E-commerce Websites</span></li>
            <li><span class="footer-link-disabled" aria-disabled="true">Static & Dynamic Websites</span></li>
          </ul>
        </div>

        <!-- Col 4: Supply Categories -->
        <div>
          <h3 class="footer-heading">Supply Division</h3>
          <ul class="footer-links">
            <li><a href="{{ route('home') }}#home-essentials">Home Essentials</a></li>
            <li><a href="{{ route('home') }}#corporate-items">Corporate Items</a></li>
            <li><a href="{{ route('home') }}#industrial-items">Industrial Items</a></li>
            <li><a href="{{ route('home') }}#toys">Toys</a></li>
          </ul>
        </div>

        <!-- Col 5: Contact -->
        <div>
          <h3 class="footer-heading">Contact Us</h3>
          <ul class="footer-contact-list">
            <li class="footer-contact-item">
              <svg class="footer-contact-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
              <a href="tel:+923122261919">+92 312 2261919</a>
            </li>
            <li class="footer-contact-item">
              <svg class="footer-contact-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
              <a href="mailto:ceo@snipezon.com">ceo@snipezon.com</a>
            </li>
            <li class="footer-contact-item">
              <svg class="footer-contact-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
              <span>Shop No. F19, 1st Floor, Danny Craft Tower, Saddar</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <p>&copy; <span id="current-year">2026</span> Snipezon. All rights reserved.</p>
        <div class="footer-bottom-links">
          <span class="footer-link-disabled" aria-disabled="true">Privacy Policy</span>
          <span class="footer-link-disabled" aria-disabled="true">Terms of Service</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Floating WhatsApp Button -->
  <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20requirement." class="floating-whatsapp has-pulse" target="_blank" rel="noopener noreferrer" aria-label="Chat with Snipezon on WhatsApp">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
    <span class="floating-whatsapp-tooltip">Chat with us on WhatsApp</span>
  </a>

  <!-- Back to Top Button -->
  <button class="back-to-top" aria-label="Back to top of page">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 4l-8 8h6v8h4v-8h6z"/></svg>
  </button>
</body>
</html>
