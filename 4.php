
<?php 
session_start();


//$e="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=753573260951-g3eo7co1gmhehpu5e0m4521jnm42t85s.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2Fgoogle%2Findex.php&state&scope=email%20profile&approval_prompt=auto";
$e="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=753573260951-g3eo7co1gmhehpu5e0m4521jnm42t85s.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fshabee.ga%2Fgoogle%2F42.php&state&scope=email%20profile&approval_prompt=auto";


//$e="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=753573260951-ktu4rp7pubhihdotu3b8f6a1c7s2acvs.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2Fshabe%2Fgoogle%2F43.php&state&scope=email%20profile&approval_prompt=auto";

?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title>Hello, world!</title>
  </head>


  <body >

      







<nav class="navbar navbar-expand-lg navbar-dark bg-dark main" style=" margin-right: 0; margin-left: 0 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="7-1.php">اهلنا الشعب</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active ">
        <a class="nav-link" href="4.php">انشاء حساب  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="3.php"> تسجيل الدخول</a>
      </li>
     
    </ul>
 
  </div>
</nav>
<br><br><br><br>
<?php
  if ($_SERVER['REQUEST_METHOD']=='POST')
{
$username=$_POST["nameuser"];
$emails=$_POST["email"];
$password=$_POST["pass"];
$password2=$_POST["pass2"];
$hashedpass=sha1($password);
$conn=mysqli_connect("sql311.epizy.com","sql311.epizy.com","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
$conn1=mysqli_connect("sql311.epizy.com","sql311.epizy.com","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
mysqli_query($conn,"set NAMES utf8");
mysqli_query($conn1,"set NAMES utf8");

    if ($password==$password2 )
    { 
      $q2=  "SELECT  EMAIL FROM user_reg WHERE EMAIL="."\""   .  $emails .   "\"";
      
     
      $result=mysqli_query($conn,$q2);
      $row=mysqli_fetch_assoc($result);
   
              if (!isset($row["EMAIL"]))
              {
            
               $q=  "INSERT INTO user_reg ( NAME, EMAIL, MYPASSWORD) VALUES (\""   .$username.    "\" ,\""   .    $emails .  "\" ,\""  .  $hashedpass     .       "\")";
               
               $result=mysqli_query($conn1,$q);
               header("refresh:3;url=38.php");
              } //if (!$row["EMAIL"])
              else
              {
              
               header("refresh:3;url=37.php");
              } //else
          }
          else 
          {
            header("refresh:3;url=39.php");
    
      } //if ($password==$password2 )
    } // if ($_SERVER['REQUEST_METHOD']=='POST')
   
?>

 <div class="container">

 
                  <div style="justify-content: center;display: flex; ">
                      <form class="border_from" action=<?php  echo $_SERVER["PHP_SELF"];  ?> method="post" >
                        <fieldset  style=" border: 1px solid #495057;padding: 20px;">
                       
                        <a href=<?php echo $e;  ?>>  <div style="display: flex; ">
                            <img src="google.png"  height="30px" px width="28px" >
                            <input class=" mygoogles" type="button" id="fname" value="googleانشاء حساب بواسطة">
                        </a> </div>
                              <hr style="height:1px;border-width:0;color:gray;background-color:#495057; ">
                              <P style="  text-align: center;font-size: 14px;; ">انشاء حساب بواسطة البريد الالكتروني</P>
                              <br>
                              <input class=" anamithion2" type="text" id="fname1" name="nameuser" required="required"  placeholder="الاسم الكامل"><br><br>
                              
                              <input class=" anamithion2" type="email" id="fname2" name="email" required="required"  placeholder="البريد الالكتروني"><br><br>
                              
                              <input class=" anamithion2" type="password" id="fname3" name="pass" required="required"  placeholder="انشاء كلمة مرور"><br><br>
                             
                              <input class=" anamithion2" type="password" id="fname3" name="pass2" required="required"  placeholder="كرر كلمة مرور"><br><br>
        
                              <input class=" mygoogles" type="submit" id="fname4" style="width:230px"   value=" انشاء حساب">
                              <hr style="height:1px;border-width:0;color:gray;background-color:#495057; ">
                              <p class="mycurrent" style="">اذا انت مسجل سابقا؟ <a href="3.php"> تسجيل الدخول</a></p>
                        </fieldset>  
                      </form> 
                    </div>
                      
<br><br><br><br>


 
 </div >
<?php
include ('footer.php');

?>
