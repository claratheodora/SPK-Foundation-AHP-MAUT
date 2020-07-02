<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis']) && isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$jenis	= $_GET['jenis'];

		// hapus record
		$query 	= "SELECT nama FROM $jenis WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);
		
		while ($row = mysqli_fetch_array($result)) {
			$nama = $row['nama'];
		}
	}

	if (isset($_POST['update'])) {
		$id 	= $_POST['id'];
		$jenis	= $_POST['jenis'];
		$ketahanan 	= $_POST['ketahanan'];
		$pigmentasi = $_POST['pigmentasi'];
		$vom 		= $_POST['vom'];
		$kemasan 	= $_POST['kemasan'];
		$tekstur 	= $_POST['tekstur'];


		$query 	= "UPDATE $jenis SET `Ketahanan`='$ketahanan', `Pigmentasi`='$pigmentasi'
		`Value of money`='$vom', `Kemasan`= '$kemasan', `Tekstur`='$tekstur' WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);

		if (!$result) {
			echo "Update gagal";
			exit();
		} else {
			header('Location: '.$jenis.'.php');
			exit();
		}
	}

	include('header.php');
?>

<section class="content">
	<h2>Edit <?php echo $jenis?></h2>

	<form class="ui form" method="post" action="edit.php">
		<div class="inline field">
			<table>
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
			<input type="hidden" name="id" value="<?php echo $id?>">
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>
		<br>
		<input class="ui green button" type="submit" name="update" value="UPDATE">
	</form>
</section>

<?php include('footer.php'); ?>