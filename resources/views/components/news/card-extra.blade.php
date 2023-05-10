@props(['post'])
<div class="card-extra">
    <div class="body">
        <div class="top">
            <x-main.category :link="$post->category">{{ $post->category }}</x-category>
            <x-extra.time>{{ $post->created_at->format('d/m/Y') }}</x-extra.time>
        </div>
        <x-extra.news-title style="font-size: 1.3rem;">{{ Str::limit($post->name, 40) }}</x-extra.news-title>
        <x-extra.news-little-text class="pt-1" style="width:85%;'">Lorem ipsum, dolor sit amet consectetur adipisicing elit. </x-extra.news-little-text>
        <p class="more">
            <a href="/news/{{ $post->slug }}">Ko'proq o'qish</a>
        </p>
    </div>
    <div class="image">
        <img src="/images/testImage.jpg" alt="News Image">
    </div>
</div>  
