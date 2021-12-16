@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Country</h1>

    <div class="row justify-content-center">
        @foreach ($countries as $country)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card country-card bg-light p-3 shadow">
                    <a href="/posts?country={{ $country->slug }}" class="text-decoration-none text-black">
                        <img src="https://flagcdn.com/w640/{{ $country->slug }}.png" srcset="https://flagcdn.com/w320/{{ $country->slug }}.png 2x" class="d-inline" width="100" alt="{{ $country->name }}">
                        <div class="d-inline pt-2">
                            <h3 class="d-inline px-3">{{ $country->name }}</h3>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection