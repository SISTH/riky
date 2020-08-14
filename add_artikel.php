<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>From Tambah Artikel</h2>		
		<form action="a_artikel.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Judul Artikel</td>
					<td><input type="text" name="jd_artikel"></td>
				</tr>
				<tr>
					<td>Isi</td>
					<td><textarea name="isi">
						
					</textarea></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><input type="file" name="foto"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Tambah"></td>
				</tr>
			</table>
		</form>
	</body>
</html>