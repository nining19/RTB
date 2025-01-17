<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <title>Beranda</title>
    </head>
    <style>
        body {
        background-color: #f9f9f9;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        }

        .container {
        max-width: 1200px;
        margin: 0 auto;
        }

    
        .custom-search-bar {
        margin-bottom: 20px;
        }

        .custom-search-bar input[type="text"] {
        border-radius: 5px 0 0 5px;
        border: 1px solid #ccc;
        padding: 10px;
        flex-grow: 1;
        }

        .custom-search-bar button {
        border-radius: 0 5px 5px 0;
        border: none;
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        cursor: pointer;
        }

        .custom-search-bar button:hover {
        background-color: #218838;
        }

        .featured-banner {
        position: relative;
        margin-bottom: 20px;
        border-radius: 10px;
        overflow: hidden;
        }

        .featured-banner .banner-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        }

        .featured-banner .banner-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        }

        .featured-banner .banner-title {
        color: white;
        font-size: 32px;
        font-weight: bold;
        text-align: center;
        }

        .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        }

        .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        max-width: 250px;
        }

        .card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        }

        .card-body {
        padding: 10px;
        text-align: center;
        background-color: white;
        }

        .card-body .btn {
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 16px;
        line-height: 40px;
        }

        .card-body p {
        margin-top: 10px;
        font-size: 14px;
        font-weight: bold;
        color: #333;
        }

        @media (max-width: 768px) {
        .featured-banner .banner-image {
            height: 200px;
        }

        .card img {
            height: 120px;
        }
                                }

    </style>
</html>    
