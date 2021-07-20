<?php 
session_start();
 
$conns=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conns,"set NAMES utf8");
?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css" >
     <link rel="stylesheet" href="css\all.css" >
     <link rel="stylesheet" href="css\mycss2.css" >
     <link rel="stylesheet" href="css\mycss1.css" >
    <title>Hello, world!</title>
  </head>


  <body >

      

 





<nav class="navbar navbar-expand-lg navbar-dark bg-dark main" style=" margin-right: 0; margin-left: 0 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="7-1.php">اهلنا الشعب</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="4.php">انشاء حساب  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="3.php"> تسجيل الدخول</a>
      </li>
     
    </ul>
 
  </div>
</nav>
<br><br><br><br>

 

<?php 

if($_SERVER['REQUEST_METHOD']=="GET")
{


$id_place=$_GET["id_place"];
$place=$_GET["p"];

$arrayfile=scandir(__DIR__.'/place//');
  
    foreach($arrayfile as $f)
    {
            if (4<strlen($f))
            {
            $subEnding=substr($f,0,-4);
         
                    if ($subEnding==$id_place)
                    {
                       $nameonly=$f;
                    
                       
                    }
            }
   }
   
   $total=pathinfo(__DIR__.'\place\\'.$nameonly);
$myimage="/place//".$total["filename"].".".$total["extension"];

               $q='SELECT max(description.ID_DESC) as iddese,  place.ID_PLACE as g, place.NAME as placename, GROUP_CONCAT(description.MYDESCRIPTION ORDER by description_activ.ID_DESC DESC SEPARATOR "@") as h FROM place INNER JOIN place_active on place.ID_PLACE=place_active.ID_PLACE INNER JOIN description on description.ID_PA=place_active.ID_PA INNER JOIN description_activ on description_activ.ID_DESC=description.ID_DESC WHERE place.ID_PLACE='.$id_place;
              $results=mysqli_query($conns,$q);
              if(mysqli_num_rows($results)>0)
              {
               while($row=mysqli_fetch_assoc($results)){
              
                $myname=$row["placename"];
                $t=$row["h"];
                if(strpos($t,"@"))
                {  
                $mydescr=  strstr($t,"@",true);
                }
                else
                {
                  $mydescr=$t;
                }
              $myiddesc=$row["iddese"];
}}}
  
$q1="SELECT place_active.ID_PA as idap FROM `place` INNER JOIN place_active on place_active.ID_PLACE=place.ID_PLACE WHERE place.ID_PLACE=$id_place";
$results1=mysqli_query($conns,$q1);

if(mysqli_num_rows($results1)>0)
{
 while($row=mysqli_fetch_assoc($results1)){
  $idap=$row["idap"];
 }}


?>

<div class="container">
         <div style="justify-content: center;display: flex;">   
                                <div >
                                  <img  src="place\\<?php echo $nameonly;  ?>" style=" height: 12rem; width: 17.9rem;" class="card-img" alt="...">
                               
                                      <div style="    padding: 45px; width: 300px;height: 2px;text-align: center; font-size: 20px;"  >
                                        <?php echo $myname; ?>
                                      </div>    
                               </div>   
                                    
          </div>
          <br>
          <br>

          <hr>
        <div  style="  text-align: right ;justify-content: center;display: flex; padding-bottom:10px">
             <textarea  name="desc" type="text"  style="text-align:right; width:95%;height:200px" readonly>  <?php echo $mydescr; ?></textarea > 
        </div>           

<br>
<div style="padding: 20px;" >   <a href=<?php echo "5.php?place=$place"; ?> >  <div typt="file"   class="btn btn-outline-dark">رجوع</div></a></div>
<br>
         
</div>
<?php
include ('footer.php');
?>
