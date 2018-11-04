<?php
include 'database.php';
$db = new database(); //isi dengan deklarasi method

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	//($_POST['nama'],$_POST['alamat'],$_POST['usia']);
 	//panggil method input dari class database
 	$db->input($_POST['nama'],$_POST['alamat'],$_POST['usia'],$_POST['Genre'],$_POST['Place']);
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){
 	$db->hapus($_GET['id']); //panggil method hapus dari class database
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia'],$_POST['Genre'],$_POST['Place']); //panggil method update dari class database
 	header("location:tampil.php");
 }
?>
