<?php  

include ('header_active.php');
?>

          <div class="col-md-4 col-sm-12">
                <br><br>
                <div style="text-align: center;padding-top:48px">
                      <a href="12-1.php"  style= "padding-left:10px"   >  <button type="button" style="width: 240px; height: 40px; font-size: 12px" id="p9" class="btn btn-outline-dark " href="12-1.php">اماكن تم انشائها و تم الموافقة عليها</button></a> 
                      <br><br>
                      <a href="12-3.php" style= "padding-left:10px" > <button type="button" style="width: 240px; height: 40px" id="p11"   class="btn btn-outline-dark">اماكن تم انشائها و معلقة</button> </a> 
                      <br><br>
                      <a href="12-4.php" style= "padding-left:10px"   >  <button type="button" style="width: 240px; height: 40px; font-size: 12px" id="p12"   class="btn btn-outline-dark">اماكن تم تعديلها و تم الموافقة عليها</button></a> 
                      <br><br>
                      <a href="12-6.php" style= "padding-left:10px"  >  <button type="button" style="width: 240px; height: 40px" id="p15"    class="btn btn-outline-dark">اماكن تم تعديلها و معلقة </button></a> 
                </div>
          </div>



          <div class="col-md-4 col-sm-12" style="visible:flus;">
                <br><br>
                <div style="text-align: center;">
                  
                    <i style="visibility:visible;" id="n0" class="fas fa-users-cog fa-3x " style="  color: #353c42;"></i>
                    <br>  
                   <div id="n1" style="visibility:visible" > <a href="13.php"  >  <button type="button" style="width: 240px; height: 40px;"    class="btn btn-outline-dark"> اعضاء تم الموافقة عليهم </button> </a></div>
                    <br>  
                    <div id="n2" style="visibility:visible" > <a href="17.php"  >   <button    type="button" style="width: 240px; height: 40px; "     class="btn btn-outline-dark">اعضاء سجلو و معلقين</button></a></div>
                    <br>   
                    <div id="n3" style="visibility:visible" > <a href="14.php"  >   <button    type="button" style="width: 240px; height: 40px;"     class="btn btn-outline-dark">اماكن تم الموافقة عليها</button></a></div>
                    <br>  
                    <div id="n4" style="visibility:visible" > <a href="18.php" >   <button    type="button" style="width: 240px; height: 40px;"    class="btn btn-outline-dark">اماكن تم تسجيلها و معلقة   </button></a></div>
                    <br>  
                    <div id="n5" style="visibility:visible" > <a href="19.php"  >   <button    type="button" style="width: 240px; height: 40px;"     class="btn btn-outline-dark">اماكن تم تعديلها و معلقة   </button></a></div>
                    <br>  
                    <div id="n6" style="visibility:visible" > <a href="26.php"  >   <button    type="button" style="width: 240px; height: 40px; font-size: 12px;"        class="btn btn-outline-dark">اماكن تم تعديلها و تم الموافقة عليها   </button></a></div>
                  </div>
            </div>
      </div>  
</div>
<br>
<?php
include ('footer.php');
?>

 <?php
 //echo "user admin is".$row["adminsql"];

 ?>
  </body>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="js/myjs.js" ></script>
    <script  > 

var person = 
{
  fullName: function()
   {
    
      if (<?php  echo $x1; ?> ==0)
      {
      //alert("enter");
        
  
      document.getElementById("n0").style.visibility="hidden";
      document.getElementById("n1").style.visibility="hidden";
      document.getElementById("n2").style.visibility="hidden";
      document.getElementById("n3").style.visibility="hidden";
      document.getElementById("n4").style.visibility="hidden";
      document.getElementById("n5").style.visibility="hidden";
      document.getElementById("n6").style.visibility="hidden";
      }
      else{
     
       
        document.getElementById("n0").style.visibility="visible";
      document.getElementById("n1").style.visibility="visible";
      document.getElementById("n2").style.visibility="visible";
      document.getElementById("n3").style.visibility="visible";
      document.getElementById("n4").style.visibility="visible";
      document.getElementById("n5").style.visibility="visible";
      document.getElementById("n6").style.visibility="visible";
    
      }
  }

}
   
person.fullName();


  </script>
