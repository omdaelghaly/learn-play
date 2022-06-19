

<?php

include '../inc/config.php';

include '../home/header.php';

if(!isset($_SESSION['id'])){
  header('location:../login/');
}
?>




<?php
 if(isset($_POST['addexam'])){ $inc="addexam.php";}
 if(isset($_POST['editex'])){ $inc="editexam.php";}
 if(isset($_POST['st'])){ $inc="student.php";}



?>
<div class="container_fluid" style=" overflow-x: hidden;">
 <div class="row">
<div   class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 " >

<!--------------start------------------------------------------------------>

<div class="container_fluid">
 <div class="row">

<!--------------------------------------------------------------------------------------------------->
<div id="dashbody"  class=" col-9 " 
   style="background:lightgray;">
   


<?php 
if(empty($inc)){$inc="addexam.php";}

include @$inc;?>

    </div>



<!--------------------------------------------------------------------------------------------------->

   <div class=" col-3 " 
   style="background:; ">
   

       <br>
                 <div   class="btn-block btn" style="background:pink"> <center> امتحان جديد   </center> </div>

       <br>


<form method="post" action="">
   <input type="submit" name="addexam"  value=" اضافة امتحان  "   class="btn-block btn btn-info" >
   <input type="submit" name="editex"  value="تحرير امتحان  "   class="btn-block btn btn-info" >
   <input type="submit" name="st"  value=" الطلاب  "   class="btn-block btn btn-info" >

</form>




    </div>
 



<!--------------------------------------------------------------------------------------------------->
  </div>
</div>


<!---------------------------------------end------------------------------------------------------>

</div>
  </div>
</div>

















<?php

include '../home/footer.php';

?>