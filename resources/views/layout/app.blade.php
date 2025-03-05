<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['title'] }}</title>
    <link href="{{ asset('css\global.css') }}" rel="stylesheet">
</head>
<body>
    <div class="content">
        @yield('body')
    </div>
    <footer>
        <p>&copy; 2025 Business Placeholder. All rights reserved.</p>
    </footer>
</body>

</html>