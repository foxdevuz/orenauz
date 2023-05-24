<x-admin.index-layout>
    {{-- catch messages  --}}
        @if (session('success'))
            <x-extra.messages class="text-success">{{ session('success') }}</x-extra.messages>
        @endif
        @if (session('error'))
            <x-extra.messages class="text-danger">{{ session('error') }}</x-extra.messages>
        @endif
    {{-- catch messages  --}}
    <form action="/admin/category-add" method="post">
        @csrf
        <label for="name" class="form-label">Kategoriya nomi</label>
        <input type="text" name="category" id="name" placeholder="Kategoriya uchun nom kiriting" class="form-control" required >
        <button class="btn btn-primary mt-5 rounded" type="submit">Kategoriya qo'shish</button>
    </form>
    <p>
        <p>Mavjud kategoriyalar</p>
        <ul>
            @foreach ($categories as $category)
                <li>{{ $category->name }} <a href="/admins/category-delete/{{ $category->id }}" class="text-danger fs-6"><i class="fa-solid fa-trash"></i></a></li>
            @endforeach
        </ul>
        <x-extra.messages class="text-danger mt-5">Kategoriyani o'chirish u bilan bog'liq postlarni o'chishiga ham olib keladi!!! Jarayonni ortga qaytarish imkonsiz</x-extra.messages>
    </p>
</x-admin.index-layout>
