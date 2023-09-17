<?php
$connection=mysqli_connect("localhost","root","","profile");
 if(!$connection)
 {
	die("connection is Not Sucessfull");
} 
		if (isset($_POST['submit'])) {

			extract($_POST);

			$directory="Images";
		 if(!is_dir($directory)){
			if(!mkdir($directory)){
				$echo = "Folder Not Created";
				die;
			}
		}
			$file_name=$_FILES['Profile']['name'];
			$temp_name=$_FILES['Profile']['tmp_name'];
			move_uploaded_file($temp_name,$directory."/".$file_name);
		 $query="INSERT INTO users (NAME,last_name,email,phone_no,cnic,file_name,temp_name)
		     VALUES('".$name."','".$last_name."','".$email."','".$phone_no."','".$cnic."',' ".$file_name."','".$directory."/".$file_name."')";

			mysqli_query($connection,$query);
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Registration</title>
</head>
<body>
		<center>
		<fieldset style="width: 50%">
			<legend> Enter Data Here...!</legend>
			<h1>Registration Form</h1>
			    <form action="#"method="POST" enctype="multipart/form-data">
			<table>
				<tr>
				    <td>Name</td>
				 	<td><input type="text" name="name" required></td>	
			    </tr>
			    <tr>
				 	<td>Last_Name</td>
				 	<td><input type="text" name="last_name" required></td>	
			    </tr>
			    <tr>
				 	<td>Email</td>
				 	<td><input type="Email" name="email" required></td>	
			    </tr>
			    	<td>Phone No</td>
				 	<td><input type="number" name="phone_no" required ></td>	
			    </tr>
			    <tr>
			    	<td>CNIC</td>
				 	<td><input type="number" name="cnic" required ></td>	
			    </tr>
			         <tr>
			         	<td>Profile Pic</td>
			         	<td><input type="file" name="Profile" required></td>
			         </tr>
			    <tr>
			    	<td colspan="5" align="center"> <input type="submit" name="submit" value="Register"></td>
			   	 </tr>
			</table>
		</fieldset>
		</form>
		</center>

</body>
</html>


		
	   <center>
		  <table cellpadding="5" border="2px" style="margin-top: 10px" >
		 <tr>
		
			<th>Profile_Image</th>
			<th>Name</th>
			<th>Last_Name</th>
			<th>Email</th>
			<th>Phone_No</th>
			<th>CNIC</th>
		</tr>
<?php
		$query="SELECT * FROM users";
			$result=mysqli_query($connection,$query);
			if($result->num_rows){
				
				while ($obj=mysqli_fetch_assoc($result)) {
				?>
				
				<tr>	
					<td>
					   <img src="<?php echo $obj['temp_name']?>" width="80px" height="80px" >
					 </td>
				    	<td> <?php echo $obj['name'] ."&nbsp" ?> </td>
				     	<td> <?php echo $obj['last_name']."&nbsp"?> </td>
					  	<td> <?php echo $obj['email']?>  </td>	
					 	<td> <?php echo $obj['phone_no']?> </td>
					 	<td> <?php echo $obj['cnic']?>  </td>
								
				</tr>

					<?php
			
		}
			}


?>
</table>
</center>