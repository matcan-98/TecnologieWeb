<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Event</title>
  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    background: #e8a5e7;
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
    background-color: #e8a5e7;
  }
  .login-form-2 .btnSubmit{
    font-weight: 600;
    color: #e8a5e7;
    background-color: #3d2ae8;
  }
  .login-form-2 .ForgetPwd{
    color: #3d2ae8;
    font-weight: 600;
    text-decoration: none;
  }
  .login-form-1 .ForgetPwd{
    color: #e8a5e7;
    font-weight: 600;
    text-decoration: none;
  }
  .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
  }
  .overlay:target {
    visibility: visible;
    opacity: 1;
  }

  .popup {
    margin: 70px auto;
    padding: 20px;
    background: #2b2b2b;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
  }

  .popup h2 {
    margin-top: 0;
    color: #fff;
    font-family: Tahoma, Arial, sans-serif;
  }
  .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #fff;
  }
  .popup .close:hover {
    color: #fff;
  }
  .popup .content {
    max-height: 30%;
    overflow: auto;
    color: #fff;
  }

  </style>


<?php
  include 'tool/php/notification_tool.php';
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

    <div class="container login-container">
                <div class="row">
  <div class="col-md-2"></div>
                    <div class="col-md-8 login-form-2">
                        <h3>Send Notification</h3>
                        <form method="post" title="form" id="comment_form">
                          <div class="form-group">
                              <label>Enter Subject</label>
                              <input type="text" name="subject"  title="form"id="subject" class="form-control">
                          </div>
                            <div class="form-group">
                                  <label>Enter Comment</label>
                                  <textarea name="comment" title="form" id="comment" class="form-control" rows="5"></textarea>
                            </div>

    <div class="form-group">
        <input type="submit" class="btn btn-dark" name="post" value="Post" />
    </div>
                        </form>
                    </div>
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
            <a href="contact.html" class="btn btn-primary btn-sm">More Info</a>
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
            <a href="event.html" class="btn btn-primary btn-sm">More Info</a>
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
            <a href="login.html" class="btn btn-primary btn-sm">More Info</a>
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
  <script src="local/jquery/jquery.min.js"></script>
  <script src="local/bootstrap/js/bootstrap.bundle.min.js"></script>
  <div id="not" class="overlay">
      <div class="popup">
          <h2>Notifica</h2>
          <a class="close" href="notification.php">&times;</a>
          <div class="content">
            notifica creata correttamente, gli utenti saranno informati
          </div>
          <br/>
            <a class="btn btn-warning" href="notification.php">Continua</a>
      </div>
  </div>
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
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
   location.replace("notification.php#not");
  }
  else
  {
   alert("Both Fields are Required");
  }
 });

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
