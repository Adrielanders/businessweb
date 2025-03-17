<!-- resources/views/layouts/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('scripts')
    <!-- You can add page-specific scripts here -->
    <script src="{{ asset('JS\jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('JS\jquery-3.6.0.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/4u4i7mnntdjp35mdep6ufxqimmcy8vkyo8d82hp0f2xic1ag/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
   
    <script>
        tinymce.init({
            selector: '.desc'
        });
    </script>
    @endsection
    <title>@yield('title', 'CMS Editor Dashboard')</title>
    <link href="{{ asset('css\googleapis.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #1565c0;
            padding: 20px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 20px;
        }

        .sidebar ul li a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            background-color: #1565c0;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .sidebar ul li a:hover {
            background-color: #0d47a1;
        }

        .logout-form {
            margin-top: 20px;
        }

        .logout-button {
            width: 100%;
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .logout-button:hover {
            background-color: #c0392b;
        }

        .content-container {
            margin-left: 270px;
            padding: 40px;
            background-color: #fff;
            width: calc(100% - 250px);
            overflow-y: auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }
    </style>
    @yield('styles') <
        </head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="{{ route('admin.edit-home') }}">Home</a></li>
            <li><a href="{{ route('admin.edit-about') }}">About</a></li>
            <li><a href="{{ route('admin.edit-services') }}">Product</a></li>
            <li><a href="{{ route('admin.edit-impact') }}">Impact</a></li>
            <li><a href="{{ route('admin.edit-involved') }}">Get Involved</a></li>
            <li><a href="{{ route('admin.edit-contact') }}">Contact</a></li>
            <li>
                <!-- <form method="POST" class="logout-form" action="{{ route('logout') }}"> -->

                <button type="submit" class="logout-button">Logout</button>
                <!-- </form> -->
            </li>
        </ul>

        <!-- Logout Button -->

    </div>

    <!-- Content Area -->
    <div class="content-container">
        <h1>@yield('dashboard-title', 'CMS Editor Dashboard')</h1>

        <!-- Main Content -->
        <div>
            @yield('content')
        </div>
    </div>

    <!-- TinyMCE Script -->
    <script src="https://cdn.tiny.cloud/1/4u4i7mnntdjp35mdep6ufxqimmcy8vkyo8d82hp0f2xic1ag/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    @yield('scripts') <!-- Section for additional scripts -->

    <script>
        $(document).ready(function() {
            $(".logout-button").click(function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('logout') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    success: function(response) {
                        alert("Data berhasil dikirim: " + response.message);
                        window.location.href = "{{ route('login') }}";
                    },
                    error: function(xhr, status, error) {
                        alert("Terjadi kesalahan: " + xhr.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>