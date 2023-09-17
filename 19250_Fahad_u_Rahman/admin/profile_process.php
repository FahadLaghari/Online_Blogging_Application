<?php
session_start();
 				if($_SESSION['user_data']['role_id'] != 1){
            
          header("location:../index.php?Invalidmsg=Invalid Access");
        }
        elseif( !isset($_SESSION) ){
          header("location:../index.php?Invalidmsg=Invalid Access");

        }



require_once("../connection/connection.php");
extract($_POST);

		$query=" UPDATE USER
		SET first_name ='".$first_name."',last_name='".$last_name."', gender='".$gender."', date_of_birth='".$date_of_birth."',address	='".$address."',updated_at=NOW()
		WHERE user_id= ' ".$_SESSION['user_data']['user_id']."'";
		$result=mysqli_query($connection,$query);

		if ( $result ) {
			$msg="<p sytle='color:green'> Data Updated Sucessfully</p>";
			header("location:view_profile.php?msg=$msg");
		}
		else{
			die("Data is Not Updated");
		}

?>