<html>
	<head>
		<title>Edit artikel</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$id_artikel = $_GET['id_artikel'];
		$data = mysqli_query($connect,"select * from tb_artikel where id_artikel= '$id_artikel'");
		while ($d = mysqli_fetch_array($data)){
		?>
		<h2>From Edit Artikel</h2>	
		<form action="update.php" method="POST">
			<table>
				<tr>
					<td>Judul Artikel</td>
					<input type="hidden" name="id_artikel" value="<?php echo $d['id_artikel'];?>">
					<td>
						<input type="text" name="jd_artikel" value="<?php echo $d['jd_artikel'];?>">
					</td>
				</tr>
				<tr>
					<td>Isi</td>
					<td><input type="text" name="isi" value="<?php echo $d['isi']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Update"></td>
				</tr>
			</table>
		</form>
		<?php
			}
		?>
	</body>
</html>