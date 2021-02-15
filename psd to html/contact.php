



<?php

$dbconnect = mysqli_connect('localhost', 'root', '','mydb');


if (isset($_POST['Registration'])){
$Fast=$_POST['FirstName'];
  $Last=$_POST['LastName'];
  $Email=$_POST['Email'];
  $Phone=$_POST['Phone'];
  $Message=$_POST['Message'];






if (!empty($Fast) && ($Last) &&( $Email) && ($Phone) && ($Message)){


$sql=mysqli_query($dbconnect, "INSERT INTO users (First_Name, Last_Name, Email, Phone, Message)
values ( '$Fast', '$Last', '$Email','$Phone','$Message')");

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

    <title>Piche Tech</title>
  </head>
  <body>






<!-- Start Top area -->

<div class="Top-area bg-dark text-light ">
  <div class="Container-fluid">
    <div class="row">
      <div class="col-lg-5">
       <div class="top-left">
          <p class="text-center  m-2"> <i class="fas fa-phone-volume" > </i>
            Call: 01981337121,01307450464 
             <a href="#" class="ml-2 text-light"><i class="fas fa-envelope-open-text " ></i>
         info.pichtech@gmail.com </a> </p>
       </div>
      </div>
      <div class="col-lg-4"></div>
      <div class="col-lg-3">
        <div class="top-right ">
         <div class="social-icon ">
        <ul> 
 <li><a href="https://www.facebook.com/PichTech2020/"><i class="fab fa-facebook-f"></i></a></li>
 <li><a href="https://www.youtube.com/channel/UCSNtLj4mkyb9aN0NtwaqHvg/featured"><i class="fab fa-youtube"></i></a></li>
 <li><a href=""><i class="fab fa-instagram"></i></a></li>
 <li><a href="https://mail.google.com/mail/u/1/#inbox"><i class="fab fa-google-plus-g"></i></a></li>
 <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
        </ul>


         </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Top area -->







<!-- Header area Start -->
 
 <div class="Header ">
  
<nav class="navbar navbar-expand-lg navbar-light  " uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up"   >
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.html">
      <img src="img/kamrul/bluefinal.gif" class="img-fluid w-50" > </a>

    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="About.php">About Us</a>
        
      </li> <li class="nav-item">
        <a class="nav-link" href="Services.php">Services</a>
      </li> 
     
        <a class="nav-link" href="Blog.php">Blog</a>
      </li> <li class="nav-item active">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
      
         </ul>
     </div>     
     </div>     
   </nav>
 
</div>



<!-- Header area End -->


<!-- abou us page  header Start -->


<div class="Contact-page-header ">
  <div class="container">
    <div class="row">
      <div class="col-md-12 py-4">
        <h2 class="text-light" >Contact us</h2>
       
      </div>
    </div>
  </div>
</div>


<!-- abou us page  header End -->



<!-- contact section start -->

<div class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h3 class="text-info text-center">Please fill out this form to contact us</h3>
            


<h3 class="text-success"> <?php  if (isset($sucsses)){
  echo $sucsses; }?> </h3>



 <h3 class="text-danger"> <?php   if (isset( $error)){
             echo $error;} ?> </h3>



            <div class="row mt-4">
<form>
  <div class="form-row text-center">
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="Last name">
    </div>
      <div class="col-md-6">
      <input type="Email" class="form-control" placeholder="Email">
    </div>
    <div class="col-md-6">
      <input type="text" class="form-control" placeholder="Phone Number">
    </div>

  <div class="col-md-12">
    <textarea cols="30" rows="7" class="form-control" placeholder="Message"></textarea>

  </div>
  <div class="col-md-12">
    
     <button type="submit" class="btn btn-block btn-danger">Sent</button>
  </div>



  </div>
</form>
              </div>
           </div>
         </div>
       </div>



      <div class="col-md-4">
        <div class="card"4>
          <div class="card-body">
            <h4>Get In Touch</h4>
           
            <h4>Address</h4>
            <p>Block-A, House #119, Dhamrai, Dhaka</p>
            <h4>Email</h4>
            <p>pichtech188@gmail.com</p>
            <h4>Phone</h4>
            <p>01981337121</p>
            <p>01307450464</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- contact section end -->


<!-- location -->


<div class="location-area py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233397.60897289022!2d89.98539738517616!3d23.930802703342867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755f01c5e53dad5%3A0x3ad631cf555902bc!2sDhamrai%20Upazila!5e0!3m2!1sen!2sbd!4v1586805331520!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


      </div>
    </div>
  </div>
</div>


<!-- location -->





<!-- Footer Area Start -->

<div class="Footer-section bg bg-dark text-center py-2" >
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="text-light">Piche Tech</h2>
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