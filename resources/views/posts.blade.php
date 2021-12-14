@extends('layouts.main')

@section('container')
{{-- Background Post --}}






{{-- search --}}
<h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        <form action="/posts"> 
          @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
          @endif
          @if (request('author'))
          <input type="hidden" name="author" value="{{ request('author') }}">
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

<div class="container">
<div class="row mt-3 p-2">
    <div class="col-md-6 col-sm12 p-2">
      <img src="https://source.unsplash.com/600x300?Breakfast" class="rounded col-sm-12 img-fluid" style="object-fit: cover">
    </div>
    <div class="col-md-6 col-sm-12 p-3">
      <h2 class="mb-5 mb-sm-0">Welcome to Wibesite do'a Ibu Project Team</h2>
      <h6 class="mt-4 col-12 mb-sm-0 mt-sm-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio excepturi odit numquam sit nihil sint, commodi architecto, magnam perferendis dolorum quod corrupti consectetur veritatis dolor error, rerum recusandae delectus ducimus nostrum ipsa molestias. Aperiam nobis laudantium quo, maiores porro adipisci.</h6>
      <div class="btn-explore text-center">
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
    </div>
  </div>
</div>

<div class="mb-4 mt-4 text-center" id="menu">
  <h1>Menu Recipes</h1>
</div>


{{-- end home --}}


    {{-- POSTS AWAL YANG GEDE --}}

    {{-- @if ($posts->count())
    <div class="card mb-3">
      @if ($posts[0]->image)
      <div style="max-height: 400px; overflow:hidden">
        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
      </div>
      @else 
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top md-8" alt="{{ $posts[0]->category->name }}">
      @endif

      

        <div class="card-body text-center">
          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3> --}}

          {{-- buat author sama kapan postnya dibuat --}}
          {{-- <p>
            <small class="text-muted">
            By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in 
            <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> 
            {{ $posts[0]->created_at->diffForHumans() }}
            </small>
          </p> --}} 
          {{-- buat author sama kapan postnya dibuat --}}

          {{-- exerpt --}}
          {{-- {{-- <p class="card-text">{{ $posts[0]->excerpt }}</p> --}}

          {{-- <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-success">
            <i class="bi bi-receipt"></i>
            Recipes
          </a> --}}
          {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
        {{-- </div>
      </div>     --}}
    

      {{-- AKHIR POST AWAL YANG GEDE --}}
    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-3 mb-3 mt-2">
          <div class="card">
            <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            @else 
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>

              {{-- buat author sama kapan postnya dibuat --}}
              {{-- <p>
                <small class="text-muted">
                By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>  
                {{ $posts[0]->created_at->diffForHumans() }}
                </small>
              </p> --}}
              {{-- end buat author sama kapan postnya dibuat --}}



              {{-- exerpt --}}
              {{-- <p class="card-text">{{ $post->excerpt }}</p> --}}
              <a href="/posts/{{ $post->slug }}" class="btn btn-success w-100">
                <i class="bi bi-book"></i>
                Recipes
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  {{-- @else
    <p class="text-center fs-4">No Post Found </p>
  @endif --}}

  <div class="d-flex  justify-content-center">
    {{ $posts->links() }}
  </div>

  
@endsection
