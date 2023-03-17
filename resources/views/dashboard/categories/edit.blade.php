@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Create my post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/categories/{{ $category->slug }}" class="mb-5">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Category Name</label>
          <input type="text" class="form-control @error('name')
            is-invalid
          @enderror" id="name" name="name" required autofocus value="{{ old('name', $category->name) }}">
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control  @error('slug')
            is-invalid
            @enderror" id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
            @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        <button type="submit" class="btn btn-primary">Edit Category</button>
      </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }

</script>
@endsection