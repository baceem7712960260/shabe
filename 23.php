<?php
define("HOSTNAME","localhost");
define("HOST_USER","baceem");
define("HOST_PASS","baceem1991");
define("DB_NAME","alshab");
$conns=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conns,"set NAMES utf8");
$ID_DESC= $_POST["id_user"];
$q=  "DELETE FROM user_reg WHERE ID_USER=$ID_DESC";           
$result=mysqli_query($conns,$q);
header("refresh:3;url=11.php");
?>
<br><br><br><br>
<p style="color:red;font-size: 30px;text-align: center;">تم حذف العضو بنجاح  </p>
