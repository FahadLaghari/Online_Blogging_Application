<?php
  session_start();
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


    require_once("../connection/connection.php");
        if($_SESSION['user_data']['role_id'] != 1){
            
          header("location:../index.php?Invalidmsg=Invalid Access");
        }
        elseif( !isset($_SESSION) ){
          header("location:../index.php?Invalidmsg=Invalid Access");

        }



    /*echo "<pre>";
    print_r($_POST);
    die;*/
    date_default_timezone_set("Asia/Karachi");  
    $date= date(" Y:m:d H:i:s");

  if (isset($_POST['register']))
   {      

   
       extract($_POST);
      $directory="images";

     $image_name= rand().$_FILES['profile']['name'];
     $image_path= $_FILES['profile']['tmp_name'];
     $serverpath="../".$directory."/".$image_name;
     $path=$directory."/".$image_name;
      
      move_uploaded_file($image_path,$serverpath);


    $query="INSERT INTO user (first_name,last_name,email,PASSWORD,role_id,gender,date_of_birth,user_image,address,is_approved,is_active, updated_at)
     VALUES (
             '".$first_name."',
             '".$last_name."',
             '".$email."',
             '".$password."',
             '".$role_type."',
             '".$gender."',
             '".$date_of_birth."',
             '".$path."',
             '".$address."',
             'Approved','active',
             '".$date."'
              )";
       
      $result=mysqli_query($connection,$query);


      if ($result) {

            $mail->addAddress($email);
            $mail->Subject = 'Account Creation';
            $mail->msgHTML("Account Registered Sucessfully");
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                /*echo 'Message sent!';*/
            }

        $msg="<h5 style='color:green'> Registred Sucessfully</h5>";
          header("location:register.php?msg=$msg");
      }
      else{

          header("location:register.php?msg=Not Registred");
      }


    }
  

      
     
?>