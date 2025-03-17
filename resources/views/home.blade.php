@extends('layout.app')
@section('body')

<style>
    .scroll-container {
        display: flex;
        flex-wrap: nowrap;
        gap: 15px;
        overflow-x: auto;
        padding-bottom: 10px;
        scrollbar-width: thin;
        scrollbar-color: #ccc transparent;
        min-width: 100%;
        justify-content: center;
    }
    .scroll-container::-webkit-scrollbar {
        height: 6px;
    }
    .scroll-container::-webkit-scrollbar-thumb {
        background-color: #aaa;
        border-radius: 3px;
    }
    .solution-card {
        flex: 0 0 300px;
        max-width: 300px;
    }
    .scroll-wrapper {
        display: flex;
        justify-content: center;
        overflow: hidden;
    }
</style>

<header class="position-relative text-center text-white bg-dark"
    style="height: 60vh; background: url('{{ asset('image/BackGround.jpg') }}') center/cover no-repeat;">

    <div class="container d-flex flex-column justify-content-center align-items-center h-100" style="position: relative; z-index: 2;">
        <h1 class="display-4 fw-bold">{{$welcome}}</h1>
        <p class="lead">{!! $subtext!!}</p>
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
        <p class="text-muted">{!! $sectionDescription !!}</p>

        <div class="position-relative">
            <div class="scroll-container mt-5">
                @foreach($solutions as $solution)
                <div class="card shadow-sm border-0 solution-card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $solution['title'] }}</h5>
                        <p class="card-text">{!! $solution['description'] !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@stop
@section('script')
<script>

</script>
@stop