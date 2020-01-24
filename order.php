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
include 'tool/php/order_tool_2.php';
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
          <li class="nav-item">
            <a class="nav-link" href="logged.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="event.php">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        <?php echo $carrello.$creaEvento.$eventiCreati.$logout.$notLogged ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
  <br></br><br/><br/><br/><? echo $spaziatore;?><? echo $spaziatore;?><? echo $spaziatore;?>
      <?php
      include 'tool/php/order_tool.php';
      ?>


    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
                <img src="img/opera.jpeg" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="card-title">Opera</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="contact.html" class="btn btn-primary btn-sm">Buy ticket</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card h-100">
                <img src="img/teatro.jpeg" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="card-title">Teatro</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
          </div>
          <div class="card-footer">
            <a href="event.html" class="btn btn-primary btn-sm">Buy ticket</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card h-100">
                <img src="img/party2.jpeg" class="card-img-top" alt="">
          <div class="card-body">
            <h2 class="card-title">Party</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="login.html" class="btn btn-primary btn-sm">Buy ticket</a>
          </div>
        </div>
      </div>

    </div>

  <br/><br/><br/><br/><?php echo $spaziatore;?><?php echo $spaziatore;?>
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
   url:"fetch.php",
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
