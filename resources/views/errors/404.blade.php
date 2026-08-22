@extends('frontend.layouts.app')

@section('title', 'Page Not Found | Snipezon')
@section('meta_description', 'The requested page could not be found on Snipezon. Please return to the homepage or explore our digital solutions.')
@section('meta_robots')
  <meta name="robots" content="noindex, follow">
@endsection
@section('body_data_page', '404')

@section('content')
<section class="section container text-center" style="padding-top: calc(var(--header-height) + 80px); padding-bottom: 80px;" data-animate="fade-up">
      <div style="max-width: 600px; margin: 0 auto;">
        <span class="section-eyebrow" style="color: var(--color-purple);">ERROR 404</span>
        <h1 class="hero-heading" style="font-size: 3.5rem; margin-bottom: 16px;">Page Not Found</h1>
        <p class="section-description" style="margin-bottom: 32px; font-size: 1.1rem;">
          The page you are looking for does not exist or may have been moved.
        </p>

        <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
          <a href="{{ route('home') }}" class="button button-primary">
            <span>Return to Home</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="{{ route('digital-solutions') }}" class="button button-secondary">
            <span>Explore Solutions</span>
            <svg class="button-icon-svg button-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="{{ route('contact') }}" class="button button-secondary">
            <span>Contact Us</span>
          </a>
        </div>
      </div>
    </section>
@endsection
