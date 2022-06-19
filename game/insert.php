



<?php

session_start();
$usern=@$_SESSION['userfn'];
$tid= @$_SESSION['id']; 

include '../inc/config.php';

$a="select * from game where userid = '$tid' ";
$b=mysqli_query($conn,$a);
$nuw=mysqli_num_rows($b);


   $v=mysqli_fetch_array($b);
   $level=$v['level'];
   $nam=$v['name'];
   $score=$v['score'];
   $prizes=$v['prizes'];

$newl=$level + 5;
$newp=$prizes + 1;
  $c="update game set level='$newl' , prizes='$newp' where userid = '$tid' ";
     $xb=mysqli_query($conn,$c);



?>