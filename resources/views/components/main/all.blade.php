@props(['posts'])
<div {{ $attributes->merge(['class'=>'all']) }}>
    @foreach ($posts as $post)
        <x-news.all-card :posts="$post"/> 
    @endforeach
</div> 
{{  $posts->links('vendor.pagination.bootstrap-5')  }}
