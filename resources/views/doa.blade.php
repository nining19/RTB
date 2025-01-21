@extends('LayoutRTB.RTB')

@section('title', 'Doa - Road to Bhakti')

@section('content')
<title>DOA</title>
<br/>
<br/>
<br/>
<br/>
<section class="section mt-5">
    <h2 style="text-align: center">Panca Sembah</h2>
    <div class="button-list">
        <button onclick="showDetail('Sembah Puyung (Pembuka)', 'Om Atma Tattwatma Suddhamam Swaha', 'Om, jiwa ini adalah esensi dari Yang Mahasuci. Semoga disucikan. Svaha.', 'sembah_puyung.mp3')">Sembah Puyung</button>
        <button onclick="showDetail('Sembah Pertama (Surya)', 'Om Adityasyaparam Jyoti, Rakta Teja Namo Stute Sweta Pankaja Madyasthe Bhaskarya Namo Stute', 'Om, kepada cahaya agung Aditya (Dewa Surya), Yang memiliki sinar merah yang penuh kemuliaan, aku menghormati-Mu. Yang berada di tengah-tengah teratai putih, Kepada Bhaskara (Dewa Matahari), aku memberikan hormat.', 'sembah_pertama.mp3')">Sembah Pertama (Surya)</button>
        <button onclick="showDetail('Sembah Kedua (Ista Dewata)', 'Om Nama Dewa Adhisthanaya Sarwa Wyapi Waisiwaya Padamasnana Eka Prastisthanaya Ardhanarareswaryai Namah Namah', 'Om, hormat kepada Dewa yang menjadi landasan, Yang hadir di seluruh penjuru alam semesta, Yang bertahta di atas padma suci, Kepada Ardhanarishwara (manifestasi Tuhan sebagai penyatuan Siwa dan Parwati), aku menghormati-Mu.', 'sembah_kedua.mp3')">Sembah Kedua (Ista Dewata)</button>
        <button onclick="showDetail('Sembah Ketiga (Meminta Anugerah)', 'Om Anugraha Manohara Dewadattanugrahaka, Ancanam Sarwa Punjanam Namah Sarwanugrahaka, Dewa Dewi Maha Sidi Yajnaga Nirmalat Maka Laksmu Siddhisca Dirghayau, Nirwighna Surkha Wrddhisca', 'Om, anugerah yang menawan hati, Yang diberikan oleh para dewa sebagai berkah, Yang menjadi persembahan dan penghormatan atas segala keagungan, Hormat kepada para dewa yang memberikan anugerah besar, Dewa dan Dewi yang penuh kesempurnaan dalam yajna yang suci. Semoga keberuntungan, kesuksesan, umur panjang, Kehidupan tanpa rintangan, dan kesejahteraan berlimpah.', 'sembah_ketiga.mp3')">Sembah Ketiga (Meminta Anugerah)</button>
        <button onclick="showDetail('Sembah Puyung (Penutup)', 'Om Dewa Suksuma Paramaancitinya Ya Namah Swaha Om Shanti Shanti Shanti Om', 'Om, kepada Dewa yang halus dan tak terpikirkan, aku berserah. Svaha. Om, semoga damai di hati, damai di bumi, dan damai di alam semesta.', 'sembah_penutup.mp3')">Sembah Puyung (Penutup)</button>
    </div>
</section>
    </div>
</section>

<section class="section">
    <h2 style="text-align: center">Doa Sehari-hari</h2>
    <div class="button-list">
        <button onclick="showDetail('Doa Bangun Tidur', 'Om Jagrasca Prabhata kalasca ya Namo Namah svaha Om utedanim Bhagawantah syamota Prapitwa uta mandhye ahnam utodita maghawanta suryasya wayam dewanam sumantau svama', 'Om, kepada pagi dan siang yang penuh kesadaran, kami mengucapkan hormat. Terimalah persembahan ini, Svaha. Om, semoga kita menjadi diberkahi saat ini. Baik ketika kita telah mencapai puncak hari, di tengah hari, atau saat matahari terbit, semoga kita selalu disertai oleh para dewa dan kebajikan mereka.', 'doa_bangun_tidur.mp3')">Doa Bangun Tidur</button>
        <button onclick="showDetail('Doa Sebelum Mandi', 'Om Apah Punantu Prithivim Prithivi Putu Mam Punantu, Antariksham Punatu Mam.', 'Om, semoga air ini menyucikan bumi, dan bumi menyucikan diriku. Semoga udara juga menyucikan diriku.', 'doa_sebelum_mandi.mp3')">Doa Sebelum Mandi</button>
        <button onclick="showDetail('Doa Sebelum Tidur', 'Om Ananta Utpalaksaya Namah Svaha.', 'Om, salam hormat kepada Yang Mahakuasa, yang tak terbatas dan memiliki penglihatan suci. Svaha.', 'doa_sebelum_tidur.mp3')">Doa Sebelum Tidur</button>
        <button onclick="showDetail('Doa Sebelum Makan', 'Om Pranaya Swaha, Apanaya Swaha, Vyanaya Swaha, Udanaya Swaha, Samanaya Swaha.', 'Om, salam kepada energi kehidupan (prana), energi makanan (apana), energi penyebaran (vyana), energi naik (udana), dan energi penyeimbang (samana).', 'doa_sebelum_makan.mp3')">Doa Sebelum Makan</button>
        <button onclick="showDetail('Doa Keluar Rumah', 'Om Atma Tattwaya Namah Svaha.', 'Om, salam hormat kepada jiwa dan kebenaran ilahi. Svaha.', 'doa_keluar_rumah.mp3')">Doa Keluar Rumah</button>
    </div>
</section>

<!-- Popup -->
<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-button" onclick="closePopup()">&times;</span>
        <h2 id="popup-title">Judul Doa</h2>
        <p id="popup-text">Teks doa akan muncul di sini.</p>
        <h3 id="popup-title">TERJEMAHAN</h3>
        <p id="popup-translation">Terjemahan doa akan muncul di sini.</p>
        <audio id="popup-audio" controls>
            <source id="popup-audio-source" src="" type="audio/mpeg">
            Browser Anda tidak mendukung audio.
        </audio>
    </div>
</div>

@endsection
<script>
    function showDetail(title, text, translation, audioFile) {
        // Mengubah judul popup
        document.getElementById('popup-title').innerText = title;

        // Mengubah teks doa di popup
        document.getElementById('popup-text').innerText = text;

        // Mengubah terjemahan doa di popup
        document.getElementById('popup-translation').innerText = translation;

        // Mengubah sumber audio di popup
        var audioPath = '{{ asset("audio/") }}' + '/' + audioFile; // Use Laravel's asset helper function

        document.getElementById('popup-audio-source').src = audioPath;
        
        // Mengaktifkan elemen audio untuk dimainkan
        document.getElementById('popup-audio').load();
        
        // Menampilkan popup
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        // Menutup popup
        document.getElementById('popup').style.display = 'none';
    }
</script>



<style>
    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 600px;
        padding: 20px;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    .popup-content {
        position: relative;
        text-align: center;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
        color: #000;
        background-color: transparent;
        border: none;
    }

    .close-button:hover {
        color: red;
    }

    
</style>