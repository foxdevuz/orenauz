@props(['post'])
<div class="swiper-slide">
    <x-extra.backdrop/>
    <img src="/storage/images/{{ $post->image }}" class="swipper_image" alt="">
    <span class="content_text">
        <x-extra.news-title class="extra-for-titile" :link="$post->slug">{{ Str::limit($post->name, 46) }}</x-extra.news-title>
        <p class="more extra-for-more-read">
            <a href="/news/{{ $post->slug }}">Ko'proq o'qish... <i class="fa-solid fa-chevron-right pl-3"></i></a>
        </p>
    </span>
</div>
