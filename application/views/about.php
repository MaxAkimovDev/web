<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
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
            <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/home/index" class="nav-link">Home</a></li>
            <li class="nav-item active"><a href="<?php echo base_url(); ?>index.php/about/about_us" class="nav-link">About us</a></li>
            <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/auth/login" class="nav-link">Log In </a></li>
          </ul>
        </div>
      </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel img" style="background-image: url(<?php echo base_url(); ?>assets/images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(<?php echo base_url(); ?>assets/images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">About</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url(); ?>index.php/home/index">Home</a></span> <span>About</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><img src="https://img.icons8.com/color/24/000000/ringing-phone.png"/></div>
	    					<div class="text">
	    						<h3>+34631673280</h3>
	    						<p>Сall us in any time</p>
	    					</div>
	    				</div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><img src="https://img.icons8.com/color/24/000000/ringing-phone.png"/></div>
                <div class="text">
                  <h3>+34633445669</h3>
                  <p>Сall us in any time</p>
                </div>
              </div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><img src="https://img.icons8.com/color/24/000000/door.png"/></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
          <div class="social d-md-flex pl-md-5 p-4 align-items-center">
            <ul class="social-icon">
              <li class="ftco-animate"><a href="https://twitter.com/login"><img src="https://img.icons8.com/doodle/24/000000/old-twitter-logo.png"/></a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/"><img src="https://img.icons8.com/doodle/24/000000/facebook-new.png"/></a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/?hl=en"><img src="https://img.icons8.com/doodle/24/000000/instagram--v1.png"/></a></li>
            </ul>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
      <div class="one-half img" style="background-image: url(<?php echo base_url(); ?>assets/images/about.jpg);"></div>
      <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4"><span><img src="https://img.icons8.com/doodle/48/000000/pizza--v1.png"/>Food Runner</span></h2>
        </div>
        <div>
          <p>A project designed to simplify the search for food. With the help of our service, any restaurants can publish a list of their available dishes, and the customer(client), viewing a list of all available dishes from different restaurants, quickly selects his favorite and orders it. The project is scalable and constantly under development.</p>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Team</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">The service is developed by a team of students in order to improve their knowledge in the field of web development. This service is scalable and flexible. The main idea of FoodRunner is to provide a platform for both the сustomer and restaurant to add and buy dishes around the world.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(<?php echo base_url(); ?>assets/images/person_Max.jpg);"></div>
      				<div class="info text-center">
      					<h3>Max Akimov</h3>
      					<span class="position">Student-developer</span>
      					<div class="text">
	        				<p>Erazmus student from Ukraine.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(<?php echo base_url(); ?>assets/images/person_second.jpg);"></div>
      				<div class="info text-center">
      					<h3>Ehor Tsyba</h3>
      					<span class="position">Student-developer</span>
      					<div class="text">
	        				<p>Erazmus student from Ukraine.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(<?php echo base_url(); ?>assets/images/person_3.jpg);"></div>
      				<div class="info text-center">
      					<h3>Yana Taranets</h3>
      					<span class="position">Student-developer</span>
      					<div class="text">
	        				<p>Erazmus student from Ukraine.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(<?php echo base_url(); ?>assets/images/person_4.jpg);"></div>
      				<div class="info text-center">
      					<h3>Zahar Rizo</h3>
      					<span class="position">Student-developer</span>
      					<div class="text">
	        				<p>Erazmus student from Ukraine.</p>
	        			</div>
      				</div>
        		</div>
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
		              	<div class="icon"><img src="https://img.icons8.com/bubbles/64/000000/globe-earth.png"/></div>
		              	<strong class="number" data-number="2432"></strong>
		              	<span>Dishes from around the world</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><img src="https://img.icons8.com/color/64/000000/prize.png"/></div>
		              	<strong class="number" data-number="85"></strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><img src="https://img.icons8.com/color/64/000000/winner.png"/></div>
		              	<strong class="number" data-number="102475"></strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><img src="https://img.icons8.com/color/64/000000/restaurant-table.png"/></div>
		              	<strong class="number" data-number="2234"></strong>
		              	<span>Restaurants</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

		
		  <section class="ftco-appointment">
      <div class="overlay"></div>
      <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
          <div class="col-md-6 d-flex align-self-stretch">
            <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0637507774427!2d-3.779843285282762!3d37.78854571914116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6dd7abfa6a10df%3A0xf05fe5191735ab43!2sJaen%20University!5e0!3m2!1sen!2ses!4v1587905535384!5m2!1sen!2ses" width="650" height="600"></iframe>
            </div>
          </div>
          <div class="col-md-6 appointment ftco-animate">
            <h3 class="mb-3">Contact Us</h3>
            <?php echo $this->session->flashdata('msg'); ?>
       <!--  <form action="<?php echo base_url('contact'); ?>" method="post"> -->
        <?php  echo form_open("contact/contact_form")  ?>
              <div class="d-md-flex">
                <div class="form-group">
                  <input name="name" placeholder="Your name" type="text" value="<?php echo set_value('name'); ?>" class="form-control" />
            <?php echo form_error('name', '<span class="text-danger">','</span>'); ?>
                </div>
              </div>
              <div class="d-me-flex">
                <div class="form-group">
                   <input name="email" placeholder="Your e-mail" type="text" value="<?php echo set_value('email'); ?>" class="form-control" />
            <?php echo form_error('email', '<span class="text-danger">','</span>'); ?>
                </div>
              </div>
              <div class="form-group">
            <input name="subject" placeholder="Subject" type="text" value="<?php echo set_value('subject'); ?>" class="form-control" />
              </div>
              <div class="form-group">
                <textarea name="message" rows="4" class="form-control" placeholder="Your message"><?php echo set_value('message'); ?></textarea>
            <?php echo form_error('message', '<span class="text-danger">','</span>'); ?>
              </div>
              <div class="form-group">
                <button name="submit" type="submit" class="btn btn-primary" >Send</button>
                
              </div>
            </form>
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
  </body>
</html>