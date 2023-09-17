<?php

 include("navbar/nav_bar.php")?>			
<html lang="en">
    <head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	  	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

 </head>
  	<body style="background-color: #EFF1F3">
	    <div id="carouselExampleDark" class="carousel carousel-dark slide">
			<div id="carouselExampleDark" class="carousel carousel-dark slide">
				<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
				<div class="carousel-indicators">
	 			    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
	 				 </button>
					<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
					 <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
			 	</div>
				    <div class="carousel-inner">
				         <div class="carousel-item active">
							<img src="images/feedback.png" class="d-block w-100"  height="360px">
				          	 
				  	</div>
				 </div>
				 </div>

 <!-- Section: Design Block -->
			<section class="text-center">
			    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
				      background: hsla(0, 0%, 100%, 0.8); margin-top: 2%">
				   <div class="card-body py-5 px-md-5">
						<div class="row d-flex justify-content-center">
						 <div class="col-lg-8">
					 <h2 class="fw-bold mb-5" style="margin-top: 10%">FeedBack</h2>
					  <form action="feedback_process.php"method="POST">
						    <div class="row">
							   <div class=" mb-4">
							     <div class="form-outline">
							         <input type="text" id="form3Example1" class="form-control" name="name" />
							          <label class="form-label" for="form3Example1">Name</label>
							         </div>
							        </div>
							      </div>

							           <div class="form-outline mb-4">
							              <input type="email" id="form3Example3" class="form-control" name="email" />
							              <label class="form-label" for="form3Example3">Email address</label>
							            </div>
							              	<div class="form-outline">
									 			<textarea class="form-control "  required></textarea>
												<label for="validationTextarea" class="form-label">Message /Feedback</label>
										      </div>
								            </div>												
										    <!-- Submit button -->
							           		 <div class="d-grid gap-2 col-6 mx-auto my-3">
				                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				                              </div>
							          </form>
							        </div>
							      </div>
							    </div>
							  </div>
			</section>			 			


				 <!-- footer start -->
				<footer class="text-center text-lg-start fs-5" style="background-color:#005E93;color: #F59640;height: 260px;">
				  <!-- Section: Social media -->
				
				  <!-- Section: Social media -->

				  <!-- Section: Links  -->
				  <section class="col">
				    <div class="container text-center text-md-start mt-5">
				      <!-- Grid row -->
				      <div class="row mt-3">
				        <!-- Grid column -->
				        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
				          <!-- Content -->
				          <h6 class="text-uppercase fw-bold mb-4">
				            <i class="fas fa-gem me-3"></i>Online Blogging Application
				          </h6>
				          <p>
				            Here you you can Read  all Kinds of blogs as per Choice
				          </p>
				        </div>
				       
				        
				        <!-- Grid column -->

				        <!-- Grid column -->
				        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
				          <!-- Links -->
				          <h6 class="text-uppercase fw-bold mb-4 ">Contact</h6>
				          <p> Jamshoro Sindh Pakistan</p>
				          <p>myblog@gmail.com</p>
				          <p>+92-310 3768218</p>
				        </div>
				        <!-- Grid column -->
				      </div>
				      <!-- Grid row -->
				    </div>
				  </section>
				  <!-- Section: Links  -->

				  <!-- Copyright -->
				  <!-- Copyright -->
				  <!-- <p class="text-center p-4" style="background-color:#005E93 ;margin-top: 0% ">
				    © 2021 Copyright: 
				    <a class="text-reset fw-bold" href="">Online Blogging Application </a>
				  </p> -->
				  <p style="">
				  <div style="font-size: 40px; text-align: center;text-decoration: none;background-color: #005E93">
				      <a href="" class="me-4 text-reset">
				        <i class="fab fa-facebook-f"></i>
				      </a>
				      <a href="" class="me-4 text-reset">
				        <i class="fab fa-twitter"></i>
				      </a>
				      <a href="" class="me-4 text-reset">
				        <i class="fab fa-google"></i>
				      </a>
				      <a href="" class="me-4 text-reset">
				        <i class="fab fa-instagram"></i>
				      </a>
				      <a href="" class="me-4 text-reset">
				        <i class="fab fa-linkedin"></i>
				      </a>
				      <a href="" class="me-4 text-reset">
				        <i class="fab fa-github"></i>
				      </a>
				    </div>
				   </p>
				</footer>
<!-- Footer -->
			      <!-- footer End -->
		<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
	  </body>
</html>