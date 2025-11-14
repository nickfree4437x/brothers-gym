<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>General training</title>

    <!-- External css -->
    <link rel="stylesheet" type="text/css" href="stryle.css">
    <style type="text/css">
      html {
        scroll-behavior: smooth; /* Enables smooth scrolling */
    }
    .navbar{
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #333;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      padding: 10px 0;
      z-index: 1000;
    }
    .logo{
      margin-left: 30px;
    }
    .navbar .navbar-brand{
     font-weight: 600;
     font-family: Times New Roman;
    }
    .navbar .navbar-nav{
      list-style: none;
      padding: 0;
      margin: 0;
      float: right;
    }
    .navbar .navbar-nav .nav-item{
      display: inline;
      position: relative;
      left: 100px;
      margin-left: 110px;
    }
    .navbar .navbar-nav .nav-item .nav-link{
      color: #0020C2;
      text-decoration: none;
      font-size: 18px;
    }
    .navbar .navbar-nav .nav-item .nav-link:hover {
      color: #f0a500;
    }
    .navbar .navbar-nav .nav-item .nav-link i{
      font-size: 15px;
    }
   .join-btn {
      background-color: #0020C2;
      color: white;
      padding: 10px 20px;
      font-size: 15px;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      margin-right: 70px;
      }
    .join-btn:hover {
        background: #ff4500;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: translateY(-3px);
     }
    .join-btn:active {
      transform: translateY(1px);
    }
    h2 {
        color: #333;
    }
    p {
        color: #666;
        line-height: 1.6;
    }
    .image-gallery {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    .image-gallery img {
        width: 30%;
        border-radius: 8px;
    }
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  

    </style>
  </head>
  <body>
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img class="logo" src="logo.jpg" width="50" height="50">
    <span class="brt" style=" font-size: 25px;position: relative;top: 3px;">BROTHER'S <span style="color: #f0a500;"> GYM</span></span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fas fa-home icon" title="Home"></i> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#programs"><i class="fas fa-cogs icon" title="Program"></i> Program</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-concierge-bell icon" title="Services"></i> Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="general.php" style="color: #0020C2;">General Training</a>
          <a class="dropdown-item" href="personal.php" style="color: #0020C2;">Personal Training</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="body.php" style="color: #0020C2;">Body Transformation</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"> <i class="fas fa-info-circle icon" title="About"></i> About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
       <button class="join-btn" type="button" data-toggle="modal" data-target="#joinNowModal">
          Join Now
       </button>

       <!-- Modal -->

      </form>
  </div>
</nav>

   <!-- Modal -->


    <div class="modal fade" id="joinNowModal" tabindex="-1" role="dialog" aria-labelledby="joinNowModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="joinNowModalLabel">Join Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form action="submit.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="last_name" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="contact" class="form-control" id="contact" placeholder="Enter your contact number" required>
                        </div>
                        <div class="form-group">
                            <select name="gender" id="gender" class="form-control" required>
                               <option value="select">Select Gender</option>
                               <option value="Male">Male</option>
                               <option value="Female">Female</option>
                              <option value="other">other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Enter your message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-block" style="background-color: #0020C2; color: white; font-weight: 500;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

      <div class="container">
  
  <h1 class="text-center" style="margin-top: 100px;">General Training</h1>
    <br>
   <p>General fitness training works towards broad goals of overall health and well-being, rather than narrow goals of sport competition, larger muscles, or concerns over appearance. A regular moderate workout regimen and a healthy diet can improve general appearance markers of good health such as muscle tone, healthy skin, hair, and nails while preventing age or lifestyle-related reductions in health and the series of heart and organ failures that accompany inactivity and poor diet.</p>
<br>
<hr>
<br>
    <div class="image-gallery">
        <img src="images/general training 1.jpg" alt="Image 1">
        <img src="images/general training 2.jpg" alt="Image 2">
        <img src="images/general training 3.jpg" alt="Image 3">
    </div>
<br>
<hr>
<br>
<br>
</div>


  
 <!-- footer -->

 <footer class="bg-black text-center text-lg-start" style="background: grey;" id="book">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
        <img src="logo1.jpg" class="footer-logo" width="150" height="140" style="border-radius: 10px; margin-left: 100px;">
         <br><br><br>
        <p class="take" style="color: white; font-size: 1rem;">
           Take the first step towards a healthier, stronger you with our unbeatable pricing plans.
            Let's sweat, achieve, and conquer together!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <p class="text-uppercase" style="color: white; font-weight: 500;">
          Not a member? join now & get 2-days Free trial
        </p>

        <ul class="list-unstyled mb-0">
         <form style="color:ghostwhite;" action="submit.php" method="POST">
    <label for="fname">First Name:</label><br>
    <input type="text" name="first_name"><br>
    <label for="lname">Last Name:</label><br>
    <input type="text" name="last_name"><br>
    <label for="email">Email:</label><br>
    <input type="text" name="email"><br>
    <label for="co">Contact:</label><br>
    <input type="number" name="contact"><br>
    <label for="gender">Select the Gender:</label>
    <select name="gender" id="gender">
    <option value="select">select</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="other">other</option>
  </select><br><br>
  <label for="add">your message here:</label><br>
  <textarea name="message" id="add" placeholder="type your message here..." maxlength="75"></textarea><br>
  <input type="submit" value="submit">
</form>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <p class="text-uppercase mb-0" style="color: white;">About Us</p>
        <br><br>
        <ul class="list-unstyled">
           <p style="color: white;">Brother"s GYM <br>Vpo Nihal Khera(dist. fazilka)<br>8360580674,6375665987</p>
        </ul>

       <div class="footer__col ">
        <p style="color: white;" class="text-uppercase mb-0">Menu</p>
         <br>
        <a href="#" class="hmw" style="color: white;">home</a><br><br>
        <a href="#" class="hmw" style="color: white;">about</a><br><br>
        <a href="#" class="hmw" style="color: white;">service</a>
      </div>

      </div>



      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); font-weight: 500;">
    ©2024 Copyright:
    <span style="color: white; font-weight: 500;"> BROTHER'S GYM</span>
  </div>
  <!-- Copyright -->
</footer>
</div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>