<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data Prodi</title>
</head>
<body>
	<h2>
		Lihat Data Prodi
	</h2>
	<table border="1" cellspacing="0">
		<tr>
			<th>
				No
			</th>
			<th>
				ID Prodi
			</th>
			<th>
				Nama Prodi
			</th>
			<th>
				Singkatan
			</th>
			<th>
				Ka Prodi
			</th>
			<th>
				Sek Prodi
			</th>
			<th>
				Aksi
			</th>
		</tr>
		<?php
			$baris = 1;
			$view = mysql_query("select * from Prodi");
			while($row = mysql_fetch_array($view))
			{
				?>
				<tr>
					<td>
						<?php echo $baris; ?>
					</td>
					<td>
						<?php echo $row['id_prodi']; ?>
					</td>
					<td>
						<?php echo $row['nama_prodi']; ?>
					</td>
					<td>
						<?php echo $row['singkatan']; ?>
					</td>
					<td>
						<?php echo $row['ka_prodi']; ?>
					</td>
					<td>
						<?php echo $row['sek_prodi']; ?>
					</td>
					<td>
						<a href="updateprodi.php?id=<?php echo $row['id_prodi']; ?>">Ubah</a>
						<a href="deleteprodi_db.php?id=<?php echo $row['id_prodi']; ?>" onclick="return confirm('Anda Yakin untuk Hapus Data?')">Hapus</a>
					</td>
				</tr>
				<?php 
				$baris ++;
			}
		?>
	</table>
	<a href="index.php">back</a>
</body>
</html>