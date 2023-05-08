@props(['post'])
<div class="main-section">
    <x-main.swipper/>
    <div class="item lastest">
        <x-extra.section-title>So'ngi</x-extra.section-title>
        <img src="/images/testImage.jpg" alt="News Image">
        <p class="pt-3"> <i class="fa-regular fa-calendar"></i>{{ $post[0]->created_at }}</p>
        <x-extra.news-title>{{ $post[0]->name }}</x-extra.news-title>
        <x-extra.news-little-text>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, odio. Dolores laudantium ipsum placeat nesciunt delectus iure explicabo facere qui.</x-extra.news-little-text>
        <x-extra.read-more :link="{{ $post[0]->slug }}"> Ko'proq o'qish... </x-extra.read-more>
    </div>

    <div class="item fast">
        <x-extra.section-title>Tezkor</x-extra.section-title>
        <x-news.fast-card/>
        <x-news.fast-card/>
        <x-news.fast-card/>
    </div>
    <div class="item popular">
        <x-extra.section-title>Mashxur</x-extra.section-title>
        <x-news.popular-news-card/>
        <x-news.popular-news-card/>
        <x-news.popular-news-card/>
    </div>
</div>
