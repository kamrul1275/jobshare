
<?php

$dbconnect = mysqli_connect('localhost', 'root', '','protfolio');


if (isset($_POST['Registration'])){


   $Full_Name=$_POST['username'];

  $Email=$_POST['email'];

  $Massage=$_POST['message'];
  
  

if (!empty($Full_Name) &&( $Email) &&( $Massage)){

$sql=mysqli_query($dbconnect, "INSERT INTO users (name, email,message)
values ('$Full_Name', '$Email' , '$Massage')");

if ($sql) {
 
 $sucsses="You're Post Has been succesfully";
}


}else {
  $error= " Plase fill up the requied field";
}
}

?>






<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Personal Portfolio Website</title> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/style.css">


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
   
</head>
<body>
    
s
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
<nav class="navbar">
        <div class="max-width">
            <div class="logo">
<a href="#">Portfo<span>lio.</span></a></div>
<ul class="menu">
<li><a href="#home" class="menu-btn">Home</a></li>
<li><a href="#about" class="menu-btn">About</a></li>
<li><a href="#services" class="menu-btn">Services</a></li>
<li><a href="#skills" class="menu-btn">Skills</a></li>
<li><a href="#teams" class="menu-btn">Teams</a></li>
<li><a href="#contact" class="menu-btn">Contact</a></li>
</ul>
<div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
</div>
</nav>


    <!-- home section start -->



<style>
    

.home  {
    display: flex;
     background: url("images/update.png"),no-repeat center;
    height: 100vh;
    
    min-height: 500px;
    background-size: cover;
    background-attachment: fixed;
    font-family: 'Ubuntu', sans-serif;
    right: 0px;
    bottom: 0px;

}



</style>



    <section class="home" id="home">

        <div class="max-width">
            <div class="home-content">
                <div class="text-1">
Hello, my name is</div>
<div class="text-2">
Kamrul Hassan</div>
<div class="text-3">
And I'm a <span class="typing"></span></div>
<a href="#">Hire me</a>
            </div>
</div>
 
</section>




<div class="test"> <h1>hi everyone</h1></div>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">
About me</h2>
<div class="about-content">
                <div class="column left">
                    <img src="images/kamrulpic1.png" alt="">
                </div>
<div class="column right">
                    <div class="text">
I'm Kamrul and I'm a <span class="typing-2"></span></div>

<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name:</th>
       <td>Md.kamrul Hassan</td>
      
      <tr>
      <th scope="col">Date of birth:</th>
      <td>12-10-1997</td>
    </tr>

 <tr>
    <th scope="col">Address:</th>
     <td>Thana-Road,Dhamrai,Dhaka</td>
 </tr> 

 <tr>
    <th scope="col">Email:</th>
     <td>kamrulhassan5343@gmail.com</td>
 </tr>
 <tr>
    <th scope="col">Phone:</th>
     <td>01981337121</td>
 </tr>
  </thead>
  <tbody>
    
    
  </tbody>
</table>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
<a href="https://mybdjobs.bdjobs.com/mybdjobs/masterview.asp">Download CV</a>
                </div>
</div>
</div>
</section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">
My services</h2>
<div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">
Web Design</div>
<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">
Advertising</div>
<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">
Apps Design</div>
<p>
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem quia sunt, quasi quo illo enim.</p>
</div>
</div>
</div>
</div>
</div>
</section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">
My skills</h2>
<div class="skills-content">
                <div class="column left">
                    <div class="text">
My creative skills & experiences.</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ratione error est recusandae consequatur, iusto illum deleniti quidem impedit, quos quaerat quis minima sequi. Cupiditate recusandae laudantium esse, harum animi aspernatur quisquam et delectus ipsum quam alias quaerat? Quasi hic quidem illum. Ad delectus natus aut hic explicabo minus quod.</p>
<a href="#">Read more</a>
                </div>
<div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
<div class="line html">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
<div class="line css">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
<div class="line js">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
<div class="line php">
</div>
</div>
<div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>


<div class="line mysql">
</div>
</div>
</div>
</div>
</div>
</section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">
My teams</h2>
<div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/ceo.jpg" alt="">
                        <div class="text">
Minhaz Emon</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
<div class="card">
                    <div class="box">
                        <img src="images/ceo.jpg" alt="">
                        <div class="text">
Imran</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>






<div class="card">
                    <div class="box">
                        <img src="images/red1.jpg" alt="">
                        <div class="text">
Reeeeeeeeeeeee</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>













<div class="card">
                    <div class="box">
                        <img src="images/red1.jpg" alt="">
                        <div class="text">
Kaniz Fatema</div>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>
</div>
</div>
</div>
</section>





    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">
Contact Me</h2>
<div class="contact-content">
                <div class="column left">
                    <div class="text">
Get in Touch</div>
<p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
<div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">
Name</div>
<div class="sub-title">
Kamrul hassan</div>
</div>
</div>
<div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">
Address</div>
<div class="sub-title">
Dhaka,Bangladesh</div>
</div>
</div>
<div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">
Email</div>
<div class="sub-title">
Kamrulhassan5343@gmail.com</div>
</div>
</div>
</div>
</div>
<div class="column right">
                    <div class="text">
Message me</div>


<font color="green">
    
<h3 class="text-success"> <?php  if (isset($sucsses)){
  echo $sucsses; }?> </h3>



 <h3 class="text-danger"> <?php   if (isset( $error)){
             echo $error;} ?> </h3>

</font>
<form action="" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="username" placeholder="Name" required>
                            </div>
<div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
</div>
<div class="field">
                            <input type="text" name="message" placeholder="Subject" required>
                        </div>
<div class="field textarea">
                            <!-- Due to more textarea, I got an error so I changed the tag name of this textarea into changeit. -->
                            <changeit cols="30" rows="10" placeholder="Message.." required></changeit>
                        </div>
<div class="button">
                            <button type="submit" name="Registration">Send message</button>
                        </div>
</form>



</div>
</div>
</div>
</section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.facebook.com/profile.php?id=100007120715015">MD.Kamrul Hassan</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

 <!-- Somehow I got an error, so I comment the script tag, just uncomment to use -->
<!-- <script src="script.js"></script> -->

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
   
  <script type="text/javascript" src="js/custom.js"></script>


</body>
</html>





