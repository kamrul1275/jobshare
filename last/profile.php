<?php
if(!isset($_COOKIE["currentUser"])){
  ("location:home-section.php");
}?>

<?php require_once("header.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Tanvir Ahmed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css" type="text/css">
    <style>
    body{
      background-image: url(photo/bg2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top;
      background-attachment: fixed;
    }
  </style>

    <!-- bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- style css-->
    <link rel="stylesheet" href="profile_style.css">
    <!-- font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


    <title>Infinity Jobs</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand text-dark" href="home-section1.php">Infinity Jobs |</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#ulli">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center"  id="ulli">
      <ul class="navbar-nav ml-auto">
        <li>
          <a class="nav-link  text-dark" href="font1.php">Home</a>
        </li>
        <li>
          <a class="nav-link text-dark" href="profile.php">Profile</a>
        </li>
        
      </ul>

    </div>
      </div>
    </nav>
    <?php
      if(isset($_COOKIE["currentUser"])){
        $currentUserTarget = $_COOKIE["currentUser"];

        $nameQuery= "SELECT * FROM register WHERE username='$currentUserTarget'";
        $runNameQuery = mysqli_query($conn, $nameQuery);

        if($runNameQuery ==true){
          while($getRow = mysqli_fetch_array($runNameQuery)){  ?>


            <div class="profile-section">
              <div class="container text-center text-white">
                <div class="row">
                  <div class="col-md-12">
                    <div class="proimg">
                      <br>

                      <img style="margin-top:30px; margin-left:0px; width:280px; height:300px; border-radius:10px;" class="proimg" src="avatar/<?php echo $getRow['avatar'];?>" alt="">

                    </div>




                    <h3 class="text-light">WELCOME!</h3>
                    <b class="lead display-4 text-dark"> <?php echo $getRow['firstname'];?> </b>
                    <b class="lead display-4 text-dark"> <?php echo $getRow['surname'];?> </b>
                    <hr>

                    <i  style="font-size: 20px;" class=" text-dark"> <?php echo $getRow['email'];?> </i>
                    <br>

                    <b  style="font-size: 20px;" class="  text-dark">Birthday: <?php echo $getRow['birthday'];?> </b>
                    <br>

                    <b  style="font-size: 20px;" class=" display-5 text-dark"> <?php echo $getRow['phone'];?> </b>

                    <br>
                    <br>
                    <br>

                    <a class="mr-20 btn btn-info" href="logout_core.php">Logout</a>
                    <a class="mr-20 btn btn-info" href="changepass.php">Change Password</a>

                    <br><br><br><br><br><br>
                  </div>
                </div>
              </div>
            </div>





            <?php




          }
        }
      }
     ?>



     <div class="bg-dark text-light pt-1">
       <div class="row">
         <hr>
         <div class="col-md-1 mt-1">

         </div>
         <div class="col-md-6">
           <b>Chaya Chobi Motion Limited 2020 © All Rights Reserved.</b>
         </div>
         <div class="col-md-2">

         </div>
         <div class="col-md-3 ">
           <b>Develop by Tanvir & Kashfi</b>
         </div>
       </div>
     </div>
    <!-- bootstrap js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
