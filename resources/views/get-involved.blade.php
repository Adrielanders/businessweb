@extends('layout.app')
@section('body')

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
        <div class="row mb-5" >
            @if ($loop->index % 2 == 0)
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h3 class="fw-bold">{{ $section['heading'] }}</h3>
                <p>{!!  $section['description'] !!}</p>
                <a href="{{ url($section['button_link']) }}" class="btn btn-dark">{{ $section['button_text'] }}</a>
            </div>
            <div class="col-md-6">
                <img src="{{ $section['image'] }}" alt="{{ $section['heading'] }} Image" class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" style="max-height: 300px;">
            </div>
            @else
            <div class="col-md-6">
                <img src="{{ $section['image'] }}" alt="{{ $section['heading'] }} Image" class="img-fluid rounded shadow-sm w-100 h-100 object-fit-cover" style="max-height: 300px;">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h3 class="fw-bold">{{ $section['heading'] }}</h3>
                <p>{!! $section['description']  !!}</p>
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
