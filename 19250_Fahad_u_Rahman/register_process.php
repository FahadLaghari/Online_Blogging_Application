<?php
  
    require_once("connection/connection.php");
    date_default_timezone_set("Asia/Karachi");  
    $date= date("Y:m:dH:i:s");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer();
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->SMTPAuth = true;
$mail->Username = 'fahadlaghari783@gmail.com';
$mail->Password = 'ssuebsackszmigcs';
$mail->setFrom('fahadlaghari783@gmail.com', 'Online Bloging Applion');
$mail->AddCc('');
$mail->AddBcc('');



    /*echo $date;
    die;*/
  if (isset($_POST['register']))
   {      
      extract($_POST);
        //$maxlength=1000000;
     /*$size=$_FILES['profile']['size']); retun in  bytes  1000000 bytes=1mb
      if($size>$maxlength)
      die;*/
     $directory="Images";
     if(!is_dir($directory)){
      if(!mkdir($directory)){
        $echo = "Folder Not Created";
      }
    }
     $image_name= rand().$_FILES['profile']['name'];
     $image_path= $_FILES['profile']['tmp_name'];
     $path= $directory."/".$image_name;
      
      move_uploaded_file($image_path,$path);
    
     $errors=null;
     $buffer=true;
   
   if ($first_name=="")
    {
    	$buffer=false;
      $errors .='Please enter your name';
      header("location:register.php?msg=$errors");

    }
     elseif (!preg_match("/^[A-Z][a-z]{3,8}$/", $first_name))
      {
     	$buffer=false;
       $errors .= 'Enter Your First Name eg: Fahad';
       header("location:register.php?msg=$errors");
     }
  
  	elseif ($last_name=="") {
  		$buffer=false;
  		$errors.='Enter your last Name ';
  		header("location:register.php?msg=$errors");
  	}
  	elseif (!preg_match("/^[A-Z][a-z]{2,8}$/",$last_name))
  	{
  		$buffer=false;

  		$errors .='Enter you Last Name Like Ali,Fahad';
  		header("location:register.php?msg=$errors");
  	}
  	elseif ($email=="") 
  	{
  		$buffer=false;
  		$buffer=false;
      $errors .='Please enter your Email';
      header("location:register.php?msg=$errors");
  	}
  	elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email))
  	{
  		$buffer=false;
  		$errors .='Enter Your Email Like fahad12@gmail.com';
  	}
  	elseif ($date_of_birth=="") 
  	{
  		$buffer=false;
  		$errors .='Please Enter your date of birth';
  		header("location:register.php?msg=$errors");
  	}
  	 /*elseif ($profile=="")
  	 {
  		  $buffer=false;
  		  $errors .='Please Select your Profile Picture';
  		  header("location:register.php?msg=$errors");
  	 }*/
  	elseif ($password=="") 
  	{
  		$buffer=false;
  		$errors .='Please Enter Your password';
  		header("location:register.php?msg=$errors");
  	}
  	elseif ($password<8)
  	 {
  		$buffer=false;
  		$errors.='Password Must be 8 Characters or Numbers';
  	}
  	elseif ($address=="") 
  	{
  		$buffer=false;
  		$errors.='Please Enter your Address';
  		header("location:register.php?msg=$errors");
  	}
    elseif ($buffer=false) 
    {
      $errors.='Please Select All Feilds';
    header("location:register.php?msg=$errors");
    }
    elseif ($gender=="") 
    {
      $errors.='Please Select gender';
    header("location:register.php?msg=$errors");
    }
    /*elseif($email=){

    }*/
    /*elseif($first_name==""||$last_name==""||$email==""||$password
      ==""||$gender==""||$date_of_birth==""||$profile==""||$address=="")
    {
       $errors.='Fill all Required Feilds';
    header("location:register.php?msg=$errors");

    }*/
    else
    {
       
   echo $query="INSERT INTO USER(role_id,first_name,last_name,email,PASSWORD,gender,date_of_birth,user_image,address,is_active, updated_at)
    VALUES (
       2,
      '".$first_name."',
      '".$last_name."',
      '".$email."',
      '".$password."',
      '".$gender."',
      '".$date_of_birth."
      ','".$path."',
      '".$address."',
      'InActive',
      '".$date."'
        )";

      $result=mysqli_query($connection,$query);

      if ($result) {
         
        $mail->addAddress($email);
        $mail->Subject = 'Account Creating';
        $mail->msgHTML("Account Request send to admin");
        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message sent!';
        }

         $msg="<p style='color:green'></p>";


         header("location:register.php?msg=$msg");
      }
  	
  

  }

}
     
?>