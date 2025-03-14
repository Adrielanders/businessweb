<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.tiny.cloud/1/4u4i7mnntdjp35mdep6ufxqimmcy8vkyo8d82hp0f2xic1ag/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.desc'
        });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Services Page</title>
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
        .status {
            padding: 10px;
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            border-radius: 6px;
            margin-bottom: 20px;
        }
    </style>
</head>


    <h1>Edit About Page Content</h1>
    <a href="{{ url('admin') }}" class ="btn btn-default">back</a>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form action="{{ route('admin.update-about') }}" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>
        <label for="title">Subtext:</label>
        <input class = "desc" type="text" name="subtext" value="{{ $content['subtext'] }}" required><br>
        <label for="story">Our Story:</label>
        <textarea name="story" class = "desc" required>{{ $content['story'] }}</textarea><br>

        <label for="mission">Mission:</label>
        <textarea name="mission" class = "desc" required>{{ $content['mission'] }}</textarea><br>

        <h2>Team</h2>
        @foreach ($content['team'] as $index => $member)
        <div class="team-member">
            <h3>Team Member {{ $index + 1 }}</h3>
            <label for="team[{{ $index }}][name]">Name:</label>
            <input type="text" name="team[{{ $index }}][name]" value="{{ $member['name'] }}" required><br>

            <label for="team[{{ $index }}][role]">Role:</label>
            <input type="text" name="team[{{ $index }}][role]" value="{{ $member['role'] }}" required><br>

            <label for="team[{{ $index }}][image]">Image URL:</label>
            <input type="text" name="team[{{ $index }}][image]" value="{{ $member['image'] }}" required><br>
        </div>
        @endforeach

        <button type="submit">Save Changes</button>
    </form>



