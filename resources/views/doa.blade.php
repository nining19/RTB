@extends('LayoutRTB.RTB')

@section('title', 'Doa - Road to Bhakti')

@section('content')
<title>DOA</title>
<br/>
<br/>
<section class="section mt-5">
    <h2>Panca Sembah</h2>
    <div class="button-list">
        <button onclick="showDetail('sembahPuyung')">Sembah Puyung</button>
        <button onclick="showDetail('sembahPertama')">Sembah Pertama (Surya)</button>
        <button onclick="showDetail('sembahKedua')">Sembah Kedua (Ista Dewata)</button>
        <button onclick="showDetail('sembahKetiga')">Sembah Ketiga (Meminta Anugrah)</button>
        <button onclick="showDetail('sembahPenutup')">Sembah Puyung (Penutup)</button>
    </div>
</section>

<section class="section">
    <h2>Doa Sehari-hari</h2>
    <div class="button-list">
        <button onclick="showDetail('doaBangunTidur')">Doa Bangun Tidur</button>
        <button onclick="showDetail('doaSebelumMandi')">Doa Sebelum Mandi</button>
        <button onclick="showDetail('doaSebelumTidur')">Doa Sebelum Tidur</button>
        <button onclick="showDetail('doaSebelumMakan')">Doa Sebelum Makan</button>
        <button onclick="showDetail('doaKeluarRumah')">Doa Keluar Rumah</button>
    </div>
</section>
@endsection
