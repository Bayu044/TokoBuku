<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = 'read.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['nim']))
	{
		$nama = $_POST['txtNama'];
		$nim = $_GET['nim'];
		$prodi = $_POST['txtProdi'];

		include "koneksi.php";

		$update = mysql_query("update Mahasiswa set nama='$nama', prodi='$prodi' where nim='$nim'") or die(mysql_error());

		if($update)
		{
			sukses();
		}
		else
		{
			gagal();
		}
	}
 ?>