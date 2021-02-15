



<?php

$dbconnect = mysqli_connect('localhost', 'root', '','db_test');


if (isset($_POST['Registration'])){
  
$uname=$_POST['name'];
  $pass=$_POST['password'];
  


if (!empty($uname) && ($pass)){


$sql=mysqli_query($dbconnect, "INSERT INTO users (user_name, Password)
values ( '$uname', ' $pass')");

if ($sql) {
  # code...
  $sucsses ="Your Registration has been succesfully";
}


}else {
  $error = " Plase fill up the requied field";
}
}

?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="css/uikit.min.css">

    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    
<link rel="stylesheet" type="text/css" href="css/navbar-fixed.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" type="imgse/ x-con" href="img/kamrul/bluefinal.gif">

    <title>Infinity Jobs</title>
  </head>
  <body>












<!-- contact section start -->

<div class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        




<h2 class="text-center">Modal Login Form</h2>




  
  <form class="modal-content animate" action="" method="post">


 <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>



    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/work-process/laptop.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="name" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button  class=" btn btn-success"  name="Registration" type="submit">Submit</button>
      <label>




<h3 class="text-success"> <?php  if (isset($sucsses)){
  echo $sucsses; }?> </h3>



 <h3 class="text-danger"> <?php   if (isset( $error)){
             echo $error;} ?> </h3>


        
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button class="btn btn-danger" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



               <div class="col-md-2"></div>
           </div>
         </div>
       </div>
       </div>




<!-- contact section end -->






<!-- Footer Area Start -->

<div class="Footer-section bg bg-dark text-center py-2" >
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="text-light">Infinity Jobs</h2>
        <p class="text-light text-center">Copyright &copy; 2020</p>
       

      </div>
    </div>
  </div>
</div>


<!-- Footer Area Start -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/custom.js"></script>
   <script type="text/javascript" src="js/navbar-fixed.js"></script>
   <script type="text/javascript" src="js/uikit.min.js"></script>
   <script type="text/javascript " src="js/uikit-icons.min.js"></script>


 <!--  isotope js library  -->
    <script src="./vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="./vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>


  </body>
</html>