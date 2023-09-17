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
						
					</div>
				</div>
			</nav>
			
			<!-- Slider Start -->
			
			<!--Slider End -->
			<div class="container mb-3 mt-3">
				<div class="row">
					<div class="col-sm-8">
						<div class="card">
							<div class="card-header">
								<h2 class="text-center">ALL POSTS</h2>
							</div>
							<div class="card-body">
								<?php
									 $queryPost="SELECT * FROM post where post_status = 'Active'  AND blog_id='".$_REQUEST['id']."'  	limit 5";
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
								else{
									echo "<h3 class='text-center bg-danger'> No Post In this BLog</h3>";
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-header">
								<h2 class="text-center">BLOG DETAILS</h2>
							</div>
							<div class="card-body mx-auto">
								<?php
										$queryBlog="SELECT * FROM blog where blog_status = 'Active'AND blog_id='".$_REQUEST['id']."'";
									$result=mysqli_query($connection,$queryBlog);
									if ($result->num_rows > 0) {
										// code...
								while ($dataBlog = mysqli_fetch_assoc($result) ) {
								?>
								<div class="card mb-3" >
									<img src="<?php echo $dataBlog['blog_background_image']; ?>" class="card-img-top" alt="..." height="200x" width="100px">
									<div class="card-body">
										<h5 class="card-title fs-2 fw-bold"> <?php echo $dataBlog['blog_title']; ?></h5>
										<hr>
										<a href="view_blog.php?id=<?php echo $dataBlog['blog_id'] ?>&action=view_blog"></a>
									</div>
								</div>
								<?php
								// code...
								}

								}
								else{
									
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