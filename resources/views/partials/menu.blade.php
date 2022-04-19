<ul>
     <li> <a href="{{ route('landing-page') }}">Ana Sayfa</a> </li>
     @foreach ($pages as $page)
     <li> <a href="{{ route('page.show', $page->slug) }}">{{ $page->title }}</a> </li>
     @endforeach
     <li> <a href="{{ route('contact.create') }}">Iletişim</a> </li>
</ul>
