<?php 
session_start();

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
$cars = array();

$conns=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conns,"set NAMES utf8");
$counter=0;
$place=trim($_GET["place"]);

$q="SELECT place.ID_PLACE, place.NAME , GROUP_CONCAT(description.MYDESCRIPTION ORDER by description_activ.ID_DESC DESC SEPARATOR '@') as descr FROM place INNER JOIN place_active on place_active.ID_PLACE=place.ID_PLACE LEFT JOIN description on place_active.ID_PA=description.ID_PA LEFT JOIN description_activ on description.ID_DESC=description_activ.ID_DESC WHERE place.NAME LIKE '%$place%' GROUP by place_active.ID_PA";

$result=mysqli_query($conns,$q);

if (mysqli_num_rows($result)>0)
{
  
 while($row=mysqli_fetch_assoc($result)){
   $counter=$counter+1;

       $cars[0][$counter]=$row["ID_PLACE"];
       $cars[1][$counter]=$row["NAME"];
      
      if(strstr($row["descr"],"@",true))
            {
            $cars[2][$counter]=substr( strstr($row["descr"],"@",true),0,80)."...."."<span style='color:#343a40 '>ت</span>";
            }else
            {
              $cars[2][$counter]=substr($row["descr"],0,80)."...."."<span style='color:#343a40 '>ت</span>";
            }
      }}
    
?>
<link rel="stylesheet" href="css\mycss1.css" >
<?php 
 $kay=0;

$total=$counter;
$mymod=$total % 3;
$mymulty=$total-$mymod;
$mydiv=$mymulty/3;

// ______________________________________________________33333_______________________________________________________________________-->

for( $j=0; $j<$mydiv ; $j++)
{
?>
<div class="container">
      <div class=" row no-gutters  ">
        <?php
        for($k=1;$k<=3;$k++)
         { $kay=(3 * $j) +$k;
           ?>
                  <div class="col-sm-12 col-md-4" style="padding:10px ; justify-content: center;display: flex;">
                  <a href="https://shabee.ga/6.php?id_place=<?php echo $cars[0][$kay];    ?>&p=<?  echo $place; ?>">
                     <div class=" card" style="width: 18rem;background-color:#343a40;">
                     
                                       <img src="<?php echo searching($cars[0][$kay]); ?>" class=" card-img-top " style=" height: 12rem; width: 17.9rem;"  alt="www.nnn.com">
                                      
                                      
                                          <div class="card-body">
                                            <h5 class="card-title " style =" color:white;text-align: right;" ><?php echo $cars[1][$kay]  ; ?> </h5>
                                            <p class="card-text " style =" color:white;text-align: right; height:50px;"><?php echo $cars [2][$kay]; ?></p>
                                            
                                          </div>
                                    </div>
                                    </a>
                     </div> 
         <?php } ?>                                   
        </div>
    </div>
<?php
}
?>
<?php
  if ($mymod ==2)
{
  ?>
<!-- ______________________________________________________22222_______________________________________________________________________-->

  <div class="container"  >
  <div class=" row no-gutters  " >
  <div class="col-sm-12 col-md-4" style="padding:10px ; justify-content: center;display: flex;">
</div>
<div class="col-sm-12 col-md-4" style="padding:10px ; justify-content: center;display: flex;">
                  <a href="https://shabee.ga/6.php?id_place=<?php echo $cars[0][$kay+1];    ?>&p=<?  echo $place; ?>">
                     <div class=" card" style="width: 18rem;background-color:#343a40;">
                     
                                     <img src="<?php echo searching($cars[0][$kay+1]); ?>"   class=" card-img-top " style=" height: 12rem; width: 17.9rem;"  alt="www.nnn.com">
                                      
                                      
                                          <div class="card-body">
                                        <h5 class="card-title " style =" color:white;text-align: right;" ><?php echo $cars[1][$kay+1];   ?></h5>
                                        <p class="card-text " style =" color:white;text-align: right; height:50px;"><?php echo $cars[2][$kay+1]; ?></p>  
                                      </div>
                                </div>
                 </div>                                    
                 <div class="col-sm-12 col-md-4" style="padding:10px ; justify-content: center;display: flex;  ">
                 <a href="https://shabee.ga/6.php?id_place=<?php echo $cars[0][$kay+2];    ?>&p=<?  echo $place; ?>">
                     <div class=" card" style="width: 18rem;background-color:#343a40;">
                     
                                     <img src="<?php echo searching($cars[0][$kay+2]); ?>"  class=" card-img-top " style=" height: 12rem; width: 17.9rem;"  alt="www.nnn.com">
                                      
                                      
                                          <div class="card-body">
                                        <h5 class="card-title " style =" color:white;text-align: right;"><?php   echo $cars[1][$kay+2];   ?></h5>
                                        <p class="card-text " style =" color:white;text-align: right; height:50px;"><?php echo $cars[2][$kay+2]; ?></p>
                                        
                                      </div>
                                </div>
                </div>
   </div>
</div>

<?php

}elseif( $mymod  ==1)
{



?>
<!-- ______________________________________________________1111111_______________________________________________________________________-->


<div class="container"  >
      <div class=" row no-gutters  " >
      <div class="col-sm-12 col-md-4" style="padding:10px ; justify-content: center;display: flex;">
      </div>
     <div class="col-sm-12 col-md-4" style="padding:10px ; justify-content: center;display: flex;">    
     </div>                                    
                     <div class="col-sm-12 col-md-4" style="padding:10px ; justify-content: center;display: flex;  ">
                     <a href="https://shabee.ga/6.php?id_place=<?php echo $cars[0][$kay+1];    ?>&p=<?  echo $place; ?>">
                     <div class=" card" style="width: 18rem;background-color:#343a40;">
                     
                                  <img src="<?php echo searching($cars[0][$kay+1]); ?>"     class=" card-img-top " style=" height: 12rem; width: 17.9rem;"  alt="www.bb.com">
                                      
                                      
                                          <div class="card-body">
                                            <h5 class="card-title " style =" color:white;text-align: right;"><?php   echo $cars[1][$kay+1];   ?></h5>
                                            <p class="card-text " style =" color:white;text-align: right; height:50px;"><?php echo $cars[2][$kay+1];  ?></p>                              
                                          </div>
                                    </div>
                                    </a>
                    </div>
        </div>
    </div>
<?php
}elseif( $counter  ==0)
{
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

}


?>

<div>

</div>



 <script>
  
 
</script>

<br<br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br>
       
<br><br>

<?php

include ('footer.php');


function searching($id_place)
{

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
$myimage=$total["filename"].".".$total["extension"];
/*echo $total["dirname"]."<br>";
echo $total["basename"]."<br>";
echo $total["extension"]."<br>";
echo $total["filename"]."<br>";*/
$myimage ="place\\".$id_place.".".$total["extension"];
    return $myimage;

}

  $subEnding=strstr("123dfasdfasdf4.567",".",false);

 
  $xx2= strlen($subEnding);
  

?>