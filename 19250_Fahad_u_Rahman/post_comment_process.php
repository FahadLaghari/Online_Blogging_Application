
	<?php 
		require_once("connection/connection.php");
/*		print_r($_POST);*/
		if (isset($_POST['submit'])) {
			
			extract($_POST);

			echo $query="INSERT INTO post_comment(post_id,user_id,comment,is_active)
			    VALUES (
			       
			      '".$postid."',
			      '".$user_id."',
			      '".$comment."',
			      'InActive'
			        )";

				$result=mysqli_query($connection,$query);
				if ($result) {
					header("location:post_description.php?postid=$postid");
				}

		}
