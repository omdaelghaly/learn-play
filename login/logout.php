

<?php

session_start();

include 'init.php';


$my_id=$_SESSION['id'];

$online="update teachers set online = 0 where userid='$my_id'  ";
  $onli= mysqli_query($conn,$online);
  
session_unset();
session_destroy();
header('location:login.php');

