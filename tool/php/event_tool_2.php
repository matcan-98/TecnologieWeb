<?php


$counter=0;
if(isset($_SESSION['FULLCART'])){
  echo "<h1>".$_SESSION['FULLCART']."</h1>";
}
$sql_Event = "SELECT * FROM event";
$res_Event =mysqli_query($connection,$sql_Event);
$i=0;
while($row = mysqli_fetch_array($res_Event)){
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
             $id_notShow="";
             if($select=="Cliente"){
             $id_notShow=$row['ID'];
             }
             echo /*$pop.$row['ID'].$pop2.*/$payButton.$payButton2.$id_notShow.$text."</div></div>";
                   if($counter==3){
                     echo "</div>";
                     $counter=0;
                   }
     }
     if($counter==1||$counter==2){
       echo "</div>";

     }

?>
