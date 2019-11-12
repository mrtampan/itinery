bakekok
<?php

include ('koneksi.php');

	$name = $_POST['name'];
	$id_harian = $_POST['id_harian'];
	$waktu = $_POST['waktu'];

	mysql_query("INSERT INTO acara (nama, waktu, id_harian) VALUES ('$name', '$waktu', '$id_harian')");
	header("location:?page=acara");
	
?>