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
  <p style="text-align: center;font-size:18px;color:#454d55;">اماكن تم تسجيلها و معلقة</p>
  <div>
                <table class="table  table-bordered table-responsive-md table-striped text-center" style="text-align: right;" >
                  <thead>
                    <tr >
                    <th scope="col" >موافقة</th>
                      <th scope="col" >زمن الاضافة</th>
                      <th scope="col"> انشاء بواسطة</th>
                      <th scope="col">اسم المكان</th>
                      <th scope="col">ت</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

<?php 

$q='SELECT place.ID_PLACE AS id , place.NAME as myplace , user_reg.NAME as nameuser, LEFT(place.MYDATA,10) as data FROM place_active RIGHT join place on place.ID_PLACE =place_active.ID_PLACE INNER JOIN ura on place.ID_URA=ura.ID_URA INNER JOIN user_reg ON user_reg.ID_USER=ura.ID_USER where isnull(place_active.ID_PA)=1';

$results=mysqli_query($conns,$q);

if (mysqli_num_rows($results)>0)
{$counter=0;
 while($row=mysqli_fetch_assoc($results)){
   $counter=$counter+1;

?>
                      <form  action="21.php"  method="post" >
                      <input type="hidden"  name="admin"  value=<?php echo $x1; ?>>
                      <input type="hidden"  name="ID_PLACE"  value=<?php echo $row["id"];   ?>>
                    <th scope="row"  >  <button type="submit" class="btn btn-dark" style="font-size: 8px;"><i class="fas fa-plus"></i></button> </th>
                    <td><?php echo $row["data"];   ?></td>
                    <?php
$numbdrplace=$row["id"];
$name=$row['myplace'];
$namerep= str_replace(" ","_",$name);

$path="46.php?id_place=$numbdrplace&placename=$namerep";
 
?>

                   
                   
                    <td><?php echo $row["nameuser"];   ?></td>
                    <td ><?php echo "<a style=\"color:#343a40\"  href=$path>".$name." <//a>";   ?></td>
                      <td><?php echo $counter;   ?></td>
                      </form>
                    </tr>
                    


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
<?php



mysqli_close($conns);
 
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
