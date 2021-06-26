<?php 
include ('sub_header_active.php');



?>


<style>
input[type="file"]
{
  display:none;
}
.custom-file-upload{
  /*border:1px solid #ccc;
  display : inline-block;
  padding:6px 12px;
  cursor:pointer;*/
  color: #343a40;
    border-color: #343a40;
}
}


</style>
<div class="container">
<form method="post" action="34.php" enctype="multipart/form-data">
          <div style="justify-content: center;display: flex;padding-top: 10px;">
                  <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                                </div>
                                        <div class="col-md-8">
                                                <div class="card-body" >
                                                  <label for="file_upload" class="btn btn-outline-dark"> اختار صورة </label>
                                                  <input id="file_upload" type="file" name ="jjj"/>
                                                  <input type="text" name ="title" style="border-style: double;   border-color:  #343a40; padding: 45px; width: 100%;height: 2px;text-align: right; font-size: 20px;" class="card-title" placeholder="ادخل اسم المكان"></h5>
                                                </div>
                                                <input type="hidden" name ="myid_ura" value=<?php   echo $myid_ura; ?>>
                                        </div>
                              </div>
                        </div>
                </div>
          </div>
          <hr>  
        <div style="padding: 100px;" ><button type="file"  class="btn btn-outline-dark">انشاء</button></div>
</form>






</div>
<?php
include ('footer.php');
?>