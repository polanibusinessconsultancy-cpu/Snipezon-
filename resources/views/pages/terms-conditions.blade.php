@extends('layouts.frontend')

@section('title', 'Terms &amp; Conditions | Snipezon')
@section('meta_description', 'Terms and Conditions of Use for the Snipezon static website - General website terms, service inquiries, and liability disclaimers.')


@section('page_css')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/legal.css') }}">
@endsection


@section('content')
<section class="section container" style="padding-top: calc(var(--header-height) + 40px); max-width: 900px;" data-animate="fade-up">
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Terms &amp; Conditions</span>
      </nav>

      <span class="section-eyebrow">LEGAL DOCUMENTATION</span>
      <h1 class="hero-heading" style="margin-bottom: 16px;">Terms &amp; Conditions</h1>
      <p class="section-description" style="margin-bottom: 32px;">General terms of use for accessing and interacting with the Snipezon website.</p>

      <div style="background: rgba(34, 211, 238, 0.08); border: 1px solid var(--color-cyan); border-radius: var(--radius-medium); padding: 16px 20px; color: var(--color-text-secondary); font-size: 0.875rem; margin-bottom: 32px;">
        <strong style="color: var(--color-cyan); display: block; margin-bottom: 4px;">General Informational Notice:</strong>
        This document provides general website terms of use for browsing the Snipezon static website and does not constitute formal legal advice.
      </div>

      <div style="display: flex; flex-direction: column; gap: 24px; color: var(--color-text-secondary); font-size: 0.95rem; line-height: 1.7;">
        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">1. Website Use &amp; Information</h2>
          <p>This website is provided for general informational purposes to present Snipezon's digital solutions and general supply capabilities. Browsing this site or submitting website inquiry forms does not automatically create a binding service or supply contract.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">2. Commercial Agreements &amp; Scope</h2>
          <p>Specific project deliverables, technical scope, pricing, supply quantities, delivery schedules, and payment terms require explicit formal written agreements or purchase orders signed by authorized Snipezon representatives.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">3. Third-Party Platforms &amp; External Approvals</h2>
          <p>Integration with third-party platforms (including Meta, WhatsApp Business API, payment gateways, or external cloud providers) remains subject to third-party availability, API changes, terms, fees, and external verification approvals outside Snipezon's control.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">4. Intellectual Property</h2>
          <p>All brand logos, design tokens, graphics, written content, and visual UI layouts displayed on this website are the intellectual property of Snipezon or used under appropriate license. Unauthorized copying or redistribution is prohibited.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">5. Acceptable Use &amp; Links</h2>
          <p>Users agree to use this website for lawful purposes only and not to attempt any security tampering or automated scraping. External links to third-party websites or services are provided for convenience; Snipezon is not responsible for third-party content.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">6. Limitation Wording</h2>
          <p>While Snipezon makes reasonable efforts to maintain accurate website content, the site is provided "as is" for general informational browsing without warranties regarding continuous server uptime or error-free access.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">7. Contact Information</h2>
          <p>For inquiries regarding these Terms &amp; Conditions, please contact Snipezon via email at <a href="mailto:ceo@snipezon.com" style="color: var(--color-cyan);">ceo@snipezon.com</a>.</p>
        </div>
      </div>
    </section>
@endsection

