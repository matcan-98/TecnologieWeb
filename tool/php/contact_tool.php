<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passErr = "";
$name_c = $email = $gender = $comment =$selected= "";
$email = $comment="";
$uno=$due=0;
$singup=0;
$robot="si";
if ($_SERVER["REQUEST_METHOD"] == "POST") {




  if(isset($_POST['selected'])){
    $selected=test_input($_POST['selected']);
  }


  if (empty($_POST["name_c"])) {
    $nameErr = "Name is required";
  } else {
    $name_c = test_input($_POST["name_c"]);
    }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }else{
        $uno=1;
        $singup=1;
    }
  }

  if (empty($_POST["comment"])) {
    $passErr = "comment is required";
  } else {
    $comment = test_input($_POST["comment"]);
    $due=1;
    $singup=1;
  }

  if (!empty($_POST["robot"])) {
    $robot="no";
  }else{
    $robot="si";
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
$vista="";
$notification="";
$areaPersonale="";
$mailform='      <div class="form-group">
          <input type="text" class="form-control" name="email" title="form" placeholder="Your Email *" value="<?php echo $email;?>" />
      </div>';
$generaNotifica="";
$carrello="";
$logout="";
$name="";
$select="";
$footerCard="          <div class=\"card-body\"><h2 class=\"card-title\">Esegui il login</h2><p class=\"card-text\">così facendo potrai accedere a un mondo di offerte</p></div>  <div class=\"card-footer\"><a href=\"login.php\" class=\"btn btn-primary btn-sm\">Start Now!</a>";
$Mail="";
$creaEvento="";
$notLogged="          <li class=\"nav-item\"><a class=\"nav-link\" href=\"login.php\">Login/SingUp</a></li>";
$eventShow="";
$eventiCreati="";
$linkForHome="index.html";
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
$linkForHome="logged.php";
$notLogged="";
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
  if(isset($_SESSION['Mail'])){
  if(strpos($vista, $Mail) !== false){
    $badge="";
  }else{
    $badge="<span class=\"badge badge-pill badge-danger count\" style=\"border-radius:10px;\"></span>";
  }}
$carrello="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Carrello</a> </li>"."<li class=\"nav-item \"><a href=\"order.php\" class=\"nav-link\">Ordini</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
$eventShow="          <li class=\"nav-item\"><a class=\"nav-link\" href=\"event.php\">Event</a></li>";
$footerCard="          <div class=\"card-body\"><h2 class=\"card-title\">Accedi al carrello</h2><p class=\"card-text\">Aggiungi i tuoi eventi preferiti</p></div>  <div class=\"card-footer\"><a href=\"carrello.php\" class=\"btn btn-primary btn-sm\">Start Now!</a>";
$notLogged="";
$notification='      &nbsp&nbsp&nbsp
      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
       <span class="badge badge-pill badge-warning dropdown-toggle" data-toggle="dropdown">Notification</span> '.$badge.'
        <ul class="dropdown-menu"></ul>
       </li>
      </ul>';
      $fetch="fetch.php";
$mailform="";
}
if($select=="Organizzatore"){
  $update_query = "SELECT * FROM commentso";
  $res=mysqli_query($connection, $update_query);
  while($row = mysqli_fetch_array($res)){
   $vista=$row['vistada'];
  }
  if(isset($_SESSION['Mail'])){
  if(strpos($vista, $Mail) !== false){
    $badge="";
  }else{
    $badge="<span class=\"badge badge-pill badge-danger count\" style=\"border-radius:10px;\"></span>";
  }}
$eventiCreati="  <li class=\"nav-item \"><a href=\"carrello.php\" class=\"nav-link\">Eventi Creati</a> </li>";
$creaEvento="  <li class=\"nav-item \"><a href=\"crea.php\" class=\"nav-link\">Crea Evento</a> </li>";
$logout="  <li class=\"nav-item \"><a href=\"tool/logout.php\" class=\"btn btn-light btn-sm\">Logout: ".$Mail."</a>  </li>";
$eventShow="          <li class=\"nav-item\"><a class=\"nav-link\" href=\"event.php\">Event</a></li>";
$footerCard="<div class=\"card-body\"><h2 class=\"card-title\">Crea il tuo evento</h2><p class=\"card-text\">Attira clienti creando il tuo evento personale!</p></div>  <div class=\"card-footer\"><a href=\"crea.php\" class=\"btn btn-primary btn-sm\">Start Now!</a>";
$notLogged="";
$generaNotifica='          <li class="nav-item">
            <a class="nav-link" href="notification.php">Genera Notifica</a>
          </li>';
          $notification='      &nbsp&nbsp&nbsp
                <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                 <span class="badge badge-pill badge-warning dropdown-toggle" data-toggle="dropdown">Notification</span> '.$badge.'
                  <ul class="dropdown-menu"></ul>
                 </li>
                </ul>';
                $fetch="fetch2.php";
                $mailform="";
}

?>
