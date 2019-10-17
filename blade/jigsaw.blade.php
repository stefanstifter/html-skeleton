<!DOCTYPE html>
<html lang="de-AT">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('pageTitle', "$page->siteName - Default hookline")</title>
        <meta name="description" content="@yield('pageDescription', $page->siteDescription)">
        <meta name="author" content="sas web development">
        <meta property="og:locale" content="de_AT">
        <meta property="og:type" content="website">
        <meta property="og:title" content="@yield('pageTitle', "$page->siteName - Default hookline")">
        <meta property="og:description" content="@yield('pageDescription', $page->siteDescription)">
        <meta property="og:url" content="{{ $page->getUrl() }}">
        <meta property="og:site_name" content="{{ "$page->siteName - Default hookline" }}">
        <meta property="og:image" content="{{ $page->baseUrl }}/assets/images/logo.png">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="@yield('pageTitle', "$page->siteName - Default hookline")">
        <meta name="twitter:description" content="@yield('pageDescription', $page->siteDescription)">
        <meta name="twitter:image" content="{{ $page->baseUrl }}/assets/images/logo.png">
        <meta name="twitter:site" content="{{ $page->getUrl() }}">
        {{--  @ToDo: add favicon tags --}}

        <link href="{{ mix('css/main.css', 'assets/build') }}" rel="stylesheet">
        @stack('styles')
    </head>
    <body>
      
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
