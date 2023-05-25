@props(['posts'])
<div class="all-card">
    <div class="image">
        <a href="/news/{{ $posts->slug }}"><img src="/storage/images/{{ $posts->image }}" alt="News Image"></a>
    </div>
    <div class="body">
        <div class="top">
            <x-main.category :link="$posts->category">{{ $posts->category }}</x-category>
            <x-extra.time>{{ $posts->created_at->format('d/m/y') }}</x-extra.time>
        </div>
        <x-extra.news-title style="font-size: 1.4rem;" :link="$posts->slug">{{ Str::limit($posts->name, 70) }}</x-extra.news-title>
        <x-extra.news-little-text class="fs-6">{!! Str::limit($posts->description, 40, '...') !!}</x-extra.news-little-text>
        <p class="more">
            <a href="/news/{{ $posts->slug }}">Ko'proq o'qish</a>
        </p>
    </div>
</div>
