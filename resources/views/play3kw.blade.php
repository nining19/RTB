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
        width="80%" 
        height="563" 
          src="https://www.youtube.com/embed/lY6FBRuzPPc?si=ul0vy5TzRfZRziym"
          title="YouTube video player" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          allowfullscreen>
          
        </iframe>
    </div>

    
      <div class="title" style="display: flex; width: 83.2%; font-weight: 700; justify-content: space-between">
        <span style="font-size: 32px; float: left; text-align: left">Cara membuat Kwangen dengan Sampian || Kuangen</span>
        <span class="heart" style="float: right; font-size:48px">&#10084;</span>
      </div>
    <hr style="width: 80%; margin: 0 auto;">

    <div class="container p-5">
      <div class="shadow card rounded-3 p-5" >
          <div class="">
           <div class="">
              <div class="card-body">
                <p class="card-text fs-4 text-justify">
                Kuangen Sari (Kwangen) adalah sarana upakara dalam agama Hindu Bali yang terbuat dari daun pisang berbentuk kerucut (kojong) berisi bunga dan beras yang dibungkus. Di bagian atasnya ditancapkan porosan (daun sirih yang dilipat dengan kapur dan pinang). Kwangen melambangkan stana atau tempat bersemayamnya Ida Sang Hyang Widhi Wasa dan para Dewa. Sarana ini digunakan sebagai simbol pemujaan dalam berbagai upacara keagamaan Hindu Bali.
              </p>
              </div>
           </div>
          </div>
      </div>
    </div>
    
</body>

@endsection