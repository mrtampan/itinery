<html>
<head>
	<title>Acara</title>
</head>
<body>
<br>
<br>
<div class="table-responsive-sm container-fluid" >
<a href="?page=post-acara" class="btn btn-primary">Tambah Data Acara</a>
	<table class="table table-sm table-bordered"  align="center">
		<tr bgcolor="#99CCFF" >
			<th scope="col">No</th>					
			<th scope="col">Nama acara</th>		
			<th scope="col">Waktu</th>
			<th scope="col">Hari</th>
			<th scope="col">Pilih</th>
		</tr>

	<?php
		include ('koneksi.php');
		
		ob_start();
		session_start();
		if(!isset($_SESSION['id_admin'])){
			die("Login Dulu dong kak");
		}
		
		//query data menggunakan limit $posisi dan batas
		$query="select ac.*, hr.nama AS namaHari from acara ac INNER JOIN harian hr ON ac.id_harian = hr.id_harian" ;
		
		$result=mysql_query($query) or die (mysql_error());
		$no=1;
		
		while ($rows=mysql_fetch_object($result)){
	?>

	<tr>
		<td ><?php echo $rows -> id_acara;?>
		</td>
		<td ><?php echo $rows -> nama;?>
		</td>
		<td ><?php echo $rows -> waktu;?>
		</td>
		<td><?php echo $rows -> namaHari;?></td>
		<td ><a href="?page=edit-acara&&id_acara=<?php echo $rows -> id_acara;?>"><img src="icon/edit.png" class="preview" title="edit" width="30" height="30"/></a>
		<a href="?page=hapus-acara&&id_acara=<?php echo $rows -> id_acara;?>"><img src="icon/hapus.png" class="preview" title="hapus" width="30" height="30"/></a></td>
		
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>
	
				
		