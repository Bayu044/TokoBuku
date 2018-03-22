<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>
	Tambah Data Mahasiswa
</h1>
<form method="post" action="insert_db.php">
	<table>
		<tr>
			<td>
				NIM
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtNIM">
			</td>
		</tr>
		<tr>
			<td>
				Nama
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
				Program Studi
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="txtProdi">
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
