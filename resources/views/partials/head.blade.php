<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <title>@yield('title', __('Home Page')) | {{ setting('site.title') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('description', setting('site.description'))">
    @hasSection('keywords') <meta name=”keywords” content="@yield('keywords')"> @endif
    @hasSection('author') <meta name="author" content="@yield('author')"> @endif
    <meta property="og:url" content="/">
    <meta property="og:title" content="@yield('title', setting('site.title')) | {{ setting('site.title') }}">
    <meta property="og:image" content="@yield('image', setting('site.logo'))">
    <meta property="og:description"
        content="@yield('description', setting('site.description'))">
    <meta property="og:site_name" content="@yield('title', setting('site.title')) | {{ setting('site.title') }}"> <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" /> <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="{{ asset('assets/img/icons/apple-touch-icon.png') }}" />
    <!-- Windows 8 Tile Icons -->
    <meta name="application-name" content="{{ setting('site.title') }}">
    <meta name="msapplication-TileColor" content="#141414">
    <meta name="theme-color" content="#141414">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,700&display=swap" rel="preload" as="font">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="alternate" type="application/rss+xml" title="Jekflix | A blog theme for Jekyll" href="{{ asset('feed.xml') }}" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> -->
    <!-- JavaScript enabled/disabled -->
    <script>
        document.querySelector('html').classList.remove('no-js');
    </script>
</head>
