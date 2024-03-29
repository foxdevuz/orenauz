@props(['post'])
<div class="card-extra">
    <div class="body">
        <div class="top">
            <x-main.category :link="$post->category">{{ $post->category }}</x-category>
            <x-extra.time>{{ $post->created_at->format('d/m/Y') }}</x-extra.time>
        </div>
        <x-extra.news-title style="font-size: 1.3rem;" :link="$post->slug">{{ Str::limit($post->name, 40) }}</x-extra.news-title>
        <x-extra.news-little-text class="pt-1" style="width:85%;'">{!! Str::limit($post->description, '80', '...') !!} </x-extra.news-little-text>
        <p class="more">
            <a href="/news/{{ $post->slug }}">Ko'proq o'qish</a>
        </p>
    </div>
    <div class="image">
        <img src="/storage/images/{{ $post->image }}" alt="News Image">
    </div>
</div>  
