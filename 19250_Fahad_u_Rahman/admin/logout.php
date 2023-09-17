<?php
session_start();


session_destroy();
$msg="<p style='color:orange'>logout sucessfully<p>";
header("location:../login.php?msg=$msg");


?>