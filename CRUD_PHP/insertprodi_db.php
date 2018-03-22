<?php
	function sukses()
	{
		echo "<script> alert('Data berhasil disimpan.');
		window.location.href = 'readprodi.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Data gagal disimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_POST['submit']))
	{
		$id = $_POST['txtId'];
		$nama = $_POST['txtNama'];
		$singkatan = $_POST['txtSingkatan'];
		$kaprodi = $_POST['txtKaProdi'];
		$sekprodi = $_POST['txtSekProdi'];

		include "koneksi.php";

		$insert = mysql_query("insert into Prodi values ('$id', '$nama', '$singkatan', '$kaprodi', '$sekprodi')") or die(mysql_error());
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