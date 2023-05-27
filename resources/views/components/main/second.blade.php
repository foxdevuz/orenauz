@props(['posts'])
<div class="second">
    <div class="live">
        <div class="images">
            <img src="/storage/images/{{ $posts[0]->image }}" alt="News image" class="w-100 item-1">
            {{-- <div class="extra-imaes">
                <img src="/storage/images/{{ $posts[0]->image }}" alt="News image" class="w-100">
                <img src="/storage/images/{{ $posts[0]->image }}" alt="News image" class="w-100">
            </div> --}}
        </div>
        <div class="body">
            <x-extra.time class="pt-4 fs-5">{{ $posts[0]->created_at->format('d/m/Y') }}</x-extra.time>
            <x-extra.news-title style="font-size: 2rem;" :link="$posts[0]->slug">{{ Str::limit($posts[0]->name, 60) }}</x-extra.news-title>
            <x-extra.news-little-text class="pt-1 fs-5">{!! Str::limit($posts[0]->description, 130, '...') !!}</x-extra.news-little-text>
            <p class="more">
                <a href="/news/{{ $posts[0]->slug }}">Ko'proq o'qish</a>
            </p>
        </div>
    </div>
    <div class="extra">
        @foreach ($posts->skip(1) as $post)
            <x-news.card-extra :post="$post"/>
        @endforeach
    </div>
</div>
