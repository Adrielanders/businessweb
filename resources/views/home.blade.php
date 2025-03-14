@extends('layout.app')
@section('body')

<header class="position-relative text-center text-white bg-dark"
    style="height: 60vh; background: url('{{ asset('image/BackGround.jpg') }}') center/cover no-repeat;">
    
    <div class="container d-flex flex-column justify-content-center align-items-center h-100" style="position: relative; z-index: 2;">
        <h1 class="display-4 fw-bold">{{$welcome}}</h1>
        <p class="lead">{!!  $subtext!!}</p>
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
        <h2 class="fw-bold">{{ $sectionTitle }}</h2>
        <p class="text-muted">{!!   $sectionDescription !!}</p>
        
        <div class="row mt-5">
            @foreach($solutions as $solution)
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $solution['title'] }}</h5>
                            <p class="card-text">{!!   $solution['description'] !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
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
