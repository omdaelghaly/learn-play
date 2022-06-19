  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
session_start();
$uuser=@$_SESSION['userfn'];
$tid= @$_SESSION['id']; 
include '../inc/config.php';

$r="select * from teachers where userid = '$tid'";
$g=mysqli_query($conn,$r);
$k=mysqli_fetch_array($g);
$tavatar=$k['avatar'];
$tuser=$k['userfname'];
$leve=$k['level'];

if($leve==0){$hid="hidden";}
if(empty($uuser)){$xxuzr="hidden";}
?>
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
  <a class="navbar-brand" href="#">MR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    <ul class="navbar-nav"<?php echo @$xxuzr;?>>
      <li class="nav-item active">
        <a class="nav-link" href="../home/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="../exams/"> امتحانات    </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../game/">العاب  </a>
      </li >
      <li class="nav-item dropdown" >
        <a   class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false" >
          <?php echo $tuser;?><img src="../img/<?php echo $tavatar; ?>"
           style="width:50px;height:50px;position:absolute;margin-top:0px;padding:5px;border-radius:20px  "> 
        </a>



        <div id="menuu" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" <?php echo @$xxuzr;?>>

          <a class="dropdown-item" <?php echo @$hid;?> href="../exam"> امتحان جديد  </a>
           <a class="dropdown-item" href="../profile/">myprofile </a>
          <a class="dropdown-item" href="../login/logout.php" >تسجيل الخروج </a>
         

        </div>
      </li>
    </ul>
  </div>
</nav>


<style>
#menuu a:hover{background:orange}
</style>