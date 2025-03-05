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
            background-color: #f7f9fc;
      
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
            color: white;
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

        form {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        label {
            display: block;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
            outline: none;
            border-color: #1565c0;
            background-color: #fff;
        }

        textarea {
            min-height: 100px;
        }

        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1565c0;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0d47a1;
        }

        .status {
            padding: 10px;
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        footer {
            background-color: #0d47a1;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer p {
            font-size: 0.9em;
        }

        .contact-info {
            margin-top: 20px;
            text-align: center;
            font-size: 1.1em;
            color: #333;
        }

        .contact-info p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>{{ $content['title'] }}</h1>
    </header>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form action="#" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>

    <div class="contact-info">
        <p>Email: {{ $content['email'] }}</p>
        <p>Phone: {{ $content['phone'] }}</p>
    </div>

    <footer>
        <p>&copy; 2025 Business Placeholder. All rights reserved.</p>
    </footer>
</body>
</html>
