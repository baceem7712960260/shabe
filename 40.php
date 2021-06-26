<?php 
include ('sub_header_active.php');
if($_SERVER['REQUEST_METHOD']=="GET")
{
    
    $nameonly="0.png";
 
$id_place=$_GET["id_place"];
$myname=$_GET["placename"];
$namerep= str_replace("_"," ",$myname);


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
}
?>
         <div style="justify-content: center;display: flex;">    
                                <div >
                                  <img  src="<?php echo $my;  ?>" style=" height: 12rem; width: 17.9rem;" class="card-img" alt="...">
                                </div>
                                      <div style="    padding: 45px; width: 300px;height: 2px;text-align: center; font-size: 20px;"  >
                                        <?php echo $namerep; ?>
                                      </div>        
                                    
          </div>
          
          

    

          <br><br><br><br><br><br><br><br><br><br><br>

          <?php

include ('footer.php');
?>