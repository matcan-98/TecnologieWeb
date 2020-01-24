<?php
$vista="";
$notification="";
$generaNotifica="";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$creaEvento="";
$eventiCreati="";

session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}else{
  echo '<script> location.replace("index.html"); </script>';
}
//header( "refresh:10;url=tool/autoupdate.php?Mail=".$Mail );
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}


if($select=="Cliente"){
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
$carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
$notification='      &nbsp&nbsp&nbsp
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
      <span class="badge badge-pill badge-warning dropdown-toggle" data-toggle="dropdown">Notification</span>  '.$badge.'
        <ul class="dropdown-menu"></ul>
       </li>
      </ul>';
      $fetch="fetch.php";

}
if($select=="Organizzatore"){
  $update_query = "SELECT * FROM commentso";
  $res=mysqli_query($connection, $update_query);
  while($row = mysqli_fetch_array($res)){
   $vista=$row['vistada'];
  }
  if(strpos($vista, $Mail) !== false){
    $badge="";
  }else{
    $badge="<span class=\"badge badge-pill badge-danger count\" style=\"border-radius:10px;\"></span>";
  }
$eventiCreati="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Eventi Creati</a> </li>";
$creaEvento="  <li class=\"nav-item \"><a href=\"crea.php\" class=\"nav-link\">Crea Evento</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
$generaNotifica='          <li class="nav-item">
            <a class="nav-link" href="notification.php">Genera Notifica</a>
          </li>';
          $notification='      &nbsp&nbsp&nbsp
                <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                <span class="badge badge-pill badge-warning dropdown-toggle" data-toggle="dropdown">Notification</span>  '.$badge.'
                  <ul class="dropdown-menu"></ul>
                 </li>
                </ul>';
                $fetch="fetch2.php";
}
?>
