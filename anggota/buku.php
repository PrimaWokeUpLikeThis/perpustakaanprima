<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Daftar Buku</title>
</head>
<body>
	<style>
		body{
			background-image: url('gambar/background.jpg');
			background-repeat: no-repeat;
  			background-attachment: fixed;
 			background-size: 100% 100%
		}
		.card-title{
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			max-width: 250px;
		}
	</style>
	<nav class="navbar navbar-expand-sm navbar-light bg-warning">
		<div class="container my-5">
		<h1 style="margin-left: 20px; color : white;">Perpustakaan Brightside</h1>
	</nav>
</div>
	<div class="container my-5">
	<div class="row">	
	<?php
		include "config.php";
		$sql = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku ASC");
		while ($d = mysqli_fetch_array($sql)){
			$gambar = isset($d['gambar']) ? $d['gambar'] : '';
			$judul = isset($d['judul']) ? $d['judul'] : '';
			$penulis = isset($d['penulis']) ? $d['penulis'] : '';
			$penerbit = isset($d['penerbit']) ? $d['penerbit'] : '';
	?>
	<br><br>

	<div class="col-3">
	<div class="card w-75" align="center" style="min-height: 21rem ; min-width: 16rem; max-height: 21rem; min-width: 16rem;">
		<div class="card-body" style="width : 100%; height : 250px;">
			<a href="deskripsi.php?id_buku=<?php echo $d['id_buku']; ?>"><img class="card-img-top"  src="image/<?php echo $gambar; ?>" style="max-width: 125px;"></a>
			<div class="card-footer">
			<h5 class="card-title"><?php echo $judul; ?></h5>
			<p class="card-text"><?php echo $penulis; ?></p>
			<p style="margin-top:-15px;"><?php echo $penerbit; ?></p>
		</div>
	</div>
	</div>
	<br>
</div>

	<?php
}
	?>
</body>
</html>