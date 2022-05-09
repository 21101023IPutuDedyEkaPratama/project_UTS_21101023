<?php 
	session_start();
	include 'koneksi.php';

	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PMB Online | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

	<!-- Header -->
	<header>
		<h1><a href="Beranda.php">Admin PMB</h1>
		<ul>
			<li><a href="Beranda.php">Beranda</a></li>
			<li><a href="data-peserta.php">Data Peserta</a></li>
			<li><a href="keluar.php">keluar</a></li>
		</ul>
	</header>

	<!-- bagin content -->
	<section class="contet">
		<h2>Beranda</h2>
		<div class="box">
			<h3><?php echo $_SESSION['nama'] ?> >>>>> Selamat Datang di PMB Online</h3>
		</div>
	</section>
	
</body>
</html>