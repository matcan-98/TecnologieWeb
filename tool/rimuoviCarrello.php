<?php
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}
$id = intval($_GET['id']);
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
  $sql_Mail_c = "SELECT * FROM carrello WHERE Mail='$Mail'";
  $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
  $_SESSION['FULLCART']="";
  if(!(mysqli_num_rows($res_Mail_c) > 0)){
    //$sql_Car = "INSERT INTO `carrello` (`ID`, `Mail`, `e1`, `e2`, `e3`, `e4`, `e5`, `e7`, `e8`, `e9`, `e10`, `e_stored`)"."VALUES (NULL, '$Mail', '$id', '0', '0', '0', '0', '0', '0', '0', '0', '1')";
  //  $res_Car =mysqli_query($connection,$sql_Car);
    echo '<script> location.replace("../event.php"); </script>';
  }else{
    $sql_Event = "SELECT e_stored FROM carrello WHERE Mail='$Mail'";
    $res_Event =mysqli_query($connection,$sql_Event);
    $sql_Cart="";
    $sql_Cart2="";

    $sql_mov1 ="";
    $sql_mov2 ="";
    $sql_mov3 ="";
    $sql_mov4 ="";
    $sql_mov5 ="";
    $sql_mov6 ="";
    $sql_mov7 ="";
    $sql_mov8 ="";
    $sql_mov9 ="";
    $sql_mov10 = "";

    $sql_carrello="SELECT * FROM carrello WHERE Mail='$Mail'";
    $res_carrello =mysqli_query($connection,$sql_carrello);

    $e1="";
    $e2="";
    $e3="";
    $e4="";
    $e5="";
    $e6="";
    $e7="";
    $e8="";
    $e9="";
    $e10="";
    while($row1=mysqli_fetch_array($res_carrello)){
      $e1=$row1['e1'];
      $e2=$row1['e2'];
      $e3=$row1['e3'];
      $e4=$row1['e4'];
      $e5=$row1['e5'];
      $e6=$row1['e6'];
      $e7=$row1['e7'];
      $e8=$row1['e8'];
      $e9=$row1['e9'];
      $e10=$row1['e10'];
    }


      if(mysqli_num_rows($res_Event) > 0){

              while($row = mysqli_fetch_array($res_Event)){
                switch($id){
                  case $e1:
                  $switch=1;
                  echo "1";
                  break;
                  case $e2:
                  $switch=2;
                  echo "2";
                  break;
                  case $e3:
                  $switch=3;
                  echo "3";
                  break;
                  case $e4:
                  $switch=4;
                  echo "4";
                  break;
                  case $e5:
                  $switch=5;
                  echo "5";
                  break;
                  case $e6:
                  $switch=6;
                  echo "6";
                  break;
                  case $e7:
                  $switch=7;
                  echo "7";
                  break;
                  case $e8:
                  $switch=8;
                  echo "8";
                  break;
                  case $e9:
                  echo "9";
                  $switch=9;
                  break;
                  case $e10:
                  echo "10";
                  $switch=10;
                  break;

                }
                switch($switch){
                  case '1':
                          $sql_mov1 = "UPDATE `carrello` SET `e1` = '$e2' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov2 = "UPDATE `carrello` SET `e2` = '$e3' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov3 = "UPDATE `carrello` SET `e3` = '$e4' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov4 = "UPDATE `carrello` SET `e4` = '$e5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `e5` = '$e6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `e6` = '$e7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `e7` = '$e8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov1.";".$sql_mov2.";".$sql_mov3.";".$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '0' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '2':
                          $sql_mov2 = "UPDATE `carrello` SET `e2` = '$e3' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov3 = "UPDATE `carrello` SET `e3` = '$e4' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov4 = "UPDATE `carrello` SET `e4` = '$e5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `e5` = '$e6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `e6` = '$e7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `e7` = '$e8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov2.";".$sql_mov3.";".$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '1' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '3':
                          $sql_mov3 = "UPDATE `carrello` SET `e3` = '$e4' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov4 = "UPDATE `carrello` SET `e4` = '$e5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `e5` = '$e6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `e6` = '$e7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `e7` = '$e8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov3.";".$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '2' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '4':
                          $sql_mov4 = "UPDATE `carrello` SET `e4` = '$e5' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov5 = "UPDATE `carrello` SET `e5` = '$e6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `e6` = '$e7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `e7` = '$e8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9= "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov4.";".$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '3' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '5':
                          $sql_mov5 = "UPDATE `carrello` SET `e5` = '$e6' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov6 = "UPDATE `carrello` SET `e6` = '$e7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `e7` = '$e8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10= "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov5.";".$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '4' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '6':
                          $sql_mov6 = "UPDATE `carrello` SET `e6` = '$e7' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov7 = "UPDATE `carrello` SET `e7` = '$e8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";


                          $Final_query=$sql_mov6.";".$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '5' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '7':
                          $sql_mov7 = "UPDATE `carrello` SET `e7` = '$e8' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov7.";".$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '6' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '8':
                          $sql_mov8 = "UPDATE `carrello` SET `e8` = '$e9' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov8.";".$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '7' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '9':
                          $sql_mov9 = "UPDATE `carrello` SET `e9` = '$e10' WHERE `carrello`.`Mail` = '$Mail'";
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov9.";".$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '8' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                  case '10':
                          $sql_mov10 = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$Mail'";

                          $Final_query=$sql_mov10.";";
                          $sql_Cart2 = "UPDATE `carrello` SET `e_stored` = '9' WHERE `carrello`.`Mail` = '$Mail'";
                  break;
                }
                $sql_Mail_a = "UPDATE event SET n_partecipanti=n_partecipanti-1 WHERE id='$id'";
                $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
          }
              if(!($sql_Cart2=="")&&!($Final_query=="")) {
                $res_Cart2 =mysqli_query($connection,$sql_Cart2);
                $res_finale =mysqli_multi_query($connection,$Final_query);

                  $_SESSION['FULLCART']="";
              }

              echo '<script> location.replace("../carrello.php"); </script>';
      }


}
  mysqli_close($connection);

?>
