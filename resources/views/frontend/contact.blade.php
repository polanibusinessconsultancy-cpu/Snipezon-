@extends('frontend.layouts.app')

@section('title', 'Contact & Request a Quote | Snipezon')
@section('meta_description', 'Contact Snipezon to discuss custom software, AI automation, websites, WhatsApp solutions or a general item supply requirement.')
@section('body_data_page', 'contact')

@section('page_css')
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/home.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/general-supply.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/contact.css') }}">
@endsection

@section('content')
<!-- 1. CONTACT HERO -->
    <section class="contact-hero-section container">
      <!-- Breadcrumb -->
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Contact</span>
      </nav>

      <div class="contact-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">CONTACT SNIPEZON</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Tell us what your business <span class="highlight-purple">needs next.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            Whether you are planning a digital solution or sourcing general items, share your requirement and let’s identify the right way forward.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="#contact-enquiry" class="button button-primary">
              <span>Request a Quote</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20requirement." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
              <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
              <span>WhatsApp Us</span>
            </a>
          </div>
        </div>

        <!-- Communication Hub Visual Composition -->
        <div class="comm-hub-wrapper" aria-hidden="true">
          <div class="comm-ring comm-ring-1"></div>
          <div class="comm-ring comm-ring-2"></div>

          <div class="comm-core-hub">
            <img src="{{ asset('snipezon/images/logo/logo-icon.svg') }}" alt="Snipezon Core" width="80" height="80">
          </div>

          <div class="comm-node comm-node-1">
            <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            <span>Direct Email</span>
          </div>

          <div class="comm-node comm-node-2">
            <svg viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Line</span>
          </div>

          <div class="comm-node comm-node-3">
            <svg viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
            <span>Project Brief</span>
          </div>

          <div class="comm-node comm-node-4">
            <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
            <span>Supply List</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. CONTACT DETAILS STRIP -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Contact Information & Channels</h2>
      <div class="contact-info-grid">
        <div class="contact-info-card">
          <div class="contact-info-header">
            <div class="contact-icon-box">
              <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <span class="contact-card-label">DIRECT PHONE</span>
          </div>
          <h3 class="contact-card-title">Call / WhatsApp</h3>
          <p class="contact-card-value"><a href="tel:+923122261919">+92 312 2261919</a></p>
          <a href="https://wa.me/923122261919" target="_blank" rel="noopener noreferrer" class="contact-card-link">Open WhatsApp &rarr;</a>
        </div>

        <div class="contact-info-card">
          <div class="contact-info-header">
            <div class="contact-icon-box">
              <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 6l-10 7L2 6"/></svg>
            </div>
            <span class="contact-card-label">EMAIL CHANNEL</span>
          </div>
          <h3 class="contact-card-title">Email Direct</h3>
          <p class="contact-card-value"><a href="mailto:ceo@snipezon.com">ceo@snipezon.com</a></p>
          <a href="mailto:ceo@snipezon.com" class="contact-card-link">Send Email &rarr;</a>
        </div>

        <div class="contact-info-card">
          <div class="contact-info-header">
            <div class="contact-icon-box">
              <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <span class="contact-card-label">HEAD OFFICE</span>
          </div>
          <h3 class="contact-card-title">Office Location</h3>
          <p class="contact-card-value">Shop F19, 1st Floor, Danny Craft Tower, Saddar, Karachi</p>
          <a href="#office-map" class="contact-card-link">View Map &amp; Directions &rarr;</a>
        </div>

        <div class="contact-info-card">
          <div class="contact-info-header">
            <div class="contact-icon-box">
              <svg class="ui-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1"/></svg>
            </div>
            <span class="contact-card-label">REQUIREMENT ROUTE</span>
          </div>
          <h3 class="contact-card-title">Choose Requirement</h3>
          <p class="contact-card-value">Digital Project or General Item Procurement</p>
          <a href="#contact-enquiry" class="contact-card-link">Select Form Route &rarr;</a>
        </div>
      </div>
    </section>

    <!-- 3. TABBED ENQUIRY SECTION -->
    <section id="contact-enquiry" class="quote-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">START YOUR REQUEST</span>
        <h2 class="section-title">Start with the right enquiry.</h2>
        <p class="section-description">Select your enquiry route below to prepare a WhatsApp request.</p>
      </div>

      <!-- Tab Navigation Controls -->
      <div class="tab-nav-wrapper" data-animate="fade-up">
        <div class="contact-tabs-list" role="tablist" aria-label="Enquiry Routes">
          <button type="button" id="tab-digital" class="contact-tab-btn active" role="tab" aria-selected="true" aria-controls="panel-digital">Digital Project</button>
          <button type="button" id="tab-supply" class="contact-tab-btn" role="tab" aria-selected="false" aria-controls="panel-supply" tabindex="-1">General Supply</button>
        </div>
      </div>

      <!-- Form & Sidebar Grid -->
      <div class="quote-grid">
        <!-- Main Form Area (Tabpanels) -->
        <div class="quote-form-card" data-animate="fade-up">
          
          <!-- TAB PANEL 1: DIGITAL PROJECT FORM -->
          <div id="panel-digital" role="tabpanel" aria-labelledby="tab-digital">
            <div id="contact-digital-error-summary" class="form-error-summary" role="alert" tabindex="-1" style="display: none; background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; border-radius: var(--radius-small); padding: 16px; margin-bottom: 24px;"></div>

            <form id="contact-digital-form" novalidate>
              <div class="form-grid-2col">
                <div class="form-group">
                  <label for="contact-digital-name" class="form-label">Full Name <span class="required-star">*</span></label>
                  <input type="text" id="contact-digital-name" name="name" class="form-input" placeholder="e.g. John Doe" required>
                </div>

                <div class="form-group">
                  <label for="contact-digital-company" class="form-label">Company Name</label>
                  <input type="text" id="contact-digital-company" name="company" class="form-input" placeholder="e.g. Acme Corp">
                </div>

                <div class="form-group">
                  <label for="contact-digital-phone" class="form-label">Phone / WhatsApp <span class="required-star">*</span></label>
                  <input type="tel" id="contact-digital-phone" name="phone" class="form-input" placeholder="+92 3XX XXXXXXX" required>
                </div>

                <div class="form-group">
                  <label for="contact-digital-email" class="form-label">Email Address <span class="required-star">*</span></label>
                  <input type="email" id="contact-digital-email" name="email" class="form-input" placeholder="john@example.com" required>
                </div>

                <div class="form-group full-width">
                  <label for="contact-digital-service" class="form-label">Service Required <span class="required-star">*</span></label>
                  <select id="contact-digital-service" name="service" class="form-select" required>
                    <option value="">Select a Service...</option>
                    <option value="custom-software">Custom Software Development</option>
                    <option value="ai-software">AI-Based Software Solutions</option>
                    <option value="whatsapp-api">WhatsApp Business API Setup</option>
                    <option value="care-automation">Customer Care Automation</option>
                    <option value="sales-bots">Sales Bots</option>
                    <option value="ai-chatbot">Full AI Chatbot Solutions</option>
                    <option value="accounting">Accounting Software</option>
                    <option value="ecommerce">E-commerce Website</option>
                    <option value="website">Static or Dynamic Website</option>
                    <option value="other">Other Digital Solution</option>
                  </select>
                </div>

                <div class="form-group full-width">
                  <label for="contact-digital-stage" class="form-label">Project Stage</label>
                  <select id="contact-digital-stage" name="stage" class="form-select">
                    <option value="">Select Stage...</option>
                    <option value="idea">New Idea</option>
                    <option value="upgrade">Existing System Upgrade</option>
                    <option value="integration">Integration / Automation</option>
                    <option value="unsure">Not Sure Yet</option>
                  </select>
                </div>

                <div class="form-group full-width">
                  <label for="contact-digital-summary" class="form-label">Project Summary <span class="required-star">*</span></label>
                  <textarea id="contact-digital-summary" name="summary" class="form-textarea" rows="4" placeholder="Briefly describe your project goals, scope or technical requirements..." required></textarea>
                </div>

                <div class="form-group full-width">
                  <label for="contact-digital-reqs" class="form-label">Key Requirements / Goals</label>
                  <textarea id="contact-digital-reqs" name="requirements" class="form-textarea" rows="3" placeholder="List essential features, target audience or specific deliverables..."></textarea>
                </div>

                <div class="form-group full-width">
                  <label for="contact-digital-file" class="form-label">Attach Brief or Reference Files (Optional)</label>
                  <div class="form-file-zone" onclick="document.getElementById('contact-digital-file').click()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-cyan)" stroke-width="2" style="margin: 0 auto 8px auto;" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
                    <span style="font-size: 0.875rem; color: var(--color-text-secondary); display: block;">Click to choose PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, PNG file (Max 10MB)</span>
                    <span id="contact-digital-file-notice" style="font-size: 0.8rem; color: var(--color-cyan); font-weight: 600; display: block; margin-top: 4px;"></span>
                  </div>
                  <input type="file" id="contact-digital-file" name="file" style="display: none;" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png">
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
                    <input type="checkbox" id="contact-digital-consent" name="consent" required>
                    <span>I agree to be contacted by Snipezon regarding this digital project enquiry. <span class="required-star">*</span></span>
                  </label>
                </div>
              </div>

              <div class="form-notice-box">
                Submitting this form will prepare your project request and open WhatsApp. You can attach your brief file in the WhatsApp conversation.
              </div>

              <button type="submit" class="button button-primary" style="width: 100%; justify-content: center;">
                <span>Prepare Project Enquiry</span>
                <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
              </button>
            </form>
          </div>

          <!-- TAB PANEL 2: GENERAL SUPPLY FORM -->
          <div id="panel-supply" role="tabpanel" aria-labelledby="tab-supply" hidden style="display: none;">
            <div id="contact-supply-error-summary" class="form-error-summary" role="alert" tabindex="-1" style="display: none; background: rgba(239, 68, 68, 0.1); border: 1px solid #ef4444; border-radius: var(--radius-small); padding: 16px; margin-bottom: 24px;"></div>

            <form id="contact-supply-form" novalidate>
              <div class="form-grid-2col">
                <div class="form-group">
                  <label for="contact-supply-name" class="form-label">Full Name <span class="required-star">*</span></label>
                  <input type="text" id="contact-supply-name" name="name" class="form-input" placeholder="e.g. John Doe" required>
                </div>

                <div class="form-group">
                  <label for="contact-supply-company" class="form-label">Company Name</label>
                  <input type="text" id="contact-supply-company" name="company" class="form-input" placeholder="e.g. Acme Corp">
                </div>

                <div class="form-group">
                  <label for="contact-supply-phone" class="form-label">Phone / WhatsApp <span class="required-star">*</span></label>
                  <input type="tel" id="contact-supply-phone" name="phone" class="form-input" placeholder="+92 3XX XXXXXXX" required>
                </div>

                <div class="form-group">
                  <label for="contact-supply-email" class="form-label">Email Address <span class="required-star">*</span></label>
                  <input type="email" id="contact-supply-email" name="email" class="form-input" placeholder="john@example.com" required>
                </div>

                <div class="form-group full-width">
                  <label for="contact-supply-cat" class="form-label">Supply Category <span class="required-star">*</span></label>
                  <select id="contact-supply-cat" name="category" class="form-select" required>
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
                  <label for="contact-supply-items" class="form-label">Required Items &amp; Specifications <span class="required-star">*</span></label>
                  <textarea id="contact-supply-items" name="items" class="form-textarea" rows="4" placeholder="List item names, model numbers, dimensions, or specific requirements..." required></textarea>
                </div>

                <div class="form-group">
                  <label for="contact-supply-qty" class="form-label">Estimated Quantity</label>
                  <input type="text" id="contact-supply-qty" name="quantity" class="form-input" placeholder="e.g. 50 units / 5 boxes">
                </div>

                <div class="form-group">
                  <label for="contact-supply-date" class="form-label">Required Date</label>
                  <input type="text" id="contact-supply-date" name="required_date" class="form-input" placeholder="e.g. Within 2 weeks">
                </div>

                <div class="form-group full-width">
                  <label for="contact-supply-loc" class="form-label">Delivery Location <span class="required-star">*</span></label>
                  <input type="text" id="contact-supply-loc" name="location" class="form-input" placeholder="City / Area / Delivery Address" required>
                </div>

                <div class="form-group full-width">
                  <label for="contact-supply-file" class="form-label">Upload Requirement List (Optional)</label>
                  <div class="form-file-zone" onclick="document.getElementById('contact-supply-file').click()">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--color-cyan)" stroke-width="2" style="margin: 0 auto 8px auto;" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12"/></svg>
                    <span style="font-size: 0.875rem; color: var(--color-text-secondary); display: block;">Click to choose PDF, DOC, DOCX, XLS, XLSX, CSV, JPG, JPEG, PNG file (Max 10MB)</span>
                    <span id="contact-supply-file-notice" style="font-size: 0.8rem; color: var(--color-cyan); font-weight: 600; display: block; margin-top: 4px;"></span>
                  </div>
                  <input type="file" id="contact-supply-file" name="file" style="display: none;" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.jpg,.jpeg,.png">
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
                    <input type="checkbox" id="contact-supply-consent" name="consent" required>
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

        </div>

        <!-- Sidebar Right -->
        <div class="quote-sidebar-card" data-animate="fade-up" data-delay="100">
          <h3 class="sidebar-heading">Prefer a direct conversation?</h3>
          <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin-bottom: 20px;">
            Connect with our solution architects and supply coordinators directly.
          </p>

          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20requirement." class="button button-whatsapp" style="width: 100%; justify-content: center; margin-bottom: 24px;" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>

          <div style="border-top: 1px solid var(--color-border-light); padding-top: 20px; margin-bottom: 24px;">
            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Call / WhatsApp:</p>
            <p style="font-size: 0.95rem; font-weight: 700; color: var(--color-text); margin-bottom: 12px;"><a href="tel:+923122261919">+92 312 2261919</a></p>

            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Email Direct:</p>
            <p style="font-size: 0.95rem; font-weight: 700; color: var(--color-text);"><a href="mailto:ceo@snipezon.com">ceo@snipezon.com</a></p>
          </div>

          <div style="border-top: 1px solid var(--color-border-light); padding-top: 20px;">
            <h4 style="font-size: 1rem; margin-bottom: 12px; color: var(--color-text);">What happens next?</h4>
            <ol class="sidebar-checklist" style="list-style: decimal; padding-left: 18px;">
              <li style="margin-bottom: 8px;">We review your requirement details.</li>
              <li style="margin-bottom: 8px;">We contact you to clarify specifications.</li>
              <li>We discuss the suitable next step.</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. REQUIREMENT PATHS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">REQUIREMENT PATHS</span>
        <h2 class="section-title">How can we help?</h2>
        <p class="section-description">Select a requirement type below to jump directly to the pre-filled enquiry form.</p>
      </div>

      <div class="requirements-bento-grid">
        <button type="button" class="requirement-path-card" data-target-tab="tab-digital" data-preselect="custom-software" data-animate="fade-up">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.4 16.6L4.8 12l4.6-4.6L8 6l-6 6 6 6 1.4-1.4z"/></svg>
          </span>
          <span class="req-card-title">Build Custom Software</span>
          <span class="req-card-desc">Custom web applications, business dashboards, and accounting systems.</span>
          <span class="req-card-action">Select Path &rarr;</span>
        </button>

        <button type="button" class="requirement-path-card" data-target-tab="tab-digital" data-preselect="ai-software" data-animate="fade-up" data-delay="100">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7z"/></svg>
          </span>
          <span class="req-card-title">Add AI or Automation</span>
          <span class="req-card-desc">Customer support bots, sales automation, and intelligent workflow triggers.</span>
          <span class="req-card-action">Select Path &rarr;</span>
        </button>

        <button type="button" class="requirement-path-card" data-target-tab="tab-digital" data-preselect="whatsapp-api" data-animate="fade-up" data-delay="200">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
          </span>
          <span class="req-card-title">Set Up WhatsApp Business API</span>
          <span class="req-card-desc">Official WhatsApp API integration, verified templates, and multi-agent chat.</span>
          <span class="req-card-action">Select Path &rarr;</span>
        </button>

        <button type="button" class="requirement-path-card" data-target-tab="tab-digital" data-preselect="website" data-animate="fade-up">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
          </span>
          <span class="req-card-title">Create or Upgrade a Website</span>
          <span class="req-card-desc">High-performance corporate websites and custom e-commerce storefronts.</span>
          <span class="req-card-action">Select Path &rarr;</span>
        </button>

        <button type="button" class="requirement-path-card" data-target-tab="tab-supply" data-preselect="corporate" data-animate="fade-up" data-delay="100">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
          </span>
          <span class="req-card-title">Source General Items</span>
          <span class="req-card-desc">Requirement-based B2B procurement for home, corporate, industrial &amp; toys.</span>
          <span class="req-card-action">Select Path &rarr;</span>
        </button>

        <button type="button" class="requirement-path-card" data-target-tab="tab-digital" data-preselect="other" data-animate="fade-up" data-delay="200">
          <span class="req-card-icon">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/></svg>
          </span>
          <span class="req-card-title">Discuss Something Else</span>
          <span class="req-card-desc">Custom consultation or specific multi-category business requirements.</span>
          <span class="req-card-action">Select Path &rarr;</span>
        </button>
      </div>
    </section>

    <!-- 5. LOCATION SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OFFICE LOCATION</span>
        <h2 class="section-title">Visit or contact Snipezon.</h2>
        <p class="section-description">Our office address and direct contact details.</p>
      </div>

      <div class="location-grid">
        <!-- Real Google Maps Embed Card -->
        <div class="map-embed-card" data-animate="fade-up">
          <div class="map-iframe-wrapper">
            <iframe
              class="map-iframe"
              src="https://www.google.com/maps?q=Shop%20No.%20F19%2C%201st%20Floor%2C%20Danny%20Craft%20Tower%2C%20Saddar%2C%20Karachi%2C%20Pakistan&output=embed"
              title="Snipezon office location on Google Maps"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              allowfullscreen>
              View Snipezon location on Google Maps.
            </iframe>
          </div>
          <div class="map-actions-bar">
            <div class="map-actions-btns">
              <a href="https://www.google.com/maps/dir/?api=1&destination=Shop%20No.%20F19%2C%201st%20Floor%2C%20Danny%20Craft%20Tower%2C%20Saddar%2C%20Karachi%2C%20Pakistan" class="button button-primary" target="_blank" rel="noopener noreferrer">
                <span>Get Directions</span>
                <svg class="button-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
              </a>
              <a href="https://www.google.com/maps/search/?api=1&query=Shop%20No.%20F19%2C%201st%20Floor%2C%20Danny%20Craft%20Tower%2C%20Saddar%2C%20Karachi%2C%20Pakistan" class="button button-secondary" target="_blank" rel="noopener noreferrer">
                <span>Open in Google Maps</span>
                <svg class="button-icon-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/></svg>
              </a>
            </div>
            <p class="map-privacy-notice">
              Google Maps is provided by a third party and may apply its own privacy and cookie practices.
            </p>
          </div>
        </div>

        <!-- Location Details Panel -->
        <div class="quote-sidebar-card" data-animate="fade-up" data-delay="100">
          <h3 class="sidebar-heading">Office Address</h3>
          <p style="font-size: 0.95rem; color: var(--color-text); margin-bottom: 20px; line-height: 1.6;">
            Shop No. F19, 1st Floor, Danny Craft Tower, Saddar
          </p>

          <div style="border-top: 1px solid var(--color-border-light); padding-top: 20px; margin-bottom: 20px;">
            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Call / WhatsApp:</p>
            <p style="font-size: 1rem; font-weight: 700; color: var(--color-text); margin-bottom: 12px;"><a href="tel:+923122261919">+92 312 2261919</a></p>

            <p style="font-size: 0.85rem; color: var(--color-text-secondary); margin-bottom: 6px;">Email Direct:</p>
            <p style="font-size: 1rem; font-weight: 700; color: var(--color-text);"><a href="mailto:ceo@snipezon.com">ceo@snipezon.com</a></p>
          </div>
        </div>
      </div>
    </section>

    <!-- 6. PREPARATION CHECKLISTS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">PREPARATION CHECKLISTS</span>
        <h2 class="section-title">Help us understand your requirement.</h2>
        <p class="section-description">Recommended details to include for a smooth quotation process.</p>
      </div>

      <div class="purpose-direction-grid">
        <!-- Card 1: Digital Project Brief -->
        <div class="purpose-card" data-animate="fade-up">
          <span class="section-eyebrow" style="color: var(--color-cyan);">DIGITAL PROJECT BRIEF</span>
          <h3 style="font-size: 1.2rem; margin: 12px 0 16px 0;">Recommended Details:</h3>
          <ul class="sidebar-checklist">
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Primary Business Goal</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Current Operational Challenge</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Key Required Features &amp; Workflows</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Existing Systems or APIs</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Reference Examples or Wireframes</span>
            </li>
          </ul>
        </div>

        <!-- Card 2: Supply Requirement List -->
        <div class="purpose-card" data-animate="fade-up" data-delay="100">
          <span class="section-eyebrow" style="color: var(--color-cyan);">SUPPLY REQUIREMENT LIST</span>
          <h3 style="font-size: 1.2rem; margin: 12px 0 16px 0;">Recommended Details:</h3>
          <ul class="sidebar-checklist">
            <li>
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Clear Item Names &amp; Model Numbers</span>
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
              <span>Delivery Location Address</span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- 7. FAQ SECTION -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">FREQUENTLY ASKED QUESTIONS</span>
        <h2 class="section-title">Common questions about contacting us.</h2>
        <p class="section-description">Clear guidance on submitting digital and supply requests.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-cnt-1" id="faq-cbtn-1">
            <span>How do I request a digital project quotation?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-cnt-1" class="faq-panel" role="region" aria-labelledby="faq-cbtn-1">
            <div class="faq-content">
              Select the Digital Project tab above, fill out your project details and specifications, and click Prepare Project Enquiry to prepare a WhatsApp request.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-cnt-2" id="faq-cbtn-2">
            <span>How do I submit a general supply requirement?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-cnt-2" class="faq-panel" role="region" aria-labelledby="faq-cbtn-2">
            <div class="faq-content">
              Select the General Supply tab above, list your required items, quantities, and delivery location, and submit to prepare a WhatsApp supply quote request.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-cnt-3" id="faq-cbtn-3">
            <span>Can I attach a project brief or item list?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-cnt-3" class="faq-panel" role="region" aria-labelledby="faq-cbtn-3">
            <div class="faq-content">
              Yes. You can upload PDF, Word, Excel, CSV, or Image files up to 10MB in the enquiry forms and attach them in your WhatsApp conversation.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-cnt-4" id="faq-cbtn-4">
            <span>Can I contact Snipezon through WhatsApp?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-cnt-4" class="faq-panel" role="region" aria-labelledby="faq-cbtn-4">
            <div class="faq-content">
              Yes. You can click any WhatsApp button across the site or message +92 312 2261919 directly.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-cnt-5" id="faq-cbtn-5">
            <span>What information should I include in my enquiry?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-cnt-5" class="faq-panel" role="region" aria-labelledby="faq-cbtn-5">
            <div class="faq-content">
              Include your contact information, company name, detailed description of your required software features or general supply items, target dates, and delivery location.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 8. FINAL REASSURANCE CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Your requirement starts with a conversation.</h2>
        <p class="cta-banner-desc">Share what you know today. We can clarify the details together.</p>
        <div class="cta-banner-actions">
          <a href="#contact-enquiry" class="button button-primary">
            <span>Send an Enquiry</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20a%20requirement." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>

<div id="quote-confirm-modal" class="modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="modal-title">
    <div class="modal-card">
      <h3 id="modal-title" class="modal-title" style="font-size:1.3rem; margin-bottom:12px; color:var(--color-text);">Confirm Enquiry Summary</h3>
      <p class="modal-subtitle" style="font-size:0.875rem; color:var(--color-text-secondary); margin-bottom:16px;">
        Your enquiry has not been submitted to a server. Continuing will open WhatsApp with a prepared message.
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
