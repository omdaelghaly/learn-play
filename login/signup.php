<?php

include 'init.php';

include '../home/header.php';

?>



<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $fullname= $_POST['fullname'];
  $user= $_POST['user_name'];
  $email= $_POST['user_email'];
	$pass1= $_POST['pass1'];
  $pass= $_POST['pass'];
  $gender =$_POST['gender'];
  $level= $_POST['level'];
  $date = date('Y-m-d');
  $age = "";
  $bg="ba.jpg";
  $avatar="";
  $ff ="female.jpg";
  $mm ="male.jpg";

 $tpass=$_POST['tpass'];
 $grades=$_POST['grades'];

$tp=7531;
 if($level==1 && $tpass!=$tp){$check=" من فضلك ادخل الرقم الصحيح او تواصل مع الادمن  " ;}
 else if($level==1 && $tpass=$tp){ $grades="";}

 else if($level==0 && $tpass!==$tp){$tpass="" ; }
  
if($gender == 1){ $avatar=$mm;}
else if($gender ==2){ $avatar=$ff;}



//if(strlen($user) < 5 ){$check = " اقل عدد حروف هو 5 ";}
//else if(strlen($pass1) < 5 ){$check = " كلمة المرور يجب ان تكون اكثر من  4 حروف او ارقام  ";}

 






$q="select * from teachers ";
 $qq= mysqli_query($conn,$q);

while($get=mysqli_fetch_array($qq)){

  if($get['email'] ==$email){
    $check =" هذا الايميل مستخدم من قبل   ";
  }else if($get['username'] ==$user ){
    $check ="   اسم المستخدم مستخدم من قبل  ";  }

  }




  if (empty($user or $fullname or $email or $pass1 or $pass ))
   {
     $check=" هناك حقول فارغة   ";
      }else if( $pass1 !== $pass ){ $check ="      لابد ان تكون كلمة السر متطابقة    " ;}


      else if(empty($check)){

    
	$q="insert into teachers (userfname, username,password,email,        
  level,gender,avatar,bg, timeregister,online,grade,tsub,about) values
                          ( '$fullname','$user','$pass1','$email',
    '$level','$gender','$avatar','$bg', '$date' , '' ,'$grades','',''  )  ";

    $qq= mysqli_query($conn,$q);



if($qq){
  
   
  header('location:login.php'); }


}else{ echo " <center style='color:red' > لم يتم التسجيل ......... اعد المحاولة    </center>" ;}

}
 ?>
 









<section class="login-page" style="background:lightgray;">
 <div class="container">
                                                                                                      <div class="row">

<div class="col-lg-6  col-md-9 col-sm-12" >

     <div class="login-form">
         <form class="form-horizantal" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">

        <div class="col-sm-12"id="xxx">
            <lable>Name</lable>
             <input class="form-control" type="text" name="fullname" required placeholder=" الاسم كامل  ">
         </div>

         <div class="col-sm-12">
            <lable>Email</lable>
             <input class="form-control" type="email" name="user_email" required placeholder="الايميل  ">
         </div>


         <div class="col-sm-12">
            <lable>Username </lable>
             <input class="form-control" type="text" name="user_name" required placeholder="اسم المستخدم  ">
         </div>


         <div class="col-sm-12">
            <lable>Pass</lable>
             <input class="form-control" type="password" name="pass1" required placeholder="كلمة المرور ">
         </div>

            <div class="col-sm-12">
               <lable>Conf.Pass</lable>
                <input class="form-control" type="password" name="pass" required placeholder="تاكيد كلمة المرور ">
           </div>

<div class="col-sm-12">
<div class="row">

            <div class="col-sm-6  " >
                        <lable> معلم /طالب  </lable>

<select class="form-control" name="level" id="lvl"  required >
  <?php $s="0" ; $t="1";?>
  
  <option value="<?php echo $s;?> "> طالب   </option>
  <option value="<?php echo $t;?>"> معلم   </option>

</select>
           </div>


         <div class="col-sm-6 ">
                     <lable> gender </lable>

<select class="form-control" name="gender"  required >
  <?php $male="1" ; $female="2";?>
  
  <option value="<?php echo $male;?> "> ذكر  </option>
  <option value="<?php echo $female;?>"> انثى </option>

</select>

         </div>
         <?php  
$n="select * from grades ";
$b=mysqli_query($conn ,$n);

?>

         <div class="col-sm-12" id="coms" >
            <lable>  اختر صفك  </lable>

<select class="form-control" name="grades"  required >
<?php
 while($f=mysqli_fetch_array($b)){

  $gs=$f['gradename'];
  $gid=$f['gradeid'];
?>
  <option value="<?php echo $gid;?> "><?php echo $gs;?> </option>

  
<?php 
}
?>

</select>

         </div>



         <div class="col-sm-12" id="comt" >
            <lable>  teachers </lable>
             <input class="form-control" id="tp" type="text" name="tpass" placeholder=" ادخل الرقم السرى الخاص بالمعلمين  " required >
         </div>




<script>

setInterval(function(){

   a=$("#lvl").val();
if(a==0){
   $("#comt").hide();
   $("#coms").show();
   $("#tp").attr("required",false);
}else{
   $("#comt").show();
   $("#coms").hide();
   $("#tp").attr("required",true);

}

  },1000);


</script>



 </div>
 </div>


             <div class="col-sm-12 margin-top-12" style="margin-top:10px">
               <button  id="ook" class="form-control btn btn-primary" type="submit"> انشاء حساب</button>
            </div>


<?php if(!empty($check)){ ?>
<div class="col-sm-12 alert alert-danger">
 <center> <?php echo @$check; ?>  </center>
</div>

<?php } ?>



<br>

                <a href="login.php"  class="newlog">
                <center style="color:blue;"> تسجيل الدخول بحساب حالى                     </center> </a>
        </form>
    </div>


</div>









                       <div class="wdiv col-lg-6  col-md-3 " 
                       style="background:skyblue;border-radius:30px;">

           <br>
            <br>                                                                      
                                                <center class="wlog"> 

تحية شكر وتقدير وإجلال واحترام لكل معلم ومعلمة ولكل من علمنا حرفا دون النظر الى المادة ؛ تحية شكر لمن اخلصوا فى عملهم  ولم يبخلوا بعلمهم  ؛ جزاكم الله عنا خير الجزاء             
                                                           </center>
                                                                            
                                                                                     </div>




                                                                                                                        </div>
 </div>

 
 </section>







<?php
include '../home/footer.php';
?>












