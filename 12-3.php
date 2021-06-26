<?php  

include ('header_active.php');

?>

              <div class="col-md-8 col-sm-12" >
               <form class=" table-responsive " style="border-style: dotted;">
              <p style="text-align: center;font-size:18px;color:#454d55;">اماكن تم انشائها و معلقة</p>
                   <div  >
                    
                <table class="table  table-bordered table-responsive-md table-striped text-center" style="text-align: right;" >
                  <thead>

                  <tr >
                      
                      <th scope="col">تاريخ انشاء المكان</th>
                      <th scope="col">اسم المكان</th>
                      <th scope="col">التسلسل</th>
                    </tr>
                  <?php 

$q='SELECT place.ID_PLACE as id , place.NAME as pn ,place.MYDATA as pdata FROM `place` LEFT JOIN place_active on place_active.ID_PLACE=place.ID_PLACE WHERE ISNULL(place_active.ID_PA)=1 AND place.ID_URA='.$myid_ura;

$results=mysqli_query($conns,$q);

if (mysqli_num_rows($results)>0)
{$counter=0;
 while($row=mysqli_fetch_assoc($results)){
   $counter=$counter+1;

?>

<?php
$numbdrplace=$row["id"];
$name=$row['pn'];
$namerep= str_replace(" ","_",$name);
$path="40.php?id_place=$numbdrplace&placename=$namerep";
 
?>

                      
                    <th scope="row"  > <?php echo $row["pdata"];   ?></th>
                   
                      <td ><?php echo "<a style=\"color:#343a40\"  href=$path>".$name." <//a>";   ?></td>
                      <td><?php echo $counter;   ?></td>
                    </tr>
                    


<?php 
 }}
?>


                    
                  </thead>
               
                </table>
            </div>


               

  </div>
</form>
  </div>
  </div>









<br><br>



<?php
include ('footer.php');
?>

  
    <script  > 
    function vis()
    {
     
      document.getElementById("p1").style.visibility="hidden";
      document.getElementById("p2").style.visibility="visible";
      document.getElementById("p3").style.visibility="visible";
      document.getElementById("p4").style.visibility="visible";
      document.getElementById("p5").style.visibility="visible";
     

    }
    </script>
 
