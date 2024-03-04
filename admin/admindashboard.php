<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<title>Admin Dashboard</title>
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
			<a class="navbar-brand text-light" href="#"><h3>Admin Perpustakaan Brightside</h3></a>
	</nav>
</div>
<center>
<div class="container my-5">
	<div class="row">
		<div class="col-sm">
			<div class="card w-50">
				<div class="card-body">
					<img class="card-img-top" src="../gambar/listbuku.png">
					<center>
					<h3 class="card-title">List Buku</h3>
					<a  class="btn btn-success" href="listbuku.php">Buka</a>
				</center>
			</div>
		</div>
	</div>
	<div class="col-sm">
		<div class="card w-50">
			<div class="card-body">
				<img class="card-img-top" src="../gambar/memberlist.png">
				<center>
				<h3 class="card-title">Anggota</h3>
				<a class="btn btn-success" href="memberlist.php">Buka</a></center>
			</div>
		</div>
	</div>
	<div class="col-sm">
		<div class="card w-50">
			<div class="card-body">
				<img class="card-img-top" src="../gambar/staff.png">
				<center>
				<h3 class="card-title">Staff</h3>
				<a class="btn btn-success" href="stafflist.php">Buka</a></center>
			</div>
		</div>
	</div>
	<div class="col-sm">
		<div class="card w-50">
			<div class="card-body">
				<img class="card-img-top" src="../gambar/pinjam.png">
				<center>
				<h3 class="card-title">Pinjam</h3>
				<a class="btn btn-success" href="listpinjam.php">Buka</a></center>
			</div>
		</div>
	</div>
</body>
</html>