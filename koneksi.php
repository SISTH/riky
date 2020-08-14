<?php
$connect = mysqli_connect("localhost","root","","riky");

if (mysqli_connect_errno()){
	echo "Gagal".mysqli_connect_errno();
}
?>