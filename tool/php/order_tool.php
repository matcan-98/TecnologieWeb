<?php
$i="";
$connection = mysqli_connect('localhost','root','','tec_web');
if(!$connection){
echo 'error:' . mysqli_connect_error();
}
if($select=="Cliente"){
        $_SESSION['FULLCART']="";
  $connection = mysqli_connect('localhost','root','','tec_web');
  if(!$connection){
  echo 'error:' . mysqli_connect_error();
  }
  $sql_Event = "SELECT * FROM event ";
  $res_Event =mysqli_query($connection,$sql_Event);
  $sql_carrello="SELECT * FROM ordinati WHERE Mail='$Mail'";
  $res_carrello =mysqli_query($connection,$sql_carrello);

  $e1="";
  $e2="";
  $e3="";
  $e4="";
  $e5="";
  $e6="";
  $e7="";
  $e8="";
  $e9="";
  $e10="";
  while($row1=mysqli_fetch_array($res_carrello)){
    $e1=$row1['e1'];
    $e2=$row1['e2'];
    $e3=$row1['e3'];
    $e4=$row1['e4'];
    $e5=$row1['e5'];
    $e6=$row1['e6'];
    $e7=$row1['e7'];
    $e8=$row1['e8'];
    $e9=$row1['e9'];
    $e10=$row1['e10'];
  }
  $counter=0;
  $i=0;
  while($row = mysqli_fetch_array($res_Event)){
    if($row['ID']==$e1||$row['ID']==$e2||$row['ID']==$e3||$row['ID']==$e4||$row['ID']
    ==$e5||$row['ID']==$e6||$row['ID']==$e7||$row['ID']==$e8||$row['ID']==$e9||$row['ID']==$e10){
    if($counter==0){
      echo "<div class=\"row\">";
    }
    $counter++;
               echo "<div class=\"col-md-4 mb-5\"><div class=\"card h-100\">";
               echo "<img src=\"".$row['image']."\" class=\"card-img-top\" alt=\"\"><div class=\"card-body\"><h2 class=\"card-title\">" ;
               echo  $row['h_evento']."</h2>";
               echo  "<p class=\"card-text\">" . $row['p_evento'] . "</p></div>";
               echo "<ul class=\"list-group list-group-flush\"><li class=\"list-group-item\">";
               echo  "<strong>organizzatore: </strong>".$row['creatore']."</li>";
               echo "<ul class=\"list-group list-group-flush\"><li class=\"list-group-item\">";
               echo  "<strong>data creazione: </strong>".$row['d_creazione']."</li>";
               echo "  <ul class=\"list-group list-group-flush\"><li class=\"list-group-item\">";
               echo  "<strong>data: </strong>".$row['d_evento']."</li>";
               echo "  <ul class=\"list-group list-group-flush\"><li class=\"list-group-item\">";
               echo  "<strong>prezzo: </strong>".$row['price']." euro"."</li>";
              //      echo $payButton.$row['ID'].$payButton2.$row['ID'].$text."</div></div>";
              $id_E=$row['ID'];
              $sql_Mail_c = "SELECT * FROM more WHERE mail='$Mail'";
              $res_Mail_c =mysqli_query($connection,$sql_Mail_c);
              $sql_Mail = "SELECT * FROM more WHERE eventID='$id_E'";
              $res_Mail =mysqli_query($connection,$sql_Mail);
              if((mysqli_num_rows($res_Mail) > 0)&&(mysqli_num_rows($res_Mail_c) > 0)){
                $sql_M = "SELECT * FROM more WHERE eventID='$id_E'";
                $res_M =mysqli_query($connection,$sql_M);
                while($row = mysqli_fetch_array($res_M)){
                 $numero=$row['numero'];
                }
                echo "<center><p><strong>      biglietti acquistati : ".$numero."</strong></p></center>";
              }

              echo "</div></div>";


               $i++;
                     if($counter==3){
                       echo "</div>";
                       $counter=0;
                     }
       }
         }
       if($counter==1||$counter==2){
         echo "</div>";
       }
}
if($i==0){
  $spaziatore.="<br/><br/><br/><br/><br/><br/>";
}
?>
