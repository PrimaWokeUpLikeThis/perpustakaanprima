<?php
include '../config.php';
$id = $_GET['id_buku'];

$del = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku='$id'");
header("Location: listbuku.php");
?>