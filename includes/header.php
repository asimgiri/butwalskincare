
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Butwal Skin Care</title>
  <link rel="stylesheet" href="css\reset.css" type="text/css">
  <link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets\select2\css\select2.min.css" type="text/css">
  <link rel="stylesheet" href="assets\font-awesome\css\font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets\magnific-popup\css\magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="assets\iconmoon\css\iconmoon.css" type="text/css">
  <link rel="stylesheet" href="assets\owl-carousel\css\owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="assets\fancybox\jquery.fancybox.css" type="text/css">
  <link rel="stylesheet" href="css\animate.css" type="text/css">
  <link rel="stylesheet" href="css\custom.css" type="text/css">
  <!-- <link rel="shortcut icon" type="image/x-icon" href="images\favicon.ico"> -->
</head>

<body>
  <!-- Start Preloader -->
  <div id="loading">
    <div class="element">
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
  </div>
  <!-- End Preloader -->

  <!-- / Login & sign-up Start! \ -->
  <div class="login_sign_up_popup" id="loginform">
    <div class="login-form">
      <div class="top-sec">
        <h2>Login</h2>
        <form action="/action_page.php">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="demonstration imageBased">
              <input id="checkboxImageBased1" name="checkboxImageBased" type="checkbox">
              <label for="checkboxImageBased1" class="control control--checkbox">Remember Me</label>
            </div>
            <a href="#" class="forgot-pswd">Forgot Password?</a>
          </div>
          <button type="submit" class="btn btn-default submit-btn">Login</button>
        </form>
        <span class="arrowDown"></span>
      </div>
      <div class="bottom-sec">
        <ul>
          <li>
            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Login With Facebook</a>
          </li>
          <li>
            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Login With Twitter</a>
          </li>
        </ul>
        <p>New User ? <a href="#">Create an Account</a></p>
      </div>
    </div>
  </div>
  <div id="sign-up" class="login_sign_up_popup">
    <div class="sign-up-form">
      <div class="top-sec">
        <h2>Sign Up</h2>
        <form action="/action_page.php">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="fname" placeholder="First Name *" required="">
            </div>
            <div class="input-group">
              <input type="text" class="lname" placeholder="Last Name *" required="">
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="input-medium bfh-phone" placeholder="Phone *" required="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email *" required="">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password *" required="">
          </div>
          <button type="submit" class="btn btn-default submit-btn">Sign Up</button>
        </form>
        <span class="arrowDown"></span>
      </div>
      <div class="bottom-sec">
        <ul>
          <li>
            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Sign Up With Facebook</a>
          </li>
          <li>
            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>Sign Up With Twitter</a>
          </li>
        </ul>
        <p>Already have an account? <a href="#">Login</a></p>
      </div>
    </div>
  </div>
  <!-- / Login & sign-up end! \ -->

  <!-- Start Header -->
  <header>

    <!-- Start Header Middle -->
    <div class="header-middle">
      <div class="container">
        <div class="logo">
          <a href="index.php">
            <img src="images\logo.png" class="img-responsive" alt="">
          </a>
        </div>
        <div class="right">
          <div class="poppup-forms clearfix">
            <ul class="hidden-xs">
              <!-- <li><a href="#loginform" class="loginform">+977-1-448-9035</a></li>
              <li><a href="#sign-up" class="sign-upform">something@example.com</a></li> -->
              <li><a href="" class=""><img src="images/icons/smartphone.png" alt="" width="25px" class="mr-2"> +977-1-448-9035</a></li>
              <li><a href="" class=""><img src="images/icons/mail.png" alt="" width="25px" class="mr-2"> something@example.com</a></li>
            </ul>
          </div>
          <div class="book-appointment">
            <a href="appointment_form.php" class="btn-book btn">Book An Appointment</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header Middle -->

    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-inverse">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto nav">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about-us.php">About</a></li>
            <li class="dropdown">
              <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Our Services</a>
              <ul class="dropdown-menu">
                <li><a href="services-detail.php">Service 1</a></li>
                <li><a href="services-detail.php">Service 2</a></li>
                <li><a href="services-detail.php">Service 3</a></li>
                <li class="dropdown">
                  <a href="services-detail.php" class="dropdown-toggle" data-toggle="dropdown">Demo 3</a>
                  <ul class="dropdown-menu">
                    <li><a href="services-detail.php">Demo 4</a></li>
                    <li><a href="services-detail.php">Demo 5</a></li>
                    <li><a href="services-detail.php">Demo 6</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="doctors.php">Doctors</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="book-mobile"><a href="appointment_form.php">Book An Appointment</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input placeholder="Search" class="form-control" type="text">
            <button class="search-btn"><span class="icon-search-icon"></span></button>
          </form>
        </div>
      </div>
    </nav>
    <!-- End Navigation -->

  </header>
  <!-- End Header -->
