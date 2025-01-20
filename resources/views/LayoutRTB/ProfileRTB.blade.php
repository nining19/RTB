<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Road to Bhakti')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Tambahkan file CSS jika ada -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .navbar {
            background-color: #006400;
            color: white;
            padding: 1rem;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 1rem;
        }
        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('profile') }}">Profile</a>
        <a href="#">Tutorial</a>
        <a href="#">Doa</a>
        <div style="float: right;">
            {{ Auth::user()->name ?? 'Guest' }}
        </div>
    </div>
    
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Tambahkan file JS jika ada -->
</body>
</html>
