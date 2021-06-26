<?php
define("HOSTNAME","localhost");
define("HOST_USER","baceem");
define("HOST_PASS","baceem1991");
define("DB_NAME","alshab");
$conns=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conns,"set NAMES utf8");
$ID_USER= $_POST["id_user"];
$q=  "INSERT INTO admin(ID_USER) VALUES ($ID_USER)";   
echo $q;         
$result=mysqli_query($conns,$q);
 header('Location: 11.php');
//exite();


?>