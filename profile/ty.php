    


    <form method="post" action=""    enctype ="multipart/form-data" >

       <input name="profilephoto"  type="file" value=" ">
       <input name="profilephoo"  type="submit" value="mm">

       </form>

       <?php
if(isset($_POST['profilephoo'])){
        $name     = @$_FILES['profilephoto'] ['name'] ;
  $type     = @$_FILES['profilephoto'] ['type'] ;
  $tmp      = @$_FILES['profilephoto'] ['tmp_name'] ;
  $size      =@$_FILES['profilephoto'] ['size'] ;
   

   echo $tmp;



   move_uploaded_file($tmp,"i/".$name);
}
   ?>