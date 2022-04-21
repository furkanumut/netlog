@extends('layouts.post')
@section('title', $post->title)
@section('content')
<section class="post {{ !$more_posts->isEmpty() ? 'two-columns' : 'one-column' }}">
    <article role="article" class="post-content">
        <p class="post-info">

            <svg class="icon-calendar" id="date">
                <use xlink:href="#icon-calendar"></use>
            </svg>
            <time class="date" datetime="{{ $post->created_at }}">



                {{ $post->created_at->format('d-m-Y') }}

            </time>

            <svg id="clock" class="icon-clock">
                <use xlink:href="#icon-clock"></use>
            </svg>
            <span>Ortalama Okuma Süresi: {{ $read_time_minutes }} dakika</span>
        </p>
        <h1 class="post-title">{{ $post->title }}</h1>
        <p class="post-subtitle">{{ $post->excerpt }}</p>


        <img src="{{ asset(Storage::url($post->image)) }}"
            alt="{{ $post->title.', '.$post->category->name.', '.config('APP_NAME') }}" class="post-cover">


        <!-- Pagination links -->



        <!-- Add your table of contents here -->


        {!! $post->body !!}
    </article>

    @if (!$more_posts->isEmpty())
    <aside class="see-also">
        <h2>Benzer Yazılar</h2>
        <ul>
            @foreach ($more_posts as $see_post)
            <li>
                <a href="{{ route('post.show', $see_post->slug) }}">

                    <img
                        src="{{ asset(Storage::url(substr($see_post->image, 0, -4).'-small'.substr($see_post->image, -4))) }}">

                    <h3>{{ $see_post->title }}</h3>
                </a>
            </li>
            @endforeach

        </ul>
    </aside>
    @endif

</section>

<div class="time-bar" data-minutes="{{ $read_time_minutes }}" data-second="{{ $read_time_second }}">
    <span class="time-completed"></span>
    <span class="time-remaining"></span>
    <div class="bar">
        <span class="completed" style="width:0%;"></span>
        <span class="remaining" style="width:100%;"></span>
    </div>
</div>
@if ($read_next)
<div class="recommendation">
    <div class="message">
        <strong>Yeni bir şeyler okumak istemez misin?</strong>
        <div>
            <button>
                <svg>
                    <use xlink:href="#icon-arrow-right"></use>
                </svg>
                <span>Yukarı çık</span>
            </button>
        </div>
    </div>

    <a href="{{ route('post.show', $read_next->slug) }}" class="post-preview">
        <div class="image">

            <img src="{{ asset(Storage::url(substr($read_next->image, 0, -4).'-small'.substr($read_next->image, -4)))}}" alt="{{ $read_next->title.', '.$read_next->category->name.', '.config('APP_NAME') }}">

        </div>
        <h3 class="title">{{ $read_next->title }}</h3>
    </a>
</div>
@endif

<section class="share">
    <h3>Paylaş</h3>
    <a aria-label="Share on Twitter"
        href="https://twitter.com/intent/tweet?text=%22{{ $post->title }}%22%0A{{ url()->current() }}"
        onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"
        title="Share on Twitter">
        <svg class="icon icon-twitter">
            <use xlink:href="#icon-twitter"></use>
        </svg>
    </a>
    <a aria-label="Share on Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
        onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"
        title="Share on Facebook">
        <svg class="icon icon-facebook">
            <use xlink:href="#icon-facebook"></use>
        </svg>
    </a>
</section>



<section class="author">
    <div class="details">

        <img class="img-rounded" src="{{ asset(Storage::url($author->avatar)) }}" alt="{{ $author->name }}">

        <p class="def">Yazar</p>
        <h3 class="name">
            <a href="#">{{ $author->name }}</a>
        </h3>
        <p class="desc">{{ $author->biography }}</p>
    </div>
</section>
@endsection

@section('extra-js')

<script>
    (function(){
	if (typeof self === 'undefined' || !self.Prism || !self.document) {
		return;
	}

	if (!Prism.plugins.toolbar) {
		console.warn('Copy to Clipboard plugin loaded before Toolbar plugin.');

		return;
	}

	var ClipboardJS = window.ClipboardJS || undefined;

	if (!ClipboardJS && typeof require === 'function') {
		ClipboardJS = require('clipboard');
	}

	var callbacks = [];

	if (!ClipboardJS) {
		var script = document.createElement('script');
		var head = document.querySelector('head');

		script.onload = function() {
			ClipboardJS = window.ClipboardJS;

			if (ClipboardJS) {
				while (callbacks.length) {
					callbacks.pop()();
				}
			}
		};

		script.src = 'https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js';
		head.appendChild(script);
	}

	Prism.plugins.toolbar.registerButton('copy-to-clipboard', function (env) {
		var linkCopy = document.createElement('button');
		linkCopy.textContent = 'Copy';

		if (!ClipboardJS) {
			callbacks.push(registerClipboard);
		} else {
			registerClipboard();
		}

		return linkCopy;

		function registerClipboard() {
			var clip = new ClipboardJS(linkCopy, {
				'text': function () {
					return env.code.split('\n').join(' ').replace(/\s+/g,' ');
				}
			});

			clip.on('success', function() {
				linkCopy.textContent = 'Copied!';

				resetText();
			});
			clip.on('error', function () {
				linkCopy.textContent = 'Press Ctrl+C to copy';

				resetText();
			});
		}

		function resetText() {
			setTimeout(function () {
				linkCopy.textContent = 'Copy';
			}, 5000);
		}
	});
})();
</script>
@endsection

@push('schema.json')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "{{ $post->title }}",
        "image": "{{ asset(Storage::url($post->image)) }}",
        "author": {
          "@type": "Person",
          "name": "{{ $author->name }}"
        },
        "publisher": {
          "@type": "Organization",
          "name": "{{ setting('site.title') }}",
          "logo": {
            "@type": "ImageObject",
            "url": "{{ setting('site.logo') }}"
          }
        },
        "datePublished": "{{ $post->created_at }}"
      }
</script>
@endpush
