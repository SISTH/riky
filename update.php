<?php
	include 'koneksi.php';

	$id_artikel = $_POST['id_artikel'];
	$jd_artikel = $_POST['jd_artikel'];
	$isi = $_POST['isi'];

	mysqli_query($connect, "UPDATE tb_artikel SET jd_artikel='$jd_artikel', isi='$isi' WHERE id_artikel='$id_artikel'");

	header("location:index.php");
?>