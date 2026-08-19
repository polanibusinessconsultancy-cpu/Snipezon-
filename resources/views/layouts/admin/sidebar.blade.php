<aside class="w-64 bg-slate-900 border-r border-slate-800 flex flex-col shrink-0">
    <div class="h-16 flex items-center px-6 border-b border-slate-800">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 font-bold text-lg text-white tracking-wider">
            <span class="w-8 h-8 rounded bg-indigo-600 flex items-center justify-center text-white font-extrabold shadow-lg shadow-indigo-500/30">S</span>
            <span>SNIPEZON <span class="text-indigo-400 text-xs uppercase px-1.5 py-0.5 rounded bg-indigo-950 border border-indigo-800/60 font-semibold ml-1">Admin</span></span>
        </a>
    </div>

    <nav class="flex-1 px-4 py-6 overflow-y-auto space-y-6 text-sm">
        <div>
            <div class="text-xs font-semibold uppercase tracking-wider text-slate-400 px-3 mb-2">Core Foundation</div>
            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg font-medium transition-colors bg-indigo-600/20 text-indigo-400 border border-indigo-500/30">
                <svg class="w-5 h-5 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span>Dashboard</span>
            </a>
        </div>

        <div>
            <div class="text-xs font-semibold uppercase tracking-wider text-slate-400 px-3 mb-2">Website & Business Modules</div>
            <div class="space-y-1">
                @php
                    $modules = [
                        'Website Content' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
                        'Digital Services' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'General Supply' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
                        'Portfolio' => 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z',
                        'Performance & SEO' => 'M13 10V3L4 14h7v7l9-11h-7z',
                        'Enquiries' => 'M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                        'Media Library' => 'M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2-2H5a2 2 0 00-2 2v5a2 2 0 002 2z',
                        'SEO' => 'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z',
                    ];
                @endphp

                @foreach($modules as $title => $icon)
                    <div class="flex items-center justify-between px-3 py-2.5 rounded-lg text-slate-400 cursor-not-allowed opacity-75 hover:bg-slate-800/40">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $icon }}"/>
                            </svg>
                            <span>{{ $title }}</span>
                        </div>
                        <span class="text-[10px] font-semibold uppercase tracking-wider px-1.5 py-0.5 rounded bg-slate-800 text-slate-400 border border-slate-700">Planned</span>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <div class="text-xs font-semibold uppercase tracking-wider text-slate-400 px-3 mb-2">Settings & Security</div>
            <div class="space-y-1">
                @php
                    $settings = [
                        'Website Settings',
                        'Contact Details',
                        'Social Links',
                        'Admin Users & Roles'
                    ];
                @endphp

                @foreach($settings as $settingTitle)
                    <div class="flex items-center justify-between px-3 py-2 rounded-lg text-slate-400 cursor-not-allowed opacity-75 hover:bg-slate-800/40 text-xs">
                        <div class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                            <span>{{ $settingTitle }}</span>
                        </div>
                        <span class="text-[9px] font-medium text-slate-400">Planned</span>
                    </div>
                @endforeach
            </div>
        </div>
    </nav>
</aside>
