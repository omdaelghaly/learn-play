

<?php
 include '../inc/config.php';

$postid = isset($_GET['postid']) && is_numeric($_GET['postid'])? intval($_GET['postid']) :0 ;



$dsc="delete from post where  postid ='$postid'  ";
$n=mysqli_query($conn,$dsc);




$am="select * from img where postid='$postid' ";
$vc=mysqli_query($conn,$am);
while($aa=mysqli_fetch_array($vc)){
$imgn=$aa['imgn'];
@unlink('../images/'.$imgn);

}


$dz="delete from img where  postid ='$postid'   ";
$nd=mysqli_query($conn,$dz);

?>