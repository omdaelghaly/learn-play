


<?php

$stid = isset($_GET['stid']) && is_numeric($_GET['stid'])? intval($_GET['stid']) :0 ;
$exid = isset($_GET['exid']) && is_numeric($_GET['exid'])? intval($_GET['exid']) :0 ;
 include '../inc/config.php';


$ds="delete from answers where  examid='$exid' &&   userid= '$stid'   ";
$n=mysqli_query($conn,$ds);


$d="delete from results where  examid='$exid' &&   userid= '$stid'   ";
$nd=mysqli_query($conn,$d);

?>

<center style="color:red"> تم الحذف   </center>