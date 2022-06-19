



<?php

 include '../inc/config.php';

$tid=$_POST['tid'];
$exid=$_POST['examid'];
$grid=$_POST['grid'];
$subid=$_POST['subid'];
$term=$_POST['term'];


$q=$_POST['quest'];
$a=$_POST['answera'];
$b=$_POST['answerb'];
$c=$_POST['answerc'];
$d=$_POST['answerd'];
$co=$_POST['answerco'];
$info=$_POST['info'];


//question number add dynamic
$sd="select * from questions where teacherid = '$tid' &&  examid = '$exid'  " ;
$dd=mysqli_query($conn , $sd);
$countq=mysqli_num_rows($dd);
$qnum=$countq + 1;





$w= "INSERT INTO `questions` (`questid` ,`teacherid` ,`subjectid`,`gradeid`,`termid`,`examid`, `questnum`,`question`,`answera`,`answerb`,`answerc`,`answerd`,`answercorrect`, `info`,`a`,`b`,`c`) 
                    VALUES ('' , '$tid' ,'$subid'  ,'$grid', '$term' ,'$exid'  ,'$qnum','$q','$a','$b','$c','$d','$co','$info','','','' )";

$o=mysqli_query($conn ,$w);
  


echo '<center style="color:green;">      ..تم ادخال  البيانات بنجاح  </center>'; 

 
?>