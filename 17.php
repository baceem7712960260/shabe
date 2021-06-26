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
                <p style="text-align: center;font-size:18px;color:#454d55;">اعضاء سجلو و معلقين</p>
                     <div>
                <table class="table  table-bordered table-responsive-md table-striped text-center" style="text-align: right;" >
                  <thead>
                    <tr >
                    <th scope="col" >اضافة </th>
                      <th scope="col" >تاريخ التسجيل</th>
                      <th scope="col">البريد الاكتروني</th>
                      <th scope="col">الاسم</th>
                      <th scope="col">التسلسل</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

<?php 

$q='SELECT user_reg.ID_USER as id ,user_reg.NAME as name , user_reg.EMAIL as email , LEFT(user_reg.MYDATE,10) as data FROM ura RIGHT join user_reg on ura.id_user=user_reg.id_user where isnull(ura.ID_USER)=1';

$results=mysqli_query($conns,$q);

if (mysqli_num_rows($results)>0)
{$counter=0;
 while($row=mysqli_fetch_assoc($results)){
   $counter=$counter+1;

?>
<form class="border_from" action="22.php"  method="post" >
                      <input type="hidden"  name="admin"  value=<?php echo $x1; ?>>
                      <input type="hidden"  name="id_user"  value=<?php echo $row["id"];   ?>>
                    <th scope="row"  > <button type="submit" class="btn btn-dark" style="font-size: 10px;"><i class="fas fa-user-plus"></i></button>  </th>
                    <td><?php echo $row["data"];   ?></td>
                      <td><?php echo $row["email"];   ?></td>
                      <td><?php echo $row["name"];   ?></td>
                      <td><?php echo $counter;   ?></td>
</form>
                    </tr>
                    


<?php 
 }}
?>




                  </tbody>
                </table>
            </div>



               

<?php 
 }
 ?>

  </div>
  
</div>

</form>
  </div>
  
</div>








<br><br>




<?php
include ('footer.php');
?>
<?php



mysqli_close($conns);
 
?>

  </body>

 
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
 