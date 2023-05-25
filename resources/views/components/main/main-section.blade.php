@props(['post', 'popularPosts', 'breakingNews'])
<div class="main-section">
    <x-main.swipper :posts="$breakingNews"/>
    <div class="item lastest">
        <x-extra.section-title>So'ngi</x-extra.section-title>

        <img src="/storage/images/{{ $post->image }}" alt="News Image">

        <p class="pt-3"> <i class="fa-regular fa-calendar"></i> {{ $post->created_at->format("d/m/Y") }}</p>
        
        <x-extra.news-title :link="$post->slug">{{ Str::limit($post->name, 300,) }}</x-extra.news-title>
        
        <x-extra.news-little-text>{!! Str::limit($post->description, 40, '...') !!}</x-extra.news-little-text>
        
        <a href="/news/{{ $post->slug }}">Ko'proq o'qish</a>
    </div>

    <div class="item fast">
        <x-extra.section-title>Tezkor</x-extra.section-title>
        @foreach ($breakingNews as $posts)
            <x-news.fast-card :post="$posts"/>
            @if($loop->iteration == 3)
                @break
            @endif
        @endforeach
    </div>
    <div class="item popular">
        <x-extra.section-title>Mashxur</x-extra.section-title>
        @foreach ($popularPosts as $post)
                <x-news.popular-news-card :post="$post"/>
        @endforeach
    </div>
</div>
