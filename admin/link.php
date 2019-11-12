<?php 
	error_reporting(0);
	$page=$_GET['page'];
	switch($page)
	{
		case "us"; include "home.php"; break;
		
		//linking acara
		case "post-acara"; include "data/acara/form_acara.php"; break;
		case "proses-post-acara"; include "data/acara/proses_add_acara.php"; break;
		case "edit-acara"; include "data/acara/edit_acara.php"; break;
		case "proses-edit-acara"; include "data/acara/proses_edit_acara.php"; break;
		case "acara"; include "data/acara/tampil_acara.php"; break;
		case "hapus-acara"; include "data/acara/hapus_acara.php"; break;
		

		default; include "home.php"; break;
	}
?>