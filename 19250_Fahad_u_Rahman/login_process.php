<?php
session_start();
require_once("connection/connection.php");

if (isset($_POST['login'])) {
    extract($_POST);

    if($email=="" || $password==""){
      $msg="<p style='color:red'>Enter Your Email And Password</p>";
        header("location:login.php?msg=$msg");
    } 
    else
     {
     	$query="SELECT * FROM USER WHERE email='".$email."' AND PASSWORD='".$password."'";

 	 $result=mysqli_query($connection,$query);
	
	 if($result->num_rows > 0)
    {
      
      $user_info = mysqli_fetch_assoc($result); 
         if ($user_info['is_active'] ==  "Active") {
         if ($user_info['is_approved'] == "Approved" ) {
          if ($user_info['role_id'] == 1) {
          		$_SESSION['user_data']=$user_info;
            header("location:admin/admin_panel.php");
         } 
        elseif ($user_info['role_id'] == 2) {
          		$_SESSION['user_data']=$user_info;
            header("location:index.php");
        }
         
        } 
        else {
          $msg="<p style='color:orange'>Your account is not approved</p>";
          header("location:login.php?msg=$msg");
    }
    } 
    else {
          $msg="<p style='color:red'>Your account is inactive</p>";
        header("location:login.php?msg=$msg");
    }

    } 
    else 
    {   $msg="<p style='color:red'>Email and Password Is Inncorrect</p>";
        header("location:login.php?msg=$msg");
    }

}
}
