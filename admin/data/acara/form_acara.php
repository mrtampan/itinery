<!doctype html>
<html>
<head><title>Form Acara</title>
 <meta charset="utf-8" />
 
</head>
<body>
 <div class="container">
    <div class="card card-login mx-auto mt-5">
 
     <div class="card-header">Input Data Acara</div>
	 
	 <div class="card-body">
	 
	<form action="?page=proses-post-acara" enctype="multipart/form-data" method="post" >

         <div class="form-group">
 
           <label >Nama Acara</label>
 
           <input class="form-control"  type="text" name="name">
 
         </div>


			<div class="form-group">
			<label >Hari</label>
			<select name="id_harian" id="ptku" class="form-control" >
			<option value=""></option>
				<?php
				include 'koneksi.php';
				$query = mysql_query("select * from harian ");
				while($row = mysql_fetch_array($query)){?>
				<option value="<?php echo $row['id_harian'];?>"><?php echo $row['nama'];?></option>
				<?php } ?>

			</select>
			</div>
				
		<div class="form-group">
 
           <label >Waktu</label>
 
           <input class="form-control" type="text" name="waktu" >

 
        </div>

         <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
		 
		 <div class="text-center">
 

 
		</div>
	

	</form>
	
	 </div>
 
   </div>
 
 </div>
	
	
  
</body>
</html>