<?php

//index.php

//Include Configuration File
include('config43.php');
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
  /*  echo '<img src="'. $picture.'" class="img-responsive img-circle img-thumbnail" />';
echo $given_name. $family_name.$email."<br>";
echo $picture;


*/




   $conn=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase"); 
   $q1="SELECT ID_USER , EMAIL , IMAG FROM user_reg WHERE EMAIL=\""."$email"."\"";
   $result=mysqli_query($conn,$q1);
   $row=mysqli_fetch_assoc($result);
if (isset($row["EMAIL"]))
{

      
             $conn1=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
              $q0="SELECT ID_USER , ID_URA FROM ura WHERE ID_USER=".$row["ID_USER"]   ;
             
              $result1=mysqli_query($conn1,$q0);
                $row1=mysqli_fetch_assoc($result1);
                if (isset($row1 ["ID_USER"]))
                {
              
               $_SESSION["username"]=$row["ID_USER"];
               $_SESSION["id_ura"]=$row1["ID_URA"];
               $_SESSION["IMAG"]=$row["IMAG"];
           
           
             //  echo  $_SESSION["username"].$_SESSION["id_ura"];
            header('Location: ../7.php');
           exite();
            } 
            else{

             header("refresh:3;url=../35.php");

            }



}

else {
  header("refresh:1;url=../36.php");
  

}





?>
 </body>
</html>
