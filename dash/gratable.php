




<table  style="direction:rtl;width:100%;height:auto">
<tr  style="background:pink;color:red;border:1px solid">   <th> مسلسل  </th>        <th> الصف  </th>     </tr>

<?php
 include '../inc/config.php';

$tabsub="select * from grades  ";
$dc=mysqli_query($conn,$tabsub);
 while($subt=mysqli_fetch_array($dc) ){
$graid=$subt['gradeid'];
$gran=$subt['gradename'];

?>

<tr style="" >
<td> <?php echo $graid;?>   </td> <td> <?php echo $gran; ?></td>

</tr



<?php } ?>

</table>


<style>

table{width:100%;direction:rtl;}
tr{background:gray;border:1px solid white;height:40px}

</style>