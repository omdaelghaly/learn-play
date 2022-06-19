
<?php

 include '../inc/config.php';

	
$sub=$_POST['subject'] ;




$ww= "INSERT INTO `subjects` (`subjectid`, `subjectname`) 
VALUES ('' , '$sub' )";

$okk=mysqli_query($conn ,$ww);
  


echo '<center style="color:green;">      ..تم ادخال  البيانات بنجاح  </center>'; 

 
?>







