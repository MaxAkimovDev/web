<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Food Runer</title>
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
		      <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/home/index"><span class="flaticon-pizza-1 mr-1"></span>Food<br><small>Runner</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/home/index" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/about/about_us" class="nav-link">About us</a></li>
	          <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/auth/login" class="nav-link">Log In </a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

   
    

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(<?php echo base_url(); ?>assets/images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Food Runner</span></h2>
        </div>
        <div>
  				<p>Fast and accurate delivery of orders from the kitchen to customer desks. Acting as a point of contact between the front of the house and the back of the house. Transferring food orders to cooks, focusing on priorities.</p>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Registration form for customers</h2>
            <h6>Fill the form to start</h6>
          
        
            
          </div>
        </div>
    		<div class="overlay">
          
        </div>
      <div class="container">
        <?php  $error = $this->session->flashdata("registration_error")?>
           
            
    
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
          
          <?php echo form_open(); ?>
            
            <p>Email and password will be used to enter your personal account</p>
          
          <p>Name</p><p><input type="text" value="<?php echo set_value("name") ?>" name="name"/></p>
          <?php $error =form_error("email", "<small class='text-danger'>", "</small>");?>
          
          <p>Email</p><p><input type="email" id = "email" value="<?php echo set_value("email") ?>" name="email"/></p>
          <?php $error =form_error("email", "<small class='text-danger'>", "</small>");?>
          <span id="email-checked">  </span>
          <p>Password</p><p><input type="password"   name="password"/></p>
          <?php $error =form_error("password", "<small class='text-danger'>", "</small>");?>
          
         
          <p>Confirm password</p><p><input type="password"   name="confirm-password"/></p>
          <?php $error =form_error("confirm-password", "<small class='text-danger'>", "</small>");?>
          
          

          
          <p><input class="btn" type="submit" value="Register" name="submit"/></p>
          
          <?php echo form_close(); ?>
        
        </div>
    	</div>
    </div>
    </section>

		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(<?php echo base_url(); ?>assets/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="2432">0</strong>
		              	<span>Dishes from around the world</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="102475">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="2234">0</strong>
		              	<span>Restaurants</span>
		              </div>
		            </div>
		          </div>
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
                <li class="ftco-animate"><a href="https://twitter.com/login"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/?hl=en"><span class="icon-instagram"></span></a></li>
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
                    <div><span class="icon-calendar"></span> Jan 15, 2020</div>
                    <div><span class="icon-person"></span> Fred Trix</div>
                    <div><span class="icon-chat"></span> 19</div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?php echo base_url(); ?>assets/images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="https://www.discusscooking.com/forums/">How to make pasta even tastier</a></h3>
                  <div class="meta">
                    <div><span class="icon-calendar"></span> Mar 5, 2020</div>
                    <div><span class="icon-person"></span> Lisa Berry</div>
                    <div><span class="icon-chat"></span> 25</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><span>Cooked</span></li>
                <li><span>Deliver</span></li>
                <li><span>Quality Foods</span></li>
                <li><span>Mixed</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Campus Las Lagunillas, s/n, 23071 Jaén</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+34631673280</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">info@foodrunner.com</span></li>
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


  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.timepicker.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url() ?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>
  <script> 
  base_url = '<?php echo base_url(); ?>';
   $(document).ready(function() {

    $('#email').change(function() {

     var email=$('#email').val();

     if(email!='')
   {

    $.ajax({
     url: base_url+'index.php/auth/email_availability',
     method: "POST",
     data: {email:email},
     success:function(data) {

      $('#email-checked').html(data);
     }

    })
   }
    })
   })
  </script>
  </body>
</html>