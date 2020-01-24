<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Event</title>
  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tool/popup_css/popup.css" rel="stylesheet">
  <style>
  body{
    padding-top: 56px;
  }
  </style>


<?php
include 'tool/php/logged_tool.php';
?>
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
          <li class="nav-item active">
            <a class="nav-link" href="logged.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="event.php">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <?php echo $generaNotifica;?>
          <?php echo $carrello.$creaEvento.$eventiCreati.$logout ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/benvenuto.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/planner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/planner3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>      </div>
      <div class="col-lg-5">
        <h1 class="font-weight-light"><?php echo "Email: ".$Mail ?></h1>
          <h1 class="font-weight-light"><?php echo "Level of access: ".$select ?></h1>
        <p>Crea o Acquista eventi</p>
        <a class="btn btn-warning" href="#">Call to Action!</a>
      </div>
    </div>
<br/><br/><br/><br/>  <br/><br/><br/>
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Contact</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="contact.php" class="btn btn-warning btn-sm">More Info</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Event</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
          </div>
          <div class="card-footer">
            <a href="event.php" class="btn btn-warning btn-sm">More Info</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Login/SingUp</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="login.php" class="btn btn-warning btn-sm">More Info</a>
          </div>
        </div>
      </div>

    </div>
    <br/><br/><br/><br/>  <br/><br/><br/><br/>
  </div>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>
  <div id="soldout" class="overlay">
      <div class="popup">
          <h2>Soldout</h2>
          <a class="close" href="logged.php">&times;</a>
          <div class="content">
            evento SoldOut
          </div>
          <br/>
            <a class="btn btn-warning" href="carrello.php">Creati</a>
      </div>
  </div>
  <div id="expired" class="overlay">
      <div class="popup">
          <h2>expired</h2>
          <a class="close" href="logged.php">&times;</a>
          <div class="content">
            evento espirato è stato cancellato
          </div>
          <br/>
            <a class="btn btn-warning" href="carrello.php">Creati</a>
      </div>
  </div>
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
