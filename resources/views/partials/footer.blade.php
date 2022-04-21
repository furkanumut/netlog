<!-- FOOTER -->
<footer>
    <p>
    @foreach($social_media_urls as $social_media)
        <a href="{{ $social_media->url }}" title="{{ $social_media->name}}"><i class="{{ $social_media->icon }}"></i></a>
    @endforeach
    </p>
   @include('partials.menu')
    <p> Frontend by <a href="https://rossener.com/" target="_blank" class="creator">Thiago Rossener</a> & Backend by <a
            href="https://yazilimcibiradam.com/">Furkan Umut Ceylan</a> </p>
</footer>
<!-- END FOOTER  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (setting('site.google_analytics_tracking_id') AND config('APP_ENV') != 'local' )
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
    </script>

    @endif
