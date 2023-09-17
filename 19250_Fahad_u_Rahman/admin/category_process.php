<?php
session_start();
if($_SESSION['user_data']['role_id'] != 1){
            
          header("location:../index.php?Invalidmsg=Invalid Access");
        }
        elseif( !isset($_SESSION) ){
          header("location:../index.php?Invalidmsg=Invalid Access");

        }
require_once("../connection/connection.php");
date_default_timezone_set("Asia/Karachi");  
 $date= date(" Y:m:d H:i:s");

if (isset($_POST['add_category'])) {

		extract($_POST);
	$query="INSERT INTO category(category_title,category_description,category_status,updated_at)
		VALUES(
		'".$title."',
		'".$description."',
		'".$category_status."',
		'".$date."'
		)";

		$result=mysqli_query($connection,$query);

		if ($result) {
			header("location:add_Categories.php?msg=Added Sucessfully");
		}

}


?>