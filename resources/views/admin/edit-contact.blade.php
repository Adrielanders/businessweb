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
    <title>Edit Contact Page</title>
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

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus,
        textarea:focus {
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

        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>
</head>

<body>
    <h1>Edit Contact Page Content</h1>
    <a href="{{ url('admin') }}" class="btn btn-default">back</a>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form action="{{ route('admin.update-contact') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        <label for="email">Contact Email:</label>
        <input type="text" class="desc" name="email" value="{{ $content['email'] }}" required><br>

        <label for="phone">Contact Phone:</label>
        <input type="text" class="desc" name="phone" value="{{ $content['phone'] }}" required><br>

        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram" value="{{ $content['instagram'] }}" required><br>

        <label for="whatsapp">WhatsApp:</label>
        <input type="text" name="whatsapp" value="{{ $content['whatsapp'] }}" required><br>

        <label for="linkedin">LinkedIn:</label>
        <input type="text" name="linkedin" value="{{ $content['linkedin'] }}" required><br>

        <label for="map">Map: (Google Maps->Share-> Embed a map, yes, copy it with the iframe tag) </label>
        <textarea name="map"  required>{{ $content['map'] }}</textarea><br>



        <button type="submit">Save Changes</button>
    </form>
</body>

</html>
