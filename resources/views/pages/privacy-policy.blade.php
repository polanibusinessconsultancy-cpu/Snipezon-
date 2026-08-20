@extends('layouts.frontend')

@section('title', 'Privacy Policy | Snipezon')
@section('meta_description', 'Privacy Policy for Snipezon static website - Learn how website forms, browser processing, and WhatsApp communications operate.')


@section('page_css')
  <link rel="stylesheet" href="{{ asset('assets/css/pages/legal.css') }}">
@endsection


@section('content')
<section class="section container" style="padding-top: calc(var(--header-height) + 40px); max-width: 900px;" data-animate="fade-up">
      <nav class="breadcrumb" aria-label="Breadcrumb navigation" style="margin-bottom: 20px;">
        <a href="{{ route('home') }}">Home</a>
        <span class="breadcrumb-separator">/</span>
        <span class="breadcrumb-current">Privacy Policy</span>
      </nav>

      <span class="section-eyebrow">LEGAL DOCUMENTATION</span>
      <h1 class="hero-heading" style="margin-bottom: 16px;">Privacy Policy</h1>
      <p class="section-description" style="margin-bottom: 32px;">At Snipezon, we are committed to transparent and responsible privacy practices.</p>

      <div style="background: rgba(34, 211, 238, 0.08); border: 1px solid var(--color-cyan); border-radius: var(--radius-medium); padding: 16px 20px; color: var(--color-text-secondary); font-size: 0.875rem; margin-bottom: 32px;">
        <strong style="color: var(--color-cyan); display: block; margin-bottom: 4px;">General Informational Notice:</strong>
        This document provides general website information regarding data handling on the Snipezon static site and does not constitute professional legal advice.
      </div>

      <div style="display: flex; flex-direction: column; gap: 24px; color: var(--color-text-secondary); font-size: 0.95rem; line-height: 1.7;">
        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">1. Client-Side Form Processing</h2>
          <p>Contact and quotation requirement forms on this static website are validated locally within your web browser. When you click to proceed, the form formats your provided text into a pre-filled WhatsApp message. Your requirement details are not saved to or stored on a Snipezon database server by these website forms.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">2. External Messaging Services &amp; Attachments</h2>
          <p>Continuing to send your message opens the external WhatsApp platform (operated by Meta). WhatsApp and any other third-party services maintain their own independent privacy practices and terms. Please note that locally selected file attachments cannot be transferred automatically via URL protocols and must be attached manually inside WhatsApp if you choose to share them.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">3. Sensitive Information</h2>
          <p>Users should not submit highly sensitive personal data, financial credentials, passwords, or confidential identity documents through unencrypted website forms or messaging links.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">4. Embedded Third-Party Maps</h2>
          <p>Our Contact page features an embedded map provided by Google Maps to assist visitors with finding our office location. Loading the embedded map may connect your browser directly to Google’s servers, which operate under Google’s own privacy and cookie policies.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">5. Web Hosting Server Logs</h2>
          <p>Like most standard web hosting environments, the web server hosting this static website may record standard access logs (such as IP address, browser type, referring page, and timestamp) for technical maintenance, security monitoring, and server performance diagnostics.</p>
        </div>

        <div>
          <h2 style="color: var(--color-text); font-size: 1.25rem; margin-bottom: 8px;">6. Contact Information</h2>
          <p>If you have questions regarding this Privacy Policy or our website practices, please contact us via email at <a href="mailto:ceo@snipezon.com" style="color: var(--color-cyan);">ceo@snipezon.com</a>.</p>
        </div>
      </div>
    </section>
@endsection

