<!-- resources/views/admin/edit-involved.blade.php -->
@extends('layout.adminapp')

@section('title', 'Edit Get Involved Page')

@section('dashboard-title', 'Edit Get Involved Page Content')

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

        .team-member {
            margin-bottom: 25px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f7f7f7;
        }

        .team-member h3 {
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
    
    <a href="{{ url('admin') }}" class="btn btn-default">Back</a>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <form action="{{ route('admin.update-involved') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        @foreach ($content['sections'] as $index => $section)
            <div class="section">
                <h3>Section: {{ $section['id'] ?? ('Section ' . ($index + 1)) }}</h3>

                <label for="sections[{{ $index }}][heading]">Heading:</label>
                <input type="text" name="sections[{{ $index }}][heading]" value="{{ $section['heading'] }}" required><br>

                <label for="sections[{{ $index }}][description]">Description:</label>
                <textarea class="desc" name="sections[{{ $index }}][description]" required>{{ $section['description'] }}</textarea><br>

                <label for="sections[{{ $index }}][button_text]">Button Text:</label>
                <input type="text" name="sections[{{ $index }}][button_text]" value="{{ $section['button_text'] }}" required><br>

                <label for="sections[{{ $index }}][button_link]">Button Link:</label>
                <input type="text" name="sections[{{ $index }}][button_link]" value="{{ $section['button_link'] }}" required><br>

                <label for="sections[{{ $index }}][image]">Image URL:</label>
                <input type="text" name="sections[{{ $index }}][image]" value="{{ $section['image'] }}" required><br>
            </div>
        @endforeach

        <button type="submit">Save Changes</button>
    </form>
@endsection
