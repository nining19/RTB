@extends('LayoutRTB.RTB')

@section('content')

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
            <h5 class="card-title" id="text-1">Road to Bhakti</h5>
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

@endsection

