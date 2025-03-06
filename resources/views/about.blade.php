@extends('layout.app')
@section('body')

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">{{ $content['title'] }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link " href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{ url('/about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Our Product</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="position-relative text-center text-white bg-dark">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">{{ $content['title'] }}</h1>
        <p class="lead">Learn about our mission and team.</p>
    </div>
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
</header>

<section class="py-5 bg-light text-center">
    <div class="container">
        <h2>Our Story</h2>
        <p>{{ $content['story'] }}</p>

        <h2 class="fw-bold mt-5">Our Mission & Values</h2>
        <p class="text-muted">{{ $content['mission'] }}</p>

        <h2 class="fw-bold mt-5">Meet Our Team</h2>
        <div class="row mt-4">
            @foreach ($content['team'] as $member)
            <div class="team-member card">
                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}">
                <h3>{{ $member['name'] }}</h3>
                <p>{{ $member['role'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>


@stop