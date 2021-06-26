<?php


$descp=$_POST["desc"];
$id_pa=$_POST["id_pa"];
$myid_ura=$_POST["myid_ura"];
define("HOSTNAME","localhost");
define("HOST_USER","baceem");
define("HOST_PASS","baceem1991");
define("DB_NAME","alshab");
$conns=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conns,"set NAMES utf8");
$q="INSERT INTO description( ID_PA, ID_URA, MYDESCRIPTION ) VALUES ( $id_pa ,$myid_ura  , \" $descp\"  )"; 
$results=mysqli_query($conns,$q);
header("refresh:3;url=11.php");
?>
<br><br><br><br>
<p style="color:green;font-size: 30px;text-align: center;">تم انشاء التعديل على المكان بنجاح </p>