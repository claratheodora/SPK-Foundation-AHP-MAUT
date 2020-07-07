<?php
	include('config.php');
	include('fungsi.php');

	include('header.php');

	//menjalankan perintah delete
	if(isset($_POST['reset'])) {
		deleteNilaiPerbandinganKriteria();
	}
	
?>
<section class="content">
	<h2 class="ui header">Perbandingan Kriteria</h2>
	<p>Pilih kriteria yang dianggap lebih penting menggunakan nilai dari tabel tingkat kepentingan menurut Saaty. <br>
		Pilih nilai sebelah kiri nilai angka 1 apablia kriteria 1 dirasa lebih penting dari kriteria 2, dan sebaliknya.</p>
	<?php showTabelPerbandingan('kriteria','kriteria'); ?>
</section>

<?php include('footer.php'); ?>