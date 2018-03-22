<?php
	include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lihat Data Mahasiswa</title>
</head>
<body>
	<h2>
		Lihat Data Mahasiswa
	</h2>
	<table border="1" cellspacing="0">
		<tr>
			<th>
				No
			</th>
			<th>
				NIM
			</th>
			<th>
				Nama
			</th>
			<th>
				Program Studi
			</th>
			<th>
				Aksi
			</th>
		</tr>
		<?php
			$baris = 1;
			$view = mysql_query("select * from Mahasiswa");
			while($row = mysql_fetch_array($view))
			{
				?>
				<tr>
					<td>
						<?php echo $baris; ?>
					</td>
					<td>
						<?php echo $row['nim']; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['prodi']; ?>
					</td>
					<td>
						<a href="update.php?nim=<?php echo $row['nim']; ?>">Ubah</a>
						<a href="delete_db.php?nim=<?php echo $row['nim']; ?>" onclick="return confirm('Anda Yakin untuk Hapus Data?')">Hapus</a>
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