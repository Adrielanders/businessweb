<!-- resources/views/admin/edit-impact.blade.php -->
@extends('layout.adminapp')

@section('title', 'Edit Impact Page')

@section('dashboard-title', 'Edit Impact Page Content')

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

    <form action="{{ route('admin.update-impact') }}" method="POST">
        @csrf
        <!-- Top Level Title -->
        <label for="title">Page Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        <!-- Impact Section -->
        <div class="section">
            <h2>Impact Details</h2>
            <label for="impact[title]">Impact Title:</label>
            <input type="text" name="impact[title]" value="{{ $content['impact']['title'] }}" required><br>

            <label for="impact[description]">Impact Description:</label>
            <textarea class="desc" name="impact[description]" required>{{ $content['impact']['description'] }}</textarea><br>
        </div>

        <!-- Reach Section -->
        <div class="section">
            <h2>Our Reach</h2>
            <label for="impact[reach][title]">Reach Title:</label>
            <input type="text" name="impact[reach][title]" value="{{ $content['impact']['reach']['title'] }}" required><br>

            <label for="impact[reach][description]">Reach Description:</label>
            <textarea class="desc" name="impact[reach][description]" required>{{ $content['impact']['reach']['description'] }}</textarea><br>

            <h3>Reach Data</h3>
            <!-- Farmers Helped -->
            <label for="impact[reach][data][farmers_helped][title]">Farmers Helped - Title:</label>
            <input type="text" name="impact[reach][data][farmers_helped][title]" value="{{ $content['impact']['reach']['data']['farmers_helped']['title'] }}" required><br>

            <label for="impact[reach][data][farmers_helped][value]">Farmers Helped - Value:</label>
            <input type="text" name="impact[reach][data][farmers_helped][value]" value="{{ $content['impact']['reach']['data']['farmers_helped']['value'] }}" required><br>

            <!-- Waste Repurposed -->
            <label for="impact[reach][data][waste_repurposed][title]">Waste Repurposed - Title:</label>
            <input type="text" name="impact[reach][data][waste_repurposed][title]" value="{{ $content['impact']['reach']['data']['waste_repurposed']['title'] }}" required><br>

            <label for="impact[reach][data][waste_repurposed][value]">Waste Repurposed - Value:</label>
            <input type="text" name="impact[reach][data][waste_repurposed][value]" value="{{ $content['impact']['reach']['data']['waste_repurposed']['value'] }}" required><br>
        </div>

        <!-- Success Stories Section -->
        <div class="section">
            <h2>Success Stories</h2>
            <label for="impact[success_stories][title]">Stories Title:</label>
            <input type="text" name="impact[success_stories][title]" value="{{ $content['impact']['success_stories']['title'] }}" required><br>

            <label for="impact[success_stories][description]">Stories Description:</label>
            <textarea class="desc" name="impact[success_stories][description]" required>{{ $content['impact']['success_stories']['description'] }}</textarea><br>

            @foreach ($content['impact']['success_stories']['stories'] as $index => $story)
                <div class="section">
                    <h3>Story {{ $index + 1 }}</h3>
                    <label for="impact[success_stories][stories][{{ $index }}][name]">Name:</label>
                    <input type="text" name="impact[success_stories][stories][{{ $index }}][name]" value="{{ $story['name'] }}" required><br>

                    <label for="impact[success_stories][stories][{{ $index }}][location]">Location:</label>
                    <input type="text" name="impact[success_stories][stories][{{ $index }}][location]" value="{{ $story['location'] }}" required><br>

                    <label for="impact[success_stories][stories][{{ $index }}][impact]">Impact Description:</label>
                    <textarea class="desc" name="impact[success_stories][stories][{{ $index }}][impact]" required>{{ $story['impact'] }}</textarea><br>
                </div>
            @endforeach
        </div>

        <!-- Future Goals Section -->
        <div class="section">
            <h2>Future Goals</h2>
            <label for="impact[future_goals][title]">Future Goals Title:</label>
            <input type="text" name="impact[future_goals][title]" value="{{ $content['impact']['future_goals']['title'] }}" required><br>

            <label for="impact[future_goals][description]">Future Goals Description:</label>
            <textarea class="desc" name="impact[future_goals][description]" required>{{ $content['impact']['future_goals']['description'] }}</textarea><br>

            <h3>Goals</h3>
            @foreach ($content['impact']['future_goals']['goals'] as $index => $goal)
                <label for="impact[future_goals][goals][{{ $index }}]">Goal {{ $index + 1 }}:</label>
                <input type="text" name="impact[future_goals][goals][{{ $index }}]" value="{{ $goal }}" required><br>
            @endforeach
        </div>

        <button type="submit">Save Changes</button>
    </form>
@endsection
