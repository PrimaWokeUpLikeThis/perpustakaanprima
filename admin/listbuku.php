<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<link rel="icon" href="../gambar/icon.jpg">
	<title>List Buku</title>
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
			<a class="navbar-brand text-light" href="#"><h2>Admin Perpustakaan Brightside</h2></a>
	</nav>
</div>
<div class="container my-5">
	<center>
	<div class="card">
		<div class="card-header bg-success text-white">
		<h1 align="center">List Buku</h1>
		</div>
<div class="card-body">
			<a href="submitbuku.php" class="btn btn-success">Submit Buku</a>
			<br><br>
		</div>

			<table border="1" cellpadding="10" cellspacing="0" align="center">
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Judul</th>
					<th>Penulis</th>
					<th>Penerbit</th>
					<th>Tahun Terbit</th>
					<th>Kategori</th>
					<th>ISBN</th>
					<th>Opsi</th>
				</tr>
					<?php
					include "../config.php";
					$no = 1;
					$sql = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY judul ASC");
					while($d = mysqli_fetch_array($sql)){

			
						?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><img src="../image/<?php echo $d['gambar']; ?>" style="width: 10rem;"></td>
					<td><?php echo $d['judul']; ?></td>
					<td><?php echo $d['penulis']; ?></td>
					<td><?php echo $d['penerbit']; ?></td>
					<td><?php echo $d['tahun_terbit']; ?></td>
					<td><?php echo $d['kategori']; ?></td>
					<td><?php echo $d['isbn']; ?></td>
					<td>
						<a class="btn btn-success" href="editbuku.php?id_buku=<?php echo $d['id_buku']; ?>" style="width: 70px;">Edit</a>
						<a class="btn btn-danger" href="hapusbuku.php?id_buku=<?php echo $d['id_buku'];?>"  style="width: 70px;">Hapus</a>
					</td>
				</tr>

			</div> <?php
		} 





			?>

</body>
<?php
		if(isset($_POST['submit'])){
		$judul = $_POST['judul'];
		$penulis = $_POST['penulis'];
		$penerbit = $_POST['penerbit'];
		$tahun = $_POST['tahun_terbit'];
		$kategori = $_POST['kategori'];
		$isbn = $_POST['isbn'];
		$deskripsi = $_POST['deskripsi'];

		$gambar = $_FILES['gambar']['name'];
		$ukuran_file = $_FILES['gambar']['size'];
		$tipe_file = $_FILES['gambar']['type'];
		$tmp_file = $_FILES['gambar']['tmp_name'];
		$path = "../image/".$gambar;
		$pathdb = "image/".$gambar;

		if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
		  if($ukuran_file <= 5000000){ 
			if(move_uploaded_file($tmp_file, $path)){ 
				
			  $submit = mysqli_query($koneksi, "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori, isbn, deskripsi, gambar) values ('$judul', '$penulis', '$penerbit', '$tahun', '$kategori', '$isbn', '$deskripsi', '$gambar')");
			  header("location: listbuku.php");
			}
		} 
	}
}

			  ?>


		
</html>
</table>


