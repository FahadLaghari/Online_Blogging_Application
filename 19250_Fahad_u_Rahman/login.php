<?php include("navbar/nav_bar.php")?>  
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
 <body style="background-color:#EFF1F3">
        <div class="container-fluid">
              
           </div>
            <h1 class="text-center"style="margin-top: 85px;">Login Here</h1>
       <center>
                  <?php if (isset($_REQUEST['msg'])) {
                        echo $_REQUEST['msg'];
                        }
                      ?>      
         <form action="login_process.php" method="POST">
            <div class="col-4"style="margin-top: 50px;">
              <span id="email_message"></span>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your Email">
            </div>
              </br>
            <div class="col-4">
              <span id="password_message"></span> 
              <input type="password" class="form-control" id="Password" name="password" placeholder="Enter your Password">
              <a href="forgot_password.php" class="forgot-password" >Forgot Password?</a>
            </div>
            </br>
          
              <div class="d-grid gap-2 col-4 mx-auto">
                 <button type="submit" class="btn btn-primary" name="login" >Login</button>
              </div>
              <div class="text-center">New Member? <a href="register.php">Register Here!</a></div>
     
         </form>
      </center>
          


            <div class="container-fluid" style="margin-top:200px">
              <div class="row text-center  p-4"style="background-color:#005E93;color: #F59640;">
                <p class="fs-5">
                  ©Copyright 2023 Online Blogging Application 
                </p>
              </div>
           </div>
</body>
</html>


