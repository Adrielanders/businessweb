@extends('layout.app')
@section('body')
<header class="position-relative text-center text-white bg-dark"
    style="height: 60vh; background: 'black') center/cover no-repeat;">
    
    <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">{{$content['impact']['title']}}</h1>
    </div>
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
</header>

<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <!-- Our Reach -->
        <div class="mb-5">
            <h3 class="fw-bold">{{ $content['impact']['reach']['title'] }}</h3>
            <p class="mb-3">{{ $content['impact']['reach']['description'] }}</p>
            <div class="row text-center">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm p-4">
                        <h4 class="fw-bold">{{ $content['impact']['reach']['data']['farmers_helped']['title'] }}</h4>
                        <p class="display-4 fw-bold text-primary">{{ $content['impact']['reach']['data']['farmers_helped']['value'] }}</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm p-4">
                        <h4 class="fw-bold">{{ $content['impact']['reach']['data']['waste_repurposed']['title'] }}</h4>
                        <p class="display-4 fw-bold text-success">{{ $content['impact']['reach']['data']['waste_repurposed']['value'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Success Stories -->
        <div class="mb-5">
            <h3 class="fw-bold">{{ $content['impact']['success_stories']['title'] }}</h3>
            <p>{{ $content['impact']['success_stories']['description'] }}</p>
            <div class="row">
                @foreach ($content['impact']['success_stories']['stories'] as $story)
                <div class="col-md-6">
                    <div class="card shadow-sm p-4 mb-4 h-100">
                        <h5 class="fw-bold">{{ $story['name'] }}</h5>
                        <p class="text-muted">{{ $story['location'] }}</p>
                        <p>{{ $story['impact'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Future Goals -->
        <div>
            <h3 class="fw-bold">{{ $content['impact']['future_goals']['title'] }}</h3>
            <p>{{ $content['impact']['future_goals']['description'] }}</p>
            <ul class="list-unstyled">
                @foreach ($content['impact']['future_goals']['goals'] as $goal)
                <li class="mb-2"><i class="fas fa-check text-success"></i> {{ $goal }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@stop
