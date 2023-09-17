<?php

    session_start();
        if($_SESSION['user_data']['role_id'] != 1){
            
          header("location:../index.php?Invalidmsg=Invalid Access");
        }
        elseif( !isset($_SESSION) ){
          header("location:../index.php?Invalidmsg=Invalid Access");

        }



  require_once("../connection/connection.php");
  if (isset($_POST['post'])) {

  
        extract($_POST);
       $directory="images";
       

      $image_name= rand().$_FILES['featured_image']['name'];
      $image_path= $_FILES['featured_image']['tmp_name'];
      $path_server="../".$directory."/".$image_name;
      $path=$directory."/".$image_name;
      
      
      move_uploaded_file($image_path,$path_server);


      

       $query="INSERT INTO post (blog_id,post_title, post_summary, post_description, featured_image, post_status, is_comment_allowed,updated_at)
              VALUES (
                    '".$blog_id."',
                   '".$post_title."',
                     '".$post_Summary."', 
                     '".$post_description."', 
                     '".$path."', 
                     '".$post_status."',
                      '".$comment."',
                      NOW())";

                        
                     $result=mysqli_query($connection,$query);
                     if ($result) {
                      $lastid = mysqli_insert_id($connection); 
                       
                      //$message="<p style='color:green'>Post Added Sucessfully</p>";
                      //header("location:add_post.php?msg=$message");
                if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {

                $image_name=rand().$_FILES['attachment']['name'];
                $image_path= $_FILES['attachment']['tmp_name'];
                $path=$directory."/".$image_name;
                move_uploaded_file($image_path,$path);

                $query="INSERT INTO `post_atachment`(post_id ,post_attachment_title,post_attachment_path,is_active,updated_at)
                  VALUES(
                          '".$lastid."',
                          '".$attachment_name."',
                          '".$path."',
                          'Active',
                           NOW())";
                          $result= mysqli_query($connection,$query);


                }
                    $query="INSERT INTO `post_category`(post_id,category_id,updated_at)
                    VALUES(
                            '".$lastid."',
                            '".$Category_title."',
                            NOW())";
                            $result=mysqli_query($connection,$query);

                     }
                      $message="<p style='color:green'>Post Added Sucessfully</p>";
                      header("location:add_post.php?msg=$message");      

  
}


?>


































