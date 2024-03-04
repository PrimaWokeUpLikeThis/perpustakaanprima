<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<title>Daftar</title>
</head>
<body><style>
		body{
			background-image: url('gambar/background.jpg');
			background-repeat: no-repeat;
  			background-attachment: fixed;
 			background-size: 100% 100%
		}
	</style>
<div class="container my-5">
	<center>
		
	<div class="card w-25">
		<div class="card-header bg-warning text-white">
			<h1>Daftar</h1>
</div>
<div class="card-body">
	<form method="post" action="cekregister.php">
	<input type="hidden" name="id">
	
 	<label>NIS : &nbsp&nbsp&nbsp</label>
 	<input type="text" name="nis">

 	<br><br>

 	<label>Nama :</label>
 	<input type="text" name="nama">

 	<br><br>

 	<label>Pass :&nbsp&nbsp</label>
 	<input type="password" name="password">

 	<br><br>

 	<button class="btn btn-primary" name="daftar">Daftar</button>
</body>
</html>