

<?php

include '../inc/config.php';

include '../home/header.php';

?>




<?php
 if(isset($_POST['subject'])){ $inc="subject.php";}
 if(isset($_POST['grade'])){ $inc="grade.php";}



?>


<!--------------start------------------------------------------------------>
<div class="container_fluid" style=" overflow-x: hidden;">
 <div class="row">


<!--------------------------------------------------------------------------------------------------->
<div id="dashbody"  class=" col-9 " 
   style="background:blue;height:800px ">
   

<?php 
if(empty($inc)){$inc="subject.php"; }
include $inc;?>

    </div>



<!--------------------------------------------------------------------------------------------------->

   <div class=" col-3" 
   style="background:red;height:500px ">
   


<form method="post" action="">
   <input type="submit" name="subject"  value="المواد الدراسية  "   class="btn-block btn btn-info" >
   <input type="submit" name="grade"  value="الصفوف الدراسية  "   class="btn-block btn btn-info" >
   <input type="submit" name="subject"  value="المواد الدراسية  "   class="btn-block btn btn-info" >
   <input type="submit" name="subject"  value="المواد الدراسية  "   class="btn-block btn btn-info" >

</form>







    </div>
 



<!--------------------------------------------------------------------------------------------------->
  </div>
</div>


<!---------------------------------------end------------------------------------------------------>

















<?php

include '../home/footer.php';

?>