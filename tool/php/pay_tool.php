<?php
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$creaEvento="";
$eventiCreati="";
$id="";
$res_sql="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}
$id = intval($_GET['id']);
if(isset($_GET['n'])){
  $n=$_GET['n'];
}else{
  $n=0;
}
$payThat="?id=".$id."&n=".$n;
$event_price=0;
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
$sql = "SELECT * FROM event WHERE id='$id'";
$res_sql =mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($res_sql)){

  if(!$_GET['n']==0){
    $event_price=$row['price']*$_GET['n'];
  }else{
    $event_price=$row['price'];
  }
}
?>
