@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Country</h1>
    {{-- <div class="row">
        @foreach ($countries as $country)
        <div class="col-md-4 mb-3">
            <a href="/posts?country={{ $country->slug }}">
            <div class="card bg-light text-white">
                <img src="https://flagcdn.com/w320/{{ $country->slug }}.png" srcset="https://flagcdn.com/w40/{{ $country->slug }}.png 2x" width="100" alt="{{ $country->name }}">
                <div class="d-inline align-items-center p-0">
                    <h5 class="d-inline text-center p-3 fs-3" style="background-color: rgba(0,0,0,0.7)">{{ $country->name }}</h5>
                </div>
            </div> 
            </a>
        </div>
        @endforeach
    </div> --}}

    <div class="row">
        @foreach ($countries as $country)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="card country-card bg-light p-3 shadow">
                    <a href="/posts?country={{ $country->slug }}" class="text-decoration-none text-black">
                        <img src="https://flagcdn.com/w320/{{ $country->slug }}.png" srcset="https://flagcdn.com/w40/{{ $country->slug }}.png 2x" class="d-inline" width="100" alt="{{ $country->name }}">
                        <div class="d-inline pt-2">
                            <h3 class="d-inline px-3">{{ $country->name }}</h3>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

@endsection