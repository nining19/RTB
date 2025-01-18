@extends('LayoutRTB.TutorialRTB')

@section('content')

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