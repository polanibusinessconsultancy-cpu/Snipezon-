@extends('frontend.layouts.app')

@section('title', 'Custom Software Development | Snipezon')
@section('meta_description', 'Snipezon plans, designs and develops custom software, business management systems, portals, workflow automation and system integrations.')
@section('body_data_page', 'service-detail')

@section('page_css')
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/home.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/digital-solutions.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/service-details.css') }}">
@endsection

@section('content')
<!-- 1. BREADCRUMB AND SERVICE HERO -->
    <section class="service-hero-section container">
      <!-- Breadcrumb -->
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <a href="{{ route('digital-solutions') }}">Digital Solutions</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Custom Software Development</span>
      </nav>

      <div class="service-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">CUSTOM SOFTWARE DEVELOPMENT</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Software designed around how your <span class="highlight-purple">business works.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            We plan, design and build dependable custom software with security, usability and maintainability considered throughout development.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Discuss Your Software</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#development-process" class="button button-secondary">
              <span>View Our Process</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 9l-7 7-7-7"/></svg>
            </a>
          </div>
        </div>

        <!-- Technical Visual Composition -->
        <div class="tech-arch-wrapper" aria-hidden="true">
          <div class="arch-ring arch-ring-inner"></div>
          <div class="arch-ring arch-ring-outer"></div>

          <div class="arch-core-hub">
            <img src="{{ asset('snipezon/images/logo/logo-icon.svg') }}" alt="Snipezon Core" width="75" height="75">
          </div>

          <div class="arch-node arch-node-1">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Dashboard</span>
          </div>

          <div class="arch-node arch-node-2">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
            <span>API Layer</span>
          </div>

          <div class="arch-node arch-node-3">
            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
            <span>Database</span>
          </div>

          <div class="arch-node arch-node-4">
            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            <span>User Roles</span>
          </div>

          <div class="arch-node arch-node-5">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            <span>Operations</span>
          </div>

          <div class="arch-node arch-node-6">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Analytics</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. SERVICE VALUE STRIP -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Service Principles & Capabilities</h2>
      <div class="value-grid">
        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="18" rx="2"/><path d="M2 9h20M7 13l-2 2 2 2M13 13l2 2-2 2M11 13l-2 4"/></svg>
          </div>
          <h3 class="value-title">Built for Your Workflow</h3>
          <p class="value-desc">Software shaped around your teams, processes and daily operations.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M23 6l-9.5 9.5-5-5L1 18M17 6h6v6"/></svg>
          </div>
          <h3 class="value-title">Scalable Architecture</h3>
          <p class="value-desc">Structured foundations that can evolve as requirements grow.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="value-title">Secure by Design</h3>
          <p class="value-desc">Permissions, validation and data protection considered throughout development.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          </div>
          <h3 class="value-title">Ongoing Support</h3>
          <p class="value-desc">Continued assistance for maintenance, refinement and improvement.</p>
        </div>
      </div>
    </section>

    <!-- 3. SERVICE OVERVIEW -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OVERVIEW</span>
          <h2 class="section-title">Not another off-the-shelf system.</h2>
          <p>
            Snipezon builds software around real processes, users, goals and integration needs.
          </p>
          <p>
            From internal business tools to customer-facing platforms, we focus on creating clear, maintainable systems that help teams work more effectively.
          </p>
        </div>

        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="sidebar-checklist" style="display: flex; flex-direction: column; gap: 16px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Built Around You</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Designed around your specific business logic and team workflows.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">End-to-End Delivery</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">From architecture planning and UI design to testing and deployment.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Reliable &amp; Future-Ready</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Clean, maintainable code structured for ongoing updates and scalability.</p>
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
        <p class="section-description">Addressing operational bottlenecks through tailored software architecture.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Manual &amp; Repetitive Work</h3>
          <p class="why-desc">Automate routine data entry, report generation and status tracking across departments.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Disconnected Systems</h3>
          <p class="why-desc">Unify separate software tools into one central database and integrated API hub.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">Limited Visibility</h3>
          <p class="why-desc">Gain real-time operational reporting, role-based dashboards and performance metrics.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Complex Operations</h3>
          <p class="why-desc">Simplify complex multi-step approvals, inventory rules and customer service flows.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">Outdated Software</h3>
          <p class="why-desc">Modernize legacy desktop applications into responsive, accessible web platforms.</p>
        </div>
      </div>
    </section>

    <!-- 5. CUSTOM SOFTWARE CAPABILITIES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CAPABILITIES</span>
        <h2 class="section-title">Custom software capabilities.</h2>
        <p class="section-description">Core platform types engineered for business requirements.</p>
      </div>

      <div class="capability-bento-grid">
        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Business Management Systems</h3>
            <p class="card-desc">Centralized operations control for teams, branches and core workflows.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar cyan" style="width: 80%;"></div>
              <div class="micro-ui-bar" style="width: 50%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Customer &amp; Staff Portals</h3>
            <p class="card-desc">Secure web portals for user account management, documents and requests.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar" style="width: 90%;"></div>
              <div class="micro-ui-bar cyan" style="width: 60%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Workflow Automation Platforms</h3>
            <p class="card-desc">Automate task assignments, notifications and status transitions.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar cyan" style="width: 70%;"></div>
              <div class="micro-ui-bar" style="width: 40%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Custom CRM &amp; ERP Solutions</h3>
            <p class="card-desc">Tailored customer relationship management and resource planning tools.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar" style="width: 85%;"></div>
              <div class="micro-ui-bar cyan" style="width: 55%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Accounting &amp; Reporting Systems</h3>
            <p class="card-desc">Custom financial ledgers, invoice tracking and automated balance reports.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar cyan" style="width: 65%;"></div>
              <div class="micro-ui-bar" style="width: 75%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Booking &amp; Order Management</h3>
            <p class="card-desc">Appointment scheduling, order processing and status tracking tools.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar" style="width: 95%;"></div>
              <div class="micro-ui-bar cyan" style="width: 45%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">API &amp; Third-Party Integrations</h3>
            <p class="card-desc">Connect custom software with WhatsApp, payment gateways and external APIs.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar cyan" style="width: 75%;"></div>
              <div class="micro-ui-bar" style="width: 60%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Legacy System Modernization</h3>
            <p class="card-desc">Refactor obsolete applications into clean, maintainable web architectures.</p>
            <div class="micro-ui-preview">
              <div class="micro-ui-bar" style="width: 50%;"></div>
              <div class="micro-ui-bar cyan" style="width: 80%;"></div>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>
      </div>
    </section>

    <!-- 6. CONNECTED-SYSTEM SHOWCASE -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">SOLUTION SHOWCASE</span>
        <h2 class="section-title">One connected system. Built for clarity.</h2>
        <p class="section-description">A representative preview of a custom business operations platform.</p>
      </div>

      <div class="showcase-dashboard-card" data-animate="fade-up">
        <div class="dash-header-bar">
          <div class="dash-dots">
            <span class="dash-dot"></span>
            <span class="dash-dot"></span>
            <span class="dash-dot"></span>
          </div>
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">Snipezon Operations Platform</span>
          <span class="showcase-badge">Representative Solution</span>
        </div>

        <div class="dash-grid-layout">
          <div class="dash-sidebar-nav">
            <div class="dash-nav-item active">Overview</div>
            <div class="dash-nav-item">Operations</div>
            <div class="dash-nav-item">Customers</div>
            <div class="dash-nav-item">Orders</div>
            <div class="dash-nav-item">Reports</div>
            <div class="dash-nav-item">Settings</div>
          </div>

          <div class="dash-main-area">
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Active Tasks</span>
              <strong style="font-size: 1.4rem; color: var(--color-text);">Centralized Workflows</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">User Access</span>
              <strong style="font-size: 1.4rem; color: var(--color-text);">Role-Based Security</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">System Status</span>
              <strong style="font-size: 1.4rem; color: var(--color-cyan);">Connected &amp; Live</strong>
            </div>
          </div>
        </div>

        <div class="dash-callouts-list">
          <span class="showcase-badge">Centralized Data</span>
          <span class="showcase-badge">Role-Based Access</span>
          <span class="showcase-badge">Live Reporting</span>
          <span class="showcase-badge">Integrated Workflows</span>
        </div>
      </div>
    </section>

    <!-- 7. DEVELOPMENT PROCESS -->
    <section id="development-process" class="process-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">A clear path from requirement to launch.</h2>
        <p class="section-description">A structured 6-step engineering methodology.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Discovery</h3>
          <p class="process-step-desc">We understand goals, users, challenges and existing processes.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Requirements &amp; Planning</h3>
          <p class="process-step-desc">We define scope, priorities, workflows and technical direction.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">UX/UI Design</h3>
          <p class="process-step-desc">We design clear interfaces and practical user journeys.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Development</h3>
          <p class="process-step-desc">We build the agreed features and integrations.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Testing &amp; Deployment</h3>
          <p class="process-step-desc">We review functionality, usability and deployment readiness.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="500">
          <div class="process-step-number">06</div>
          <h3 class="process-step-title">Support &amp; Improvement</h3>
          <p class="process-step-desc">We assist with maintenance, refinement and future requirements.</p>
        </div>
      </div>
    </section>

    <!-- 8. TECHNOLOGY APPROACH -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY APPROACH</span>
        <h2 class="section-title">Modern foundations for dependable software.</h2>
        <p class="section-description">Technical standards applied across custom development projects.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">Responsive Web Applications</h3>
          <p class="why-desc">Accessible, mobile-friendly interfaces built for desktop, tablet and mobile browsers.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Secure APIs &amp; Integrations</h3>
          <p class="why-desc">Restful APIs and secure endpoints connecting custom applications to third-party tools.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Structured Databases</h3>
          <p class="why-desc">Normalized database schemas designed for data integrity, query speed and data safety.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Cloud-Ready Deployment</h3>
          <p class="why-desc">Configured for reliable cloud hosting environments with automated backup options.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg></div>
          <h3 class="why-title">Permissions &amp; Access Control</h3>
          <p class="why-desc">Role-based user management restricting sensitive data access to authorized staff.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">Reporting &amp; Analytics</h3>
          <p class="why-desc">Exportable CSV/Excel reports and real-time dashboard data visualizations.</p>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS USE CASES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">USE CASES</span>
        <h2 class="section-title">Built for the way teams operate.</h2>
        <p class="section-description">Practical software solutions for common organizational needs.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Operations Management</h3>
          <p class="why-desc">Track tasks, internal workflows and project milestones across multiple team members.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Sales &amp; Customer Management</h3>
          <p class="why-desc">Manage client contacts, deal pipelines, customer inquiries and communication logs.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Finance &amp; Accounting</h3>
          <p class="why-desc">Record transactions, generate invoices, track pending payments and view ledgers.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Inventory &amp; Orders</h3>
          <p class="why-desc">Monitor stock levels, manage purchase requests and process incoming fulfillment orders.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Service &amp; Support</h3>
          <p class="why-desc">Coordinate customer service tickets, track resolution times and store client history.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Internal Administration</h3>
          <p class="why-desc">Manage employee directory, leave requests, internal documents and role assignments.</p>
        </div>
      </div>
    </section>

    <!-- 10. ENGAGEMENT OPTIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">ENGAGEMENT OPTIONS</span>
        <h2 class="section-title">Flexible collaboration for different stages.</h2>
        <p class="section-description">Select how you want to work with Snipezon.</p>
      </div>

      <div class="engagement-options-grid">
        <div class="engagement-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">OPTION A</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Build a New System</h3>
            <p class="card-desc">We design and build a new solution around your workflow and business requirements.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-primary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">OPTION B</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Upgrade Existing Software</h3>
            <p class="card-desc">We review existing software and plan practical improvements to usability, performance and maintainability.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="200">
          <div>
            <span class="section-eyebrow">OPTION C</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Integrate &amp; Automate</h3>
            <p class="card-desc">We connect systems, data and workflows to reduce repeated manual coordination.</p>
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
        <h2 class="section-title">A technical partner who understands business.</h2>
        <p class="section-description">Built around responsible engineering and clear collaboration.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Business-First Planning</h3>
          <p class="why-desc">We align software features with practical operational goals rather than adding unnecessary tech complexity.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Clear Project Communication</h3>
          <p class="why-desc">Direct updates, transparent progress milestones and straightforward technical explanations.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Thoughtful User Experience</h3>
          <p class="why-desc">Clean, intuitive interfaces designed for daily ease of use by non-technical staff.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Maintainable Development</h3>
          <p class="why-desc">Well-structured code bases that are easy to update, refine or extend as requirements evolve.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Post-Launch Support</h3>
          <p class="why-desc">Continued assistance for maintenance, bug fixes, feature enhancements and user support.</p>
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
        <a href="{{ route('services.ai-software-solutions') }}" class="related-service-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">AI-Based Software Solutions</h3>
            <p class="card-desc">Intelligent features, predictive tools and AI assistant integrations.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </div>

        <div class="related-service-card is-disabled" aria-disabled="true" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Customer Care Automation</h3>
            <p class="card-desc">Automated ticketing, customer response workflows and chat routing.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </div>

        <div class="related-service-card is-disabled" aria-disabled="true" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">WhatsApp Business API Setup</h3>
            <p class="card-desc">Official API integration, multi-agent chat and automated messaging.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </div>

        <div class="related-service-card is-disabled" aria-disabled="true" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">E-commerce Websites</h3>
            <p class="card-desc">Modern online storefronts with payment gateway and inventory connections.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </div>
      </div>
    </section>

    <!-- 13. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Questions about custom software development.</h2>
        <p class="section-description">Clear answers regarding custom software projects.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-csd-1" id="faq-cbtn-1">
            <span>What types of custom software can Snipezon develop?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-csd-1" class="faq-panel" role="region" aria-labelledby="faq-cbtn-1">
            <div class="faq-content">
              We plan, design and develop custom web applications, business management platforms, customer portals, CRM/ERP modules, accounting ledgers, and API integration hubs.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-csd-2" id="faq-cbtn-2">
            <span>Can you improve or replace an existing system?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-csd-2" class="faq-panel" role="region" aria-labelledby="faq-cbtn-2">
            <div class="faq-content">
              Yes. We can review existing legacy systems, refactor inefficient codebases, upgrade user interfaces, or build modern web alternatives that migrate data safely.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-csd-3" id="faq-cbtn-3">
            <span>Can the software connect with third-party services?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-csd-3" class="faq-panel" role="region" aria-labelledby="faq-cbtn-3">
            <div class="faq-content">
              Yes. We build custom API integrations connecting your software to WhatsApp Business API, payment gateways, accounting platforms, or third-party CRM tools.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-csd-4" id="faq-cbtn-4">
            <span>Will different users have separate roles and permissions?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-csd-4" class="faq-panel" role="region" aria-labelledby="faq-cbtn-4">
            <div class="faq-content">
              Yes. We implement granular role-based access controls (RBAC) ensuring administrators, managers, staff, and external clients see only authorized features.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-csd-5" id="faq-cbtn-5">
            <span>Do you provide support after the software is launched?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-csd-5" class="faq-panel" role="region" aria-labelledby="faq-cbtn-5">
            <div class="faq-content">
              Yes. We remain available post-launch for ongoing maintenance, server support, bug fixes, user guidance, and future feature enhancements.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 14. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Ready to build software that fits your business?</h2>
        <p class="cta-banner-desc">Tell us how your team works, where the challenges are and what you want to improve.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Start a Conversation</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20custom%20software%20development." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection
