
<?php  

include ('header_active.php');
 if($x1==0)
    { 
    
echo '<br> <br> <br> <br> <br> <br> <br><p style="color:red;font-size: 30px;text-align: center;"> غير مسموح لك بالدخول</p>  <br> <br> <br> <br> <br> <br> <br> <br> <br>';
   


         
    }
    elseif ($x1>0)
    {
?>
              <div class="col-md-8 col-sm-12">
               <form class=" table-responsive " style="border-style: dotted;">
                <p style="text-align: center;font-size:18px;color:#454d55;">اماكن تم الموافقة عليها</p>
                     <div >
                <table class="table  table-bordered table-responsive-md table-striped text-center" style="text-align: right;" >
                  <thead>
                    <tr >
                      <th scope="col"  >حذف</th>
                      
                      <th scope="col" >تاريخ الانشاء</th>
                      <th scope="col">منشيء المكان </th>
                      <th scope="col"> اسم المكان </th>
                      <th scope="col">ت</th>
                    </tr>
                  </thead>
                  <tbody>
      <style>
      
    }
    .tabf{

      color:white;
    }
    </style>



                             
 <?php 



  
$q='SELECT place.ID_PLACE as idp  ,place.NAME as pn, user_reg.NAME as urn , LEFT(place_active.MYDATE,10) as pam FROM place JOIN place_active on place_active.ID_PLACE=place.ID_PLACE JOIN ura on ura.ID_URA=place.ID_URA JOIN user_reg on user_reg.ID_USER=ura.ID_USER';
$results=mysqli_query($conns,$q);

if (mysqli_num_rows($results)>0)
{$counter=0;
 while($row=mysqli_fetch_assoc($results)){
   $counter=$counter+1;

   
?>
 <a href="3.php"><tr>
 <form   action="25.php"  method="post" >
<th scope="row"  > <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button></th>
<input type="hidden"  name="ID_PLACE"  value=<?php echo $row["idp"];  ?> >
</form> 
<?php
$numbdrplace=$row["idp"];
$path="30.php?id_place=$numbdrplace";
?>
                    <td><?php echo $row["pam"];   ?></td>
                    <td><?php echo $row["urn"];   ?></td>
              
                    <td ><?php echo "<a style=\"color:#343a40\"  href=$path>".$row['pn']." <//a>";   ?></td>
                      <td><?php echo $counter;   ?></td>
                    </tr>
                    </a>
                    
<?php 
 }}
 ?>
                
                  </tbody>
                </table>
            </div>


</div>

               </form>


<?php 
 }
 ?>

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
 
