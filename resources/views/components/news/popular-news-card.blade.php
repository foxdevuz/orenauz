@props(['post'])
<div class="pupular-news-card">
    <div class="body">
        <x-main.category :link="$post->category">{{ Str::limit($post->category, 7) }}</x-category>
        <x-extra.time>{{ $post->created_at->format('d/m/Y') }}</x-extra.time>
        <p class="news-title extra"><a href="#">{{ Str::limit($post->name, 50) }}</a></p>
        <p class="more">
            <a href="/news/{{ $post->slug }}">Ko'proq o'qish</a>
        </p>
    </div>
    <div class="image">
        <img src="/images/testImage.jpg" alt="News Image">
    </div>
</div>
