<?php  
 $PldPassword=TRIM($_POST["passold"]);
 $NewPassword=TRIM($_POST["reppassold"]);
 $RepNewPass=TRIM($_POST["newpass"]);
 $emailname=TRIM($_POST["emailname"]);
    $conn=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
    mysqli_query($conn,"set NAMES utf8");
$q=  "SELECT ID_USER, EMAIL , MYPASSWORD FROM user_reg WHERE EMAIL="."\""   .  $emailname     .  "\"";
$result=mysqli_query($conn,$q);
   $row=mysqli_fetch_assoc($result);
   $oldpassinDB= $row["MYPASSWORD"];
   $oldepassword= sha1($PldPassword);
   $id= $row["ID_USER"];
   ;
 ?>
<?php
    if ($NewPassword==$RepNewPass  and $RepNewPass =!""  and   $oldepassword==$oldpassinDB)
  {
      $NewPassword_increption=sha1($NewPassword);
      $conn=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
      mysqli_query($conn,"set NAMES utf8");
      $q2="UPDATE user_reg SET MYPASSWORD="  ."\"". $NewPassword_increption  .   "\"" . "WHERE ID_USER="       .        "\""  .  $id . "\"";
      $result=mysqli_query($conn,$q2);
      header("refresh:10;url=3.php");
      echo ' <br><br><br><br> <p style="color:green;font-size: 30px;text-align: center;">تم التغيير بنجاح   </p>';
  }  
   else 
  {
    header("refresh:10;url=3.php");
   echo ' <br><br><br><br> <p style="color:red;font-size: 30px;text-align: center;">الرقم السري خطء  </p>';
  }
?>
