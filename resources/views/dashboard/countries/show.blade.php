@extends('dashboard.layouts.main')
   
@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $country->name }}</h1>

            {{-- <a href="/dashboard/posts/" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a> --}}
            <a href="/dashboard/categories/{{ $country->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/categories/{{ $country->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
            </form>
        </div>
    </div>
    
</div>

@endsection 