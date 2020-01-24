<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $connection = mysqli_connect('localhost','root','','tec_web');
    if(!$connection){
    echo 'error:' . mysqli_connect_error();
    }
    $event_date=date("Y-m-d",strtotime($event_date));
    $sql_s="INSERT INTO `event` (`h_evento`, `p_evento`, `creatore`, `d_evento`, `image`, `n_Max`, `price`) VALUES ('$event_name','$event_desc','$Mail','$event_date','$target','$max_p','$max_price')";
  //  $sql_s="INSERT INTO event (h_evento,p_evento,creatore,d_evento,image,n_Max,price)"." VALUES ('$event_name','$event_desc','$Mail','$event_date','$target','$max_p','$max_price')";

 //INSERT INTO `event` (`ID`, `h_evento`, `p_evento`, `creatore`, `d_evento`, `n_Max`, `n_partecipanti`, `n_Buy`, `image`, `price`, `soldout`) VALUES ('$event_name','$event_desc','$Mail','$event_date','$target','$max_p','$max_price')";


    $result_s =mysqli_query($connection,$sql_s);
    $event_date = $event_name = $creator_name = $event_desc =$file=$image= "";


mysqli_close($connection);
  echo '<script> location.replace("carrello.php#creato"); </script>';
 }
?>
