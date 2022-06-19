




<?php 
session_start();

$tid= $_SESSION['id']; ?>


<table  style="direction:rtl;width:100%;">
<tr  style="background:pink;color:red;border:1px solid">   
<th>مسلسل  </th>        <th>  اسم الامتحان   </th>  <th>  الصف  </th> <th>  ترم  </th>    <th> الدرجة  </th>  
  </tr>

<?php
 include '../inc/config.php';

$e="select * from exams where teacherid = '$tid' order by examid desc ";
$d=mysqli_query($conn,$e);

$exnumber=1;

 while($ex=mysqli_fetch_array($d) ){
$exnum=$ex['num'];
$exna=$ex['examname'];
$exma=$ex['marks'];
$ext=$ex['term'];
$exgr=$ex['gradeid'];

$g="select * from grades where gradeid = '$exgr' ";
$gr=mysqli_query($conn,$g);
$exgg=mysqli_fetch_array($gr);
$exg=$exgg['gradename'];
?>

<tr style="" >
<td> <?php echo $exnumber;?>   </td> <td> <?php echo $exna; ?></td>   
<td> <?php echo $exg; ?></td>   <td> <?php echo $ext; ?></td> 
 </td> <td> <?php echo $exma; ?></td>


</tr


<?php 
 $exnumber++;

} ?>

</table>


<style>

table{width:100%;direction:rtl;}
tr{background:gray;border:1px solid white;height:40px}

</style>