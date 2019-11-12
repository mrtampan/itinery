<?php
include ('koneksi.php');

	$id_acara=$_GET['id_acara'];
	$row=mysql_fetch_array(mysql_query("select * from acara where id_acara='$id_acara'"));

	$query=mysql_query("delete from acara where id_acara='$id_acara'");

		
	header("Location:?page=acara");
?>