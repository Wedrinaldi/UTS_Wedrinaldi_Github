<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nama'],$_POST['email'],$_POST['program'],$_POST['asal'],$_POST['nilai']);
	echo "<font color='green'><h1>Pendaftaran Berhasil Di Registrasi</h1>";
	echo "<br/><a href='../view/input.php'>Kembali Ke Menu Utama</a>";
	echo "<br/><a href='../view/index.php'>Cek Data Yang Sudah Berhasil Di Inputkan Klik Disini</a>";
}
elseif($aksi == "hapus"){
	$db->hapus($_GET['id']);
	header("location:../view/UpdateData.php");
}

elseif ($aksi == "update"){
	$db->update($_POST['id'],$_POST['nama'],$_POST['email'],$_POST['program'],$_POST['asal'],$_POST['nilai']);
	header("location:../view/UpdateData.php");
}
?>