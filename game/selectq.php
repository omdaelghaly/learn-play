
<!--<meta http-equiv="refresh" content="5">---->

<?php
session_start();
include'../inc/config.php';


$gamer=$_SESSION['id'];
$m="select * from game where userid='$gamer'  ";
$ss=mysqli_query($conn,$m);
while($f=mysqli_fetch_array($ss)){

	$sq=$f['b'];

	$j=rand(1,$f);
$gg="select * from questions where questid ='$sq' ";
$d=mysqli_query($conn,$gg);
while(@$m=mysqli_fetch_array($d)){
	$q=$m['question'];
	$a=$m['answera'];
	$b=$m['answerb'];
	$c=$m['answerc'];
	$d=$m['answerd'];
    $co=$m['answercorrect'];
    $inf=$m['info'];
}
}

?>

<script>
$("#correct").html("<?php echo $co;?>");
$("#try").html("<?php echo $j;?>");

$("#q").html('<?php echo $q ;?>');
$("#aa").html('<?php echo $a ;?>');
$("#bb").html('<?php echo $b ;?>');
$("#cc").html('<?php echo $c ;?>');
$("#dd").html('<?php echo $d ;?>');

$("#inf").html('<?php echo $inf;?>');

//numberquestion
nmb=parseInt(document.getElementById("numqq").innerHTML);

$("#numqq").html(nmb+1);
</script>
