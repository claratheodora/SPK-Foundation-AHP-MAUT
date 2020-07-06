<?php

include('config.php');
include('fungsi.php');

// menghitung perangkingan
$jmlKriteria 	= getJumlahKriteria();
$jmlAlternatif	= getJumlahAlternatif();
$nilai			= array();


// mendapatkan nilai tiap alternatif
for ($x=0; $x <= ($jmlAlternatif-1); $x++) {
	// inisialisasi
	$nilai[$x] = 0;

	for ($y=0; $y <= ($jmlKriteria-1); $y++) {
		$id_alternatif 	= getAlternatifID($x);
		$id_kriteria	= getKriteriaID($y);
	
		inputAlternatifPV($id_alternatif,$id_kriteria);
		$pv_alternatif	= getAlternatifPV($id_alternatif,$id_kriteria);
		$pv_kriteria	= getKriteriaPV($id_kriteria);

		$nilai[$x]	 	+= ($pv_alternatif * $pv_kriteria);
	}
}

// update nilai ranking
for ($i=0; $i <= ($jmlAlternatif-1); $i++) { 
	$id_alternatif = getAlternatifID($i);
	$query = "INSERT INTO ranking VALUES ($id_alternatif,$nilai[$i]) ON DUPLICATE KEY UPDATE nilai=$nilai[$i]";
	$result = mysqli_query($koneksi,$query);
	if (!$result) {
		echo "Gagal mengupdate ranking";
		exit();
	}
}

include('header.php');

?>

<section class="content">
	<h2 class="ui header">Perangkingan</h2>
		<div class="row mb-3">
		<div class="col-sm-3">
			<div class="form-group form-inline">
				<label>Kemasan</label>
				<select name="s_kemasan" id="s_kemasan" class="form-control">
					<option value=""></option>
					<option value="Pump">Pump</option>
					<option value="Non pump">Non pump</option>
					<option value="Compact">Compact</option>
					<option value="Cushion">Cushion</option>
					<option value="Jar">Jar</option>
				</select>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="form-group form-inline">
				<label>Harga Maksimal</label>
				<input type="number" name="s_hargamax" id="s_hargamax" class="form-control">
				<label>Harga Minimum</label>
				<input type="number" name="s_hargamin" id="s_hargamin" class="form-control">
			</div>
		</div>
		<div class="col-sm-4">
			<button id="search" name="search" class="btn btn-warning"><i class="fa fa-search"></i> Cari</button>
		</div>
	</div>
	<div class="data"></div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.data').load("filter.php");
			$("#search").click(function(){
				var kemasan = $("#s_kemasan").val();
				var hargamin = $("#s_hargamin").val();
				var hargamax = $("#s_hargamax").val();
				$.ajax({
					type: 'POST',
					url: "filter.php",
					data: {kemasan : kemasan, hargamax: hargamax, hargamin: hargamin},
					success: function(hasil) {
						$('.data').html(hasil);
					}
				});
			});
		});
	</script>

<?php 
include('footer.php'); ?>