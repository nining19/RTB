@extends('LayoutRTB.TutorialRTB')

{{-- @section('title', 'tutorial - Road to Bhakti') --}}

@section('content')
<title>Tutorial</title>

<div class="king container-fluid px-0">
    <header class="Hero text-white text-center p-4">
        <input type="text" class="search-bar form-control" placeholder="Search...">
    </header>
    <div class="section-1 container-fluid">
      <div class="row mb-3 ">
            <div class="col-4 px-0">
             <a href="/play-banten"><img href="{{asset('public/images/banten2.png')}}" alt="Canang" class="img-box image"></a>
            </div>
            <div class="col-6  justify-content-end">
                <h1>lorem</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum ad exercitationem, incidunt quasi beatae impedit sunt consequuntur est perferendis aperiam numquam reiciendis! Hic placeat magnam dolorem nisi quos perferendis perspiciatis?</p>
            </div>
    </div>
      <div class="row mb-3 ">
            <div class="col-3 px-0">
                <a href="#"><img src="sawah.jpg" alt="Canang" class="img-box image"></a>
            </div>
            <div class="col-6  justify-content-end">
                <h1>lorem</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum ad exercitationem, incidunt quasi beatae impedit sunt consequuntur est perferendis aperiam numquam reiciendis! Hic placeat magnam dolorem nisi quos perferendis perspiciatis?</p>
            </div>
    </div>
      <div class="row mb-4 ">
            <div class="col-3 px-0">
                <a href="#"><img src="sawah.jpg" alt="Canang" class="img-box image"></a>
            </div>
            <div class="col-6  justify-content-end">
                <h1>lorem</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum ad exercitationem, incidunt quasi beatae impedit sunt consequuntur est perferendis aperiam numquam reiciendis! Hic placeat magnam dolorem nisi quos perferendis perspiciatis?</p>
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

@endsection

{{-- 
<br/>
<br/>
<section class="section mt-5 d-flex justify-content-center align-items-center" style="min-height: 75;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="banner-container position-relative">
            <div class="featured-banner">
                <img src="{{ asset('images/banten2.png') }}" alt="Canang Sari" class="banner-image">
                <div class="banner-text text-center">
                    <h1 class="banner-title">CANANG SARI</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row-tutorial">
    <div class="row">

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
        
    </div>
</div> --}}