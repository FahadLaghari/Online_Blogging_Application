<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
    	span{
    		color: red;
    	}
    </style>
 </head>
 			<body style="background-color:#EFF1F3">
 			<div class="container-fluid">
               <?php include("navbar/nav_bar.php")?>	
              </div>
           </div>
        	 <div class="container-fluid">
	            
	             <!-- Section: Design Block -->
							<section class="text-center">
							  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
							        background: hsla(0, 0%, 100%, 0.8);margin-top:30px;
		
							        ">
							    <div class="card-body py-5 px-md-5">
							    	<p><?php if (isset($_REQUEST['msg'])) {
												       echo $_REQUEST['msg'];
												     } ?></p>

							      <div class="row d-flex justify-content-center">
							        <div class="col-lg-8">
							          <h2 class="fw-bold mb-5">Register Here</h2>
							          <form action="register_process.php" method="POST" enctype="multipart/form-data">
							            <!-- 2 column grid layout with text inputs for the first and last names -->
							            <div class="row">
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="first_name" name="first_name"  class="form-control" />
							                  <span>*</span>
							                  <label class="form-label" for="form3Example1">First name</label>
							                </div>
							                <span id="first_name_msg">
							              </div>
							              <div class="col-md-6 mb-4">
							                <div class="form-outline">
							                  <input type="text" id="last_name"name="last_name"class="form-control"/>
							                  <span>*</span>
							                  <label class="form-label" for="form3Example2">Last Name</label>
							                </div>
							                  <span id="last_name_msg">         
							              </div>
							            </div>

							            <!-- Email input -->
							            <div class="form-outline mb-4">
							            	<span id="email_msg"></span>
							              <input type="email" id="email" name="email" class="form-control"/>
							              <span>*</span>
							              <label class="form-label" for="form3Example3">Email address</label>
							            </div>
							            <!-- Date of Birth -->
							            	<span id="date_of_birth_message"></span>
							             <div class="form-outline mb-4">
							              <input type="date" id="date_of_birth" name="date_of_birth" class="form-control" />
							               <span>*</span>
							              <label class="form-label" for="form3Example3">Date Of Birth</label>
							            </div>	
							            <!-- Image -->
							               <span id="Profile_message"></span> 
							              <div class="form-outline mb-4">
							              <input type="file" id="profile" name="profile"class="form-control" />
							               <span>*</span>
							              <label class="form-label" for="form3Example3">Profile</label>
							            </div>

							            <!-- Password input -->
							                <span id="password_message"> </span>
							            <div class="form-outline mb-4">
							              <input type="password" id="password" name="password"class="form-control" />
							                <span>*</span>
							              <label class="form-label" for="form3Example4">Password</label>
							              <!-- Password End -->
							              <!-- Address -->
							          

							              	<div class="form-outline">
							              				<span id="address_message"></span>
													      <textarea class="form-control "id="address" name="address" ></textarea>
													     	<span>*</span>
													      <label for="validationTextarea" class="form-label">Addres</label>
													    </div>
								            </div>
											<span>*</span>
											<label >Gender</label>
							             <div class="form-check form-check-inline">
														  <input class="" type="radio" name="gender" id="male" value="Male" />
														  <label class="form-check-label" for="inlineRadio1">Male</label>
														</div>

														<div class="form-check form-check-inline">
														  <input class="" type="radio" name="gender" id="female" value="Female" />
														  <label class="form-check-label" for="inlineRadio2">Female</label>
														</div>
														<span id="gender_message"></span>
																   <div class="d-grid gap-2 col-6 mx-auto my-3">
																	<a href="login.php">If you have an account Login Here</a
																	>
																</div >
												      <!-- Submit button -->
							           		 <div class="d-grid gap-2 col-6 mx-auto my-3">
                               				   <input type="submit" name="register" class="btn fs-5" style="background-color:#005E93;color:#F59640" value="Register" onclick="return registration();">
                               				 </div>

							            <!-- Register buttons -->
							            
							          </form>
							        </div>
							      </div>
							    </div>
							  </div>
							</section>


							</center>
							<script type="text/javascript">
						function registration() {

							buffer = true;
							var first_name = document.getElementById('first_name').value;
							var last_name = document.getElementById('last_name').value;
							var email = document.getElementById('email').value;
							var dob=document.getElementById('date_of_birth').value;
							var password=document.getElementById('password').value;
							var profile=document.getElementById('profile').value;
							var address=document.getElementById('address').value;
							var gender = null;
							var male = document.getElementById('male');
							var female = document.getElementById('female');

							if (male.checked)
							 {
								gender = male.value;
							 }
							 else if (female.checked)
							 {
								gender = female.value;
							}
							

							var fullName = /^[A-Z][a-z]{2,8}$/
							var emailPattern =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
							var pass=/^[A-Za-z]\w{7,14}$/

							if(first_name == ""){
								buffer = false
								document.getElementById('first_name_msg').innerHTML = "Please Enter Your First Name";
							}
							else{
								if(!fullName.test(first_name)){
									buffer = false
									document.getElementById('first_name_msg').innerHTML = "Please Enter Your First Name eg: Fahad";
								}
								else{
									document.getElementById('first_name_msg').innerHTML = "";
								}
							}


							if(last_name == ""){
								buffer = false
								document.getElementById('last_name_msg').innerHTML = "Please Enter Your Last Name";
							}
							else{
								if(!fullName.test(last_name)){
									buffer = false
									document.getElementById('last_name_msg').innerHTML = "Please Enter Your last Name eg: Laghari";
								}
								else{
									document.getElementById('last_name_msg').innerHTML = "";
								}
							}
							if(email == ""){
								buffer = false
								document.getElementById('email_msg').innerHTML = "Please Enter Your Email";
							}
							else{
								if(!emailPattern.test(email)){
									buffer = false
									document.getElementById('email_msg').innerHTML = "Please Enter Your Email eg: laghari22@gmail.com";

								}
								else{
									document.getElementById('email_msg').innerHTML = "";
								}
							}


							if(dob == ""){
								buffer = false
								document.getElementById('date_of_birth_message').innerHTML = "Please Enter Your Date of Birth";
							}
							else{
								if(!dob){
									buffer = false
									document.getElementById('date_of_birth_message').innerHTML = "Please Enter Your date of Birth eg: 12/31/1999";
								}
								else{
									document.getElementById('date_of_birth_message').innerHTML = "";
								}
							}
							if (password == "") {
								buffer=false

								 document.getElementById('password_message').innerHTML="Enter Your Password";

							}
							else{
								document.getElementById('password_message').innerHTML="";
							}

							if(profile==""){
								buffer =false

								document.getElementById('Profile_message').innerHTML="Plese Select Profile";
							}
							else{
								document.getElementById('Profile_message').innerHTML="";
							}

							if (address=="") {
								buffer=false;

								document.getElementById('address_message').innerHTML="Please Enter Your Address";
							}
							else{

								document.getElementById('address_message').innerHTML="";
							}

							if (!gender) {
							 buffer = false;
            				document.getElementById("gender_message").innerHTML = "Please Select Gender !...";
							}
							else
							{
							document.getElementById("gender_message").innerHTML = "";
							}
						
							
							if(buffer == true){
								return true
							}
							else{
								return false
							}

						}	



					</script>
                 </div>
                   <div class="container-fluid" style="margin-top :100px">
              <div class="row text-center  p-4"style="background-color:#005E93;color: #F59640;">
                <p class="fs-5">
                  ©Copyright 2023 Online Blogging Application 
                </p>
              </div>
           </div>
</body>
</html>