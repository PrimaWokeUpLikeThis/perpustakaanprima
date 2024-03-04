<?php
include "config.php";
if (isset($_POST['submit'])){
    $nis = $_POST['nis'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM anggota WHERE nis = '$nis' AND password = '$password'";
    $result = mysqli_query($koneksi, $sql);
    $check = mysqli_fetch_assoc($result);
    if ($check > 0)
    {
        $row = ($result);
        $_SESSION['id'] = $check['id'];
        $_SESSION['nis'] = $check['nis'];
       	$_SESSION['nama'] = $check['nama'];
	}    

    else {
    	echo "<script>alert('Gagal Login!')</script>";
    }
    $sql = "SELECT * FROM anggota WHERE nis = '$nis'";
	$result = $koneksi->query($sql);

if (!$result){
  die("Invalid Query :" . $koneksi->error);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Welcome, <?php echo $_SESSION['nama'];?></title>
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
	<nav class="navbar navbar-light bg-warning">
		<div class="container my-5">
		<h1 style="margin : 20px; color: white;">Brightside Library</h1>
	</nav>
<div class="container my-5">
	<center>
	<div class="card w-50">
		<div class="card-header bg-warning text-white">
			<br>
	 <?php 
	 	if(!isset($_SESSION['nis'])){
	 		echo "<h1>Selamat Datang, Silahkan Login atau Daftar terlebih dahulu</h1>";
	 	?> 
	 </div>
	 	<div class="card-body">
	 	<a href="login.php" class="btn btn-primary">Login</a>
	 	<a href="register.php" class="btn btn-success">Daftar</a>
	 	<br>
	 	</div> <?php 
	 	} else {
	 		echo "<h1>Halo, ".$_SESSION['nama']; "</h1>";
	 	?>

	 </div>
	 	<div class="card-body">
	 	<a href="buku.php" class="btn btn-primary">Daftar Buku</a>
	 	<a href="logout.php" class="btn btn-danger">Log Out</a>
	 	<br><br>
	 <div class="card w-50">
	 	<div class="card-header bg-warning text-white">
	 		<h1>Profile</h1>
	 	</div>
	 	<div class="card-body">
	 		<table border="0" cellpadding="10" cellspacing="0">
	 			<tr>
	 				<th>NIS</th>
	 				<td><?php echo $_SESSION['nis'] ;?></td>
	 			</tr>
	 			<tr>
	 				<th>Nama</th>
	 				<td><?php echo $_SESSION['nama']; ?></td>
	 			</tr>
	 			<tr>
	 				<th>ID Anggota</th>
	 				<td><?php echo $_SESSION['id']; ?></td>
	 	</div>


	 		<?php 
	 	}
	 ?>

</body>
</html>