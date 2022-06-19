

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<br>
<?php
session_start();

 $tid= $_SESSION['id'];
include '../inc/config.php';

 //getexamid from examtable
$exs="select * from exams where teacherid= '$tid' && sho = 1  ";
$sel=mysqli_query($conn ,$exs);
$ddd=mysqli_fetch_array($sel);
$exid=$ddd['examid'];

// select exam with exid
$exq="select * from questions where examid= '$exid'  ";
$sk=mysqli_query($conn ,$exq);
$count=mysqli_num_rows($sk);
$cou=1 ;

  ?>



<div id="qstate"></div>

<div id="cont"  class=" col-xs-12 col-sm-12 col-md-12- col-lg-12 col-xl-12 " >

<?php
while($mn=mysqli_fetch_array($sk)  ){

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
  

 <form  action="" method="post" id="<?php echo $cou;?>" style="display:inline" >
      <input type="text" name="delq" id="delq" value=" <?php echo $qid ;?>"   hidden >
     <input type="button" name="delqq" id="<?php echo $cou;?>" value=" حذف  "   class="btn btn-danger" >
    </form>


     <div id="w">
    <strong id="qw">  <?php echo $q;?> </strong>
    


<br>
<br>


<div id="answer">
	
<div id="ans">
<span>a -</span><div class="aa"> <?php echo $a;?> </div>
</div>


<div id="ans">
<span>b -</span><div class="aa"> <?php echo $b;?> </div>
</div>



<div id="ans">
<span>c -</span><div class="aa"> <?php echo $c;?> </div>
</div>


<div id="ans">
<span>d -</span><div class="aa"> <?php echo $d;?> </div>
</div>



</div>

<p id="inf"><center><?php echo $info;?> </center> </p>


 </div>
</div>

<script>
        $(document).ready(function() {
            $('#<?php echo $cou;?>').click(function() {
                

                    $.ajax({
                        url: "delq.php",
                        method: "POST",
                        data: $('#<?php echo $cou;?>').serialize(),
                        success: function(data) {
                            $('form').trigger("reset");
                            $('#qstate').fadeIn().html(data);
                            setTimeout(function() {
                                $('#qstate').fadeOut("slow");
                            }, 6000);
                        }
                   });
             
            });
        });
    </script>


<hr>
<?php 
 $cou++;
} ?>


</div>



</body>
</html>

<style type="text/css">
	#w{background:white;padding:10px;line-height:30px;font-size:16px;border-radius: 30px 30px;margin:2px;    }
    #qqq{width:100%;display: inline}
    #n{padding:5px;background:blue;height: 50px;width:50px;border-radius:20px 0 20px 0 ;color: white;font-size:18px   }   
    #ans{display: inline-flex;margin: auto}  
    #ans span{ padding:5px;background:orange;height: 30px;width:30px;border-radius:10px 0 10px 0 ;color: white   }
    .aa{padding:5px;background:white;border-radius:10px 10px ;margin:2px   }

    #inf{margin-right:10%;margin-left:10% ;  }
    center{background:lightgreen}
    #cont{width:100% }
    #del{background:red;color:white;border-radius:40px}
</style>


