<?php
session_start();
if($_SESSION['user_data']['role_id'] != 1){
            
          header("location:../index.php?Invalidmsg=Invalid Access");
        }
        elseif( !isset($_SESSION) ){
          header("location:../index.php?Invalidmsg=Invalid Access");

        }

require_once("../connection/connection.php");
date_default_timezone_set("Asia/Karachi");
$date= date(" Y:m:d H:i:s");
if (isset($_REQUEST['action'])=='edit') {
$query = "SELECT post.*,`category`.`category_title`,`blog`.`blog_id`,`blog`.`blog_title`
FROM post INNER JOIN `post_category`
ON `post_category`.`post_id`=`post`.`post_id`
INNER JOIN `category`
ON  `category`.`category_id`=`post_category`.`category_id`
INNER JOIN  `blog` ON `post`.`blog_id`=`blog`.`blog_id`
WHERE post.`post_id`='".$_REQUEST['id']."' ";
$result=mysqli_query($connection,$query);
$data = mysqli_fetch_assoc($result);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    -<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
    span{
    color: red;
    }
    img{
    border-radius: 20px;
    }
    </style>
    <title>Edit Post</title>
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
          background: hsla(0, 0%, 100%, 0.8);margin-top:90px;
          
          ">
          <div class="card-body py-5 px-md-5">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h1>Post Information</h1>
                <p ><?php if (isset($_REQUEST['msg'])) {
                  echo $_REQUEST['msg'];
                } ?></p>
                <div >
                  <form action="" method="POST"  class="mt-5"  enctype="multipart/form-data">
                    <img src="../<?php
                    echo $data['featured_image'];?>" height="200px" width="200px">
                  </div>
                  <div class="form-outline mb-4">
                    <input type="file" id="pprofile" name="profile"class="form-control" />
                    <label class="form-label" for="form3Example3">Profile</label>
                  </div>
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <label class="form-label" for="form3Example1">Post title</label>
                      <span>*</span>
                      <div class="form-outline">
                        <input type="text" id="first_name" name="post_title" value="<?php echo $data['post_title'];?>" class="form-control" required />
                      </div>
                      <span id="first_name_msg">
                      </div>
                      <div class="col-md-6 mb-4">
                        <label class="form-label" for="form3Example2">Post Summry</label>
                        <span>*</span>
                        <div class="form-outline">
                          <input type="text" id="last_name"name="post_summary"value="<?php
                          echo $data['post_summary']?>"class="form-control" required/>
                        </div>
                        
                      </div>
                      <div class="col-md-6 mb-4">
                        <label class="form-label" for="form3Example2">Post description</label>
                        <span>*</span>
                        <div class="form-outline">
                          <input type="text" id="last_name"name="post_description" required value="<?php
                          echo $data['post_description']?>"class="form-control"/>
                        </div>
                        
                      </div>
                      <div class="col-md-6 mb-4">
                        <label class="form-label" for="form3Example2">Status</label>
                        <span>*</span>
                        <div class="form-outline">
                          <select name="post_status"class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option value="Active" <?php if ($data['post_status'] == 'Active') {
                              echo "selected";
                            } ?>>Active</option>
                            <option value="InActive" <?php if ($data['post_status'] == 'InActive') {
                              echo "selected";
                            } ?>>InActive</option>
                          </select>
                        </div>
                        
                      </div>
                      <label>blogs</label>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="blogs">
                        <?php
                        $blog_query = "SELECT * FROM `blog`  WHERE user_id='".$_SESSION['user_data']['user_id']."'AND blog_status='Active'";
                        $blog_result=mysqli_query($connection,$blog_query);
                        if ($blog_result->num_rows > 0) {
                        $count = 1;
                        while ($blog_data = mysqli_fetch_assoc($blog_result)) {
                        ?>
                        <option <?php if ($blog_data['blog_id'] == $data['blog_id']) {
                          echo "selected";
                        } ?> value="<?php echo $blog_data['blog_id'] ?>"><?php echo $blog_data['blog_title'] ?></option>
                        <?php
                        }
                        }
                        ?>
                      </select>
                    </div>
                      <label>Comment Allowed</label>
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="comment" >
                        <option value="1" <?php if ($data['is_comment_allowed'] == 1) {
                              echo "selected";
                            } ?>> Yes  </option>
                        <option value="0" <?php if ($data['is_comment_allowed'] == 0) {
                              echo "selected";
                            } ?>> No  </option>
                      </select>
                    
                    <div class="form-outline">

                      <?php
                     $query= "SELECT * FROM post_atachment 
                    WHERE post_id='".$_REQUEST['id']."'";
                    $result=mysqli_query($connection,$query);
                    $atachment=mysqli_fetch_assoc($result);
                    
                   

                      ?>
                                          <label for="validationTextarea" class="form-label">Attachment Name </label>
                                         <input type="text"class="form-control " id="post_content" name="attachment_name" value="<?php
                                         echo $atachment['post_attachment_title']
                                       ?>">
                                     </div>
                                     <div class="form-outline">
                                      <label for="validationTextarea" class="form-label">Attachment</label>
                                      <input type="file"class="form-control " id="post_content" name="attachment">
                                    </div>
                  </div>

                  <div>
                    
                    
                  </div>
                  <div class="d-grid gap-2 col-6 mx-auto my-3">
                    <button type="submit"  id ="register"name="update"class="btn btn-primary">Update</button>
                  </div>
                </div>
                <!-- Email input -->
                
                <!-- Submit button -->
                <!-- Register buttons -->
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    </center>
  </div>
  <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['update'])){

extract($_POST);
  
  if (!$_FILES['profile']['name']=="") {
        $directory="images";
        $image_name= rand().$_FILES['profile']['name'];
        $image_path= $_FILES['profile']['tmp_name'];
        $path=$directory."/".$image_name;
        $server="../".$directory."/".$image_name;
        move_uploaded_file($image_path,$server);
        $query=" UPDATE post SET featured_image='".$path."' WHERE post_id='".$_REQUEST['id']."'";
        $result=mysqli_query($connection,$query);
        if ($result) {
           echo "Done";
        }
  }

  if ($_FILES['attachment']['name']=="") {
    $path = $atachment['post_attachment_path'];
  }else{
        $directory="images";
        $image_name= rand().$_FILES['attachment']['name'];
        $image_path= $_FILES['attachment']['tmp_name'];
        $path=$directory."/".$image_name;
        $server="../".$directory."/".$image_name;
        move_uploaded_file($image_path,$server);
  }
        $query=" UPDATE post_atachment SET post_attachment_title = '".$attachment_name."', post_attachment_path ='".$path."',is_active = 'Active', updated_at = '".$date."' WHERE post_id='".$_REQUEST['id']."'";
        $result=mysqli_query($connection,$query);

        $post_update_query = "UPDATE post SET post_title = '".$post_title."',blog_id = ".$blogs.", post_summary = '".$post_summary."', post_description = '".$post_description."',post_status = '".$post_status."', is_comment_allowed = '".$comment."', updated_at = '".$date."' WHERE post_id='".$_REQUEST['id']."'";
        $post_update_result = mysqli_query($connection,$post_update_query);
        if ($post_update_result) {
           echo "Done";
        }
if ($post_update_result) {
?>
<script>
alert(" Updated Sucessfully");
window.location.href="edit_post.php?id=<?php echo $_REQUEST['id'] ?>&action=edit";
</script>
<?php
}
}
}
?>