@extends('layouts.frontend')

@section('title', 'General Item Supply | Snipezon')
@section('meta_description', 'Snipezon provides requirement-based sourcing for home essentials, corporate items, industrial supplies and toys.')
@section('body_data_page', 'general-supply')

@section('content')
<!-- 1. HERO SECTION -->
    <section class="supply-hero-section container">
      <!-- Breadcrumb -->
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">General Supply</span>
      </nav>

      <div class="supply-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">GENERAL ITEM SUPPLY</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Reliable sourcing for every <span class="highlight-purple">business requirement.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            From everyday essentials and workplace needs to industrial supplies and toys, Snipezon helps organizations source the right items through one dependable partner.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="#request-quote" class="button button-primary">
              <span>Request a Quote</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#supply-categories" class="button button-secondary">
              <span>Explore Categories</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Supply Procurement Command Center Visual -->
        <div class="supply-command-visual" data-animate="fade-up" data-delay="200">
          <div class="supply-command-panel">
            <!-- Header Bar -->
            <div class="supply-command-header">
              <div class="supply-header-tag">
                <span class="supply-status-indicator"></span>
                <span class="supply-tag-label">SUPPLY NETWORK</span>
              </div>
              <span class="supply-status-text">Requirement Coordination Active</span>
            </div>

            <!-- 2x2 Category Grid -->
            <div class="supply-category-grid">
              <div class="supply-mini-card">
                <div class="supply-mini-illustration">
                  <img src="{{ asset('assets/images/') }}supply/home-essentials.svg" alt="Home Essentials" width="80" height="80" loading="lazy">
                </div>
                <div class="supply-mini-info">
                  <span class="supply-mini-title">Home Essentials</span>
                  <p class="supply-mini-desc">Household &amp; everyday requirements</p>
                </div>
              </div>

              <div class="supply-mini-card">
                <div class="supply-mini-illustration">
                  <img src="{{ asset('assets/images/') }}supply/corporate-items.svg" alt="Corporate Items" width="80" height="80" loading="lazy">
                </div>
                <div class="supply-mini-info">
                  <span class="supply-mini-title">Corporate Items</span>
                  <p class="supply-mini-desc">Office &amp; business procurement</p>
                </div>
              </div>

              <div class="supply-mini-card">
                <div class="supply-mini-illustration">
                  <img src="{{ asset('assets/images/') }}supply/industrial-items.svg" alt="Industrial Items" width="80" height="80" loading="lazy">
                </div>
                <div class="supply-mini-info">
                  <span class="supply-mini-title">Industrial Items</span>
                  <p class="supply-mini-desc">Operational &amp; industrial supplies</p>
                </div>
              </div>

              <div class="supply-mini-card">
                <div class="supply-mini-illustration">
                  <img src="{{ asset('assets/images/') }}supply/toys.svg" alt="Toys" width="80" height="80" loading="lazy">
                </div>
                <div class="supply-mini-info">
                  <span class="supply-mini-title">Toys</span>
                  <p class="supply-mini-desc">Sourcing for retail &amp; distribution</p>
                </div>
              </div>
            </div>

            <!-- Bottom Workflow Strip -->
            <div class="supply-workflow-strip">
              <div class="workflow-step">Requirement</div>
              <span class="workflow-arrow">&rarr;</span>
              <div class="workflow-step">Sourcing</div>
              <span class="workflow-arrow">&rarr;</span>
              <div class="workflow-step">Verification</div>
              <span class="workflow-arrow">&rarr;</span>
              <div class="workflow-step">Delivery</div>
            </div>

            <!-- Capability Badges -->
            <div class="supply-capability-badges">
              <span class="supply-cap-badge">Multi-Category Sourcing</span>
              <span class="supply-cap-badge">Requirement-Based Quotation</span>
              <span class="supply-cap-badge">Business Coordination</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. PROCUREMENT VALUE STRIP -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Procurement Principles & Value</h2>
      <div class="principles-grid">
        <div class="principle-card">
          <div class="principle-card-header">
            <span class="principle-number">01</span>
            <div class="principle-visual-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
            </div>
          </div>
          <h3 class="principle-title">Requirement-Based Sourcing</h3>
          <p class="principle-desc">Share custom item lists, sample specifications or workplace requirements for tailored sourcing.</p>
          <div class="principle-accent-line"></div>
        </div>

        <div class="principle-card">
          <div class="principle-card-header">
            <span class="principle-number">02</span>
            <div class="principle-visual-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
          </div>
          <h3 class="principle-title">Quality-Focused Selection</h3>
          <p class="principle-desc">Products are evaluated against exact requirements and specifications before confirmation.</p>
          <div class="principle-accent-line"></div>
        </div>

        <div class="principle-card">
          <div class="principle-card-header">
            <span class="principle-number">03</span>
            <div class="principle-visual-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            </div>
          </div>
          <h3 class="principle-title">Business Coordination</h3>
          <p class="principle-desc">Single point of contact for quotations, order updates, and multi-category supply lists.</p>
          <div class="principle-accent-line"></div>
        </div>

        <div class="principle-card">
          <div class="principle-card-header">
            <span class="principle-number">04</span>
            <div class="principle-visual-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="1" y="3" width="15" height="13" rx="2"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
            </div>
          </div>
          <h3 class="principle-title">Delivery Requirement Planning</h3>
          <p class="principle-desc">Organized timelines and dispatch coordination matching your operational schedules.</p>
          <div class="principle-accent-line"></div>
        </div>
      </div>
    </section>

    <!-- 3. PROCUREMENT INTRODUCTION -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OUR APPROACH</span>
          <h2 class="section-title">Procurement made simpler.</h2>
          <p>
            Sourcing general inventory, corporate equipment, and operational items shouldn't require managing dozen separate suppliers. Snipezon streamlines procurement into a transparent requirement-based workflow.
          </p>
          <p>
            We review your specifications, identify suitable product options, coordinate quotations, and organize delivery for your workplace or project.
          </p>
        </div>

        <!-- Right Side Timeline Visual -->
        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="procurement-timeline-card">
            <div class="timeline-card-header">
              <span class="timeline-tag">PROCUREMENT FLOW</span>
              <span class="timeline-status">Active Coordination</span>
            </div>
            <div class="timeline-steps-list">
              <div class="timeline-step-item">
                <span class="timeline-step-badge">01</span>
                <div class="timeline-step-text">
                  <h3 class="step-title">Requirement Received</h3>
                  <p class="step-desc">Item list and specification check</p>
                </div>
              </div>
              <div class="timeline-step-item">
                <span class="timeline-step-badge">02</span>
                <div class="timeline-step-text">
                  <h3 class="step-title">Product Sourcing</h3>
                  <p class="step-desc">Supplier network identification</p>
                </div>
              </div>
              <div class="timeline-step-item">
                <span class="timeline-step-badge">03</span>
                <div class="timeline-step-text">
                  <h3 class="step-title">Specification Review</h3>
                  <p class="step-desc">Quality &amp; quantity verification</p>
                </div>
              </div>
              <div class="timeline-step-item">
                <span class="timeline-step-badge">04</span>
                <div class="timeline-step-text">
                  <h3 class="step-title">Quotation Confirmation</h3>
                  <p class="step-desc">Pricing and delivery timeline</p>
                </div>
              </div>
              <div class="timeline-step-item">
                <span class="timeline-step-badge">05</span>
                <div class="timeline-step-text">
                  <h3 class="step-title">Delivery Coordination</h3>
                  <p class="step-desc">Dispatch and order follow-up</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. MAIN SUPPLY CATEGORIES -->
    <section id="supply-categories" class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR SUPPLY CATEGORIES</span>
        <h2 class="section-title">Everything you need. One supply partner.</h2>
        <p class="section-description">Requirement-based procurement across four core general supply categories.</p>
      </div>

      <div class="category-presentation-grid">
        <!-- Category 1: Home Essentials -->
        <div id="home-essentials" class="category-block" data-animate="fade-up">
          <div class="category-block-image">
            <img src="{{ asset('assets/images/') }}supply/home-essentials.svg" alt="Home Essentials Sourcing Category" width="600" height="400" loading="lazy">
          </div>
          <div class="category-block-content">
            <h3>Home Essentials</h3>
            <p>Kitchenware, household organizers, cleaning supplies, small useful home items and everyday essentials.</p>
            <div class="subcategory-pills">
              <span class="subcategory-pill">Kitchenware</span>
              <span class="subcategory-pill">Household Organization</span>
              <span class="subcategory-pill">Cleaning Supplies</span>
              <span class="subcategory-pill">Daily-Use Items</span>
            </div>
            <a href="#request-quote" class="button button-primary">
              <span>Request This Category</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Category 2: Corporate Items -->
        <div id="corporate-items" class="category-block reverse-layout" data-animate="fade-up">
          <div class="category-block-image">
            <img src="{{ asset('assets/images/') }}supply/corporate-items.svg" alt="Corporate Items Sourcing Category" width="600" height="400" loading="lazy">
          </div>
          <div class="category-block-content">
            <h3>Corporate Items</h3>
            <p>Office stationery, workplace accessories, IT peripherals, office equipment and business-use essentials.</p>
            <div class="subcategory-pills">
              <span class="subcategory-pill">Office Stationery</span>
              <span class="subcategory-pill">IT Accessories</span>
              <span class="subcategory-pill">Workplace Equipment</span>
              <span class="subcategory-pill">Business Essentials</span>
            </div>
            <a href="#request-quote" class="button button-primary">
              <span>Request This Category</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Category 3: Industrial Items -->
        <div id="industrial-items" class="category-block" data-animate="fade-up">
          <div class="category-block-image">
            <img src="{{ asset('assets/images/') }}supply/industrial-items.svg" alt="Industrial Items Sourcing Category" width="600" height="400" loading="lazy">
          </div>
          <div class="category-block-content">
            <h3>Industrial Items</h3>
            <p>Safety equipment, tools, electrical accessories, hardware, maintenance and operational supplies.</p>
            <div class="subcategory-pills">
              <span class="subcategory-pill">Safety &amp; PPE</span>
              <span class="subcategory-pill">Tools &amp; Hardware</span>
              <span class="subcategory-pill">Electrical Accessories</span>
              <span class="subcategory-pill">Maintenance Supplies</span>
            </div>
            <a href="#request-quote" class="button button-primary">
              <span>Request This Category</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Category 4: Toys -->
        <div id="toys" class="category-block reverse-layout" data-animate="fade-up">
          <div class="category-block-image">
            <img src="{{ asset('assets/images/') }}supply/toys.svg" alt="Toys Sourcing Category" width="600" height="400" loading="lazy">
          </div>
          <div class="category-block-content">
            <h3>Toys</h3>
            <p>Educational toys, activity toys, dolls, vehicles, building sets and general toy requirements.</p>
            <div class="subcategory-pills">
              <span class="subcategory-pill">Educational Toys</span>
              <span class="subcategory-pill">Activity Toys</span>
              <span class="subcategory-pill">Toy Vehicles</span>
              <span class="subcategory-pill">Building Sets</span>
            </div>
            <a href="#request-quote" class="button button-primary">
              <span>Request This Category</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- 5. COMMONLY SOURCED REQUIREMENTS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">POPULAR REQUIREMENT GROUPS</span>
        <h2 class="section-title">Commonly sourced requirements.</h2>
        <p class="section-description">Select a requirement group to quickly pre-fill your quotation request.</p>
      </div>

      <div class="requirements-bento-grid">
        <button type="button" class="requirement-group-card" data-category="corporate" data-req-name="Office Setup Supplies" data-animate="fade-up">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </span>
          <span class="req-card-title">Office Setup Supplies</span>
          <span class="req-card-desc">Stationery, desk accessories, filing folders, and essential workplace supplies.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>

        <button type="button" class="requirement-group-card" data-category="corporate" data-req-name="IT & Computer Accessories" data-animate="fade-up" data-delay="100">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z"/></svg>
          </span>
          <span class="req-card-title">IT &amp; Computer Accessories</span>
          <span class="req-card-desc">Mice, keyboards, USB hubs, power strips, cables, and display peripherals.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>

        <button type="button" class="requirement-group-card" data-category="industrial" data-req-name="Safety & PPE Equipment" data-animate="fade-up" data-delay="200">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
          </span>
          <span class="req-card-title">Safety &amp; PPE Equipment</span>
          <span class="req-card-desc">Safety helmets, gloves, protective eyewear, vests, and site safety items.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>

        <button type="button" class="requirement-group-card" data-category="industrial" data-req-name="Tools & Maintenance" data-animate="fade-up" data-delay="300">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.4-2.4c.4-.4.4-1 0-1.3z"/></svg>
          </span>
          <span class="req-card-title">Tools &amp; Maintenance</span>
          <span class="req-card-desc">Hand tools, electrical testing accessories, hardware fasteners, and maintenance supplies.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>

        <button type="button" class="requirement-group-card" data-category="home" data-req-name="Kitchen & Pantry Supplies" data-animate="fade-up">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z"/></svg>
          </span>
          <span class="req-card-title">Kitchen &amp; Pantry Supplies</span>
          <span class="req-card-desc">Breakroom kitchenware, storage containers, organizers, and pantry accessories.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>

        <button type="button" class="requirement-group-card" data-category="home" data-req-name="Cleaning & Facility Items" data-animate="fade-up" data-delay="100">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
          </span>
          <span class="req-card-title">Cleaning &amp; Facility Items</span>
          <span class="req-card-desc">Facility janitorial items, cleaning tools, trash dispensers, and hygiene supplies.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>

        <button type="button" class="requirement-group-card" data-category="toys" data-req-name="Educational & Activity Toys" data-animate="fade-up" data-delay="200">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </span>
          <span class="req-card-title">Educational &amp; Activity Toys</span>
          <span class="req-card-desc">Puzzles, building blocks, science kits, and early learning activity toy sets.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>

        <button type="button" class="requirement-group-card" data-category="multiple" data-req-name="Event & Promotional Requirements" data-animate="fade-up" data-delay="300">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
          </span>
          <span class="req-card-title">Event &amp; Promotional Requirements</span>
          <span class="req-card-desc">Event giveaway items, corporate gift bundles, badges, and promotional accessories.</span>
          <span class="req-card-action">Select &amp; Enquiry &rarr;</span>
        </button>
      </div>
    </section>

    <!-- 6. PROCUREMENT PROCESS -->
    <section class="process-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCUREMENT PROCESS</span>
        <h2 class="section-title">From requirement to reliable supply.</h2>
        <p class="section-description">A structured, transparent procurement process designed for business efficiency.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Share Requirements</h3>
          <p class="process-step-desc">Tell us what you need with specifications and quantity details.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Product Sourcing</h3>
          <p class="process-step-desc">We review suitable products matching your exact specifications.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Quote &amp; Confirmation</h3>
          <p class="process-step-desc">We coordinate the quotation and requirement confirmation process.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Quality Coordination</h3>
          <p class="process-step-desc">Requirements and product details are checked before supply dispatch.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Supply &amp; Support</h3>
          <p class="process-step-desc">We coordinate the agreed supply and remain available for follow-up.</p>
        </div>
      </div>
    </section>

    <!-- 7. PROCUREMENT ADVANTAGES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHY BUSINESSES CHOOSE SNIPEZON</span>
        <h2 class="section-title">Built for organized business procurement.</h2>
        <p class="section-description">Why corporate teams and organizations trust Snipezon for general item sourcing.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <h3 class="why-title">One Point of Contact</h3>
          <p class="why-desc">Single coordination channel for all your diverse supply category needs.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
          </div>
          <h3 class="why-title">Flexible Requirement Lists</h3>
          <p class="why-desc">Send custom specification sheets, sample images, or spreadsheet lists.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          </div>
          <h3 class="why-title">Multi-Category Sourcing</h3>
          <p class="why-desc">Consolidate home, office, industrial, and toy supplies in one order.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h3 class="why-title">Clear Coordination</h3>
          <p class="why-desc">Transparent quotation breakdowns, status updates, and clear timelines.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/></svg>
          </div>
          <h3 class="why-title">Repeat Supply Support</h3>
          <p class="why-desc">Organized re-ordering workflows for recurring workplace consumables.</p>
        </div>
      </div>
    </section>

    <!-- 8. REQUEST-A-QUOTE SECTION -->
    <section id="request-quote" class="quote-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">REQUEST A QUOTE</span>
        <h2 class="section-title">Tell us what you need.</h2>
        <p class="section-description">Fill out your requirement details below to prepare a WhatsApp supply quotation request.</p>
      </div>

      <div class="quote-grid">
        <!-- Form Left -->
        <div class="quote-form-card" data-animate="fade-up">
          <!-- Accessible Form Error Summary Box -->
          <div id="quote-error-summary" class="form-error-summary" role="alert" tabindex="-1" style="display: none; background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; border-radius: var(--radius-small); padding: 16px; margin-bottom: 24px;"></div>

          <form id="supply-quote-form" novalidate>
            <div class="form-grid-2col">
              <div class="form-group">
                <label for="quote-name" class="form-label">Full Name <span class="required-star">*</span></label>
                <input type="text" id="quote-name" name="name" class="form-input" placeholder="e.g. John Doe" required>
              </div>

              <div class="form-group">
                <label for="quote-company" class="form-label">Company Name</label>
                <input type="text" id="quote-company" name="company" class="form-input" placeholder="e.g. Acme Corp">
              </div>

              <div class="form-group">
                <label for="quote-phone" class="form-label">Phone / WhatsApp <span class="required-star">*</span></label>
                <input type="tel" id="quote-phone" name="phone" class="form-input" placeholder="+92 3XX XXXXXXX" required>
              </div>

              <div class="form-group">
                <label for="quote-email" class="form-label">Email Address <span class="required-star">*</span></label>
                <input type="email" id="quote-email" name="email" class="form-input" placeholder="john@example.com" required>
              </div>

              <div class="form-group full-width">
                <label for="quote-category" class="form-label">Supply Category <span class="required-star">*</span></label>
                <select id="quote-category" name="category" class="form-select" required>
                  <option value="">Select a Category...</option>
                  <option value="home">Home Essentials</option>
                  <option value="corporate">Corporate Items</option>
                  <option value="industrial">Industrial Items</option>
                  <option value="toys">Toys</option>
                  <option value="multiple">Multiple Categories</option>
                  <option value="other">Other Sourcing Requirement</option>
                </select>
              </div>

              <div class="form-group full-width">
                <label for="quote-items" class="form-label">Required Items &amp; Specifications <span class="required-star">*</span></label>
                <textarea id="quote-items" name="items" class="form-textarea" rows="4" placeholder="List item names, model numbers, dimensions, or specific requirements..." required></textarea>
              </div>

              <div class="form-group">
                <label for="quote-quantity" class="form-label">Estimated Quantity</label>
                <input type="text" id="quote-quantity" name="quantity" class="form-input" placeholder="e.g. 50 units / 5 boxes">
              </div>

              <div class="form-group">
                <label for="quote-date" class="form-label">Required Date</label>
                <input type="text" id="quote-date" name="required_date" class="form-input" placeholder="e.g. Within 2 weeks">
              </div>

              <div class="form-group full-width">
                <label for="quote-location" class="form-label">Delivery Location <span class="required-star">*</span></label>
                <input type="text" id="quote-location" name="location" class="form-input" placeholder="City / Area / Delivery Address" required>
              </div>

              <div class="form-group full-width">
                <label for="quote-file" class="form-label">Upload Requirement List (Optional)</label>
                <div class="form-file-zone" onclick="document.getElementById('quote-file').click()">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-cyan)" stroke-width="2" style="margin: 0 auto 8px auto;" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
                  <span style="font-size: 0.875rem; color: var(--color-text-secondary); display: block;">Click to choose PDF, DOC, DOCX, XLS, XLSX, CSV, JPG, JPEG, PNG file (Max 10MB)</span>
                  <span id="file-upload-notice" style="font-size: 0.8rem; color: var(--color-cyan); font-weight: 600; display: block; margin-top: 4px;"></span>
                </div>
                <input type="file" id="quote-file" name="file" style="display: none;" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.jpg,.jpeg,.png">
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
                  <input type="checkbox" id="quote-consent" name="consent" required>
                  <span>I agree to be contacted by Snipezon regarding this supply quote request. <span class="required-star">*</span></span>
                </label>
              </div>
            </div>

            <div class="form-notice-box">
              Submitting this form will prepare your requirement and open WhatsApp. You can attach your requirement file in the WhatsApp conversation.
            </div>

            <button type="submit" class="button button-primary" style="width: 100%; justify-content: center;">
              <span>Prepare Supply Request</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </button>
          </form>
        </div>

        <!-- Sidebar Right -->
        <div class="quote-sidebar-card" data-animate="fade-up" data-delay="100">
          <h3 class="sidebar-heading">Need help preparing your list?</h3>
          <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin-bottom: 20px;">
            You can reach our supply coordination team directly or share your requirement list via WhatsApp.
          </p>

          <div style="margin-bottom: 24px;">
            <p style="font-size: 0.85rem; font-weight: 700; color: var(--color-text); margin-bottom: 8px;">Recommended List Details:</p>
            <ul class="sidebar-checklist">
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span>Clear Item Names</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span>Specifications or Sample Images</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span>Required Quantities</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span>Target Required Date</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                <span>Delivery Location</span>
              </li>
            </ul>
          </div>

          <div style="border-top: 1px solid var(--color-border-light); padding-top: 20px; margin-bottom: 20px;">
            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Direct Contact:</p>
            <p style="font-size: 0.9rem; font-weight: 700; color: var(--color-text);"><a href="tel:+923122261919">+92 312 2261919</a></p>
            <p style="font-size: 0.9rem; font-weight: 700; color: var(--color-text);"><a href="mailto:ceo@snipezon.com">ceo@snipezon.com</a></p>
          </div>

          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20general%20supply%20requirement." class="button button-whatsapp" style="width: 100%; justify-content: center;" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>Direct WhatsApp Chat</span>
          </a>
        </div>
      </div>
    </section>

    <!-- 9. SUPPORTED ORGANIZATIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WE SUPPORT</span>
        <h2 class="section-title">Supporting diverse requirements.</h2>
        <p class="section-description">We assist corporate teams, retailers, and organizations with organized general procurement.</p>
      </div>

      <div class="supported-grid">
        <div class="supported-card" data-animate="fade-up">
          <div class="supported-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </div>
          <h3 class="supported-title">Offices &amp; Corporate Teams</h3>
        </div>

        <div class="supported-card" data-animate="fade-up" data-delay="100">
          <div class="supported-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="supported-title">Retail &amp; Trading Businesses</h3>
        </div>

        <div class="supported-card" data-animate="fade-up" data-delay="200">
          <div class="supported-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
          </div>
          <h3 class="supported-title">Schools &amp; Institutions</h3>
        </div>

        <div class="supported-card" data-animate="fade-up" data-delay="300">
          <div class="supported-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M22 22H2V2h20v20z"/></svg>
          </div>
          <h3 class="supported-title">Construction &amp; Maintenance</h3>
        </div>

        <div class="supported-card" data-animate="fade-up" data-delay="400">
          <div class="supported-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="supported-title">Hospitality &amp; Facilities</h3>
        </div>

        <div class="supported-card" data-animate="fade-up" data-delay="500">
          <div class="supported-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
          </div>
          <h3 class="supported-title">Events &amp; Organizations</h3>
        </div>
      </div>
    </section>

    <!-- 10. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Common questions about general supply.</h2>
        <p class="section-description">Clear details on how we coordinate business procurement.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Expanded by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-supply-1" id="faq-sbtn-1">
            <span>What types of items can Snipezon supply?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-supply-1" class="faq-panel" role="region" aria-labelledby="faq-sbtn-1">
            <div class="faq-content">
              Snipezon coordinates sourcing across home essentials, corporate office supplies, IT accessories, industrial safety/hardware tools, educational toys, and custom promotional items.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-supply-2" id="faq-sbtn-2">
            <span>Can I request items from multiple categories?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-supply-2" class="faq-panel" role="region" aria-labelledby="faq-sbtn-2">
            <div class="faq-content">
              Yes. You can consolidate requirements across office stationery, cleaning items, safety gear, and home essentials into a single request list.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-supply-3" id="faq-sbtn-3">
            <span>How do I send my requirement list?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-supply-3" class="faq-panel" role="region" aria-labelledby="faq-sbtn-3">
            <div class="faq-content">
              You can fill out our quotation form above or send your requirement list directly via WhatsApp along with any PDF, Excel, or sample image attachments.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-supply-4" id="faq-sbtn-4">
            <span>Can you source items based on specifications or samples?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-supply-4" class="faq-panel" role="region" aria-labelledby="faq-sbtn-4">
            <div class="faq-content">
              Yes. You can provide specific model numbers, material specifications, or photo samples, and we will match suitable product options.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-supply-5" id="faq-sbtn-5">
            <span>Do you handle repeat business requirements?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-supply-5" class="faq-panel" role="region" aria-labelledby="faq-sbtn-5">
            <div class="faq-content">
              Yes. We assist businesses with recurring monthly or quarterly consumable supply procurement to keep operations running smoothly.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 11. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Have a requirement list? Let’s source it for you.</h2>
        <p class="cta-banner-desc">Share your specifications and requirements to prepare a tailored quotation.</p>
        <div class="cta-banner-actions">
          <a href="#request-quote" class="button button-primary">
            <span>Request a Quote</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20general%20supply%20requirement." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection
