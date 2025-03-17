@extends('layout.adminapp')

@section('title', 'Edit Page')

@section('dashboard-title', 'Edit Product Page Content')

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

        .service {
            margin-bottom: 25px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f7f7f7;
        }

        .service h3 {
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
    </style>
@endsection

@section('content')
<body>
  
    <a href="{{ url('admin') }}" class="btn btn-default">Back</a>

    <form action="{{ route('admin.update-services') }}" method="POST">
        @csrf
        <h2>General Information</h2>

        <!-- Title -->
        <label for="title">Page Title:</label>
        <input type="text" name="title" value="{{ $content['title'] }}" required><br>

        <!-- Heading -->
        <label for="heading">Page Heading:</label>
        <input type="text" name="heading" value="{{ $content['heading'] }}" required><br>

        <!-- Description -->
        <label for="description">Page Description:</label>
        <textarea name="description" class="desc" required>{{ $content['description'] }}</textarea><br>

        <h2>Services</h2>

        <!-- Loop through Services -->
        @foreach ($content['services'] as $index => $service)
        <div class="service">
            <h3>Service {{ $index + 1 }}</h3>

            <!-- Service Name -->
            <label for="services[{{ $index }}][name]">Service Name:</label>
            <input type="text" name="services[{{ $index }}][name]" value="{{ $service['name'] }}" required><br>

            <!-- Service Description -->
            <label for="services[{{ $index }}][description]">Service Description:</label>
            <textarea class="desc" name="services[{{ $index }}][description]" required>{{ $service['description'] }}</textarea><br>

            <!-- Service Image -->
            <label for="services[{{ $index }}][image]">Image URL:</label>
            <input type="text" name="services[{{ $index }}][image]" value="{{ $service['image'] }}" required><br>
        </div>
        @endforeach

        <button type="submit">Save Changes</button>
    </form>
</body>
@endsection
