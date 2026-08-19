@extends('layouts.frontend')

@section('title', 'Sales Bots for Products & Services | Snipezon')
@section('meta_description', 'Deploy intelligent sales bots for products and services with Snipezon to qualify leads, answer product queries, and guide buyers to your sales team.')
@section('body_data_page', 'sales-bots')

@section('content')
<!-- 1. BREADCRUMB AND SERVICE HERO -->
    <section class="service-hero-section container">
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <a href="{{ route('digital-solutions') }}">Digital Solutions</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Sales Bots</span>
      </nav>

      <div class="service-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">SALES BOTS</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Guide customers from first question to the <span class="highlight-purple">right next step.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            We design interactive sales bots that answer product questions, qualify visitor interest and pass warm leads to your sales team.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Discuss Sales Bots</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#sales-process" class="button button-secondary">
              <span>View Bot Process</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 9l-7 7-7-7"/></svg>
            </a>
          </div>
        </div>

        <!-- Technical Visual Composition -->
        <div class="tech-arch-wrapper" aria-hidden="true">
          <div class="arch-ring arch-ring-inner"></div>
          <div class="arch-ring arch-ring-outer"></div>

          <div class="arch-core-hub">
            <img src="../{{ asset('assets/images/') }}logo/logo-icon.svg" alt="Snipezon Core" width="75" height="75">
          </div>

          <div class="arch-node arch-node-1">
            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            <span>Visitor</span>
          </div>

          <div class="arch-node arch-node-2">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Requirement</span>
          </div>

          <div class="arch-node arch-node-3">
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span>Qualification</span>
          </div>

          <div class="arch-node arch-node-4">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
            <span>Product Match</span>
          </div>

          <div class="arch-node arch-node-5">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            <span>Sales Team</span>
          </div>

          <div class="arch-node arch-node-6">
            <svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7z"/></svg>
            <span>Follow-Up</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. SERVICE VALUE STRIP -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Service Principles & Capabilities</h2>
      <div class="value-grid">
        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="value-title">Guided Enquiries</h3>
          <p class="value-desc">Interactive product questions helping visitors find the right solution.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="value-title">Lead Qualification</h3>
          <p class="value-desc">Collecting budget, timeline and requirement details before team transfer.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
          <h3 class="value-title">Consistent Information</h3>
          <p class="value-desc">Delivering standard product specs and service pricing guidelines 24/7.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="value-title">Sales Handover</h3>
          <p class="value-desc">Passing qualified lead summary cards directly into your sales CRM or email.</p>
        </div>
      </div>
    </section>

    <!-- 3. SERVICE OVERVIEW -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OVERVIEW</span>
          <h2 class="section-title">Conversational sales guidance.</h2>
          <p>
            Snipezon builds sales bots that assist prospective buyers by guiding them through structured product catalogs, service selector questionnaires, and instant quote preparations.
          </p>
          <p>
            Instead of confronting website visitors with passive static forms, sales bots engage users interactively to gather key requirement parameters and alert your sales team with warm, qualified leads.
          </p>
        </div>

        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="sidebar-checklist" style="display: flex; flex-direction: column; gap: 16px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">24/7 Inquiry Coverage>24/7 Inquiry Coverage</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Collect structured buyer requirements outside normal office sales hours.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Pre-Qualified Sales Leads>Pre-Qualified Sales Leads</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Sales representatives receive complete requirement summaries before making contact.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Multi-Channel Deployment>Multi-Channel Deployment</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Deploy sales bots on corporate websites, landing pages and WhatsApp channels.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. BUSINESS PROBLEMS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">DIAGNOSTIC MAP</span>
        <h2 class="section-title">What we solve.</h2>
        <p class="section-description">Addressing sales intake inefficiencies.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Repeated Product Questions</h3>
          <p class="why-desc">Automate immediate answers regarding product dimensions, pricing tiers and availability.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Unqualified Leads</h3>
          <p class="why-desc">Filter out out-of-scope inquiries automatically before passing data to sales representatives.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">Delayed Lead Follow-Up</h3>
          <p class="why-desc">Instantly acknowledge new prospects and collect core requirements immediately.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Inconsistent Information</h3>
          <p class="why-desc">Ensure every prospect receives accurate, up-to-date sales collateral and product specs.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">Lost After-Hours Enquiries</h3>
          <p class="why-desc">Capture full contact and project details from evening and weekend website visitors.</p>
        </div>
      </div>
    </section>

    <!-- 5. CAPABILITIES BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CAPABILITIES</span>
        <h2 class="section-title">Sales bot capabilities.</h2>
        <p class="section-description">Interactive features for buying journey support.</p>
      </div>

      <div class="capability-bento-grid">
        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Product &amp; Service Guidance</h3>
            <p class="card-desc">Interactive product selector trees helping users find items matching their criteria.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 80%;"></div><div class="micro-ui-bar" style="width: 50%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Lead Qualification Flows</h3>
            <p class="card-desc">Gathering budget, timeline, industry and location details interactively.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 90%;"></div><div class="micro-ui-bar cyan" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Requirement Collection</h3>
            <p class="card-desc">Structured forms capturing project specifications, file attachments and contact info.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 70%;"></div><div class="micro-ui-bar" style="width: 40%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Product Discovery Assistance</h3>
            <p class="card-desc">Guiding visitors through multi-category product lines with visual card buttons.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 85%;"></div><div class="micro-ui-bar cyan" style="width: 55%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Quote Request Preparation</h3>
            <p class="card-desc">Pre-populating formal quotation requests with selected items and quantities.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 65%;"></div><div class="micro-ui-bar" style="width: 75%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Sales-Team Handover</h3>
            <p class="card-desc">Alerting sales staff instantly via email, web inbox or WhatsApp when warm leads submit details.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 95%;"></div><div class="micro-ui-bar cyan" style="width: 45%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Follow-Up Workflow Support</h3>
            <p class="card-desc">Automated confirmation messages assuring prospects their requirement is being reviewed.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 75%;"></div><div class="micro-ui-bar" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">CRM Lead Integration</h3>
            <p class="card-desc">Syncing qualified prospect profiles and conversation notes into your primary CRM platform.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 50%;"></div><div class="micro-ui-bar cyan" style="width: 80%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>
      </div>
    </section>

    <!-- 6. CONNECTED SHOWCASE -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">SOLUTION SHOWCASE</span>
        <h2 class="section-title">Guided Sales Conversation Assistant.</h2>
        <p class="section-description">A representative preview of a sales bot qualification workspace.</p>
      </div>

      <div class="showcase-dashboard-card" data-animate="fade-up">
        <div class="dash-header-bar">
          <div class="dash-dots"><span class="dash-dot"></span><span class="dash-dot"></span><span class="dash-dot"></span></div>
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">Sales Qualification Assistant</span>
          <span class="showcase-badge">Representative Solution</span>
        </div>

        <div class="dash-grid-layout">
          <div class="dash-sidebar-nav">
            <div class="dash-nav-item active">Product Matcher</div>
            <div class="dash-nav-item">Lead Intake</div>
            <div class="dash-nav-item">Requirement Summary</div>
            <div class="dash-nav-item">Sales Alert</div>
            <div class="dash-nav-item">CRM Sync</div>
          </div>

          <div class="dash-main-area">
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Interactive Guide</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Product Match Selector</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Qualification Score</span>
              <strong style="font-size: 1.1rem; color: var(--color-cyan);">High Priority Lead</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Team Notification</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Alert Dispatched</strong>
            </div>
          </div>
        </div>

        <div class="dash-callouts-list">
          <span class="showcase-badge">Product Matcher</span>
          <span class="showcase-badge">Lead Intake</span>
          <span class="showcase-badge">Requirement Summary</span>
          <span class="showcase-badge">Sales Alert</span>
          <span class="showcase-badge">CRM Sync</span>
        </div>
      </div>
    </section>

    <!-- 7. IMPLEMENTATION PROCESS -->
    <section id="sales-process" class="process-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">Sales bot development path.</h2>
        <p class="section-description">A structured 6-step pathway to sales bot deployment.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Understand Sales Flow</h3>
          <p class="process-step-desc">Review your current lead qualification questions, product catalog and sales intake points.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Define Qualification Rules</h3>
          <p class="process-step-desc">Determine key qualification criteria (budget, location, product line, project scale).</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Design Conversation</h3>
          <p class="process-step-desc">Map clear visual choice buttons, product recommendation cards and fallback options.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Connect CRM &amp; Messaging</h3>
          <p class="process-step-desc">Integrate sales bot scripts into your website or WhatsApp Business API channel.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Test &amp; Refine</h3>
          <p class="process-step-desc">Test lead data capture accuracy, email alerts and multi-device display responsiveness.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="500">
          <div class="process-step-number">06</div>
          <h3 class="process-step-title">Launch</h3>
          <p class="process-step-desc">Deploy the sales bot live and optimize conversion choices based on visitor interactions.</p>
        </div>
      </div>
    </section>

    <!-- 8. TECHNOLOGY APPROACH -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY APPROACH</span>
        <h2 class="section-title">Sales bot architecture.</h2>
        <p class="section-description">Key engineering principles for interactive sales tools.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Guided Branching Logic</h3>
          <p class="why-desc">Clean decision tree architecture preventing conversational dead-ends for visitors.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Interactive Product Pickers</h3>
          <p class="why-desc">Visual button interfaces helping buyers narrow down product choices easily.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Lead Scoring Triggers</h3>
          <p class="why-desc">Automated rules prioritizing high-value commercial inquiries for immediate contact.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">CRM API Integration</h3>
          <p class="why-desc">Syncing prospect lead cards directly into your central CRM database.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Instant Sales Alerts</h3>
          <p class="why-desc">Real-time email or WhatsApp notifications dispatched to sales representatives.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Analytics Dashboard</h3>
          <p class="why-desc">Tracking visitor drop-off points, top requested product lines and lead submission counts.</p>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS USE CASES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">USE CASES</span>
        <h2 class="section-title">Sales bots in action.</h2>
        <p class="section-description">Practical lead intake applications.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">B2B Product Sales</h3>
          <p class="why-desc">Gather wholesale quantity requirements, delivery locations and specification needs.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Service Qualification</h3>
          <p class="why-desc">Collect business type, project scope and target launch dates for custom services.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Real Estate &amp; Automotive Leads</h3>
          <p class="why-desc">Filter buyer budget, location preferences and property/vehicle model criteria.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">E-commerce Product Discovery</h3>
          <p class="why-desc">Recommend matching products based on shopper answers to a short quiz.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Subscription Signups</h3>
          <p class="why-desc">Guide potential clients through plan comparisons and feature tier recommendations.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Consultation Bookings</h3>
          <p class="why-desc">Collect pre-meeting business context before scheduling sales calls.</p>
        </div>
      </div>
    </section>

    <!-- 10. ENGAGEMENT OPTIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">ENGAGEMENT OPTIONS</span>
        <h2 class="section-title">Flexible sales bot options.</h2>
        <p class="section-description">Choose how to deploy sales qualification tools.</p>
      </div>

      <div class="engagement-options-grid">
        <div class="engagement-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">OPTION A</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Build a Custom Sales Bot</h3>
            <p class="card-desc">We build a dedicated sales qualification bot tailored to your product or service line.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-primary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">OPTION B</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Integrate Sales Bot into Website</h3>
            <p class="card-desc">We embed interactive sales widgets onto product pages and campaign landing sites.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="200">
          <div>
            <span class="section-eyebrow">OPTION C</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">WhatsApp Sales Bot Setup</h3>
            <p class="card-desc">We deploy qualification decision trees directly onto your official WhatsApp API channel.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </section>

    <!-- 11. WHY SNIPEZON -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHY SNIPEZON</span>
        <h2 class="section-title">A technical partner for sales intake.</h2>
        <p class="section-description">Focused on clear lead qualification and seamless handovers.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Conversational UX Design</h3>
          <p class="why-desc">We structure clear, friendly decision paths that make it easy for prospective buyers to share requirements.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Clean Lead Handovers</h3>
          <p class="why-desc">Providing sales reps with organized context cards so they can make informed initial contact.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">CRM Integration</h3>
          <p class="why-desc">Syncing qualified prospect details directly into your team’s existing sales database.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">No Unsupported Claims</h3>
          <p class="why-desc">We build practical software tools based on clear business logic without promising fake sales targets.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Ongoing Optimization</h3>
          <p class="why-desc">Continued assistance for updating product options, qualification questions and alert rules.</p>
        </div>
      </div>
    </section>

    <!-- 12. RELATED SERVICES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">RELATED SERVICES</span>
        <h2 class="section-title">Complete your digital ecosystem.</h2>
        <p class="section-description">Explore complementary digital solutions from Snipezon.</p>
      </div>

      <div class="related-services-grid">
        <a href="ai-chatbot-solutions.html" class="related-service-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">AI Chatbot Solutions</h3>
            <p class="card-desc">Grounded AI customer assistants for website and WhatsApp messaging.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="whatsapp-business-api.html" class="related-service-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">WhatsApp Business API Setup</h3>
            <p class="card-desc">Official API integration, multi-agent chat and automated messaging.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="ecommerce-websites.html" class="related-service-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">E-commerce Websites</h3>
            <p class="card-desc">Modern online storefronts with payment gateway and inventory connections.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="customer-care-automation.html" class="related-service-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Customer Care Automation</h3>
            <p class="card-desc">Ticket routing, automated replies and support team management.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>
      </div>
    </section>

    <!-- 13. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Questions about sales bots.</h2>
        <p class="section-description">Clear answers regarding sales bot integration.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-sb-1" id="faq-abtn-1">
            <span>What is a sales bot?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sb-1" class="faq-panel" role="region" aria-labelledby="faq-abtn-1">
            <div class="faq-content">
              A sales bot is an interactive conversational tool that guides website visitors through product selection, collects lead qualification parameters, and alerts sales teams with structured requirement summaries.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sb-2" id="faq-abtn-2">
            <span>Can a sales bot handle complex product questions?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sb-2" class="faq-panel" role="region" aria-labelledby="faq-abtn-2">
            <div class="faq-content">
              Sales bots handle standard product inquiries, specifications, and initial qualification. For custom or high-value decisions, the bot seamlessly hands over the lead to a human sales representative.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sb-3" id="faq-abtn-3">
            <span>How does the sales bot hand over leads to our team?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sb-3" class="faq-panel" role="region" aria-labelledby="faq-abtn-3">
            <div class="faq-content">
              Qualified leads can be delivered instantly via email notification, synced into your CRM database, or routed to a WhatsApp Business API team inbox.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sb-4" id="faq-abtn-4">
            <span>Does a sales bot guarantee increased revenue or sales conversions?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sb-4" class="faq-panel" role="region" aria-labelledby="faq-abtn-4">
            <div class="faq-content">
              No. Sales bots improve visitor engagement and help qualify inquiries, but actual sales outcomes depend on product offering, pricing, website traffic, market demand, and sales team execution. Snipezon does not make guaranteed revenue or sales claims.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sb-5" id="faq-abtn-5">
            <span>Which platforms can sales bots run on?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sb-5" class="faq-panel" role="region" aria-labelledby="faq-abtn-5">
            <div class="faq-content">
              Sales bots can be embedded on static or dynamic websites, landing pages, e-commerce storefronts, and official WhatsApp Business API numbers.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 14. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Ready to streamline lead qualification for your sales team?</h2>
        <p class="cta-banner-desc">Discuss your sales intake requirements with Snipezon.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Discuss Sales Bots</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20sales%20bots." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection
