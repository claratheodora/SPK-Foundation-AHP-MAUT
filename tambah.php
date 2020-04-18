<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis'])) {
		$jenis	= $_GET['jenis'];
	}

	if (isset($_POST['tambah'])) {
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];
		$ketahanan 	= $_POST['ketahanan'];
		$pigmentasi = $_POST['pigmentasi'];
		$vom 	= $_POST['vom'];
		$kemasan 	= $_POST['kemasan'];
		$tekstur 	= $_POST['tekstur'];

		tambahData($jenis,$nama,$ketahanan,$pigmentasi,$vom,$kemasan,$tekstur);

		header('Location: '.$jenis.'.php');
	}

	include('header.php');
?>

<section class="content">
	<h2>Tambah <?php echo $jenis?></h2>

	<form class="ui form" method="post" action="tambah.php">
		<div class="inline field">
			<table>
				<tr>
					<th><label>Nama </label></th>
					<th><input type="text" name="nama" placeholder="<?php echo $jenis?> baru"></th>
				</tr>
				<tr>
					<th><label>Ketahanan </label></th>
					<th><input type="number" step= 0.1 min = "0" max="5" name="ketahanan" placeholder="<?php echo $jenis?> baru"></th>
				</tr>
				<tr>
					<th><label>Pigmentasi </label></th>
					<th><input type="number" step= 0.1 min = "0" max="5" name="pigmentasi" placeholder="<?php echo $jenis?> baru"></th>
				</tr>
				<tr>
					<th><label>Value of Money </label></th>
					<th><input type="number" step= 0.1 min = "0" max="5" name="vom" placeholder="<?php echo $jenis?> baru"></th>
				</tr>
				<tr>
					<th><label>Kemasan </label></th>
					<th><input type="number" step= 0.1 min = "0" max="5" name="kemasan" placeholder="<?php echo $jenis?> baru"></th>
				</tr>
				<tr>
					<th><label>Tekstur </label></th>
					<th><input type="number" step= 0.1 min = "0" max="5" name="tekstur" placeholder="<?php echo $jenis?> baru"></th>
				</tr>
			</table>
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="tambah" value="SIMPAN">
	</form>
</section>

<?php include('footer.php'); ?>