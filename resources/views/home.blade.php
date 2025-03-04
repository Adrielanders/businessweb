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
        }

        header h1 {
            font-size: 2.5em;
            font-weight: 600;
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

        .placeholder-img {
            width: 100%;
            height: 400px;
            background-color: #ddd;
            margin: 50px 0;
        }

        .service-section {
            background-color: #e3f2fd;
            padding: 60px 20px;
        }

        .service-section h2 {
            margin-bottom: 40px;
        }

        .services {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 40px;
        }

        .service {
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .service img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            background-color: #ddd;
        }

        .service h3 {
            font-size: 1.6em;
            margin: 15px 0;
        }

        .service p {
            font-size: 1em;
            line-height: 1.6;
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
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
    </nav>
    <section>
        <h2>{{ $content['welcome_message'] }}</h2>
        <p>{{ $content['intro_paragraph'] }}</p>
        <div class="placeholder-img"></div>
    </section>
    <section class="service-section">
        <h2>Our Services</h2>
        <div class="services">
            @foreach ($content['services'] as $service)
            <div class="service">
                <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}">
                <h3>{{ $service['name'] }}</h3>
                <p>{{ $service['description'] }}</p>
            </div>
            @endforeach
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Business Placeholder. All rights reserved.</p>
    </footer>
</body>
</html>
