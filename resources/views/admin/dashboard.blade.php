@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Welcome Header -->
    <div class="bg-slate-900 border border-slate-800 rounded-xl p-6 shadow-sm">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h2 class="text-xl font-bold text-white">Welcome back, {{ $user->name }}</h2>
                <p class="text-xs text-slate-400 mt-1">Authenticated as <span class="text-indigo-400 font-semibold">{{ $roles }}</span>. Base application foundation is ready.</p>
            </div>
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-emerald-950 text-emerald-400 border border-emerald-800">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 mr-1.5 animate-pulse"></span>
                    System Active
                </span>
            </div>
        </div>
    </div>

    <!-- System Status Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-slate-900 border border-slate-800 rounded-lg p-4">
            <div class="text-xs text-slate-400 uppercase font-semibold">Framework</div>
            <div class="text-lg font-bold text-white mt-1">Laravel {{ app()->version() }}</div>
        </div>
        <div class="bg-slate-900 border border-slate-800 rounded-lg p-4">
            <div class="text-xs text-slate-400 uppercase font-semibold">Runtime</div>
            <div class="text-lg font-bold text-white mt-1">PHP {{ PHP_VERSION }}</div>
        </div>
        <div class="bg-slate-900 border border-slate-800 rounded-lg p-4">
            <div class="text-xs text-slate-400 uppercase font-semibold">Database</div>
            <div class="text-lg font-bold text-white mt-1">snipezon_db</div>
        </div>
        <div class="bg-slate-900 border border-slate-800 rounded-lg p-4">
            <div class="text-xs text-slate-400 uppercase font-semibold">Security State</div>
            <div class="text-lg font-bold text-emerald-400 mt-1">0 Vulnerabilities</div>
        </div>
    </div>

    <!-- Planned Modules Grid -->
    <div>
        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-4">Module Foundation Status</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @php
                $modules = [
                    'Website Content' => 'Static frontend integration and dynamic CMS pages',
                    'Digital Services' => 'Service packages, pricing tables, and offerings',
                    'General Supply' => 'Commercial supply catalog and quotation requests',
                    'Portfolio' => 'Project showcases, case studies, and achievements',
                    'Performance & SEO' => 'Core Web Vitals tracking and speed optimization',
                    'Enquiries' => 'Customer contact form submissions and lead management',
                    'Media Library' => 'Asset manager for images, documents, and static media',
                    'SEO' => 'Meta tags, Open Graph settings, and sitemap generator',
                    'Settings' => 'Global website options, contact info, and admin users',
                ];
            @endphp

            @foreach($modules as $name => $desc)
                <div class="bg-slate-900 border border-slate-800/80 rounded-lg p-5 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <h4 class="font-semibold text-sm text-slate-300">{{ $name }}</h4>
                            <span class="text-[10px] font-semibold uppercase px-2 py-0.5 rounded bg-slate-800 text-slate-400 border border-slate-700">Planned</span>
                        </div>
                        <p class="text-xs text-slate-400 leading-relaxed">{{ $desc }}</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-slate-800/60 text-[11px] text-slate-400 italic">
                        No data available yet
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
