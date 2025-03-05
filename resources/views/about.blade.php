<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content['title'] }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navbar */
        .navbar {
            transition: all 0.3s;
        }
        .navbar.scrolled {
            background-color: #fff !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        /* Header */
        header {
            position: relative;
            text-align: center;
            color: white;
            background-color: #343a40;
            height: 60vh;
            background: url('{{ asset("image/AboutBackground.jpg") }}') center/cover no-repeat;
        }
        header h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        header .overlay {
            background: rgba(0, 0, 0, 0.3);
        }

        /* Section */
        section {
            padding: 60px 0;
            text-align: center;
        }
        section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 30px;
        }
        section p {
            font-size: 1.2rem;
            color: #6c757d;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.75;
        }

        /* Team Section */
        .team {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 40px;
        }
        .team-member {
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        .team-member img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .team-member h3 {
            font-size: 1.6em;
            margin: 15px 0;
        }
        .team-member p {
            font-size: 1em;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            background-color: #343a40;
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">{{ $content['title'] }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Our Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="position-relative text-center text-white bg-dark">
        <div class="container d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="display-4 fw-bold">{{ $content['title'] }}</h1>
            <p class="lead">Learn about our mission and team.</p>
        </div>
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"></div>
    </header>

    <!-- About Section -->
    <section>
        <h2>Our Story</h2>
        <p>{{ $content['story'] }}</p>

        <h2>Our Mission & Values</h2>
        <p>{{ $content['mission'] }}</p>

        <h2>Meet Our Team</h2>
        <div class="team">
            @foreach ($content['team'] as $member)
            <div class="team-member">
                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}">
                <h3>{{ $member['name'] }}</h3>
                <p>{{ $member['role'] }}</p>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 GreenLampung. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("scroll", function() {
            let navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>
