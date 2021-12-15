@extends('layouts.main')

@section('container')
    <h1>{{ $title }}</h1>
    @if ($posts->count())
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-3 mb-3 mt-2">
                    <div class="card h-100">
                        <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.4)">
                            <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                        @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $country->category->name }}" class="img-fluid">
                        @else 
                        <img src="https://source.unsplash.com/500x400?{{ $country->category->name }}" class="card-img-top" alt="{{ $country->category->name }}">
                        @endif
                        <div class="card-body">
                        <small class="text-muted mt-5">
                            By. <a href="/posts?author={{ $country->author->username }}" class="text-decoration-none">{{ $country->author->name }}</a>
                        </small>
                        <br>
                        <small class="text-muted">
                            Country: <a href="/posts?country={{ $country->country->slug }}" class="text-decoration-none">{{ $country->country->name }}</a>
                        </small>
                        <h5 class="card-title">{{ $country->title }}</h5>
                        <a href="/posts/{{ $country->slug }}" class="btn btn-success w-100">
                            <i class="bi bi-book"></i>
                            Recipes
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4">No country Found</p>
    @endif

    <div class="d-flex justify-content-center">
        {{ $countries->links() }}
    </div>
@endsection