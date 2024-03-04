<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<title>Member List</title>
</head>
<body>
	<style>
		body{
			background-image: url('../gambar/backgroundadmin.jpg');
			background-repeat: no-repeat;
  			background-attachment: fixed;
 			background-size: 100% 100%
		}
	</style>
	<nav class="navbar navbar-expand-sm navbar-light bg-success">
		<div class="container my-5">
			<a class="navbar-brand text-light" href="#"><h2>Admin Perpustakaan Brightside</h2></a>
	</nav>
</div>
<div class="container my-5">
	<center>
	<div class="card w-50">
		<div class="card-header bg-success text-white">
		<h1 align="center" class="card-title">Anggota</h1>
		</div>
		<div class="card-body">
		<br>
		<a href="admindashboard.php" class="btn btn-success">Kembali</a>
	<br><br>
			<table border="1" cellpadding="10" cellspacing="5" align="center">
				<tr>
					<th>No</th>
					<th>NIS</th>
					<th>Nama</th>
					<th>ID</th>
					<th>Opsi</th>
				</tr>
				<tr>
					<?php 
					include "../config.php";

					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY id");
					while ($data = mysqli_fetch_array($sql)){

					?>
				</tr>
				<tr>
					<td><?php echo $no++;?>
					<td><?php echo $data['nis'];?>
					<td><?php echo $data['nama'];?></td>
					<td><?php echo $data['id'];?></td>
					<td><a href="hapusmember.php?id=<?php echo $data['id'];?>" class="btn btn-danger">Hapus</a>
				</tr>
				<?php
			}
		?>
</body>
</html>