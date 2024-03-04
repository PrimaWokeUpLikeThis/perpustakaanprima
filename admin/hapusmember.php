<?php
include "../config.php";
$id = $_GET['id'];
	$result = mysqli_query($koneksi, "DELETE FROM anggota WHERE id = '$id'");
	header("location: memberlist.php");  
?>