<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = 'read.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$nim = $_POST['txtNIM'];
		$nama = $_POST['txtNama'];
		$prodi = $_POST['txtProdi'];

		include "koneksi.php";

		$insert = mysql_query("insert into Mahasiswa values ('$nim', '$nama', '$prodi')") or die(mysql_error());
		if($insert)
		{
			sukses();
		}
		else
		{
			gagal();
		}
	}
?>