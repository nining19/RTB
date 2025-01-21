@extends('LayoutRTB.play')

@section('content')
<title>Play-Banten</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<head>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

    <style>
    body {
      font-family: sans-serif;
    }
    
    .title {
      width: 500px;
      margin: 50px auto;
      text-align: left;
      padding: 20px;
    }
    
    h1 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .heart {
      color: red;
      font-size: 30px;
      display: inline-block;
      margin-top: 10px;
    }
    
    /* .content {
      /* background: linear-gradient(to bottom, #eceaea, #d2d2d2); 
      background: rgba(233, 233, 233, 0.553);
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
      width="1000" 
      height="563" 
    } */
    
    /* .content p {
      font-size: 16px;
      line-height: 1.5;
      text-align: left;
    } */

    .card {
      border-radius: 15px;
      overflow: hidden;
      border: none;
      box-shadow: 0 4px 15px rgba(183, 20, 20, 0.1);
      margin: 0.5rem auto;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    </style>
</head>

<body>
    {{-- VID --}}
    <div class="d-flex justify-content-center">
        <iframe 
        {{-- width="800" 
        height="450"  --}}
        width="1000" 
        height="563" 
          src="https://www.youtube.com/embed/dMMKA1lkRBM" 
          title="YouTube video player" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          allowfullscreen>
          
        </iframe>
    </div>

    {{-- DESKRIPSI --}}
    {{-- <div class="title">
      <h1>Cara membuat Canang Sari Bulan</h1>
      <span class="heart">&#10084;</span>
    
      <div class="content">
        <p>Canang Sari adalah persembahan harian umat Hindu Bali yang dibuat dari daun kelapa muda (janur) berbentuk wadah kecil. Di dalamnya berisi bunga dengan empat warna yang memiliki makna berbeda: putih (timur/lswara), merah (selatan/Brahma), kuning (barat/Mahadewa), dan biru/ungu (utara/Wisnu).</p>
        <p>Dilengkapi dengan porosan (sirih, kapur, pinang) sebagai simbol Tri Murti. Canang Sari merupakan wujud bhakti dan terima kasih kepada Sang Hyang Widhi Wasa</p>
      </div>
    </div> --}}

    
      <div class="title">
        <h1>Cara membuat Canang Sari Bulan</h1>
        <span class="heart">&#10084;</span>
      </div>
    

    <div class="container p-5">
      <div class="shadow card rounded-3 p-5" >
          <div class="row g-0">
           {{-- <div class="col-md-4">
              {{-- <img src="{{asset('images/LogoRTB.png')}}" class="img-fluid rounded-start " alt="Logo Road to Bhakti"> 
           </div> --}}
           <div class="col-md-9">
              <div class="card-body">
                <p class="card-text fs-4 text-justify">
                Proyek Road to Bhakti bertujuan untuk mengembangkan sistem yang menyediakan fitur tutorial pembuatan banten serta katalog doa persembahyangan dan doa sehari-hari, untuk membantu serta mendukung masyarakat umat Agama Hindu untuk memahami dan melestarikan budaya sekaligus memperkuat keterhubungan umat dengan Tuhannya, sebagai bentuk implementasi dari Tri Hitakarana, yaitu "Parahyangan".
              </p>
              </div>
           </div>
          </div>
      </div>
    </div>




</body>

@endsection