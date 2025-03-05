<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['title'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /* General styles for all pages */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
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
        .products {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 40px;
        }
        .product {
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .product h3 {
            font-size: 1.6em;
            margin: 15px 0;
        }
        .product p {
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
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/services') }}">Our Product</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>
    </nav>
    <section>
        <h2>{{ $content['heading'] }}</h2>
        <p>{{ $content['description'] }}</p>

        <div class="products">
            @foreach ($content['products'] as $product)
            <div class="product">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                <h3>{{ $product['name'] }}</h3>
                <p>{{ $product['description'] }}</p>
            </div>
            @endforeach
        </div>
    </section>
    <footer>
        <p>&copy; 2025 Business Placeholder. All rights reserved.</p>
    </footer>
</body>
</html>
