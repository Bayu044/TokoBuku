<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>
	Tambah Data Prodi
</h1>
<form method="post" action="insertprodi_db.php">
	<table>
		<tr>
			<td>
				ID Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtId">
			</td>
		</tr>
		<tr>
			<td>
				Nama Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtNama">
			</td>
		</tr>
		<tr>
			<td>
				Singkatan
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtSingkatan">
			</td>
		</tr>
		<tr>
			<td>
				Ka Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtKaProdi">
			</td>
		</tr>
		<tr>
			<td>
				Sek Prodi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtSekProdi">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Simpan">
			</td>
		</tr>
	</table>	
</form>
<a href="index.php">back</a>
</body>
</html>
