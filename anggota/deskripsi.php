<?php
include "config.php";

$id = $_GET['id_buku'];
$result = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id'");
while ($data = mysqli_fetch_array($result)) {
	$judul = $data['judul'];
	$penulis = $data['penulis'];
	$penerbit = $data['penerbit'];
	$tahun = $data['tahun_terbit'];
	$kategori = $data['kategori'];
	$isbn = $data['isbn'];
	$deskripsi = $data['deskripsi'];
	$gambar = $data['gambar'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $judul;?></title>
</head>
<body>

	<style>
		body{
			background-image: url('gambar/background.jpg');
			background-repeat: no-repeat;
  			background-attachment: fixed;
 			background-size: 100% 100%
		}
	</style>
<div class="container my-5">
	<center>
	<div class="card w-75" align="left">
		<div class="card-body">
			<img src="image/<?php echo $gambar; ?>" align="left" style="max-width: 200px;">
			<h1><?php echo $judul; ?></h1>
			<h6>&nbsp&nbspPenulis : <?php echo $penulis; ?></h6>
			<h6>&nbsp&nbspPenerbit : <?php echo $penerbit; ?></h6>
			<h6>&nbsp&nbspTahun Terbit : <?php echo $tahun; ?></h6>
			<h6>&nbsp&nbspKategori : <?php echo $kategori ?></h6>
			<h6>&nbsp&nbspISBN : <?php echo $isbn; ?></h6>
			<br>
			<p><?php echo $deskripsi; ?></p>
			<br><br>
			<center>
			<a href="pinjam.php?id_buku=<?php echo $id; ?>" class="btn btn-primary">Pinjam</a>
			<a href="buku.php" class="btn btn-secondary">Kembali</a>
			</button>
</body>
</html>