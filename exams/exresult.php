


<?php 


include '../inc/config.php';

	$countq=$_POST['countq'];
   $tid=$_POST['tid'];
   $mark=$_POST['mark'];
   $exid=$_POST['exid'];
   $stuid=$_POST['stu'];



$i=1;
   while( $i <= $countq ){

	@$ans=$_POST[$i];
	$co=$_POST['co'.$i];
	$info=$_POST['info'.$i];
     $qid=$_POST['q'.$i];


if($ans==$co){$usermark=$mark;}else{$usermark=0;}

@$total +=$usermark;

//	echo $i."--".$ans."--".$co."--".$usermark."---".$info."--------- <br>";

$ina="insert into answers (answerid , teacherid, examid , userid , questid ,num , answer ,answercorrect ,mark , info,usermark )
                     values (''  , '$tid' , '$exid','$stuid' , '$qid', '$i' ,'$ans','$co','$mark','$info','$usermark') ";
 $inok=mysqli_query($conn,$ina); 



 $i++;                  

}

$stresult="insert into  results (resultid , teacherid ,examid,userid,mark)
          values( '' , '$tid' ,'$exid', '$stuid' , '$total') ";

$okk=mysqli_query($conn,$stresult);

?>
<center style="color:green;">    .......تم الارسال    </center> 
