<?php
$soldout="";
$cinquantaI="";
$cinquantaB="";
$centoB="";
$centoI="";
$testo="";
$soldout="";
$expired="";
$Mail="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}
$select_Notification=0;
if(isset($_GET['Mail'])){
$Mail=$_GET['Mail'];
}else{
    echo '<script> location.replace("../index.html"); </script>';
}
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
$sql_Event = "SELECT * FROM event WHERE creatore='$Mail'";
$res_Event =mysqli_query($connection,$sql_Event);
while($row = mysqli_fetch_array($res_Event)){
$today = date("Y/m/d");
$today=strtotime($today);
$edate=strtotime($row['d_evento']);
if($edate<$today){
  $id2=$row['ID'];
  $sql = "DELETE  FROM event WHERE ID='$id2'";
  $res_sql =mysqli_query($connection,$sql);
  $s_text="expired";
  $s2_text="event name= ".$row['h_evento']." has expired</br> id evento=".$row['ID'];

  $sql = "INSERT INTO `commentso` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`,`mail`) VALUES (NULL, '$s_text', '$s2_text', '','$Mail')";
  $res_sql =mysqli_query($connection,$sql);
}
if($row['Creatore_not']==0){
if(($row['n_Max']<=$row['n_Buy'])&&($row['n_Buy'])!=0){
  $id2=$row['ID'];
  $sql = "UPDATE event SET soldout=1 WHERE ID='$id2'";
  $res_sql =mysqli_query($connection,$sql);

  $s_text="soldout";
  $s2_text="event name= ".$row['h_evento']." soldout</br> id evento=".$row['ID'];

  $sql = "INSERT INTO `commentso` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`,`mail`) VALUES (NULL, '$s_text', '$s2_text','', '$Mail')";
  $res_sql =mysqli_query($connection,$sql);
  $sql = "UPDATE event SET Creatore_not=1 WHERE ID='$id2'";
  $res_sql =mysqli_query($connection,$sql);
}
}
}

echo '<script> location.replace("../logged.php"); </script>';
?>
