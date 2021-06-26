<?php  

include ('header_active.php');
 if($x1==0)
    { 
    
echo '<br> <br> <br> <br> <br> <br> <br><p style="color:red;font-size: 30px;text-align: center;"> غير مسموح لك بالدخول</p>  <br> <br> <br> <br> <br> <br> <br> <br> <br>';
   


         
    }
    elseif ($x1>0)
    {
?>

              <div class="col-md-8 col-sm-12"  >
              <form class=" table-responsive " style="border-style: dotted;">
                <p style="text-align: center;font-size:18px;color:#454d55;">اعضاء تم الموافقة عليهم</p>
                <div class="">
                <table class="table  table-bordered table-responsive-md table-striped text-center" style="text-align: right;" >
                  <thead>
                    <tr >
                    <th scope="col" >تحويل</th>
                      <th scope="col" >حذف</th>
                      <th scope="col" >تاريخ التسجيل</th>
                      <th scope="col" >الصفة</th>
                  
                      <th scope="col">البريد الاكتروني</th>
                      <th scope="col">الاسم </th>
                         <th scope="col">الصورة الشخصية </th>
                      <th scope="col">التسلسل</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

$q='SELECT user_reg.ID_USER as id , user_reg.NAME as usname , user_reg.EMAIL as usemail  , user_reg.IMAG as img , if(admin.ID_ADMIN != "NULL" , "admin", "user") as typ, LEFT(user_reg.MYDATE,10) as usdata FROM `user_reg` JOIN ura on user_reg.ID_USER=ura.ID_USER LEFT JOIN admin on admin.ID_USER=user_reg.ID_USER';

$results=mysqli_query($conns,$q);

if (mysqli_num_rows($results)>0)
{$counter=0;
 while($row=mysqli_fetch_assoc($results)){
   $counter=$counter+1;

?> 


<?php
if($row["typ"]=="user"){
 $value1=$row["id"];
                 echo" <td>"; 
                 echo"  <form  action=\"24.php\"  method=\"post\" >";
                 echo"    <input type=\"hidden\"  name=\"id_user\"  value= \" $value1 \"  >";
                 echo"      <button type=\"submit\" class=\"btn btn-dark\" style=\"font-size: 8px;\"><i class=\"fas fa-share\"></i></button>";
                 echo"  </form>";
                 echo"  </td>";
       
}else{

  echo" <td>"; 

  echo"  </td>";
}

?>
<form   action="23.php"  method="post" >
                      

                    <th scope="row"  > <button type="submit" class="btn btn-danger" style="font-size: 8px;"><i class="fas fa-user-times"></i></button></th> 
                    <td><?php echo $row["usdata"];   ?></td>
                    <td><?php echo $row["typ"];   ?></td>
                    <input type="hidden"  name="id_user"  value=<?php echo $row["id"];  ?> >
</form>


                      <td><?php echo $row["usemail"];   ?></td>
                      <td><?php echo $row["usname"];   ?></td>

                     

<?php
$iduser= $row["id"]; 
//echo $iduser."<br>";
 



$arrayfile1=scandir(__DIR__.'/prs_img');
if(isset($row["img"]))
{
  //echo $row["img"];
  $imag_picture1= $row["img"];
}
else 
{
 
  $imag_picture1= "prs_img\\0.png";
}



    foreach($arrayfile1 as $f1)
    {
      
            if (4<strlen($f1))
            {
            $subEnding1=substr($f1,0,-4);
                    if ($subEnding1==$iduser)
                    {
                        $imag_picture1= "prs_img\\".$f1;
                     
                       
                    }

            }
   }

?>
                      <td> <div href="11.php"> <img src=<?php  echo $imag_picture1;  ?> height="50px" px width="50px"  class="rounded-circle"></div></td>
                      <td><?php echo $counter;   ?></td>
                    </tr>
                    


<?php 
 }}
 ?>
                
                  </tbody>
                </table>
            </div>
            </form>
     </div>


               
<?php 
 }
 ?>

  </div>
  
</div>









<br><br>

<?php
include ('footer.php');
?>

  
  
