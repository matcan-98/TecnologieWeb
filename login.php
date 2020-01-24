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
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #5c5c5c;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
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
    background-color: #5c5c5c;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #5c5c5c;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #5c5c5c;
    font-weight: 600;
    text-decoration: none;
}

</style>
<?php
include 'tool/php/login_tool.php';
?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="logged.php">Event</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login/SignUp</a>
                          <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container login-container">
              <div class="row">
                  <div class="col-md-6 login-form-1">
                      <h3>Login</h3>
                      <form method="post" action="login.php">
                          <div class="form-group">
                              <input type="text" name="email" title="form" class="form-control" placeholder="Your Email *" value="<?php echo $email;?>"/>
                          </div>
                          <div class="form-group">
                              <input type="password" name="pass" title="form" class="form-control" placeholder="Your Password *" value="<?php echo $pass;?>" />
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btnSubmit" title="form" name="login" value="Login" />
                          </div>
                          <div class="form-group">
                              <a href="#" class="ForgetPwd">Forget Password?</a>
                          </div>
                      </form>
                  </div>
                  <div class="col-md-6 login-form-2">
                      <h3>SignUp</h3>
                      <form method="post" action="login.php">
                        <div class="form-group">
                            <input type="text" class="form-control" title="form" name="name" placeholder="Your Name *" value="<?php echo $name;?>" />
                        </div>
                          <div class="form-group">
                              <input type="text" class="form-control" title="form" name="email_s" placeholder="Your Email *" value="<?php echo $email_s;?>" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" title="form" name="pass_s" placeholder="Your Password *" value="<?php echo $pass_s;?>" />
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btnSubmit" title="form" name="signup" value="signup" />
                          </div>
                <div class="form-group">
                <label for="Select-light">Class</label>
                <select class="form-control" id="exampleFormControlSelect1" title="form" name="select">
                  <option>Organizzatore</option>
                  <option>Cliente</option>
                </select>
              </div>

                      </form>
                  </div>
              </div>
          </div>

    </div>
  </div>
<br/><br/><br/><br/>
  <footer class="py-5 bg-dark">
    <br/>
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
      <br/><br/><br/>
    </div>
  </footer>
  <?php
  include 'tool/php/login_tool_2.php';
  ?>
  <script src="local/jquery/jquery.min.js"></script>
  <script src="local/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
