<?php  
include ('header_active.php');
 if($x1==0)
    { 
    
echo '<br> <br> <br> <br> <br> <br> <br><p style="color:red;font-size: 30px;text-align: center;"> غير مسموح لك بالدخول</p>  <br> <br> <br> <br> <br> <br> <br> <br> <br>';
   


         
    }
    elseif ($x1>0)
    {
?>

              <div class="col-md-8 col-sm-12" > 
               <form class=" table-responsive " style="border-style: dotted;">
              <div >
               <p style="text-align: center;font-size:18px;color:#454d55;">اماكن تم تعديلها و معلقة</p>
                <table class="table  table-bordered table-responsive-md table-striped text-center" style="text-align: right;" >
                  <thead>
                    <tr >
                      <th scope="col" >الموافقة</th>
                      <th scope="col" >تاريخ التعديل</th>
                      <th scope="col" >المستخدم</th>
                      <th scope="col">التعديل</th>
                      <th scope="col">اسم المكان </th>
                      <th scope="col">ت</th>
                    </tr>
                    </thead>
                  <tbody>
                   
                  <?php 

$q='SELECT description.ID_DESC as id , place.ID_PLACE as placeidplace, place.NAME as placename , LEFT(description.MYDESCRIPTION,20) as descr, user_reg.NAME as username , LEFT(description.MYDATE,10) as data FROM description_activ RIGHT JOIN description on description.ID_DESC= description_activ.ID_DESC INNER JOIN place_active on description.ID_PA=place_active.ID_PA INNER JOIN place on place_active.ID_PLACE=place.ID_PLACE INNER JOIN ura on ura.ID_URA=description.ID_URA INNER JOIN user_reg on user_reg.ID_USER=ura.ID_USER where isnull(description_activ.ID_DES_ACTIV)=1';

$results=mysqli_query($conns,$q);

if (mysqli_num_rows($results)>0)
{$counter=0;
 while($row=mysqli_fetch_assoc($results)){
   $counter=$counter+1;


   
?>
                     <form  action="29.php" method="post" > 
                    <th scope="row"  > <button type="submit" class="btn btn-dark" ><i class="fas fa-plus"></i></button> </th>
                    <input type="hidden"  name="ID_DESC"  value=<?php echo $row["id"];  ?> >
                    <input type="hidden"  name="admin"  value=<?php echo $x1;  ?> >
                    </form>
                    <td><?php echo $row["data"];   ?></td>
                      <td><?php echo $row["username"];   ?></td>
                      <?php
$iddesc=$row["id"];
$placename=$row["placename"];
$placeidplace=$row["placeidplace"];

$namerep= str_replace(" ","_",$placename);
$path="41.php?placeidplace=$placeidplace&iddesc=$iddesc&placename=$namerep";
?>


                      <td ><?php echo "<a style=\"color:#343a40\"  href=$path>".$row['descr']." <//a>";   ?></td>

    

                      <td><?php echo $row["placename"];   ?></td>
                      <td><?php echo $counter;   ?></td>
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
