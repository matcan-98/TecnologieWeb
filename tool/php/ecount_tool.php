<?php
$event_c=120;
$event_carr=100;
$event_crea=20;
$event_ac=10;
$event_gain=0;
$Mail="";
$select="";

if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}

$id = intval($_GET['id']);
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
$sql = "SELECT * FROM event";
$res_sql =mysqli_query($connection,$sql);
$event_disp=0;
  while($row = mysqli_fetch_array($res_sql)){
  $event_disp++;

  }
  $event_crea=0;

  $sql = "SELECT n_partecipanti FROM event WHERE creatore='$Mail'";
  $res_sql =mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
  $event_crea++;

  }
  $event_carr=0;

  $sql = "SELECT n_partecipanti FROM event WHERE creatore='$Mail'";
  $res_sql =mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
  $event_carr=$event_carr+$row['n_partecipanti'];

  }
  $event_c=0;
  $sql = "SELECT n_Buy FROM event WHERE creatore='$Mail'";
  $res_sql =mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
  $event_c=$event_c+$row['n_Buy'];
  }
  $event_ac=0;
  $sql = "SELECT n_Buy FROM event WHERE id='$id'";
  $res_sql =mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
  $event_ac=$event_ac+$row['n_Buy'];
  }
  $event_gain=0;
  $sql = "SELECT * FROM event WHERE id='$id'";
  $res_sql =mysqli_query($connection,$sql);
  while($row = mysqli_fetch_array($res_sql)){
  $event_gain=$row['price']*$row['n_Buy'];
  }
  mysqli_close($connection);
  ?>
