<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  $connection = mysqli_connect('localhost','root','','tec_web');
  if(!$connection){
  echo 'error:' . mysqli_connect_error();
  }
  $event_date=date("Y-m-d",strtotime($event_date));
  $defaultDate=date("Y-m-d");
//  $sql_s="INSERT INTO `event` (`h_evento`, `p_evento`, `creatore`, `d_evento`, `image`, `n_Max`, `price`) VALUES ('$event_name','$event_desc','$Mail','$event_date','$target','$max_p','$max_price')";
  $autonotification="";
  if(isset($event_name)&&($event_name!="")){
    $sql_s="UPDATE `event` SET `h_evento`='$event_name', `creatore`='$Mail' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." NOME EVENTO ";
  }
  if(isset($event_desc)&&($event_desc!="")){
    $sql_s="UPDATE `event` SET  `p_evento`='$event_desc', `creatore`='$Mail' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." DESCRIZIONE ";
  }
  if(isset($event_date)&&($event_date!="")&&($event_date>$defaultDate)){
    $sql_s="UPDATE `event` SET `creatore`='$Mail', `d_evento`='$event_date' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." DATA ";
  }
  if(isset($target)&&($target!="images/")){
    $sql_s="UPDATE `event` SET `creatore`='$Mail', `image`='$target' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." IMAGE ";
  }
  if(isset($max_p)&&($max_p!="")){
    $sql_s="UPDATE `event` SET `creatore`='$Mail', `n_Max`='$max_p' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." LIMITE PARTECIPANTI ";
  }
  if(isset($max_price)&&($max_price!="")){
    $sql_s="UPDATE `event` SET `creatore`='$Mail', `price`='$max_price' WHERE `ID`='$id'";
    $result_s =mysqli_query($connection,$sql_s);
    $autonotification=$autonotification." PREZZO ";
  }
  $event_not_modify="MODIFICATO EVENTO:".$id;
  $sql_s="INSERT INTO `comments` (`comment_subject`,`comment_text`) VALUES ('$event_not_modify','$autonotification')";
  $result_s =mysqli_query($connection,$sql_s);

  //$sql_s="UPDATE `event` SET `h_evento`='$event_name', `p_evento`='$event_desc', `creatore`='$Mail', `d_evento`='$event_date', `image`='$target', `n_Max`='$max_p', `price`='$max_price' WHERE `ID`='$id'";
  //$result_s =mysqli_query($connection,$sql_s);
  $event_date = $event_name = $creator_name = $event_desc =$file=$image= "";


mysqli_close($connection);
echo '<script> location.replace("carrello.php#modify"); </script>';
}
?>
