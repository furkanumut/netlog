<!DOCTYPE html>
<html lang="tr" class="no-js">

@include('partials.head')
@stack('extra-css')

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @if (setting('site.google_analytics_tracking_id') & config('APP_ENV') != 'local' )
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}">
    </script>
    @endif
    @stack('extra-js')

</body>

</html>
