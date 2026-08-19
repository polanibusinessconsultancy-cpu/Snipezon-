@extends('layouts.frontend')

@section('title', 'Digital Solutions | Snipezon')
@section('meta_description', 'Explore Snipezon’s custom software, AI solutions, WhatsApp Business API, automation, chatbot, accounting, e-commerce and website development services.')
@section('body_data_page', 'digital-solutions')

@section('content')
<!-- 1. HERO SECTION -->
    <section class="solutions-hero-section container">
      <!-- Breadcrumb -->
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Digital Solutions</span>
      </nav>

      <div class="solutions-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">DIGITAL SOLUTIONS</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Technology built around <span class="highlight-purple">your business.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            From custom software and AI automation to intelligent customer experiences, we design practical digital systems that help businesses operate, serve and scale better.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Discuss Your Project</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="{{ route('portfolio') }}" class="button button-secondary">
              <span>View Our Work</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Right Side Technology Command Centre Visual -->
        <div class="command-centre-wrapper" aria-hidden="true">
          <div class="cc-ring cc-ring-1"></div>
          <div class="cc-ring cc-ring-2"></div>

          <div class="cc-core">
            <img src="{{ asset('assets/images/') }}logo/logo-icon.svg" alt="Snipezon Mark" width="90" height="90">
          </div>

          <div class="cc-node cc-node-1">
            <svg viewBox="0 0 24 24"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
            <span>Software</span>
          </div>
          <div class="cc-node cc-node-2">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            <span>AI Solutions</span>
          </div>
          <div class="cc-node cc-node-3">
            <svg viewBox="0 0 24 24"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            <span>Automation</span>
          </div>
          <div class="cc-node cc-node-4">
            <svg viewBox="0 0 24 24"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1z"/></svg>
            <span>Commerce</span>
          </div>
          <div class="cc-node cc-node-5">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
            <span>Analytics</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. VALUE STRIP -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Digital Capabilities & Values</h2>
      <div class="value-grid">
        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3 class="value-title">Strategy First</h3>
          <p class="value-desc">We begin with your goals and shape a clear digital roadmap.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="18" rx="2"/><path d="M2 9h20M7 13l-2 2 2 2M13 13l2 2-2 2M11 13l-2 4"/></svg>
          </div>
          <h3 class="value-title">Custom Architecture</h3>
          <p class="value-desc">Flexible systems designed around your unique requirements.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="value-title">Secure Development</h3>
          <p class="value-desc">Security and privacy considered throughout the development process.</p>
        </div>

        <div class="value-card">
          <div class="value-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 0 1-3.46 0"/></svg>
          </div>
          <h3 class="value-title">Long-Term Support</h3>
          <p class="value-desc">Continued assistance as your digital solution evolves.</p>
        </div>
      </div>
    </section>

    <!-- 3. DIGITAL JOURNEY INTRODUCTION -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OUR APPROACH</span>
          <h2 class="section-title">One partner for your complete digital journey.</h2>
          <p>
            Navigating digital transformation shouldn't require managing multiple disconnected agencies. Snipezon brings together strategic planning, UI/UX design, custom engineering, and AI automation under a single cohesive execution framework.
          </p>
          <p>
            Whether you need an automated customer care pipeline or a comprehensive custom enterprise ERP system, we bridge business intent with dependable technology.
          </p>
        </div>

        <!-- Right Side Connected System Map -->
        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="journey-node-map">
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
              <span>Business Goals</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
              <span>Strategy</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3c-4.97 0-9 4.03-9 9 0 2.12.74 4.07 1.97 5.61L4.35 21l3.52-.64C9.37 20.72 10.64 21 12 21c4.97 0 9-4.03 9-9s-4.03-9-9-9z"/></svg>
              <span>Design</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z"/></svg>
              <span>Engineering</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
              <span>AI &amp; Automation</span>
            </div>
            <div class="map-node">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
              <span>Support &amp; Scale</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. MAIN SERVICES BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR DIGITAL SOLUTIONS</span>
        <h2 class="section-title">Solutions engineered for real business challenges.</h2>
        <p class="section-description">High-performance software systems and automated tools designed to solve specific operational challenges.</p>
      </div>

      <div class="solutions-bento-grid">
        <!-- 1. Custom Software Development -->
        <a href="{{ route('services.custom-software') }}" class="bento-card bento-card-large" data-animate="fade-up">
          <div>
            <div class="bento-card-header">
              <div class="bento-icon-badge">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4zm5.2 0l4.6-4.6-4.6-4.6L16 6l6 6-6 6-1.4-1.4z"/></svg>
              </div>
              <span class="supply-card-link">Explore Solution &rarr;</span>
            </div>
            <h3 class="bento-title">Custom Software Development</h3>
            <p class="bento-description">Tailored enterprise applications, internal tools, and software solutions engineered to your precise business workflow needs.</p>
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

        <!-- 2. AI-Based Software Solutions -->
        <a href="{{ route('services.ai-software') }}" class="bento-card bento-card-large" data-animate="fade-up" data-delay="100">
          <div>
            <div class="bento-card-header">
              <div class="bento-icon-badge">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
              </div>
              <span class="supply-card-link">Explore Solution &rarr;</span>
            </div>
            <h3 class="bento-title">AI-Based Software Solutions</h3>
            <p class="bento-description">Intelligent machine learning algorithms, predictive logic, and automated data processing integrated directly into your operations.</p>
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
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            </div>
            <span class="supply-card-link">Explore Solution &rarr;</span>
          </div>
          <div>
            <h3 class="bento-title">WhatsApp Business API Setup</h3>
            <p class="bento-description">Official API integration for automated broadcast messaging, notification dispatch, and high-volume customer chats.</p>
          </div>
        </a>

        <!-- 4. Customer Care Automation -->
        <a href="{{ route('services.customer-care') }}" class="bento-card bento-card-medium" data-animate="fade-up" data-delay="100">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
            </div>
            <span class="supply-card-link">Explore Solution &rarr;</span>
          </div>
          <div>
            <h3 class="bento-title">Customer Care Automation Systems</h3>
            <p class="bento-description">Automate ticket routing, FAQ handling, and support escalation to drastically cut down response latency.</p>
          </div>
        </a>

        <!-- 5. Sales Bots -->
        <a href="{{ route('services.sales-bots') }}" class="bento-card bento-card-medium" data-animate="fade-up" data-delay="200">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>
            </div>
            <span class="supply-card-link">Explore Solution &rarr;</span>
          </div>
          <div>
            <h3 class="bento-title">Sales Bots for Products &amp; Services</h3>
            <p class="bento-description">Interactive bots that qualify incoming leads, recommend relevant products, and accelerate sales pipeline movement.</p>
          </div>
        </a>

        <!-- 6. Full AI Chatbot Solutions -->
        <a href="{{ route('services.ai-chatbots') }}" class="bento-card bento-card-small" data-animate="fade-up">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 7a8 8 0 0 0-8 8v3h16v-3a8 8 0 0 0-8-8z"/></svg>
            </div>
            <span class="supply-card-link">&rarr;</span>
          </div>
          <div>
            <h3 class="bento-title">Full AI Chatbot Solutions</h3>
            <p class="bento-description">Conversational AI agents trained on your business domain.</p>
          </div>
        </a>

        <!-- 7. Accounting Software -->
        <a href="{{ route('services.accounting') }}" class="bento-card bento-card-small" data-animate="fade-up" data-delay="100">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
            </div>
            <span class="supply-card-link">&rarr;</span>
          </div>
          <div>
            <h3 class="bento-title">Accounting Software</h3>
            <p class="bento-description">Invoicing, expense tracking, and financial report control.</p>
          </div>
        </a>

        <!-- 8. E-commerce Websites -->
        <a href="{{ route('services.ecommerce') }}" class="bento-card bento-card-small" data-animate="fade-up" data-delay="200">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1z"/></svg>
            </div>
            <span class="supply-card-link">&rarr;</span>
          </div>
          <div>
            <h3 class="bento-title">E-commerce Websites</h3>
            <p class="bento-description">Fast, conversion-focused online shopping experiences.</p>
          </div>
        </a>

        <!-- 9. Static & Dynamic Websites -->
        <a href="{{ route('services.websites') }}" class="bento-card bento-card-small" data-animate="fade-up" data-delay="300">
          <div class="bento-card-header">
            <div class="bento-icon-badge">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
            </div>
            <span class="supply-card-link">&rarr;</span>
          </div>
          <div>
            <h3 class="bento-title">Static &amp; Dynamic Websites</h3>
            <p class="bento-description">SEO-optimized web platforms built for speed and impact.</p>
          </div>
        </a>
      </div>
    </section>

    <!-- 5. BUSINESS OUTCOMES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">BUSINESS OUTCOMES</span>
        <h2 class="section-title">Designed to improve what matters.</h2>
        <p class="section-description">Practical technology implementations focused on real operational efficiency gains.</p>
      </div>

      <div class="outcomes-grid">
        <div class="outcome-card" data-animate="fade-up">
          <div class="outcome-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
          </div>
          <h3 class="outcome-title">Save Operational Time</h3>
          <p class="outcome-desc">Automate repetitive manual data transfers and status tracking.</p>
        </div>

        <div class="outcome-card" data-animate="fade-up" data-delay="100">
          <div class="outcome-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3 class="outcome-title">Respond Faster</h3>
          <p class="outcome-desc">Instant customer support resolution and lead routing 24/7.</p>
        </div>

        <div class="outcome-card" data-animate="fade-up" data-delay="200">
          <div class="outcome-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
          </div>
          <h3 class="outcome-title">Reduce Manual Work</h3>
          <p class="outcome-desc">Eliminate spreadsheet bottlenecks through automated system sync.</p>
        </div>

        <div class="outcome-card" data-animate="fade-up" data-delay="300">
          <div class="outcome-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
          </div>
          <h3 class="outcome-title">Improve Customer Experience</h3>
          <p class="outcome-desc">Deliver seamless user journeys across messaging and web channels.</p>
        </div>

        <div class="outcome-card" data-animate="fade-up" data-delay="400">
          <div class="outcome-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>
          </div>
          <h3 class="outcome-title">Scale with Confidence</h3>
          <p class="outcome-desc">Build modular software foundations ready for business growth.</p>
        </div>
      </div>
    </section>

    <!-- 6. DEVELOPMENT PROCESS -->
    <section class="process-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">From idea to dependable digital product.</h2>
        <p class="section-description">A structured, transparent engineering process focused on long-term reliability.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Discover</h3>
          <p class="process-step-desc">We understand your goals, users and operational challenges.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Plan</h3>
          <p class="process-step-desc">We define the roadmap, features and technical approach.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Design</h3>
          <p class="process-step-desc">We create clear, intuitive and responsive user experiences.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Build &amp; Integrate</h3>
          <p class="process-step-desc">We develop, test and connect the required software systems.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Launch &amp; Support</h3>
          <p class="process-step-desc">We deploy the solution and continue assisting after launch.</p>
        </div>
      </div>
    </section>

    <!-- 7. TECHNOLOGY CAPABILITIES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY CAPABILITIES</span>
        <h2 class="section-title">Modern capabilities. Practical implementation.</h2>
        <p class="section-description">Proven technology stacks and integration methodologies tailored to enterprise demands.</p>
      </div>

      <div class="capabilities-grid">
        <div class="capability-panel" data-animate="fade-up">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </div>
          <h3 class="capability-panel-title">Web &amp; Business Applications</h3>
          <p class="capability-panel-desc">Responsive, high-speed web apps built for desktop and mobile performance.</p>
        </div>

        <div class="capability-panel" data-animate="fade-up" data-delay="100">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
          </div>
          <h3 class="capability-panel-title">AI &amp; Language Models</h3>
          <p class="capability-panel-desc">Practical natural language processing and domain-trained AI models.</p>
        </div>

        <div class="capability-panel" data-animate="fade-up" data-delay="200">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
          </div>
          <h3 class="capability-panel-title">APIs &amp; System Integration</h3>
          <p class="capability-panel-desc">Connecting CRM, ERP, and payment systems seamlessly via RESTful APIs.</p>
        </div>

        <div class="capability-panel" data-animate="fade-up" data-delay="300">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3 class="capability-panel-title">Automation Workflows</h3>
          <p class="capability-panel-desc">Automating cross-platform data triggers and background batch tasks.</p>
        </div>

        <div class="capability-panel" data-animate="fade-up">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1z"/></svg>
          </div>
          <h3 class="capability-panel-title">E-commerce &amp; Payments</h3>
          <p class="capability-panel-desc">Secure payment gateway setup and inventory management tools.</p>
        </div>

        <div class="capability-panel" data-animate="fade-up" data-delay="100">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96z"/></svg>
          </div>
          <h3 class="capability-panel-title">Cloud &amp; Deployment</h3>
          <p class="capability-panel-desc">Scalable cloud hosting setups, SSL security, and high uptime assurance.</p>
        </div>

        <div class="capability-panel" data-animate="fade-up" data-delay="200">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
          </div>
          <h3 class="capability-panel-title">Analytics &amp; Reporting</h3>
          <p class="capability-panel-desc">Operational metric dashboards providing key performance visibility.</p>
        </div>

        <div class="capability-panel" data-animate="fade-up" data-delay="300">
          <div class="capability-panel-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
          </div>
          <h3 class="capability-panel-title">Security &amp; Access Control</h3>
          <p class="capability-panel-desc">Role-based permissions, data encryption, and security audit readiness.</p>
        </div>
      </div>
    </section>

    <!-- 8. FEATURED WORK -->
    <section class="work-section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FEATURED WORK</span>
        <h2 class="section-title">Solutions we’re proud to build.</h2>
        <p class="section-description">Representative digital solution architectures designed by Snipezon.</p>
      </div>

      <div class="work-cards-grid">
        <!-- Project 1 -->
        <a href="{{ route('portfolio') }}" class="work-card" data-animate="fade-up">
          <div class="work-card-preview">
            <img src="{{ asset('assets/images/') }}portfolio/business-automation.svg" alt="Business Operations Platform Representative Solution" width="600" height="360" loading="lazy">
          </div>
          <div class="work-card-body">
            <div class="work-tags">
              <span class="work-tag">Representative Solution</span>
              <span class="work-tag">Workflow</span>
            </div>
            <h3 class="work-card-title">Business Operations Platform</h3>
            <p class="work-card-desc">Unified operations workspace managing multi-departmental task routing and team notifications.</p>
          </div>
        </a>

        <!-- Project 2 -->
        <a href="{{ route('portfolio') }}" class="work-card" data-animate="fade-up" data-delay="100">
          <div class="work-card-preview">
            <img src="{{ asset('assets/images/') }}portfolio/ai-support-workspace.svg" alt="AI Customer Support Workspace Representative Solution" width="600" height="360" loading="lazy">
          </div>
          <div class="work-card-body">
            <div class="work-tags">
              <span class="work-tag">Representative Solution</span>
              <span class="work-tag">AI Chatbot</span>
            </div>
            <h3 class="work-card-title">AI Customer Support Workspace</h3>
            <p class="work-card-desc">24/7 intelligent customer care agent handling automated inquiry resolution and escalation.</p>
          </div>
        </a>

        <!-- Project 3 -->
        <a href="{{ route('portfolio') }}" class="work-card" data-animate="fade-up" data-delay="200">
          <div class="work-card-preview">
            <img src="{{ asset('assets/images/') }}portfolio/ecommerce-platform.svg" alt="Modern E-commerce Experience Representative Solution" width="600" height="360" loading="lazy">
          </div>
          <div class="work-card-body">
            <div class="work-tags">
              <span class="work-tag">Representative Solution</span>
              <span class="work-tag">E-commerce</span>
            </div>
            <h3 class="work-card-title">Modern E-commerce Experience</h3>
            <p class="work-card-desc">Fast, secure and conversion-focused web store featuring instant checkout and mobile responsiveness.</p>
          </div>
        </a>
      </div>

      <div style="text-align: center;" data-animate="fade-up">
        <a href="{{ route('portfolio') }}" class="button button-primary">
          <span>See All Work</span>
          <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </section>

    <!-- 9. WHY SNIPEZON -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">WHY SNIPEZON</span>
        <h2 class="section-title">Built with innovation. Delivered with responsibility.</h2>
        <p class="section-description">Why modern teams trust Snipezon to build their digital foundations.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
          </div>
          <h3 class="why-title">Business-First Thinking</h3>
          <p class="why-desc">We align every technical line of code with your operational strategy.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 15h-2v-6h2zm0-8h-2V7h2z"/></svg>
          </div>
          <h3 class="why-title">AI Without the Hype</h3>
          <p class="why-desc">Practical AI automation applied directly to solve real operational bottlenecks.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z"/></svg>
          </div>
          <h3 class="why-title">Tailored Solutions</h3>
          <p class="why-desc">Modular systems designed specifically around your business requirements.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </div>
          <h3 class="why-title">Clear Communication</h3>
          <p class="why-desc">Transparent roadmaps, regular progress updates, and responsive support.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </div>
          <h3 class="why-title">Continued Support</h3>
          <p class="why-desc">Long-term maintenance and optimization assistance as your systems scale.</p>
        </div>
      </div>
    </section>

    <!-- 10. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Common questions about our digital solutions.</h2>
        <p class="section-description">Clear answers to help you plan your next technology initiative.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Expanded by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-ans-1" id="faq-btn-1">
            <span>What types of software can Snipezon build?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ans-1" class="faq-panel" role="region" aria-labelledby="faq-btn-1">
            <div class="faq-content">
              Snipezon builds custom enterprise applications, management dashboards, AI-powered automation systems, accounting software tools, e-commerce stores, and high-performance static or dynamic websites tailored to your exact business specifications.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ans-2" id="faq-btn-2">
            <span>Can you integrate AI into an existing system?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ans-2" class="faq-panel" role="region" aria-labelledby="faq-btn-2">
            <div class="faq-content">
              Yes. We connect AI models and natural language automation into pre-existing databases, CRMs, and messaging channels via secure APIs without requiring you to rebuild your entire infrastructure.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ans-3" id="faq-btn-3">
            <span>Do you provide WhatsApp Business API setup?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ans-3" class="faq-panel" role="region" aria-labelledby="faq-btn-3">
            <div class="faq-content">
              Yes. We assist with official WhatsApp Business API verification, automated messaging workflow configuration, and integration with your customer care or sales chatbot agents.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ans-4" id="faq-btn-4">
            <span>Can you redesign or upgrade an existing website?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ans-4" class="faq-panel" role="region" aria-labelledby="faq-btn-4">
            <div class="faq-content">
              Absolutely. We modernize slow legacy websites with clean static/dynamic architectures, modern UI/UX design systems, mobile responsiveness, and SEO optimization.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-ans-5" id="faq-btn-5">
            <span>Do you provide support after launch?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-ans-5" class="faq-panel" role="region" aria-labelledby="faq-btn-5">
            <div class="faq-content">
              Yes. We offer post-launch technical assistance, performance monitoring, security updates, and system scaling options to ensure long-term stability.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 11. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Have a digital challenge? Let’s solve it together.</h2>
        <p class="cta-banner-desc">Share your requirement and let’s explore a reliable, scalable and intelligent solution.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Book a Consultation</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20digital%20solution." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection
