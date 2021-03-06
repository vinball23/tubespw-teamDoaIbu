@extends('layouts.main')

@section('container')

    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h1 class="mb-3">{{ $post->title }}</h1>
        <h5>By.<a href="/posts?author={{ $post->author->username }}" class="text-decoration-none author">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none author">{{ $post->category->name }}</a></h4>
        <div class="mb-3">
          <img src="https://flagcdn.com/32x24/{{ $post->country->slug }}.png" srcset="https://flagcdn.com/32x24/{{ $post->country->slug }}.png 2x, https://flagcdn.com/48x36/{{ $post->country->slug }}.png 3x" width="32" height="24" alt="{{ $post->country->name }}"> 
          <h5 class="d-inline"><a class="text-decoration-none" href="/posts?country={{ $post->country->slug }}">{{ $post->country->name }}</a></h5>
        </div>
        @if ($post->image)
        <div style="max-height: 350px; overflow:hidden">
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
        </div>
        @else 
          <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
        @endif

        <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>
                {{-- have to fix --}}
        <a href="/posts" class="btn btn-success w-40 bi bi-arrow-left"> Back to posts</a>
      </div>
    </div>

@endsection