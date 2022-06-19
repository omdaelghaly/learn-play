

<?php 
include '../inc/config.php';

$qid=$_POST['delq'];


$dws="delete from questions where questid = '$qid'  ";
$vv=mysqli_query($conn , $dws);

?>

<center style="color:green;">      ..تم الحذف  </center>