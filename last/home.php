<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    
<link rel="stylesheet" type="text/css" href="css/navbar-fixed.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" type="imgse/ x-con" href="img/kamrul/bluefinal.gif">

    <title>Infinity Jobs</title>
  </head>
  <body>







<!-- Header area Start -->
 <div class="Header  bg-light">

  
<nav class="navbar navbar-expand-lg navbar-light   " uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up"   >
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

    <ul class="navbar-nav  mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="dclindex.html">Home </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="About.html">About Us</a>
        
      </li> <li class="nav-item">
        <a class="nav-link" href="Services.html">Services</a>
      </li> 
     
        <a class="nav-link" href="Blog.html">Blog</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="Contact.html">Contact</a>
      </li>
      
         </ul>
     </div>     
     </div>     
   </nav>
 
</div>
<br>


<!-- Header area End -->

























     <h1 class="text-center">Hello, <?php echo $_SESSION['email']; ?></h1>
  <a href="logout.php" class="btn btn-warning" class="text-center"> Logout</a> 
     
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>