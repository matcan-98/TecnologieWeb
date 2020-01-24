<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <style>
  body{
    padding-top: 56px;
  }
.error {color: #FF0000;}
.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #321796;
}
.login-form-2{
    padding: 5%;
    background: #a2d5de;
    box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2), 0 18px 42px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #333;
}
.login-container form{
    padding: 5%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #3d2ae8;
    background-color: #a2d5de;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #a2d5de;
    background-color: #3d2ae8;
}
.login-form-2 .ForgetPwd{
    color: #3d2ae8;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #a2d5de;
    font-weight: 600;
    text-decoration: none;
}

</style>

<?php
// define variables and set to empty values
/*
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
} */
?>
  <title>Event</title>


  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">




<?php
include 'tool/php/contact_tool.php';

/*
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

*/?>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="logged.php">Event</a>
        <?php echo $notification;?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $linkForHome; ?>">Home
            </a>
          </li>
         <?php echo $eventShow;?>
          <li class="nav-item">
            <a class="nav-link active" href="contact.php">Contact</a>
                          <span class="sr-only">(current)</span>
          </li>
          <?php echo $generaNotifica;?>
        <?php echo $carrello.$creaEvento.$eventiCreati.$logout.$notLogged ?>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container login-container">
              <div class="row">
<div class="col-md-2"></div>
                  <div class="col-md-8 login-form-2">
                      <h3>Contattaci</h3>
                      <form method="post" action="contact.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name_c" title="form" placeholder="Your Name *" value="<?php echo $name_c;?>" />
                        </div>
                    <?php echo $mailform;?>
                          <div class="form-group">
                              <textarea type="textarea" class="form-control" name="comment" title="form" rows="10" cols="10" placeholder="Your Comment *" value="<?php echo $comment;?>"> </textarea>
                          </div>

                <div class="form-group">
                <label for="Select-light">Class</label>
                <select class="form-control" title="form" id="exampleFormControlSelect1" name="selected">
                  <option>Azienda</option>
                  <option>Client</option>
                  <option>Esterno</option>
                </select>
              </div>
    <div class="form-group">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" class="form-check-input" id="exampleCheck1" name="robot">
    <label class="form-check-label" for="exampleCheck1">&nbsp&nbspNot a robot</label>
  </div>
  <div class="form-group">
      <input type="submit" class="btnSubmit" name="singup" value="contatta" />
  </div>
                      </form>
                  </div>
              </div>
          </div>


    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){


    $connection = mysqli_connect('localhost','root','','tec_web');
    if(!$connection){
    echo 'error:' . mysqli_connect_error();
  }
  if($select=="Cliente"){
    $sql_s="INSERT INTO contact (name,Mail,Comment,Seleziona,Robot)"." VALUES ('$name_c','$email','$comment','$selected','$robot')";
    $result_s =mysqli_query($connection,$sql_s);
  }else if($select="Organizzatore"){
    $sql_s="INSERT INTO contact (name,Mail,Comment,Seleziona,Robot)"." VALUES ('$name_c','$Mail','$comment','$selected','$robot')";
    $result_s =mysqli_query($connection,$sql_s);
  }else{
    $sql_s="INSERT INTO contact (name,Mail,Comment,Seleziona,Robot)"." VALUES ('$name_c','$Mail','$comment','$selected','$robot')";
    $result_s =mysqli_query($connection,$sql_s);
  }

     echo '<script> location.replace("contact.php"); </script>';


    }
    ?>


    <div class="row">
      <div class="col-md-3 mb-5">
      </div>
      <div class="col-md-3 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Torna alla home page</h2>
            <p class="card-text">torna alla home page, accedi a un mondo di eventi!</p>
          </div>
          <div class="card-footer">
            <a href="index.html" class="btn btn-primary btn-sm">Home</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-5">
        <div class="card h-100">
<?php echo $footerCard;?>
          </div>
        </div>
      </div>


    </div>


<br/>
  </div>



  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>




  <script src="local/jquery/jquery.min.js"></script>
  <script src="local/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

<script>
$(document).ready(function(){

 function load_unseen_notification(view = '')
 {
  $.ajax({
    url:<?php echo '"'.$fetch.'"';?>,
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }

 load_unseen_notification();



 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });

 setInterval(function(){
  load_unseen_notification();;
 }, 5000);

});
</script>

</html>
