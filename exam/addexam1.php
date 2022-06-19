

<?php

 include '../inc/config.php';

$tid=$_POST['tid'];
$sub=$_POST['subject'];
$gra=$_POST['grade'];
$term=$_POST['term'];
$num=$_POST['num'];
$exname=$_POST['exname'];
$mark=$_POST['mark'];
$unit=$_POST['unit'];



$wwx= "INSERT INTO `exams` (`examid`, `teacherid`,`subjectid`,`gradeid`,`term`,`num`,`examname`,`marks`,`sho`,`unit`) 
                    VALUES ('' , '$tid' ,'$sub'  ,'$gra', '$term' ,'$num'  ,'$exname','$mark','','$unit' )";

$ook=mysqli_query($conn ,$wwx);
  


echo '<center style="color:green;">      ..تم ادخال  البيانات بنجاح  </center>'; 

 
?>




