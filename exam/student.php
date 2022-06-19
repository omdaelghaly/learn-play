
<strong>  <center>عرض لكل من شارك فى حل الامتحان 
 </center></strong>
<div id="vv"></div>

<?php

$tid=$_SESSION['id'];

 include '../inc/config.php';

$df="select * from results where teacherid='$tid' order by resultid desc ";
$w=mysqli_query($conn,$df);


?>
<div class="container_fluid">
 <div class="row">


<br><br>

<!--------------------------------------------------------------------------------------------------->

<table  style="direction:rtl;width:100%;">
<tr  style="background:pink;color:red;border:1px solid">   
<th>مسلسل  </th>        <th> الطالب  </th>  <th>  الدجة  </th> <th>  حذف  </th>    <th> مشاهدة  </th>  
  </tr>


<?php
 $exnumber=1;
while($stu=mysqli_fetch_array($w)){

 $stid=$stu['userid'];
 $mark=$stu['mark'];
 $exid=$stu['examid'];
 $ttid=$stu['teacherid'];

 $za="select userfname from teachers where userid='$stid'  ";
 $Q=mysqli_query($conn,$za);
 $wq=mysqli_fetch_array($Q);
 $stun=$wq['userfname'];


?>



<tr style="" >

<td> <?php echo $exnumber;?>   </td> <td> <?php echo $stun; ?></td>   
<td> <?php echo $mark; ?></td>  
 <td> 
  <a href="javascript:void(0)"  onclick="del('delstudentresult.php?stid=<?php echo $stid; ?>&exid=<?php echo $exid;?>')"
     class="btn btn-danger">  delete</a>
 </td> 
  <td> 
 <a href="stextoteacher.php?stid=<?php echo $stid; ?>&exid=<?php echo $exid;?>&tid=<?php echo $ttid;?>"  
 
     class="btn btn-info"> مشاهدة   </a>
  </td>


</tr>






<?php
 $exnumber++;
}

?>



</table>




 </div>
  </div>
 

<style>

table{width:100%;direction:rtl;}
tr{background:lightgray;border:1px solid white;height:40px}

</style>







<script>
function del(page) {
       var xmlhttp;
       if(window.XMLHttpRequest) {
         xmlhttp = new XMLHttpRequest();
       } else {  
         xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
       } 
         
       xmlhttp.onreadystatechange = function() { 
         
         if(this.readyState == 4 & this.status == 200) { 
           document.getElementById("vv").innerHTML = this.responseText;
         }
       } 
       xmlhttp.open("GET",page,true);
       xmlhttp.send();
     } 
                               
</script>