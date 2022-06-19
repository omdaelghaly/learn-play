
<?php

include '../inc/config.php';

include '../home/header.php';


if(!isset($_SESSION['id'])){
  header('location:../login/');
}

?>



<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->
<!--------------------------------------------------------------------------->

<!--------------------------------------------------------------------------->
<div id="firsttime">
  
</div>
<!--------------------------------------------------------------------------->
<script>
$(document).ready(function(){
  setTimeout(function(){
      $("#firsttime").load('firsttime.php');
    },1000);
  });
</script>

<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------->

<!------------------------------------------------------------------------------------------->




<div class="container_fluid" style="overflow-x:hidden; ">
 <div class="row">

   <div class="d-none d-md-none d-lg-block d-xl-block col-xs-12 col-sm-12 col-md-3- col-lg-3 col-xl-3 " 
   style="background:red;">
   

    </div>

<!-------------------------------------------------------------------------------------------------->

<div class=" col-xs-12 col-sm-12 col-md-6- col-lg-6 col-xl-6 " 
   style="background:gray">
   


<!-----------------------------------teachercont-------------------------------->
  
  <div id="divx" style="width:100%;height:300px;margin-top:100px">


<form method="post" action="" >
<center>
<select name="gradex" >
  <option value="4">  الصف الاول الاعدادى  </option>
  </select>

<br><br>
<select name="termx" >
  <option value="1">   الترم الاول   </option>
  </select>

<br><br>
 <input type="submit" name="varx" value="go"  class="btn btn-info">


</center>

</form>


  </div>

<?php
       $grdx=" ";
       $trmx=" ";

if(isset($_POST['varx'])){
       
   if(empty($grdx) || empty($trmx)){

    }else{    
           
$grdx=$_POST['gradex'];
$trmx=$_POST['termx'];

?>
<script>
$("#divx").hide(2000);
</script>
<?php


 include 'game.html';

}

}



?>
<!------------------------------------------------------------------------------------>




</div>



<!--------------------------------------------------------------------------------------------------->
 <div class="d-none d-md-none d-lg-block d-xl-block col-xs-12 col-sm-12 col-md-3- col-lg-3 col-xl-3 " 
   style="background:red;">
   



    </div>   





<!------------------------------------------------------------------------------->
  </div>
</div>








<style>


</style>










	

<?php

include '../home/footer.php';

?>

