<?php 
session_start();

?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css" >
     <link rel="stylesheet" href="css\all.css" >
     <link rel="stylesheet" href="css\mycss2.css" >
     <link rel="stylesheet" href="css\mycss1.css" >
    <title>Hello, world!</title>
  </head>


  <body >

      

 





<nav class="navbar navbar-expand-lg navbar-dark bg-dark main" style=" margin-right: 0; margin-left: 0 ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">اهلنا الشعب</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="4.php">انشاء حساب  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="3.php"> تسجيل الدخول</a>
      </li>
     
    </ul>
 
  </div>
</nav>



<div class="alert alert-success" role="alert" style="text-align: right ; margin:100px">
  <h4 class="alert-heading">اهلا بك مستخدمنا العزيز</h4>
  <p>تتقدم مبادرة البرمجة من اجل العراق الغير ربحية بأنشاء موقع أهلنا الشعب </p>
  <p >هدفنا من هذا الموقع هو معرفة منطقة الشعب وأماكنها وسهولة البحث عن الأماكن كالمدارس والأسواق والمطاعم</p>
 
  <p >عزيزي المستخدم يمكنك ان تكتب اسم المكان الذي تبحث عنه في صندوق البحث وسوف يظهر لك جميع المعلومات الموقع وكذلك إذا لم تكن تحفظ الاسم الكامل للمكان يمكنك ان تكتب جزء من الاسم لكي تبحث عن الموقع المطلوب</p>

<p>أذا كان لديك رغبة في إضافة مكان جديد او تعديل على المعلومات الموجودة في الموقع يمكنك ان تسجل في موقعنا لكي تستطيع إضافة مكان او تعديل على الأماكن</p>

<p >عزيزي المستخدم إذا سجلت في الموقع عن طريق انشاء الحساب انتظر أربعة وعشرون ساعة لكي يستطيع المدراء تفعيل الحساب</p>

</div>

<form class="border_from" action="5.php" method="get">
<div style="justify-content: center;display: flex;"   >
  <button type="submit"  class="nav-link fas fa-arrow-left fa-1x arraow_color" ></button>
<input type="search" name ="place" class=" input_serch serch_border" id="serch device-width"  placeholder="ادخل اسم المكان"></in>
</div>
</form>


<br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br<br><br><br<br><br><br<br><br><br<br><br><br<br><br>

<?php
include ('footer.php');
?>