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

    <title>Gym- website</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
     color: #0020C2;

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
  h1 {
    font-size: 3.5rem;
    line-height: 1.2;
  }

  .text-warning {
    color: #ff9d00 !important;
  }

  .btn-outline-warning {
    border-width: 2px;
    border-color: #ff9d00;
    color: #ff9d00;
    padding: 10px 20px;
    font-size: 1rem;
  }

  .btn-outline-warning:hover {
    background-color: #ff9d00;
    color: #fff;
  }

  .Started{
    max-width: 100%;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
  }
  .card1 {
    border: none;
    border-radius: 10px;
    transition: all 0.3s ease;
    background-color: grey;
  }

  .card1:hover {
    transform: translateY(-10px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
  }

  .bas{
    position: relative;
    width: 60%;
    height: 40px;
    margin: 0 auto;
    font-size: 20px;
  }

  h2 {
    color: #333;
  }

  p {
    font-size: 0.9rem;
  }
   .icon-container {
    text-align: center;
    margin: 15px;
  }
  .icon-container i {
    font-size: 20px;
    width: 50px;
    height: 30px;
    border-radius: 5px;
    background-color: #f0a500;
    color: white;
    position: relative;
    top: -5px;
  }

    </style>
  </head>
  <body>
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img class="logo" src="images/logo.jpg" width="50" height="50">
    <span class="brt" style=" font-size: 25px;position: relative;top: 3px;">BROTHER'S <span style="color: #f0a500;"> GYM</span></span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-home icon" title="Home"></i> Home</a>
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
          <a class="dropdown-item" href="#" style="color: #0020C2;">Body Transformation</a>
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



 <!-- Main Section -->
  <div class="container">
    <section class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="row w-100">
            <!-- Left Content -->
            <div class="col-md-6 d-flex flex-column justify-content-center text-center text-md-left px-5">
                <h6 class="text-warning font-weight-bold mb-2">GET FIT AND WIN</h6>
                <h1 class="font-weight-bold text-dark">
                    BROTHER'S <br>
                    <span class="text-warning">GYM</span>
                </h1>
                <p class="text-muted mt-3">
                    Unleash your potential and embark on a journey towards a stronger, fitter, and more confident you.
                    Sign up for 'BROTHER'S GYM' now and witness the incredible transformation your body is capable of!
                </p>
                <a href="#programs" type="button" class="btn btn-outline-warning font-weight-bold mt-3">Get Started</a>
            </div>
            <!-- Right Image -->
            <div class="col-md-6 d-flex justify-content-center">
                <img src="gym 1.jpg" width="500" height="500" alt="Fitness Image" class="img-fluid rounded shadow Started">
            </div>
        </div>
    </section>
  </div>

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
                    <form id="joinForm" method="POST" action="submit.php">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" id="fullname" placeholder="Enter your first name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" id="fullname" placeholder="Enter your last name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="contact" class="form-control" id="contact" placeholder="Enter your contact number" required>
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

  <!-- Section: Explore Our Program -->
  <section class="container text-center my-5" id="programs">
    <h2 class="font-weight-bold mb-4">EXPLORE OUR PROGRAM</h2><br><br>
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3 mb-4">
            <div class="card1 shadow-sm h-100 p-3 text-white">
                <div class="icon bg-warning text-center rounded mb-3">
                    <i class="fas fa-dumbbell fa-2x py-2 text-white bas"></i>
                </div>
                <h5 class="font-weight-bold">Strength</h5>
                <p>Embrace the essence of strength as we delve into its various dimensions: physical, mental, and emotional.</p>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-3 mb-4">
            <div class="card1 shadow-sm h-100 p-3 text-white">
                <div class="icon bg-warning text-center rounded mb-3">
                    <i class="fas fa-heartbeat fa-2x py-2 text-white bas"></i>
                </div>
                <h5 class="font-weight-bold">Physical Fitness</h5>
                <p>It encompasses a range of activities that improve health, strength, flexibility, and overall well-being.</p>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-3 mb-4">
            <div class="card1 shadow-sm h-100 p-3 text-white">
                <div class="icon bg-warning text-center rounded mb-3">
                    <i class="fas fa-running fa-2x py-2 text-white bas"></i>
                </div>
                <h5 class="font-weight-bold">Fat Lose</h5>
                <p>Through a combination of workout routines and expert guidance, we'll empower you to reach your goals.</p>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-3 mb-4">
            <div class="card1 shadow-sm h-100 p-3 text-white">
                <div class="icon bg-warning text-center rounded mb-3">
                    <i class="fas fa-weight fa-2x py-2 text-white bas"></i>
                </div>
                <h5 class="font-weight-bold">Weight Gain</h5>
                <p>Designed for individuals, our program offers an effective approach to gaining weight in a sustainable manner.</p>
            </div>
        </div>
        <hr>
    </div>
  </section>


 <!-- Class you get here -->
 <div class="container" style="margin-top: 150px;">
  <div class="row">
    <div class="col">
      <img src="gym 2.jpg" width="500" height="400" style="border-radius: 10px;">
      <br><br>
      <img src="gym 3.jpg" width="300" height="180" style="margin-left: -100px; margin-top: -100px; border-radius: 10px;">
    </div>
    <div class="col">
      <h2 class="font-weight-bold " style="margin-top: 10px; font-weight: 600">THE CLASS YOU WILL GET HERE</h2>
        <p style="text-align: justify; margin-top: 20px; font-size: 1rem;">
          THE CLASSES YOU WILL GET HERE  
          At Brother's Gym, we offer a variety of specialized fitness classes tailored to meet every fitness goal and level. From high-energy Strength Training  sessions designed to build muscle and endurance, to invigorating Cardio Workouts that improve heart health and burn calories, we have it all.Our  Functional Fitness classes focus on movements that enhance your daily performance, while Flexibility & Yoga  sessions help you unwind, stretch, and recover. Whether you're looking to lose weight, gain strength, or simply feel your best, our certified trainers and supportive community will guide you every step of the way. Join us and experience the transformation your body deserves!
        </p>
         <a href="#book" type="button" class="btn btn-outline-warning" style="margin-top: 15px;">Book A class</a>
    </div>
  </div>
  <br><br><br><br>

  <!-- Why-join us -->
  <div class="container">
  <div class="row">
    <div class="col">
      <h2 style="margin-top: 10px;" class="text-center font-weight-bold ">WHY JOIN US ?</h2>
      <p class="section__sub" style="font-size: 1rem; text-align: justify;">
        At Brother's Gym, we believe in more than just workouts — we believe in transforming lives. With state-of-the-art equipment, highly skilled trainers, and a variety of programs tailored to your fitness level, we provide the tools you need to achieve your goals. 
        Our diverse membership base creates a friendly and supportive
        atmosphere, where you can make friends and stay motivated. Our gym fosters a welcoming and inclusive environment, thanks to our diverse membership base. It’s a place where individuals from all walks of life come together, creating a friendly and supportive atmosphere. Here, you can build meaningful connections while staying motivated on your fitness journey. The sense of community encourages members to push each other toward their goals. Whether you’re a beginner or an experienced athlete, you’ll find camaraderie and encouragement every step of the way.
      </p>
    </div>
    <div class="col">
      <div class="" style="width: 30rem;">
        <img class="card-img-top" src="gym5.jpg" height="400" alt="Card image cap" style="margin-left: 40px; border: 1px solid orange;">
      </div>
    </div>
  </div>
  <br>
  <br>

 <!-- Personal training -->

 <div class="card-group">
  <div class="card">
    <div class="card-body" style="background: grey;">
       <div class="icon-container">
        <i class="fas fa-dumbbell"></i>
      </div>
      <h5 class="card-title" style="color: white;">Personal Trainer</h5>
      <p class="card-text" style="color: white;">Unlock your potential with our expert Personal Trainers.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body" style="background: grey;">
      <div class="icon-container">
        <i class="fas fa-running"></i>
     </div>
      <h5 class="card-title" style="color: white;">Practice Sessions</h5>
      <p class="card-text" style="color: white;">Elevate your fitness with practice sessions.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body" style="background: grey;">
      <div class="icon-container">
        <i class="fas fa-user-cog"></i>
      </div>
      <h5 class="card-title" style="color: white;">Good Management</h5>
      <p class="card-text" style="color: white;">Supportive management, for your fitness success.</p>
    </div>
  </div>
</div>
</div>
<br>
<br>
<br>
<br>   

</div>
<div class="">
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
         <form style="color: ghostwhite;" action="submit.php" method="POST">
            <label for="fname">First Name:</label><br>
            <input type="text" name="first_name" required><br>

            <label for="lname">Last Name:</label><br>
            <input type="text" name="last_name" required><br>

            <label for="email">Email:</label><br>
            <input type="text" name="email" required><br>

            <label for="co">Contact:</label><br>
            <input type="number" name="contact" required><br>

            <label for="gender">Select the Gender:</label>
            <select name="gender" id="gender" required>
            <option value="select">select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="other">other</option>
          </select><br><br>

          <label for="add">your message here:</label><br>
          <textarea name="message" id="add" placeholder="type your message here..." maxlength="75" required></textarea><br>
           <button type="submit" class="btn">Submit</button>
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