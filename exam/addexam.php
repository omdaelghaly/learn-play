
<?php 

$tid= $_SESSION['id']; 
?>

<div style="direction:rtl;text-align:right">


<br>
 <div     class="btn-block btn btn-info" > اضف امتحان جديد    </div>



<div  id="return"></div>
<br>



 <form class="formexamn" action="" method="post" id="insert_data" >
<?php
$tr="select * from exams where teacherid = '$tid' ";
$n=mysqli_query($conn,$tr);        
 $num=mysqli_num_rows($n);
$newex=$num+1;
?>

          <input name="tid" type="text" id="tid" value='<?php echo $tid;?>'  hidden  >  
          <input name="num" type="text" id="num" value='<?php echo $newex;?>'  hidden  >  



  <div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> اختر المادة    </lable>


    <div class="col-sm-10">
          <select  name="subject"   class="form-control"  >
 <?php 
 $s="select * from subjects ";
$sub=mysqli_query($conn,$s);        
 while($subj=mysqli_fetch_array($sub)){ 
    $subid=$subj['subjectid'];
    $subname=$subj['subjectname'];

    ?>            	
                  <option value='<?php echo $subid;?>'> <?php echo $subname;?>   </option>

        <?php } ?>
          </select>
       </div> 

  </div>
<!---------------------------------------------------------------------------->
 
  <div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right">اخترالصف   </lable>

    <div class="col-sm-10">
          <select  name="grade"   class="form-control"  >	
            <?php 
 $g="select * from grades ";
$gra=mysqli_query($conn,$g);        
 while($grad=mysqli_fetch_array($gra)){ 
    $graid=$grad['gradeid'];
    $graname=$grad['gradename'];

    ?>              
                  <option value='<?php echo $graid;?>'> <?php echo $graname;?>   </option>

        <?php } ?>
          </select>
       </div> 

  </div>
<!---------------------------------------------------------------------------->

  <div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> اختر الترم  </lable>

    <div class="col-sm-10">
          <select  name="term"   class="form-control"  >	
                  <option value="1">  الترم الاول  </option>
                  <option value="2">   الترم الثانى  </option>
          </select>
       </div> 

  </div>
<!---------------------------------------------------------------------------->

<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> الوحدة  </lable>

    <div class="col-sm-10">
                   <select  name="unit" id="unit"   class="form-control"  > 
                  <option value="0"> كل الوحدات   </option>
                  <option value="1"> الوحدة الاولى   </option>
                  <option value="2">  الوحدة الثانية    </option>
                  <option value="3"> الوحدة الثالثة    </option>
                  <option value="4"> الوحدة الرابعة </option>
                  <option value="5"> الوحدة الخامسة  </option>
                  <option value="6"> الوحدة السادسة    </option>
                  <option value="7"> الوحدة السابعة   </option>
                  <option value="8"> الوحدة الثامنه   </option>

                </select>         
       </div> 

  </div>
<!---------------------------------------------------------------------------->
<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> اسم الامتحان  </lable>

    <div class="col-sm-10">
          <input name="exname" type="text" id="exname"  class="form-control"  >  
                  
       </div> 

  </div>
<!---------------------------------------------------------------------------->

<div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> درجة كل سؤال  </lable>

    <div class="col-sm-10">
          <input name="mark" type="number" id="mark"  class="form-control"  >  
                  
       </div> 

  </div>
<!---------------------------------------------------------------------------->



     <div class="form-group row">
    <div class="col-sm-10">
 <input type="button" name="submit" id="addexam" value=" اضف امتحان جديد  "   class="btn-block btn btn-success" >
    </div>
  </div>
</form>





<!-------------------------diplayone exam---------------------------------------------------->
<hr>
<!-------------------------diplayone exam---------------------------------------------------->


<div  id="oneexam1"></div> 
<div  id="qr"></div>
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
 if (empty(@$exn)){$ask=" <center style='color:red'>  اختر امتحان  واضغط تحرير  لكى يتم عرض وتحرير الامتحان والاسئلة  </center> ";
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


<!--------------------------------chooseexam------------------------------------------>

 <form  action="" method="post" id="oneexam" >





 <div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> اختر امتحان   </lable>


    <div class="col-sm-10">
          <select  name="num"   class="form-control"  >
 <?php 
 $exa="select * from exams where teacherid = '$tid' ";
$ez=mysqli_query($conn,$exa);        
 while($ex=mysqli_fetch_array($ez)){ 
    $exname=$ex['examname'];
    $exnum =$ex['num'];
    $exid=$ex['examid'];

    ?>              
                  <option value='<?php echo $exid ;?>'> <?php echo $exname?>   </option>

        <?php } ?>
          </select>
       </div> 

  </div>

<!------------------------------------------------------------------------------>
          <input name="tid" type="text" value='<?php echo $tid ;?>'  hidden >  
          <input name="examid" type="text" value='<?php echo $exid ;?>'  hidden >  

          


<!---------------------------------------------------------------------------->
 <div class="form-group row">
    <div class="col-sm-10">
 <input type="button" name="submit" id="showexam" value=" تحرير /عرض الامتحان  "   class="btn-block btn btn-success" >
    </div>
  </div>
</form>






<!------------------------------------------------------------------------------>
<hr>
</div>


<!------------------tablexam ------------------------------------------------------------>





<div id="tableex" >


</div>


<script>
$(document).ready(function(){

setInterval(function(){
  $("#tableex").load("examtable.php");

  },2000);
  });

</script>





<script>
        $(document).ready(function() {
            $('#showexam').click(function() {
                                           
                  $.ajax({
                        url: "showexam.php",
                        method: "POST",
                        data: $('#oneexam').serialize(),
                        success: function(data) {
                            $('form').trigger("reset");
                            $('#oneexam1').fadeIn().html(data);
                            setTimeout(function() {
                                $('#oneexam1').fadeOut("slow");
                            }, 6000);
                        }
                    });
            });
        });
    </script>








<script>
        $(document).ready(function() {
            $('#addexam').click(function() {
                var exn = $('#exname').val();
                var exmark = $('#mark').val();             
                
                if (exn == '' || exmark =='' )
                      {
                    $('#return').html('<center style="color:red;">  ادخل اسم الامتحان ودرجة كل سؤال   </center>');
                } else {
                    $.ajax({
                        url: "addexam1.php",
                        method: "POST",
                        data: $('#insert_data').serialize(),
                        success: function(data) {
                            $('form').trigger("reset");
                            $('#return').fadeIn().html(data);
                            setTimeout(function() {
                                $('#return').fadeOut("slow");
                            }, 6000);
                        }
                    });
                }
                window.location.reload();               

            });
        });
    </script>
