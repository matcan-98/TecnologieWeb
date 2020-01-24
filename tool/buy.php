<?php
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
$id = intval($_GET['id']);
if(isset($_GET['n'])){
  $n=$_GET['n'];
  if($n>0){
    $sql_Mail_a = "INSERT INTO more (mail,eventID,numero) VALUES ('$Mail','$id','$n')";
    $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
  }
  $sql_Mail_a = "UPDATE event SET n_Buy=n_Buy+'$n' WHERE id='$id'";
  $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
}else{
  $sql_Mail_a = "UPDATE event SET n_Buy=n_Buy+1 WHERE id='$id'";
  $res_Mail_a =mysqli_query($connection,$sql_Mail_a);
}



  mysqli_close($connection);
  $addEvent="\"aggiungiOrdinati.php?id=".$id."\"";
  echo '<script> location.replace('.$addEvent.'); </script>';
?>
