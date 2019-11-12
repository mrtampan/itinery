<?php
	include ("koneksi.php");

	//get variabel yg dikirimkan dari form
	$id_acara= $_POST['id_acara'];
	$name 	= $_POST['name'];
	$waktu 	= $_POST['waktu'];
	$id_harian = $_POST['id_harian'];


	
	$query_update= mysql_query("UPDATE acara SET nama='$name', id_harian='$id_harian', waktu='$waktu' WHERE id_acara='$id_acara'");
	
	header("location: ?page=acara");
?>

