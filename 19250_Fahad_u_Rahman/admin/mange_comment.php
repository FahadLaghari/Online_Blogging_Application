<?php
session_start();
require("../connection/connection.php");

if($_SESSION['user_data']['role_id'] != 1){
            
          header("location:../index.php?Invalidmsg=Invalid Access");
        }
        elseif( !isset($_SESSION) ){
          header("location:../index.php?Invalidmsg=Invalid Access");

            }


        if (isset($_REQUEST['active'])=='Active') {            
             $query="UPDATE post_comment
              SET is_active = 'Active'
              WHERE post_comment_id = '".$_REQUEST['id']."'";
              $result=mysqli_query($connection,$query);

              if ($result)
               {
                header("location:mange_comment.php?msg=Activated Sucessfully");
                }      
      }
        if (isset($_REQUEST['InActive'])=='InActive') {            
              $query="UPDATE post_comment
              SET is_active = 'INActive'
              WHERE post_comment_id = '".$_REQUEST['id']."'";
              $result=mysqli_query($connection,$query);

              if ($result)
               {
                header("location:mange_comment.php?msg=INActivated ");
                }      
      }

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
  <style>
    span {
      color: red;
    }

    a{
      text-decoration: none;
    }
    
  </style>
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
              



  <div class="container-fluid">

    <!-- Section: Design Block -->
    <section class="text-center">
      <div class="card">
        <div class="card-header">
          <h3>Users</h3>
        </div>
        <div class="card-body">
          <div class="alert alert-success" role="alert">
            <?php if (isset($_REQUEST['msg'])) {
              echo $_REQUEST['msg'];
            } ?>
          </div>
          <div>
            <h1 class="text-center">Manage Comments</h1>
          </div>

          <?php
          $query = "SELECT * FROM `post_comment`";
          $result = mysqli_query($connection, $query);

          if ($result->num_rows > 0) {
          ?>
            <div class="table-responsive">
              <table border="1" align="center" class="table table-hover" id="datatable" class="table">
                <thead>
                  <tr>
                    <th > post_id</th>
                    <th >comment</th>
                    <th>is_active</th>
                    <th colspan="5">Actions</th>
                   
                   
                </thead>
                <tbody>
                  <?php
                  $count = 0;
                  while ($data = mysqli_fetch_assoc($result)) {

                    $count++;
                  ?>
                    <tr>
                     
                      <td><?php echo $data['post_id']; ?></td>
                      <td><?php echo $data['comment']; ?></td>
                      <td><?php echo $data['is_active']; ?></td>
                 
                      <td>
                        
                          <a style="color: #F59640" href="mange_comment.php?id=<?php echo $data['post_comment_id']; ?>&active=Active">Active</a>
                        
                      </td>
                      <td>
                        
                          <a style="color: #F59640" href="mange_comment.php?id=<?php echo $data['post_comment_id']; ?>&InActive=InActive">InActive</a>
                        
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
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
