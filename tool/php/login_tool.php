<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $passErr = "";
$name = $email = $gender = $pass =$select= "";
$email_s = $pass_s="";
$uno=$due=0;
$signup=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


if(isset($_POST['select'])){
  $select=test_input($_POST['select']);
}


      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
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
        }
      }
      if (empty($_POST["pass"])) {
        $passErr = "password is required";
      } else {
        $pass = test_input($_POST["pass"]);
        $due=1;
      }


      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $signup=1;
        $gender = test_input($_POST["gender"]);
      }


      if (empty($_POST["email_s"])) {
        $emailErr = "Email is required";
      } else {
        $email_s = test_input($_POST["email_s"]);
        // check if e-mail address is well-formed
        if (!filter_var($email_s, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }else{
            $uno=1;
            $signup=1;
        }
      }

      if (empty($_POST["pass_s"])) {
        $passErr = "password is required";
      } else {
        $pass_s = test_input($_POST["pass_s"]);
        $due=1;
        $signup=1;
      }
}
session_start();
if(isset($_POST['email'])){
  $_SESSION['Mail'] = htmlentities($_POST['email']);
}
if(isset($_POST['name'])){
  $_SESSION['name'] = htmlentities($_POST['name']);
}
if(isset($_POST['select'])){
  $_SESSION['select'] = htmlentities($_POST['select']);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
