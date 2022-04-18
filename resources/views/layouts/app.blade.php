<!DOCTYPE html>
<html lang="tr" class="no-js">

@include('partials.head')

<body class="main-page has-push-menu">

    @include('partials.svg')
    @include('partials.header')
    <div id="mask" class="overlay"></div>
    @include('partials.sidebar')
    @include('partials.searchbar')

    @yield('content')

    @include('partials.footer')
    @stack('schema.json')


    <!-- Include the website scripts -->
    <script src="{{ asset('assets/js/scripts.min.js') }}"></script>-+
    @stack('extra-js')
</body>

</html>
