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
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Our Product</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<header class="position-relative text-center text-white bg-dark"
    style="height: 60vh; background: url('{{ asset('image/BackGround.jpg') }}') center/cover no-repeat;">

    <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">{{$welcome}}</h1>
        <p class="lead">{{$subtext}}</p>
        <div>
            <button type="button" class="btn btn-primary btn-lg me-2">Get Free Fertilizer</button>
            <button type="button" class="btn btn-success btn-lg">Partner With Us</button>
        </div>
    </div>
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
</header>


<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="fw-bold">Our Products</h2>
        <p class="text-muted">Eco-friendly fertilizers that improve soil health.</p>
        <div class="swiper mySwiper mt-5">
            <div class="swiper-wrapper">
                @foreach ($content['services'] as $service)
                <div class="swiper-slide">
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

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>



@stop
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });
    });

</script>
@stop