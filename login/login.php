<?php
include 'init.php';




?>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $email= $_POST['email'];
  $user = $_POST['email'];
  $pass= $_POST['pass'];





$q="select * from teachers where 
    email='$email' or username ='$user' && password='$pass' ";
 $qq= mysqli_query($conn,$q);

$get=mysqli_fetch_array($qq); 
$count= mysqli_num_rows($qq);


   if($count ==1 ){
    
    session_start();

    $_SESSION['email'] =$get['email']  ;
    $_SESSION['user'] =$get['username'] ;
    $_SESSION['id'] =$get['userid'] ;
    $_SESSION['userfn'] =$get['userfname'] ;
    $_SESSION['grade'] =$get['grade'] ;


/*remember me  */
if(!empty($_POST['rem'])){
    setcookie('email',$email,time()+(3600000));
    setcookie('pass',$pass,time()+(3600000));

   
};
/*-------ONLINE--------*/
  

  $online="update teachers set online = 1 where username='$user' || email ='$email'  ";
  $onli= mysqli_query($conn,$online);
  


//echo $_SESSION['temail'].$_SESSION['tname'];





  header('location:../home/');
   }else { $error="      خطأ فى اليوزر او الباس ... اعد المحاولة او قم بالتسجيل    ";}
}





?>











<!--     <?php echo $_COOKIE['email'].$_COOKIE['pass']?>          ---------->
<body>

<section class="login-page" style="background:lightgray;height:100%">
<br>
            <br>
       <div class="container" >   
                                                            <div class="row">

           <div class=" col-lg-6  col-md-9 col-sm-12" style="background:pink;border-radius:30px 30px">

             <div class="login-form">
                <form class="form-horizantal" method="post"  action="<?php echo $_SERVER['PHP_SELF'];?>">


                 <div class="form-group">
                   <lable>Email/User</lable>
                   <input class="form-control" type="text" name="email" placeholder="اسم المستخدم  او  الايميل  "
                    value= <?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];}?> >
                 </div>

                 <div class="form-group">
                  <lable>Password</lable>
                  <input class="form-control" type="password" name="pass" placeholder="كلمة المرور "
                   value= <?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];}?> >
                 </div>


                      <input type="checkbox" name="rem" id="rem"> تذكرنى



                  <div class="form-group">
                   <button class="form-control btn btn-primary" type="submit">login</button>
                  </div>
                                
            <br>
            <br>


<center style="color:red">  <?php echo @$error;?>   </center>

               <a href="signup.php" >

               <center class="newlog">
                 انشاء حساب جديد 

                   </center> </a>
        </form>
    </div>
 </div>





                       <div class="wdiv col-lg-6  col-md-3 " 
                       style="background:skyblue;border-radius:30px">

           <br>
            <br>                          
                                                <center class="wlog"> 

تحية شكر وتقدير وإجلال واحترام لكل معلم ومعلمة ولكل من علمنا حرفا دون النظر الى المادة ؛ تحية شكر لمن اخلصوا فى عملهم  ولم يبخلوا بعلمهم  ؛ جزاكم الله عنا خير الجزاء             
                                                           </center>

                                                                            
                                                                                     </div>


                                                                               </div>

</div>
 
 </section>

</body>






<?php
include '../home/footer.php';
?>

