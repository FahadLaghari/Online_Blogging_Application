<?php 


session_start();
 				if($_SESSION['user_data']['role_id'] != 1){
            
          header("location:../index.php?Invalidmsg=Invalid Access");
        }
        elseif( !isset($_SESSION) ){
          header("location:../index.php?Invalidmsg=Invalid Access");

        }



 				?>
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
        	 <div class="container-fluid">
	            
        	 				<div class="container-fluid">
                                         <nav class="navbar fixed-top" style="background-color:#005E93">      
                                             <button class="btn" type="button"data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                                              <span class="navbar-toggler-icon"style="background-color: #F59640"></span>
                                             </button>
                                             <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasWithBackdrop" aria-labelledby="offcanvasWithBackdropLabel">
                                               <div class="offcanvas-header"style="background-color:#005E93">
                                                 <a href="admin_panel.php" style="text-decoration: none">

                                                   <h5 class="offcanvas-title" id="offcanvasWithBackdropLabel"style="color:#F59640; text-decoration: none;padding: 5px">DashBoard
                                                     <img src="../images/computer.png " height="30px">
                                                   </h5>
                                                   </a>
                                                             <div ><a  style="margin-right: 30%;color: #F59640;text-decoration: none" href="../index.php"> Home</div></a>
                                                 <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                               </div>
                                               <div class="offcanvas-body"style="background-color:#005E93">
                                                       <div class=""style="background-color:#005E93">
                                                    <ul class="list-group"style="background-color:#005E93;color: #F59640">
                                                          <li class="list-group-item" >
                                                            <div>
                                                               <?php if(isset($_SESSION['user_data'])) { ?>
                                                <img src="../<?php  echo isset($_SESSION['user_data'])?$_SESSION['user_data']['user_image']:"" ;} ?>" height="150px" width="100px" style="padding: 2px "id="profile">
                                                    
                                     
                                                            </div>
                                                          </li>
                                                          <li class="list-group-item">
                                                           <div style="color:#F59640">
                                                               <p class="text-center fs-3">Wellcome<?php echo isset($_SESSION['user_data'])?$_SESSION['user_data']['first_name']:"";  ?>  </p>
                                                           </div>
                                                          </li>
                                                          <div>
                                                       <a href="register.php" style="text-decoration: none">

                                                        <li class="list-group-item"style="color:#F59640;text-decoration: none" >Add User</li>
                                                       </a>
                                                       <a href="view_user.php" style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640;text-decoration: none">View users
                                                         </li>

                                                         <a href="approved_user.php" style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640;text-decoration: none">Approved users
                                                         </li>

                                                         <a href="rejected_user.php" style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640;text-decoration: none">Rejected User
                                                         </li>

                                                       </a>
                                                       <a href="Add_Categories.php" style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">Add_Categories</li>
                                                        </a>
                                                        <a href="view_categories.php" style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">View Categories</li>
                                                        </a>
                                                       <a href="add_post.php"  style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">Add Posts</li>
                                                       </a>
                                                       <a href="view_post.php"  style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">view Post.php</li>
                                                       </a>
                                                       <a href="add_blog.php" style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">Add Blog / Page</li>
                                                       </a>
                                                       <a href="Page_Seating"  style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">Add Blog / Page Seating</li>
                                                        </a>
                                                        <a href="view_blogs.php"  style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">View Blogs</li>
                                                        </a>
                                                          <a href="mange_feedback.php"  style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">Manage Feedback</li>
                                                        </a>
                                                         <a href="logout.php"  style="text-decoration: none">
                                                         <li class="list-group-item"style="color:#F59640">Logout</li>
                                                         </a>
                                                     </ul>
                                                     
                                                 </div>     
                                               </div>
                                             </div>
                                             <div style="margin-right: 50px">
                                               
                                                     <li class="nav-item dropdown" style="list-style: none">

                                                       <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:#F59640">
                                                      <!-- <i class="fas fa-user fa-fw"></i> -->
                                                    <?php if(isset($_SESSION['user_data'])) { ?>
                                                <img src="../<?php  echo isset($_SESSION['user_data'])?$_SESSION['user_data']['user_image']:"" ?>" height="50px" width="50px" style="padding: 2px "id="profile">
                                                <?php echo isset($_SESSION['user_data'])?$_SESSION['user_data']['first_name']:"" ; } ?>
                                                     
                                                       
                                                       </a>
                                                       <ul class="dropdown-menu"style="text-decoration: none">
                                                       <li><a class="dropdown-item" href="view_profile.php">View_profile</a></li>
                                                       <li><a class="dropdown-item" href="Seating.php">Seatings</a></li>
                                                       <li><hr class="dropdown-divider"></li>
                                                       <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                                     </ul>
                                                  </li>

                                             </div>
                                             <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                               <div class="offcanvas-header">
                                                 <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdroped with scrolling</h5>
                                                 <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                               </div>
                                               
                                             </div>
                                          </nav>
                                         </div> 
        	 				
        	 				


	             <!-- Section: Design Block -->
							<section class="text-center">
							  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
							        background: hsla(0, 0%, 100%, 0.8);height: 600px;margin-top:70px;
		
							        ">
							    <div class="card-body py-5 px-md-5">
							        	<div style="margin-right: 90%">
							        		<img src="../<?php
							                  echo $_SESSION['user_data']['user_image'];?>" height="100px" width="100px">
							        	</div>
							      <div class="row d-flex justify-content-center">
							        <div class="col-lg-8">
							          <p style="color: red;"><?php if (isset($_REQUEST['msg'])) {
												       echo $_REQUEST['msg'];
												     } ?></p>

												     <h1>User Information</h1>
							          <form action="profile_process.php" method="POST" enctype="multipart/form-data">
							            <!-- 2 column grid layout with text inputs for the first and last names -->
							            <div class="row">
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="first_name" name="first_name" value="<?php
							                  echo $_SESSION['user_data']['first_name'];?>" class="form-control" required />
							                  <span>*</span>
							                  <label class="form-label" for="form3Example1">First name</label>
							                </div>
							                <span id="first_name_msg">
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="last_name"name="last_name"value="<?php
							                  echo $_SESSION['user_data']['last_name'];?>"class="form-control"/>
							                  <span>*</span>
							                  <label class="form-label" for="form3Example2">Last Name</label>
							                </div>
							                  <span id="last_name_msg">         
							              </div>
							            <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="first_name" name="address" value="<?php
							                  echo $_SESSION['user_data']['address'];?>" class="form-control" />
							                  <span>*</span>
							                  <label class="form-label" for="form3Example1">Email</label>
							                </div>
							                <span id="first_name_msg">
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="last_name"name="gender" value="<?php
							                  echo $_SESSION['user_data']['gender'];?>"class="form-control"/>
							                  <span>*</span>
							                  <label class="form-label" for="form3Example2">Gender</label>
							                </div>
							                  <span id="last_name_msg">         
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="first_name" name="date_of_birth" value="<?php
							                  echo $_SESSION['user_data']['date_of_birth'];?>" class="form-control" />
							                  <span>*</span>
							                  <label class="form-label" for="form3Example1">Date Of Birth</label>
							                </div>
							                <span id="first_name_msg">
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
                 <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
                 </div>

</body>
</html>