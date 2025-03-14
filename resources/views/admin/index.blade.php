<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CMS Editor Dashboard</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f7f9fc;
      margin: 0;
      padding: 0;
      position: relative;
    }
    .dashboard-container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    .dashboard-container h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }
    nav ul {
      display: flex;
      justify-content: center;
      gap: 20px;
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
    }
    nav ul li a {
      display: block;
      padding: 10px 20px;
      background-color: #1565c0;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    nav ul li a:hover {
      background-color: #0d47a1;
    }
    .logout-button {
      position: absolute;
      top: 20px;
      right: 20px;
      padding: 10px 20px;
      background-color: #d32f2f;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      text-align: center;
      transition: background-color 0.3s ease;
      border: none;
      cursor: pointer;
    }
    .logout-button:hover {
      background-color: #b71c1c;
    }
    @media(max-width: 768px) {
      nav ul {
        flex-direction: column;
        gap: 10px;
      }
      .logout-button {
        top: 10px;
        right: 10px;
        padding: 8px 16px;
      }
    }
  </style>
</head>
<body>


  <!-- Tombol Logout di luar container -->
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="logout-button">Logout</button>
  </form>

  <div class="dashboard-container">
    <h1>CMS Editor Dashboard</h1>
    
    <!-- Navigasi CMS -->
    <nav>
      <ul>
        <li><a href="{{ route('admin.edit-home') }}">Home</a></li>
        <li><a href="{{ route('admin.edit-about') }}">About</a></li>
        <li><a href="{{ route('admin.edit-services') }}">Product</a></li>
        <li><a href="{{ route('admin.edit-impact') }}">Impact</a></li>
        <li><a href="{{ route('admin.edit-involved') }}">Get Involved</a></li>
        <li><a href="{{ route('admin.edit-contact') }}">Contact</a></li>
      
     
      </ul>
    </nav>
  </div>
  
</body>
</html>
