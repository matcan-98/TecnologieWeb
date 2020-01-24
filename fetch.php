<?php
include('connect.php');
session_start();
if(isset($_SESSION['select'])&&isset($_SESSION['Mail'])){
$select=$_SESSION['select'];
$Mail=$_SESSION['Mail'];
}

if(isset($_POST['view'])){

// $con = mysqli_connect("localhost", "root", "", "notif");
$update_query = "SELECT * FROM comments";
$res=mysqli_query($con, $update_query);
while($row = mysqli_fetch_array($res)){
 $vista=$row['vistada'];
}
$concat=$vista.$Mail;

if($_POST["view"] != '')
{

    $update_query = "UPDATE comments SET vistada='$concat'";
    mysqli_query($con, $update_query);
}
$query = "SELECT * FROM comments ORDER BY comment_id DESC LIMIT 6";
$result = mysqli_query($con, $query);
$output = '';
if(mysqli_num_rows($result) > 0)
{
  $contatore=0;
 while($row = mysqli_fetch_array($result))
 {
   $output .= '
   <ul class="list-group">
   <h1"><strong>Notification:</strong></h1>
   <li class="list-group-item list-group-item-secondary">'.$row["comment_subject"].'<br /></li>
   <li class="list-group-item list-group-item-dark">'.$row["comment_text"].'</li>
   </ul>
   ';
   $contatore++;
 }
 if($contatore>6){
   $query = "TRUNCATE `comments`;";
   $result = mysqli_query($con, $query);
 }
}
else{
     $output .= '
     <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}



$status_query = "SELECT * FROM comments WHERE comment_status=0";
$result_query = mysqli_query($con, $status_query);
$count = mysqli_num_rows($result_query);
$data = array(
    'notification' => $output,
    'unseen_notification'  => $count
);

echo json_encode($data);

}

?>
