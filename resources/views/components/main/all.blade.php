@props(['posts'])
<div {{ $attributes->merge(['class'=>'all']) }}>
    @foreach ($posts as $key => $post)
        <x-news.all-card :posts="$post"/>        
    @endforeach
</div>
