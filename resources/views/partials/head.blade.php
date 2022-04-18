
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('Home Page')) | {{ setting('site.title') }}</title>
    <meta name="description"
        content="@yield('description', setting('site.description')) | {{ setting('site.description') }}">
    <!-- Social: Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', setting('site.title')) | {{ setting('site.title') }}">
    <meta name="twitter:description"
        content="@yield('description', setting('site.description')) | {{ setting('site.description') }}">
    <meta property="twitter:image:src" content="@yield('image', setting('site.logo')) | {{ setting('site.logo') }}">
    <meta property="og:url" content="/">
    <meta property="og:title" content="@yield('title', setting('site.title')) | {{ setting('site.title') }}">
    <meta property="og:image" content="@yield('image', setting('site.logo')) | {{ setting('site.logo') }}">
    <meta property="og:description"
        content="@yield('description', setting('site.description')) | {{ setting('site.description') }}">
    <meta property="og:site_name" content="@yield('title', setting('site.title')) | {{ setting('site.title') }}"> <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" /> <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/icons/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/icons/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/icons/apple-touch-icon-72x72.html') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/icons/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/icons/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/icons/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/icons/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/icons/apple-touch-icon-76x76.html') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/icons/apple-touch-icon-152x152.png') }}" />
    <!-- Windows 8 Tile Icons -->
    <meta name="application-name" content="Jekflix">
    <meta name="msapplication-TileColor" content="#141414">
    <meta name="theme-color" content="#141414">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="alternate" type="application/rss+xml" title="Jekflix | A blog theme for Jekyll" href="{{ asset('feed.xml') }}" />
    <!-- JavaScript enabled/disabled -->
    <script>
        document.querySelector('html').classList.remove('no-js');
    </script>
</head>
