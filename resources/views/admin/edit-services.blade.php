<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
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
            padding: 20px;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        form {
            max-width: 800px;
            margin: 0 auto;
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

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus, textarea:focus {
            outline: none;
            border-color: #1565c0;
            background-color: #fff;
        }

        textarea {
            min-height: 100px;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        h3 {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #555;
        }

        .service {
            margin-bottom: 30px;
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
    </style>
</head>
<body>
    <h1>Edit Page Content</h1>

    <form action="{{ route('admin.update-services') }}" method="POST">
        @csrf
        <h2>General Information</h2>

        <label for="title">Page Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        <label for="heading">Page Heading:</label>
        <input type="text" name="heading" value="{{ $content['heading'] }}" required><br>

        <label for="description">Page Description:</label>
        <textarea name="description" required>{{ $content['description'] }}</textarea><br>

        <h2>Services</h2>
        @foreach ($content['services'] as $index => $service)
        <div class="service">
            <h3>Service {{ $index + 1 }}</h3>

            <label for="services[{{ $index }}][name]">Service Name:</label>
            <input type="text" name="services[{{ $index }}][name]" value="{{ $service['name'] }}" required><br>

            <label for="services[{{ $index }}][description]">Service Description:</label>
            <textarea name="services[{{ $index }}][description]" required>{{ $service['description'] }}</textarea><br>

            <label for="services[{{ $index }}][image]">Image URL:</label>
            <input type="text" name="services[{{ $index }}][image]" value="{{ $service['image'] }}" required><br>
        </div>
        @endforeach

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
