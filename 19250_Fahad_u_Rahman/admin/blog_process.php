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



		if (isset($_POST['create'])) {
			extract($_POST);
			$blog_title;
			$per_page;
			$status;

	        $directory="images";
	        $image_name= rand().$_FILES['attachment']['name'];
	        $image_path= $_FILES['attachment']['tmp_name'];
	        $path=$directory."/".$image_name;
	        $server="../".$directory."/".$image_name;
	        move_uploaded_file($image_path,$server);

	    	$query="INSERT INTO blog( user_id,blog_title,post_per_page,blog_background_image,blog_status,updated_at)
			VALUES(
			'".$_SESSION['user_data']['user_id']."',
			'".$blog_title."','".$per_page."',
			'".$path."',
			'".$status."',
			'".$date."'
			)";

			$result=mysqli_Query($connection,$query);
			if ($result) {
				$message="<p style='color:green'>Blog Create Sucessfully</p>";
				header("location:add_blog.php?msg=$message");
			}

	     
}

?>