@props(['post'])
{{-- {{ dd($post) }} --}}
<div class="fast-card">
    <div class="card-top">
        <x-main.category :link="$post->category">{{ $post->category }}</x-main.category>
        <x-extra.time> {{ $post->created_at->format("d/m/Y") }}</x-extra.time>
    </div>
    <div class="card-body">
        <x-extra.news-title style="font-size: 1.3rem;" :link="$post->slug">{{ Str::limit($post->name, '30') }}</x-extra.news-title>
        <x-extra.news-little-text class="pt-1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente necessitatibus eligendi</x-extra.news-little-text>
        <p class="more">
            <a href="/news/{{ $post->slug }}">Ko'proq o'qish</a>
        </p>
    </div>
</div>
