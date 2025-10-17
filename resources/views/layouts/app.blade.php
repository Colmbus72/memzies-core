<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Memzies')</title>
    <meta name="description" content="@yield('meta_description', 'Memzies is the shared journal that keeps your family memories living, breathing, and beautifully organized.')">
    <meta property="og:site_name" content="Memzies">
    <meta property="og:title" content="@yield('og_title', 'Memzies')">
    <meta property="og:description" content="@yield('og_description', 'Memzies is the shared journal that keeps your family memories living, breathing, and beautifully organized.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    @yield('body')
</body>
</html>
