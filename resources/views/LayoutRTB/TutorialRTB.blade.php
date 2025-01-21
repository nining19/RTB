<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Banten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/TutorBanten.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
 
    <title>Halaman Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand " style="font-weight: 100" href="#">Road To Bhakti</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="nav mx-auto gap-5">
                        <li class="nav-item">
                            <a class="nav-link" href="/Road-to-bhakti/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tutorial-banten">Tutorial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/doa">Doa</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex justify-content-end mx-5">
                    <a href="#" class="btn btn-outline-light">Masuk</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-doa">
        @yield('content')
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

