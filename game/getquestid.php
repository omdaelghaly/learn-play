
<?php
session_start();
include '../inc/config.php';
$gamerid=$_SESSION['id'];

$qetxid=$_POST['qidval'];




$aaa="update game set b ='$qetxid'  where userid='$gamerid'  ";
$sss=mysqli_query($conn,$aaa);

?>