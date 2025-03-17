@extends('layout.adminapp')

@section('title', 'Edit Homepage Content')

@section('dashboard-title', 'Edit Homepage Content')

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

        .solution {
            margin-bottom: 25px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f7f7f7;
        }

        .solution h3 {
            margin-top: 0;
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
            color: #3c763d;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d6e9c6;
            border-radius: 5px;
        }
    </style>
@endsection

@section('content')
<body>

    <a href="{{ url('admin') }}" class="btn btn-default">Back</a>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form action="{{ route('admin.update-home') }}" method="POST">
        @csrf
        <!-- Title -->
        <label for="title">Page Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        <!-- Welcome Message -->
        <label for="welcome">Welcome Message:</label>
        <input type="text" name="welcome" value="{{ $content['welcome'] }}" required><br>

        <!-- Subtext -->
        <label for="subtext">Subtext:</label>
        <input type="text" class="desc" name="subtext" value="{{ $content['subtext'] }}" required><br>

        <!-- Section Title -->
        <label for="section_title">Section Title:</label>
        <input type="text" name="section_title" value="{{ $content['section_title'] }}" required><br>

        <!-- Section Description -->
        <label for="section_description">Section Description:</label>
        <textarea name="section_description" class="desc" required>{{ $content['section_description'] }}</textarea><br>

        <h2>Solutions</h2>

        <!-- Loop through Solutions -->
        @foreach ($content['solutions'] as $index => $solution)
        <div class="solution">
            <h3>Solution {{ $index + 1 }}</h3>

            <!-- Solution Title -->
            <label for="solutions[{{ $index }}][title]">Title:</label>
            <input type="text" name="solutions[{{ $index }}][title]" value="{{ $solution['title'] }}" required><br>

            <!-- Solution Description -->
            <label for="solutions[{{ $index }}][description]">Description:</label>
            <textarea class="desc" name="solutions[{{ $index }}][description]" required>{{ $solution['description'] }}</textarea><br>
        </div>
        @endforeach

        <button type="submit">Save Changes</button>
    </form>
</body>
@endsection
