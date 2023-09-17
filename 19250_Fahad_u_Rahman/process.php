<?php
mysqli_report(false);
$connection=mysqli_connect("localhost","root","","data");
if (!$connection)
 {
	echo "Error In connection";
 }
if (isset($_REQUEST['getdata'])) {
	extract($_REQUEST);
	 $getdata;
	
	
$query="SELECT *FROM cnic WHERE cnic=$getdata"; 

$output=mysqli_query($connection,$query);

if ($output->num_rows>0) {
  

   $row= mysqli_fetch_assoc($output);
  	?>
  		
  			<table border="5px" >
  				<tr>
  					<th>Image</th>
  					<th>Name</th>
  					<th>Cnic</th>
  					<th>Address</th>
  				</tr>
  	    <tr>
	  		<td><img  height ="60" width="70" src="<?php echo $row['image'] ?>"></td>
	  		<td><?php echo $row['name'] ?></td>
	  		<td> <?php echo $row['cnic'] ?></td>
	  		<td> <?php echo $row['address'] ?></td>
		</tr>
	</table>

  	<?php
}
else
{
	echo "<b>Given Cnic Is Not Register</b>";

}


}





?>