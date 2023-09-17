<?php
     session_start();
  require_once("../connection/connection.php");
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      require 'PHPMailer/src/PHPMailer.php';
      require 'PHPMailer/src/SMTP.php';
      $mail = new PHPMailer();
      $mail->isSMTP();

      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->SMTPAuth = true;
      $mail->Username = 'fahadlaghari783@gmail.com';
      $mail->Password = 'ssuebsackszmigcs';
      $mail->setFrom('fahadlaghari783@gmail.com', 'Online Bloging Applion');
      $mail->AddCc('');
      $mail->AddBcc('');




  date_default_timezone_set("Asia/Karachi");  
    $date= date(" Y:m:d H:i:s");

         

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
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
 </head>
 <body style="background-color:#EFF1F3">
      
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
                                         <a href="mange_comment.php"  style="text-decoration: none">
                                         <li class="list-group-item"style="color:#F59640">Manage Comment</li>
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
                        
                      
                      



        
        
      <div class="container-fluid mt-4">
        <div class="row">

          <div class="container">
               
                <!-- for card centring  -->
           <div  style="margin-top: 100px; margin-left: 14%">
            <div class="row">
               <div class="card border-primary mb-3 mt-2" style="max-width: 14rem; height: 10rem;margin: 2%">
                 <a href="view_user.php" style="text-decoration: none;color: black">  
                    <div class="card-header fs-3" style="color: ">Users</div>
                    <div class="card-body">
                      <i class="fas fa-user fa-fw" style="margin-left: 60%;font-size: 50px;color:#005E93 "></i>
		                      <p class="card-text" style="font-size: 20px;color: #F59640">
		                    	<?php
                            if (isset($_SESSION['user_data'])) {
        								    $query="SELECT COUNT(*) FROM USER";
	     		   					    $result=mysqli_Query($connection,$query);
  			     					    if ($result->num_rows >0) {		      
								          $data=mysqli_fetch_assoc($result);
								          echo $data['COUNT(*)'];  
								    }
                            }

								?>
                 </a>
							</p>
                    </div>
                  </div>
                  <div class="card border-primary mb-3 mt-2" style="max-width: 14rem; height: 10rem;">
                    <div class="card-header fs-3">Comments</div>
                      <i class="far fa-comment-dots" style="margin-left: 60%;font-size: 50px;color:#005E93 "></i>
                    <div class="card-body">
                      <p class="card-text" style="color: #F59640;font-size: 20px">
                          <?php
                            if (isset($_SESSION['user_data'])) {
                            $query="SELECT COUNT(*) FROM post_comment";
                          $result=mysqli_Query($connection,$query);
                          if ($result->num_rows >0) {         
                          $data=mysqli_fetch_assoc($result);
                          echo $data['COUNT(*)'];  
                    }
                            }

                ?>

                      </p>
                    </div>
                  </div>
                  <div class="card border-primary mb-3 mt-2" style="max-width: 14rem; height: 10rem; margin-left: 1%">
                    <div class="card-header fs-3">Posts</div>
                    <div class="card-body">
                      <i class="  far fa-comment-alt" style="font-size:50px;margin-left:63%;text-align: center;color:#005E93"></i>
                      <p class="card-text" style="color: #F59640;font-size: 20px">
                      	<?php
                            if (isset($_SESSION['user_data'])) {
        								    $query="SELECT COUNT(*) FROM post";
	     		   					    $result=mysqli_Query($connection,$query);
  			     					    if ($result->num_rows >0) {		      
								          $data=mysqli_fetch_assoc($result);
								          echo $data['COUNT(*)'];  
								    }
                            }

								?>
                      </p>
                    </div>
                  </div>

                  <div class="card border-primary mt-2" style="max-width: 14rem; height: 10rem; margin-left: 1%">
                   <a href="mange_feedback.php"style="text-decoration: none;color:black"> 
                    <div class="card-header fs-3">Feedback</div>
                    <div class="card-body">
                      <p class="card-text" style="color:#F59640;font-size: 20px ">
                      <i class="fas  fa-comments" style="margin-left: 60%;font-size: 50px;color:#005E93 "></i>
                        
                          <?php
                            if (isset($_SESSION['user_data'])) {
                            $query="SELECT COUNT(*) FROM `user_feedback`";
                          $result=mysqli_Query($connection,$query);
                          if ($result->num_rows >0) {         
                          $data=mysqli_fetch_assoc($result);
                          echo $data['COUNT(*)'];  
                           }
                          }
                          ?>
                          </a>
                      </p>
                    </div>
                  </div>

                    <div class="card border-primary mb-3 mt-2" style="max-width: 14rem; height: 10rem; margin-left: 1%">
                    <div class="card-header fs-3">Blogs/Pages</div>
                    <div class="card-body">
                      <p class="card-text">
                      <i class="fas  fa-comments" style="margin-left: 60%;font-size: 50px;color:#005E93 "></i>
                        
                        <?php
                            if (isset($_SESSION['user_data'])) {
                            $query="SELECT COUNT(*) FROM blog";
                          $result=mysqli_Query($connection,$query);
                          if ($result->num_rows >0) {         
                          $data=mysqli_fetch_assoc($result);
                          echo $data['COUNT(*)'];  
                    }
                            }

                ?>

                      </p>
                    </div>
                  </div>
                          <h5 class="text-center">User Requests</h5>

                  <?php
                      if (isset($_REQUEST['action'])=='Approved') {

                        $query="UPDATE USER
                        SET is_approved='Approved',
                        is_active='Active',updated_at='".$date."'
                        WHERE user_id='".$_REQUEST['id']."'";
                        $result=mysqli_query($connection,$query);

                        $active="SELECT * FROM user WHERE user_id= {$_REQUEST['id']}";
                        $active_result=mysqli_query($connection,$active);
                         if ($active_result->num_rows>0) {
                            $active_user=mysqli_fetch_assoc($active_result);

                      if ($result) {

                        $mail->addAddress($active_user['email']);
                        $mail->Subject = 'Account Request is Approved';
                        $mail->msgHTML("Dear User Your Account is Activated kindly login it");
                        if (!$mail->send()) {
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        } else {
                            /*echo 'Message sent!';*/
                        }



                        ?>
                          <script type="text/javascript">
                            alert("User Approved Sucessfully");
                          </script>
                        <?php
                      }
                    }

                    }
                        if (isset($_REQUEST['Action'])=='Reject') {
                          $query="UPDATE USER
                        SET is_approved='Rejected',is_active='InActive'
                        WHERE user_id='".$_REQUEST['id']."'";
                        $result=mysqli_query($connection,$query);
                         $inactive="SELECT * FROM user WHERE user_id= {$_REQUEST['id']}";
                          $in_active=mysqli_query($connection,$inactive);
                           if ($in_active->num_rows>0) {
                              $inactive_user=mysqli_fetch_assoc($in_active);
                           }

                      if ($result) {

                          $mail->addAddress($inactive_user['email']);
                          $mail->Subject = 'Account is Rejected';
                          $mail->msgHTML("Dear User Your Account is Rejected  due to some issues");
                          if (!$mail->send()) {
                              echo 'Mailer Error: ' . $mail->ErrorInfo;
                          } else {
                              /*echo 'Message sent!';*/
                          }

                        ?>
                        <script type="text/javascript">
                          alert("Rejected")
                        </script>

                        <?php
                      }

                    }

                  ?>


                  <div>
                                     <?php
$query = "SELECT * FROM user WHERE is_approved='pending'";
$result = mysqli_query($connection, $query);

if ($result->num_rows > 0) {
  ?>

  <div class="table-responsive">
   <table border="1" align="center" class="table table-hover" id="datatable" class="table">
    <tr class="text-center">
    
      <th colspan="5" >User Image</th>
      <th colspan="4">First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Gender</th>
      <th>Date of Birth</th>
      <th>Address</th>
      <th>is Approved</th>
      <th colspan="10">Actions</th>
    </tr>
    <?php
    $count=0;
    while ($data = mysqli_fetch_assoc($result)) {
      
      $count++;
      ?>
      <tr>
        <td colspan="5"> <img src="../<?php echo $data['user_image']; ?>" height="40px"></td>
        <td colspan="4"><?php echo $data['first_name']; ?></td>
        <td><?php echo $data['last_name']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['gender']; ?></td>
        <td><?php echo $data['date_of_birth']; ?></td>
        <td><?php echo $data['address']; ?></td>
        <td><?php echo $data['is_approved']; ?></td>
        <td>
          <button type="button" class="btn btn-success">
          <a  style="color:  #F59640"
          href="admin_panel.php?id=<?php echo $data['user_id'];  ?> &action=Approved">Approve</a>
          </button>
        </td>
          <td>
              <button type="button" class="btn btn-danger">
            <a  style="color:#F59640 "href="admin_panel.php?id=<?php echo $data['user_id'];  ?> &Action=reject">Reject</a>
            </button>
          </td>
          
      </tr>
      <?php
    }
    ?>
  </table>
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

  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
          <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> 
              <script>
              $(document).ready(function() {
                $('#datatable').DataTable();
            });
              </script>
</body>
</html>
