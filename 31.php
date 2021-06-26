<?php 
include ('sub_header_active.php');
$descr1="";
$myiddesc="";
$id_place=$_GET["id_place"];
$myimage=$_GET["myimage"];
$myname=$_GET["myname"];
$idap=$_GET["idap"];
if(isset($_GET["myiddesc"]))
$myiddesc=$_GET["myiddesc"];


$myname1=str_replace("_"," ",$myname) ;



{ 

if (strlen($myiddesc)>0)
{

$conn1=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conn1,"set NAMES utf8");
$q="SELECT   description.MYDESCRIPTION as descr FROM description WHERE description.ID_DESC=$myiddesc";
           
              $results=mysqli_query($conn1,$q);
              
              if(mysqli_num_rows($results)>0)
              {
               while($row=mysqli_fetch_assoc($results)){
              
                $descr1=$row["descr"];
           
               }
              }
            }
          }
?>
         <div style="justify-content: center;display: flex;">
      
                                <div >
                                  <img  src="place\\<?php echo $myimage;  ?>" style=" height: 12rem; width: 17.9rem;" class="card-img" alt="...">
                                </div>                             
                                      <div style="    padding: 45px; width: 300px;height: 2px;text-align: center; font-size: 20px;"  >
                                        <?php echo $myname1; ?>
                                      </div>        
          </div>
          <hr>
<form  action="32.php" method="post" name="myForm" >
        <div style="  text-align: right ;justify-content: center;display: flex; padding-bottom:10px">
                <textarea  name="desc" type="text"  style="text-align:right; width:95%;height:200px" > <?php echo $descr1; ?></textarea>
        </div> 
        <input type="hidden" name ="id_pa" value=<?php   echo $idap; ?>>
<input type="hidden" name ="myid_ura" value=<?php   echo $myid_ura; ?>>
        <div style="padding: 100px;" ><button type="submit"   class="btn btn-outline-dark">حفظ</button></div>
</form>




<?php
include ('footer.php');
?>
