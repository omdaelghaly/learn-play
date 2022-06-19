<div style="direction:rtl;text-align:right">

<div id="ask" ></div>
<?php 

include '../inc/config.php';

$tid= $_SESSION['id']; ?>

<br>
 <div     class="btn-block btn btn-info" > تحرير امتحان    </div>



<!---------------------------------addqestions--------------------------------------------->


<div  id="qr">  </div><div  id="q">  </div>

<br>
<!--choose exam sho=1 to diplay its content--->

<?php
$ad="select * from exams where teacherid = '$tid' && sho = 1 ";
$a=mysqli_query($conn , $ad);
$ex=mysqli_fetch_array($a);
$subid= $ex['subjectid'];
$grid =$ex['gradeid'];
$term =$ex['term'];
$examid=$ex['examid'];
 @$exn=$ex['examname'];



 //ask teacher to choose exam first before add questions
 if (empty(@$exn)){
  $ask=" <center style='color:red'>  اختر امتحان اولا لتحريره من صفحة  اضافة امتحان </center> ";
  ?> <script>
  $("#ask").html("<?php echo $ask; ?>");
  </script>
  <?php
 }else{ ?>

<script>
$(document).ready(function(){

setInterval(function(){
  $("#qr").load("getexn.php");

  },2000);
  });

</script>



<?php ;}

?>

 




 <form  action="" method="post" id="insert_data2" >

                <input name="tid" type="text" id="tid" value='<?php echo $tid;?>'  hidden  >  
                <input name="examid" type="text" id="examid" value='<?php echo $examid;?>'  hidden  >  
                <input name="grid" type="text" id="grid" value='<?php echo $grid;?>'  hidden  >
                <input name="subid" type="text" id="subid" value='<?php echo $subid;?>'  hidden  >  
                <input name="term" type="text" id="term" value='<?php echo $term;?>'  hidden  >  





<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> اضف سؤال   </lable>

    <div class="col-sm-10">
          <input name="quest" type="text" id="quest"  class="form-control"  >  
                  
       </div> 

  </div>
<!---------------------------------------------------------------------------->

<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> الاختيار الاول  </lable>

    <div class="col-sm-10">
          <input name="answera" type="text" id="answera"  class="form-control"  >  
                  
       </div> 

  </div>
<!---------------------------------------------------------------------------->
<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> الاختيار الثانى  </lable>

    <div class="col-sm-10">
          <input name="answerb" type="text" id="answerb"  class="form-control"  >  
                  
       </div> 

  </div>
<!---------------------------------------------------------------------------->

<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right">  الاختيار الثالث   </lable>

    <div class="col-sm-10">
          <input name="answerc" type="text" id="answerc"  class="form-control"  >  
                  
       </div> 

  </div>
<!---------------------------------------------------------------------------->
<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> الاختيار الرابع  </lable>

    <div class="col-sm-10">
          <input name="answerd" type="text" id="answerd"  class="form-control"  >  
                  
       </div> 

  </div>
<!---------------------------------------------------------------------------->
<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> الاختيار الصحيح    </lable>

    <div class="col-sm-10">
          <select  name="answerco"   class="form-control"  >  
                  <option value="a"> الاختيار الاول  </option>
                  <option value="b">  الاختيار الثانى  </option>
                  <option value="c">   الاختيار الثالث </option>
                  <option value="d">  الاختيار الرابع    </option>

          </select>
       </div> 

  </div>
<!---------------------------------------------------------------------------->
<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> اضف معلومه   </lable>

    <div class="col-sm-10">
          <input name="info" type="text" id="info"  class="form-control"  >  
                  
       </div> 

  </div>


<!------------------------------------------------------------------------------>


<div class="form-group row">


    



    <div class="col-sm-10">
 <input type="button" name="addq" id="addq" value=" اضافة سؤال  "   class="btn-block btn btn-success" >
    </div>



  </div>
</form>






<!------------------------------------------------------------------------------>
<hr>
</div>
<!------------------------------------------------------------------------------>
<!-------------------------showexamedit----------------------------------------------------->

<div id="dir"  >

<button style="float:right;margin-right:20px" id="r" onclick="r();">  R>> </button>
<button style="float:left;margin-left:20px" id="l" onclick="l();" >L<< </button>

<div id="editexx">






</div>
</div>
<script>
$(document).ready(function(){

setInterval(function(){
  $("#editexx").load("exam.php");

  },2000);
  });

</script>
<script>
$(document).ready(function(){

 $("#r").click(function(){
 	$("#editexx").css({"direction":"rtl","text-align":"right"});
 	});
$("#l").click(function(){
 	$("#editexx").css({"direction":"ltr","text-align":"left"});
 	});
  });

</script>





<!------------------------------------------------------------------------------>







<script>
        $(document).ready(function() {
            $('#addq').click(function() {
                var q = $('#quest').val();
                var a = $('#answera').val();
                var b = $('#answerb').val();
                var c = $('#answerc').val();
                var d = $('#answerd').val();
                var co = $('#answerco').val();
               
                
                if (a == '' || b=='' || c=='' || d=='' || q==''  )
                      {
                    $('#q').html('<center style="color:red;">   يوجد حقول فارغة   </center>');
                } else {
                    $.ajax({
                        url: "insertq.php",
                        method: "POST",
                        data: $('#insert_data2').serialize(),
                        success: function(data) {
                            $('form').trigger("reset");
                            $('#q').fadeIn().html(data);
                            setTimeout(function() {
                                $('#q').fadeOut("slow");
                            }, 6000);
                        }
                    });
                }
            });
        });
    </script>