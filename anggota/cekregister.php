4<?php
include "config.php";

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$pass = $_POST['password'];

if(empty($nis)){
	echo"<script>alert('Mohon Isi NIS!')</script";
} elseif (empty($nama)) {
	echo"<script>alert('Mohon Isi Nama!')</script";
} elseif (empty($pass)){
	echo"<script>alert('Mohon Isi Password!')</script";
} else

$submit = mysqli_query ($koneksi, "INSERT INTO anggota (nis, nama, password) values ('$nis', '$nama', '$pass')");
header("location: home.php");