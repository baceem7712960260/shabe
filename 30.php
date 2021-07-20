<?php 
include ('sub_header_active.php');
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
   
   $total=pathinfo(__DIR__.'/place//'.$nameonly);
$myimage=$total["filename"].".".$total["extension"];

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
                                  <img  src="place\\<?php echo $myimage;  ?>" style=" height: 12rem; width: 17.9rem;" class="card-img" alt="...">
                               
                                      <div style="    padding: 45px; width: 300px;height: 2px;text-align: center; font-size: 20px;"  >
                                        <?php echo $myname; ?>
                                      </div>    
                               </div>   
                                    
          </div>
          <br>
          <br>

          <hr>

          <?php

$myname1=str_replace(" ","_",$myname) ;

?>
        <div  style="  text-align: right ;justify-content: center;display: flex; padding-bottom:10px">
             <textarea  name="desc" type="text"  style="text-align:right; width:95%;height:200px" readonly>  <?php echo $mydescr; ?></textarea > 
        </div>           

<br>
<br>
           <div style="padding: 20px;" >   <a href=<?php echo "31.php?idap=$idap&myiddesc=$myiddesc&id_place=$id_place&myimage=$myimage&myname=$myname1"; ?> >  <div typt="file"   class="btn btn-outline-dark">تعديل</div></a></div>


<div style="padding: 20px;" >   <a href=<?php echo "8.php?place=$place"; ?> >  <div typt="file"   class="btn btn-outline-dark">رجوع</div></a></div>
<br>
 </div>  
<?php
include ('footer.php');
?>
