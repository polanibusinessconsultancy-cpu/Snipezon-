@extends('layouts.frontend')

@section('title', 'Static & Dynamic Website Development | Snipezon')
@section('meta_description', 'Build modern static and dynamic websites with Snipezon designed to communicate clearly, perform reliably, and convert business visitors.')


@section('page_css')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/pages/service-details.css') }}">
@endsection


@section('content')
<!-- 1. BREADCRUMB AND SERVICE HERO -->
    <section class="service-hero-section container">
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <a href="{{ route('digital-solutions') }}">Digital Solutions</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Static &amp; Dynamic Websites</span>
      </nav>

      <div class="service-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">STATIC &amp; DYNAMIC WEBSITES</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Modern websites designed to communicate clearly and <span class="highlight-purple">perform reliably.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            We design and build fast, responsive corporate websites, landing pages and dynamic web portals tailored to your brand and business goals.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Discuss Your Website</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#web-process" class="button button-secondary">
              <span>View Build Process</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M19 9l-7 7-7-7"/></svg>
            </a>
          </div>
        </div>

        <!-- Technical Visual Composition -->
        <div class="tech-arch-wrapper" aria-hidden="true">
          <div class="arch-ring arch-ring-inner"></div>
          <div class="arch-ring arch-ring-outer"></div>

          <div class="arch-core-hub">
            <img src="{{ asset('assets/images/logo/logo-icon.svg') }}" alt="Snipezon Core" width="75" height="75">
          </div>

          <div class="arch-node arch-node-1">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
            <span>Brand</span>
          </div>

          <div class="arch-node arch-node-2">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Content</span>
          </div>

          <div class="arch-node arch-node-3">
            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            <span>Interface</span>
          </div>

          <div class="arch-node arch-node-4">
            <svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7z"/></svg>
            <span>Forms</span>
          </div>

          <div class="arch-node arch-node-5">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            <span>Management</span>
          </div>

          <div class="arch-node arch-node-6">
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
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
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="value-title">Responsive Design</h3>
          <p class="value-desc">Flawless performance and typography across desktop, tablet and mobile viewports.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="value-title">Clear Information</h3>
          <p class="value-desc">Structured content layout guiding visitors directly to key services and contact steps.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="value-title">Maintainable Structure</h3>
          <p class="value-desc">Clean, standards-compliant code bases that are easy to update and scale over time.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="value-title">Performance Focus</h3>
          <p class="value-desc">Fast asset loading speeds, optimized images and lean JavaScript execution.</p>
        </div>
      </div>
    </section>

    <!-- 3. SERVICE OVERVIEW -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OVERVIEW</span>
          <h2 class="section-title">Static vs. Dynamic web solutions.</h2>
          <p>
            Snipezon builds modern corporate websites, marketing landing pages and dynamic web applications tailored around your business requirements. We help clients evaluate whether a static or dynamic architecture best fits their goals:
          </p>
          <div style="margin-top: 16px; display: flex; flex-direction: column; gap: 14px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <strong style="color: var(--color-cyan); font-size: 1rem; display: block; margin-bottom: 4px;">Static Websites:</strong>
              <span style="font-size: 0.9rem; color: var(--color-text-secondary);">Content is primarily maintained through source files and is suitable for focused informational websites with less frequent updates. Static websites can offer a lightweight architecture, a smaller application surface and strong performance when implemented and maintained correctly.</span>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <strong style="color: var(--color-purple); font-size: 1rem; display: block; margin-bottom: 4px;">Dynamic Websites:</strong>
              <span style="font-size: 0.9rem; color: var(--color-text-secondary);">Content or functionality is managed through connected systems, databases or administration interfaces. They are ideal for frequently updated news sites, blogs, member portals and complex web platforms.</span>
            </div>
          </div>
        </div>

        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="sidebar-checklist" style="display: flex; flex-direction: column; gap: 16px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Thoughtful Recommendation>Thoughtful Recommendation</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">We recommend static or dynamic builds based on your update frequency and budget, rather than treating one as universally superior.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Modern Aesthetic Excellence>Modern Aesthetic Excellence</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Vibrant glassmorphic elements, dark mode styling and smooth micro-animations.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Interactive Form Journeys>Interactive Form Journeys</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Accessible contact forms, WhatsApp quick buttons and structured quote intake.</p>
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
        <p class="section-description">Addressing corporate website challenges.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Outdated Presentation</h3>
          <p class="why-desc">Modernize obsolete visual layouts into sleek, modern dark-mode corporate experiences.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Difficult Mobile Navigation</h3>
          <p class="why-desc">Ensure seamless mobile menu drawer navigation and touch-friendly button targets.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">Unclear Information</h3>
          <p class="why-desc">Structure service pages, company values and contact info into clear visual sections.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Slow Content Updates</h3>
          <p class="why-desc">Choose between lean static files or intuitive CMS backends for easy content management.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">Weak Enquiry Journeys</h3>
          <p class="why-desc">Guide visitors from hero headlines to accessible contact forms and WhatsApp buttons.</p>
        </div>
      </div>
    </section>

    <!-- 5. CAPABILITIES BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CAPABILITIES</span>
        <h2 class="section-title">Website development capabilities.</h2>
        <p class="section-description">Core website architecture options.</p>
      </div>

      <div class="capability-bento-grid">
        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Corporate Websites</h3>
            <p class="card-desc">Comprehensive multi-page corporate sites showcasing company history, services and contact hubs.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 80%;"></div><div class="micro-ui-bar" style="width: 50%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Service Websites</h3>
            <p class="card-desc">Detailed service showcase pages explaining technical capabilities, use cases and FAQs.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 90%;"></div><div class="micro-ui-bar cyan" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Landing Pages</h3>
            <p class="card-desc">High-impact single-page websites focused on campaign conversion and lead intake.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 70%;"></div><div class="micro-ui-bar" style="width: 40%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Static Marketing Websites</h3>
            <p class="card-desc">Ultra-fast static HTML5/CSS3 sites with minimal server requirements and zero database overhead.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 85%;"></div><div class="micro-ui-bar cyan" style="width: 55%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Dynamic Content Websites</h3>
            <p class="card-desc">Database-backed web portals with dynamic blog posts, news updates and staff directories.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 65%;"></div><div class="micro-ui-bar" style="width: 75%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Content Management Integration</h3>
            <p class="card-desc">Connecting user-friendly admin backends for easy non-technical text and image updates.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 95%;"></div><div class="micro-ui-bar cyan" style="width: 45%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Contact &amp; Enquiry Interfaces</h3>
            <p class="card-desc">Interactive tabbed forms, file upload selectors and instant WhatsApp confirmation modals.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 75%;"></div><div class="micro-ui-bar" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Website Modernization</h3>
            <p class="card-desc">Refactoring old legacy websites into modern responsive architectures with high performance.</p>
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
        <h2 class="section-title">Modern Corporate Website Experience.</h2>
        <p class="section-description">A representative preview of a responsive corporate website platform.</p>
      </div>

      <div class="showcase-dashboard-card" data-animate="fade-up">
        <div class="dash-header-bar">
          <div class="dash-dots"><span class="dash-dot"></span><span class="dash-dot"></span><span class="dash-dot"></span></div>
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">Corporate Web Portal</span>
          <span class="showcase-badge">Representative Solution</span>
        </div>

        <div class="dash-grid-layout">
          <div class="dash-sidebar-nav">
            <div class="dash-nav-item active">Hero Banner</div>
            <div class="dash-nav-item">Service Grid</div>
            <div class="dash-nav-item">Contact Hub</div>
            <div class="dash-nav-item">Mobile Drawer</div>
            <div class="dash-nav-item">SEO Meta</div>
          </div>

          <div class="dash-main-area">
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Responsive Grid</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">11 Breakpoints Tested</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Accessibility Score</span>
              <strong style="font-size: 1.1rem; color: var(--color-cyan);">WAI-ARIA Compliant</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Interactive Forms</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">WhatsApp Prepared</strong>
            </div>
          </div>
        </div>

        <div class="dash-callouts-list">
          <span class="showcase-badge">Hero Banner</span>
          <span class="showcase-badge">Service Grid</span>
          <span class="showcase-badge">Contact Hub</span>
          <span class="showcase-badge">Mobile Navigation</span>
          <span class="showcase-badge">SEO Optimization</span>
        </div>
      </div>
    </section>

    <!-- 7. IMPLEMENTATION PROCESS -->
    <section id="web-process" class="process-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">Website development path.</h2>
        <p class="section-description">A structured 6-step pathway to website launch.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Brand &amp; Content Review</h3>
          <p class="process-step-desc">Audit your company messaging, logo assets, service offerings and target audience.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Wireframing</h3>
          <p class="process-step-desc">Plan information hierarchy, breadcrumbs and page navigation structures.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">UI Design</h3>
          <p class="process-step-desc">Design modern dark-mode interfaces, glass banners and responsive layout components.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Front-End Build</h3>
          <p class="process-step-desc">Code semantic HTML5, CSS3 grid layouts and vanilla JS interaction components.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Cross-Browser Testing</h3>
          <p class="process-step-desc">Test layout responsiveness across 11 device sizes, skip links and keyboard focus.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="500">
          <div class="process-step-number">06</div>
          <h3 class="process-step-title">Launch</h3>
          <p class="process-step-desc">Deploy website files live with sitemap.xml indexing and performance optimization.</p>
        </div>
      </div>
    </section>

    <!-- 8. TECHNOLOGY APPROACH -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY APPROACH</span>
        <h2 class="section-title">Web development standards.</h2>
        <p class="section-description">Key engineering principles applied across website projects.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Semantic HTML5</h3>
          <p class="why-desc">Single H1 tags, proper heading hierarchy and standard semantic tags for SEO clarity.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">CSS Grid &amp; Flexbox</h3>
          <p class="why-desc">Fluid CSS design systems operating smoothly across all desktop and mobile screen sizes.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Performance Optimization</h3>
          <p class="why-desc">Zero heavy framework overhead, lean asset loading and instant page load speeds.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Accessible ARIA Standards</h3>
          <p class="why-desc">Visible focus indicators, skip links, aria-expanded states and keyboard-accessible menus.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Form Validation &amp; Modals</h3>
          <p class="why-desc">Browser-side form validation and accessible confirmation modals with focus traps.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Responsive Breakpoint Testing</h3>
          <p class="why-desc">Thorough testing across 11 distinct viewports from 320px mobile to 1440px desktop displays.</p>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS USE CASES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">USE CASES</span>
        <h2 class="section-title">Websites in action.</h2>
        <p class="section-description">Practical web development applications.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Corporate Company Sites</h3>
          <p class="why-desc">Establish strong corporate credibility with multi-page informational company portals.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Service Provider Showcases</h3>
          <p class="why-desc">Highlight specialized commercial services, process steps and consultation request forms.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Product Landing Pages</h3>
          <p class="why-desc">Focus visitor attention on a single product campaign with high-impact visuals and CTAs.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Event &amp; Announcement Sites</h3>
          <p class="why-desc">Promote corporate events, product launches and annual business conferences.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Portfolio Sites</h3>
          <p class="why-desc">Showcase completed project case studies, client testimonials and work galleries.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Educational Portals</h3>
          <p class="why-desc">Publish structured course info, training schedules and contact intake forms.</p>
        </div>
      </div>
    </section>

    <!-- 10. ENGAGEMENT OPTIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">ENGAGEMENT OPTIONS</span>
        <h2 class="section-title">Flexible website options.</h2>
        <p class="section-description">Select how to build your web presence.</p>
      </div>

      <div class="engagement-options-grid">
        <div class="engagement-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">OPTION A</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">New Corporate Website Build</h3>
            <p class="card-desc">We design and code a complete multi-page corporate website tailored to your brand identity.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-primary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">OPTION B</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Website Modernization &amp; Redesign</h3>
            <p class="card-desc">We convert your existing outdated site into a sleek, mobile-responsive dark-mode experience.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="200">
          <div>
            <span class="section-eyebrow">OPTION C</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Landing Page Campaign Build</h3>
            <p class="card-desc">We craft focused single-page landing pages optimized for specific product marketing campaigns.</p>
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
        <h2 class="section-title">A technical partner for web development.</h2>
        <p class="section-description">Crafting clear, reliable corporate websites.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Clean Aesthetic Excellence</h3>
          <p class="why-desc">Modern glassmorphic dark-mode styling, vibrant color accents and refined typography.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Fast Loading Speed</h3>
          <p class="why-desc">Lean vanilla code execution ensuring rapid page renders and high performance scores.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Mobile-First Responsiveness</h3>
          <p class="why-desc">Thorough optimization across all mobile viewports without clipped text or horizontal overflow.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Clear Information Architecture</h3>
          <p class="why-desc">Logical breadcrumbs and navigation menus guiding visitors effortlessly through your site.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Reliable Ongoing Maintenance</h3>
          <p class="why-desc">Continued assistance for content updates, new page additions and technical maintenance.</p>
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
        <a href="{{ route('services.ecommerce') }}" class="related-service-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">E-commerce Websites</h3>
            <p class="card-desc">Modern online storefronts with payment gateway and inventory connections.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.custom-software') }}" class="related-service-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Custom Software Development</h3>
            <p class="card-desc">Bespoke web applications, portals and business platforms.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.ai-chatbots') }}" class="related-service-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">AI Chatbot Solutions</h3>
            <p class="card-desc">Grounded AI customer assistants for website and WhatsApp messaging.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.whatsapp-api') }}" class="related-service-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">WhatsApp Business API Setup</h3>
            <p class="card-desc">Official API integration, multi-agent chat and automated messaging.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>
      </div>
    </section>

    <!-- 13. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Questions about website development.</h2>
        <p class="section-description">Clear answers regarding static and dynamic websites.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-sdw-1" id="faq-abtn-1">
            <span>What is the difference between static and dynamic websites?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sdw-1" class="faq-panel" role="region" aria-labelledby="faq-abtn-1">
            <div class="faq-content">
              Content on static websites is maintained through source code files, offering a lightweight structure, small attack surface and strong page performance. Dynamic websites manage content via connected databases or admin backends, ideal for frequently updated blogs or portals.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sdw-2" id="faq-abtn-2">
            <span>Which option is suitable for my business?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sdw-2" class="faq-panel" role="region" aria-labelledby="faq-abtn-2">
            <div class="faq-content">
              If your corporate information changes infrequently, a static website provides optimal performance and security. If you publish regular news, manage user logins, or update catalogs daily, a dynamic website is recommended.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sdw-3" id="faq-abtn-3">
            <span>Can an existing website be redesigned?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sdw-3" class="faq-panel" role="region" aria-labelledby="faq-abtn-3">
            <div class="faq-content">
              Yes. We can refactor outdated legacy websites into modern, mobile-responsive dark-mode layouts while preserving existing content and URL structures.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sdw-4" id="faq-abtn-4">
            <span>Can contact forms and WhatsApp be connected?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sdw-4" class="faq-panel" role="region" aria-labelledby="faq-abtn-4">
            <div class="faq-content">
              Yes. We build responsive contact forms with tabbed requirement intake, client-side validation, and instant WhatsApp message preparation buttons.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-sdw-5" id="faq-abtn-5">
            <span>Will the website work on mobile devices?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-sdw-5" class="faq-panel" role="region" aria-labelledby="faq-abtn-5">
            <div class="faq-content">
              Yes. All websites developed by Snipezon are engineered mobile-first and tested rigorously across smartphone, tablet, and desktop viewports.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 14. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Ready to build a modern website for your business?</h2>
        <p class="cta-banner-desc">Discuss your website goals and target features with Snipezon.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Discuss Your Website</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20website%20development%20project." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection

