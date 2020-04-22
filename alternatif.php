<?php 
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=alternatif&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteAlternatif($id);
	}
	include('header.php');

?>


<section class="content">

	<h2 class="ui header">Alternatif</h2>

	<table class="ui celled table">
		<thead>
			<tr>
				<th class="collapsing">No</th>
				<th>Nama Alternatif</th>
				<th>Gambar</th>
				<th>k1</th>
				<th>k2</th>
				<th>k3</th>
				<th>k4</th>
				<th>k5</th>
				<th></th>
			</tr>
		</thead>
		<tbody>

		<?php
			// Menampilkan list alternatif
			$query = "SELECT `id`,`nama`,`foto`,`Ketahanan`,`Pigmentasi`,`Value of money`,`Kemasan`,`Tekstur` 
					FROM alternatif ORDER BY id";
			$result	= mysqli_query($koneksi, $query);

			$i = 0;
			while ($row = mysqli_fetch_array($result)) {
				$i++;
		?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $row['nama'] ?></td>
				<td><img src="<?= $row['foto'] ?>" width="75" height="75"></td>
				<td><?php echo $row['Ketahanan'] ?></td>
				<td><?php echo $row['Pigmentasi'] ?></td>
				<td><?php echo $row['Value of money'] ?></td>
				<td><?php echo $row['Kemasan'] ?></td>
				<td><?php echo $row['Tekstur'] ?></td>
				<td class="right aligned collapsing">
					<form method="post" action="alternatif.php">
						<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
						<button type="submit" name="edit" class="ui mini teal left labeled icon button"><i class="right edit icon"></i>EDIT</button>
						
					</form>
				</td>
			</tr>

<?php } ?>
	
		</tbody>
		<tfoot class="full-width">
			<tr>
				<th colspan="9">
					<a href="tambah.php?jenis=alternatif">
						<div class="ui right floated small primary labeled icon button">
						<i class="plus icon"></i>Tambah
						</div>
					</a>
				</th>
			</tr>
		</tfoot>
	</table>

	<br>


	<form action="bobot_kriteria.php">
	<button class="ui right labeled icon button" style="float: right;">
		<i class="right arrow icon"></i>
		Lanjut
	</button>
	</form>
</section>

<?php include('footer.php'); ?>