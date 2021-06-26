

<footer >
<link rel="stylesheet" href="css\mcss.css" >
 <div class="row bg-dark navbar-dark " style=" margin-right: 0; margin-left: 0;  display: flex;justify-content: center;align-items: center ;">

<a href="https://www.facebook.com/Code4Iraq"><img src="img.jpg"  height="50px" px width="50px"  class="rounded-circle"></a>
<a href="https://www.codeforiraq.org/" style=" padding: 20px;font-size:10px; color:rgb(250, 242, 242);"> جميع الحقوق محفوظة © البرمجة من اجل العراق 2021</a>
</div>



</footer>


  </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/fontawesome.min.js" ></script>
    <link rel="stylesheet" href="css\bootstrap.min.css" >
     <link rel="stylesheet" href="css\all.css" >
     <link rel="stylesheet" href="css\mycss2.css" >
     <link rel="stylesheet" href="css\mycss1.css" >
     <style>
    .mygoogles{
  width: 200px ;
    height: 28px;
    background-color:  #f5f6f7; /* blue */
    border: none;
    color: #000000;
    margin-top: 3px;
    -text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;;
}
.mygoogles:hover{
background-color: #495057;
color:rgb(255, 255, 255);
}

.table3 {
  width: 100%;
  margin-bottom: $spacer;
  color: $table-color;
  background-color: $table-bg; // Reset for nesting within parents with `background-color`.

}

</style>



<script>
function vis1(x)
    {

     if (x!=1)
     {
      document.getElementById("uu").style.visibility="hidden";
      document.getElementById("hh").style.visibility="hidden";
      document.getElementById("p3").style.visibility="hidden";
      document.getElementById("p4").style.visibility="hidden";
      document.getElementById("emailname").style.visibility="hidden";
      document.getElementById("p5").style.visibility="hidden";
      document.getElementById("pkkk").style.visibility="hidden";
      document.getElementById("file_upload").style.visibility="hidden";
     }
    }
vis1(<?php echo strlen($_SESSION["IMAG"]);  ?>);

    </script>

</html>