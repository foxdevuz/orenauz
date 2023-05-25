<x-main.main-header :categories="$categories">
    <x-extra.section-title class="my-3">{{ $post->name }}</x-extra.section-title>
    <x-extra.time>{{ $post->created_at->format('d/m/Y H:s') }}</x-extra.time>
    @if ($post->image)
        <img src="/storage/images/{{ $post->image }}" alt="News Image" class="more-news-image">
    @else
        <img src="/images/testImage.jpg" alt="News Image" class="more-news-image">
    @endif
    <x-extra.more-about-news> 
        {!! $post->description !!}
    </x-extra.more-about-news>
    <div class="extra-more">
        <div class="view">
            <i class="fa-solid fa-eye"></i> <span>{{ $post->view }}</span>
        </div>
        <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-share"></i>
            </a>
            <ul class="dropdown-menu" style="z-index: 999 !important">
              <li><a class="dropdown-item" target="_blank" href="https://t.me/share/url?url={{ url()->current() }}&text={{ $post->name }}">Telegram</a></li>
              <li><a class="dropdown-item" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}">Facebook</a></li>
              <li><a class="dropdown-item" target="_blank" href="https://twitter.com/intent/tweet?url={{ url()->current() }}&text={{ $post->name }}">Twitter</a></li>
            </ul>
          </div>
    </div>
    <a href="https://t.me/orenauz" target="_blank" class="view-tg">Telegram orqali kuzatish</a>
    <x-extra.section-title>Tavsiya etamiz:</x-extra.section-title>
    <div class="all">
        @foreach ($latest as $post)
            <x-news.all-card :posts="$post"/>
        @endforeach
    </div>
</x-main.main-header>
