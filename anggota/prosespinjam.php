<?php
include "config.php";

$idpinjam = $_POST['id_pinjam'];
$idbuku = $_POST['id_buku'];
$judul = $_POST['judul'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$tglpinjam = strtotime($_POST['tglpinjam']);
$tglpinjam = date('Y-m-d', $tglpinjam);

$hasil = mysqli_query($koneksi, "SELECT * FROM pinjam WHERE id_buku = '$idbuku'");
$check = mysqli_fetch_assoc($hasil);
if ($check == 0){
$submit = mysqli_query($koneksi, "INSERT INTO pinjam SET
	id_buku = '$idbuku',
	judul = '$judul',
	nis = '$nis',
	nama = '$nama',
	alamat = '$alamat',
	email = '$email',
	telp = '$telp',
	tglpinjam = '$tglpinjam',
	tglkembali = date_add('$tglpinjam', interval 7 day)");

	echo "<script>alert('Peminjaman Berhasil, Pergi ke Perpustakaan untuk mengambil bukumu.');
					document.location='buku.php'</script>";
} elseif ($check > 0){
	echo "<script>alert('Buku sedang tidak tersedia.');
				document.location='pinjam.php?id_buku=$idbuku';</script>";
}
		?>