
   <div type="submit" name="subject"  value=" "   class="btn-block btn btn-info" >المواد الدراسية </div>





<br >
<div  id="return"></div>
<br>



 <form class="formexamn" action="" method="post" id="insert_data" >

 <div class="form-group row">
    <lable class="col-sm-2 col-form-label" style="text-align:right"> اضافة ماده </lable>

    <div class="col-sm-8">

           <input type="text" name="subject" id="subject" class="form-control"  >

       </div> 

  </div>


     <div class="col-sm-12">
 <input type="button" name="submit" id="insertsubject" value="اضافة مادة دراسية "   class="btn-block btn btn-success" >

       </div> 


</form>



<!----------------------------------------------------------------------------------------------------->


<div id="table" >


</div>


<script>
$(document).ready(function(){

setInterval(function(){
	$("#table").load("subtable.php");

	},2000);
	});

</script>



















<script>
        $(document).ready(function() {
            $('#insertsubject').click(function() {
                var sub = $('#subject').val();
               
                
                if (sub == ''  )
                      {
                    $('#return').html('<center style="color:red;"> ادخل المادة  </center>');
                } else {
                    $.ajax({
                        url: "insertsubject.php",
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
            });
        });
    </script>