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
    @if (setting('site.google_analytics_tracking_id') AND config('APP_ENV') != 'local' )
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
    (function(){var cssMain=document.createElement('link');cssMain.href='{{ asset("assets/css/styles.css") }}';cssMain.rel='stylesheet';cssMain.type='text/css';document.getElementsByTagName('head')[0].appendChild(cssMain);var cssFa=document.createElement('link');cssFa.href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css';cssFa.rel='stylesheet';cssFa.type='text/css';document.getElementsByTagName('head')[0].appendChild(cssFa)})();
    </script>

    @endif
