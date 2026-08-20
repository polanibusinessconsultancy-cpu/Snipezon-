@extends('layouts.frontend')

@section('title', 'Snipezon | Smart Digital Solutions Powered by AI')
@section('meta_description', 'Snipezon provides custom software, AI solutions, WhatsApp Business API setup, business automation, websites and general item supply services.')


@section('page_css')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
@endsection


@section('content')
<!-- 1. HERO SECTION -->
    <section class="hero-section container">
      <div class="hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">SMART DIGITAL SOLUTIONS • POWERED BY AI</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            We Build Intelligent Systems That Move <span class="highlight-purple">Business Forward.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            From custom software and websites to AI automation and reliable general item procurement—everything your business needs under one trusted partner.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Start a Project</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="{{ route('digital-solutions') }}" class="button button-secondary">
              <span>Explore Solutions</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
          <div class="hero-trust-strip" data-animate="fade-up" data-delay="400">
            <div class="trust-item">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>AI-Driven</span>
            </div>
            <div class="trust-item">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>End-to-End Delivery</span>
            </div>
            <div class="trust-item">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Reliable Support</span>
            </div>
          </div>
        </div>

        <!-- Hero Orbital Visual -->
        <div class="hero-visual-wrapper" aria-hidden="true">
          <div class="orbital-ring orbital-ring-1"></div>
          <div class="orbital-ring orbital-ring-2"></div>
          
          <!-- Central Glowing Core -->
          <div class="hero-orbital-core">
            <img src="{{ asset('assets/images/') }}logo/logo-icon.svg" alt="Snipezon S Mark" width="100" height="100">
          </div>

          <!-- Service Nodes -->
          <div class="hero-service-node node-1">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span>AI Solutions</span>
          </div>
          <div class="hero-service-node node-2">
            <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            <span>Automation</span>
          </div>
          <div class="hero-service-node node-3">
            <svg viewBox="0 0 24 24"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            <span>Web &amp; Software</span>
          </div>
          <div class="hero-service-node node-4">
            <svg viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
            <span>Bots &amp; Chat</span>
          </div>
          <div class="hero-service-node node-5">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
            <span>Accounting</span>
          </div>
          <div class="hero-service-node node-6">
            <svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
            <span>E-commerce</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. BUSINESS CAPABILITY STRIP -->
    <section class="capability-strip-section container" data-animate="fade-up">
      <div class="capability-glass-card">
        <div class="capability-text">
          <h2>Technology. Automation. Procurement.</h2>
          <p>One partner for your complete digital and supply needs.</p>
        </div>
        <div class="capability-badges-grid">
          <div class="capability-badge">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8h16v10z"/></svg>
            <span>Retail</span>
          </div>
          <div class="capability-badge">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/></svg>
            <span>Wholesale</span>
          </div>
          <div class="capability-badge">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 22H2V2h20v20zM4 4v16h16V4H4z"/></svg>
            <span>Manufacturing</span>
          </div>
          <div class="capability-badge">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
            <span>Services</span>
          </div>
          <div class="capability-badge">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
            <span>Education</span>
          </div>
          <div class="capability-badge">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 10.5h-5.5V5h-3v5.5H5v3h5.5V19h3v-5.5H19v-3z"/></svg>
            <span>Healthcare</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. DIGITAL SOLUTIONS BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">DIGITAL SOLUTIONS</span>
        <h2 class="section-title">Built for the way modern business works.</h2>
        <p class="section-description">Powerful software, smart automation and seamless digital experiences—designed to solve real business challenges.</p>
      </div>

      <div class="solutions-bento-grid">
        <!-- 1. Custom Software (Featured Large) -->
        <a href="{{ route('services.custom-software') }}" class="bento-card bento-card-large" data-animate="fade-up">
          <div>
            <div class="bento-card-header">
              <div class="bento-icon-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="18" rx="2"/><path d="M2 9h20M7 13l-2 2 2 2M13 13l2 2-2 2M11 13l-2 4"/></svg>
              </div>
              <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
            <h3 class="bento-title">Custom Software Development</h3>
            <p class="bento-description">Scalable, secure, and high-performance software systems tailored to fit your unique business operations perfectly.</p>
          </div>
          <div class="bento-card-preview">
            <div class="bento-code-lines">
              <div class="code-line w-80"></div>
              <div class="code-line w-60"></div>
              <div class="code-line w-90"></div>
              <div class="code-line w-40"></div>
            </div>
          </div>
        </a>

        <!-- 2. AI-Based Software Solutions (Featured Large) -->
        <a href="{{ route('services.ai-software') }}" class="bento-card bento-card-large" data-animate="fade-up" data-delay="100">
          <div>
            <div class="bento-card-header">
              <div class="bento-icon-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9zM12 1v3M12 20v3M1 12h3M20 12h3M6 1v3M18 1v3M6 20v3M18 20v3M1 6h3M1 18h3M20 6h3M20 18h3"/></svg>
              </div>
              <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </div>
            <h3 class="bento-title">AI-Based Software Solutions</h3>
            <p class="bento-description">Intelligent systems that learn, predict pattern behaviors, and automate complex decisions for smarter workflows.</p>
          </div>
          <div class="bento-card-preview" style="display: flex; align-items: center; justify-content: center;">
            <svg width="80" height="80" viewBox="0 0 100 100" fill="none" aria-hidden="true">
              <circle cx="50" cy="50" r="36" stroke="#22d3ee" stroke-width="2" stroke-dasharray="8 4"/>
              <circle cx="50" cy="50" r="20" fill="rgba(124, 58, 237, 0.3)" stroke="#9b6cff" stroke-width="2"/>
            </svg>
          </div>
        </a>

        <!-- 3. WhatsApp Business API -->
        <a href="{{ route('services.whatsapp-api') }}" class="bento-card bento-card-medium" data-animate="fade-up">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
            </div>
            <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <div>
            <h3 class="bento-title">WhatsApp Business API Setup</h3>
            <p class="bento-description">Official API integration for automated broadcast messaging, notifications, and customer engagement.</p>
          </div>
        </a>

        <!-- 4. Customer Care Automation -->
        <a href="{{ route('services.customer-care') }}" class="bento-card bento-card-medium" data-animate="fade-up" data-delay="100">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 18v-6a9 9 0 0 1 18 0v6M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
            </div>
            <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <div>
            <h3 class="bento-title">Customer Care Automation</h3>
            <p class="bento-description">Automate support tickets, repetitive inquiries, and customer routing for faster response times.</p>
          </div>
        </a>

        <!-- 5. Sales Bots -->
        <a href="{{ route('services.sales-bots') }}" class="bento-card bento-card-medium" data-animate="fade-up" data-delay="200">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2zM14 8l3 3m0 0h-3m3 0V8"/></svg>
            </div>
            <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <div>
            <h3 class="bento-title">Sales Bots for Products &amp; Services</h3>
            <p class="bento-description">AI-driven sales bots that qualify prospects, answer product queries, and drive higher conversions.</p>
          </div>
        </a>

        <!-- 6. Full AI Chatbots -->
        <a href="{{ route('services.ai-chatbots') }}" class="bento-card bento-card-small" data-animate="fade-up">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm-6 9a6 6 0 0 1 12 0v5a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-5zM9 13h.01M15 13h.01M9 16h6"/></svg>
            </div>
            <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <div>
            <h3 class="bento-title">Full AI Chatbots</h3>
            <p class="bento-description">Conversational AI agents that understand context and assist 24/7.</p>
          </div>
        </a>

        <!-- 7. Accounting Software -->
        <a href="{{ route('services.accounting') }}" class="bento-card bento-card-small" data-animate="fade-up" data-delay="100">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="2" width="16" height="20" rx="2"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="10" y2="10"/><line x1="14" y1="10" x2="16" y2="10"/><line x1="8" y1="14" x2="10" y2="14"/><line x1="14" y1="14" x2="16" y2="14"/><line x1="8" y1="18" x2="10" y2="18"/><line x1="14" y1="18" x2="16" y2="18"/></svg>
            </div>
            <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <div>
            <h3 class="bento-title">Accounting Software</h3>
            <p class="bento-description">Smart invoicing, tax management, and financial control made simple.</p>
          </div>
        </a>

        <!-- 8. E-commerce Websites -->
        <a href="{{ route('services.ecommerce') }}" class="bento-card bento-card-small" data-animate="fade-up" data-delay="200">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4zM3 6h18M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
            <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <div>
            <h3 class="bento-title">E-commerce Websites</h3>
            <p class="bento-description">High-converting online stores with secure checkout user journeys.</p>
          </div>
        </a>

        <!-- 9. Static & Dynamic Websites -->
        <a href="{{ route('services.websites') }}" class="bento-card bento-card-small" data-animate="fade-up" data-delay="300">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="18" rx="2"/><line x1="2" y1="9" x2="22" y2="9"/><circle cx="6" cy="6" r="1" fill="currentColor"/><circle cx="10" cy="6" r="1" fill="currentColor"/></svg>
            </div>
            <svg class="bento-arrow-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </div>
          <div>
            <h3 class="bento-title">Static &amp; Dynamic Websites</h3>
            <p class="bento-description">Modern, responsive, and SEO-friendly corporate web platforms.</p>
          </div>
        </a>
      </div>
    </section>

    <!-- 4. DEVELOPMENT PROCESS -->
    <section class="process-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">A proven path from idea to impact.</h2>
        <p class="section-description">We follow a disciplined, engineering-grade process to build dependable digital products.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Discover</h3>
          <p class="process-step-desc">We understand your business goals, challenges and opportunities.</p>
        </div>
        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Design</h3>
          <p class="process-step-desc">We plan the right solution architecture with a user-first approach.</p>
        </div>
        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Build</h3>
          <p class="process-step-desc">We develop, test and deliver high-quality scalable software systems.</p>
        </div>
        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Automate</h3>
          <p class="process-step-desc">We integrate smart AI automation to save operational time and scale.</p>
        </div>
        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Scale</h3>
          <p class="process-step-desc">We continue supporting, maintaining and optimizing your solution.</p>
        </div>
      </div>
    </section>

    <!-- 5. GENERAL SUPPLY DIVISION -->
    <section class="supply-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">SUPPLY DIVISION</span>
        <h2 class="section-title">Beyond digital. Ready for every requirement.</h2>
        <p class="section-description">Quality general items for homes, businesses and industries. We source it, you focus on what matters.</p>
      </div>

      <div class="supply-cards-grid">
        <!-- 1. Home Essentials -->
        <a href="{{ route('general-supply') }}#home-essentials" class="supply-card" data-animate="fade-up">
          <div class="supply-card-image">
            <img src="{{ asset('assets/images/') }}supply/home-essentials.svg" alt="Home Essentials Category" width="600" height="400" loading="lazy">
          </div>
          <div class="supply-card-body">
            <h3 class="supply-card-title">Home Essentials</h3>
            <p class="supply-card-desc">Daily-use items and procurement essentials for modern homes.</p>
            <span class="supply-card-link">
              Explore Division
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>

        <!-- 2. Corporate Items -->
        <a href="{{ route('general-supply') }}#corporate-items" class="supply-card" data-animate="fade-up" data-delay="100">
          <div class="supply-card-image">
            <img src="{{ asset('assets/images/') }}supply/corporate-items.svg" alt="Corporate Items Category" width="600" height="400" loading="lazy">
          </div>
          <div class="supply-card-body">
            <h3 class="supply-card-title">Corporate Items</h3>
            <p class="supply-card-desc">Office supplies, equipment and workplace requirements.</p>
            <span class="supply-card-link">
              Explore Division
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>

        <!-- 3. Industrial Items -->
        <a href="{{ route('general-supply') }}#industrial-items" class="supply-card" data-animate="fade-up" data-delay="200">
          <div class="supply-card-image">
            <img src="{{ asset('assets/images/') }}supply/industrial-items.svg" alt="Industrial Items Category" width="600" height="400" loading="lazy">
          </div>
          <div class="supply-card-body">
            <h3 class="supply-card-title">Industrial Items</h3>
            <p class="supply-card-desc">Reliable operational supplies for technical projects and businesses.</p>
            <span class="supply-card-link">
              Explore Division
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>

        <!-- 4. Toys -->
        <a href="{{ route('general-supply') }}#toys" class="supply-card" data-animate="fade-up" data-delay="300">
          <div class="supply-card-image">
            <img src="{{ asset('assets/images/') }}supply/toys.svg" alt="Toys Category" width="600" height="400" loading="lazy">
          </div>
          <div class="supply-card-body">
            <h3 class="supply-card-title">Toys</h3>
            <p class="supply-card-desc">Fun, safe and quality toy requirements for different age groups.</p>
            <span class="supply-card-link">
              Explore Division
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </span>
          </div>
        </a>
      </div>

      <div style="text-align: center;" data-animate="fade-up">
        <a href="{{ route('contact') }}" class="button button-secondary">
          <span>Request a Supply Quote</span>
          <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </section>

    <!-- 6. SELECTED WORK -->
    <section class="work-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">SELECTED WORK</span>
        <h2 class="section-title">Solutions we’re proud to build.</h2>
        <p class="section-description">A glimpse into digital platforms and automation frameworks engineered by Snipezon.</p>
      </div>

      <div class="work-cards-grid">
        <!-- Project 1 -->
        <a href="{{ route('portfolio') }}" class="work-card" data-animate="fade-up">
          <div class="work-card-preview">
            <img src="{{ asset('assets/images/') }}portfolio/business-automation.svg" alt="Business Automation Platform Preview" width="600" height="360" loading="lazy">
          </div>
          <div class="work-card-body">
            <div class="work-tags">
              <span class="work-tag">Automation</span>
              <span class="work-tag">Workflow</span>
            </div>
            <h3 class="work-card-title">Business Automation Platform</h3>
            <p class="work-card-desc">Unified operations dashboard managing multi-channel workflows and automated team notifications.</p>
          </div>
        </a>

        <!-- Project 2 -->
        <a href="{{ route('portfolio') }}" class="work-card" data-animate="fade-up" data-delay="100">
          <div class="work-card-preview">
            <img src="{{ asset('assets/images/') }}portfolio/ecommerce-platform.svg" alt="Modern E-commerce Experience Preview" width="600" height="360" loading="lazy">
          </div>
          <div class="work-card-body">
            <div class="work-tags">
              <span class="work-tag">E-commerce</span>
              <span class="work-tag">Web</span>
            </div>
            <h3 class="work-card-title">Modern E-commerce Experience</h3>
            <p class="work-card-desc">Fast, secure and conversion-focused web store featuring instant checkout and mobile responsiveness.</p>
          </div>
        </a>

        <!-- Project 3 -->
        <a href="{{ route('portfolio') }}" class="work-card" data-animate="fade-up" data-delay="200">
          <div class="work-card-preview">
            <img src="{{ asset('assets/images/') }}portfolio/ai-support-workspace.svg" alt="AI Customer Support System Preview" width="600" height="360" loading="lazy">
          </div>
          <div class="work-card-body">
            <div class="work-tags">
              <span class="work-tag">AI Chatbot</span>
              <span class="work-tag">Support</span>
            </div>
            <h3 class="work-card-title">AI Customer Support System</h3>
            <p class="work-card-desc">Intelligent conversational workspace handling 24/7 inquiries and automated ticket routing.</p>
          </div>
        </a>
      </div>

      <div style="text-align: center;" data-animate="fade-up">
        <a href="{{ route('portfolio') }}" class="button button-primary">
          <span>View All Work</span>
          <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </section>

    <!-- 7. WHY SNIPEZON -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHY SNIPEZON</span>
        <h2 class="section-title">More than a vendor. Your strategic growth partner.</h2>
        <p class="section-description">We combine digital intelligence with dependable sourcing to move your business forward.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
          </div>
          <h3 class="why-title">One Strategic Partner</h3>
          <p class="why-desc">Digital solutions and supply coordination under one trusted name.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 15h-2v-6h2zm0-8h-2V7h2z"/></svg>
          </div>
          <h3 class="why-title">Practical AI Expertise</h3>
          <p class="why-desc">AI applied to real operational and customer-service challenges.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
          </div>
          <h3 class="why-title">Custom-Built Solutions</h3>
          <p class="why-desc">Systems designed specifically around your unique business requirements.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="why-title">Responsive Support</h3>
          <p class="why-desc">Clear communication, transparent progress, and continued assistance.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/></svg>
          </div>
          <h3 class="why-title">Reliable Sourcing</h3>
          <p class="why-desc">Organized sourcing across diverse business procurement categories.</p>
        </div>
      </div>
    </section>

    <!-- 8. CLIENT VOICES FRAMEWORK -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CLIENT VOICES</span>
        <h2 class="section-title">Trusted working relationships start with reliable delivery.</h2>
        <p class="section-description">Our core delivery principles that guide every client collaboration.</p>
      </div>

      <div class="voices-grid">
        <div class="voice-card" data-animate="fade-up">
          <div class="voice-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="voice-title">Clear Communication</h3>
          <p class="voice-desc">Transparent project roadmap, regular progress updates, and honest technical guidance.</p>
        </div>

        <div class="voice-card" data-animate="fade-up" data-delay="100">
          <div class="voice-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
          </div>
          <h3 class="voice-title">Responsible Delivery</h3>
          <p class="voice-desc">Engineering systems with quality control, security best practices, and robust performance.</p>
        </div>

        <div class="voice-card" data-animate="fade-up" data-delay="200">
          <div class="voice-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </div>
          <h3 class="voice-title">Continued Support</h3>
          <p class="voice-desc">We stay with you after launch to assist, optimize, and scale as your requirements evolve.</p>
        </div>
      </div>
    </section>

    <!-- 9. FINAL CTA BANNER -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Let’s build what your business needs next.</h2>
        <p class="cta-banner-desc">Share your ideas or requirement details, and we’ll turn them into reliable, scalable digital solutions.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Book a Consultation</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20requirement." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection


