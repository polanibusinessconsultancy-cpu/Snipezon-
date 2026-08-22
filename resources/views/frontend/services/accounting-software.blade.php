@extends('frontend.layouts.app')

@section('title', 'Accounting Software Solutions | Snipezon')
@section('meta_description', 'Custom accounting software solutions from Snipezon for chart of accounts, invoices, ledgers, vendor management and financial reporting.')
@section('body_data_page', 'service-detail')

@section('page_css')
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/home.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/digital-solutions.css') }}">
  <link rel="stylesheet" href="{{ asset('snipezon/css/pages/service-details.css') }}">
@endsection

@section('content')
<!-- 1. BREADCRUMB AND SERVICE HERO -->
    <section class="service-hero-section container">
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <a href="{{ route('digital-solutions') }}">Digital Solutions</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Accounting Software</span>
      </nav>

      <div class="service-hero-grid">
        <div class="hero-content">
          <span class="section-eyebrow" data-animate="fade-up">ACCOUNTING SOFTWARE</span>
          <h1 class="hero-heading" data-animate="fade-up" data-delay="100">
            Clearer financial operations in <span class="highlight-purple">one structured system.</span>
          </h1>
          <p class="hero-description" data-animate="fade-up" data-delay="200">
            We design custom accounting and financial management software that organizes ledgers, invoices, payments and operational reporting.
          </p>
          <div class="hero-ctas" data-animate="fade-up" data-delay="300">
            <a href="{{ route('contact') }}" class="button button-primary">
              <span>Discuss Accounting Software</span>
              <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#acc-process" class="button button-secondary">
              <span>View System Process</span>
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
            <span>Accounts</span>
          </div>

          <div class="arch-node arch-node-2">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg>
            <span>Sales</span>
          </div>

          <div class="arch-node arch-node-3">
            <svg viewBox="0 0 24 24"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg>
            <span>Purchases</span>
          </div>

          <div class="arch-node arch-node-4">
            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg>
            <span>Payments</span>
          </div>

          <div class="arch-node arch-node-5">
            <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
            <span>Reports</span>
          </div>

          <div class="arch-node arch-node-6">
            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            <span>User Roles</span>
          </div>
        </div>
      </div>
    </section>

    <!-- 2. SERVICE VALUE STRIP -->
    <section class="value-strip-section container" data-animate="fade-up">
      <h2 class="sr-only">Service Principles & Capabilities</h2>
      <div class="value-grid">
        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="value-title">Organized Records</h3>
          <p class="value-desc">Structured chart of accounts, vendor ledgers and receipt tracking.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg></div>
          <h3 class="value-title">Controlled Access</h3>
          <p class="value-desc">Role-based user permissions protecting sensitive financial data.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="value-title">Practical Reporting</h3>
          <p class="value-desc">Exportable financial reports, balance sheets and customer ledgers.</p>
        </div>

        <div class="value-card">
          <div class="value-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="value-title">Workflow Visibility</h3>
          <p class="value-desc">Clear oversight of outstanding balances, pending invoices and payments.</p>
        </div>
      </div>
    </section>

    <!-- 3. SERVICE OVERVIEW -->
    <section class="section container">
      <div class="journey-grid">
        <div class="journey-content" data-animate="fade-up">
          <span class="section-eyebrow">OVERVIEW</span>
          <h2 class="section-title">Custom financial ledgers.</h2>
          <p>
            Snipezon plans and develops custom accounting software designed to bring clarity, structure and control to your business financial operations.
          </p>
          <p>
            Rather than relying on generic off-the-shelf software or error-prone manual spreadsheets, we build tailored accounting modules that fit your specific double-entry rules, approval flows and ledger requirements.
          </p>
        </div>

        <div class="journey-map-card" data-animate="fade-up" data-delay="100">
          <div class="sidebar-checklist" style="display: flex; flex-direction: column; gap: 16px;">
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Tailored Chart of Accounts</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Configure account heads according to your specific business revenue and expense categories.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Audit Trail Logging</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Track every transaction entry, update and approval with timestamps and user IDs.</p>
            </div>
            <div style="background: rgba(255,255,255,0.03); padding: 16px; border-radius: var(--radius-small); border: 1px solid var(--color-border-light);">
              <h3 style="color: var(--color-cyan); font-size: 1rem; margin-bottom: 6px;">Integrated Invoicing</h3>
              <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Generate PDF invoices directly connected to customer accounts and payment status.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Scope Responsibility Notice Banner -->
    <section class="container" style="margin-bottom: 40px;">
      <div style="background: rgba(34, 211, 238, 0.08); border: 1px solid var(--color-cyan); border-radius: var(--radius-medium); padding: 20px 24px; color: var(--color-text-secondary); font-size: 0.9rem; line-height: 1.6;">
        <strong style="color: var(--color-cyan); display: block; margin-bottom: 4px; font-size: 0.95rem;">Responsible Accounting Scope Notice:</strong>
        Software can support record keeping and reporting, but businesses remain responsible for accounting review, tax treatment, regulatory compliance and professional financial advice.
      </div>
    </section>

    <!-- 4. BUSINESS PROBLEMS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">DIAGNOSTIC MAP</span>
        <h2 class="section-title">What we solve.</h2>
        <p class="section-description">Addressing financial record keeping friction.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"/></svg></div>
          <h3 class="why-title">Manual Spreadsheets</h3>
          <p class="why-desc">Replace fragile, disconnected spreadsheets with a multi-user secure financial database.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg></div>
          <h3 class="why-title">Disconnected Records</h3>
          <p class="why-desc">Link sales receipts, vendor invoices and customer ledgers into one central ledger.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2L2 7l10 5 10-5-10-5z"/></svg></div>
          <h3 class="why-title">Difficult Balance Tracking</h3>
          <p class="why-desc">Monitor customer receivables and vendor payables in real-time with automatic alerts.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z"/></svg></div>
          <h3 class="why-title">Limited Visibility</h3>
          <p class="why-desc">Access instant operational income statements, trial balances and cashflow views.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <div class="why-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div>
          <h3 class="why-title">Repetitive Report Preparation</h3>
          <p class="why-desc">Generate monthly financial summaries and CSV/Excel exports with one click.</p>
        </div>
      </div>
    </section>

    <!-- 5. CAPABILITIES BENTO GRID -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">CAPABILITIES</span>
        <h2 class="section-title">Accounting software capabilities.</h2>
        <p class="section-description">Core financial ledger modules.</p>
      </div>

      <div class="capability-bento-grid">
        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Chart of Accounts</h3>
            <p class="card-desc">Hierarchical structuring of asset, liability, equity, revenue and expense account heads.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 80%;"></div><div class="micro-ui-bar" style="width: 50%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Receipts &amp; Payments</h3>
            <p class="card-desc">Record cash and bank vouchers, incoming payments and expense disbursements.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 90%;"></div><div class="micro-ui-bar cyan" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Sales &amp; Purchase Records</h3>
            <p class="card-desc">Manage sales orders, tax invoices, purchase orders and vendor bills in one place.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 70%;"></div><div class="micro-ui-bar" style="width: 40%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Customer &amp; Vendor Ledgers</h3>
            <p class="card-desc">Detailed statement of accounts for individual clients, buyers and suppliers.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 85%;"></div><div class="micro-ui-bar cyan" style="width: 55%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Outstanding Balance Tracking</h3>
            <p class="card-desc">Real-time aging analysis reporting for overdue receivables and pending payables.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 65%;"></div><div class="micro-ui-bar" style="width: 75%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">Expense Management</h3>
            <p class="card-desc">Category-wise expense recording, petty cash logs and receipt attachment storage.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar" style="width: 95%;"></div><div class="micro-ui-bar cyan" style="width: 45%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">Financial &amp; Operational Reports</h3>
            <p class="card-desc">Generate profit &amp; loss statements, balance sheets, trial balances and ledger reports.</p>
            <div class="micro-ui-preview"><div class="micro-ui-bar cyan" style="width: 75%;"></div><div class="micro-ui-bar" style="width: 60%;"></div></div>
          </div>
          <a href="{{ route('contact') }}" class="req-card-action" style="margin-top: 16px;">Learn More &rarr;</a>
        </div>

        <div class="capability-bento-card" data-animate="fade-up" data-delay="300">
          <div>
            <h3 class="card-title">Role-Based Access &amp; Audit Trails</h3>
            <p class="card-desc">Restrict sensitive financial views based on user roles and maintain immutable audit logs.</p>
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
        <h2 class="section-title">Business Accounting and Reporting Workspace.</h2>
        <p class="section-description">A representative preview of a custom accounting ledger platform.</p>
      </div>

      <div class="showcase-dashboard-card" id="accounting-software-dashboard" data-animate="fade-up">
        <div class="dash-header-bar">
          <div class="dash-dots"><span class="dash-dot"></span><span class="dash-dot"></span><span class="dash-dot"></span></div>
          <span style="font-size: 0.8rem; font-weight: 700; color: var(--color-cyan);">Accounting &amp; Reporting Hub</span>
          <span class="showcase-badge">Representative Solution</span>
        </div>

        <div class="dash-grid-layout">
          <!-- Sidebar Navigation Controls -->
          <div class="dash-sidebar-nav" role="tablist" aria-label="Accounting Software Hub Navigation">
            <button type="button" class="dash-nav-item active is-active" id="tab-acc-chart-of-accounts" role="tab" data-acc-target="chart-of-accounts" aria-selected="true" aria-controls="panel-acc-chart-of-accounts" tabindex="0">Chart of Accounts</button>
            <button type="button" class="dash-nav-item" id="tab-acc-invoice-builder" role="tab" data-acc-target="invoice-builder" aria-selected="false" aria-controls="panel-acc-invoice-builder" tabindex="-1">Invoice Builder</button>
            <button type="button" class="dash-nav-item" id="tab-acc-vendor-ledgers" role="tab" data-acc-target="vendor-ledgers" aria-selected="false" aria-controls="panel-acc-vendor-ledgers" tabindex="-1">Vendor Ledgers</button>
            <button type="button" class="dash-nav-item" id="tab-acc-receivables" role="tab" data-acc-target="receivables" aria-selected="false" aria-controls="panel-acc-receivables" tabindex="-1">Receivables</button>
            <button type="button" class="dash-nav-item" id="tab-acc-financial-reports" role="tab" data-acc-target="financial-reports" aria-selected="false" aria-controls="panel-acc-financial-reports" tabindex="-1">Financial Reports</button>
          </div>

          <!-- Main Dashboard Panels Container -->
          <div class="dash-panels-container acc-showcase-panels">
            <!-- Panel 1: Chart of Accounts -->
            <div class="dash-main-area dash-panel acc-showcase-panel is-active" id="panel-acc-chart-of-accounts" role="tabpanel" data-acc-panel="chart-of-accounts" aria-labelledby="tab-acc-chart-of-accounts">
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Ledger System</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Structured Accounts</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Outstanding Receivables</span>
                <strong style="font-size: 1.1rem; color: var(--color-cyan);">Tracked &amp; Audited</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Audit Trail</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Role-Based Security</strong>
              </div>
            </div>

            <!-- Panel 2: Invoice Builder -->
            <div class="dash-main-area dash-panel acc-showcase-panel" id="panel-acc-invoice-builder" role="tabpanel" data-acc-panel="invoice-builder" aria-labelledby="tab-acc-invoice-builder" hidden style="display: none;">
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Invoicing Engine</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Custom Tax Invoicing</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Document Export</span>
                <strong style="font-size: 1.1rem; color: var(--color-cyan);">Automated PDF Generation</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Client Portal</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Direct Customer Statements</strong>
              </div>
            </div>

            <!-- Panel 3: Vendor Ledgers -->
            <div class="dash-main-area dash-panel acc-showcase-panel" id="panel-acc-vendor-ledgers" role="tabpanel" data-acc-panel="vendor-ledgers" aria-labelledby="tab-acc-vendor-ledgers" hidden style="display: none;">
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Payable Records</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Supplier Accounts</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Dues Monitor</span>
                <strong style="font-size: 1.1rem; color: var(--color-cyan);">Payable Balances Tracked</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Purchasing</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Purchase Order History</strong>
              </div>
            </div>

            <!-- Panel 4: Receivables -->
            <div class="dash-main-area dash-panel acc-showcase-panel" id="panel-acc-receivables" role="tabpanel" data-acc-panel="receivables" aria-labelledby="tab-acc-receivables" hidden style="display: none;">
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Aging Analysis</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Client Credit Aging</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Alert System</span>
                <strong style="font-size: 1.1rem; color: var(--color-cyan);">Overdue Reminders</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Cash Flow</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Real-Time Cash Inflow</strong>
              </div>
            </div>

            <!-- Panel 5: Financial Reports -->
            <div class="dash-main-area dash-panel acc-showcase-panel" id="panel-acc-financial-reports" role="tabpanel" data-acc-panel="financial-reports" aria-labelledby="tab-acc-financial-reports" hidden style="display: none;">
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Financial Statements</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">Balance Sheets &amp; P&amp;L</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Verification</span>
                <strong style="font-size: 1.1rem; color: var(--color-cyan);">Trial Balance Audits</strong>
              </div>
              <div class="dash-widget">
                <span style="font-size: 0.75rem; color: var(--color-text-secondary); display: block;">Data Export</span>
                <strong style="font-size: 1.1rem; color: var(--color-text);">One-Click Excel Exports</strong>
              </div>
            </div>
          </div>
        </div>

        <!-- Bottom Navigation Controls -->
        <div class="dash-callouts-list" role="tablist" aria-label="Accounting Software Hub Bottom Navigation">
          <button type="button" class="dash-callout-item showcase-badge active is-active" id="btab-acc-chart-of-accounts" role="tab" data-acc-target="chart-of-accounts" aria-selected="true" aria-controls="panel-acc-chart-of-accounts" tabindex="0">Chart of Accounts</button>
          <button type="button" class="dash-callout-item showcase-badge" id="btab-acc-invoice-builder" role="tab" data-acc-target="invoice-builder" aria-selected="false" aria-controls="panel-acc-invoice-builder" tabindex="-1">Invoice Builder</button>
          <button type="button" class="dash-callout-item showcase-badge" id="btab-acc-vendor-ledgers" role="tab" data-acc-target="vendor-ledgers" aria-selected="false" aria-controls="panel-acc-vendor-ledgers" tabindex="-1">Vendor Ledgers</button>
          <button type="button" class="dash-callout-item showcase-badge" id="btab-acc-receivables" role="tab" data-acc-target="receivables" aria-selected="false" aria-controls="panel-acc-receivables" tabindex="-1">Receivables</button>
          <button type="button" class="dash-callout-item showcase-badge" id="btab-acc-financial-reports" role="tab" data-acc-target="financial-reports" aria-selected="false" aria-controls="panel-acc-financial-reports" tabindex="-1">Financial Reports</button>
        </div>
      </div>
    </section>

    <!-- 7. IMPLEMENTATION PROCESS -->
    <section id="acc-process" class="process-section container" style="scroll-margin-top: calc(var(--header-height) + 20px);">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">OUR PROCESS</span>
        <h2 class="section-title">Accounting software development path.</h2>
        <p class="section-description">A structured 6-step pathway to custom financial software.</p>
      </div>

      <div class="process-timeline">
        <div class="process-step" data-animate="fade-up">
          <div class="process-step-number">01</div>
          <h3 class="process-step-title">Requirements &amp; Ledger Review</h3>
          <p class="process-step-desc">Audit your current account heads, voucher entry rules, invoicing needs and report formats.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="100">
          <div class="process-step-number">02</div>
          <h3 class="process-step-title">System Architecture</h3>
          <p class="process-step-desc">Design database schemas for double-entry ledgers, role permissions and audit logging.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="200">
          <div class="process-step-number">03</div>
          <h3 class="process-step-title">UI/UX Design</h3>
          <p class="process-step-desc">Create intuitive voucher entry screens, ledger tables and exportable report layouts.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="300">
          <div class="process-step-number">04</div>
          <h3 class="process-step-title">Development</h3>
          <p class="process-step-desc">Build the core accounting engine, PDF generation modules and access control logic.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="400">
          <div class="process-step-number">05</div>
          <h3 class="process-step-title">Data Migration &amp; Testing</h3>
          <p class="process-step-desc">Import existing opening balances safely and test ledger balance accuracy.</p>
        </div>

        <div class="process-step" data-animate="fade-up" data-delay="500">
          <div class="process-step-number">06</div>
          <h3 class="process-step-title">Deployment</h3>
          <p class="process-step-desc">Deploy the system onto secure hosting and train your accounting staff.</p>
        </div>
      </div>
    </section>

    <!-- 8. TECHNOLOGY APPROACH -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">TECHNOLOGY APPROACH</span>
        <h2 class="section-title">Financial software architecture.</h2>
        <p class="section-description">Key engineering standards applied across accounting tools.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Double-Entry Ledger Logic</h3>
          <p class="why-desc">Enforcing strict debit/credit balance verification on every financial entry.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Granular Role Permissions</h3>
          <p class="why-desc">Restricting view and edit rights based on staff duties (cashier, accountant, manager, admin).</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Audit Trail Logging</h3>
          <p class="why-desc">Immutable history logs recording who created, modified or approved financial vouchers.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">PDF Invoice Generation</h3>
          <p class="why-desc">Automated professional invoice and receipt generation with custom company branding.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Exportable Financial Reports</h3>
          <p class="why-desc">Exporting trial balances and ledgers directly into Excel (XLSX) or PDF formats.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Secure Data Storage</h3>
          <p class="why-desc">Database backup routines and data encryption protecting company financial records.</p>
        </div>
      </div>
    </section>

    <!-- 9. BUSINESS USE CASES -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">USE CASES</span>
        <h2 class="section-title">Accounting software in action.</h2>
        <p class="section-description">Practical business financial management scenarios.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">B2B Invoicing</h3>
          <p class="why-desc">Manage recurring client billing, partial payment tracking and automated payment reminders.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Wholesale Ledger Management</h3>
          <p class="why-desc">Track buyer credit limits, outstanding balances and vendor payment schedules.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Service Expense Tracking</h3>
          <p class="why-desc">Categorize project-specific expenses, vendor bills and internal operational costs.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Retail Daily Sales Recording</h3>
          <p class="why-desc">Log daily counter cash receipts and bank deposits against revenue account heads.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Vendor Payment Tracking</h3>
          <p class="why-desc">Monitor upcoming supplier dues, advance payments and pending purchase invoices.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="500">
          <h3 class="why-title">Multi-Branch Reporting</h3>
          <p class="why-desc">Consolidate financial statements across multiple store locations or branch offices.</p>
        </div>
      </div>
    </section>

    <!-- 10. ENGAGEMENT OPTIONS -->
    <section class="section container">
      <div class="section-header" data-animate="fade-up">
        <span class="section-eyebrow">ENGAGEMENT OPTIONS</span>
        <h2 class="section-title">Flexible accounting software options.</h2>
        <p class="section-description">Select how to build your financial management platform.</p>
      </div>

      <div class="engagement-options-grid">
        <div class="engagement-panel" data-animate="fade-up">
          <div>
            <span class="section-eyebrow">OPTION A</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Custom Accounting System Build</h3>
            <p class="card-desc">We design and build a complete double-entry accounting software platform around your ledger rules.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-primary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="100">
          <div>
            <span class="section-eyebrow">OPTION B</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Legacy Financial Data Migration</h3>
            <p class="card-desc">We structure and import your existing spreadsheet accounts or old software ledgers safely.</p>
          </div>
          <a href="{{ route('contact') }}" class="button button-secondary" style="margin-top: 24px;">
            <span>Discuss This Option</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="engagement-panel" data-animate="fade-up" data-delay="200">
          <div>
            <span class="section-eyebrow">OPTION C</span>
            <h3 class="card-title" style="font-size: 1.5rem; margin: 12px 0;">Invoice &amp; Reporting Modules</h3>
            <p class="card-desc">We build custom PDF invoicing and automated financial reporting add-ons for your software.</p>
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
        <h2 class="section-title">A technical partner for financial software.</h2>
        <p class="section-description">Building responsible, audit-ready financial tools.</p>
      </div>

      <div class="why-grid">
        <div class="why-card" data-animate="fade-up">
          <h3 class="why-title">Business Logic Alignment</h3>
          <p class="why-desc">We build ledger structures tailored around your exact operational chart of accounts and workflow.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="100">
          <h3 class="why-title">Audit Trail Logging</h3>
          <p class="why-desc">Immutable event tracking logs recording all voucher entries and approvals.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="200">
          <h3 class="why-title">Role-Based Security</h3>
          <p class="why-desc">Granular user permission rules keeping confidential financial data protected.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="300">
          <h3 class="why-title">Clean Reporting</h3>
          <p class="why-desc">Practical dashboards and exportable financial reports designed for rapid executive review.</p>
        </div>

        <div class="why-card" data-animate="fade-up" data-delay="400">
          <h3 class="why-title">Dedicated Post-Launch Support</h3>
          <p class="why-desc">Continued assistance for maintenance, new account head additions and system updates.</p>
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
        <a href="{{ route('services.custom-software-development') }}" class="related-service-card" data-animate="fade-up">
          <div>
            <h3 class="card-title">Custom Software Development</h3>
            <p class="card-desc">Bespoke web applications, portals and business platforms.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.ai-software-solutions') }}" class="related-service-card" data-animate="fade-up" data-delay="100">
          <div>
            <h3 class="card-title">AI-Based Software Solutions</h3>
            <p class="card-desc">Intelligent features, predictive tools and AI assistant integrations.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.ecommerce-websites') }}" class="related-service-card" data-animate="fade-up" data-delay="200">
          <div>
            <h3 class="card-title">E-commerce Websites</h3>
            <p class="card-desc">Modern online storefronts with payment gateway and inventory connections.</p>
          </div>
          <span class="req-card-action">Explore Solution &rarr;</span>
        </a>

        <a href="{{ route('services.whatsapp-business-api') }}" class="related-service-card" data-animate="fade-up" data-delay="300">
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
        <h2 class="section-title">Questions about custom accounting software.</h2>
        <p class="section-description">Clear answers regarding financial software development.</p>
      </div>

      <div class="faq-container">
        <!-- Item 1 (Open by default) -->
        <div class="faq-item is-open" data-animate="fade-up">
          <button class="faq-button" aria-expanded="true" aria-controls="faq-acc-1" id="faq-abtn-1">
            <span>Can it match our existing accounting workflow?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-acc-1" class="faq-panel" role="region" aria-labelledby="faq-abtn-1">
            <div class="faq-content">
              Yes. We design custom account heads, voucher entry forms, approval steps, and statement formats specifically around how your business financial operations run.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="faq-item" data-animate="fade-up" data-delay="100">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-acc-2" id="faq-abtn-2">
            <span>Can existing data or spreadsheets be imported?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-acc-2" class="faq-panel" role="region" aria-labelledby="faq-abtn-2">
            <div class="faq-content">
              Yes. We can structure data migration scripts to import opening balances, customer ledgers, vendor details, and historical transaction records from CSV or Excel files.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="faq-item" data-animate="fade-up" data-delay="200">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-acc-3" id="faq-abtn-3">
            <span>Can permissions be configured for different accounting roles?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-acc-3" class="faq-panel" role="region" aria-labelledby="faq-abtn-3">
            <div class="faq-content">
              Yes. We build granular role-based permissions ensuring cashiers, accountants, department managers, and auditors access only authorized functions.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="faq-item" data-animate="fade-up" data-delay="300">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-acc-4" id="faq-abtn-4">
            <span>Does custom accounting software replace professional accounting advice?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-acc-4" class="faq-panel" role="region" aria-labelledby="faq-abtn-4">
            <div class="faq-content">
              No. Custom software supports accurate record keeping, voucher entry, and financial reporting, but it does not replace certified public accounting advice, tax auditing, or formal legal financial counsel.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="faq-item" data-animate="fade-up" data-delay="400">
          <button class="faq-button" aria-expanded="false" aria-controls="faq-acc-5" id="faq-abtn-5">
            <span>Can reports be customized and exported?</span>
            <svg class="faq-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 10l5 5 5-5z"/></svg>
          </button>
          <div id="faq-acc-5" class="faq-panel" role="region" aria-labelledby="faq-abtn-5">
            <div class="faq-content">
              Yes. Financial ledgers, trial balances, and customer statements can be customized to your preferred layout and exported directly as Excel spreadsheets or PDF files.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 14. FINAL CTA -->
    <section class="final-cta-section container" data-animate="fade-up">
      <div class="cta-glass-banner">
        <h2 class="cta-banner-title text-gradient">Ready to organize your business financial records?</h2>
        <p class="cta-banner-desc">Discuss your accounting software requirements with Snipezon.</p>
        <div class="cta-banner-actions">
          <a href="{{ route('contact') }}" class="button button-primary">
            <span>Discuss Accounting Software</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="https://wa.me/923122261919?text=Hello%20Snipezon%2C%20I%20would%20like%20to%20discuss%20accounting%20software." class="button button-whatsapp" target="_blank" rel="noopener noreferrer">
            <svg class="button-icon-svg" viewBox="0 0 24 24" aria-hidden="true"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.099 4.019 4.142-1.086z"/></svg>
            <span>WhatsApp Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection
