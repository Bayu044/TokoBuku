<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil dihapus.');
		window.location.href = 'read.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menghapus.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['nim']))
	{
		$nim = $_GET['nim'];

		include "koneksi.php";

		$delete = mysql_query("delete from Mahasiswa where nim='$nim'") or die(mysql_error());

		if($delete)
		{
			sukses();
		}
		else
		{
			gagal();
		}
	}
 ?>