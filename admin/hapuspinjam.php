<?php
include '../config.php';
$id = $_GET['id_pinjam'];

$del = mysqli_query($koneksi, "DELETE FROM pinjam WHERE id_pinjam='$id'");
header("Location: listpinjam.php");
?>