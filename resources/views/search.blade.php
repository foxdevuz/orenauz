<x-main.main-header :categories="$categories">
    @if ($result)
        <x-extra.section-title class="mt-3">Qidiruvingiz bo'yicha natijalar</x-extra.section-title>
        <x-main.all :posts="$result" class="mt-3"/>
    @else 
        <x-extra.messages>Natija topilmadi</x-extra.messages>
    @endif
    
</x-main.main-header>
