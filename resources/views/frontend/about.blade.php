@extends('frontend.layouts.app')

@section('title', 'About Snipezon | Digital Solutions & General Supply')
@section('meta_description', 'Learn about Snipezon, a company providing custom software, AI-powered digital solutions, business automation, websites and general item supply services.')
@section('body_data_page', 'about')

@section('page_css')
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/home.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/about.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/digital-solutions.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/general-supply.css') }}">
@endsection

@section('content')
<!-- 1. ABOUT HERO -->
    <section class="about-hero-section container">
      <!-- Breadcrumb -->
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">About Snipezon</span>
      </nav>

      <div class="about-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">ABOUT SNIPEZON</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            One partner for digital progress and <span class="highlight-purple">everyday business needs.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            Snipezon brings technology, AI-driven solutions, business automation and reliable general item sourcing together under one focused company.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a class="button button-primary" aria-disabled="true">
              <span>Explore Our Solutions</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a class="button button-secondary" aria-disabled="true">
              <span>Talk to Us</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Dual Ecosystem Visual Composition -->
        <div class="dual-ecosystem-wrapper" aria-hidden="true">
          <div class="eco-ring eco-ring-digital"></div>
          <div class="eco-ring eco-ring-supply"></div>

          <div class="eco-core-hub">
            <img src="{{ asset('snipezon/images/logo/logo-icon.svg') }}" alt="Snipezon Core" width="80" height="80">
          </div>

          <div class="eco-node eco-digital-1">
            <svg viewBox="0 0 24 24"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z"/></svg>
            <span>Software &amp; AI</span>
          </div>

          <div class="eco-node eco-digital-2">
            <svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7z"/></svg>
            <span>Automation</span>
          </div>

          <div class="eco-node eco-supply-1">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            <span>Corporate Supply</span>
          </div>

          <div class="eco-node eco-supply-2">
            <svg viewBox="0 0 24 24"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
            <span>Home &amp; Industrial</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. IDENTITY STRIP -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Company Identity & Divisions</h2>
      <div class="value-grid">
        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h3 class="value-title">Smart Digital Thinking</h3>
          <p class="value-desc">AI-driven solutions that make operations smarter and simpler.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          </div>
          <h3 class="value-title">Practical Business Solutions</h3>
          <p class="value-desc">Tools and systems designed around real business challenges.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3 class="value-title">Reliable Coordination</h3>
          <p class="value-desc">Clear communication throughout digital and supply requirements.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="value-title">Long-Term Support</h3>
          <p class="value-desc">Continued assistance as requirements and systems evolve.</p>
        </div>
      </div>
    </section>

    <!-- 3. COMPANY INTRODUCTION -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">WHO WE ARE</span>
          <h2 class="section-title">Built to make business simpler.</h2>
          <p>
            Snipezon works with organizations to understand requirements, recommend practical approaches and coordinate delivery across digital systems and general sourcing.
          </p>
          <p>
            Our role is simple: understand the need, design the right path and deliver quality solutions with continued support.
          </p>
        </div>

        <!-- Connected Approach Visual -->
        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="journey-node-map">
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
              <span>Understand</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
              <span>Design</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Deliver</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
              <span>Support</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. PURPOSE AND DIRECTION -->
    <section class="section container">
      <div class="purpose-direction-grid">
        <div class="purpose-card" data-animate="fade-up">
          <span class="section-eyebrow">OUR PURPOSE</span>
          <p style="margin-top: 12px;">
            To help organizations work smarter through practical technology, intelligent automation and dependable support.
          </p>
        </div>

        <div class="purpose-card" data-animate="fade-up" data-delay="100">
          <span class="section-eyebrow">OUR DIRECTION</span>
          <p style="margin-top: 12px;">
            To grow as a trusted solutions partner that connects digital innovation with real operational needs.
          </p>
        </div>
      </div>
    </section>

    <!-- 5. TWO COMPANY DIVISIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHAT WE DO</span>
        <h2 class="section-title">Two capabilities. One committed partner.</h2>
        <p class="section-description">A single company delivering both digital engineering and general supply coordination.</p>
      </div>

      <div class="divisions-grid">
        <!-- Division A: Digital Solutions -->
        <div class="division-panel digital-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">DIGITAL DIVISION</span>
            <h3 class="card-title" style="font-size: 1.8rem; margin: 12px 0 16px 0;">Digital Solutions</h3>
            <p class="card-desc" style="font-size: 0.95rem;">
              Custom software platforms, AI-driven automation, WhatsApp Business API systems, e-commerce, and modern websites.
            </p>

            <div class="division-tag-list">
              <span class="division-tag">Custom Software</span>
              <span class="division-tag">AI Solutions</span>
              <span class="division-tag">WhatsApp Business API</span>
              <span class="division-tag">Customer Care Automation</span>
              <span class="division-tag">Sales Bots</span>
              <span class="division-tag">AI Chatbots</span>
              <span class="division-tag">Accounting Software</span>
              <span class="division-tag">E-commerce</span>
              <span class="division-tag">Static &amp; Dynamic Websites</span>
            </div>
          </div>

          <a class="button button-primary" style="align-self: flex-start;" aria-disabled="true">
            <span>Explore Digital Solutions</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <!-- Division B: General Supply -->
        <div class="division-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">SUPPLY DIVISION</span>
            <h3 class="card-title" style="font-size: 1.8rem; margin: 12px 0 16px 0;">General Supply</h3>
            <p class="card-desc" style="font-size: 0.95rem;">
              Requirement-based B2B procurement across four core categories for offices, teams and organizations.
            </p>

            <div class="division-tag-list">
              <span class="division-tag">Home Essentials</span>
              <span class="division-tag">Corporate Items</span>
              <span class="division-tag">Industrial Items</span>
              <span class="division-tag">Toys</span>
            </div>
          </div>

          <a class="button button-secondary" style="align-self: flex-start;" aria-disabled="true">
            <span>Explore Supply Division</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- 6. WORKING APPROACH -->
    <section class="process-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR WORKING APPROACH</span>
        <h2 class="section-title">How we approach every requirement.</h2>
        <p class="section-description">A transparent 5-stage process guiding digital engineering and supply sourcing.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Listen Carefully</h3>
          <p class="process-step-desc">We begin by understanding goals, requirements and challenges.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Understand the Need</h3>
          <p class="process-step-desc">We review the details and identify what matters most.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Design the Right Approach</h3>
          <p class="process-step-desc">We plan practical solutions around the requirement.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Coordinate Delivery</h3>
          <p class="process-step-desc">We manage the agreed process with clear communication.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Continue Supporting</h3>
          <p class="process-step-desc">We remain available as requirements evolve.</p>
        </div>
      </div>
    </section>

    <!-- 7. COMPANY PRINCIPLES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR VALUES</span>
        <h2 class="section-title">Principles behind our work.</h2>
        <p class="section-description">The core standards guiding our client interactions and system builds.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </div>
          <h3 class="why-title">Practical Innovation</h3>
          <p class="why-desc">Focusing on technology and AI features that deliver real operational utility.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="why-title">Clarity &amp; Communication</h3>
          <p class="why-desc">Transparent timelines, regular updates, and straightforward technical explanations.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
          </div>
          <h3 class="why-title">Responsible Delivery</h3>
          <p class="why-desc">Honest scope commitments and reliable execution standards.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
          </div>
          <h3 class="why-title">Solutions That Fit</h3>
          <p class="why-desc">Tailoring software architecture and procurement lists to exact requirements.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="why-title">Quality-Focused Thinking</h3>
          <p class="why-desc">Thorough testing for code quality and strict checking for item sourcing.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </div>
          <h3 class="why-title">Continued Improvement</h3>
          <p class="why-desc">Ongoing updates and refinements as organization needs evolve.</p>
        </div>
      </div>
    </section>

    <!-- 8. DIFFERENTIATORS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHAT MAKES SNIPEZON DIFFERENT</span>
        <h2 class="section-title">More than a service provider.</h2>
        <p class="section-description">A dependable organization built around clear business coordination.</p>
      </div>

      <div class="differentiators-grid">
        <div class="diff-card" data-animate="fade-up">
          <div class="diff-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
          </div>
          <h3 class="diff-title">Digital + Supply Capability</h3>
        </div>

        <div class="diff-card" data-animate="fade-up" data-delay="100">
          <div class="diff-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="diff-title">Business-First Perspective</h3>
        </div>

        <div class="diff-card" data-animate="fade-up" data-delay="200">
          <div class="diff-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </div>
          <h3 class="diff-title">Customized Approach</h3>
        </div>

        <div class="diff-card" data-animate="fade-up" data-delay="300">
          <div class="diff-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="diff-title">Direct Coordination</h3>
        </div>

        <div class="diff-card" data-animate="fade-up" data-delay="400">
          <div class="diff-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
          </div>
          <h3 class="diff-title">Support Beyond Delivery</h3>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS CAPABILITIES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHAT WE HELP BUSINESSES ACHIEVE</span>
        <h2 class="section-title">End-to-end capability matrix.</h2>
        <p class="section-description">Practical solutions for digital transformation and physical procurement.</p>
      </div>

      <div class="requirements-bento-grid">
        <div class="requirement-group-card" data-animate="fade-up">
          <div class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z"/></svg>
          </div>
          <h3 class="req-card-title">Digitize Operations</h3>
          <p class="req-card-desc">Replace manual spreadsheets with custom software platforms and accounting ledger systems.</p>
          <a class="req-card-action" aria-disabled="true">Explore Solutions &rarr;</a>
        </div>

        <div class="requirement-group-card" data-animate="fade-up" data-delay="100">
          <div class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="req-card-title">Automate Customer Interaction</h3>
          <p class="req-card-desc">Implement WhatsApp Business API, AI customer care bots, and sales inquiry assistants.</p>
          <a class="req-card-action" aria-disabled="true">Explore Solutions &rarr;</a>
        </div>

        <div class="requirement-group-card" data-animate="fade-up" data-delay="200">
          <div class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
          </div>
          <h3 class="req-card-title">Build Modern Web Experiences</h3>
          <p class="req-card-desc">Develop fast, accessible corporate websites and modern e-commerce storefronts.</p>
          <a class="req-card-action" aria-disabled="true">Explore Solutions &rarr;</a>
        </div>

        <div class="requirement-group-card" data-animate="fade-up" data-delay="300">
          <div class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="req-card-title">Improve Business Visibility</h3>
          <p class="req-card-desc">Gain real-time analytical reports and operational dashboard insights.</p>
          <a class="req-card-action" aria-disabled="true">Explore Solutions &rarr;</a>
        </div>

        <div class="requirement-group-card" data-animate="fade-up">
          <div class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.9 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </div>
          <h3 class="req-card-title">Source Essential Items</h3>
          <p class="req-card-desc">Consolidate corporate stationery, IT accessories, safety PPE, and home supplies.</p>
          <a class="req-card-action" aria-disabled="true">Explore Supply &rarr;</a>
        </div>

        <div class="requirement-group-card" data-animate="fade-up" data-delay="100">
          <div class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
          </div>
          <h3 class="req-card-title">Coordinate Diverse Requirements</h3>
          <p class="req-card-desc">Streamline multi-category procurement through one single point of contact.</p>
          <a class="req-card-action" aria-disabled="true">Explore Supply &rarr;</a>
        </div>
      </div>
    </section>

    <!-- 10. PARTNERSHIP APPROACH -->
    <section class="process-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PARTNERSHIP</span>
        <h2 class="section-title">Built for lasting working relationships.</h2>
        <p class="section-description">A structured 5-stage lifecycle for ongoing client collaboration.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Discuss</h3>
          <p class="process-step-desc">Open conversation regarding goals and technical requirements.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Plan</h3>
          <p class="process-step-desc">Clear roadmap, scope definition, and architectural planning.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Execute</h3>
          <p class="process-step-desc">Responsible engineering and quality-checked procurement.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Review</h3>
          <p class="process-step-desc">Testing, feedback iteration, and delivery verification.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Continue</h3>
          <p class="process-step-desc">Ongoing maintenance, system updates, and repeat supply support.</p>
        </div>
      </div>
    </section>

    <!-- 11. MESSAGE FROM SNIPEZON -->
    <section class="section container">
      <div class="message-quote-card" data-animate="fade-up">
        <span class="section-eyebrow">A MESSAGE FROM SNIPEZON</span>
        <blockquote class="message-quote-text" style="margin-top: 16px;">
          “Every strong solution begins with listening. We aim to understand the requirement clearly, build responsibly and remain available as businesses grow.”
        </blockquote>
      </div>
    </section>

    <!-- 12. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Common questions about Snipezon.</h2>
        <p class="section-description">Clear answers about our structure and capabilities.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-abt-1" id="faq-abtn-1">
            <span>What does Snipezon do?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-abt-1" class="faq-panel" role="region" aria-labelledby="faq-abtn-1">
            <div class="faq-content">
              Snipezon provides custom digital software solutions (AI automation, WhatsApp Business API, websites, accounting software) and requirement-based B2B general supply sourcing.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-abt-2" id="faq-abtn-2">
            <span>Does Snipezon provide both digital solutions and physical supplies?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-abt-2" class="faq-panel" role="region" aria-labelledby="faq-abtn-2">
            <div class="faq-content">
              Yes. We operate two focused divisions: a Digital Solutions division for software and automation engineering, and a Supply Division for general business procurement.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-abt-3" id="faq-abtn-3">
            <span>Can Snipezon build a solution for a specific business requirement?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-abt-3" class="faq-panel" role="region" aria-labelledby="faq-abtn-3">
            <div class="faq-content">
              Yes. We tailor software architectures, AI bots, and quotation lists around your exact operational workflows and specifications.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-abt-4" id="faq-abtn-4">
            <span>What categories are available through the Supply Division?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-abt-4" class="faq-panel" role="region" aria-labelledby="faq-abtn-4">
            <div class="faq-content">
              Our Supply Division coordinates sourcing across Home Essentials, Corporate Items, Industrial Items, and Toys.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-abt-5" id="faq-abtn-5">
            <span>How can I discuss a project or supply requirement?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-abt-5" class="faq-panel" role="region" aria-labelledby="faq-abtn-5">
            <div class="faq-content">
              You can contact our team through our Contact page or message us directly via WhatsApp at +92 312 2261919.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 13. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Let’s build a smarter way forward.</h2>
        <p class="cta-banner-desc">Whether you need a digital system, business automation or general item sourcing, start the conversation with Snipezon.</p>
        <div class="cta-banner-actions">
          <a class="button button-primary" aria-disabled="true">
            <span>Discuss Your Requirement</span>
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
