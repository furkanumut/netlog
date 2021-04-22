@foreach ($posts as $post)
<article class="box-item"> <span class="category"> <a href="{{ $post->category->slug }}"> <span>{{ $post->category->name }}</span>
</a> </span>
<div class="box-body"> <a class="cover" href="{{ $post->slug }}"> <svg
        width="50" height="50" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg"
        class="loader">
        <defs>
            <linearGradient x1="0%" y1="100%" x2="100%" y2="100%" id="a">
                <stop stop-color="currentColor" stop-opacity="0" offset="0%" />
                <stop stop-color="currentColor" stop-opacity=".631" offset="63.146%" />
                <stop stop-color="currentColor" offset="100%" />
            </linearGradient>
        </defs>
        <g fill="none" fill-rule="evenodd">
            <g transform="translate(1 1)">
                <path
                    d="M0,18.0000525 C0,27.9411416 8.05885836,36 18.0000525,36 C27.9411416,36 36,27.9411416 36,18.0000525"
                    id="Oval-2" stroke="url(#a)" stroke-width="2">
                    <animateTransform attributeName="transform" type="rotate" from="360 18 18"
                        to="0 18 18" dur="1.9s" repeatCount="indefinite" />
                </path>
                <circle fill="currentColor" cx="36" cy="18" r="1">
                    <animateTransform attributeName="transform" type="rotate" from="360 18 18"
                        to="0 18 18" dur="1.9s" repeatCount="indefinite" />
                </circle>
            </g>
        </g>
    </svg> <img src="assets/img/placeholder.png" width="100%"
        data-url="{{ asset(Storage::url(substr($post->image, 0, -4).'-small'.substr($post->image, -4))) }}"
        class="preload"> <noscript> <img
            src="{{ asset(Storage::url(substr($post->image, 0, -4).'-small'.substr($post->image, -4))) }}"
            width="100%"> </noscript>
    <div class="read-icon"> <svg>
            <use xlink:href="#icon-read"></use>
        </svg> </div>
</a>
<div class="box-info"> <time datetime="2018-11-22T12:26:40+00:00" class="date"> {{ $post->created_at }} </time> <a class="post-link" href="{{ route('post.show', $post->slug) }}">
        <h2 class="post-title"> {{ $post->title }} </h2>
    </a> <a class="post-link" href="{{ $post->slug }}">
        <p class="description">{{ Str::words($post->excerpt, 10, '...') }}</p>
    </a>
    {{-- <div class="tags"> <a href="tags/index.html#books">#books</a> <a
            href="tags/index.html#read">#read</a> </div> --}}
</div>
</div>
</article>
@endforeach
