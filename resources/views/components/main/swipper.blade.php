@props(['posts'])
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach ($posts as $post)
            <x-extra.swipper.swipper-slide :post="$post"/>
            @if ($loop->iteration == 4)
                @break
            @endif
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>
