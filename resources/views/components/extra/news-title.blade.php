@props(['link'])
<h3 {{ $attributes->merge(['class'=> 'news-title'])}}><a href="/news/{{ $link }}">{{ $slot }}</a></h3>
