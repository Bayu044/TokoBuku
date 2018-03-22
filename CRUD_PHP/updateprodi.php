<!DOCTYPE html>
<html>
<head>
	<title>
		Ubah Data Prodi
	</title>
</head>
<body>
<h2>
	Update Data Prodi
</h2>
<?php 
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		include "koneksi.php";
		$select = mysql_query("select * from Prodi where id_prodi = '$id'") or die(mysql_error());
		$sel = mysql_fetch_array($select);
	}
?>
<form method="post" action="updateprodi_db.php?id=<?php echo $id ?>">
	<table border="0">
		<tr>
			<td class="text-right">
				Nama Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtNama" value="<?php echo $sel['nama_prodi']; ?>">
			</td>
		</tr>
		<tr>
			<td class="text-right">
				Singkatan
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtSingkatan" value="<?php echo $sel['singkatan']; ?>">
			</td>
		</tr><tr>
			<td class="text-right">
				Ka Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtKaProdi" value="<?php echo $sel['ka_prodi']; ?>">
			</td>
		</tr><tr>
			<td class="text-right">
				Sek Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtSekProdi" value="<?php echo $sel['sek_prodi']; ?>">
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