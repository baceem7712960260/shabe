
<?php
session_start();
if(isset($_SESSION["username"]))
{$iduser= $_SESSION["username"];
 $myid_ura= $_SESSION["id_ura"];


}
else
{
 
 header('Location: 3.php');
           exite();
}
if($_SESSION["IMAG"]!=1)
{

  $imag_picture1= $_SESSION["IMAG"];
}
else 
{
  
  $imag_picture1= "prs_img//0.png";
}
define("HOSTNAME","localhost");
define("HOST_USER","baceem");
define("HOST_PASS","baceem1991");
define("DB_NAME","alshab");
$conns=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conns,"set NAMES utf8");
?>


<?php 
$qs='SELECT user_reg.ID_USER as uID_USER , user_reg.NAME as uNAME , user_reg.EMAIL as uEMAIL , user_reg.MYPASSWORD as uMYPASSWORD , user_reg.MYDATE as uMYDATE , user_reg.IMAG as uIMAG ,   ifnull( admin.ID_ADMIN,0 ) as adminsql FROM `user_reg` JOIN ura on user_reg.ID_USER=ura.ID_USER LEFT JOIN admin on admin.ID_USER=user_reg.ID_USER WHERE user_reg.ID_USER='.$iduser;
$results=mysqli_query($conns,$qs);
if (mysqli_num_rows($results)>0){
   while($rows=mysqli_fetch_assoc($results)){
     $a="prs_img//" ;
     $b=  $rows["uID_USER"];
     $uEMAILs=$rows["uEMAIL"]; 

     $uNAMEs=$rows["uNAME"];
     $mypassword=$rows["uMYPASSWORD"];
    
     $c=".jpg" ;
$path_pic=$a.$b.$c;
//$imag_picture= "prs_img\\0.png";


$arrayfile=scandir(__DIR__.'/prs_img');
   
    foreach($arrayfile as $f)
    {
            if (4<strlen($f))
            {
            $subEnding=substr($f,0,-4);
                    if ($subEnding==$iduser)
                    {
                        $nameonly= $f;
                     
                       
                    }
            }
   }

 $total=pathinfo(__DIR__.'/prs_img//'.$nameonly);
$imag_picture1=$total["filename"].".".$total["extension"];
$imag_picture1='prs_img//'.$imag_picture1;
if (isset($rows["adminsql"]))
{ 
  $x1=$rows["adminsql"];
  $_SESSION["admin"]=1;
   }else{
    $_SESSION["admin"]=0;
   }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
 <!--    <link rel="stylesheet" href="css\bootstrap.min.css" >
     <link rel="stylesheet" href="css\all.css" >
    <link rel="stylesheet" href="css\mycss1.css" >
     <link rel="stylesheet" href="css\mycss2.css" >
     <link rel="stylesheet" href="css\mycss2b.css" >
    --> <link rel="stylesheet" href="css\mypro.css" >
    <style>
a:hover{

text-decoration:none;

}
</style>
  <title>اهلنا الشعب</title>
  </head>
  <body >

  <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark main" style=" margin-right: 0; margin-left: 0 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="7.php">اهلنا الشعب</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
       
      </li>

      <li class="nav-item " style="padding-left: 50px;">
          
      <a class="nav-link" href="15.php">تسجيل الخروج </a>
      </li>

      <li class="nav-item " style="padding-left: 50px;">
          
          <a href="11.php"> <img src=<?php  echo $imag_picture1;  ?> height="50px" px width="50px"  class="rounded-circle"></a>
      </li>
      

      <li class="nav-item dropdown" style="padding-left: 50px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="far fa-bell fa-2x"></i> 
          </a>

         

        
         <div class="dropdown-menu" style="text-align:right " aria-labelledby="navbarDropdown">
         <?php 
        
  $q3='SELECT "1" ,  description.ID_DESC as id1 , user_reg.NAME as nameperson , place.NAME as mameplace , description.MYDATE as dataa FROM `description_activ` RIGHT JOIN description on description_activ.ID_DESC=description.ID_DESC JOIN ura on ura.ID_URA=description.ID_URA JOIN user_reg on user_reg.ID_USER=ura.ID_USER JOIN place_active on place_active.ID_PA=description.ID_PA JOIN place on place_active.ID_PLACE=place.ID_PLACE WHERE IFNULL( description_activ.ID_DES_ACTIV,0)=0 UNION SELECT "2" ,  place.ID_PLACE , user_reg.NAME , place.NAME , place.MYDATA FROM place_active RIGHT JOIN place ON place_active.ID_PLACE=place.ID_PLACE JOIN ura ON ura.ID_URA=place.ID_URA JOIN user_reg ON user_reg.ID_USER=ura.ID_USER WHERE IFNULL(place_active.ID_PLACE,0)=0 UNION SELECT "3" , place.ID_PLACE , user_reg.NAME , place.NAME , place_active.MYDATE FROM place_active JOIN place ON place.ID_PLACE=place_active.ID_PLACE JOIN ura ON ura.ID_URA =place.ID_URA JOIN user_reg on user_reg.ID_USER=ura.ID_USER UNION SELECT "4" , user_reg.ID_USER , user_reg.NAME ,"no", user_reg.MYDATE FROM ura RIGHT JOIN user_reg on user_reg.ID_USER=ura.ID_USER WHERE IFNULL(ura.ID_URA,0)=0 UNION SELECT "5", user_reg.ID_USER , user_reg.NAME, "no" , admin.MYDATE FROM user_reg JOIN admin on user_reg.ID_USER=admin.ID_USER ORDER by dataa desc';
  if ($x1>0)

  {

  $counter=0;
$results1=mysqli_query($conns,$q3);
if (mysqli_num_rows($results1)>0){
  while($rows1=mysqli_fetch_assoc($results1) and $counter<9 ){
    $counter=$counter+1;
    

    
                                                if ( $rows1["1"]=="1"){
                                                  // echo $rows1["1"]." ".$rows1["id1"]." " .$rows1["nameperson"]." " . $rows1["mameplace"]." ". $rows1["dataa"];
                                                ?>
                                                
                                                
                                                <form class="border_from" action="20.php" method="post" >
                                                <input  type="hidden" id="fname2" name="admin" value=<?php echo $x1; ?>   >
                                                 <input  type="hidden" id="fname2" name="ID_DESC" value=<?php echo $rows1["id1"]; ?>   >
                                                  <a dir="rtl" class="dropdown-item   mycolor" href="#">         تم التعديل على مكان <span style="font-weight: bold;"><?php echo $rows1["mameplace"] ?> </span> من قبل العضو <span style="font-weight: bold;">  <?php echo $rows1["nameperson"] ?> </span> <button class="myboldmuseaggred">قبول </button>   </a>
                                                  <div class="dropdown-divider"></div>
                                                </form>
                                                
                                                <?PHP
                                                
                                              } //if ( $rows1["1"]=="1")
                                              elseif ( $rows1["1"]=="2")
                                              {
                                                // echo $rows1["1"]." ".$rows1["id1"]." " .$rows1["nameperson"]." " . $rows1["mameplace"]." ". $rows1["dataa"];
                                                  ?>
                                                   <form class="border_from" action="21.php" method="post" >
                                                   <input  type="hidden" id="fname2" name="admin" value=<?php echo $x1; ?>   >
                                                 <input  type="hidden" id="fname2" name="ID_PLACE" value=<?php echo $rows1["id1"]; ?>   >
                                                 <a dir="rtl" class="dropdown-item   mycolor" href="#">         تم اضافة مكان <span style="font-weight: bold;"><?php echo $rows1["mameplace"] ?> </span> من قبل العضو <span style="font-weight: bold;"><?php echo $rows1["nameperson"] ?> </span> <button type = "submit" class="myboldmuseaggred">قبول </button>   </a>
                                                  <div class="dropdown-divider"></div>
                                                  </form>
                                                  
                                                
                                            <?php 
                                            } //elseif ( $rows1["1"]=="2")

                                            elseif ( $rows1["1"]=="3")
                                            {
                                                //echo $rows1["1"]." ".$rows1["id1"]." " .$rows1["nameperson"]." " . $rows1["mameplace"]." ". $rows1["dataa"];
                                                ?>
                                                 <form class="border_from" action="12.php" method="post" >
                                                <a dir="rtl" class="dropdown-item   mycolor" href="#">         تم الموافقة على اضافة مكان  <span style="font-weight: bold;"><?php echo $rows1["mameplace"] ?>  </span> من قبل العضو <span style="font-weight: bold;"><?php echo $rows1["nameperson"] ?></span>  </a>
                                                          <div class="dropdown-divider"></div>
                                                          </form>
                                                          <?php
                                            }//   elseif ( $rows1["1"]=="3")  
                                            elseif ( $rows1["1"]=="4")
                                            {
                                              // echo $rows1["1"]." ".$rows1["id1"]." " .$rows1["nameperson"]." " . $rows1["mameplace"]." ". $rows1["dataa"];
                                                ?>
                                                 <form class="border_from" action="22.php" method="post" >
                                                 <input  type="hidden" id="fname2" name="admin" value=<?php echo $x1; ?>   >
                                                 <input  type="hidden" id="fname2" name="id_user" value=<?php echo $rows1["id1"]; ?>   >
                                                  <a dir="rtl" class="dropdown-item   mycolor" href="#">      <span style="font-weight: bold;"> <?php echo $rows1["nameperson"] ?> </span> طلب الانظمام الى الموقع <button class="myboldmuseaggred">قبول </button>  </a>
                                                 
                                                          <div class="dropdown-divider"></div>
                                                          </form>
                                                          <?php
                                            }//elseif ( $rows1["1"]=="4")
                                            elseif ( $rows1["1"]=="5")
                                            {
                                              // echo $rows1["1"]." ".$rows1["id1"]." " .$rows1["nameperson"]." " . $rows1["mameplace"]." ". $rows1["dataa"];
                                                ?>
                                                 <form class="border_from" action="12.php" method="post" >
                                                  <a dir="rtl" class="dropdown-item   mycolor" href="#">    تم ترقية العضو  <span style="font-weight: bold;"><?php echo $rows1["nameperson"] ?> </span> الى مدير   </a>
                                                     
                                                          <div class="dropdown-divider"></div>
                                                          </form>
                                                          <?php
                                            }//  elseif ( $rows1["1"]=="5")           
                                            } //while($rows1=mysqli_fetch_assoc($results1) and $counter<10 )
                                            }// if(mysqli_num_rows($results1)>0
  }// if ($x1<0)

  elseif($x1==0)
  {          
  $counter=0;
  $results1=mysqli_query($conns,$q3);
  if (mysqli_num_rows($results1)>0){
    while($rows1=mysqli_fetch_assoc($results1) and $counter<10 ){
      $counter=$counter+1;
                                               
                                           
                                              if ( $rows1["1"]=="3")
                                              {
                                                  //echo $rows1["1"]." ".$rows1["id1"]." " .$rows1["nameperson"]." " . $rows1["mameplace"]." ". $rows1["dataa"];
                                                  ?>
                                                   <form class="border_from" action="12.php" method="post" >
                                                  <a dir="rtl" class="dropdown-item   mycolor" href="#">         تم الموافقة على اضافة مكان  <span style="font-weight: bold;"><?php echo $rows1["mameplace"] ?>  </span> من قبل العضو <span style="font-weight: bold;"><?php echo $rows1["nameperson"] ?></span>  </a>
                                                         </form>
                                                            <div class="dropdown-divider"></div>
                                                            <?php
                                              }//   if ( $rows1["1"]=="3"            
                                              } //while($rows1=mysqli_fetch_assoc($results1) and $counter<10 )
                                              }// if(mysqli_num_rows($results1)>0

                                             
                                            
  }//elseif($x1=0)

   ?>  
        <a dir="rtl" class="dropdown-item   mycolor" href="11.php">لمزيد من الاشعارات   </a>
                                                     
                                                     <div class="dropdown-divider"></div>     
            
          </div>
       
        </li>

      <li class="nav-item" style="padding-left: 50px;">
        <a class="nav-link" href="10.php">انشاء مكان  </a>
      </li>

      
    </ul>
 
  </div>
</nav>
<br><br>


<?php
   }}

  
   ?>




