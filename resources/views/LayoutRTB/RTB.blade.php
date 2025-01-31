<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/TutorBanten.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<style>
    .navbar-doa {
        background: linear-gradient(to right, #48ae4c, #017001);
    }
</style>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top {{ request()->routeIs('doa.index') ? 'navbar-doa' : '' }}">
        <div class="container" >
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
            {{-- <div class="d-flex justify-content-end mx-5">
                <a href="/login" class="btn btn-outline-light">Masuk</a>

            </div> --}}

            <div class="d-flex justify-content-end  mx-5">
                @if (Auth::check())
                    <a class="text-white fs-5 m-4" href="/profile">{{ Auth::user()->username }}</p>
                    <a href="{{ route('logout') }}" 
                       class="btn btn-outline-light m-4" 
                       style="height: 40px"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       Keluar
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-light">Masuk</a>
                @endif
            </div>
            
        </div>
    </nav>
</header>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
  
    <script>
        
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