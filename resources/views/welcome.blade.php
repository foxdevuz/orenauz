<x-main.main-header :categories="$categories">
    {{-- {{ dd($second) }} --}}
    <x-main.main-section :post="$latest" :popularPosts="$popularPosts" :breakingNews="$breakingNews"/> 
    <x-main.second :posts="$second"/>
    <x-main.all :posts="$allPosts"/>
</x-main.main-header>
