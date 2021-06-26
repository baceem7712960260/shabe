<?php
include ('sub_header_active.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
 
    $nameonly="0.png";
$id_place=$_GET["placeidplace"];
$mydescr=$_GET["iddesc"];
$myname=$_GET["placename"];
$namerep= str_replace("_"," ",$myname);
$connr=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($connr,"set NAMES utf8");
$q='SELECT MYDESCRIPTION as desc1 FROM description WHERE ID_DESC='.$mydescr;
$results=mysqli_query($connr,$q);
if(mysqli_num_rows($results)>0)
{
 while($row=mysqli_fetch_assoc($results))
 {

  $desc=$row["desc1"];

 }
}


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
$my=strstr($myimage,"place",false);

  $ppcture ="place\\".$myimage;


?>
         <div style="justify-content: center;display: flex;">    
                                <div >
                                  <img  src="<?php echo $my;  ?>" style=" height: 12rem; width: 17.9rem;" class="card-img" alt="...">
                                </div>
                                      <div style="    padding: 45px; width: 300px;height: 2px;text-align: center; font-size: 20px;"  >
                                        <?php echo $namerep; ?>
                                      </div>        
                                    
          </div>
          
          </div>
          <br>
          <br>

          <hr>
        <div  style="  text-align: right ;justify-content: center;display: flex; padding-bottom:10px">
             <textarea  name="desc" type="text"  style="text-align:right; width:95%;height:200px" readonly>  <?php echo $desc; ?></textarea > 
        </div>           

<br>
<br>

    

          <br><br><br><br><br><br><br><br><br><br><br>

          <?php
include ('footer.php');
}
?>

