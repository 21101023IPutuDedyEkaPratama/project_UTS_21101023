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
		<h1><a href="beranda.php">Admin PMB</h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data-peserta.php">Data Peserta</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</header>

	<!-- bagin content -->
	<section class="contet">
		<h2>Data Peserta</h2>
		<div class="box">
			<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pendaftaran</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						$list_peserta = mysqli_query($conn, "SELECT * FROM 
							tb_pendaftaran");
						while($row = mysqli_fetch_array($list_peserta)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_pendaftaran'] ?></td>
						<td><?php echo $row['nama_peserta'] ?></td>
						<td><?php echo $row['jk'] ?></td>
						
						<td>
							<a href="index.php?id=<?php echo $row['id_pendaftaran'] ?>">Update</a> ||
							<a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('Yakin ?')">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		
	</section>
</body>
</html>