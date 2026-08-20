@extends('layouts.frontend')

@section('title', 'E-commerce Website Development | Snipezon')
@section('meta_description', 'Develop modern e-commerce storefronts with Snipezon featuring custom catalogs, payment gateway connections, cart systems, and order management.')


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
        <span class="breadcrumb-current">E-commerce Websites</span>
      </nav>

      <div class="service-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">E-COMMERCE WEBSITES</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Create a smoother path from product discovery to <span class="highlight-purple">purchase.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            We design and develop fast, accessible e-commerce websites with product catalogs, shopping carts, secure checkouts and order management.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Start Your Store</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#ecom-process" class="button button-secondary">
              <span>View E-commerce Process</span>
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
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Catalog</span>
          </div>

          <div class="arch-node arch-node-2">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
            <span>Search</span>
          </div>

          <div class="arch-node arch-node-3">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            <span>Product</span>
          </div>

          <div class="arch-node arch-node-4">
            <svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/></svg>
            <span>Cart</span>
          </div>

          <div class="arch-node arch-node-5">
            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
            <span>Checkout</span>
          </div>

          <div class="arch-node arch-node-6">
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span>Orders</span>
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
          <h3 class="value-title">Mobile-First Experience</h3>
          <p class="value-desc">Fast, responsive storefront layouts optimized for smartphone buyers.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="value-title">Clear Product Discovery</h3>
          <p class="value-desc">Structured categories, fast search filters and clean product detail pages.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="value-title">Manageable Operations</h3>
          <p class="value-desc">Straightforward admin dashboards for product uploads, stock management and orders.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="value-title">Integration Ready</h3>
          <p class="value-desc">Connections to payment gateways, WhatsApp ordering and inventory tools.</p>
        </div>
      </div>
    </section>

    <!-- 3. SERVICE OVERVIEW -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OVERVIEW</span>
          <h2 class="section-title">Custom online commerce storefronts.</h2>
          <p>
            Snipezon builds modern e-commerce websites designed to showcase your products clearly and present customers with a frictionless buying journey.
          </p>
          <p>
            From catalog navigation and product attribute filtering to cart management and payment checkout flows, we build reliable online storefronts tailored to your retail or B2B sales model.
          </p>
        </div>

        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="sidebar-checklist" style="display: flex; flex-direction: column; gap: 16px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Intuitive Catalog Navigation>Intuitive Catalog Navigation</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Help shoppers locate products quickly using clean category menus and search filters.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Frictionless Checkout>Frictionless Checkout</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Streamlined cart and checkout steps optimized for quick mobile ordering.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Centralized Store Management>Centralized Store Management</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Manage stock levels, order status updates and customer accounts easily.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Third-Party Integration Notice Banner -->
    <section class="container" style="margin-bottom: 40px;">
      <div style="background: rgba(34, 211, 238, 0.08); border: 1px solid var(--color-cyan); border-radius: var(--radius-medium); padding: 20px 24px; color: var(--color-text-secondary); font-size: 0.9rem; line-height: 1.6;">
        <strong style="color: var(--color-cyan); display: block; margin-bottom: 4px; font-size: 0.95rem;">Informational Notice Regarding Third-Party E-commerce Platforms:</strong>
        Payment gateways, courier services and external platforms have their own availability, approval processes, fees and technical requirements. Snipezon assists with setup and integration but cannot guarantee external merchant approvals.
      </div>
    </section>

    <!-- 4. BUSINESS PROBLEMS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">DIAGNOSTIC MAP</span>
        <h2 class="section-title">What we solve.</h2>
        <p class="section-description">Addressing online retail barriers.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Difficult Product Discovery</h3>
          <p class="why-desc">Organize large product lines with instant search, category tags and attribute filters.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Weak Mobile Experience</h3>
          <p class="why-desc">Eliminate mobile shopping friction with fast-loading responsive store interfaces.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">Manual Order Handling</h3>
          <p class="why-desc">Automate order notifications, invoice receipts and customer status updates.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Disconnected Stock Info</h3>
          <p class="why-desc">Sync inventory counts across storefront product pages automatically upon order placement.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">Limited Store Management</h3>
          <p class="why-desc">Access simple admin tools for adding products, managing discounts and tracking sales.</p>
        </div>
      </div>
    </section>

    <!-- 5. CAPABILITIES BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CAPABILITIES</span>
        <h2 class="section-title">E-commerce capabilities.</h2>
        <p class="section-description">Core storefront modules.</p>
      </div>

      <div class="capability-bento-grid">
        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Custom Storefront Design</h3>
            <p class="card-desc">Unique responsive store layouts built specifically for your brand identity and products.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 80%;"></div><div class="micro-ui-bar" style="width: 50%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Product Catalog Management</h3>
            <p class="card-desc">Flexible product option variants, image galleries and inventory tracking.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 90%;"></div><div class="micro-ui-bar cyan" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Search &amp; Filtering</h3>
            <p class="card-desc">Fast keyword search, price range sliders and category attribute filtering.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 70%;"></div><div class="micro-ui-bar" style="width: 40%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Cart &amp; Checkout Experience</h3>
            <p class="card-desc">Slide-out cart drawers, guest checkout options and order summary calculations.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 85%;"></div><div class="micro-ui-bar cyan" style="width: 55%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Order Management</h3>
            <p class="card-desc">Admin dashboards for processing orders, updating shipping status and issuing receipts.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 65%;"></div><div class="micro-ui-bar" style="width: 75%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Customer Accounts</h3>
            <p class="card-desc">User account portals for viewing order history, saved addresses and re-ordering.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 95%;"></div><div class="micro-ui-bar cyan" style="width: 45%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Payment &amp; Delivery Integration</h3>
            <p class="card-desc">Connecting online payment gateways, WhatsApp order buttons and courier APIs.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 75%;"></div><div class="micro-ui-bar" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Reporting &amp; Administration</h3>
            <p class="card-desc">Store analytics showing top selling items, revenue summaries and conversion trends.</p>
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
        <h2 class="section-title">Modern Commerce Operations Platform.</h2>
        <p class="section-description">A representative preview of an e-commerce management workspace.</p>
      </div>

      <div class="showcase-dashboard-card" data-animate="fade-up">
        <div class="dash-header-bar">
          <div class="dash-dots"><span class="dash-dot"></span><span class="dash-dot"></span><span class="dash-dot"></span></div>
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">Commerce Control Center</span>
          <span class="showcase-badge">Representative Solution</span>
        </div>

        <div class="dash-grid-layout">
          <div class="dash-sidebar-nav">
            <div class="dash-nav-item active">Product Catalog</div>
            <div class="dash-nav-item">Category Filters</div>
            <div class="dash-nav-item">Cart Drawer</div>
            <div class="dash-nav-item">Order Status</div>
            <div class="dash-nav-item">Store Analytics</div>
          </div>

          <div class="dash-main-area">
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Catalog Status</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Structured Variants</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Active Cart</span>
              <strong style="font-size: 1.1rem; color: var(--color-cyan);">Fast Mobile Checkout</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Order Queue</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Live Admin Feed</strong>
            </div>
          </div>
        </div>

        <div class="dash-callouts-list">
          <span class="showcase-badge">Product Catalog</span>
          <span class="showcase-badge">Category Filters</span>
          <span class="showcase-badge">Cart Drawer</span>
          <span class="showcase-badge">Order Status</span>
          <span class="showcase-badge">Store Analytics</span>
        </div>
      </div>
    </section>

    <!-- 7. IMPLEMENTATION PROCESS -->
    <section id="ecom-process" class="process-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">E-commerce development path.</h2>
        <p class="section-description">A structured 6-step pathway to e-commerce launch.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Discovery</h3>
          <p class="process-step-desc">Understand your product lines, target buyers, pricing models and shipping requirements.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Catalog Planning</h3>
          <p class="process-step-desc">Structure category hierarchies, product variant rules and inventory attributes.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">UX/UI Design</h3>
          <p class="process-step-desc">Design responsive mobile storefronts, product detail layouts and cart drawers.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Store Development</h3>
          <p class="process-step-desc">Build storefront templates, checkout flows and backend admin management dashboards.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Integration &amp; Testing</h3>
          <p class="process-step-desc">Connect payment gateways, test mobile checkout speed and verify order notifications.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="500">
          <div class="process-step-number">06</div>
          <h3 class="process-step-title">Launch &amp; Support</h3>
          <p class="process-step-desc">Deploy the online store live and assist with ongoing product catalog management.</p>
        </div>
      </div>
    </section>

    <!-- 8. TECHNOLOGY APPROACH -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY APPROACH</span>
        <h2 class="section-title">E-commerce storefront architecture.</h2>
        <p class="section-description">Key engineering standards applied across store builds.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Responsive Storefront UX</h3>
          <p class="why-desc">Mobile-first interface design ensuring smooth browsing on smartphones and tablets.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Fast Image Optimization</h3>
          <p class="why-desc">Compressed WebP images and lazy-loading for rapid product gallery loading speed.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Secure Checkout Workflows</h3>
          <p class="why-desc">SSL-encrypted checkout pages designed for safe customer data transmission.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Inventory Data Syncing</h3>
          <p class="why-desc">Automated stock reduction upon order completion to prevent overselling.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Payment API Integration</h3>
          <p class="why-desc">Connecting approved third-party payment gateways and cash-on-delivery options.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Admin Dashboard</h3>
          <p class="why-desc">Straightforward admin panel for managing catalog items, stock and customer orders.</p>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS USE CASES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">USE CASES</span>
        <h2 class="section-title">E-commerce websites in action.</h2>
        <p class="section-description">Practical online selling applications.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Retail Product Sales</h3>
          <p class="why-desc">Sell consumer goods, clothing, electronics and home items online.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Wholesale B2B Catalogs</h3>
          <p class="why-desc">Display bulk item pricing, minimum order quantities and trade inquiry forms.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Digital Product Downloads</h3>
          <p class="why-desc">Deliver digital software, manuals, courses and downloadable assets securely.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Subscription Box Ordering</h3>
          <p class="why-desc">Manage recurring order signups, delivery preferences and monthly billing.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Multi-Category Storefronts</h3>
          <p class="why-desc">Organize complex multi-brand inventories with intuitive mega menus.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Local Delivery Ordering</h3>
          <p class="why-desc">Process local customer delivery orders with instant WhatsApp order confirmations.</p>
        </div>
      </div>
    </section>

    <!-- 10. ENGAGEMENT OPTIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">ENGAGEMENT OPTIONS</span>
        <h2 class="section-title">Flexible e-commerce options.</h2>
        <p class="section-description">Select how to build your online storefront.</p>
      </div>

      <div class="engagement-options-grid">
        <div class="engagement-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">OPTION A</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Custom E-commerce Store Build</h3>
            <p class="card-desc">We build a complete online store from catalog planning to checkout and admin launch.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-primary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">OPTION B</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Storefront Redesign &amp; Speed Upgrade</h3>
            <p class="card-desc">We modernize your existing online store with mobile responsive layouts and fast checkout UX.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="200">
          <div>
            <span class="section-eyebrow">OPTION C</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">ERP &amp; Inventory Integration</h3>
            <p class="card-desc">We connect your e-commerce storefront to external inventory databases and WhatsApp API.</p>
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
        <h2 class="section-title">A technical partner for e-commerce.</h2>
        <p class="section-description">Building fast, manageable online storefronts.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Mobile-First Architecture</h3>
          <p class="why-desc">Designing storefront interfaces optimized for mobile shoppers from day one.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Clean Catalog Management</h3>
          <p class="why-desc">Structuring product data so adding new items and managing stock remains straightforward.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Secure Integrations</h3>
          <p class="why-desc">Building safe payment gateway webhooks and order processing API connections.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Transparent Process</h3>
          <p class="why-desc">Clear milestones from catalog wireframing to cross-browser testing and store launch.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Dedicated Launch Support</h3>
          <p class="why-desc">Continued assistance for product catalog uploads, admin training and store maintenance.</p>
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
        <a href="{{ route('services.websites') }}" class="related-service-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Static &amp; Dynamic Websites</h3>
            <p class="card-desc">Corporate websites, service showcases and marketing landing pages.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.sales-bots') }}" class="related-service-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Sales Bots</h3>
            <p class="card-desc">Conversational lead qualification and product discovery tools.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.whatsapp-api') }}" class="related-service-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">WhatsApp Business API Setup</h3>
            <p class="card-desc">Official API integration, multi-agent chat and automated messaging.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.custom-software') }}" class="related-service-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Custom Software Development</h3>
            <p class="card-desc">Bespoke web applications, portals and business platforms.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>
      </div>
    </section>

    <!-- 13. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Questions about e-commerce development.</h2>
        <p class="section-description">Clear answers regarding online store builds.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-ecom-1" id="faq-abtn-1">
            <span>What features are included in custom e-commerce development?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ecom-1" class="faq-panel" role="region" aria-labelledby="faq-abtn-1">
            <div class="faq-content">
              Development includes responsive storefront design, product catalog management, search/filtering, cart checkout drawers, order administration, customer accounts, and payment/delivery integrations.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ecom-2" id="faq-abtn-2">
            <span>Can our store connect with payment gateways and courier services?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ecom-2" class="faq-panel" role="region" aria-labelledby="faq-abtn-2">
            <div class="faq-content">
              Yes. We build API connections for online payment gateways, credit card processors, cash-on-delivery workflows, and local courier tracking APIs.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ecom-3" id="faq-abtn-3">
            <span>Does Snipezon guarantee payment provider approval or sales numbers?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ecom-3" class="faq-panel" role="region" aria-labelledby="faq-abtn-3">
            <div class="faq-content">
              No. Third-party payment gateway approvals, merchant bank verification, search engine rankings, and sales numbers are subject to external provider rules, product demand, and market execution. Snipezon does not make guaranteed sales claims.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ecom-4" id="faq-abtn-4">
            <span>Is the online store optimized for mobile phones?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ecom-4" class="faq-panel" role="region" aria-labelledby="faq-abtn-4">
            <div class="faq-content">
              Yes. Every e-commerce website is engineered mobile-first, ensuring touch-friendly product navigation, fast image loading, and effortless mobile checkout.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ecom-5" id="faq-abtn-5">
            <span>Can we manage product stock and orders ourselves?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ecom-5" class="faq-panel" role="region" aria-labelledby="faq-abtn-5">
            <div class="faq-content">
              Yes. We provide a clean administration dashboard allowing non-technical store managers to upload products, update prices, manage stock counts, and process orders easily.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 14. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Ready to build a modern e-commerce storefront?</h2>
        <p class="cta-banner-desc">Discuss your product selling goals with Snipezon.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Start Your Store</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20an%20e-commerce%20website." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection

