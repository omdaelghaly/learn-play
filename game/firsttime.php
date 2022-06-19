





<?php

session_start();
$usern=@$_SESSION['userfn'];
$tid= @$_SESSION['id']; 

include '../inc/config.php';

$a="select * from game where userid = '$tid' ";
$b=mysqli_query($conn,$a);
$nuw=mysqli_num_rows($b);
$v=mysqli_fetch_array($b);

if($nuw==1){
   $level=$v['level'];
   $nam=$v['name'];
   $score=$v['score'];
   $prizes=$v['prizes'];

$newscore=$score +10;

$nn="select * from teachers where userid = '$tid' ";
$bx=mysqli_query($conn,$nn);
$tnn=mysqli_fetch_array($bx);
$uzn=$tnn['userfname'];

  

}else{
     $ll=0;
     $se=0;
     $b=7;
   $inv="insert into game (gid,userid,name,graid,subid,score,level,prizes,b,c)
                    values ('','$tid','$usern','', '', '$se','$ll','','$b','')  ";
    $g=mysqli_query($conn,$inv);                

}


?>