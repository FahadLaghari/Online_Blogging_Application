<?php
session_start();
require_once("../connection/connection.php");
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
							        background: hsla(0, 0%, 100%, 0.8);
		
							        ">
		
							      <div class="row d-flex justify-content-center">
								        <div class="col-lg-8 mt-5" >
								            <h2 class="fw-bold mb-5 mt-5">Add Posts</h2>
								            <?php if (isset($_REQUEST['msg'])) {
												       echo $_REQUEST['msg'];
												     } ?>
								           <form action="post_process.php" method="POST" enctype="Multipart/form-data">
										            <div class="form-outline mb-4">
										              <label class="form-label" for="form3Example3">Post Title</label>
										              <input type="text" id="post_title" class="form-control" name="post_title" required />
										            </div>
										           
										              <div class="form-outline mb-4">
											              <label class="form-label" for="form3Example3"> Featured Image</label>
											              <input type="file" id="image"  name="featured_image"class="form-control" />
										             </div>
										              <!-- Address -->
										              	<div class="form-outline">
																      <label for="validationTextarea" class="form-label">Post Summary</label>
																      <input type="text"class="form-control " id="post_content" name="post_Summary">
																    </div>

																    <div class="form-outline">
																      <label for="validationTextarea" class="form-label">Post Description</label>
																      <input type="text"class="form-control " id="post_content" name="post_description">
																    </div>

																    	<label>Category</label>
																    	<?php
																			$query="SELECT * FROM `category` WHERE category_status ='Active'";
																			$result=mysqli_query($connection,$query);
																			  if ($result->num_rows) {
																			  	?>
																			
																				<label>Category_title</label>
																	    	 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Category_title">
																	    	 	<?php

																			  		while ($data=mysqli_fetch_assoc($result)) {
																			  			?>
																					      <option value="<?php echo $data['category_id']?>">

																					  	<?php echo $data['category_title']?></option>
																					  	<?php
																			  																				  		}
																			  			
																			  		}
																			  		?>
																			  	</select>
																			
																			  <?php
																			  
																			?>

																		




																		<?php
																			$query="SELECT * FROM blog";
																			$result=mysqli_query($connection,$query);
																			  if ($result->num_rows) {
																			  	?>
																			
																				<label>Blog_title</label>
																	    	 <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="blog_id">
																	    	 	<?php

																			  		while ($blog_data=mysqli_fetch_assoc($result)) {
																			  			?>
																					      <option value="<?php echo $blog_data['blog_id']?>">

																					  	<?php echo $blog_data['blog_title']?></option>
																					  	<?php
																			  																				  		}
																			  			
																			  		}
																			  		?>
																			  	</select>
																			
																			  <?php
																			  
																			?>
																			<label>Status</label>
																			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="post_status">
																				<option value="Active">Active</option>
																				<option value="InActive">InActive</option>
																			</select>

																			<label>Comment Allowed</label>
																			<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="comment">
																				<option value="1">Yes</option>
																				<option value="0">No</option>
																			</select>



																		<div class="form-outline">
																	        <label for="validationTextarea" class="form-label">Attachment Name </label>
																	       <input type="text"class="form-control " id="post_content" name="attachment_name">
																     </div>
																     <div class="form-outline">
																      <label for="validationTextarea" class="form-label">Attachment</label>
																      <input type="file"class="form-control " id="post_content" name="attachment">
																    </div>

																	    <div class="d-grid gap-2 col-6 mx-auto  my-3">
				                                <button type="submit" class="btn btn-primary" name="post">Post</button>
				                              </div>		     
							       				 </form>  
							       			</div>
							       	</div>
							</section>
					</div>	
            <!-- Design -->

          <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>  
</body>
</html>

