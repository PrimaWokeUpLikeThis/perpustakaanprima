<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<title>Submit Buku</title>
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
			<a class="navbar-brand text-light" href="#"><h3>ADMIN PERPUSTAKAAN PRIMA</h3></a>
	</nav>
</div>
	<?php
	include "../config.php";
	if(isset($_POST['update'])){

		$id = $_POST['id_buku'];
		$judul = $_POST['judul'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun = $_POST['tahun_terbit'];
		$kategori =  $_POST['kategori'];
		$isbn = $_POST['isbn'];
		$deskripsi = $_POST['deskripsi'];
		$gambar = $_POST['gambar'];

		$gambar = $_FILES['gambar']['name'];
		$ukuran_file = $_FILES['gambar']['size'];
		$tipe_file = $_FILES['gambar']['type'];
		$tmp_file = $_FILES['gambar']['tmp_name'];
		$path = "../image/".$gambar;
		$pathdb = "image/".$gambar;

		if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
		  if($ukuran_file <= 5000000){ 
			if(move_uploaded_file($tmp_file, $path)){ 

		$sql = mysqli_query($koneksi, "UPDATE buku SET judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', tahun_terbit= '$tahun', kategori = '$kategori', isbn = '$isbn', deskripsi = '$deskripsi', gambar = '$gambar' WHERE id_buku = '$id'");

		header ("location: listbuku.php");
	}
	}
}
}
	$id = $_GET['id_buku'];
	$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id'");
	while($d = mysqli_fetch_array($sql)){
	?>
	<center>
		<div class="container my-5">
	<div class="card w-50">
		<div class="card-header bg-success text-white">
			<h1 align="center">Edit Buku</h1>
		</div>
		<div class="card-body">
			<table cellpadding="10" cellspacing="0">
			<form method="post" action="editbuku.php" enctype="multipart/form-data">

			<input type="hidden" name="id_buku" value="<?php echo $d['id_buku'];?>">
			<tr>
				<td><label>Judul</label></td>
				<td>:</td>
				<td><input type="text" name="judul" value="<?php echo $d['judul'];?>"></td>
			</tr>
			<tr>
				<td><label>Penulis</label>
				<td>:</td>
				<td><input type="text" name="penulis" value="<?php echo $d['penulis'];?>"></td>
			</tr>
			<tr>
				<td><label>Penerbit</label></td>
				<td>:</td>
				<td><input type="text" name="penerbit" value="<?php echo $d['penerbit'];?>"></td>
			</tr>
			<tr>
				<td><label>Tahun Terbit</label></td>
				<td>:</td>
				<td><input type="text" name="tahun_terbit" value="<?php echo $d['tahun_terbit'];?>"></td>
			</tr>
			<tr>
				<td><label>Kategori</label></td>
				<td>:</td>
				<td><select name="kategori">
				<option value="Fiksi">Fiksi</option>
				<option value="Non-Fiksi">Non-Fiksi</option>
				</select></td>
			</tr>
			<tr>
				<td><label>ISBN</label></td>
				<td>:</td>
				<td><input type="text" name="isbn" value="<?php echo $d['isbn'];?>"></td>
			</tr>
			<tr>
				<td><label>Deskripsi</label></td>
				<td>:</td>
				<td><textarea name="deskripsi"><?php echo $d['deskripsi']; ?></textarea></td>
			</tr>
			<tr>
				<td><label>Gambar</label></td>
				<td>:</td>
				<td><input type="file" name="gambar" align="center"></td>
			</tr>
		</table>
			<button class="btn btn-success" name="update">Update</button>
			<a href="listbuku.php" class="btn btn-danger">Cancel</a>

		<?php
	}


		?>
</body>
</html>