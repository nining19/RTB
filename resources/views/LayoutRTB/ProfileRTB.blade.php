<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Road to Bhakti')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- Tambahkan file CSS jika ada -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

        .navbar-vertical {
            display: flex;
            height: 100%;
            min-height: 100vh;
            width: 120px;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            row-gap: 2.5rem;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
        }

        .content-container {
            margin-left: 160px;
            width: 100%;
            max-width: calc(100vw - 200px);
            padding: 0;
            overflow: hidden;
        }

        .profile-header {
            background: linear-gradient(to right, #26CC4A 0%, #136625 100%);
            height: 60px;
            width: 100%;
        }

        .profile-greeting {
            display: flex;
            align-items: center;
            gap: 2rem;
            margin: 1rem 2rem;
        }

        .profile-container {
            padding: 2rem;
        }

        .profile-data {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logout {
            margin-left: 160px;
            width: 100%;
            max-width: calc(100vw - 200px);
            display: flex;
            justify-content: center;
        }

        .logout button {
            width: 75%;
            background-color: #0A591B;
            border-color: #0A591B;
            outline-color: #0A591B;
        }


        .edit-button {
            background-color: #041C09;
            outline-color:  #041C09;
            border-color: #041C09;
        }

        .hidden {
            visibility: hidden
        }

        .profile-email {
            margin-top: 40px;
        }

        .profile-email h6 {
            font-size: 1rem;
            font-weight: 600;
        }

        .profile-email .data {
            margin-top: 2rem;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .profile-email .icon {
            background-color: rgba(102, 216, 84, 0.5);
            border-radius: 50%;
            height: 48px;
            width: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-email .icon i {
            color: #66D854;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-vertical  ">
        <a href="{{ route('profile') }}">Profile</a>
        <a href="/tutorial-banten">Tutorial</a>
        <a href="/doa">Doa</a>
        <div style="float: right;">
            {{ Auth::user()->name ?? 'Guest' }}
        </div>
    </div>
    
    <div class="container content-container">
        @yield('content')
    </div>

    <form method="POST" action="{{ route('logout') }}" class="mt-4 logout">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Tambahkan file JS jika ada -->
</body>
</html>
