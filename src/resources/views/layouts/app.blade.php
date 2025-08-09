<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Breezeと同じく Vite で Tailwind 読み込み -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- ここにナビを追加したくなったら includeIf にしておくと安全 -->
        {{-- @includeIf('layouts.navigation') --}}

        <!-- ページ見出しがあれば表示（Breeze準拠） -->
        @hasSection('header')
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @yield('header')
                </div>
            </header>
        @endif

        <!-- コンテンツ -->
        <main class="flex-1">
            @yield('content')
        </main>
    </div>
</body>
</html>
