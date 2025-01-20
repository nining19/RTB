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
      margin: 0 auto;
      text-align: center;
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
    
    .content {
      background-color: #f2f2f2;
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
    }
    
    .content p {
      font-size: 16px;
      line-height: 1.5;
      text-align: left;
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
    <div class="title">
      <h1>Cara membuat Canang Sari Bulan</h1>
      <span class="heart">&#10084;</span>
    
      <div class="content">
        <p>Canang Sari adalah persembahan harian umat Hindu Bali yang dibuat dari daun kelapa muda (janur) berbentuk wadah kecil. Di dalamnya berisi bunga dengan empat warna yang memiliki makna berbeda: putih (timur/lswara), merah (selatan/Brahma), kuning (barat/Mahadewa), dan biru/ungu (utara/Wisnu).</p>
        <p>Dilengkapi dengan porosan (sirih, kapur, pinang) sebagai simbol Tri Murti. Canang Sari merupakan wujud bhakti dan terima kasih kepada Sang Hyang Widhi Wasa</p>
      </div>
    </body>
  </div>

@endsection