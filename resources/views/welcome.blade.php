<x-main.main-header>
    @if (count($posts)>10)
        <x-main.main-section :post="$posts"/> 
        <x-main.second :posts="$posts_for_second"/>
        <x-main.all :posts="$all_posts"/>
    @else
        <x-extra.messages class="fs-5">Sayt vaqtinchalik ish faoliyatida emas</x-extra.messages>
        {{ abort(404, 'News not found') }}
    @endif
</x-main.main-header>
