<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil dihapus.');
		window.location.href = 'readprodi.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menghapus.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		include "koneksi.php";

		$delete = mysql_query("delete from Prodi where id_prodi='$id'") or die(mysql_error());

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