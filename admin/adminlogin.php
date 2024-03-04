<!DOCTYPE html>
<?php
include "../config.php";
session_start();
if (isset($_SESSION['id'])){
header ("location:admindashboard.php" );
}
?>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<title>Admin</title>
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
<div class="container my-5">
	<center>
		<div class="card w-25">
			<div class="card-header bg-success text-white">
				<h1 class="card-title">Login</h1>
			</div>
			<div class="card-body">
				<table cellpadding="10" cellspacing="0">
					<form action="ceklogin.php" method="post">
					<tr>
						<td>ID</td>
						<td>:</td>
						<td><input type="text" name="id"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password"></td>
					</tr>
				</table>
				<button type="submit" class="btn btn-success" name="submit">Login</button>

</body>
</html>