@extends('layout/app')
@section('body')

    <header>
        <h1>{{ $content['title'] }}</h1>

        @auth
            <a href="{{ route('edit.page') }}">
                <button class="edit-btn">Edit</button>
            </a>
        @endauth
    </header>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/services') }}">Our Product</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>
    
    <section>
        <h2>Sustainable Growth for Lampung’s Farmers</h2>
        <p>Turning waste into opportunity—helping farmers with eco-friendly fertilizers.</p>

        <div class="cta">
            <button>Get Free Fertilizer</button>
            <button>Partner With Us</button>
        </div>

        <div class="placeholder-img"></div>
    </section>

