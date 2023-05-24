<x-admin.index-layout>
        {{-- catch messages  --}}
            @if (session('success'))
                <x-extra.messages class="text-success">{{ session('success') }}</x-extra.messages>
            @endif
            @if (session('error'))
                <x-extra.messages class="text-success">{{ session('error') }}</x-extra.messages>
            @endif
        {{-- catch messages  --}}
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-3 m-3">
                <div class="card rounded" style="width: 18rem;">
                    <img src="/storage/images/{{ $post->image }}" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($post->name, 50, '...') }}</h5>
                        <p class="card-text">{!! Str::limit($post->description, 50, '...') !!}</p>
                        <a href="/admin/delete-post/{{ $post->id }}" class="btn btn-danger rounded"><i class="fa-solid fa-trash"></i> O'chirish</a>
                        <a href="/admin/edit-post/{{ $post->id }}" class="btn btn-warning rounded"><i class="fa-solid fa-pen"></i> Tahrirlash</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-admin.index-layout>
