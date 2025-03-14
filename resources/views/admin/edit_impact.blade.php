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
  <title>Edit Impact Page</title>
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
      .section {
          margin-bottom: 30px;
          padding-bottom: 10px;
          border-bottom: 1px solid #e0e0e0;
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
  <h1>Edit Impact Page Content</h1>
  <a href="{{ url('admin') }}" class ="btn btn-default">back</a>

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
      <textarea class = "desc" name="impact[description]" required>{{ $content['impact']['description'] }}</textarea><br>
    </div>

    <!-- Reach Section -->
    <div class="section">
      <h2>Our Reach</h2>
      <label for="impact[reach][title]">Reach Title:</label>
      <input type="text" name="impact[reach][title]" value="{{ $content['impact']['reach']['title'] }}" required><br>

      <label for="impact[reach][description]">Reach Description:</label>
      <textarea class = "desc" name="impact[reach][description]" required>{{ $content['impact']['reach']['description'] }}</textarea><br>

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
      <textarea class = "desc"name="impact[success_stories][description]" required>{{ $content['impact']['success_stories']['description'] }}</textarea><br>

      @foreach ($content['impact']['success_stories']['stories'] as $index => $story)
      <div class="section">
        <h3>Story {{ $index + 1 }}</h3>
        <label for="impact[success_stories][stories][{{ $index }}][name]">Name:</label>
        <input type="text" name="impact[success_stories][stories][{{ $index }}][name]" value="{{ $story['name'] }}" required><br>

        <label for="impact[success_stories][stories][{{ $index }}][location]">Location:</label>
        <input type="text" name="impact[success_stories][stories][{{ $index }}][location]" value="{{ $story['location'] }}" required><br>

        <label for="impact[success_stories][stories][{{ $index }}][impact]">Impact Description:</label>
        <textarea class = "desc" name="impact[success_stories][stories][{{ $index }}][impact]" required>{{ $story['impact'] }}</textarea><br>
      </div>
      @endforeach
    </div>

    <!-- Future Goals Section -->
    <div class="section">
      <h2>Future Goals</h2>
      <label for="impact[future_goals][title]">Future Goals Title:</label>
      <input type="text" name="impact[future_goals][title]" value="{{ $content['impact']['future_goals']['title'] }}" required><br>

      <label for="impact[future_goals][description]">Future Goals Description:</label>
      <textarea class = "desc" name="impact[future_goals][description]" required>{{ $content['impact']['future_goals']['description'] }}</textarea><br>

      <h3>Goals</h3>
      @foreach ($content['impact']['future_goals']['goals'] as $index => $goal)
      <label for="impact[future_goals][goals][{{ $index }}]">Goal {{ $index + 1 }}:</label>
      <input type="text" name="impact[future_goals][goals][{{ $index }}]" value="{{ $goal }}" required><br>
      @endforeach
    </div>

    <button type="submit">Save Changes</button>
  </form>
</body>
</html>
