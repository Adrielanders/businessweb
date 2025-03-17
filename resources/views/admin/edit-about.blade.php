@extends('layout.adminapp')

@section('title', 'Edit About Page')

@section('dashboard-title', 'Edit About Page Content')

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

    <form action="{{ route('admin.update-about') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        <label for="subtext">Subtext:</label>
        <input type="text" class="desc" name="subtext" value="{{ $content['subtext'] }}" required><br>

        <label for="story">Our Story:</label>
        <textarea name="story" class="desc" required>{{ $content['story'] }}</textarea><br>

        <label for="mission">Mission:</label>
        <textarea name="mission" class="desc" required>{{ $content['mission'] }}</textarea><br>

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
@endsection
