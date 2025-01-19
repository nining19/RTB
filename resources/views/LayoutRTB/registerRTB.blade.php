<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Road to Bhakti</title>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset("images/register_image.png") }}') no-repeat center center/cover;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative; 
            color: white;
            overflow: hidden;
            }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5); 
            z-index: 1; 
            }

        .container {
            position: relative;
            z-index: 2; 
            background: rgba(0, 0, 0, 0.6); 
            padding: 60px;
            border-radius: 20px;
            text-align: center;
            width: 50%;
            max-width: 400px;
            color: white;
            }

        h1 {
            font-family: 'Allura', cursive;
            font-size: 3.5rem;
            color: #00611c;
            margin-bottom: 10px;
            text-shadow: 
                0 0 5px #c7fcd7, 
                0 0 10px #72be89, 
                0 0 15px #74b385;

            }

        h2 {
            font-size: 1.6rem;
            color: #daffe5;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 7px 0;
            border: none;
            border-radius: 4px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        a {
            text-align: left;
            color: #f8f9fa;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Road To Bhakti</h1>
        <h2>Daftar</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
             <p><a href="{{ route('login') }}">Sudah punya akun?</a></p>
             
             <button type="submit">Daftar</button>
        </form>
       
    </div>
</body>
</html>
