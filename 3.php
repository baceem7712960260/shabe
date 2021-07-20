<?php 
session_start();
$e="https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=753573260951-ktu4rp7pubhihdotu3b8f6a1c7s2acvs.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fshabee.ga%2Fgoogle%2F43.php&state&scope=email%20profile&approval_prompt=auto";

?>
<!doctype html>
    <!-- Bootstrap CSS -->
   <!-- <link rel="stylesheet" href="css\bootstrap.min.css" >
     <link rel="stylesheet" href="css\all.css" >
     <link rel="stylesheet" href="css\mycss2.css" >
     <link rel="stylesheet" href="css\mycss1.css" >
-->  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>اهلنا الشعب</title>
  </head>
<style>
    .mygoogles{
      width: 200px ;
        height: 28px;
        background-color:  #f5f6f7; /* blue */
        border: none;
        color: #000000;
        margin-top: 3px;
       text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;;
    }
    .mygoogles:hover{
    background-color: #495057;
    color:rgb(255, 255, 255);
    }
</style>

  <body >

      

 





<nav class="navbar navbar-expand-lg navbar-dark bg-dark main" style=" margin-right: 0; margin-left: 0 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="7-1.php">اهلنا الشعب</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="4.php">انشاء حساب  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="3.php"> تسجيل الدخول</a>
      </li>
     
    </ul>
 
  </div>
</nav>
<br><br><br><br>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
$username=$_POST["email"];
$password=$_POST["pass"];


$hashedpass=sha1($password);

$conn=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase"); 
mysqli_query($conn,"set NAMES utf8");
$q=  "SELECT ID_USER , NAME , EMAIL , MYPASSWORD FROM user_reg WHERE EMAIL ="     . "\"" .  $username .  "\""    .    " and MYPASSWORD ="    . "\"" .  $hashedpass .  "\"" ;
$result=mysqli_query($conn,$q);
   $row=mysqli_fetch_assoc($result);


   $xx=  $row["ID_USER"]. $row["NAME"]. $row["EMAIL"] .$row["MYPASSWORD"]."<br>";

if ($row["ID_USER"])
{
      
      
              $conn1=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase"); 
              mysqli_query($conn1,"set NAMES utf8");
              $q1="SELECT ID_USER , ID_URA FROM ura WHERE ID_USER=".$row["ID_USER"]   ;
              $result1=mysqli_query($conn1,$q1);
                $row1=mysqli_fetch_assoc($result1);
                if ($row1 ["ID_USER"])
                {
              
               $_SESSION["username"]=$row["ID_USER"];
               $_SESSION["id_ura"]=$row1["ID_URA"];
               $_SESSION["IMAG"]=1;
            header('Location: 7.php');
            exite();
            } 
            else{

             header("refresh:3;url=35.php");

            }
}
else {
  header("refresh:1;url=36.php");
}
}
?>
                    <div style="justify-content: center;display: flex; ">
                      <form class="border_from" action="<?php  echo $_SERVER["PHP_SELF"];  ?>" method="post" name="myForm" >
                        <fieldset style=" border: 1px solid #495057;padding: 20px;">
                          


                          <a href=<?php echo $e;  ?>> <div style="display: flex; ">
                            <img src="google.png"  height="30px" px width="28px" >
                             <input class=" mygoogles"   type="button" id="fname" value=" google سجل  بواسطة  ">
                         </a> </div>

                              <hr style="height:1px;border-width:0;color:gray;background-color:#495057; ">
                              <P style="  text-align: center;font-size: 14px;; ">التسجيل بواسطة البريد الالكتروني</P>
                              <br>
                              <input class=" anamithion2" type="email" id="fname1" name="email" required="required"  placeholder=" البريد الاكتروني"><br><br>
                              
                              <input class=" anamithion2" type="password" id="fname2" name="pass" required="required"  placeholder="كلمة المرور"><br><br>
                             
                              <br>
                              <div >
                              <input  class=" mygoogles" id="fname" name="myinput3" style="width:230px; " type="submit" value=" تسجيل الدخول"   value="تسجيل الدخول"> 
                             </div>

                        <hr style="height:1px;border-width:0;color:gray;background-color:#495057; ">
                              <p class="mycurrent" >اذا انت لست عضوا ؟ <a href="4.php"> انشاء حساب</a></p>

                    
                        </fieldset>  
                      

                  

                      </form> 
                    </div>
                      
<br><br><br><br>


<?php
include ('footer.php');
?>