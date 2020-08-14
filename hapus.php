<?php
	include 'koneksi.php';
	$id_artikel = $_GET['id_artikel'];
	
	mysqli_query($connect, "delete from tb_artikel where id_artikel='$id_artikel'");
	header("location:index.php");
?>