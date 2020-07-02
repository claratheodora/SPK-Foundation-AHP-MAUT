
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

	<section class="content">
			<h2 class="ui header">Analitycal Hierarchy Process (AHP)</h2>

			<p>Analytic Hierarchy Process (AHP) merupakan suatu model pendukung keputusan yang dikembangkan oleh Thomas L. Saaty. Model pendukung keputusan ini akan menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki.
			 AHP membantu para pengambil keputusan untuk memperoleh solusi terbaik dengan mendekomposisi permasalahan kompleks ke dalam bentuk yang lebih sederhana untuk kemudian melakukan sintesis terhadap berbagai faktor yang terlibat dalam permasalahan pengambilan keputusan tersebut.
			</p>

			<h2 class="ui header">Multi Attribute Utility Theory(MAUT)</h2>

			<p>Multi Attribute Utility Theory(MAUT) digunakan untuk merubah dari beberapa kepentingan ke dalam nilai numerik dengan skala 0-1, 0 mewakili pilihan terburuk dan 1 terbaik. 
				Hal ini memungkinkan perbandingan langsung beragam ukuran, yaitu dengan alat yang tepat. 
				Pada sistem ini MAUT digunakan untuk perangkingan. </p>

			<h3 class="ui header">Nilai yang digunakan dalam perbandingan kriteria:<br>
			Tabel Tingkat Kepentingan menurut Saaty (1980)</h3>
			<table class="ui collapsing striped blue table">
				<thead>
					<tr>
						<th>Nilai Numerik</th>
						<th>Tingkat Kepentingan <em>(Preference)</em></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Sama pentingnya <em>(Equal Importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">2</td>
						<td>Sama hingga sedikit lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">4</td>
						<td>Sedikit lebih hingga jelas lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">5</td>
						<td>Jelas lebih penting <em>(Materially more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">6</td>
						<td>Jelas hingga sangat jelas lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">7</td>
						<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">8</td>
						<td>Sangat jelas hingga mutlak lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">9</td>
						<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
					</tr>
				</tbody>
			</table>

	</section>

<?php include('footer.php'); ?>
