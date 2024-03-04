<?php
include "config.php";
session_start();
if (isset($_SESSION['nis'])){
header ("location:dashboard.php" );
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Daftar</title>
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
		<form method="Post" action="dashboard.php">
	<div class="card w-25">
		<div class="card-header bg-warning text-white">
			<h1>Login</h1>
</div>
<div class="card-body">
 	<label>NIS : &nbsp&nbsp&nbsp</label>
 	<input type="text" name="nis">

 	<br><br>

 	<label>Pass :&nbsp&nbsp</label>
 	<input type="password" name="password">

 	<br><br>

 	<button class="btn btn-primary" name="submit">Login</button>
</body>
</html>