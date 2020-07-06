
	<table class="ui celled collapsing table">
		<thead>
			<tr>
				<th>Peringkat</th>
				<th>Foundation</th>
				<th>Harga</th>
                <th>Kemasan</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
                include 'config.php';

				$query = "SELECT * FROM alternatif, ranking WHERE alternatif.id = ranking.id_alternatif";
                if (isset($_POST['kemasan']) && ($_POST['kemasan']!="")) {
                    $s_kemasan = $_POST['kemasan'];
					$query .= " AND bentuk = '$s_kemasan'";
				}
				if (isset($_POST['hargamax'],$_POST['hargamin']) && !empty($_POST['hargamax']) && !empty($_POST['hargamin'])){
					$s_hargamax = $_POST['hargamax'];
					$s_hargamin = $_POST['hargamin'];
					$query .= " AND harga BETWEEN $s_hargamin AND $s_hargamax";
				}else if(isset($_POST['hargamax']) && !empty($_POST['hargamax'])){
					$s_hargamax = $_POST['hargamax'];
					$query .= " AND harga < $s_hargamax";
				}else if(isset($_POST['hargamin']) && !empty($_POST['hargamin'])){
					$s_hargamin = $_POST['hargamin'];
					$query .= " AND harga > $s_hargamin";
				}
				
				$query .= " ORDER BY nilai DESC LIMIT 5";

				$no = 1;
				$dewan1 = $koneksi->prepare($query);
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