@extends('layout.app')
@section('body')

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">{{ $content['title'] }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Our Product</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('/get-involved') }}">Get Involved</a></li>
            </ul>
        </div>
    </div>
</nav> -->

<!-- Page Header -->
<!-- Page Header -->
<header class="bg-dark text-white text-center d-flex justify-content-center align-items-center" style="min-height: 50vh;">
    <div class="container">
        <h1 class="display-4 fw-bold">{{ $content['title'] }}</h1>
        <p class="lead">Join us in making a difference for the environment and local communities</p>
    </div>
</header>


<!-- Sections Loop -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center">Ways to Get Involved</h2>

        @foreach ($content['sections'] as $section)
        <div class="row mb-5" id="{{ $section['id'] }}">
            @if ($loop->index % 2 == 0)
            <div class="col-md-6">
                <h3 class="fw-bold">{{ $section['heading'] }}</h3>
                <p>{{ $section['description'] }}</p>
                <a href="{{ url($section['button_link']) }}" class="btn btn-dark">{{ $section['button_text'] }}</a>
            </div>
            <div class="col-md-6">
                <img src="{{ $section['image'] }}" alt="{{ $section['heading'] }} Image" class="img-fluid rounded shadow-sm">
            </div>
            @else
            <div class="col-md-6">
                <img src="{{ $section['image'] }}" alt="{{ $section['heading'] }} Image" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">{{ $section['heading'] }}</h3>
                <p>{{ $section['description'] }}</p>
                <a href="{{  url($section['button_link']) }}" class="btn btn-dark">{{ $section['button_text'] }}</a>
            </div>
            @endif
        </div>
        @endforeach

    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4">
    <div class="container">
        <p>GreenLampung &copy; 2025. All Rights Reserved.</p>
    </div>
</footer>

@stop
