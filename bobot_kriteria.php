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
	<?php showTabelPerbandingan('kriteria','kriteria'); ?>
</section>

<?php include('footer.php'); ?>