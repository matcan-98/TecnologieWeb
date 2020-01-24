<?php
//$id = intval($_GET['id']);
function ordinati($mail_f,$evento){
  $connection = mysqli_connect('localhost','root','','tec_web');
  if(!$connection){
  echo 'error:' . mysqli_connect_error();
  }
  $sql_Mail_a = "SELECT * FROM `ordinati` WHERE `ordinati`.`Mail`='$mail_f'";
  $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
  $row = mysqli_fetch_array($res_Mail_a);
  if($row['e1']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e1` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e2']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e2` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e3']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e3` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e4']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e4` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e5']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e5` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e6']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e6` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e7']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e7` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e8']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e8` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e9']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e9` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
  if($row['e10']==0){
    $sql_Mail_a = "UPDATE `ordinati` SET `e10` = '$evento' WHERE `ordinati`.`Mail` = '$mail_f'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    return;
  }
}
$mail = $_GET['mail'];
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
//echo"qua ".$mail;
    $sql_Mail_a = "SELECT * FROM `carrello` WHERE `carrello`.`Mail`='$mail'";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
    $row = mysqli_fetch_array($res_Mail_a);
      if($row['e1']!=0){
        $id_l=$row['e1'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e1` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);
      }
      if($row['e2']!=0){
        $id_l=$row['e2'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e2` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e3']!=0){
        $id_l=$row['e3'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e3` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e4']!=0){
        $id_l=$row['e4'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e4` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e5']!=0){
        $id_l=$row['e5'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e5` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e6']!=0){
        $id_l=$row['e6'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e6` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e7']!=0){
        $id_l=$row['e7'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e7` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e8']!=0){
        $id_l=$row['e8'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e8` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e9']!=0){
        $id_l=$row['e9'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e9` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      if($row['e10']!=0){

        $id_l=$row['e10'];
        $sql_Mail_a = "UPDATE `event` SET `n_Buy` = `n_Buy`+1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `event` SET `n_partecipanti` = `n_partecipanti`-1 WHERE `event`.`ID` = '$id_l'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        $sql_Mail_a = "UPDATE `carrello` SET `e10` = '0' WHERE `carrello`.`Mail` = '$mail'";
        $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
        ordinati($mail,$id_l);

      }
      $sql_Mail_a = "UPDATE `carrello` SET `e_stored` = '0' WHERE `carrello`.`Mail` = '$mail'";
      $res_Mail_a =mysqli_query($connection,$sql_Mail_a);


      echo '<script> location.replace("../order.php"); </script>';

  mysqli_close($connection);

?>
