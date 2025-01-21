@extends('LayoutRTB.RTB')

@section('content')
<title>Beranda</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- section 1-->
<div class="hero">
    <div class="hero-overlay"></div>
       <div class="hero-content">
         <h1 class="display-4 fw-bold">ROAD TO BHAKTI</h1>
         <p class="lead">Terhubung setiap hari dan setiap waktu</p>
         <div class="search-bar">
           <input type="text" placeholder="Telusuri" />
           <button type="submit">
             <i class="bi bi-search"></i>
           </button>
         </div>
       </div>
     </div>

<!-- section 2 -->
<div class="container p-5">
  <div class="shadow card rounded-3 p-5" >
      <div class="row g-0">
       <div class="col-md-4">
          <img src="{{asset('images/LogoRTB.png')}}" class="img-fluid rounded-start " alt="Logo Road to Bhakti">
       </div>
       <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-text" id="text-1">Road to Bhakti</h5>
            <p class="card-text fs-4 text-justify">
            Proyek Road to Bhakti bertujuan untuk mengembangkan sistem yang menyediakan fitur tutorial pembuatan banten serta katalog doa persembahyangan dan doa sehari-hari, untuk membantu serta mendukung masyarakat umat Agama Hindu untuk memahami dan melestarikan budaya sekaligus memperkuat keterhubungan umat dengan Tuhannya, sebagai bentuk implementasi dari Tri Hitakarana, yaitu "Parahyangan".
          </p>
          </div>
       </div>
      </div>
  </div>
</div>

<!-- section 3 -->
<div class="container-fluid p-5" id="section3">
  <div class="row mb-5">
    <div class="col-md-12 text-center">
      <h2 class="text-light">Paling Populer</h2>
    </div>
  </div>
      <div class="container p-4 bg-light">
  <div class="row">
    <div class="col-md-4 p-5">
      <img src="{{asset('images/banten1.png')}}" class="img-fluid" alt="Gambar 1">
      <p class="text-center mt-4 fs-4 text-2">Kwangen melambangkan Ongkara atau aksara suci 'Om', yang merupakan manifestasi Tuhan dalam kehidupan.</p>
    </div>
    <div class="col-md-4 p-5">
      <img src="{{asset('images/banten2.png')}}" class="img-fluid" alt="Gambar 2">
      <p class="text-center mt-4 fs-4 text-2">Canang Sari secara harfiah bermakna sebagai persembahan yang indah dengan tujuan atau maksud yang mendalam.</p>
    </div>
    <div class="col-md-4 p-5">
      <img src="{{asset('images/banten3.png')}}" class="img-fluid" alt="Gambar 3">
      <p class="text-center mt-4 fs-4 text-2">daksina merupakan sesajen yang dibuat untuk tujuan kesaksian spiritual. Daksina disebut sebagai lambang Hyang Guru (Dewa Siwa)</p>
    </div>
    </div>
  </div>
</div>

<!-- section 4 -->
<div class="container-fluid p-5" style="background: url('{{ asset('images/sawah.jpg') }}') no-repeat center center; background-size: cover;">
  <div class="row mb-4">
    <div class="col-md-12 text-center">
      <h2 class="text-dark">Kumpulan Tutorial Banten Kami</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{ asset('images/banten1.png') }}" class="card-img-top" alt="Canang Sari">
          <div class="card-body text-center">
            <a href="/play-banten"><button class="btn btn-danger rounded-circle">▶</button></a>
            <p class="mt-1">Kwangen</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{ asset('images/banten2.png') }}" class="card-img-top" alt="Kwangen">
          <div class="card-body text-center">
            <button class="btn btn-danger rounded-circle">▶</button>
            <p class="mt-1">Canang Sari</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{ asset('images/banten3.png') }}" class="card-img-top" alt="Daksina">
          <div class="card-body text-center">
            <button class="btn btn-danger rounded-circle">▶</button>
            <p class="mt-1">Daksina</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{ asset('images/banten4.png') }}" class="card-img-top" alt="Canang User">
          <div class="card-body text-center">
            <button class="btn btn-danger rounded-circle">▶</button>
            <p class="mt-1">Pejati</p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="#" class="btn btn-success">Lebih banyak >></a>
    </div>
  </div>
</div>

<!-- section 5 -->
<div class="container-fluid p-5 bg-success">
  <div class="row mb-4">
    <div class="col-md-12 text-center">
      <h2 class="text-white">Kumpulan Doa</h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-success">DOA SEBELUM TIDUR</h5>
            <button class="btn btn-success rounded-pill w-100">Lihat Detail</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-success">DOA SEBELUM MAKAN</h5>
            <button class="btn btn-success rounded-pill w-100">Lihat Detail</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-success">SEMBAH PUYUNG</h5>
            <button class="btn btn-success rounded-pill w-100">Lihat Detail</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <h5 class="card-title text-success">DOA KELUAR RUMAH</h5>
            <button class="btn btn-success rounded-pill w-100">Lihat Detail</button>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
      <button class="btn btn-dark">Lebih banyak >></button>
    </div>
  </div>
</div>

<!-- section 6 -->
<div class="container-fluid">
  <div class="row py-5 bg-white">
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/logoRTBhijau.png') }}" alt="Road To Bhakti Logo" class="img-fluid" style="max-width: 200px;">
    </div>
    <div class="col-md-4 text-center">
      <h3 class="text-success" id="text-1">Road to Bhakti</h3>
      <p class="text">Terhubung setiap hari<br>dan setiap waktu</p>
    </div>
    <div class="col-md-4 text-center">
      <h4 class="text-success fw-bold">Berhubungan Dengan Kami</h4>
      <ul class="social-media list-unstyled text-center mt-3">
        <li>
          <span class="icon"><i class="fa-brands fa-instagram"></i></span>
          <span class="text">roadtobhakti</span>
        </li>
        <li>
          <span class="icon"><i class="fa-brands fa-facebook"></i></span>
          <span class="text">info@roadtobhakti.com</span>
        </li>
        <li>
          <span class="icon"><i class="fa-brands fa-twitter"></i></span>
          <span class="text">RoadToBhakti</span>
        </li>
      </ul>
    </div>
  </div>
  <div class="row bg-dark py-2">
    <div class="col-12 text-center">
      <p class="text-white mb-0">© 2025 Road To Bhakti</p>
    </div>
  </div>
</div>
@endsection

