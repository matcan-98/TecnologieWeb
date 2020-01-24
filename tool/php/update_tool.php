<?php


// define variables and set to empty values
$event_dateErr= $event_nameErr = $creator_nameErr =$file_Err=$event_descErr = "";
$event_date = $event_name = $creator_name = $event_desc =$file=$image= "";

$generaNotifica="";
$areaPersonale="";
$carrello="";
$logout="";
$name="";
$select="";
$Mail="";
$creaEvento="";
$notLogged="";
$max_p="";
$max_price="";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}
  $id_Setter="<form method=\"post\" action=\"update.php\" enctype=\"multipart/form-data\">";
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $id_Setter="<form method=\"post\" action=\"update.php?id=".$id."\" enctype=\"multipart/form-data\">";
}
if($select=="Cliente"){
$carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
}
if($select=="Organizzatore"){
$eventiCreati="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Eventi Creati</a> </li>";
$creaEvento="  <li class=\"nav-item \"><a href=\"crea.php\" class=\"nav-link \">Crea Evento</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
$generaNotifica='          <li class="nav-item">
            <a class="nav-link" href="notification.php">Genera Notifica</a>
          </li>';
}
if(!isset($_SESSION['Mail'])&&!isset($_SESSION['select'])){
  $notLogged="          <li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">Login/SingUp</a></li>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["event_name"])) {
    $event_nameErr = "event_name is required";
  } else {
    $event_name = test_input($_POST["event_name"]);
}
if (empty($_POST["max_p"])) {
} else {
  $max_p = test_input($_POST["max_p"]);
}
if (empty($_POST["max_price"])) {
} else {
  $max_price = test_input($_POST["max_price"]);
}
  if (empty($_POST["creator_name"])) {
    $creator_nameErr = "creator_name is required";
  } else {
    $creator_name = test_input($_POST["creator_name"]);
  }
  if (empty($_POST["event_desc"])) {
    $event_descErr = "creator_name is required";
  } else {
    $event_desc = test_input($_POST["event_desc"]);
  }
  if (empty($_POST["event_date"])) {
    $event_dateErr = "event_date is required";
  } else {
    $event_date = test_input($_POST["event_date"]);
  }
  if (empty($_POST["file"])) {
    $file_Err = "file is required";
  } else {
    $file = test_input($_POST["file"]);
  }
}

$msg="";

if (isset($_POST['CreaEvento'])) {
  $image = $_FILES['image']['name'];
  $target = "images/".basename($image);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    $msg = "Image uploaded successfully";
  }else{
    $msg = "Failed to upload image";
  }
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
