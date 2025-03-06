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
    <div class="content">
        @yield('body')
    </div>
    <footer>
        <p>&copy; 2025 Business Placeholder. All rights reserved.</p>
    </footer>
    @yield('script')
</body>

</html>