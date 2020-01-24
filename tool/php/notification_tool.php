<?php
$notification="";
$generaNotifica="";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$email="";
$name_c="";
$select="";
$Mail="";
$creaEvento="";
$eventiCreati="";
$badge="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}else{
  echo '<script> location.replace("index.html"); </script>';
}
if($select=="Cliente"){
$carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
$notification='      &nbsp&nbsp&nbsp
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <span class="badge badge-pill badge-warning dropdown-toggle" data-toggle="dropdown">Notification</span>
        <ul class="dropdown-menu"></ul>
       </li>
      </ul>';
        $fetch="fetch.php";
}
if($select=="Organizzatore"){
$eventiCreati="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Eventi Creati</a> </li>";
$creaEvento="  <li class=\"nav-item \"><a href=\"crea.php\" class=\"nav-link\">Crea Evento</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
$generaNotifica='          <li class="nav-item active">
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
