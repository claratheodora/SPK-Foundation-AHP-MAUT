<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>
    <section class="content">
        <h2 class="ui header">Cara Menggunakan</h2>
        <div class="list-group">
            <a href="kriteria.php" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Kriteria</h5>
                </div>
                <p class="mb-1">Menu ini menampilkan apa saja kriteria yang digunakan dalam perhitungan rekomendasi foundation.</p>
            </a>
            <a href="alternatif.php" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Alternatif</h5>
                </div>
                <p class="mb-1">Menu alternatif menampilkan detail foundation seperti nama, gambar dan nilai-nilai kriteria.</p>
                <small class="text-muted">Terdapat 35 foundation yang digunakan dalam perhitungan.</small>
            </a>
            <a href="bobot_kriteria.php" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Perbandingan Kriteria</h5>
                </div>
                <p class="mb-1">Langkah awal untuk menghasilkan rekomendasi foundation adalah melalui perbandingan kriteria.<br>
                Pilih kriteria yang diangap lebih penting dari 2 kriteria yang dibandingkan dan tentukan nilai seberapa penting kriteria tersebut menggunakan tabel Saaty.</p>
                <img src="screenshot/bobot.png" alt="bobot kriteria" width="500" height="400">
                <p>Kemudian klik lanjut, dan masuk ke halaman proses yang menampilkan perhitungan untuk mencari konsistensi dari bobot yang dimasukkan. <br>
                Apabila consistency ratio diatas 10%, maka akan muncul alret bahwa cr diatas 10% dan user harus kembali untuk menginputkan bobot perbandingan kriteria</p>
                <img src="screenshot/gagal.png" alt="bobot kriteria" width="300" height="100">
                <p>Apabila consistency ratio dibawah atau sama dengan 10%, maka dapat lanjut ke halaman hasil dan mendapatkan rekomendasi foundation sesuai dengan perhitungan. </p>
            </a>
        </div>
    </section>

<?php include('footer.php'); ?>