<html>
<head>
	<title>Index</title>
</head>
<body>
	<h2 style="text-align: center;">Artikel</h3>
	<br>
	<hr>
	<br>
	<a href="add_artikel.php">Tambah Artikel</a>
	
	<table border="1">
		<tr>
			<th>No</th>
			<th>Judul Artikel</th>
			<th>Isi</th>
			<th>foto</th>
			<th>Aksi</th>
		</tr>
		<?php
		$no= 1;
		include 'koneksi.php';
		$data = mysqli_query($connect, "SELECT * FROM tb_artikel");
		while ($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['jd_artikel'];?></td>
			<td><?php echo $d['isi'];?></td>
			<td><img src=" gambar/<?php echo $d['foto'];?>" style="width:50px; height: 50px;"></td>
			<td>
				<a href="edit.php?id_artikel=<?php echo $d['id_artikel']; ?>">Edit</a> |
				<a href="hapus.php?id_artikel=<?php echo $d['id_artikel']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>