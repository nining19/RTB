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

@endsection

