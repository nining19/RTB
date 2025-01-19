@extends('LayoutRTB.RTB')

@section('title', 'tutorial - Road to Bhakti')

@section('content')

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
</div>
@endsection