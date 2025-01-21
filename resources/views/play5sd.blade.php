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
          src="https://www.youtube.com/embed/q_W3DZPv-tg?si=2tHRBzaqrJA-_Lxx"
          title="YouTube video player" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          allowfullscreen>
          
        </iframe>
    </div>

    
      <div class="title" style="display: flex; width: 83.2%; font-weight: 700; justify-content: space-between">
        <span style="font-size: 32px; float: left; text-align: left">Banten Sodan|| Banten Ajengan</span>
        <span class="heart" style="float: right; font-size:48px">&#10084;</span>
      </div>
    <hr style="width: 80%; margin: 0 auto;">

    <div class="container p-5">
      <div class="shadow card rounded-3 p-5" >
          <div class="">
           <div class="">
              <div class="card-body">
                <p class="card-text fs-4 text-justify">
                Banten Sodan dalam agama Hindu di Bali adalah persembahan yang diberikan dalam rangka upacara adat dan keagamaan. Banten ini umumnya berisi berbagai sesaji berupa buah-buahan, bunga, dan makanan sebagai bentuk penghormatan kepada Tuhan dan roh leluhur. Upacara ini dilakukan sebagai ungkapan rasa syukur, permohonan keselamatan, serta untuk menjaga keseimbangan alam dan kehidupan sosial masyarakat Bali sesuai dengan ajaran Tri Hita Karana.
              </p>
              </div>
           </div>
          </div>
      </div>
    </div>
    
</body>

@endsection