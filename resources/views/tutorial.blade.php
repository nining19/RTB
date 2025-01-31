@extends('LayoutRTB.RTB')

{{-- @section('title', 'tutorial - Road to Bhakti') --}}

@section('content')
<title>Tutorial</title>

<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">

<div class="king container-fluid px-0">
    <header class="Hero text-white text-center p-4">
        <br>
        <br>
        <br>
        <input type="text" class="search-bar form-control" style="background-color: #ffff; opacity: 80%;" placeholder="Search...">
    </header>
    <div class="section-1 container-fluid">
      <div class="row mb-3 ">
            <div class="col-4 px-0 me-5">
             <a href="{{ url('/play/play1cs') }}"><img src="{{asset('images/banten2.png')}}" alt="Canang" class="img-box image"></a>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center">
                <h1 style="font-family: 'Noto Serif', serif;">CANANG SARI</h1>
                <br>
                <p>Canang Sari adalah persembahan harian umat Hindu Bali yang dibuat dari daun kelapa muda (janur) berbentuk wadah kecil. Canang Sari merupakan wujud bhakti dan terima kasih kepada Sang Hyang Widhi Wasa
                </p>
            </div>
        </div>



        <div class=" container-fluid py-5">
        <div class="row mb-4 p-4 ">
            <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play2pj') }}">
                        <img src="{{ asset('images/banten4.png') }}" class="card-img-top" alt="Banten Pejati">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">BANTEN PEJATI</h4>
                        <p class="card-text">Banten Pejati adalah sesaji dalam agama Hindu yang biasanya digunakan dalam upacara pemujaan di Bali. Banten Pejati bertujuan untuk menghormati Tuhan, memohon berkah, serta menjaga keharmonisan hubungan manusia dengan alam dan sesama.</p>
                    </div>
                </div>
            </div>
            <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play3kw') }}">
                        <img src="{{ asset('images/banten1.png') }}" class="card-img-top" alt="Kwangen">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">KWANGEN</h4>
                        <p class="card-text">Kwangen Sari adalah sarana upakara dalam agama Hindu Bali yang terbuat dari daun pisang berbentuk kerucut (kojong) berisi bunga dan beras yang dibungkus. Sarana ini digunakan sebagai simbol pemujaan dalam berbagai upacara keagamaan Hindu Bali.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play4dk') }}">
                        <img src="{{ asset('images/banten3.png') }}" class="card-img-top" alt="Daksina">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">DAKSINA</h4>
                        <p class="card-text">Daksina merupakan salah satu jenis banten penting dalam upacara Hindu Bali yang melambangkan stana atau tempat duduk Ida Sang Hyang Widhi Wasa. Banten ini wajib hadir dalam setiap upacara yadnya sebagai simbol kehadiran Tuhan dan para Dewa.</p>
                    </div>
                </div>
             </div>  

             <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play5sd') }}">
                        <img src="{{ asset('images/Banten Sodan.png') }}" class="card-img-top" alt="Banten Sodan">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">BANTEN SODA</h4>
                        <p class="card-text">Banten Sodan dalam agama Hindu di Bali adalah persembahan yang diberikan dalam rangka upacara adat dan keagamaan. Upacara ini dilakukan sebagai ungkapan rasa syukur, permohonan keselamatan, serta untuk menjaga keseimbangan alam dan kehidupan sosial masyarakat Bali sesuai dengan ajaran Tri Hita Karana.</p>
                    </div>
                </div>
             </div>

             <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play6jr') }}">
                        <img src="{{ asset('images/wakul jerimpen.png') }}" class="card-img-top" alt="Wakul Jerimpen">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">WAKUL JERIMPEN</h4>
                        <p class="card-text">Banten Sodan dalam agama Hindu di Bali adalah persembahan yang diberikan dalam rangka upacara adat dan keagamaan. Upacara ini dilakukan sebagai ungkapan rasa syukur, permohonan keselamatan, serta untuk menjaga keseimbangan alam dan kehidupan sosial masyarakat Bali sesuai dengan ajaran Tri Hita Karana.</p>
                    </div>
                </div>
             </div>  

             <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play7pr') }}">
                        <img src="{{ asset('images/porosan.png') }}" class="card-img-top" alt="Porosan">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">POROSAN</h4>
                        <p class="card-text">Porosan adalah sarana persembahan penting dalam ritual Hindu Bali, terdiri dari daun sirih (base), kapur sirih (pamor), dan buah pinang (buah. Banten ini merupakan elemen penting dalam upacara keagamaan Hindu Bali.</p>
                    </div>
                </div>
             </div>

             <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play8py') }}">
                        <img src="{{ asset('images/Banten Prayascita.png') }}" class="card-img-top" alt="Prayascita">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">BANTEN PRAYASCITA</h4>
                        <p class="card-text">Banten Prayascita adalah sesaji dalam agama Hindu yang digunakan dalam upacara untuk memohon pembersihan atau pengampunan dosa. Biasanya dilakukan sebagai bentuk pertobatan atau perbaikan diri setelah melakukan kesalahan.</p>
                    </div>
                </div>
             </div>

             <div class="col-8 col-md-4 py-4">
                <div class="card h-100">
                    <a href="{{ url('/play/play9bjr') }}">
                        <img src="{{ asset('images/Banten Jerimpen.png') }}" class="card-img-top" alt="Prayascita">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">BANTEN JERIMPEN</h4>
                        <p class="card-text">Banten Jerimpen adalah jenis sesajen atau banten dalam upacara Hindu Bali yang disusun dalam bentuk tingkatan (tumpeng). Sajian ini biasanya diletakkan di tempat suci dan digunakan dalam berbagai upacara keagamaan seperti odalan atau hari raya.</p>
                    </div>
                </div>
             </div>

             <div class="col-8 col-md-4 p-4 ">
                <div class="card h-100">
                    <a href="{{ url('/play/play10smpy') }}">
                        <img src="{{ asset('images/sampian.png') }}" class="card-img-top" alt="Sampian">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Noto Serif', serif;">SAMPIAN</h4>
                        <p class="card-text">Sampian adalah salah satu jenis perlengkapan dalam tradisi upacara keagamaan Hindu Bali. Sampian biasanya digunakan sebagai elemen dekoratif untuk mempercantik tampilan persembahan dan melambangkan keindahan, kesucian, serta rasa hormat kepada Ida Sang Hyang Widhi Wasa (Tuhan Yang Maha Esa).</p>
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

