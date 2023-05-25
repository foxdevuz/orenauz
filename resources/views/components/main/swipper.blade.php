@props(['posts'])
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach ($posts as $post)
            <x-extra.swipper.swipper-slide :post="$post"/>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
