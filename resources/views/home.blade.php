@extends('layout/app')

@section('body')

<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/services">Services</a>
    <a href="/contact">Contact</a>
</nav>
<section>
    <h2>{{ $content['welcome_message'] }}</h2>
    <p>{{ $content['intro_paragraph'] }}</p>
    <div class="placeholder-img"></div>
</section>
<section class="service-section">
    <h2>Our Services</h2>
    <div class="services">
        @foreach ($content['services'] as $service)
        <div class="service">
            <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}">
            <h3>{{ $service['name'] }}</h3>
            <p>{{ $service['description'] }}</p>
        </div>
        @endforeach
    </div>
</section>
@stop