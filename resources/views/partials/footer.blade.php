<!-- FOOTER -->
<footer>
    <p> <a href="https://github.com/github_username" title="Github"> <svg>
                <use xlink:href="#icon-github"></use>
            </svg> </a> <a href="https://www.facebook.com/facebook_username" title="Facebook"> <svg>
                <use xlink:href="#icon-facebook"></use>
            </svg> </a> <a href="https://twitter.com/twitter_username" title="Twitter"> <svg>
                <use xlink:href="#icon-twitter"></use>
            </svg> </a> <a href="https://medium.com/@medium_username" title="Medium"> <svg>
                <use xlink:href="#icon-medium"></use>
            </svg> </a> <a href="https://www.instagram.com/instagram_username" title="Instagram"> <svg>
                <use xlink:href="#icon-instagram"></use>
            </svg> </a> <a href="https://www.linkedin.com/in/linkedin_username" title="LinkedIn"> <svg>
                <use xlink:href="#icon-linkedin"></use>
            </svg> </a> </p>
    <ul>
        <li> <a href="index.html">Home</a> </li>
        <li> <a href="about/index.html">About</a> </li>
        <li> <a href="contact/index.html">Contact</a> </li>
        <li> <a href="feed.xml">Feed</a> </li>
    </ul>
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
    </script>

    @endif
