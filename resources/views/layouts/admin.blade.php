<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Snipezon Admin — @yield('title', 'Dashboard')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-950 text-slate-100 min-h-screen flex">
    @include('layouts.admin.sidebar')

    <div class="flex-1 flex flex-col min-w-0">
        @include('layouts.admin.header')

        <main class="flex-1 p-6 overflow-y-auto bg-slate-950">
            @if(session('status'))
                <div class="mb-6 p-4 rounded-lg bg-indigo-950/60 border border-indigo-800/80 text-indigo-200 text-sm flex items-center justify-between">
                    <span>{{ session('status') }}</span>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
