




<table  style="direction:rtl;width:100%;">
<tr  style="background:pink;color:red;border:1px solid">   <th> مسلسل  </th>        <th> المادة   </th>     </tr>

<?php
 include '../inc/config.php';

$tabsub="select * from subjects  ";
$dc=mysqli_query($conn,$tabsub);
 while($subt=mysqli_fetch_array($dc) ){
$subid=$subt['subjectid'];
$subn=$subt['subjectname'];

?>

<tr style="" >
<td> <?php echo $subid;?>   </td> <td> <?php echo $subn; ?></td>

</tr



<?php } ?>

</table>


<style>

table{width:100%;direction:rtl;}
tr{background:gray;border:1px solid white;height:40px}

</style>