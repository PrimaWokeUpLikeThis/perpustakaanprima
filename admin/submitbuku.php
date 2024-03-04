
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
	<center>
		<div class="container my-5">
	<div class="card w-50">
		<div class="card-header bg-success text-white">
			<h1 align="center">Submit Buku</h1>
		</div>
		<div class="card-body">
			<table cellpadding="10" cellspacing="0">
			<form method="post" action="listbuku.php" enctype="multipart/form-data">
				<tr>
				<td><label>Judul</label></td>
				<td>:</td>
				<td><input type="text" name="judul"></td>
				</tr>

				<tr>
					<td><label>Penulis</label></td>
					<td>:</td>
					<td><input type="text" name="penulis"></td>
				</tr>
				<tr>
					<td><label>Penerbit</label></td>
					<td>:</td>
					<td><input type="text" name="penerbit"></td>
				</tr>
				<tr>

					<td><label>Tahun Terbit</label></td>
					<td>:</td>
					<td><input type="text" name="tahun_terbit"></td>
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
					<td><input type="text" name="isbn"></td>
				</tr>
				<tr>
					<td><label>Deskripsi</label></td>
					<td>:</td>
					<td><textarea name="deskripsi"></textarea></td>
				</tr>
				<tr>
					<td><label>Gambar</label></td>
					<td>:</td>
					<td><input type="file" name="gambar" align="center"></td>
				</tr>
			</table>
			<button class="btn btn-success" name="submit">Submit</button>
</body>
</html>