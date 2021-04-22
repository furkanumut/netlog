<!DOCTYPE html>
<html lang="tr" class="no-js">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', setting('site.title')) | {{ setting('site.title') }}</title>
    <meta name="description"
        content="Jekflix is a template for Jekyll inspired by Netflix and made by Thiago Rossener.">
    <!-- Social: Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jekflix | A blog theme for Jekyll">
    <meta name="twitter:description"
        content="Jekflix is a template for Jekyll inspired by Netflix and made by Thiago Rossener.">
    <meta property="twitter:image:src" content="{{ asset('assets/img/blog-image.png') }}">
    <meta property="og:url" content="/">
    <meta property="og:title" content="Jekflix | A blog theme for Jekyll">
    <meta property="og:image" content="{{ asset('assets/img/blog-image.png') }}">
    <meta property="og:description"
        content="Jekflix is a template for Jekyll inspired by Netflix and made by Thiago Rossener.">
    <meta property="og:site_name" content="Jekflix | A blog theme for Jekyll"> <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" /> <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/icons/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/icons/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/icons/apple-touch-icon-72x72.html') }}"" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/icons/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/icons/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/icons/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/icons/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/icons/apple-touch-icon-76x76.html') }} />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/icons/apple-touch-icon-152x152.png') }}" />
    <!-- Windows 8 Tile Icons -->
    <meta name="application-name" content="Jekflix">
    <meta name="msapplication-TileColor" content="#141414">
    <meta name="theme-color" content="#141414">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/prism.css') }}">
    <link rel="alternate" type="application/rss+xml" title="Jekflix | A blog theme for Jekyll" href="{{ asset('feed.xml') }}" />
    <!-- Include extra styles -->
    <!-- JavaScript enabled/disabled -->
    <script>
        document.querySelector('html').classList.remove('no-js');
    </script>
</head>

<body class="has-push-menu">

    @include('partials.svg')
    @include('partials.header')
    <div id="mask" class="overlay"></div>
    @include('partials.sidebar')
    @include('partials.searchbar')

    @yield('content')

    @include('partials.footer')
    @stack('scheme.json')


    <!-- Include the website scripts -->
    <script src="{{ asset('assets/js/scripts.min.js') }}"></script>-+
    <script src="{{ asset('assets/js/prism.js') }}"></script>
    @if (setting('site.google_analytics_tracking_id') & config('APP_ENV') != 'local' )
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}">
    </script>
    @endif
    @stack('extra-js')
</body>

</html>
