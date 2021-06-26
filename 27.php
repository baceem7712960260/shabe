<?php 
$id_pa=29;
include ('sub_header_active.php');
/*define("HOSTNAME","localhost");
define("HOST_USER","baceem");
define("HOST_PASS","baceem1991");
define("DB_NAME","alshab");*/
$conns=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conns,"set NAMES utf8");
$flag=TRUE;
$q=  "SELECT place_active.ID_PA as id_pa, place.ID_PLACE as id, place.NAME as name, description.MYDESCRIPTION as des, description.MYDATE FROM place_active INNER JOIN place on place_active.ID_PLACE=place.ID_PLACE INNER JOIN description on place_active.ID_PA=description.ID_PA INNER JOIN description_activ on description_activ.ID_DESC=description.ID_DESC WHERE place_active.ID_PA=$id_pa ORDER BY description.MYDATE DESC";            
 $results=mysqli_query($conns,$q);
 if (mysqli_num_rows($results)>0 )
 {
  while($row=mysqli_fetch_assoc($results ) and $flag){

    $flag=FALSE;
 
?>
<div style="justify-content: center;display: flex;padding-top: 10px;">
        <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img  src="dimg\<?php  echo $row["id"]; ?>.png"  class="card-img" alt="...">
                      </div>
                              <div class="col-md-8">
                                      <div class="card-body" >
                                        <h5 style="padding: 45px;" class="card-title"><?php  echo $row["name"]; ?> </h5>
                                      </div>
                              </div>
                    </div>
              </div>
      </div>
</div>


<hr>
<div  style="  text-align: right ;justify-content: center;display: flex; padding-bottom:10px">
      <textarea dir="rtl" style="text-align:justify; width:95% ; height:280px;  " >   <?php  echo $row["des"]; ?>    </textarea>
</div>





<br<br>
<form   action="23.php"  method="post" >
<input type="hidden"  name="id_ura"  value=<?php echo $row[""];  ?> >
<input type="hidden"  name="id_pa"  value=<?php echo $row["id_pa"];  ?> >
<button style="margin:50px " type="submit" class="btn btn-dark">تعديل </button>


</form>
<br><br>




  <?php   }} ?>






  <?php
include ('footer.php');
?>