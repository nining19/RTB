<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Banten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 80px; 
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand " href="#">Road To Bhakti</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="nav mx-auto gap-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tutorial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Doa</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-outline-light">Masuk</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="custom-search-bar">
            <form action="{{ route('search') }}" method="GET" class="d-flex align-items-center">
              <input type="text" name="query" class="form-control" placeholder="Telusuri">
              <button type="submit" class="btn btn-success">
                <i class="bi bi-search"></i>
              </button>
            </form>
          </div>
          
          <div class="featured-banner">
            <img src="{{ asset('images/banten2.png') }}" alt="Canang Sari" class="banner-image">
            <div class="banner-overlay">
              <h1 class="banner-title">CANANG SARI</h1>
            </div>
          </div>
          
          <div class="container">
          
            <div class="row">
          
            <div class="row-tutorial">
          
              <!-- Card  -->
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten1.png') }}" class="card-img-top" alt="Canang Sari">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Canang Sari</p>
                  </div>
                </div>
              </div>
          
            
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten2.png') }}" class="card-img-top" alt="Kwangen">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Kwangen</p>
                  </div>
                </div>
              </div>
          
              
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten3.png') }}" class="card-img-top" alt="Daksina">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Daksina</p>
                  </div>
                </div>
              </div>
          
          
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten1.png') }}" class="card-img-top" alt="Canang User">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Canang User</p>
                  </div>
                </div>
              </div>
            </div>
          
          
            <div class="row">
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten2.png') }}" class="card-img-top" alt="Canang User">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Canang User</p>
                  </div>
                </div>
              </div>
          
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten3.png') }}" class="card-img-top" alt="Canang User">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Canang User</p>
                  </div>
                </div>
              </div>
          
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten3.png') }}" class="card-img-top" alt="Canang User">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Canang User</p>
                  </div>
                </div>
              </div>
          
              <div class="col-md-3 mb-4">
                <div class="card">
                  <img src="{{ asset('images/banten1.png') }}" class="card-img-top" alt="Canang User">
                  <div class="card-body text-center">
                    <button class="btn btn-danger rounded-circle">▶</button>
                    <p class="mt-3">Canang User</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <script>
        // Change navbar background on scroll
        window.addEventListener("scroll", function () {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });
    </script>
</body>
</html>
