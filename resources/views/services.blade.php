@extends('layout.app')
@section('body')

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
        <p>{!!   $content['description'] !!}</p>

        <div class="services">
            @foreach ($content['services'] as $service)
            <div class="service">
                <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}">
                <h3>{{ $service['name'] }}</h3>
                <p>{!!  $service['description'] !!}</p>
                <!-- <button class="btn">Learn More</button> -->
            </div>
            @endforeach
        </div>
    </section>
@stop
