<?php
include "config.php";

$id = $_GET['id_buku'];
$result = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = '$id'");
while ($data = mysqli_fetch_array($result)) {
	$judul = $data['judul'];
	$penulis = $data['penulis'];
	$penerbit = $data['penerbit'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Pinjam</title>
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
	<div class="card w-50">
		<div class="card-header bg-warning text-white">
			<h3 class="card-title">Isi Data Diri</h3>
		</div>
		<div class="card-body">
			<div class="card-body">
				<table cellpadding="10" cellspacing="0">
					<form method="post" action="prosespinjam.php">
					<tr>
						<input type="hidden" name="id_pinjam">
						<input type="hidden" name="id_buku" value="<?php echo $id; ?>">
						<input type="hidden" name="judul" value="<?php echo $judul; ?>">
						<td><b>Judul</b></td>
						<td>:</td>
						<td><?php echo $judul; ?></td>
					</tr>
					<tr>
						<td><b>Penulis</b></td>
						<td>:</td>
						<td><?php echo $penulis;?></td>
					</tr>
					<tr>
						<td><b>Penerbit</b></td>
						<td>:</td>
						<td><?php echo $penerbit;?></td>
					</tr>
					<tr>
						<td><b>NIS</b></td>
						<td>:</td>
						<td><input type="text" name="nis" required></td>
					</tr>
					<tr>
						<td><b>Nama</b></td>
						<td>:</td>
						<td><input type="text" name="nama"required></td>
					</tr>
					<tr>
						<td><b>Alamat</b></td>
						<td>:</td>
						<td><input	type="text" name="alamat"required></td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td>:</td>
						<td><input type="email" name="email"required></td>
					</tr>
					<tr>
						<td><b>No. Telpon</b></td>
						<td>:</td>
						<td><input type="text" name="telp"required></td>
					</tr>
					<tr>
						<td><b>Tanggal Pinjam</b></td>
						<td>:</td>
						<td><input type="date" name="tglpinjam"required></td>
					</tr>
				</table>
				<button type="submit" class="btn btn-primary" name="submit">Pinjam</button>
				<a class="btn btn-secondary" href="deskripsi.php?id_buku=<?php echo $id;?>">Kembali</a>
</body>
</html>