@extends('frontend.layouts.app')

@section('title', 'Portfolio & Case Studies | Snipezon')
@section('meta_description', 'Explore representative Snipezon solutions across custom software, AI automation, WhatsApp, e-commerce and modern website development.')
@section('body_data_page', 'portfolio')

@section('page_css')
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/home.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/portfolio.css') }}">
@endsection

@section('content')
    <!-- 1. PORTFOLIO HERO -->
    <section class="portfolio-hero-section container">
      <!-- Breadcrumb -->
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Our Work</span>
      </nav>

      <div class="portfolio-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">PORTFOLIO &amp; CASE STUDIES</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Digital solutions built to solve <span class="highlight-purple">real challenges.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            Explore how thoughtful software, intelligent automation and modern digital experiences can transform the way organizations operate and serve their customers.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="#portfolio-projects" class="button button-primary">
              <span>Explore Projects</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#project-enquiry" class="button button-secondary">
              <span>Start a Project</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Floating Project Gallery Visual -->
        <div class="portfolio-gallery-wrapper" aria-hidden="true">
          <div class="pg-core-hub">
            <img src="{{ asset('snipezon/images/logo/logo-icon.svg') }}" alt="Snipezon Core" width="75" height="75">
          </div>

          <div class="pg-floating-card pg-card-1">
            <div class="pg-card-icon">
              <svg viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/></svg>
            </div>
            <span class="pg-card-text">Business Dashboard</span>
          </div>

          <div class="pg-floating-card pg-card-2">
            <div class="pg-card-icon">
              <svg viewBox="0 0 24 24"><path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/></svg>
            </div>
            <span class="pg-card-text">Mobile Interface</span>
          </div>

          <div class="pg-floating-card pg-card-3">
            <div class="pg-card-icon">
              <svg viewBox="0 0 24 24"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
            </div>
            <span class="pg-card-text">AI Chatbot</span>
          </div>

          <div class="pg-floating-card pg-card-4">
            <div class="pg-card-icon">
              <svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
            </div>
            <span class="pg-card-text">E-commerce Portal</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. EXPERTISE STRIP (MINI-PROJECT PANELS) -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Core Technical Expertise</h2>
      <div class="expertise-panels-grid">
        <!-- Panel 1: Software Platforms -->
        <div class="expertise-panel-card">
          <div class="expertise-panel-header">
            <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="18" rx="2"/><path d="M2 9h20M7 13l-2 2 2 2M13 13l2 2-2 2"/></svg>
            <h3 class="expertise-panel-title">Software Platforms</h3>
          </div>
          <p class="expertise-panel-desc">Custom web applications, operational dashboards, and enterprise systems.</p>
          
          <div class="micro-interface micro-dash-ui">
            <div class="micro-dash-sidebar">
              <div class="micro-dash-dot"></div>
              <div class="micro-dash-dot"></div>
              <div class="micro-dash-dot"></div>
            </div>
            <div class="micro-dash-main">
              <div class="micro-dash-topbar">
                <span class="micro-tag">APP DASHBOARD</span>
                <span class="micro-status">ACTIVE</span>
              </div>
              <div class="micro-dash-chart">
                <div class="micro-bar" style="height: 60%;"></div>
                <div class="micro-bar" style="height: 85%;"></div>
                <div class="micro-bar" style="height: 40%;"></div>
                <div class="micro-bar" style="height: 100%;"></div>
              </div>
              <div class="micro-dash-row">
                <span>Modules</span>
                <span class="micro-val">Synced</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Panel 2: AI Workflows -->
        <div class="expertise-panel-card">
          <div class="expertise-panel-header">
            <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2a10 10 0 1 0 10 10H12V2z"/><path d="M12 12L2.5 7.5"/></svg>
            <h3 class="expertise-panel-title">AI Workflows</h3>
          </div>
          <p class="expertise-panel-desc">Intelligent lead scoring, automated routing, and conversational AI integrations.</p>

          <div class="micro-interface micro-flow-ui">
            <div class="micro-flow-step">
              <span class="flow-label">Trigger</span>
              <span class="flow-badge">Inbound</span>
            </div>
            <span class="flow-arrow">&rarr;</span>
            <div class="micro-flow-step micro-flow-active">
              <span class="flow-label">AI Agent</span>
              <span class="flow-badge">Classify</span>
            </div>
            <span class="flow-arrow">&rarr;</span>
            <div class="micro-flow-step">
              <span class="flow-label">Action</span>
              <span class="flow-badge">Resolved</span>
            </div>
          </div>
        </div>

        <!-- Panel 3: Messaging & Bots -->
        <div class="expertise-panel-card">
          <div class="expertise-panel-header">
            <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            <h3 class="expertise-panel-title">Messaging &amp; Bots</h3>
          </div>
          <p class="expertise-panel-desc">WhatsApp API setups, automated customer support, and interactive sales bots.</p>

          <div class="micro-interface micro-chat-ui">
            <div class="micro-chat-bubble micro-chat-user">Need pricing for bulk supplies?</div>
            <div class="micro-chat-bubble micro-chat-bot">Here is our instant digital catalog link!</div>
          </div>
        </div>

        <!-- Panel 4: Digital Platforms -->
        <div class="expertise-panel-card">
          <div class="expertise-panel-header">
            <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            <h3 class="expertise-panel-title">Digital Commerce</h3>
          </div>
          <p class="expertise-panel-desc">Modern e-commerce storefronts, corporate portals, and high-performance websites.</p>

          <div class="micro-interface micro-store-ui">
            <div class="micro-store-header">
              <span class="micro-store-brand">STOREFRONT</span>
              <span class="micro-cart-badge">3 Items</span>
            </div>
            <div class="micro-store-grid">
              <div class="micro-store-item">Product A</div>
              <div class="micro-store-item">Product B</div>
            </div>
            <div class="micro-store-footer">Fast Checkout Ready</div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. FEATURED / SELECTED SOLUTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">SELECTED FEATURED SOLUTION</span>
        <h2 class="section-title">Enterprise Business Automation System</h2>
        <p class="section-description">A multi-module web platform designed to streamline operations, inventory tracking, and client communications.</p>
      </div>

      <div class="featured-solution-card" data-animate="fade-up">
        <div class="featured-content">
          <div class="representative-badge">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <span>REPRESENTATIVE SOLUTION</span>
          </div>
          <h3 class="hero-heading" style="font-size: 1.8rem; margin-bottom: 16px;">Centralized Operational Control</h3>
          <p style="color: var(--color-text-secondary); margin-bottom: 24px; line-height: 1.6;">
            Built for organizations requiring unified management across multiple departments. Combines automated workflow triggers, real-time analytics, and role-based access control into one accessible portal.
          </p>

          <div class="features-list" style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 32px;">
            <div style="display: flex; align-items: center; gap: 10px; font-size: 0.95rem; color: var(--color-text-secondary);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-cyan)" stroke-width="2.5" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Automated task assignment &amp; status updates</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px; font-size: 0.95rem; color: var(--color-text-secondary);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-cyan)" stroke-width="2.5" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Integrated WhatsApp API notification triggers</span>
            </div>
            <div style="display: flex; align-items: center; gap: 10px; font-size: 0.95rem; color: var(--color-text-secondary);">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-cyan)" stroke-width="2.5" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Exportable financial &amp; performance reports</span>
            </div>
          </div>

          <a href="#project-enquiry" class="button button-primary">
            <span>Request Similar System</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="featured-dashboard-preview">
          <div class="dashboard-header-bar">
            <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">SNIPEZON OS v2.4</span>
            <span style="font-size: 0.75rem; color: #22c55e; font-weight: 600;">System Normal</span>
          </div>

          <div class="dashboard-modules-grid">
            <div class="dash-module">
              <span class="dash-module-title">Active Orders</span>
              <span class="dash-module-value">1,284</span>
            </div>
            <div class="dash-module">
              <span class="dash-module-title">Response Rate</span>
              <span class="dash-module-value">99.4%</span>
            </div>
            <div class="dash-module">
              <span class="dash-module-title">API Latency</span>
              <span class="dash-module-value">42ms</span>
            </div>
          </div>

          <div style="background: rgba(0,0,0,0.3); border: 1px solid var(--color-border-light); border-radius: var(--radius-small); padding: 12px; font-size: 0.8rem; color: var(--color-text-secondary);">
            <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
              <span>Live Workflow Queue</span>
              <span style="color: var(--color-cyan);">Running</span>
            </div>
            <div style="height: 6px; background: var(--color-bg); border-radius: 3px; overflow: hidden;">
              <div style="width: 78%; height: 100%; background: linear-gradient(90deg, var(--color-primary), var(--color-cyan));"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. PORTFOLIO FILTERS & PROJECT GRID -->
    <section id="portfolio-projects" class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">EXPLORE BY CAPABILITY</span>
        <h2 class="section-title">Representative Projects &amp; Capabilities</h2>
        <p class="section-description">Filter our representative work by technology stack and solution domain.</p>
      </div>

      <!-- Filter Controls Bar -->
      <div id="portfolio-filters" class="filter-bar-wrapper" data-animate="fade-up">
        <button type="button" class="filter-btn active" data-filter="all" aria-pressed="true">All Work</button>
        <button type="button" class="filter-btn" data-filter="custom-software" aria-pressed="false">Custom Software</button>
        <button type="button" class="filter-btn" data-filter="ai-automation" aria-pressed="false">AI &amp; Automation</button>
        <button type="button" class="filter-btn" data-filter="whatsapp-chatbots" aria-pressed="false">WhatsApp &amp; Chatbots</button>
        <button type="button" class="filter-btn" data-filter="ecommerce" aria-pressed="false">E-commerce</button>
        <button type="button" class="filter-btn" data-filter="websites" aria-pressed="false">Websites</button>
      </div>

      <!-- Accessibility Live Region for Filter Announcements -->
      <div id="filter-results-status" class="sr-only" aria-live="polite" aria-atomic="true">
        Showing 6 projects for All Work.
      </div>

      <!-- Six Representative Project Cards Grid -->
      <div id="portfolio-projects-grid" class="portfolio-grid">
        <!-- Project 1 -->
        <article class="portfolio-project-card" data-category="ai-automation whatsapp-chatbots" data-animate="fade-up">
          <div class="card-image-wrap">
            <img src="{{ asset('snipezon/images/portfolio/ai-support-workspace.svg') }}" alt="AI Customer Support Workspace" width="600" height="360" loading="lazy">
          </div>
          <div class="card-body">
            <div class="card-tags">
              <span class="card-tag">AI Automation</span>
              <span class="card-tag">WhatsApp API</span>
            </div>
            <h3 class="card-title">AI Customer Support Workspace</h3>
            <p class="card-desc">An intelligent support platform combining automated intent classification, WhatsApp API triggers, and live agent handover for high-volume customer care.</p>
          </div>
        </article>

        <!-- Project 2 -->
        <article class="portfolio-project-card" data-category="ecommerce websites" data-animate="fade-up" data-delay="100">
          <div class="card-image-wrap">
            <img src="{{ asset('snipezon/images/portfolio/ecommerce-platform.svg') }}" alt="Modern E-commerce Experience" width="600" height="360" loading="lazy">
          </div>
          <div class="card-body">
            <div class="card-tags">
              <span class="card-tag">E-commerce</span>
              <span class="card-tag">Web Portal</span>
            </div>
            <h3 class="card-title">Modern E-commerce Experience</h3>
            <p class="card-desc">High-performance digital storefront featuring fast product filtering, mobile checkout optimization, and automated inventory sync.</p>
          </div>
        </article>

        <!-- Project 3 -->
        <article class="portfolio-project-card" data-category="ai-automation whatsapp-chatbots" data-animate="fade-up" data-delay="200">
          <div class="card-image-wrap">
            <img src="{{ asset('snipezon/images/portfolio/business-automation.svg') }}" alt="WhatsApp Engagement Platform" width="600" height="360" loading="lazy">
          </div>
          <div class="card-body">
            <div class="card-tags">
              <span class="card-tag">WhatsApp API</span>
              <span class="card-tag">Sales Bot</span>
            </div>
            <h3 class="card-title">WhatsApp Engagement Platform</h3>
            <p class="card-desc">Automated lead qualification and product catalog bot delivering instant responses and booking coordination directly inside WhatsApp.</p>
          </div>
        </article>

        <!-- Project 4 -->
        <article class="portfolio-project-card" data-category="custom-software" data-animate="fade-up" data-delay="300">
          <div class="card-image-wrap">
            <img src="{{ asset('snipezon/images/portfolio/accounting-system.svg') }}" alt="Accounting &amp; Business Reporting System" width="225" height="150" loading="lazy">
          </div>
          <div class="card-body">
            <div class="card-tags">
              <span class="card-tag">Custom Software</span>
              <span class="card-tag">Reporting</span>
            </div>
            <h3 class="card-title">Accounting &amp; Business Reporting System</h3>
            <p class="card-desc">Tailored financial dashboard providing general ledger tracking, invoice generation, expense categorization, and exportable audit trails.</p>
          </div>
        </article>

        <!-- Project 5 -->
        <article class="portfolio-project-card" data-category="websites" data-animate="fade-up" data-delay="400">
          <div class="card-image-wrap">
            <img src="{{ asset('snipezon/images/portfolio/corporate-website.svg') }}" alt="Corporate Website Experience" width="225" height="150" loading="lazy">
          </div>
          <div class="card-body">
            <div class="card-tags">
              <span class="card-tag">Websites</span>
              <span class="card-tag">UI/UX Design</span>
            </div>
            <h3 class="card-title">Corporate Website Experience</h3>
            <p class="card-desc">Responsive corporate portal built for speed, SEO excellence, accessible navigation, and seamless mobile engagement.</p>
          </div>
        </article>

        <!-- Project 6 -->
        <article class="portfolio-project-card" data-category="custom-software ai-automation" data-animate="fade-up" data-delay="500">
          <div class="card-image-wrap">
            <img src="{{ asset('snipezon/images/portfolio/sales-assistant.svg') }}" alt="Sales Automation Assistant" width="225" height="150" loading="lazy">
          </div>
          <div class="card-body">
            <div class="card-tags">
              <span class="card-tag">Custom Software</span>
              <span class="card-tag">AI Assistant</span>
            </div>
            <h3 class="card-title">Sales Automation Assistant</h3>
            <p class="card-desc">Interactive sales assistant designed to recommend products, calculate estimated quotes, and capture qualified lead information automatically.</p>
          </div>
        </article>
      </div>
    </section>

    <!-- 5. CASE STUDY FRAMEWORK -->
    <section class="section container case-study-framework">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">HOW WE DELIVER RESULTS</span>
        <h2 class="section-title">Case-study engineering framework.</h2>
        <p class="section-description">Our structured four-stage methodology applied across every client solution.</p>
      </div>

      <div class="cs-stages-grid">
        <div class="cs-stage-card" data-animate="fade-up">
          <span class="cs-stage-num">01</span>
          <h3 class="cs-stage-title">Understand</h3>
          <p class="cs-stage-desc">Deep discovery of operational friction, workflow bottlenecks, and specific business targets.</p>
        </div>

        <div class="cs-stage-card" data-animate="fade-up" data-delay="100">
          <span class="cs-stage-num">02</span>
          <h3 class="cs-stage-title">Design</h3>
          <p class="cs-stage-desc">Architecting robust data schemas, intuitive interfaces, and clear API integration points.</p>
        </div>

        <div class="cs-stage-card" data-animate="fade-up" data-delay="200">
          <span class="cs-stage-num">03</span>
          <h3 class="cs-stage-title">Deliver</h3>
          <p class="cs-stage-desc">Standards-compliant frontend &amp; backend engineering with automated quality verification.</p>
        </div>

        <div class="cs-stage-card" data-animate="fade-up" data-delay="300">
          <span class="cs-stage-num">04</span>
          <h3 class="cs-stage-title">Support</h3>
          <p class="cs-stage-desc">Ongoing operational coordination, performance tuning, and feature expansion.</p>
        </div>
      </div>
    </section>

    <!-- 6. INSIDE A SOLUTION (BEFORE / AFTER) -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TRANSFORMATION IMPACT</span>
        <h2 class="section-title">Inside a solution transformation.</h2>
        <p class="section-description">Comparison of legacy operational challenges versus modernized Snipezon architecture.</p>
      </div>

      <div class="before-after-grid">
        <!-- Before Card -->
        <div class="ba-card before-card" data-animate="fade-up">
          <h3 class="ba-title">Before Modernization</h3>
          <ul class="ba-list">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12"/></svg>
              <span>Disconnected spreadsheets &amp; manual tracking</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12"/></svg>
              <span>Delayed customer inquiry response times</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12"/></svg>
              <span>Uncoordinated order status communication</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12"/></svg>
              <span>Limited real-time visibility for management</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" aria-hidden="true"><path d="M18 6L6 18M6 6l12 12"/></svg>
              <span>Prone to human data-entry errors</span>
            </li>
          </ul>
        </div>

        <!-- After Card -->
        <div class="ba-card after-card" data-animate="fade-up" data-delay="100">
          <h3 class="ba-title">After Snipezon Architecture</h3>
          <ul class="ba-list">
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Centralized Operations Dashboard</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Structured Customer Management</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Automated Order Tracking</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Real-time Analytical Reports</span>
            </li>
            <li>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" aria-hidden="true"><path d="M20 6L9 17l-5-5"/></svg>
              <span>Secured Team Role Access</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- 7. SUPPLY DIVISION SHOWCASE -->
    <section class="section container portfolio-supply-section">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">SUPPLY DIVISION</span>
        <h2 class="section-title">Procurement support in practice.</h2>
        <p class="section-description">Requirement-based sourcing and quotation coordination across a range of general item categories.</p>
      </div>

      <div class="portfolio-supply-grid">
        <article class="portfolio-supply-card" data-animate="fade-up">
          <div class="portfolio-supply-media">
            <img src="{{ asset('snipezon/images/supply/home-essentials.svg') }}" alt="Home Essentials Category" width="100" height="60">
          </div>
          <div class="portfolio-supply-content">
            <h3 class="portfolio-supply-title">Home Essentials</h3>
          </div>
        </article>

        <article class="portfolio-supply-card" data-animate="fade-up" data-delay="100">
          <div class="portfolio-supply-media">
            <img src="{{ asset('snipezon/images/supply/corporate-items.svg') }}" alt="Corporate Items Category" width="100" height="60">
          </div>
          <div class="portfolio-supply-content">
            <h3 class="portfolio-supply-title">Corporate Items</h3>
          </div>
        </article>

        <article class="portfolio-supply-card" data-animate="fade-up" data-delay="200">
          <div class="portfolio-supply-media">
            <img src="{{ asset('snipezon/images/supply/industrial-items.svg') }}" alt="Industrial Items Category" width="100" height="60">
          </div>
          <div class="portfolio-supply-content">
            <h3 class="portfolio-supply-title">Industrial Items</h3>
          </div>
        </article>

        <article class="portfolio-supply-card" data-animate="fade-up" data-delay="300">
          <div class="portfolio-supply-media">
            <img src="{{ asset('snipezon/images/supply/toys.svg') }}" alt="Toys Category" width="100" height="60">
          </div>
          <div class="portfolio-supply-content">
            <h3 class="portfolio-supply-title">Toys</h3>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 32px;" data-animate="fade-up">
        <a href="{{ route('general-supply') }}" class="button button-primary">
          <span>Explore Supply Division</span>
          <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </section>

    <!-- 8. PROJECT PRINCIPLES -->
    <section class="section container principles-section">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHAT EVERY PROJECT SHOULD DELIVER</span>
        <h2 class="section-title">Core engineering principles.</h2>
        <p class="section-description">Our foundational commitments on every software build.</p>
      </div>

      <div class="principles-grid">
        <div class="principle-card" data-animate="fade-up">
          <div class="principle-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </div>
          <h3 class="principle-title">Clear Business Purpose</h3>
          <p class="principle-desc">Every feature is designed to address explicit operational goals.</p>
        </div>

        <div class="principle-card" data-animate="fade-up" data-delay="100">
          <div class="principle-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
          </div>
          <h3 class="principle-title">Intuitive User Experience</h3>
          <p class="principle-desc">Clean interfaces focused on usability, clarity, and accessibility.</p>
        </div>

        <div class="principle-card" data-animate="fade-up" data-delay="200">
          <div class="principle-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="principle-title">Connected Workflows</h3>
          <p class="principle-desc">Seamless integration between modules, communication, and reporting.</p>
        </div>

        <div class="principle-card" data-animate="fade-up" data-delay="300">
          <div class="principle-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z"/></svg>
          </div>
          <h3 class="principle-title">Maintainable Technology</h3>
          <p class="principle-desc">Structured, standards-compliant codebase built for long-term reliability.</p>
        </div>

        <div class="principle-card" data-animate="fade-up" data-delay="400">
          <div class="principle-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="principle-title">Reliable Support</h3>
          <p class="principle-desc">Responsive coordination and maintenance post-launch.</p>
        </div>
      </div>
    </section>

    <!-- 9. PROJECT ENQUIRY SECTION -->
    <section id="project-enquiry" class="quote-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">SHARE A PROJECT</span>
        <h2 class="section-title">Let’s build the right solution together.</h2>
        <p class="section-description">Fill out your project specifications to prepare a WhatsApp project enquiry.</p>
      </div>

      <div class="quote-grid">
        <!-- Form Left -->
        <div class="quote-form-card" data-animate="fade-up">
          <div id="project-error-summary" class="form-error-summary" role="alert" tabindex="-1" style="display: none; background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; border-radius: var(--radius-small); padding: 16px; margin-bottom: 24px;"></div>

          <form id="project-enquiry-form" novalidate>
            <div class="form-grid-2col">
              <div class="form-group">
                <label for="project-name" class="form-label">Full Name <span class="required-star">*</span></label>
                <input type="text" id="project-name" name="name" class="form-input" placeholder="e.g. John Doe" required>
              </div>

              <div class="form-group">
                <label for="project-company" class="form-label">Company Name</label>
                <input type="text" id="project-company" name="company" class="form-input" placeholder="e.g. Acme Corp">
              </div>

              <div class="form-group">
                <label for="project-email" class="form-label">Email Address <span class="required-star">*</span></label>
                <input type="email" id="project-email" name="email" class="form-input" placeholder="john@example.com" required>
              </div>

              <div class="form-group">
                <label for="project-phone" class="form-label">Phone / WhatsApp <span class="required-star">*</span></label>
                <input type="tel" id="project-phone" name="phone" class="form-input" placeholder="+92 3XX XXXXXXX" required>
              </div>

              <div class="form-group full-width">
                <label for="project-type" class="form-label">Project Type <span class="required-star">*</span></label>
                <select id="project-type" name="project_type" class="form-select" required>
                  <option value="">Select Project Type...</option>
                  <option value="custom-software">Custom Software Development</option>
                  <option value="ai-software">AI-Based Software Solutions</option>
                  <option value="whatsapp-api">WhatsApp Business API Setup</option>
                  <option value="ai-chatbot">Full AI Chatbot Solution</option>
                  <option value="accounting">Accounting Software</option>
                  <option value="ecommerce">E-commerce Website</option>
                  <option value="corporate-web">Corporate Website</option>
                  <option value="upgrade">Existing System Upgrade</option>
                  <option value="other">Other Sourcing / Digital Requirement</option>
                </select>
              </div>

              <div class="form-group full-width">
                <label for="project-details" class="form-label">Tell Us About Your Project <span class="required-star">*</span></label>
                <textarea id="project-details" name="details" class="form-textarea" rows="4" placeholder="Describe your project goals, key features, workflows or operational requirements..." required></textarea>
              </div>

              <div class="form-group full-width">
                <label for="project-file" class="form-label">Attach Brief (Optional)</label>
                <div class="form-file-zone" onclick="document.getElementById('project-file').click()">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-cyan)" stroke-width="2" style="margin: 0 auto 8px auto;" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
                  <span style="font-size: 0.875rem; color: var(--color-text-secondary); display: block;">Click to choose PDF, DOC, DOCX, XLS, XLSX, CSV, JPG, JPEG, PNG file (Max 10MB)</span>
                  <span id="project-file-notice" style="font-size: 0.8rem; color: var(--color-cyan); font-weight: 600; display: block; margin-top: 4px;"></span>
                </div>
                <input type="file" id="project-file" name="file" style="display: none;" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.jpg,.jpeg,.png">
              </div>

              <div class="form-group full-width">
                <label class="form-label">Preferred Contact Method</label>
                <div class="radio-group-flex">
                  <label class="radio-label">
                    <input type="radio" name="preferred-contact" value="WhatsApp" checked>
                    <span>WhatsApp</span>
                  </label>
                  <label class="radio-label">
                    <input type="radio" name="preferred-contact" value="Phone">
                    <span>Phone Call</span>
                  </label>
                  <label class="radio-label">
                    <input type="radio" name="preferred-contact" value="Email">
                    <span>Email</span>
                  </label>
                </div>
              </div>

              <div class="form-group full-width">
                <label class="radio-label">
                  <input type="checkbox" id="project-consent" name="consent" required>
                  <span>I agree to be contacted by Snipezon regarding this project request. <span class="required-star">*</span></span>
                </label>
              </div>
            </div>

            <div class="form-notice-box">
              Submitting this form will prepare your project request and open WhatsApp. You can attach your brief file in the WhatsApp conversation.
            </div>

            <button type="submit" class="button button-primary" style="width: 100%; justify-content: center;">
              <span>Prepare Project Request</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </form>
        </div>

        <!-- Sidebar Right -->
        <div class="quote-sidebar-card" data-animate="fade-up" data-delay="100">
          <h3 class="sidebar-heading">Get in touch</h3>
          <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin-bottom: 20px;">
            Prefer a quick conversation? Reach out directly to our solution architects.
          </p>

          <div style="border-top: 1px solid var(--color-border-light); padding-top: 20px; margin-bottom: 20px;">
            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Direct Phone / WhatsApp:</p>
            <p style="font-size: 0.95rem; font-weight: 700; color: var(--color-text); margin-bottom: 12px;"><a href="tel:+923122261919">+92 312 2261919</a></p>
            
            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Email Address:</p>
            <p style="font-size: 0.95rem; font-weight: 700; color: var(--color-text); margin-bottom: 12px;"><a href="mailto:ceo@snipezon.com">ceo@snipezon.com</a></p>

            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Office Location:</p>
            <p style="font-size: 0.875rem; color: var(--color-text);">Shop No. F19, 1st Floor, Danny Craft Tower, Saddar</p>
          </div>

          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20project." class="button button-whatsapp" style="width: 100%; justify-content: center;" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>

    <!-- 10. FAQ SECTION -->
    <section class="section container faq-section">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Common questions about projects.</h2>
        <p class="section-description">Clear details on how we plan and engineer digital solutions.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button type="button" class="faq-button" aria-expanded="true" aria-controls="faq-port-1" id="faq-pbtn-1">
            <span>What types of projects does Snipezon work on?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-port-1" class="faq-panel" role="region" aria-labelledby="faq-pbtn-1">
            <div class="faq-content">
              Snipezon builds custom web software, AI automation systems, WhatsApp Business API solutions, e-commerce platforms, corporate websites, and accounting management tools.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button type="button" class="faq-button" aria-expanded="false" aria-controls="faq-port-2" id="faq-pbtn-2">
            <span>Can you improve an existing system or website?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-port-2" class="faq-panel" role="region" aria-labelledby="faq-pbtn-2">
            <div class="faq-content">
              Yes. We can refactor existing digital systems, improve performance, add AI capabilities, or integrate modern API workflows.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button type="button" class="faq-button" aria-expanded="false" aria-controls="faq-port-3" id="faq-pbtn-3">
            <span>Can Snipezon integrate AI and automation into a project?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-port-3" class="faq-panel" role="region" aria-labelledby="faq-pbtn-3">
            <div class="faq-content">
              Yes. We integrate conversational AI, intelligent support bots, automated lead qualification, and workflow triggers to streamline operations.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button type="button" class="faq-button" aria-expanded="false" aria-controls="faq-port-4" id="faq-pbtn-4">
            <span>Do you work on both new projects and upgrades?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-port-4" class="faq-panel" role="region" aria-labelledby="faq-pbtn-4">
            <div class="faq-content">
              Yes. We work on new ground-up digital builds as well as incremental upgrades to legacy software platforms.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button type="button" class="faq-button" aria-expanded="false" aria-controls="faq-port-5" id="faq-pbtn-5">
            <span>How can I discuss my project requirements?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-port-5" class="faq-panel" role="region" aria-labelledby="faq-pbtn-5">
            <div class="faq-content">
              You can fill out our Project Enquiry form above or contact our solution architects directly via WhatsApp at +92 312 2261919.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 11. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Your project could be next.</h2>
        <p class="cta-banner-desc">Share the challenge, and let’s explore the right digital solution together.</p>
        <div class="cta-banner-actions">
          <a href="#project-enquiry" class="button button-primary">
            <span>Start a Project</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20project." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>

  <!-- ACCESSIBLE WHATSAPP CONFIRMATION MODAL -->
  <div id="quote-confirm-modal" class="modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    <div class="modal-card">
      <h3 id="modal-title" class="modal-title" style="font-size:1.3rem; margin-bottom:12px; color:var(--color-text);">Confirm Project Enquiry Summary</h3>
      <p class="modal-subtitle" style="font-size:0.875rem; color:var(--color-text-secondary); margin-bottom:16px;">
        Your requirement has not been submitted to a server. Continuing will open WhatsApp with a prepared message.
      </p>
      <div id="modal-summary-content" class="modal-summary-body" style="background:var(--color-bg-secondary); border:1px solid var(--color-border-light); padding:16px; border-radius:var(--radius-small); font-size:0.875rem; line-height:1.6;"></div>
      <div id="modal-file-notice"></div>
      <div class="modal-actions" style="margin-top: 24px; display: flex; gap: 12px; justify-content: flex-end; flex-wrap: wrap;">
        <button type="button" id="modal-btn-review" class="button button-secondary">Review Form</button>
        <button type="button" id="modal-btn-continue" class="button button-primary">Continue to WhatsApp &rarr;</button>
      </div>
    </div>
  </div>
@endsection
