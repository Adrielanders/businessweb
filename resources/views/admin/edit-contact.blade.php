<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact Information</title>
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

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            outline: none;
            border-color: #1565c0;
            background-color: #fff;
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
    <h1>Edit Contact Information</h1>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form action="{{ route('admin.update-contact') }}" method="POST">
        @csrf

        <label for="title">Page Title:</label>
        <input type="text" name="title" id="title" value="{{ $content['title'] }}" required>

        <label for="welcome_message">Welcome Message:</label>
        <input type="text" name="welcome_message" id="welcome_message" value="{{ $content['welcome_message'] }}" required>

        <label for="intro_paragraph">Introduction Paragraph:</label>
        <input type="text" name="intro_paragraph" id="intro_paragraph" value="{{ $content['intro_paragraph'] }}" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $content['email'] }}" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" value="{{ $content['phone'] }}" required>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
