

<?php
require_once("connect.php");

$movie= $_POST['movie'];

$_2D= implode(',', $_POST['2D']);
$_3D= implode(',', $_POST['3D']);
$_4D= implode(',', $_POST['4D']);

$_2dprice= implode(',', $_POST['2dprice']);
$_3dprice= implode(',', $_POST['3dprice']);
$_4dprice= implode(',', $_POST['4dprice']);

$Saturday= implode(',', $_POST['Saturday']);
$Sunday= implode(',', $_POST['Sunday']);
$Monday= implode(',', $_POST['Monday']);
$Tuesday= implode(',', $_POST['Tuesday']);
$Wednesday= implode(',', $_POST['Wednesday']);
$Thursday= implode(',', $_POST['Thursday']);
$Friday= implode(',', $_POST['Friday']);

$screen11= implode(',', $_POST['screen11']);
$screen12= implode(',', $_POST['screen12']);
$screen13= implode(',', $_POST['screen13']);

$screen21= implode(',', $_POST['screen21']);
$screen22= implode(',', $_POST['screen22']);
$screen23= implode(',', $_POST['screen23']);

$screen31= implode(',', $_POST['screen31']);
$screen32= implode(',', $_POST['screen32']);
$screen33= implode(',', $_POST['screen33']);

$screen41= implode(',', $_POST['screen41']);
$screen42= implode(',', $_POST['screen42']);
$screen43= implode(',', $_POST['screen43']);

$screen51= implode(',', $_POST['screen51']);
$screen52= implode(',', $_POST['screen52']);
$screen53= implode(',', $_POST['screen53']);

$screen61= implode(',', $_POST['screen61']);
$screen62= implode(',', $_POST['screen62']);
$screen63= implode(',', $_POST['screen63']);

$screen71= implode(',', $_POST['screen71']);
$screen72= implode(',', $_POST['screen72']);
$screen73= implode(',', $_POST['screen73']);





$avatar= $_POST['avatar'];

 $insertQuery="INSERT INTO admin(movie, 2D, 3D, 4D, 2dprice, 3dprice, 4dprice, Saturday, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, screen11, screen12, screen13, screen21, screen22, screen23, screen31, screen32, screen33, screen41, screen42, screen43, screen51, screen52, screen53, screen61, screen62, screen63, screen71, screen72, screen73, avatar) VALUES('$movie','$_2D','$_3D','$_4D','$_2dprice','$_3dprice','$_4dprice','$Saturday','$Sunday','$Monday','$Tuesday','$Wednesday','$Thursday','$Friday','$screen11','$screen12','$screen13','$screen21','$screen22','$screen23','$screen31','$screen32','$screen33','$screen41','$screen42','$screen43','$screen51','$screen52','$screen53','$screen61','$screen62','$screen63','$screen71','$screen72','$screen73','$avatar')";



$runQuery = mysqli_query($connect,$insertQuery);

if($runQuery==true){
  header("location: admin_data.php?action=true");
}else{
  header("location: admin_data.php?action=false");
}

?>
