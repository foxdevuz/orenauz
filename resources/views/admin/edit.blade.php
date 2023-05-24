<x-admin.index-layout>
    {{-- {{ dd($posts->name) }} --}}
    <h4 class="my-4">Postni tahrirlash, Post sarlavhasi: <br> <small>{{ $posts->name }}</small></h4>
    {{-- catch messages  --}}
      @if (session('success'))
          <x-extra.messages class="text-success">{{ session('success') }}</x-extra.messages>
      @endif
      @if (session('error'))
          <x-extra.messages class="text-success">{{ session('error') }}</x-extra.messages>
      @endif
    {{-- catch messages  --}}
  <form action="/admin/update-post/{{ $posts->id }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="news-title" class="form-label">Yangilik sarlavhasi</label>
    <input type="text" name="title" value="{{ $posts->name }}" id="news-title" placeholder="Yangilik uchun sarlavha" class="form-control" required>
  
    <label for="editor" class="form-label mt-3">Yangilik Matni</label>
    <textarea name="description" value="{{ $posts->description }}" id="editor" class="form-control bg-dark" cols="30" rows="10" placeholder="Yangilik matni" ></textarea>

    <label for="news-category" class="form-label mt-3">Kategoriya</label>
    <select name="category" id="news-category" class="form-select ">
      @foreach ($categories as $category)
        <option value="{{ $category->name }}" class="text-dark">{{ $category->name }}</option>
      @endforeach
    </select>
    
    <label for="news-image" class="form-label mt-3">Rasm</label>
    <input type="file" name="media" id="news-image" class="form-control" required>

    <button type="submit" class="btn btn-primary rounded mt-5"><i class="fa-solid fa-pen"></i> Tahrirni saqlash</button>
  </form>
</x-admin.index-layout>
