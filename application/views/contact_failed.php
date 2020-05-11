<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Runner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.timepicker.css">
  
  
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flaticon.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
          <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home/index"><img src="https://img.icons8.com/cotton/64/000000/trainers.png"/>Food<br><small>Runner</small></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <img src="https://img.icons8.com/plasticine/32/000000/squared-menu.png"/> Menu
          </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item "><a href="<?php echo base_url(); ?>index.php/home/index" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/auth/login" class="nav-link">Log in</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <section class="ftco-section ftco-services">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4"></h2>
            <h6>Something went wrong. Try again.</h6>

          </div>
        </div>
      </div>
      </div>
    </section>
    
    <footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>We are a service for searching, buying and providing dishes from restaurants.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="https://twitter.com/login"><img src="https://img.icons8.com/doodle/48/000000/old-twitter-logo.png"/></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/"><img src="https://img.icons8.com/doodle/48/000000/facebook-new.png"/></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/?hl=en"><img src="https://img.icons8.com/doodle/48/000000/instagram--v1.png"/></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url(); ?>assets/images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="https://www.discusscooking.com/forums/">How prepare the tastiest pasta</a></h3>
                  <div class="meta">
                    <div><img src="https://img.icons8.com/ios/16/000000/calendar-12.png"/> Jan 15, 2020</div>
                    <div><img src="https://img.icons8.com/ios/16/000000/standing-man.png"/> Fred Trix</div>
                    <div><img src="https://img.icons8.com/ios/16/000000/chat.png"/> 19</div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url(); ?>assets/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="https://www.discusscooking.com/forums/">How to make pasta even tastier</a></h3>
                  <div class="meta">
                    <div><img src="https://img.icons8.com/ios/16/000000/calendar-12.png"/> Mar 5, 2020</div>
                    <div><img src="https://img.icons8.com/ios/16/000000/standing-man.png"/> Lisa Berry</div>
                    <div><img src="https://img.icons8.com/ios/16/000000/chat.png"/> 25</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li>Cooked</li>
                <li>Deliver</li>
                <li>Quality Foods</li>
                <li>Mixed</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><img src="https://img.icons8.com/ios/24/000000/marker.png"/><span class="text"> Campus Las Lagunillas, s/n, 23071 Jaén</span></li>
                  <li><img src="https://img.icons8.com/ios/24/000000/number-pad.png"/><span class="text"> +34631673280</span></li>
                  <li><img src="https://img.icons8.com/ios/24/000000/filled-message.png"/><span class="text"> info@foodrunner.com</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by Max Akimov</a>
      </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url() ?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>
  </body>
</html>