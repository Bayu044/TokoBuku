<?php 
	function sukses()
	{
		echo "<script> alert('Data berhasil diubah.');
		window.location.href = 'readprodi.php';</script>";
	}

	function gagal()
	{
		echo "<script> alert('Gagal menyimpan.');
		window.history.go(-1);</script>";
	}

	if(isset($_GET['id']))
	{
		$nama = $_POST['txtNama'];
		$id = $_GET['id'];
		$singkatan = $_POST['txtSingkatan'];
		$kaprodi = $_POST['txtKaProdi'];
		$sekprodi = $_POST['txtSekProdi'];

		include "koneksi.php";

		$update = mysql_query("update Prodi set nama_prodi='$nama', singkatan='$singkatan', ka_prodi='$kaprodi', sek_prodi='$sekprodi' where id_prodi='$id'") or die(mysql_error());

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