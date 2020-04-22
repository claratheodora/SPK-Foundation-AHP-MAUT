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
			
			if (isset($_GET['pageno'])) {
				$pageno = $_GET['pageno'];
			} else {
				$pageno = 1;
			}
			$no_of_records_per_page = 10;
			$offset = ($pageno-1) * $no_of_records_per_page;
	
			$total_pages_sql = "SELECT COUNT(*) FROM alternatif";
			$result = mysqli_query($koneksi,$total_pages_sql);
			$total_rows = mysqli_fetch_array($result)[0];
			$total_pages = ceil($total_rows / $no_of_records_per_page);

			// Menampilkan list alternatif
			$query = "SELECT * FROM alternatif LIMIT $offset, $no_of_records_per_page";
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

	
	<div class="ui pagination menu">
		<a class="item" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
		<a class="<?php if($pageno == 1){echo 'active';}?> item" href="?pageno=1">1</a>
		<a class="<?php if($pageno == 2){echo 'active';}?> item"href="?pageno=2">2</a>
		<a class="<?php if($pageno == 3){echo 'active';}?> item" href="?pageno=3">3</a>
		<a class="<?php if($pageno == 4){echo 'active';}?> item" href="?pageno=4">4</a>
		<a class="item" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
    </div>

	<br>

	<form action="bobot_kriteria.php">
	<button class="ui right labeled icon button" style="float: right;">
		<i class="right arrow icon"></i>
		Lanjut
	</button>
	</form>
</section>

<?php include('footer.php'); ?>