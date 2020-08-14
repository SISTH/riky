<?php
 include 'koneksi.php';
 	$jd_artikel = $_POST['jd_artikel'];
 	$isi = $_POST['isi'];


 	$rand = rand();
	$exstension = array('png', 'jpg', 'jpeg', 'gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$exstension)){
		header("location:index.php?alert=gagal_ekstensi");
	} else {
		if($ukuran < 1044071){
			$xx = $rand.'_'.$filename;
			move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
			mysqli_query($connect, "INSERT INTO tb_artikel values('','$jd_artikel','$isi','$xx','')");
			header("location:index.php?alert=berhasil");
		} else {
			header("location:index.php?alert=gaga_upload");
		}
	}
 ?>