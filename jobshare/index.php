<html>
<head>
	<title>Jobs here</title>
	
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/font.css">
<link rel="shortcut icon" href="images/logo.png">

  <!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/uikit.min.css">

    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
    
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

 <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    
<link rel="stylesheet" type="text/css" href="css/navbar-fixed.css">


<link rel="shortcut icon" type="imgse/ x-con" href="img/team/fabiconfinal.png">

<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
  <?php

      session_start();
      if(isset($_POST['submit']))
      {  require_once("config.php");
         $username=$_POST['username'];
         $password=$_POST['password'];
         $type=$_POST['type'];
        
         
        $sql="SELECT * FROM `$type` WHERE username='$username' and password='$password' and status='approved'";
        $result=mysqli_query($connection,$sql);
        if(mysqli_num_rows($result)>0)
        {

          echo"<script>alert('successfully logged in to database')</script>";
          $_SESSION['username']=$username;
          $_SESSION['type']=$type;
          if($type==="user")
          {
            header('location:admin.php');
          }
          else if($type==="freelancer")
          {
            header('location:freelancerhome.php');
          }
          else if($type==="client")
          {
            header('location:clienthome.php');
          }
          
        }
        else{
          echo"<script>alert('Wrong Username or Password!')
          header('location:index.php');
          </script>";
        
        }
        
      }
      


  ?>
	<div >
		<span></span>
		<span ></span>

	</div>
	<div class="grid-container">
  <div class="header"><img src="images/logo.png" style="height: 100px;width: 100px;padding:10px"></div>
  <div class="job">Jobs Here</div>
  <div class="fwhite" style="padding-top: 6%">
  	<button class="button button1" id="Btn">Login</button>
  	<button class="button button1" id="Btn1">Signup</button>
  	
  </div> 
</div>
<div class="addimage">
  	<div class="addtext">
  		<h2 style="font-size:50px">Hire expert freelancers for any job, online</h2>
    <h3>Millions of small businesses use Freelancer to turn their ideas into reality.</h3>
    <button class="button button2" id="Btn2">I want to work</button>
    <button class="button button2" id="Btn3">I want to Hire</button>
  	</div>
  	
  </div> 
  <div>
  	<h3 class="heading">Don't waste your talent.</h3>
  	<h3 class="heading">Choose your skill and get started now.</h3>
  	<div class="grid-container3">
  		<div><img src="images/web.png" style="height: 150px;width: 150px">
        <h2>Web development</h2>
  		</div>
  		<div><img src="images/research.png" style="height: 150px;width:150px">
        <h2>Web Research</h2>
  		</div>
  		<div><img src="images/mobile.png" style="height: 150px;width: 150px">
        <h2>App development</h2>
  		</div>
  		<div><img src="images/designer.png" style="height: 150px;width: 150px">
 		<h2>Graphic Design</h2>
  		</div>
  		
  	</div>
  </div>
 
  <!--------------------------------modal for login---------------------------------------->

    <div id="modal1" class="modal">
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal1').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" class="w3-input" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" class="w3-input" name="password" required>
      <label>Please select your account type</label><br>
      <input type="radio" name="type" value="user" checked required="required">Admin<br>
      <input type="radio" name="type" value="freelancer">Freelancer<br>
      <input type="radio" name="type" value="client">Client<br>
      <input type="submit" value="Submit" name="submit" class="w3-input">  
      
      
    </div>
  </form>
</div>

<!---------------------------------Another model for signup-------------------------------------->

    



    <!-- our team start /\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/ -->



    <section>
        <div class="content">
            <div class="row">
                <div class="team-content">
                    <h2>A digital web studio creating stunning & engaging online experiences</h2>
                    <p>Ford Foundation reduce child mortality fight against oppression refugee disruption pursue these aspirations effect. Free-speech Nelson Mandela change liberal; challenges of our times sustainability institutions.</p>
                    <a href="#">Learn More</a>

                     <h1 class="text-center">Our Team</h1>
                </div>
                <!-- team-content -->


            </div>
            <div class="custom-container">
                <div class="row">
                    <div class="col-4">
                        <div class="team-box">
                            <div class="member-img">
                                <img src="images/team/1.jpg" alt="" class="img-fluid">

                                <div class="member-social-link">
                                    <ul>
                                        <li>
                                            <a href="#" class="fb">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f next-icon"></i>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="lin">
                                                <i class="fab fa-linkedin-in"></i>
                                                <i class="fab fa-linkedin-in next-icon"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ins">
                                                <i class="fab fa-instagram"></i>
                                                <i class="fab fa-instagram next-icon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="member-name">
                                <h4>KAMRUL HASSAN</h4>
                                <span>CEO</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-4">
                        <div class="team-box">
                            <div class="member-img">
                                <img src="images/team/2.jpg" alt="" class="img-fluid">

                                <div class="member-social-link">
                                    <ul>
                                        <li>
                                            <a href="#" class="fb">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f next-icon"></i>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="lin">
                                                <i class="fab fa-linkedin-in"></i>
                                                <i class="fab fa-linkedin-in next-icon"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ins">
                                                <i class="fab fa-instagram"></i>
                                                <i class="fab fa-instagram next-icon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="member-name">
                                <h4>MOHIBUL ISLAM</h4>
                                <span>CO-FOUNDER</span>
                            </div>

                        </div>
                    </div>

                    <div class="col-4">
                        <div class="team-box">
                            <div class="member-img">
                                <img src="images/team/3.jpg" alt="" class="img-fluid">

                                <div class="member-social-link">
                                    <ul>
                                        <li>
                                            <a href="#" class="fb">
                                                <i class="fab fa-facebook-f"></i>
                                                <i class="fab fa-facebook-f next-icon"></i>

                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="lin">
                                                <i class="fab fa-linkedin-in"></i>
                                                <i class="fab fa-linkedin-in next-icon"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ins">
                                                <i class="fab fa-instagram"></i>
                                                <i class="fab fa-instagram next-icon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="member-name">
                                <h4>REJUAN SHUVO</h4>
                                <span>SALES</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   <!-- end our team -->


   <!-- browser area start -->




<!-- LAST PART START  -->

<div class="last-row bg-light ">
   <h1 class="text-center py-5">Browse top job categories</h1>
  <div class="row">
   
    

      <div class="col-md-3">
     
  <ul>
         <li> <a href=""> HTML</a> </li>
         <li> <a href=""> JavaScript</a> </li>
         <li> <a href=""> MySQL</a> </li>
         <li> <a href=""> PHP</a> </li>
         <li> <a href=""> Logo Design</a> </li>
         <li> <a href=""> Banar Design</a> </li>
         <li> <a href=""> Graphics Design</a> </li>
         <li> <a href=""> Photoshop</a> </li>
         <li> <a href=""> WordPress</a> </li>
         <li> <a href=""> Mobile App Development</a> </li>
        
        
        </ul>
      </div>

       <div class="col-md-3">
        
       <ul>
         <li> <a href=""> Excel</a> </li>
         <li> <a href=""> Contain Writer</a> </li>
         <li> <a href=""> Data Scientist</a> </li>
         <li> <a href=""> Python Developer</a> </li>
         <li> <a href=""> Social Media Manager</a> </li>
         <li> <a href=""> UI Designer</a> </li>
         <li> <a href=""> Copywriter</a> </li>
         <li> <a href=""> Facebook Developer</a> </li>
         <li> <a href=""> Resume Writer</a> </li>
         <li> <a href=""> Software Developer</a> </li>
         
         
        
        
        </ul>
      </div>


 <div class="col-md-3">
        
       <ul>
         <li> <a href=""> Bookkeeper</a> </li>
         <li> <a href=""> Database Administrator</a> </li>
         <li> <a href=""> Game Developer</a> </li>
         <li> <a href=""> SEO Expert</a> </li>
         <li> <a href=""> Technical Writer</a> </li>
         <li> <a href=""> Virtual Assistant</a> </li>
         <li> <a href=""> Web Designer</a> </li>
         <li> <a href=""> Sales Consultant</a> </li>
         <li> <a href=""> Article Writing</a> </li>
         <li> <a href=""> Internet Marketing</a> </li>
       
        
        
        </ul>
      </div>
   

      
   
      <div class="col-md-3">
        
     <ul>
         <li> <a href=""> UX Designer</a> </li>
         <li> <a href=""> Article Writing</a> </li>
         <li> <a href=""> Front-End Developer</a> </li>
         <li> <a href=""> Android Developer</a> </li>
         <li> <a href=""> iOS Developer</a> </li>
         <li> <a href=""> C# Programming</a> </li>
         <li> <a href=""> 3D Modelling</a> </li>
         <li> <a href=""> Web Search</a> </li>
         <li> <a href=""> 3D Rendering</a> </li>
         <li> <a href="">eCommerce</a> </li>
  
          </ul>


      </div>
    </div>
  </div>
</div>


   <!-- browser area end -->




<!-- footer area start 22 sha -->

 <div>
    <h2></h2>
     <div class="grid-foot">

    <div>Contact Us<br>+8801234567890<br><br>Email<br>help@jobshere.com<br><br>Address<br>Dhaka, Bangladesh</div>
    <div>Our Resources<br><br>Tools<br>Tutorial<br>Help desk<br>Opportunities</div>
    <div>About us<br><br>How it work<br>Our objectives<br></div>
    <div><br>We provide a common field for client<br> and freelancer so that thye can interact<br> with each other easily.<br> This benifites everyone. <br><br><br>
  </div>
  </div>

<!-- footer area 22.sha -->


<!-- Footer Area Start -->

<div class="Footer-section bg bg-dark text-center py-3" >
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-light">Infinity Jobs</h2>
        <p class="text-light text-center">Copyright &copy; Infinity Jobs 2020</p>

      </div>


<div class="col-lg-2"></div>
      <div class="col-lg-4">
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



<!-- Footer Area Start -->




  <script>

var modal = document.getElementById('modal1');

var nmodal = document.getElementById('modal2');


var btn = document.getElementById("Btn");
var btn1 = document.getElementById("Btn1");
var btn2 = document.getElementById("Btn2");
var btn3 = document.getElementById("Btn3");


var span = document.getElementsByClassName("close")[0];


btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  location.href='signup.php';
}
btn2.onclick = function() {
  modal.style.display = "block";
}
btn3.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}



window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }

  if (event.target == nmodal) {
    nmodal.style.display = "none";
  }

}
</script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   
   <script type="text/javascript" src="js/navbar-fixed.js"></script>
   <script type="text/javascript" src="js/uikit.min.js"></script>
   <script type="text/javascript " src="js/uikit-icons.min.js"></script>
   
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>

  <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>




<script type="text/javascript" src="js/jquery.counterup.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>





<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 10000
        });
    });
  </script>




  
</body>
</html>