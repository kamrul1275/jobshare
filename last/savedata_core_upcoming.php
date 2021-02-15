

<?php
require_once("connect.php");

$movie= $_POST['movie'];
$date= $_POST['date'];

$avatar= $_POST['avatar'];

 $insertQuery="INSERT INTO upcoming(movie, date, avatar) VALUES('$movie','$date','$avatar')";

$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: admin_upcoming.php?action=true");
}else{
  header("location: admin_upcoming.php?action=false");
}

?>
