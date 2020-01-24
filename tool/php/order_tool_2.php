<?php

$vista="";
$spaziatore="<br/><br/>";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$creaEvento="";
$notLogged="";
$eventiCreati="";
session_start();

if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
$update_query = "SELECT * FROM comments";
$res=mysqli_query($connection, $update_query);
while($row = mysqli_fetch_array($res)){
 $vista=$row['vistada'];
}
if(strpos($vista, $Mail) !== false){
  $badge="";
}else{
  $badge="<span class=\"badge badge-pill badge-danger count\" style=\"border-radius:10px;\"></span>";
}

if($select=="Cliente"){
  $carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item active\"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
  $payButton="  <div class=\"card-footer\"><a href=\"pay.php?id=";
  $payButton2="\" class=\"btn btn-danger btn-sm\">Compra biglietto</a><br/>&nbsp;<br/><a href=\"tool/aggiungiCarrello.php?id=";
  $text="\" class=\"btn btn-dark btn-sm\">Aggiungi al Carrello</a>"."</div>";
  $notification='      &nbsp&nbsp&nbsp
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
         <span class="badge badge-pill badge-warning dropdown-toggle" data-toggle="dropdown">Notification</span>  '.$badge.'
          <ul class="dropdown-menu"></ul>
         </li>
        </ul>';
}
if(!isset($_SESSION['Mail'])&&!isset($_SESSION['select'])){
  $notLogged="          <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"login.php\">Login/SingUp</a>
            </li>";
}
?>
