<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>event_name</title>


  <link href="local/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body{
    padding-top: 56px;
  }
  .upload-btnfile-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }

  .btnfile {
    border: 2px solid #ffba59;
    color: white;
    background-color: #fff1ad;
    padding: 8px 20px;
    border-radius: 8px;
    font-size: 20px;
    font-weight: bold;
  }

  .upload-btnfile-wrapper input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
  }
.error {color: #FF0000;}
.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    background: #fff1ad;

}
.login-form-1 h3{
    text-align: center;
    color: #ffba59;
}
.login-container form{
    padding: 10%;
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
    color: #fff;
    background-color: #ffba59;
}
.login-form-1 .ForgetPwd{
    color: #ffba59;
    font-weight: 600;
    text-decoration: none;
}
</style>
<?php
include 'tool/php/crea_tool.php';
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
  <?php echo $carrello.$creaEvento.$eventiCreati.$logout.$notLogged ?>

        </ul>
      </div>
    </div>
  </nav>


  <div class="container login-container">
              <div class="row">
                  <div class="col-md-12 login-form-1">
                      <h3>Crea Il Tuo Evento</h3>
                      <form method="post" action="crea.php" enctype="multipart/form-data">
                          <div class="form-group">
                              <input type="text" title="form" name="event_name" class="form-control" placeholder="Your event_name *" value="<?php echo $event_name;?>"/>
                          </div>
                          <div class="form-group">
                              <input type="text" title="form" name="event_desc" class="form-control" placeholder="Your event_desc *" value="<?php echo $event_desc;?>" />
                          </div>
                          <div class="form-group">
                              <input type="date" title="form" name="event_date" class="form-control" placeholder="Your event_date *" value="<?php echo $event_date;?>" />
                          </div>
                          <div class="form-group">
                              <input type="number" title="form" min="1" max="250" name="max_p" class="form-control" placeholder="Your max partecipant *" value="<?php echo $max_p;?>" />
                          </div>
                          <div class="form-group">
                              <input type="number" title="form" min="1" max="250" name="max_price" class="form-control" placeholder="Your event price *" value="<?php echo $max_price;?>" />
                          </div>
                          <div class="form-group">
                            <div class="upload-btnfile-wrapper">
                              <button class="btnfile">Upload a file</button>
                              <input type="file" title="form" name="image">
                            </div>
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btnSubmit" name="CreaEvento" value="CreaEvento" />
                          </div>
                      </form>
                  </div>
              </div>
          </div>

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
                  <a href="index.html" class="btn btn-warning btn-sm">Home</a>
                </div>
              </div>
            </div>
              <div class="col-md-3 mb-5">
                <div class="card h-100">
                  <div class="card-body">
                    <h2 class="card-title">Contact</h2>
                    <p class="card-text">contattaci per informazioni o commenti al servizio!</p>
                  </div>
                  <div class="card-footer">
                    <a href="contact.php" class="btn btn-warning btn-sm">Contattaci!</a>
                  </div>
                </div>
              </div>


          </div>
    </div>

  </div>




  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>

  </footer>

  <?php
include 'tool/php/crea_tool_2.php';
?>


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
