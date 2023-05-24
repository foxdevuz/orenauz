@props(['posts'])
<div class="second">
    <div class="live">
        <div class="images">
            <img src="/storage/images/{{ $posts[7]->image }}" alt="News image" class="w-100 item-1">
            <div class="extra-imaes">
                <img src="/storage/images/{{ $posts[7]->image }}" alt="News image" class="w-100">
                <img src="/storage/images/{{ $posts[7]->image }}" alt="News image" class="w-100">
            </div>
        </div>
        <div class="body">
            <x-extra.time class="pt-4 fs-5">{{ $posts[7]->created_at->format('d/m/Y') }}</x-extra.time>
            <x-extra.news-title style="font-size: 2rem;" :link="$posts[7]->slug">{{ Str::limit($posts[7]->name, 60) }}</x-extra.news-title>
            <x-extra.news-little-text class="pt-1 fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ducimus quae aspernatur, omnis porro officia autem provident doloremque</x-extra.news-little-text>
            <p class="more">
                <a href="/news/{{ $posts[7]->slug }}">Ko'proq o'qish</a>
            </p>
        </div>
    </div>
    <div class="extra">
        @foreach ($posts as $post)
            <x-news.card-extra :post="$post"/>
            @if($loop->iteration == 2)
                @break
            @endif        
        @endforeach
    </div>
</div>
