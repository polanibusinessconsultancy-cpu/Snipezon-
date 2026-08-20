@extends('layouts.frontend')

@section('title', 'WhatsApp Business API Setup | Snipezon')
@section('meta_description', 'Plan and implement WhatsApp Business API workflows with Snipezon for customer communication, notifications, support and business system integration.')


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
        <span class="breadcrumb-current">WhatsApp Business API Setup</span>
      </nav>

      <div class="service-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">WHATSAPP BUSINESS API SETUP</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Turn WhatsApp into a structured <span class="highlight-purple">business channel.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            We help businesses plan and connect WhatsApp communication workflows for enquiries, notifications, support and operational coordination.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Discuss Your Setup</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#wa-process" class="button button-secondary">
              <span>View Setup Process</span>
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
            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            <span>Customer</span>
          </div>

          <div class="arch-node arch-node-2">
            <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp API</span>
          </div>

          <div class="arch-node arch-node-3">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Templates</span>
          </div>

          <div class="arch-node arch-node-4">
            <svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7z"/></svg>
            <span>Automation</span>
          </div>

          <div class="arch-node arch-node-5">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            <span>Support Team</span>
          </div>

          <div class="arch-node arch-node-6">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
            <span>Business System</span>
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
          <h3 class="value-title">Structured Setup</h3>
          <p class="value-desc">Guiding your business through official WhatsApp API channel preparation.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="value-title">Workflow Integration</h3>
          <p class="value-desc">Connect message flows with your existing CRM, software platforms and web forms.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
          <h3 class="value-title">Team Coordination</h3>
          <p class="value-desc">Multi-agent inbox routing allowing several staff members to manage incoming chats.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="value-title">Ongoing Guidance</h3>
          <p class="value-desc">Support for message template planning, webhooks and policy updates.</p>
        </div>
      </div>
    </section>

    <!-- 3. SERVICE OVERVIEW -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OVERVIEW</span>
          <h2 class="section-title">Professional messaging architecture.</h2>
          <p>
            Snipezon helps organizations move beyond informal, personal WhatsApp chats into a structured, multi-agent business messaging channel.
          </p>
          <p>
            We plan and integrate WhatsApp Business API endpoints to enable automated transaction notifications, customer enquiry routing, and centralized team conversation management.
          </p>
        </div>

        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="sidebar-checklist" style="display: flex; flex-direction: column; gap: 16px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Multi-Agent Access>Multi-Agent Access</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Allow multiple support agents to handle messages from one official company number.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Automated Notifications>Automated Notifications</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Send transactional order updates, booking confirmations and status alerts.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">System Connectivity>System Connectivity</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Sync WhatsApp conversation logs and customer details into your core CRM software.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Meta Information Notice Banner -->
    <section class="container" style="margin-bottom: 40px;">
      <div style="background: rgba(34, 211, 238, 0.08); border: 1px solid var(--color-cyan); border-radius: var(--radius-medium); padding: 20px 24px; color: var(--color-text-secondary); font-size: 0.9rem; line-height: 1.6;">
        <strong style="color: var(--color-cyan); display: block; margin-bottom: 4px; font-size: 0.95rem;">Informational Notice Regarding WhatsApp Business Platform:</strong>
        Snipezon is an independent service provider assisting with setup and integration. Meta controls account verification, template approval, platform eligibility, policies, availability and pricing. Snipezon cannot guarantee external Meta approval or green tick verification.
      </div>
    </section>

    <!-- 4. BUSINESS PROBLEMS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">DIAGNOSTIC MAP</span>
        <h2 class="section-title">What we solve.</h2>
        <p class="section-description">Addressing unorganized messaging channels.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Scattered Conversations</h3>
          <p class="why-desc">Consolidate customer inquiries from personal staff phones into one central business channel.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Slow Response Times</h3>
          <p class="why-desc">Eliminate delays with instant automated greeting templates and intelligent team assignment.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">No Structured Routing</h3>
          <p class="why-desc">Route incoming inquiries automatically to sales, support or account managers.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Manual Notification Tasks</h3>
          <p class="why-desc">Replace manual dispatch updates with automated system-triggered WhatsApp templates.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">System Disconnection</h3>
          <p class="why-desc">Sync WhatsApp conversation history and customer phone numbers into your core software.</p>
        </div>
      </div>
    </section>

    <!-- 5. CAPABILITIES BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CAPABILITIES</span>
        <h2 class="section-title">WhatsApp API capabilities.</h2>
        <p class="section-description">Core messaging integration modules.</p>
      </div>

      <div class="capability-bento-grid">
        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">WhatsApp Business API Planning</h3>
            <p class="card-desc">Mapping communication workflows, number requirements and technical architecture.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 80%;"></div><div class="micro-ui-bar" style="width: 50%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Account &amp; Number Setup Guidance</h3>
            <p class="card-desc">Assisting with Meta Business account readiness and phone number allocation.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 90%;"></div><div class="micro-ui-bar cyan" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Message Template Planning</h3>
            <p class="card-desc">Designing compliant transactional message templates for notification triggers.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 70%;"></div><div class="micro-ui-bar" style="width: 40%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Automated Notifications</h3>
            <p class="card-desc">System-triggered delivery alerts, invoice receipts and appointment reminders.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 85%;"></div><div class="micro-ui-bar cyan" style="width: 55%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Enquiry Routing</h3>
            <p class="card-desc">Categorizing incoming WhatsApp chats and assigning them to specialized team queues.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 65%;"></div><div class="micro-ui-bar" style="width: 75%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Team Inbox Integration</h3>
            <p class="card-desc">Connecting WhatsApp API feeds to multi-agent web inboxes for staff collaboration.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 95%;"></div><div class="micro-ui-bar cyan" style="width: 45%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Chatbot &amp; Human Handover</h3>
            <p class="card-desc">Transitioning automated greeting bots smoothly to live customer service agents.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 75%;"></div><div class="micro-ui-bar" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">CRM &amp; System Integration</h3>
            <p class="card-desc">Syncing WhatsApp contact lists and interaction history into your primary CRM database.</p>
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
        <h2 class="section-title">Connected WhatsApp Communication Hub.</h2>
        <p class="section-description">A representative preview of a multi-agent WhatsApp management workspace.</p>
      </div>

      <div class="showcase-dashboard-card" data-animate="fade-up">
        <div class="dash-header-bar">
          <div class="dash-dots"><span class="dash-dot"></span><span class="dash-dot"></span><span class="dash-dot"></span></div>
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">WhatsApp Team Inbox</span>
          <span class="showcase-badge">Representative Solution</span>
        </div>

        <div class="dash-grid-layout">
          <div class="dash-sidebar-nav">
            <div class="dash-nav-item active">New Enquiries</div>
            <div class="dash-nav-item">Assigned Chats</div>
            <div class="dash-nav-item">Templates</div>
            <div class="dash-nav-item">Notifications</div>
            <div class="dash-nav-item">History</div>
          </div>

          <div class="dash-main-area">
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Active Conversations</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Multi-Agent Queue</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Template Selection</span>
              <strong style="font-size: 1.1rem; color: var(--color-cyan);">Approved Messages</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Handover Status</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Agent Assigned</strong>
            </div>
          </div>
        </div>

        <div class="dash-callouts-list">
          <span class="showcase-badge">New Enquiries</span>
          <span class="showcase-badge">Assigned Conversations</span>
          <span class="showcase-badge">Approved Templates</span>
          <span class="showcase-badge">Status Notifications</span>
          <span class="showcase-badge">Human Handover</span>
          <span class="showcase-badge">Conversation History</span>
        </div>
      </div>
    </section>

    <!-- 7. IMPLEMENTATION PROCESS -->
    <section id="wa-process" class="process-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">A clear path to WhatsApp API integration.</h2>
        <p class="section-description">A structured 6-step setup workflow.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Requirement Review</h3>
          <p class="process-step-desc">Evaluate your messaging volumes, team size and target notification workflows.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Account Readiness</h3>
          <p class="process-step-desc">Guide your team through Meta Business Account requirements and phone number setup.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Workflow Design</h3>
          <p class="process-step-desc">Map template message structures, routing rules and multi-agent inbox assignments.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Integration</h3>
          <p class="process-step-desc">Connect WhatsApp API webhooks to your custom web software, database or CRM.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Testing</h3>
          <p class="process-step-desc">Test message dispatch speed, template rendering and agent takeover flows.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="500">
          <div class="process-step-number">06</div>
          <h3 class="process-step-title">Launch Support</h3>
          <p class="process-step-desc">Provide ongoing support for template updates, team onboarding and policy guidance.</p>
        </div>
      </div>
    </section>

    <!-- 8. TECHNOLOGY APPROACH -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY APPROACH</span>
        <h2 class="section-title">Reliable WhatsApp infrastructure.</h2>
        <p class="section-description">Key engineering standards applied across WhatsApp integrations.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Official API Cloud Protocols</h3>
          <p class="why-desc">Connecting directly to official Meta WhatsApp Cloud API endpoints for secure messaging.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Template Management</h3>
          <p class="why-desc">Structuring variable placeholders for order updates, receipts and appointment alerts.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Multi-Agent Inbox Routing</h3>
          <p class="why-desc">Configuring web-based inbox dashboards allowing staff to handle concurrent conversations.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Webhook Listeners</h3>
          <p class="why-desc">Real-time webhook handlers for incoming customer replies and delivery receipt events.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Data Privacy &amp; Security</h3>
          <p class="why-desc">Encryption and access control standards protecting customer phone numbers and messages.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">CRM Synchronization</h3>
          <p class="why-desc">Syncing WhatsApp contact lists and interaction history into your primary CRM database.</p>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS USE CASES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">USE CASES</span>
        <h2 class="section-title">WhatsApp API in practice.</h2>
        <p class="section-description">Common operational messaging scenarios.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Order Notifications</h3>
          <p class="why-desc">Send automated order confirmation and shipping status updates to customers.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Enquiry Triage</h3>
          <p class="why-desc">Route incoming inquiries automatically to sales, support or account managers.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Customer Care Routing</h3>
          <p class="why-desc">Allow multiple agents to respond to customer inquiries from one central company number.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Appointment Reminders</h3>
          <p class="why-desc">Dispatch automated booking reminders and confirmation requests to reduce no-shows.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Field Team Updates</h3>
          <p class="why-desc">Coordinate internal operational alerts and task assignments with team members.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Broadcast Messaging Workflows</h3>
          <p class="why-desc">Send opt-in announcements and service updates using approved templates. Business-initiated messaging is subject to user opt-in, approved templates, Meta policies, account eligibility, applicable messaging limits and charges.</p>
        </div>
      </div>
    </section>

    <!-- 10. ENGAGEMENT OPTIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">ENGAGEMENT OPTIONS</span>
        <h2 class="section-title">Flexible WhatsApp collaboration options.</h2>
        <p class="section-description">Choose how to structure your WhatsApp messaging setup.</p>
      </div>

      <div class="engagement-options-grid">
        <div class="engagement-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">OPTION A</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Complete API Setup &amp; Onboarding</h3>
            <p class="card-desc">We guide account readiness, number setup, template creation and team inbox configuration.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-primary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">OPTION B</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Custom CRM &amp; WhatsApp Integration</h3>
            <p class="card-desc">We connect WhatsApp API webhooks into your custom web application or ERP database.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="200">
          <div>
            <span class="section-eyebrow">OPTION C</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Automated Notification Workflows</h3>
            <p class="card-desc">We build automated template dispatch triggers for order updates and receipt delivery.</p>
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
        <h2 class="section-title">A technical partner for WhatsApp integration.</h2>
        <p class="section-description">Clear guidance throughout your WhatsApp API setup.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Official Architecture Guidance</h3>
          <p class="why-desc">We structure messaging channels adhering strictly to Meta developer standards and guidelines.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">End-to-End Workflow Design</h3>
          <p class="why-desc">From initial number selection to custom web inbox integration and agent routing.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Multi-Agent Inbox Setup</h3>
          <p class="why-desc">Configuring team access controls so staff members collaborate smoothly.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Safe Integration Practices</h3>
          <p class="why-desc">Building secure API webhooks protecting customer phone data and messaging security.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Continued Support</h3>
          <p class="why-desc">Assisting with ongoing template submissions, webhook monitoring and system updates.</p>
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
        <a href="{{ route('services.customer-care') }}" class="related-service-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Customer Care Automation</h3>
            <p class="card-desc">Ticket routing, automated replies and support team management.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.ai-chatbots') }}" class="related-service-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">AI Chatbot Solutions</h3>
            <p class="card-desc">Grounded AI customer assistants for website and WhatsApp messaging.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.sales-bots') }}" class="related-service-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Sales Bots</h3>
            <p class="card-desc">Conversational lead qualification and product discovery tools.</p>
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
        <h2 class="section-title">Questions about WhatsApp Business API.</h2>
        <p class="section-description">Clear answers regarding WhatsApp platform integration.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-wa-1" id="faq-abtn-1">
            <span>What is the WhatsApp Business API?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-wa-1" class="faq-panel" role="region" aria-labelledby="faq-abtn-1">
            <div class="faq-content">
              The WhatsApp Business API (now WhatsApp Business Platform) is Meta’s enterprise messaging interface that allows businesses to programmatically send automated notifications and connect multi-agent customer support inboxes.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-wa-2" id="faq-abtn-2">
            <span>Is it different from the WhatsApp Business mobile application?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-wa-2" class="faq-panel" role="region" aria-labelledby="faq-abtn-2">
            <div class="faq-content">
              Yes. The mobile app is designed for small businesses on a single phone. The API allows multi-agent web access, automated system-triggered notifications, CRM syncing, and custom chatbot integrations.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-wa-3" id="faq-abtn-3">
            <span>Are message templates required?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-wa-3" class="faq-panel" role="region" aria-labelledby="faq-abtn-3">
            <div class="faq-content">
              Yes. Outbound business-initiated messages require pre-approved message templates submitted to Meta. Once a customer replies, a 24-hour open messaging session opens.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-wa-4" id="faq-abtn-4">
            <span>Can it connect with our CRM or website?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-wa-4" class="faq-panel" role="region" aria-labelledby="faq-abtn-4">
            <div class="faq-content">
              Yes. We build custom API webhooks to sync WhatsApp messages, phone contacts, and interaction logs directly into your web platform or CRM database.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-wa-5" id="faq-abtn-5">
            <span>Does Snipezon guarantee Meta verification or template approval?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-wa-5" class="faq-panel" role="region" aria-labelledby="faq-abtn-5">
            <div class="faq-content">
              No. Meta Business Account verification, green tick verification, template approvals, and messaging policy enforcement are strictly controlled by Meta. Snipezon provides technical setup and integration assistance but cannot guarantee external Meta approvals.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 14. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Ready to structure your WhatsApp communication?</h2>
        <p class="cta-banner-desc">Discuss your messaging workflow requirements with Snipezon.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Discuss Your Setup</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20WhatsApp%20Business%20API%20setup." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection

