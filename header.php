<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sistem Pendukung Keputusan metode AHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<header>
	<h1>Sistem Pendukung Keputusan Foundation Metode dengan AHP MAUT</h1>
</header>

<div class="wrapper">
	<nav id="navigation" role="navigation">
		<ul>
			<li><a class="item" href="index.php">Home</a></li>
			<li>
				<a class="item" href="kriteria.php">Kriteria
					<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div>
				</a>
			</li>
			<li>
				<a class="item" href="alternatif.php">Alternatif
					<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div>
				</a>
			</li>
			<li><a class="item" href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
		</ul>
	</nav>