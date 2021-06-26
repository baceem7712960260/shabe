<?php
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
                                
                $frist=__dir__."\place\\";
                $subEnding=substr($n1,0,-4);
                $a=  $frist.$n1 ;
                $numberSub=str_replace( $subEnding,$n2,$n1);
                $t1=$frist.$n1;
                $t2=$frist.$numberSub;
                $s=str_replace($subEnding, $n2,$a);
                rename( $t1,$t2 );

                header('Location: 11.php');
?>