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
  $sql_Mail_c = "SELECT * FROM ordinati WHERE Mail='$Mail'";
  $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
  $_SESSION['FULLCART']="";
  if(!(mysqli_num_rows($res_Mail_c) > 0)){
    $sql_Car = "INSERT INTO `ordinati` (`ID`, `Mail`, `e1`, `e2`, `e3`, `e4`, `e5`, `e7`, `e8`, `e9`, `e10`, `e_stored`)"."VALUES (NULL, '$Mail', '$id', '0', '0', '0', '0', '0', '0', '0', '0', '1')";
    $res_Car =mysqli_query($connection,$sql_Car);
    echo '<script> location.replace("../event.php"); </script>';
  }else{
    $sql_Event = "SELECT e_stored FROM ordinati WHERE Mail='$Mail'";
    $res_Event =mysqli_query($connection,$sql_Event);
    $sql_Cart="";
    $sql_Cart2="";

    $sql_ordinati="SELECT * FROM ordinati WHERE Mail='$Mail'";
    $res_ordinati =mysqli_query($connection,$sql_ordinati);

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
    while($row1=mysqli_fetch_array($res_ordinati)){
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

    if(($id!=$e1)&&($id!=$e2)&&($id!=$e3)&&($id!=$e4)&&($id!=$e5)&&($id!=$e6)&&($id!=$e7)&&($id!=$e8)&&($id!=$e9)&&($id!=$e10)){
      if(mysqli_num_rows($res_Event) > 0){
              while($row = mysqli_fetch_array($res_Event)){
                switch($row['e_stored']){
                  case '0':
                          $sql_Cart = "UPDATE `ordinati` SET `e1` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '1' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '1':
                          $sql_Cart = "UPDATE `ordinati` SET `e2` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '2' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '2':
                          $sql_Cart = "UPDATE `ordinati` SET `e3` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '3' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '3':
                          $sql_Cart = "UPDATE `ordinati` SET `e4` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '4' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '4':
                          $sql_Cart = "UPDATE `ordinati` SET `e5` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '5' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '5':
                          $sql_Cart = "UPDATE `ordinati` SET `e6` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '6' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '6':
                          $sql_Cart = "UPDATE `ordinati` SET `e7` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '7' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '7':
                          $sql_Cart = "UPDATE `ordinati` SET `e8` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '8' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '8':
                          $sql_Cart = "UPDATE `ordinati` SET `e9` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '9' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '9':
                          $sql_Cart = "UPDATE `ordinati` SET `e10` = '$id' WHERE `ordinati`.`Mail` = '$Mail'";
                          $sql_Cart2 = "UPDATE `ordinati` SET `e_stored` = '10' WHERE `ordinati`.`Mail` = '$Mail'";
                  break;
                  case '10':
                  $_SESSION['FULLCART']="IL ordinati E' PIENO";
                  break;
                }

          }
              if(!($sql_Cart2=="")&&!($sql_Cart=="")){
                $res_Cart2 =mysqli_query($connection,$sql_Cart2);
                $res_Cart =mysqli_query($connection,$sql_Cart);
                  $_SESSION['FULLCART']="";
              }
              $deleteFromCarrello="rimuoviCarrello.php?id=".$id;
              echo '<script> location.replace("'.$deleteFromCarrello.'"); </script>';

      }
  }else{
      $_SESSION['FULLCART']="Evento Gia Presente Nel ordinati";
        echo '<script> location.replace("../event.php"); </script>';
  }

}

?>
