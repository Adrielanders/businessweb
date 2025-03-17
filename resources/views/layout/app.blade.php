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
    <link href="{{ asset('css\googleapis.css') }}" rel="stylesheet">
</head>

<style>
    footer {
        text-align: center;
        padding: 15px 0;
        background-color: #f8f9fa;
    }


    body {
        --sb-track-color:rgb(255, 252, 252);
        --sb-thumb-color: #0d6efd;
        --sb-size: 4px;
    }

    body::-webkit-scrollbar {
        width: var(--sb-size)
    }

    body::-webkit-scrollbar-track {
        background: var(--sb-track-color);
        border-radius: 7px;
    }

    body::-webkit-scrollbar-thumb {
        background: var(--sb-thumb-color);
        border-radius: 7px;

    }

    @supports not selector(::-webkit-scrollbar) {
        body {
            scrollbar-color: var(--sb-thumb-color) var(--sb-track-color);
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">{!! $content['title'] !!}</a>
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
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
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