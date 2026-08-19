<header class="h-16 bg-slate-900 border-b border-slate-800 px-6 flex items-center justify-between shrink-0">
    <div class="flex items-center gap-3">
        <h1 class="text-sm font-semibold text-slate-300">Foundation Platform Control Panel</h1>
    </div>

    <div class="flex items-center gap-4">
        <div class="flex items-center gap-3 border-r border-slate-800 pr-4">
            <div class="w-9 h-9 rounded-full bg-slate-800 border border-slate-700 flex items-center justify-center text-slate-300 font-bold text-sm">
                {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
            </div>
            <div class="text-left">
                <div class="text-xs font-semibold text-slate-200">{{ Auth::user()->name ?? 'Administrator' }}</div>
                <div class="text-[11px] text-slate-400">
                    <span class="inline-flex items-center px-1.5 py-0.5 rounded text-[10px] font-medium bg-indigo-950 text-indigo-300 border border-indigo-800">
                        {{ Auth::user()->roles->pluck('name')->first() ?? 'Administrator' }}
                    </span>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                    class="flex items-center gap-2 px-3 py-1.5 rounded-lg text-xs font-medium text-slate-400 hover:text-slate-200 hover:bg-slate-800 border border-slate-800 transition-colors">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span>Logout</span>
            </button>
        </form>
    </div>
</header>
