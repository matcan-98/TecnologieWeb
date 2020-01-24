<!DOCTYPE html>
<html lang="en">
<head>
  <title>Successfully signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .jumbotron{
    background: rgb(63,94,251);
    background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);
  }
  body{
    background: #edeaf6;
  }

  </style>
  <?php
  session_start();
  $Mail="";
  $select="";
  $name="";
  $user="";
  $name=$_SESSION['name'];
  $select=$_SESSION['select'];
  if(!$select=="Guest"){
    $user=", User:";
  }
  ?>
</head>
<body>

<div class="container">
  <br/><br/><br/>
  <div class="jumbotron">
  <h1 class="display-4">Hello<?php echo " ".$name." " ?>!</h1>
  <p class="lead">You successfully singed in, level of access: <?php echo $select ?></p>
  <hr class="my-4">
  <p>Click the botton to go to the login page</p>
  <p class="lead">
<a type="button" href="login.php" class="btn-lg btn-info ">Login</a>
  </p>
</div>

</div>

</body>
</html>
