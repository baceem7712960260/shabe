<?php  

include ('header_active.php');

?>


              <div class="col-md-8 col-sm-12" style="" >
               <form class=" table-responsive " style="border-style: dotted;">
                <p style="text-align: center;font-size:18px;color:#454d55;">اماكن تم انشائها و تم الموافقة عليها</p>
                     <div >
                <table class="table  table-bordered table-responsive-md table-striped text-center" style="text-align: right;" >
                  <thead>
                    <tr >
                      <th scope="col" >المدير الموافق</th>
                      <th scope="col">تاريخ انشاء المكان</th>
                      <th scope="col">اسم المكان</th>
                      <th scope="col">ت</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

<?php 

//$q='SELECT place.NAME AS pn , place_active.MYDATE as pam , r.NAME as rn , user_reg.NAME as admins FROM place_active INNER JOIN place on place_active.ID_PLACE=place.ID_PLACE JOIN ura on place.ID_URA=ura.ID_URA JOIN admin on place_active.ID_ADMIN=admin.ID_ADMIN JOIN user_reg on admin.ID_USER=user_reg.ID_USER JOIN user_reg r on r.ID_USER=ura.ID_URA and r.NAME="zahra"';
$q='SELECT place.ID_PLACE as idp , place.NAME as pname , place_active.MYDATE pad , user_reg.NAME as username FROM `place` INNER JOIN place_active on place_active.ID_PLACE=place.ID_PLACE INNER JOIN admin on admin.ID_ADMIN=place_active.ID_ADMIN INNER JOIN user_reg on user_reg.ID_USER=admin.ID_USER WHERE place.ID_URA='.$myid_ura;

$results1=mysqli_query($conns,$q);

if (mysqli_num_rows($results1)>0)
{$counter=0;
 while($row=mysqli_fetch_assoc($results1)){
   $counter=$counter+1;

?>
     <?php
$numbdrplace=$row["idp"];
$path="30.php?id_place=$numbdrplace";
?>

                    <th scope="row"  > <?php echo $row["username"];   ?></th>
                      <td><?php echo $row["pad"];   ?></td>
                 
                      <td ><?php echo "<a style=\"color:#343a40\"  href=$path>".$row['pname']." <//a>";   ?></td>
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
               


  </div>
  
</div>









<br><br>




<?php
include ('footer.php');
?>
<?php



mysqli_close($conns);
 
?>

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/fontawesome.min.js" ></script>
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
 
