<?php

 include '../inc/config.php';

	
$gra=$_POST['grade'] ;




$ww= "INSERT INTO `grades` (`gradeid`, `gradename`) 
VALUES ('' , '$gra' )";

$okk=mysqli_query($conn ,$ww);
  


echo '<center style="color:green;">      ..تم ادخال  البيانات بنجاح  </center>'; 

 
?>




