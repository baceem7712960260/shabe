<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
               {
                $myfile=$_FILES['jjj'];
                $n1=$myfile['name'];  
                $myid_ura=$_POST["myid_ura"];
                $title1= $_POST["title"];
               move_uploaded_file( $myfile['tmp_name'] ,__DIR__.'/place//'.$myfile['name'] );
             
            
                        $conn1=mysqli_connect("sql311.epizy.com","epiz_27557681","bNdNy4DhUPHnCL","epiz_27557681_mydatabase");
                        mysqli_query($conn1,"set NAMES utf8");
              $q=  "INSERT INTO place( NAME,  ID_URA) VALUES (\""  .$title1.      "\" ,"  .    $myid_ura.      ")";
            $q1=  "SELECT ID_PLACE FROM place WHERE ID_PLACE =(SELECT MAX(ID_PLACE ) FROM place WHERE 1)";
            $result1=mysqli_query($conn1,$q1);
                                while($row=mysqli_fetch_assoc($result1))
                                {
                                  $n2=$row["ID_PLACE"]+1;
                                }
                                $result=mysqli_query($conn1,$q);
              $frist=__dir__."/place/";
              $ccc=strstr( $n1,".",false);
  $xx2= strlen($ccc);
  echo "xx2".$xx2;
  
              $subEnding=substr($n1,0,$xx2*-1);
              $a=  $frist.$n1 ;
              $numberSub=str_replace( $subEnding,$n2,$n1);
              $t1=$frist.$n1;
              $t2=$frist.$numberSub;
              $s=str_replace($subEnding, $n2,$a);
              rename( $t1,$t2 );
           
             }
              ?>
         <br><br><br><br>
<p style="color:green;font-size: 30px;text-align: center;">تم انشاء المكان بنجاح </p>