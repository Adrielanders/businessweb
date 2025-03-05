<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About Page</title>
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
<body>
    <h1>Edit About Page Content</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <form action="{{ route('admin.update-about') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required>

        <label for="heading">Heading:</label>
        <input type="text" name="heading" value="{{ $content['heading'] }}" required>

        <label for="description">Description:</label>
        <textarea name="description" rows="5" required>{{ $content['description'] }}</textarea>

        <h2>Team Members</h2>
        @foreach ($content['team'] as $index => $member)
        <div class="team-member">
            <h3>Member {{ $index + 1 }}</h3>
            <label for="team[{{ $index }}][name]">Name:</label>
            <input type="text" name="team[{{ $index }}][name]" value="{{ $member['name'] }}" required>

            <label for="team[{{ $index }}][role]">Role:</label>
            <input type="text" name="team[{{ $index }}][role]" value="{{ $member['role'] }}" required>

            <label for="team[{{ $index }}][image]">Image URL:</label>
            <input type="text" name="team[{{ $index }}][image]" value="{{ $member['image'] }}" required>
        </div>
        @endforeach

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
