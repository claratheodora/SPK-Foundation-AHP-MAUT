
	<table class="ui celled collapsing table">
		<thead>
			<tr>
				<th>Peringkat</th>
				<th>Foundation</th>
				<th>Harga</th>
                <th>Bentuk</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
				/*$query  = "SELECT id,nama,id_alternatif,nilai FROM alternatif,ranking WHERE alternatif.id = ranking.id_alternatif ORDER BY nilai DESC";
				$result = mysqli_query($koneksi, $query);

				$i = 0;
				while ($row = mysqli_fetch_array($result)) {
					$i++;
					if($i > 5){
						break;
					}
				?>
				<tr>
					<?php if ($i == 1) {
						echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
					} else {
						echo "<td>".$i."</td>";
					}

					?>

					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['nilai'] ?></td>
				</tr>

				<?php	
				}*/
                include 'config.php';
                $s_kemasan="";
				$s_harga="";
				$query = "SELECT * FROM alternatif, ranking WHERE alternatif.id = ranking.id_alternatif";
                if (isset($_POST['kemasan'])) {
                    $s_kemasan = $_POST['kemasan'];
					$query .= " AND bentuk = '$s_kemasan'";
				}
				if (isset($_POST['harga']) ){
					$s_harga = $_POST['harga'];
					$query .= " AND harga < $s_harga";
				}
				
				$query .= " ORDER BY nilai DESC LIMIT 5";

                $no = 1;
                //$query = "SELECT * FROM alternatif, ranking WHERE alternatif.id = ranking.id_alternatif AND bentuk LIKE ? AND harga < ? ORDER BY nilai DESC LIMIT 5";
                $dewan1 = $koneksi->prepare($query);
                //$dewan1->bind_param('si', $s_kemasan, $s_harga);
                $dewan1->execute();
                $res1 = $dewan1->get_result();
     
                if ($res1->num_rows > 0) {
                    while ($row = $res1->fetch_assoc()) {
            ?>
                <tr>
					<?php if ($no == 1) {
						echo "<td><div class=\"ui ribbon label\">Pertama</div></td>";
					} else {
						echo "<td>".$no."</td>";
					}
					?>
                    <td><?php echo $row['nama'] ?></td>
                    <td><?php echo $row['harga'] ?></td>
                    <td><?php echo $row['bentuk'] ?></td>
					<td><?php echo $row['nilai'] ?></td>
				</tr>
				
            <?php $no++; } } else { ?> 
                <tr>
                    <td colspan='4'>Tidak ada data ditemukan</td>
                </tr>
            <?php } 

			?>
		</tbody>
	</table>
</section>