<?php
include ('sub_header_active.php');


if($_SERVER['REQUEST_METHOD']=="POST")
{
  $myfile=$_FILES['pic'];
  $n1=$myfile['name'];  
  if(strlen($n1)>1)
  {
      move_uploaded_file( $myfile['tmp_name'] ,__DIR__.'/prs_img//'.$myfile['name']  ); 
    $arrayfile=scandir(__DIR__.'/prs_img');
    foreach($arrayfile as $f)
    {
        
            if (4<strlen($f))
            {     




                 $ccc=strstr( $n1,".",false);
                 $t1=strstr( $f,".",true);
  $xx2= strlen($ccc);
 // echo $xx2; 
            $subEnding=substr($f,0,$xx2*-1);
          
                      if ($t1==$iduser)
                      {
                       
                          $path= __DIR__.'/prs_img/'.$f;

                        unlink( $path);
                      
                      }
            }
    }
      $frist=__DIR__."/prs_img/";
      $subEnding=substr($n1,0,$xx2*-1);
      $a=  $frist.$n1 ;
     // echo "a=".$a."<br>"."n1=".$n1;
      $numberSub=str_replace( $subEnding,$iduser,$n1);
      $t1=$frist.$n1;
      $t2=$frist.$numberSub;


      //echo "numberSub=".$numberSub."<br>"."t1=".$t1."<br>"."t2=".$t2;
      rename( $t1,$t2 );
 }
}
?>

<style>
input[type="file"]
{
  display:none;
}
</style>
<div class="container" >
    
        <div class="row" style=" display: flex; flex-direction: row-reverse;">
            <div class="col-md-4 col-sm-12" style="text-align:center;" >
               <div  ><img  src=<?php  echo $imag_picture1;  ?>   height="150px" px width="150px"  class="rounded-circle"></div>
             <br>
            <form method="post" enctype="multipart/form-data">
            <label id="hh" for="file_upload" class="btn btn-outline-dark"> اختار صورة </label>
            <input id="file_upload" type="file" name ="pic"/>
             <br><br>
             <button type="submit" id="pkkk"  class="btn btn-outline-dark" >استمرار</button>
            </form>
            <br>
                <form   class="border_from" action="16.php" method="post">     
    
<div    >
                      
                      <label ><?php echo $uNAMEs;    ?></label>
                      <label >:الاسم الكامل</label>
</div>             
                      <br>
<div>
                     
                      <label ><?php echo $uEMAILs;    ?></label>
                      <label >:البريد الاكتروني  </label>
</div>



                 
                      <br>
                      <div id="uu" ><button type="button" id="p1" onclick="(vis())"  class="btn btn-outline-dark">تغير كلمة المرور</button> </div>
                      <br>
                      
                      <div> <input type="password" id="p2" name="passold" style="visibility:hidden;" required="required" placeholder="ادخل كلمة المرور القديمة " >              </div>
                      <br>
                      <div> <input type="password" id="p3" name="reppassold" style="visibility:hidden;" required="required" placeholder="ادخل كلمة المرور الجديدة " >              </div>
                      <br>
                      <div> <input type="password" id="p4" name="newpass" style="visibility:hidden;" required="required" placeholder="تاكيد كلمة المرور الجديدة " >              </div>
                      <br>
                      <br>
                      <div> <input type="text" id="emailname" style="visibility:hidden;" name="emailname" value="<?php echo $uEMAILs;   ?>"  placeholder="EMAIL" >              </div>
                      <br>
                      <button type="submit" id="p5" style="visibility:hidden;" class="btn btn-outline-dark" onclick="(clcl())">استمرار</button>
                </form>
              </div>

           <script>  



</script>