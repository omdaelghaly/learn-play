

<?php 
session_start();

$tid= $_SESSION['id'];

include '../inc/config.php';

$ad="select * from exams where teacherid = '$tid' && sho = 1 ";
$a=mysqli_query($conn , $ad);
$ex=mysqli_fetch_array($a);

 $exn=$ex['examname'];
 $exs=$ex['subjectid'];
 $exg=$ex['gradeid'];
 $ext=$ex['term'];

$aad="select * from subjects where subjectid = '$exs'  ";
$aa=mysqli_query($conn , $aad);
$sub=mysqli_fetch_array($aa);
$subn=$sub['subjectname'];

$fad="select * from grades where gradeid = '$exg'  ";
$aca=mysqli_query($conn , $fad);
$gra=mysqli_fetch_array($aca);
$gran=$gra['gradename'];

  ?>

<center style='font-weight:bold;color:green;direction:rtl'> 
اضف اسئلة  ==>> (<?php echo $exn;?>)<span style="color:red"> المادة  </span>(<?php echo $subn;?>)
<span style="color:red">  الصف   </span>(<?php echo $gran;?>)<span style="color:red">  الترم  </span>(<?php echo $ext;?>)  <center>