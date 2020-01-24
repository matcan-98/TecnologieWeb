<?php

$vista="";
  $generaNotifica="";
  $spaziatore="<br/><br/>";
  $areaPersonale="";
  $modify_event="";
  $notification="";
  $TotaleCarrello=0;
  $prezzo=0;
  $set=0;
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
  $carrello="  <li class=\"nav-item active\"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
  $payButton="  <div class=\"card-footer\"><a href=\"pay.php?id=";
  $payButton2="\" class=\"btn btn-danger btn-sm\">Compra biglietto</a><br/>&nbsp;<br/><a href=\"tool/rimuoviCarrello.php?id=";
  $text="\" class=\"btn btn-dark btn-sm\">Rimuovi dal Carrello</a>"."</div>";
  $notification='      &nbsp&nbsp&nbsp
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
         <span class="badge badge-pill badge-warning dropdown-toggle" data-toggle="dropdown">Notification</span> '.$badge.'
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
  $eventiCreati="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link active\">Eventi Creati</a> </li>";
  $creaEvento="  <li class=\"nav-item \"><a href=\"crea.php\" class=\"nav-link\">Crea Evento</a> </li>";
  $logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
  $payButton="  <div class=\"card-footer\"><a href=\"ecount.php?id=";
  $payButton2="\" class=\"btn btn-warning btn-sm\">Guarda Partecipanti</a><br/>&nbsp;<br/><a href=\"tool/rimuoviEvento.php?id=";
  $text="\" class=\"btn btn-dark btn-sm\">Rimuovi Evento</a>"."</div>";
  $modify_event="<a href=\"update.php?id=";
  $modify_event2="\" class=\"btn btn-danger btn-sm\">Modifica Evento</a>";
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
  if(!isset($_SESSION['Mail'])&&!isset($_SESSION['select'])){
  $notLogged="          <li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">Login/SingUp</a></li>";
}

?>
