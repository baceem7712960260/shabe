<?php

//index.php

//Include Configuration File
include('config.php');
$login_button = '';
if(isset($_GET["code"]))
{
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);
if(!isset($token['error']))
 {
  $google_client->setAccessToken($token['access_token']);
  $_SESSION['access_token'] = $token['access_token'];
  $google_service = new Google_Service_Oauth2($google_client);
  $data = $google_service->userinfo->get();
  if(!empty($data['given_name']))
  {
    $given_name= $data['given_name'];
  }
  if(!empty($data['family_name']))
  {
   $family_name=$data['family_name'];
  }
  if(!empty($data['email']))
  {
   $email= $data['email'];
  }
  if(!empty($data['gender']))
  {
    $gender= $data['gender'];
  }
  if(!empty($data['picture']))
  {
    $picture= $data['picture'];
  }
 }
}
if(!isset($_SESSION['access_token']))
{
}
?>
<html>
 <body>
   <?php
   


$conn=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase"); 
$q2=  "SELECT  EMAIL as em FROM user_reg WHERE EMAIL="."\"$email\"";
$q3="INSERT INTO user_reg(NAME, EMAIL, MYPASSWORD,IMAG) VALUES (\"$given_name. $family_name\",\"$email\",1, \" $picture\" )";
 


$result=mysqli_query($conn,$q2);
   $row=mysqli_fetch_assoc($result);

        if (!isset($row["em"]))
        {

$result3=mysqli_query($conn,$q3);
echo "<br><br><br><br>";
echo "<p style=\"color:green;font-size: 30px;text-align: center;\">تم التسجيل  <//p>";
header("refresh:10;url=../3.php");
}
else
{
    echo "<br><br><br><br>";
    echo "<p style=\"color:red;font-size: 30px;text-align: center;\">الحساب موجود سابقا  <//p>";
    header("refresh:10;url=../4.php");
}
 

 ?>
 </body>
</html>
