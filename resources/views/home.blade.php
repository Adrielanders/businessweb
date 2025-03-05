@extends('layout.app')
@section('body')
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">{{$Title}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Our Product</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<header class="position-relative text-center text-white bg-dark" style="height: 60vh; background: url('{{ asset('image/BackGround.jpg') }}') center/cover no-repeat;">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">Sustainable Growth for Lampung’s Farmers</h1>
        <p class="lead">Turning waste into opportunity—helping farmers with eco-friendly fertilizers.</p>
        <div>
            <a href="#" class="btn btn-primary btn-lg me-2">Get Free Fertilizer</a>
            <a href="#" class="btn btn-success btn-lg">Partner With Us</a>
        </div>
    </div>
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.3);"></div>
</header>

<!-- Our Products Section -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="fw-bold">Our Products</h2>
        <p class="text-muted">Eco-friendly fertilizers that improve soil health.</p>

        <div class="row mt-4">
            @foreach ($content['services'] as $service)
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="{{ $service['image'] }}" class="card-img-top" alt="{{ $service['name'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service['name'] }}</h5>
                        <p class="card-text">{{ $service['description'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    document.addEventListener("scroll", function() {
        let navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
</script>
@stop