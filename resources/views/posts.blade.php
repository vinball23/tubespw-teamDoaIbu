@extends('layouts.main')

@section('container')

  <h1 class="mb-3 text-center">{{ $title }}</h1>

{{-- search --}}
  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts"> 
        @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        @if (request('country'))
          <input type="hidden" name="country" value="{{ request('country') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
          <button class="btn btn-success" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
{{-- end search --}}

{{-- home --}}
  <div class="row mt-3 p-2">
    <div class="col-md-6 col-sm12 p-2">
      <img src="https://source.unsplash.com/600x300?breakfast" class="rounded col-sm-12 img-fluid" style="object-fit: cover">
    </div>
    <div class="col-md-6 col-sm-12 p-3">
      <h1 class="mb-5 mb-sm-0 fw-bold">Welcome to FoodStation</h1>
      <h4 class="mt-4 col-12 mb-sm-0 mt-sm-1">Is a website that contains collection of recipes from various parts of the world. We created this website with the intention of bringing fresh and flavorful recipes right to your palm</h6>
      {{-- <div class="btn-explore text-center">
        <a href="#menu">
        <button class="btn btn-banner btn-success  bi bi-compass mt-5 mb-3 w-50"> Explore Recipes</button></a>
      </div>
      <div class="row">
        <div class="col text-center">
          <i class="bi-globe"></i>
          <p>5+ Countries</p>
        </div>
        <div class="col text-center">
          <i class="bi bi-card-list"></i>
          <p>3 Categories</p>
        </div>
        <div class="col text-center">
          <i class="bi-book"></i>
          <p>10+ Recipes</p>
        </div>
      </div> --}}
    </div>
  </div>

    {{-- <div class="mb-4 mt-4 text-center" id="menu">
      <h1>All the Recipes</h1>
    </div> --}}

    @if ($posts->count())
        <div class="row justify-content-center mt-5">
          @foreach ($posts as $post)
          <div class="col-md-3 mb-3 mt-2">
            <div class="card h-100 shadow">
              {{-- <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.4)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div> --}}
              @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
              @else 
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}-food" class="card-img-top" alt="{{ $post->category->name }}">
              @endif
              <div class="card-body">
                <small class="text-muted mt-5">
                  By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                </small>
                <br>
                <small class="text-muted">
                  From: <a href="/posts?country={{ $post->country->slug }}" class="text-decoration-none">{{ $post->country->name }}</a>
                </small>
                    <a class="text-decoration-none text-dark" href="/posts/{{ $post->slug }}">
                      <h5 class="card-title">{{ $post->title }}</h5>
                    </a>
                </div>
              </div>        
            </div>
            @endforeach
        </div>
      </div>
      
      @else
      <p class="text-center fs-4">No Recipe Found</p>
      @endif

      <div class="d-flex justify-content-center mt-5">
        {{ $posts->links() }}
      </div>
      
@endsection
