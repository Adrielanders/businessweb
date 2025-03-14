@extends('layout.app')
@section('body')

<header class="position-relative text-center text-white bg-dark">
    <div class="container d-flex flex-column justify-content-center align-items-center h-100">
        <h1 class="display-4 fw-bold">{{ $content['title'] }}</h1>
        <p class="lead">{!!   $content['subtext'] !!}</p>
    </div>
    <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
</header>

<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="fw-bold mt-5">Our Story</h2>
        <p>{!!   $content['story'] !!}</p>

        <h2 class="fw-bold mt-5">Our Mission & Values</h2>
        <p class="text-muted">{!!   $content['mission'] !!}</p>

        <h2 class="fw-bold mt-5">Meet Our Team</h2>
        <div class="row mt-4">
            @foreach ($content['team'] as $member)
            <div class="col-md-3 mb-4">
                <div class="team-member card p-3">
                    <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="rounded-circle img-fluid" style="width: 100px; height: 100px; object-fit: cover;">
                    <h3 class="mt-3">{{ $member['name'] }}</h3>
                    <p>{{ $member['role'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@stop


