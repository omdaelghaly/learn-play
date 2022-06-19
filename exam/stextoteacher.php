




<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <link href="../dzin/font/all.css" rel="stylesheet"> 

<?php

include '../inc/config.php';

include '../home/header.php';






?>
<?php

    $tid= isset($_GET['tid']) && is_numeric($_GET['tid'])? intval($_GET['tid']) :0 ;
    $studentid= isset($_GET['stid']) && is_numeric($_GET['stid'])? intval($_GET['stid']) :0 ;
    $exid= isset($_GET['exid']) && is_numeric($_GET['exid'])? intval($_GET['exid']) :0 ;




 //getexamid from examtable
$exs="select * from exams where  examid= '$exid' ";
$sel=mysqli_query($conn ,$exs);
$ddd=mysqli_fetch_array($sel);
$exid=$ddd['examid'];
$exnn=$ddd['examname'];
$ttid=$ddd['teacherid'];
$markq=$ddd['marks'];

// select exam with exid
$exq="select * from questions where examid= '$exid'  ";
$sk=mysqli_query($conn ,$exq);
$count=mysqli_num_rows($sk);
$cou=1 ;

  ?>

<!-------------------------------checkif student answer ornot---------------------------------------------------------------------------->
<!-------------------------------checkif student answer ornot---------------------------------------------------------------------------->

<?php
$dan="select * from results where teacherid='$tid' && examid='$exid' && userid= '$studentid' ";
$dq=mysqli_query($conn,$dan);
$dnum=mysqli_num_rows($dq);
$st=mysqli_fetch_array($dq);



$stmark=$st['mark'];
$totalm=$markq * $count ;


?>
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->




<div id="fresh" class="container" style="">
 <div class="row">

   <div id="dir" class="col-xs-12 col-sm-12 col-md-12- col-lg-12 col-xl-12 " 
   style="background:gray">


<div id="coex" ><center style='font-weight:bold;color:green;direction:rtl'> <?php echo $exnn;?> <center></div>
<br>

<div  id="orang" style="text-align:center"><strong>      لقد حصلت على  (<?php echo $stmark;?>)
           درجات من الدرجة العظمى  (<?php echo $totalm;?>) درجات  <strong>    </div>


                                                                                   <div id="result">



   <script>
$(document).ready(function(){
   

 $("#r").click(function(){
    $("#dir").css({"direction":"rtl","text-align":"right"});
    });
$("#l").click(function(){
    $("#dir").css({"direction":"ltr","text-align":"left"});
    });
  });


</script>


<button style="float:right;margin-right:20px" id="r" onclick="r();">  R>> </button>
<button style="float:left;margin-left:20px" id="l" onclick="l();" >L<< </button>




<!--------------------------------------------------------------->


<br>
<br>
<div style="background:lightgray">








 <form  action="" method="post" id="formresult" >


              <input type="text" name="tid" value="<?php echo $ttid;?>" hidden >
              <input type="text" name="countq" value="<?php echo $count;?>" hidden >
              <input type="text" name="mark" value="<?php echo $markq;?>" hidden >
              <input type="text" name="exid" value="<?php echo $exid;?>" hidden >
              <input type="text" name="stu" value="<?php echo $studentid;?>" hidden >
             

<div id="qstate"></div>

<div id="cont"  class=" col-xs-12 col-sm-12 col-md-12- col-lg-12 col-xl-12 " >

<?php
while($mn=mysqli_fetch_array($sk)  ){

 $qid=$mn['questid'];   
$q=$mn['question'];
$a=$mn['answera'];  
$b=$mn['answerb'];  
$c=$mn['answerc'];  
$d=$mn['answerd'];  
$co=$mn['answercorrect'];
$info=$mn['info'];

$qid=$mn['questid'];


?>


<div  id="qqq"  >

    <span id="n"><?php echo $cou;?></span> 
    <span > <span > 
    <i id="f<?php echo $cou;?>" class="fa fa-times-circle" style="font-size:20px"></i>
    <i id="t<?php echo $cou;?>" class="fas fa-check-circle" style="font-size:20px"></i>

  <span>  </span> 


 

     <div id="w">
    <strong id="qw">  <?php echo $q;?> </strong>
    


<br>

<div id="answer">
    
<div id="ans">
<span  id="a<?php echo $cou ;?>" >a -</span><div class="aa"><input type="radio" id="" name="<?php echo $cou;?>" value="a"> <?php echo $a;?>   </div>
</div>


<div id="ans">
<span id="b<?php echo $cou ;?>">b -</span><div class="aa"><input type="radio" id="" name="<?php echo $cou;?>" value="b"> <?php echo $b;?> </div>
</div>



<div id="ans">
<span id="c<?php echo $cou ;?>">c -</span><div class="aa"><input type="radio" id="" name="<?php echo $cou;?>" value="c"> <?php echo $c;?> </div>
</div>


<div id="ans">
<span  id="d<?php echo $cou ;?>">d -</span><div class="aa"><input type="radio" id="" name="<?php echo $cou;?>" value="d"> <?php echo $d;?> </div>
</div>

              <input type="text" name="q<?php echo $cou;?>" value="<?php echo $qid;?>" hidden >
              <input type="text" name="co<?php echo $cou;?>" value="<?php echo $co;?>" hidden >
              <input type="text" name="info<?php echo $cou;?>" value="<?php echo $info;?>" hidden >


</div>

<p id="inf" ><center><?php echo $info;?> </center> </p>


 </div>
</div>



<hr>
<?php 
 $cou++;
} ?>
                                                                                                 

</div>




</form>

</div>
                                                                                                   </div>











<!-------------------------------------------------------------------------------------------->
</div>
</div>
</div>





</body>
</html>



<style type="text/css">
    #w{background:white;padding:10px;line-height:30px;font-size:16px;border-radius: 30px 30px;margin:2px;    }
    #qqq{width:100%;display: inline}
    #n{padding:5px;background:blue;height: 40px;width:40px;border-radius:20px 0 20px 0 ;
        color: white;font-size:18px;display:inline  }   
    #ans{display: inline-flex;margin-left:5px;margin-right:5px}  
    #ans span{ padding:5px;background:gray;height: 30px;width:30px;border-radius:10px 0 10px 0 ;color: white   }
    .aa{padding:5px;background:white;border-radius:10px 10px ;margin:2px   }
     
       #g{background:red;width:30px}

    #inf{margin-right:10%;margin-left:10% ;  }
    center{background:lightgreen}
    #del{background:red;color:white;border-radius:40px}
    #x1{}
</style>



<script>
<?php
$an="select * from answers where teacherid='$tid' && examid='$exid' && userid= '$studentid' ";
$d=mysqli_query($conn,$an);
 $cou=1;
while($ad=mysqli_fetch_array($d)){
$uzran=$ad['answer'];
$coran=$ad['answercorrect'];
?>
setInterval(function(){
    $("#<?php echo $coran.$cou;?>").css("background","green");
    setTimeout(function(){
            $("#<?php echo $coran.$cou;?>").css("background","lightgreen");

        },500);

    },1000);



setInterval(function(){
    $("#orang").css("background","orange");
    setTimeout(function(){
            $("#orang").css("background","");

        },500);

    },1000);




<?php
if($uzran==$coran){
?>

$("#<?php echo $uzran.$cou;?>").css("background","green");

$("#f<?php echo $cou;?>").hide();
$("#t<?php echo $cou;?>").css("color","green");

<?php }else if($uzran!==$coran){ ?>

$("#<?php echo $uzran.$cou;?>").css("background","red");

$("#t<?php echo $cou;?>").hide();
$("#f<?php echo $cou;?>").css("color","red");




<?php }  




 $cou++;
}
?>








setTimeout(function(){
    },5000);

</script>
















<?php
include '../home/footer.php';
?>




<!----------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------->
<!--------------->