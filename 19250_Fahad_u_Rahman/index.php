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
							<a class="nav-link " href="blog.php" style="color: #F59640">Blogs</a>
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
								<?php if(isset($_SESSION['user_data'])) { ?>
								<img src="<?php  echo isset($_SESSION['user_data'])?$_SESSION['user_data']['user_image']:"" ?>" height="50px" width="50px" style="padding: 2px "id="profile">
								<?php echo  isset($_SESSION['user_data'])?$_SESSION['user_data']['first_name']:"" ; } ?>
							</a>
							<ul class="dropdown-menu"style="text-decoration: none">
								<li><a class="dropdown-item" href="view_profile.php">View_profile</a></li>
								<li><a class="dropdown-item" href="admin/admin_panel.php">Dashboard</a></li>
								<li><hr class="dropdown-divider"></li>
								<li><a class="dropdown-item" href="admin/logout.php">Logout</a></li>
							</ul>
						</li>
					</div>
				</div>
			</nav>
			
			<!-- Slider Start -->
			<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="1000">
						<img src="images/18165360161.jpg" class="d-block w-100" alt="..." height="300px">
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<img src="images/images.jpg" class="d-block w-100" alt="..." height="300px">
					</div>
					<div class="carousel-item">
						<img src="images/10581726911727269821download.jpg" class="d-block w-100" alt="..." height="300px">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
				</button>
			</div>
			<!--Slider End -->
			<div class="container mb-3 mt-3">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-header">
								<h2 class="text-center">Recent Posts</h2>
							</div>
							<div class="card-body">
								<?php
									$queryPost="SELECT * FROM post  where post_status = 'Active' ORDER BY post_id DESC  limit 5";
									$result=mysqli_query($connection,$queryPost);
									if ($result->num_rows > 0) {
										// code...
								while ($dataPost = mysqli_fetch_assoc($result) ) {
								?>
								<div class="card mb-3" >
									<img src="<?php echo $dataPost['featured_image']; ?>" class="card-img-top" alt="..." height="400x" width="100px">
									<div class="card-body">
										<h5 class="card-title"><?php echo $dataPost['post_title']; ?></h5>
										<hr>
										<p>
											<?php echo $dataPost['post_summary']; ?>
										</p>
										<hr>
										<a href="post_description.php?postid=<?php echo $dataPost['post_id'] ; ?>" class="btn btn-primary">View More</a>
									</div>
								</div>
								<?php
								// code...
								}
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header">
								<h2 class="text-center">All Blogs</h2>
							</div>
							<div class="card-body mx-auto">
								<?php
										$queryBlog="SELECT * FROM blog where blog_status = 'Active' limit 5";
									$result=mysqli_query($connection,$queryBlog);
									if ($result->num_rows > 0) {
										// code...
								while ($dataBlog = mysqli_fetch_assoc($result) ) {
								?>
								<div class="card mb-3" >
									<img src="<?php echo $dataBlog['blog_background_image']; ?>" class="card-img-top" alt="..." height="200x" width="100px">
									<div class="card-body">
										<h5 class="card-title"><?php echo $dataBlog['blog_title']; ?></h5>
										<hr>
										<a href="view_blog.php?id=<?php echo $dataBlog['blog_id'] ?>&action=view_blog" class="btn btn-primary">View More</a>
									</div>
								</div>
								<?php
								// code...
								}
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="container-fluid mt-5 col-12 .col-sm-6 .col-md-8">
				<div class="row text-center  p-4"style="background-color:#005E93;color:#F59640;height:80px">
					<p class="fs-5">
						©Copyright 2023 Online Blogging Application
					</p>
				</div>
			</div>
			<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
			
		</body>
	</html>