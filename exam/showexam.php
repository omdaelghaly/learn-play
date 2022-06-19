


<?php

 include '../inc/config.php';

$tid=$_POST['tid'];
$exid=$_POST['examid'];
$numexid=$_POST['num'];




$wx= "update exams set sho = 0 where teacherid = '$tid'  ";
$doxk=mysqli_query($conn ,$wx);


$cwx= "update exams set sho = 1 where examid='$numexid'  ";
$doxk=mysqli_query($conn ,$cwx);


echo '<center style="color:green;">      ..سيتم عرض  الامتحان    </center>'; 

 
?>