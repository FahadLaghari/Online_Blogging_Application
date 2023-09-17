<?php
  require_once("../connection/connection.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
 </head>
 <body style="background-color:#EFF1F3">
         <?php require("side_bar.php")?>  
      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12";>
              <div class="row">
                    <div class="card">
                      <div class="card-header">
                          Users
                      </div>
                      <div class="card-body">
                          <?php
$query = "SELECT * FROM user";
$result = mysqli_query($connection, $query);

if ($result->num_rows > 0) {
  ?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <table border="1" align="center" class="table table-light" >
    <tr>
      <th>User ID</th>
      <th>Role ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Password</th>
      <th>Gender</th>
      <th>Date of Birth</th>
      <th>User Image</th>
      <th>Address</th>
      <th>Account Status</th>
      <th>is Approved</th>
      <th>Actions</th>
    </tr>
    <?php
    $count=0;
    while ($data = mysqli_fetch_assoc($result)) {
      
      $count++;
      ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $data['role_id']; ?></td>
        <td><?php echo $data['first_name']; ?></td>
        <td><?php echo $data['last_name']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['gender']; ?></td>
        <td><?php echo $data['date_of_birth']; ?></td>
        <td> <img src="<?php echo $data['user_image']; ?>" height="40px"></td>
        <td><?php echo $data['address']; ?></td>
        <td><?php echo $data['is_active']; ?></td>
        <td><?php echo $data['is_approved']; ?></td>
        <td>
          <a href="view_user.php?id=<?php echo $data['user_id'];  ?> &action=Active">Active</a>
        </td>
          <td>
            <a href="view_user.php?id=<?php echo $data['user_id'];  ?> &action=InActive">InActive</a>
          </td>
          <td>
            <a href="view_user.php?id=<?php echo $data['user_id'];  ?> &action=Dlette">Dlette</a>
          </td>
      </tr>
      <?php
    }
    ?>
  </table>
  <?php
}
?>
                      </div>
                    </div>
              </div>
           </div>
          
     </div>
  </div>



</body>
</html>