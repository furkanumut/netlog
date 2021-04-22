@extends('layouts.post')

@section('content')
<section class="content">
    <div class="post">
        <article class="post-content fullwidth">
            <p><img class="img-rounded" src="{{ asset(Storage::url($page->image)) }}" alt="{{ $page->title }}" width="200" />
            </p>
            <h1>{{ $page->title }}</h1>
            {!! $page->body !!}
        </article>
    </div>
</section>
@endsection
