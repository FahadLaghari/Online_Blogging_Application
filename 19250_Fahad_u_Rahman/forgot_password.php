<?php
require_once("connection/connection.php");

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
 <body style="background-color:#EFF1F3">
        <div class="container-fluid">
              <div class="row text-center p-3"style="background-color:#005E93;color: #F59640;">
                <p class="fs-3">
                  Wellcome to Online Blogging Application 
                </p>
              </div>
                    <div class="container-fluid">
                      <div class="row" style="margin-top: 160px" >
                        <div class="email">
		                        <div class="text-center" id="message">
		                        	<p> 
		                        	  <?php  if (isset($_REQUEST['msg'])) {
		                        	   echo $_REQUEST['msg'];
		                        	   }
		                       	       ?>
		                        	 </p>
		                        </div>
                              <form action="forgot_password.php" method="POST">
                                  <div class="d-grid gap-2 col-6 mx-auto">
                                    <label class="text-center fs-5"> Please Enter Your Email address</label>

                                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                                  </br>
                                   <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                  </div>
                                </form>
                        </div>
                      </div>
                    </div>


          </div>
           <div class="container-fluid" style="margin-top:170px">
              <div class="row text-center  p-4"style="background-color:#005E93;color: F59640;">
                <p class="fs-3">
                  ©Copyright 2023 Online Blogging Application 
                </p>
              </div>
           </div>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
	# code...

$query=" SELECT email FROM USER ";
$result=mysqli_query($connection,$query);

$data=mysqli_fetch_assoc($result);

if ($data['email']==$_POST['email']) {
	$msg="<p style='color:green'> User matched Sucessfully</p> ";
	header("location:forgot_password.php?msg=$msg");
}
else{
$msg="<p style='color:red'> No Record Found</p> ";
	header("location:forgot_password.php?msg=$msg");
}
}
	
?>

