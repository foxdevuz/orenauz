@props(['post'])
{{-- {{ dd($post->slug) }} --}}
<div class="main-section">
    <x-main.swipper :posts="$post"/>
    <div class="item lastest">
        <x-extra.section-title>So'ngi</x-extra.section-title>
        <img src="/images/testImage.jpg" alt="News Image">
        <p class="pt-3"> <i class="fa-regular fa-calendar"></i> {{ $post[0]->created_at->format("d/m/Y") }}</p>
        <x-extra.news-title :link="$post[0]->slug">{{ Str::limit($post[0]->name, 100,) }}</x-extra.news-title>
        <x-extra.news-little-text>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, odio. Dolores laudantium ipsum placeat nesciunt delectus iure explicabo facere qui.</x-extra.news-little-text>
        <a href="/news/{{ $post[0]->slug }}">Ko'proq o'qish</a>
    </div>

    <div class="item fast">
        <x-extra.section-title>Tezkor</x-extra.section-title>
        @foreach ($post->skip(1) as $posts)
            <x-news.fast-card :post="$posts"/>
            @if($loop->iteration == 3)
                @break
            @endif
        @endforeach
    </div>
    <div class="item popular">
        <x-extra.section-title>Mashxur</x-extra.section-title>
        @foreach ($post as $key => $value)
            @if ($key >= 5)
                <x-news.popular-news-card :post="$value"/>
            @endif
            @if($loop->iteration == 8)
                @break
            @endif
        @endforeach
    </div>
</div>
