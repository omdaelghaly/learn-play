<?php
$host="localhost";
$userr="root";
$passs="";
$db   ="millionaire";


$conn= mysqli_connect($host,$userr,$passs,$db);

if($conn){
	
}else{
	echo"disconnected";
}

?>