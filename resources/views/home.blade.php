@extends('layout.app')
@section('body')

<header class="position-relative text-center text-white bg-dark"
    style="height: 60vh; background: url('{{ asset('image/BackGround.jpg') }}') center/cover no-repeat;">
    
    <div class="container d-flex flex-column justify-content-center align-items-center h-100" style="position: relative; z-index: 2;">
        <h1 class="display-4 fw-bold">{{$welcome}}</h1>
        <p class="lead">{{$subtext}}</p>
        <div>
    <a href="{{ url('contact') }}">
        <button type="button" class="btn btn-lg me-2" style="background-color: #007bff; color: #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border: none;">
            Get Free Fertilizer
        </button>
    </a>
    <a href="{{ url('contact') }}">
        <button type="button" class="btn btn-lg" style="background-color: #28a745; color: #fff; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border: none;">
            Partner With Us
        </button>
    </a>
</div>
    </div>
    
    <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="z-index: 1;"></div>
</header>


<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="fw-bold">Green Impact and Solutions</h2>
        <p class="text-muted">At GreenLampung, we focus on transforming waste into sustainable solutions for the local community. Here’s how we’re making an impact:</p>
        
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Eco-Friendly Fertilizers</h5>
                        <p class="card-text">Our fertilizers are made from organic waste, helping to reduce landfill waste and improve soil health for farmers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Support for Local Farmers</h5>
                        <p class="card-text">We partner with local farmers to provide them with affordable, high-quality fertilizer that boosts crop production.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Community Sustainability</h5>
                        <p class="card-text">By promoting sustainable agricultural practices, we contribute to a healthier environment and stronger communities.</p>
                    </div>
                </div>
            </div>
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
