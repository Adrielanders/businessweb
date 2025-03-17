@extends('layout.adminapp')

@section('title', 'Edit Contact Page')

@section('dashboard-title', 'Edit Contact Page Content')

@section('styles')
    <style>
        form {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
            color: #333;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            background-color: #337ab7;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #286090;
        }

        .btn-default {
            display: inline-block;
            padding: 10px 15px;
            margin-bottom: 20px;
            background-color: #f0ad4e;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-default:hover {
            background-color: #ec971f;
        }

        .status {
            background-color: #dff0d8;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            color: #3c763d;
        }
    </style>
@endsection

@section('content')
<body>
  
    <a href="{{ url('admin') }}" class="btn btn-default">Back</a>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form action="{{ route('admin.update-contact') }}" method="POST">
        @csrf

        <!-- Title -->
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        <!-- Email -->
        <label for="email">Contact Email:</label>
        <input type="text" class="desc" name="email" value="{{ $content['email'] }}" required><br>

        <!-- Phone -->
        <label for="phone">Contact Phone:</label>
        <input type="text" class="desc" name="phone" value="{{ $content['phone'] }}" required><br>

        <!-- Instagram -->
        <label for="instagram">Instagram:</label>
        <input type="text" name="instagram" value="{{ $content['instagram'] }}" required><br>

        <!-- WhatsApp -->
        <label for="whatsapp">WhatsApp:</label>
        <input type="text" name="whatsapp" value="{{ $content['whatsapp'] }}" required><br>

        <!-- LinkedIn -->
        <label for="linkedin">LinkedIn:</label>
        <input type="text" name="linkedin" value="{{ $content['linkedin'] }}" required><br>

        <!-- Map -->
        <label for="map">Map (Google Maps Embed Code):</label>
        <textarea name="map" required>{{ $content['map'] }}</textarea><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
@endsection
