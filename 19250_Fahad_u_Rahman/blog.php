<?php
session_start();
require_once("connection/connection.php");

?>

<?php

$query="SELECT * FROM blog";
$result=mysqli_query($connection,$query);
 


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 </head>
  	<body style="background-color:#EFF1F3;">
  		<nav class="navbar navbar-expand-lg  p-3 sticky-top "style="  background-color: #005E93">
         <div class="container-fluid">
          <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <div class="navbar-nav fs-3 ">
                    <a class="nav-link " aria-current="page" href="index.php" style="color: #F59640;">Home</a>
                    <a class="nav-link " href="#" style="color: #F59640"></a>
                    <a class="nav-link " href="#" style="color: #F59640">Blogs</a>
                    <a class="nav-link " href="contact_us.php" style="color: #F59640">contact us</a>
                    <a class="nav-link " href="about_us.php" style="color: #F59640">About us</a>
                </div>
                      
                      

               
            </div>
        </div>
  </nav>

		<!--Slider Start -->

		<!--Slider End -->	

	<div class="container ">
		  <div class="row mt-3">
		    <div class="col-lg-8 col-md-6 col-sm-12">
		    	
		    		<div class="row">
					<div>
						<?php 	
								if ($result->num_rows>0) {
									// code...

									while($data=mysqli_fetch_assoc($result)){
										?>		

												  <div style="background-color: #EFF1F3"> 
												  	<h2 class="card-title">Blog Title: <b><?php echo $data['blog_title']?></h2></b>
												  </div>  
												<div class="card mt-3">
												  <img src="<?php echo $data['blog_background_image']?>" class="card-img" alt="...">
												  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
												    <p class="card-text"><small><?php echo $data['created_at']?></small></p>
												</div>



										<?php
									}
								}
						 ?>
						
							<br>
							
												
					</div>		    		
		    	</div>
		    </div>
		    
		 </div>
  </div>
		 		
</div>
			 <div class="container-fluid mt-5">
				<div class="row text-center  p-4"style="background-color:#005E93;color: F59640;">
					<p id="footer" class="text-center fs-3"> 
						<a href="index.php" style="text-decoration: none;color: #F59640 ;"> Home</a>
						<a href="about_us.php" style="text-decoration: none;color: #F59640 ;"> About us</a>
						<a href="contact_us.php" style="text-decoration: none;color: #F59640 ;"> Contact us</a>
					<p>
						<p class="fs-4">
							©Copyright 2023 Online Blogging Application 
						</p>
				</div>
			</div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
				
	    </body>

	</html>
	   