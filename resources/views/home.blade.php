<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['title'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #0d47a1;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        header h1 {
            font-size: 2.5em;
            font-weight: 600;
        }

        /* Edit button styling */
        .edit-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #ff5722;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9em;
        }

        .edit-btn:hover {
            background-color: #e64a19;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 15px 0;
            background-color: #1565c0;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1em;
        }

        nav a:hover {
            text-decoration: underline;
        }

        section {
            padding: 60px 20px;
            text-align: center;
        }

        section h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
        }

        section p {
            font-size: 1.2em;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta {
            margin: 30px 0;
        }

        .cta button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            border-radius: 5px;
        }

        .cta button:hover {
            background-color: #388e3c;
        }

        footer {
            background-color: #0d47a1;
            color: white;
            text-align: center;
            padding: 20px;
        }

        footer p {
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ $content['title'] }}</h1>

        <!-- Show Edit button only if user is logged in -->
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
    <footer>
        <p>&copy; 2025 GreenLampung. All rights reserved.</p>
    </footer>
</body>
</html>
