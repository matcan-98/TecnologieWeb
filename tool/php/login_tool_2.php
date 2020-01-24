<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['login'])){
              if($uno==1&&$due==1&&$signup==0){
                          $connection = mysqli_connect('localhost','root','','tec_web');
                          if(!$connection){
                          echo 'error:' . mysqli_connect_error();
                          }
                          $sql_Mail_c = "SELECT * FROM loginclient WHERE Mail='$email'";
                          $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
                          $pass=sha1($pass);
                          $sql_Pass_c = "SELECT * FROM loginclient WHERE Password='$pass'";
                          $res_Pass_c =mysqli_query($connection,$sql_Pass_c);
                          $sql_Mail_o = "SELECT * FROM loginorganizer WHERE Mail='$email'";
                          $res_Mail_o =mysqli_query($connection,$sql_Mail_o);
                          $sql_Pass_o = "SELECT * FROM loginorganizer WHERE Password='$pass'";
                          $res_Pass_o =mysqli_query($connection,$sql_Pass_o);
                          if((mysqli_num_rows($res_Mail_c) > 0)&&(mysqli_num_rows($res_Pass_c) > 0)){
                             echo "LOGIN SUCCESFUL";
                               $_SESSION['select'] = "Cliente";
                            echo '<script> location.replace("logged.php"); </script>';
                          }else{
                            echo 'login FAILED';
                           }
                           if((mysqli_num_rows($res_Mail_o) > 0)&&(mysqli_num_rows($res_Pass_o) > 0)){
                             echo "LOGIN SUCCESFUL";
                                $_SESSION['select'] = "Organizzatore";
                            echo '<script> location.replace("tool/autoupdate.php?Mail='.$email.'"); </script>';

                          }else{
                            echo 'login FAILED';
                           }
                          mysqli_close($connection);
              }

    }

    if(!empty($_POST['signup'])){
            $connection = mysqli_connect('localhost','root','','tec_web');
            if(!$connection){
                echo 'error:' . mysqli_connect_error();
            }
            echo "select: ".$select." ";
            if($select=="Organizzatore"){
            $sql_Mail_s = "SELECT * FROM login WHERE Mail='$email_s'";
            $res_Mail_s =mysqli_query($connection,$sql_Mail_s);
            if((mysqli_num_rows($res_Mail_s) > 0)){
                   echo "Mail alredy exist";
             }else{
                   $pass_s = sha1($pass_s);
                   $sql_s="INSERT INTO loginorganizer (name,Mail,Password)"." VALUES ('$name','$email_s','$pass_s')";
                   $result_s =mysqli_query($connection,$sql_s);
                     echo '<script> location.replace("signup.php"); </script>';
             }
            }
            if($select=="Cliente"){
            $sql_Mail_s = "SELECT * FROM login WHERE Mail='$email_s'";
            $res_Mail_s =mysqli_query($connection,$sql_Mail_s);
            if((mysqli_num_rows($res_Mail_s) > 0)){
                   echo "Mail alredy exist";
             }else{
                   $pass_s = sha1($pass_s);
                   $sql_s="INSERT INTO loginclient (name,Mail,Password)"." VALUES ('$name','$email_s','$pass_s')";
                   $result_s =mysqli_query($connection,$sql_s);
                     echo '<script> location.replace("signup.php"); </script>';
             }
            }
            mysqli_close($connection);
    }
}
?>
