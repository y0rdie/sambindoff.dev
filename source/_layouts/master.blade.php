<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        @if ($page->production)
            <!-- Fathom - beautiful, simple website analytics -->
            <script src="https://cdn.usefathom.com/script.js" data-site="GNKUURHU" defer></script>
            <!-- / Fathom -->
        @endif

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex items-center justify-center w-full min-h-screen bg-gray-100">
        <main class="max-w-4xl mx-auto px-10 pt-10 pb-20 sm:pb-10" role="main">
            @yield('body')
        </main>
    </body>
</html>
