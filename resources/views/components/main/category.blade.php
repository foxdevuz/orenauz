@props(['link'])
<p {{ $attributes->merge(['class'=>'category'])}}><a href="/category/{{ $link }}">{{ $slot }}</a></p>
