<?php

session_start();

/*print_r($_SESSION['user_data']);
die();*/
require("connection/connection.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  	<style>
  		a{
  			text-decoration: none;
  		}
  	</style>
 </head>
  	<body style="background-color:#EFF1F3">
  		<nav class="navbar navbar-expand-lg  p-3 sticky-top "style="  background-color: #005E93; height: 60px">
         <div class="container-fluid">
          <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
            <a class="navbar-brand" href="#">
              <img src="https://img.freepik.com/premium-vector/writing-blog-logo-content-logo-template_658057-29.jpg?w=740" height="70px" width="130px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <div class="navbar-nav fs-4"aria-pressed="true">
                    <a class="nav-link " aria-current="page" href="index.php" style="color: #F59640;">Home</a>
                    <a class="nav-link " href="contact_us.php" style="color: #F59640">contact us</a>
                    <a class="nav-link " href="about_us.php" style="color: #F59640">About us</a>
                </div>
                               

                      </ul>
                      <?php
                        if (!isset($_SESSION['user_data'])) {
                        	# code...
                        
                      ?>
                 <a href="login.php">
                    <button class="btn btn-outline-primary  fs- " type=    "submit" style="margin: 10px; color: #F59640;">Login
                    </button>
                </a>
                  <br>
                  <a href="register.php">
                    <button class="btn btn-outline-primary fs- " type="submit" style="color: #F59640">Register</button>
                  </a>
                  <?php
                  }
                  ?>
                   <li class="nav-item dropdown" style="list-style: none">

                      <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color:#F59640">
                     <!-- <i class="fas fa-user fa-fw"></i> -->
                     
                     <img src="">
                      </a>
                      <ul class="dropdown-menu"style="text-decoration: none">
                      <li><a class="dropdown-item" href="view_profile.php">View_profile</a></li>
                      <li><a class="dropdown-item" href="Seating.php">Seatings</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="admin/logout.php">Logout</a></li>
                    </ul>
                 </li>
            </div>
        </div>
  </nav>
		<div class="container mb-3 mt-3">
			<?php 
      error_reporting(0);


					$queryPost="SELECT * FROM post where post_id =".$_GET['postid'];
					$result=mysqli_query($connection,$queryPost);
					$dataPost = mysqli_fetch_assoc($result);
			 ?>
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<h2 class="text-center"><?php echo $dataPost['post_title']; ?></h2>
						</div>
						<div class="card-body">
  								<div class="card" >
  								  <img src="<?php echo $dataPost['featured_image']; ?>" class="card-img-top" alt="..." height="400x" width="100px">
  								  <div class="card-body">
  								  	<h3><b>Post Summary</b></h3>
  								  	<hr>
  								    <h5 class="card-title"><?php echo $dataPost['post_summary']; ?></h5>
  								    <hr>
  								    <h3><b>Post Description</b></h3>
  								  	<hr>
  								    <p>
  								    	<?php echo $dataPost['post_description']; ?>
  								    </p>
  								<hr>
  								<?php 
  										$postdata = "SELECT * FROM post_atachment where post_id=".$_GET['postid'];
  										$result = mysqli_query($connection,$postdata);
  										$data = mysqli_fetch_assoc($result);
  								 ?>
  								<h3><b>Post Attachment</b></h3>
  								  	<hr>
  								    <h5 class="card-title">Title : <?php if (!isset($_SESSION['user_data'])) echo $data['post_attachment_title']; ?></h5>
  								    <a href="<?php echo $data['post_attachment_path']; ?>" target="blank" class="btn btn-primary" download>Download</a>
  								  </div>
  								</div>
						</div>
						<?php 

							if ($dataPost['is_comment_allowed'] == 1 && isset($_SESSION['user_data'])) {
								?>
									<div class="card-footer">
							<h4>Comments</h4>
							<?php 
								$comment = "SELECT * FROM post_comment where is_active='Active' AND post_id=".$_GET['postid'];
								$result = mysqli_query($connection,$comment);
								if($result->num_rows > 0){
								while ($commentdata = mysqli_fetch_assoc($result)) {
											$user = "SELECT * FROM USER where user_id =".$commentdata['user_id'];
											 $user_result=mysqli_query($connection,$user);
											 $test=mysqli_fetch_assoc($user_result);
											?>
											<img src="<?php echo $test['user_image'] ?>" alt=""height="80px" width="60px">
											<p><b>User Name</b>  :<?php echo $test['first_name'] ?> </p>
											<p> <b>Comment</b>  : <?php echo $commentdata['comment'] ?> </p>
											<p> <b>Time </b> : <?php echo $commentdata['created_at'] ?> </p>
											<hr>
											<?php
								}
								} else {
									echo "No Comments Found";
								}


							?>
							<form action="post_comment_process.php" method="POST">
								<input type="hidden" name="user_id" value="<?php echo $_SESSION['user_data']['user_id'] ?>">
								<input type="hidden" name="postid" value="<?php echo $dataPost['post_id'] ?>">
								Add Comment :
								<input type="text" name="comment" class="form-control">
								<hr>
								<input class="btn btn-primary" type="submit" value="submitcomment" name="submit">
							</form>

						</div>
								<?php
							}

						?>
						
					</div>
				</div>
				
			</div>
		</div>
	
	
  
  
</div>
</div>
</div>

			<div class="container-fluid mt-5 col-12 .col-sm-6 .col-md-8">
				<div class="row text-center  p-4"style="background-color:#005E93;color:#F59640;height:100px">
					<p id="footer" class="text-center fs-5"> 
						<a href="" style="text-decoration: none;color: #F59640 ;"> Home</a>
						<a href="" style="text-decoration: none;color: #F59640 ;"> Categories
						</a>
						<a href="" style="text-decoration: none;color: #F59640 ;"> About us</a>
						<a href="" style="text-decoration: none;color: #F59640 ;"> Contact us</a>
					</p>
						<p class="fs-5">
							©Copyright 2023 Online Blogging Application 
						</p>
				</div>
			</div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
				
	    </body>

	</html>

