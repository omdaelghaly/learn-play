


<?php include '../inc/config.php' ;

if($_SERVER['REQUEST_METHOD'] == "POST"){
 $tpost=$_POST['talkpost'];
$user = $_POST['uzr'] ;
$userid = $_POST['uzrid'] ;
$userav = $_POST['uzrav'] ;

 $name     =@$_FILES['photo'] ['name'] ;
  $type     =@$_FILES['photo'] ['type'] ;
  $tmp      =@$_FILES['photo'] ['tmp_name'] ;
  $size      =@$_FILES['photo'] ['size'] ;
   
 $date=date('dMy');
 $time=date('H:i:s');
 


$n="INSERT INTO `post` (`postid`, `userid`,`user`, `avatar`, `post`,`date`, `time`) VALUES 
('', '$userid','$user', '$userav', '$tpost','$date' , '$time')";

$m= mysqli_query($conn,$n);
if($m){
	   echo"<audio src='chatsound.wav' autoplay></audio>";

       }


if(!empty($name)){
$w="select * from post where userid='$userid' order by date asc ,time asc ";
$mc=mysqli_query($conn,$w);
while($zx=mysqli_fetch_array($mc)){
	$pid=$zx['postid'];
                                 }

 $count=count($_FILES['photo'] ['name']);
    for ($i = 0; $i < $count ;$i++) {
   $name     = @$_FILES['photo'] ['name'][$i] ;
  $type     = @$_FILES['photo'] ['type'][$i] ;
  $tmp      = @$_FILES['photo'] ['tmp_name'][$i] ;
  $size      =@$_FILES['photo'] ['size'][$i] ;
   
$allowed =array("jpg","png","gif","jpeg");
$explode =explode('.',$name);
$filetype=strtolower(end($explode));

if(! in_array($filetype, $allowed)){
  echo "  this extention not supported ";
} else{  

    $nename= rand(0,5)."_".$name;

  move_uploaded_file($tmp, '../images/'.$name);
  


  $st="insert into img (imgid , postid , userid  , imgn , a)  
                      values  ('','$pid', '$userid'  ,  '$name' ,''  ) ";
$tt = mysqli_query($conn,$st);

}}



}



}