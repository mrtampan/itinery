
<div class="container">
<br>
<div  style="top:20px;">
<?php
	include ("koneksi.php");

?>
<table class="table table-bordered table-striped">
  <thead>
    <tr style="background-color:#579CD7;border-bottom:5px solid white;">
      <th scope="col" class="text-center" style="width:30%;" >Time</th>
      <th scope="col" class="text-center" >Description</th>
    </tr>
  </thead>
  <tbody>
	<?php
	$query = mysql_query("select * from harian") or die(mysql_error());
	while($data = mysql_fetch_array($query)){
	?>
	<tr style="background-color:#579CD7;" class=" parent" >
	<th scope="col" class="text-center" colspan="2" ><?php echo $data['nama']; ?></th>
	</tr>
	<?php
  $query2 = mysql_query("select ac.* from acara ac INNER JOIN harian hr ON ac.id_harian = hr.id_harian where ac.id_harian = '$data[id_harian]'") or die(mysql_error());
  while($data2 = mysql_fetch_array($query2)){
	?>
    <tr>
      <th scope="row"><?php echo $data2['waktu'] ; ?></th>
      <th scope="row" ><?php echo $data2['nama'] ; ?></th>
    </tr>
<?php
}
?>

<?php
 } 
?>
  </tbody>
</table>


</div>
</div>

<script>

</script>
