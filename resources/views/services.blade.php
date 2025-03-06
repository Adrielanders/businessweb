@extends('layout.app')
@section('body')
<!-- 
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">{{ $content['title'] }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('/services') }}">Our Product</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav> -->


    <header class="position-relative text-center text-white bg-dark"
    style="height: 60vh; background: url('{{ asset('image/ourprod.jpg') }}') center/cover no-repeat;">
        <div class="overlay"></div>
         <div class="container d-flex flex-column justify-content-center align-items-center h-100">
            <h1>{{ $content['title'] }}</h1>
        </div>
    </header>

    <!-- Main Content Section -->
    <section>
        <h2>{{ $content['heading'] }}</h2>
        <p>{{ $content['description'] }}</p>

        <div class="products">
            @foreach ($content['products'] as $product)
            <div class="product">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                <h3>{{ $product['name'] }}</h3>
                <p>{{ $product['description'] }}</p>
                <button class="btn">Learn More</button>
            </div>
            @endforeach
        </div>
    </section>
@stop
