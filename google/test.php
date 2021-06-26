<?php

//index.php

//Include Configuration File
include('configtest.php');
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
    echo '<img src='. $picture.' />';
    echo "<br>". $picture."<br>";
echo  $given_name."<br>". $family_name."<br>".$email."<br>";
echo "<a href=". $google_client->createAuthUrl(). ">logen<//a>";
?>
 </body>
</html>
