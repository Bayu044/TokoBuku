<!DOCTYPE html>
<html>
<head>
	<title>
		Ubah Data Mahasiswa
	</title>
</head>
<body>
<h2>
	Update Data Mahasiswa
</h2>
<?php 
	if(isset($_GET['nim']))
	{
		$nim = $_GET['nim'];
		include "koneksi.php";
		$select = mysql_query("select * from Mahasiswa where nim = '$nim'") or die(mysql_error());
		$sel = mysql_fetch_array($select);
	}
?>
<form method="post" action="update_db.php?nim=<?php echo $nim ?>">
	<table border="0">
		<tr>
			<td class="text-right">
				Nama
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtNama" value="<?php echo $sel['nama']; ?>">
			</td>
		</tr>
		<tr>
			<td class="text-right">
				Program Studi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtProdi" value="<?php echo $sel['prodi']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
				
			</td>
			<td>
				<button type="submit" name="submit" value="simpan" onclick="return confirm('Anda Yakin untuk Ubah Data?')">Ubah Data</button>
			</td>
		</tr>
	</table>
</form>
<a href="index.php">back</a>
</body>
</html>