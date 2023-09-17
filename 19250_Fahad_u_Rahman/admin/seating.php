<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
    	span{
    		color: red;
    	}
    	img{
    		border-radius: 20px;
    	}
    </style>
 </head>
 			<body style="background-color:#EFF1F3">
        	<?php require("side_bar.php")?>
        	 <div class="container-fluid">
	            
	             <!-- Section: Design Block -->
							<section class="text-center">
							  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
							        background: hsla(0, 0%, 100%, 0.8);height: 950px;margin-top:100px;
		
							        ">
							    <div class="card-body py-5 px-md-5">
							        	<div style="margin-right: 90%">
							        		<img src="Images/images.jpg" height="200px" width="200px">
							        	</div>
							      <div class="row d-flex justify-content-center">
							        <div class="col-lg-8">
							          <p style="color: red;"><?php if (isset($_REQUEST['msg'])) {
												       echo $_REQUEST['msg'];
												     } ?></p>

												     <h1>User Information</h1>
							          <form action="register_process.php" method="POST" enctype="multipart/form-data">
							            <!-- 2 column grid layout with text inputs for the first and last names -->
							            <div class="row">
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="first_name" name="first_name" value="fahad" class="form-control" />
							                  <span>*</span>
							                  <label class="form-label" for="form3Example1">First name</label>
							                </div>
							                <span id="first_name_msg">
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="last_name"name="last_name"value="Laghari"class="form-control"/>
							                  <span>*</span>
							                  <label class="form-label" for="form3Example2">Last Name</label>
							                </div>
							                  <span id="last_name_msg">         
							              </div>
							            <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="first_name" name="first_name" value="Laghari@gmail.com" class="form-control" />
							                  <span>*</span>
							                  <label class="form-label" for="form3Example1">Email</label>
							                </div>
							                <span id="first_name_msg">
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="last_name"name="last_name" value="Male"class="form-control"/>
							                  <span>*</span>
							                  <label class="form-label" for="form3Example2">Gender</label>
							                </div>
							                  <span id="last_name_msg">         
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="first_name" name="first_name" value="20/10/1999" class="form-control" />
							                  <span>*</span>
							                  <label class="form-label" for="form3Example1">Date Of Birth</label>
							                </div>
							                <span id="first_name_msg">
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="last_name"name="last_name" value="Jamshoro"class="form-control"/>
							                  <span>*</span>
							                  <label class="form-label" for="form3Example2">Address</label>
							                </div>
							                  <span id="last_name_msg">         
							              </div>

							              <div class="col-md-6 mb-4 " >
							                <div class="form-outline">
							                  <input type="text" id="last_name"name="last_name" Value="Active"class="form-control"/>
							                  <span>*</span>
							                  <label class="form-label" for="form3Example2">Status</label>
							                </div>
							            </div>
							               
							      </div>

							            <!-- Email input -->
							           
												      <!-- Submit button -->
							           		 <div class="d-grid gap-2 col-6 mx-auto my-3">
                               				   <button type="submit"  id ="register"name="register"class="btn btn-primary">Register</button>
                              				</div>

							            <!-- Register buttons -->
							            
							          </form>
							        </div>
							      </div>
							    </div>
							  </div>
							</section>
							</center>
                 </div>
</body>
</html>