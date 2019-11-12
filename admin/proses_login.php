<?php
error_reporting(0);
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST ['password'];


	$cek = mysql_query ("SELECT * FROM admin WHERE username='$username' AND password='$password'");
	if (mysql_num_rows($cek)==1)
	{
		while($c = mysql_fetch_array($cek)){
		$_SESSION['id_admin'] = $c['id_admin'];
		$_SESSION['username'] = $c['username'];
		$_SESSION['password'] = $c['password'];
		$_SESSION['nama_user'] = $c['nama_user'];
		$_SESSION['level'] = $c['level'];

		
		header ("location:index.php");
		}
	}else{
		die("password salah <a href=\"javascript:history.back()\">kembali</a>");
	
}
?>