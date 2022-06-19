
 



<?php
 include '../inc/config.php' ;

$ssq=   "select * from post  order by postid asc ";
 $qqq = mysqli_query($conn,$ssq);

?>


                                                 <div id="chbody" style="height:410px;over-flow:scroll">
<?php
while( $c =mysqli_fetch_array($qqq)){

 $user=$c['user'];
 $post= $c['post'];
 $tm=$c['time'];
 $dt=$c['date'];
 $avatar=$c['avatar'];
 $postid=$c['postid'];
 $urid=$c['userid'];
 $postid=$c['postid'];
 
if(empty($c['post'])){echo "yrs";}

 ?>

<div id="vvv"></div>

    <div class="media mt-3" style="direction:rtl">
      <a class="mr-3" href="../userprofile/?uid=<?php echo $urid;?>">
          <img src="../img/<?php echo $avatar;?>" class="mr-3" alt="..." style="width:50px;height:50px;border-radius:50%;
          margin-left:10px">
      </a>
      <div class="media-body" style="dir:rtl">
      <a href="javascript:void(0)"  onclick="del('delpost.php?postid=<?php echo $postid; ?>')"
     ><span style="color:red">x </span></a>

           <span class="mt-0" style="margin-left:20px;font-size:11px;color:green ; display:inline"> <?php echo $tm ."   ".$dt ;?> </span>
        <span style="font-size:18px;float:right;color:blue"><?php echo $user;?></span><br>


               <p id="ppost" style="font-size:15px;background:white;padding:5px;text-align:center;
               border-radius:10px;direction:rtl; margin-left:30px;margin-bottom:1px" > 
                               <strong>   <?php echo $post;?>  </strong>               </p>

<?php
$simg="select * from img where postid='$postid' ";
$bv=mysqli_query($conn,$simg);
while($ig=mysqli_fetch_array($bv)){
$mg=$ig['imgn'];
?>
          <?php if(empty($mg)){$what = "none ";}?>
                <div class="row" >
                <img src="../images/<?php echo $mg;?>" 
                style="width:100%;height:300px;border-radius:10px ;display: <?php echo $what ;?> "class="mr-3" alt="..." ></div>

        <?php }?>                   


      </div>
    </div> 
                            <hr >




        <?php }?>                   

                                                               </div>




<script>
function del(page) {
       var xmlhttp;
       if(window.XMLHttpRequest) {
         xmlhttp = new XMLHttpRequest();
       } else {  
         xmlhttp = new ActiveXobject("Microsoft.XMLHTTP");
       } 
         
       xmlhttp.onreadystatechange = function() { 
         
         if(this.readyState == 4 & this.status == 200) { 
           document.getElementById("vvv").innerHTML = this.responseText;
         }
       } 
       xmlhttp.open("GET",page,true);
       xmlhttp.send();
     } 
                               
</script>

                          