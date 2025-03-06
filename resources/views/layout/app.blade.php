<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['title'] }}</title>
    <script src="{{ asset('JS\bootstrap5.3.2.js') }}"></script>
    <script src="{{ asset('JS\swiper11.js') }}"></script>
    <link href="{{ asset('css\global.css') }}" rel="stylesheet">
    <link href="{{ asset('css\bootstrap5.3.2.css') }}" rel="stylesheet">
    <link href="{{ asset('css\swiper11.css') }}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">{{ $content['title'] }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{ url('/services') }}">Our Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('impact') ? 'active' : '' }}" href="{{ url('/impact') }}">Our Impact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('get-involved') ? 'active' : '' }}" href="{{ url('/get-involved') }}">Get Involved</a>
                </li>
             
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
    <div class="content">
        @yield('body')
    </div>
    <footer>
        <p>&copy; 2025 Business Placeholder. All rights reserved.</p>
    </footer>
    @yield('script')
</body>

</html>