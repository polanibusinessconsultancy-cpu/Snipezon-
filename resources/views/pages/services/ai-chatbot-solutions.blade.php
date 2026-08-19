@extends('layouts.frontend')

@section('title', 'AI Chatbot Solutions | Snipezon')
@section('meta_description', 'Deploy full AI chatbot solutions with Snipezon connected to your business knowledge base for website and WhatsApp customer assistance.')
@section('body_data_page', 'ai-chatbot-solutions')

@section('content')
<!-- 1. BREADCRUMB AND SERVICE HERO -->
    <section class="service-hero-section container">
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <a href="{{ route('digital-solutions') }}">Digital Solutions</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">AI Chatbot Solutions</span>
      </nav>

      <div class="service-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">AI CHATBOT SOLUTIONS</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Helpful conversations connected to your <span class="highlight-purple">business knowledge.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            We build intelligent AI chatbots that draw answers from approved business documents and knowledge bases to support customers across web and messaging channels.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Explore AI Chatbots</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#bot-process" class="button button-secondary">
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
            <img src="../{{ asset('assets/images/') }}logo/logo-icon.svg" alt="Snipezon Core" width="75" height="75">
          </div>

          <div class="arch-node arch-node-1">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
            <span>Website</span>
          </div>

          <div class="arch-node arch-node-2">
            <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp</span>
          </div>

          <div class="arch-node arch-node-3">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Knowledge Base</span>
          </div>

          <div class="arch-node arch-node-4">
            <svg viewBox="0 0 24 24"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7z"/></svg>
            <span>AI Assistant</span>
          </div>

          <div class="arch-node arch-node-5">
            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            <span>Human Agent</span>
          </div>

          <div class="arch-node arch-node-6">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
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
          <h3 class="value-title">Knowledge-Aware</h3>
          <p class="value-desc">Grounding answers directly in your verified business documentation and product guides.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="value-title">Multi-Channel Ready</h3>
          <p class="value-desc">Deploying consistent AI chatbot assistants across website widgets and WhatsApp channels.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
          <h3 class="value-title">Human Escalation</h3>
          <p class="value-desc">Transferring complex or uncertain requests to human staff members with conversation context.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="value-title">Continuously Refined</h3>
          <p class="value-desc">Regularly updating knowledge bases and prompt instructions for improved accuracy.</p>
        </div>
      </div>
    </section>

    <!-- 3. SERVICE OVERVIEW -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OVERVIEW</span>
          <h2 class="section-title">Grounded conversational AI.</h2>
          <p>
            Snipezon builds custom AI chatbots engineered to draw answers from approved company knowledge bases, product manuals, and official FAQs.
          </p>
          <p>
            Rather than relying on unconstrained AI models, our chatbot architectures use strict retrieval boundaries and clear system instructions so responses remain relevant, professional, and aligned with company guidelines.
          </p>
        </div>

        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="sidebar-checklist" style="display: flex; flex-direction: column; gap: 16px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Verified Knowledge Sources>Verified Knowledge Sources</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">AI retrieves facts exclusively from your uploaded manuals, policy documents and SOPs.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Controlled Response Rules>Controlled Response Rules</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Custom system prompts enforce brand tone, topic boundaries and fallback instructions.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Multi-Agent Handovers>Multi-Agent Handovers</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Seamlessly transition conversations to human support staff when inquiries require personal care.</p>
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
        <p class="section-description">Addressing customer information barriers.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Repeated Questions</h3>
          <p class="why-desc">Automate immediate answers to common questions about services, hours and policies.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Large Information Libraries</h3>
          <p class="why-desc">Help visitors locate specific answers quickly from long manuals and dense website pages.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">Delayed First Responses</h3>
          <p class="why-desc">Provide 24/7 immediate assistance to visitors without making them wait for email replies.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Channel Inconsistency</h3>
          <p class="why-desc">Deliver consistent knowledge-based answers across both website chat widgets and WhatsApp.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">Difficult Handover to Staff</h3>
          <p class="why-desc">Transfer unhandled requests smoothly to staff members with complete chat transcripts.</p>
        </div>
      </div>
    </section>

    <!-- 5. CAPABILITIES BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CAPABILITIES</span>
        <h2 class="section-title">AI chatbot capabilities.</h2>
        <p class="section-description">Core conversational features.</p>
      </div>

      <div class="capability-bento-grid">
        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Website AI Chatbots</h3>
            <p class="card-desc">Custom web chat widgets styled to match your corporate brand palette.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 80%;"></div><div class="micro-ui-bar" style="width: 50%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">WhatsApp Chatbot Integration</h3>
            <p class="card-desc">Connecting AI knowledge engines directly to your official WhatsApp Business API channel.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 90%;"></div><div class="micro-ui-bar cyan" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Knowledge-Base Assistance</h3>
            <p class="card-desc">Indexing PDFs, DOCX files and web URLs into vector data stores for semantic retrieval.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 70%;"></div><div class="micro-ui-bar" style="width: 40%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Guided Conversation Flows</h3>
            <p class="card-desc">Combining AI responses with structured quick-reply buttons for fast user navigation.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 85%;"></div><div class="micro-ui-bar cyan" style="width: 55%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Lead &amp; Enquiry Collection</h3>
            <p class="card-desc">Capturing contact details and project requirements naturally during conversation.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 65%;"></div><div class="micro-ui-bar" style="width: 75%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Human-Agent Handover</h3>
            <p class="card-desc">Escalating complex requests automatically to available human support representatives.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 95%;"></div><div class="micro-ui-bar cyan" style="width: 45%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Conversation Analytics</h3>
            <p class="card-desc">Tracking top asked topics, user satisfaction ratings and common unresolved questions.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 75%;"></div><div class="micro-ui-bar" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Chatbot Improvement Support</h3>
            <p class="card-desc">Updating knowledge base indices and prompt instructions continuously based on user logs.</p>
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
        <h2 class="section-title">AI Customer Assistance Workspace.</h2>
        <p class="section-description">A representative preview of a knowledge-connected AI chatbot workspace.</p>
      </div>

      <div class="showcase-dashboard-card" data-animate="fade-up">
        <div class="dash-header-bar">
          <div class="dash-dots"><span class="dash-dot"></span><span class="dash-dot"></span><span class="dash-dot"></span></div>
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">AI Chatbot Control Center</span>
          <span class="showcase-badge">Representative Solution</span>
        </div>

        <div class="dash-grid-layout">
          <div class="dash-sidebar-nav">
            <div class="dash-nav-item active">Knowledge Sources</div>
            <div class="dash-nav-item">Chat Widget</div>
            <div class="dash-nav-item">Citations</div>
            <div class="dash-nav-item">Human Takeover</div>
            <div class="dash-nav-item">Analytics</div>
          </div>

          <div class="dash-main-area">
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Document Index</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Grounded Knowledge</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Active Channels</span>
              <strong style="font-size: 1.1rem; color: var(--color-cyan);">Web &amp; WhatsApp</strong>
            </div>
            <div class="dash-widget">
              <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Handover Button</span>
              <strong style="font-size: 1.1rem; color: var(--color-text);">Staff Takeover Ready</strong>
            </div>
          </div>
        </div>

        <div class="dash-callouts-list">
          <span class="showcase-badge">Approved Knowledge</span>
          <span class="showcase-badge">RAG Vector Search</span>
          <span class="showcase-badge">Controlled Instructions</span>
          <span class="showcase-badge">Escalation Triggers</span>
          <span class="showcase-badge">Privacy Protection</span>
        </div>
      </div>
    </section>

    <!-- 7. IMPLEMENTATION PROCESS -->
    <section id="bot-process" class="process-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">AI chatbot implementation path.</h2>
        <p class="section-description">A structured 6-step pathway to chatbot deployment.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Knowledge Review</h3>
          <p class="process-step-desc">Gather and audit your company documentation, FAQs, product sheets and support guides.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">Structure Knowledge Base</h3>
          <p class="process-step-desc">Convert and index business documents into vector search data stores.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">Design Instructions &amp; Guardrails</h3>
          <p class="process-step-desc">Draft strict system prompts governing tone, response limits and fallback rules.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Build &amp; Integrate</h3>
          <p class="process-step-desc">Deploy the AI chatbot interface on your website or WhatsApp Business API channel.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Test Quality &amp; Handover</h3>
          <p class="process-step-desc">Test response accuracy, citation sources, and human agent takeover triggers.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="500">
          <div class="process-step-number">06</div>
          <h3 class="process-step-title">Continuous Tuning</h3>
          <p class="process-step-desc">Review conversation logs regularly to add missing knowledge and refine answers.</p>
        </div>
      </div>
    </section>

    <!-- 8. TECHNOLOGY APPROACH -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY APPROACH</span>
        <h2 class="section-title">Grounded AI architecture.</h2>
        <p class="section-description">Key engineering standards applied across chatbot solutions.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Approved Information Sources</h3>
          <p class="why-desc">The chatbot retrieves answers strictly from your verified company documentation.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Retrieval Augmented Generation (RAG)</h3>
          <p class="why-desc">Semantic vector search matching user questions with exact document passages.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Controlled Response Instructions</h3>
          <p class="why-desc">Strict system prompt instructions prohibiting out-of-scope speculation or opinions.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Escalation for Uncertain Requests</h3>
          <p class="why-desc">Automatic transfer to human staff when user questions fall outside indexed knowledge.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Conversation Review Logs</h3>
          <p class="why-desc">Admin dashboards allowing staff to audit transcripts and improve knowledge base files.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Privacy-Conscious Implementation</h3>
          <p class="why-desc">Data protection protocols ensuring user conversation data remains private and secure.</p>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS USE CASES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">USE CASES</span>
        <h2 class="section-title">AI chatbots in action.</h2>
        <p class="section-description">Common business applications.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Customer Service Helpdesk</h3>
          <p class="why-desc">Answer 24/7 inquiries regarding account steps, shipping fees and company policies.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Internal Employee Onboarding</h3>
          <p class="why-desc">Help new employees query HR handbooks, benefit guides and internal IT procedures.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">E-commerce Shopper Assistance</h3>
          <p class="why-desc">Assist shoppers with sizing guides, return rules and order tracking information.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Product Manual Search</h3>
          <p class="why-desc">Guide technical users through complex equipment setup steps and troubleshooting manuals.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">FAQ Automation</h3>
          <p class="why-desc">Replace long static FAQ lists with an interactive conversational assistant.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Multi-Lingual Support</h3>
          <p class="why-desc">Provide instant assistance to international website visitors in multiple languages.</p>
        </div>
      </div>
    </section>

    <!-- 10. ENGAGEMENT OPTIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">ENGAGEMENT OPTIONS</span>
        <h2 class="section-title">Flexible AI chatbot options.</h2>
        <p class="section-description">Choose how to deploy your AI assistant.</p>
      </div>

      <div class="engagement-options-grid">
        <div class="engagement-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">OPTION A</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Turnkey AI Chatbot Build</h3>
            <p class="card-desc">We build a complete knowledge-connected chatbot widget for your website from scratch.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-primary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">OPTION B</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Knowledge Base Integration</h3>
            <p class="card-desc">We index your business manuals and connect an AI engine to your existing web platform.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="200">
          <div>
            <span class="section-eyebrow">OPTION C</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Multi-Channel Deployment</h3>
            <p class="card-desc">We deploy the same knowledge chatbot across both your website and WhatsApp Business API number.</p>
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
        <h2 class="section-title">A technical partner for conversational AI.</h2>
        <p class="section-description">Building responsible, knowledge-grounded AI tools.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Grounded AI Architecture</h3>
          <p class="why-desc">Designed to reduce unsupported responses by grounding answers in approved business information and escalating uncertain requests when appropriate.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Strict Content Guardrails</h3>
          <p class="why-desc">System prompts enforcing topic boundaries, corporate tone and fallback procedures.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Seamless Human Escalation</h3>
          <p class="why-desc">Transferring unhandled questions smoothly to human agents with complete chat transcripts.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Privacy Protection</h3>
          <p class="why-desc">Building secure data pipelines that protect customer conversation details.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Continuous Tuning</h3>
          <p class="why-desc">Regularly auditing conversation logs to refine knowledge files and prompt rules.</p>
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
        <a href="ai-software-solutions.html" class="related-service-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">AI-Based Software Solutions</h3>
            <p class="card-desc">Intelligent features, predictive tools and AI assistant integrations.</p>
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

        <a href="customer-care-automation.html" class="related-service-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Customer Care Automation</h3>
            <p class="card-desc">Ticket routing, automated replies and support team management.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="sales-bots.html" class="related-service-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Sales Bots</h3>
            <p class="card-desc">Conversational lead qualification and product discovery tools.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>
      </div>
    </section>

    <!-- 13. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Questions about AI chatbot solutions.</h2>
        <p class="section-description">Clear answers regarding conversational AI implementation.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-aic-1" id="faq-abtn-1">
            <span>How does an AI chatbot use our business knowledge?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-aic-1" class="faq-panel" role="region" aria-labelledby="faq-abtn-1">
            <div class="faq-content">
              We convert your company PDFs, manuals, and policy pages into structured vector indices. When a user asks a question, the chatbot searches these exact passages to formulate an accurate answer.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-aic-2" id="faq-abtn-2">
            <span>Are AI chatbot responses always 100% correct?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-aic-2" class="faq-panel" role="region" aria-labelledby="faq-abtn-2">
            <div class="faq-content">
              No. While retrieval guardrails minimize inaccuracies, AI models can occasionally misinterpret complex queries. We design fallback escalation rules to transfer uncertain questions to human support staff.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-aic-3" id="faq-abtn-3">
            <span>Can the chatbot run on both our website and WhatsApp?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-aic-3" class="faq-panel" role="region" aria-labelledby="faq-abtn-3">
            <div class="faq-content">
              Yes. The same AI retrieval engine can be connected to your website chat widget and your official WhatsApp Business API channel.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-aic-4" id="faq-abtn-4">
            <span>What happens when the chatbot cannot answer a question?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-aic-4" class="faq-panel" role="region" aria-labelledby="faq-abtn-4">
            <div class="faq-content">
              The chatbot politely informs the user that it does not have the specific detail and offers to collect their contact info or transfer the chat to a live support agent.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-aic-5" id="faq-abtn-5">
            <span>How is business data kept private?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-aic-5" class="faq-panel" role="region" aria-labelledby="faq-abtn-5">
            <div class="faq-content">
              We deploy enterprise API endpoints that do not use customer business data or conversation transcripts to train public AI models.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 14. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Ready to connect your business knowledge to an AI chatbot?</h2>
        <p class="cta-banner-desc">Discuss your customer communication goals with Snipezon.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Explore AI Chatbots</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20an%20AI%20chatbot%20solution." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection
