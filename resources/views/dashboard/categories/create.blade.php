@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">   
    <h1 class="h2">Create New Post Posts</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data" >
      @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>

      <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</div>
    
@endsection