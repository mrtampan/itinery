<html>
<head>
	<title>Edit</title>
</head>
<body>

	
<?php  
	include "koneksi.php";
	
	$id_harian=$_GET['id_harian'];
	$sql = mysql_query("select * from harian where id_harian='$id_harian'") or die(mysql_error()); //memilih data
	$data = mysql_fetch_array($sql);
?>
	
	<?php
	include ("koneksi.php");
	$id_acara = $_GET['id_acara'];
	$query = mysql_query("select * from acara where id_acara='$id_acara'") or die(mysql_error());
 
	$row = mysql_fetch_array($query);
	?>
	
 <div class="container">
    <div class="card card-login mx-auto mt-5">
 
     <div class="card-header">Edit Data Acara</div>
	 
	 <div class="card-body">
	 
	<form action="?page=proses-edit-acara" enctype="multipart/form-data" method="post" name="postform">
	
		<input type="hidden" name="id_acara" value="<?php echo $row['id_acara'];?>" />

		 <div class="form-group">
 
           <label >Nama Acara</label>
 
           <input class="form-control"  type="text" name="name" value="<?php echo $row['nama']; ?>">
 
         </div>
		 
			<div class="form-group">
			<label>Hari</label>
			<select name="id_harian" id="ptku" class="form-control"> 
					<?php 
					include "koneksi.php";
						$id_user = $_SESSION['id_user'];
						$q=mysql_query("SELECT * FROM harian ORDER BY id_harian"); 
							if ($row[id_harian]==0){
								echo "<option value=0 selected></option>";
							} 
							while ($row1 = mysql_fetch_array($q)){
								if ($row[id_harian]==$row1[id_harian]){
									echo "<option value=$row1[id_harian] selected>$row1[nama]</option>";
								}
								else{
									echo "<option value=$row1[id_harian]>$row1[nama]</option>";
								}
							  }
					?> 
				</select>
			</div>
			
		<div class="form-group">
 
           <label >Deskripsi</label>
 
		   <input class="form-control" type="text" name="waktu" value="<?php echo $row['waktu']; ?>" >
 
        </div>
		 
	<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
		 
	</form>

	</div>
	</div>
	
</div>

	
	
</body>
</html>