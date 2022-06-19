

<?php 
session_start();
$usern=@$_SESSION['userfn'];
$tid= @$_SESSION['id']; 

include '../inc/config.php';

$n="select * from game where userid = $tid";
$m=mysqli_query($conn,$n);
$info=mysqli_fetch_array($m);

$glevel=$info['level'];
$gname=$info['name'];
$gscore=$info['score'];
$gprize=$info['prizes'];

if(empty($glevel)){$glevel='00';}
if(empty($gscore)){$gscore='00';}
if(empty($gname)){$gname=$usern;}


?>


           <div style="display:inline-flex;margin-bottom:5px;padding:10px;border-radius:10px;
           background:green;color:white   ">
           	score:<?php echo " ". $gscore;?>
           </div>

           <div style="display:inline-flex;margin-bottom:5px;padding:10px;border-radius:10px;
           background:green;color:white ">
           	level: <?php echo " ".$glevel;?>
           </div>


           <div style="display:inline-flex;margin-bottom:5px;padding:10px;border-radius:10px;
           background:green;color:white ">
           	prize: <?php echo " ".$gprize;?>
           </div>



           <div style="display:inline-flex;margin-bottom:5px;padding:10px;border-radius:10px;
           background:green;color:white;float:right; ">
           	<?php echo $gname;?> 

           </div>

