<?php

include("admin/config/database.php");
$db = $conn;


function get_title($section){
  global $db;
  $query = "SELECT * FROM home_content WHERE content_section='$section'" ;
  $get_result = mysqli_query($db, $query);
  if($get_result){
    $get_row = mysqli_fetch_assoc($get_result);
    return $get_row["title"];
  }else{
    return "Couldn't get get_title query results for ".$section;
  }
  
}

function get_subtitle($section){
  global $db;
  $query = "SELECT * FROM home_content WHERE content_section='$section'" ;
  $get_result = mysqli_query($db, $query);
  if($get_result){
    $get_row = mysqli_fetch_assoc($get_result);
    return $get_row["subtitle"];
  }else{
    return "Couldn't get get_title query results for ".$section;
  }
  
}

function get_description($section){
  global $db;
  $query = "SELECT * FROM home_content WHERE content_section='$section'" ;
  $get_result = mysqli_query($db, $query);
  if($get_result){
    $get_row = mysqli_fetch_assoc($get_result);
    return $get_row["description"];
  }else{
    return "Couldn't get get_title query results for ".$section;
  }
  
}


?>


<!doctype html>
<html lang="en">

  <head>
    <title>VendorCrest &mdash; Digital Marketing agency</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>

      <!-- header start -->

      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="index.php"> <img src="images/vc-logo.png" alt="logo" width="48" height="48"> VendorCrest<span class="text-primary">.</span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                <span>Enugu, <br> Nigeria</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Open - 24hrs</span>
              </div>
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

              

            <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="services.php" class="nav-link">Services</a></li>
                  <!-- <li><a href="projects.html" class="nav-link">Projects</a></li> -->
                  <li class="active"><a href="about.php" class="nav-link">About</a></li>
                  <li><a href="blog.php" class="nav-link">Blog</a></li>
                  <li><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
              </nav>

              <div class="top-social ml-auto">
                <a href="https://instagram.com/vendorcrest_digital"><span class="icon-instagram"></span></a>
                <a href="https://facebook.com/vendorcrest1"><span class="icon-facebook"></span></a>
                <a href="https://twitter.com/vendorcrest"><span class="icon-twitter"></span></a>
                <a href="https://linkedin.com/in/vendorcrest-digital-148583210"><span class="icon-linkedin"></span></a>
              </div>
          </div>
        </div>

       

      </header>

      <!-- header end -->

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center ">
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3"><?php //echo get_subtitle('Header'); ?>Digital Agency With Excellent Services.</h1>
              <p><?php //echo get_description('Header'); ?>Our team is made up of young, creative, highly skilled, devoted and talented professionals that have high interest in making that brifght idea, product, or service grow but also making sure you have the best customer experience as wwell as creating a relationship that stands the test of time.</p>
              <p class="mt-5"><a href="about.html" class="btn btn-primary">About Us</a></p>
            </div>

            <!-- form start -->
            <div class="col-md-6 ml-auto">
              <div class="white-dots">
                <!-- <img src="images/img_2.jpg" alt="" class="img-fluid"> -->
                <div class="ftco-animate bg-primary align-self-stretch px-4 py-3 w-100">
              <h2 class="heading-white mb-4"> Service Application</h2>
              <span><small>*all fields are required.</small></span>
							<form action="#" id="get_quote" class="appointment-form ftco-animate">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name" id="f_name" required>
		    				</div>
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Last Name" id="l_name" required>
                </div>
                <div class="form-group">
		    					<input type="email" class="form-control" placeholder="Email address" id="email_address" required>
		    				</div>
	    					<div class="form-group">
		    					<div class="form-field">
	        					<div class="select-wrap">
	                    <div class="icon"><span class="ion-ios-arrow-down bg-primary"></span></div>
	                    <select name="" id="service" class="form-control" required>
	                    	<option value="">Select Service</option>
	                      <option value="Mobile App Development">Web Development</option>
	                      <option value="Branding">Graphics Design</option>
                        <option value="Flier Design">Search Engine Marketing</option>
                        <option value="Product Design">Mobile App Creation</option>
                        <option value="Web app Development">Content Development</option>
                        <option value="Website Development">Social Media Marketing</option>
                        <option value="Digital Marketing">Digital Marketing</option>
	                      <option value="Other Services">Other Services</option>
	                    </select>
	                  </div>
		              </div>
		    				</div>
	    					<div class="form-group">
		    					<input type="text" id="tel_no" class="form-control" placeholder="Phone" required>
		    				</div>
	    					<div class="form-group">
		              <textarea name="" id="message" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
		            </div>
		            <div class="form-group">
                  <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                  <div id="form_response"></div>
                </div>
                </div>
		    			</form>
						</div>
              </div>
              <!-- form end -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h5 class="subtitle"><?php echo get_title('Services'); ?></h5>
            <h2><?php echo get_subtitle(('Services')); ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-home"></span>
              </span>
              <h3>Creative Ads</h3>
              <p>We help you prepare and organize creative ads finely suited for your target audience through our SEO, Graphics design and Content Creation.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-face"></span>
              </span>
              <h3>Business Growth</h3>
              <p>With our Social Media Marketing, Web Development and the creative ads skills, we work with you to facilitate a speedy growth in your business and brand influence.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-drafts"></span>
              </span>
              <h3>Business Plan</h3>
              <p>Based on our expertise in digital marketing, we also plan precise digital marketing strategies to facilitate increased turnover and increased customer engagement.</p>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12 text-center">
            <a href="#" class="btn btn-primary">View All Services</a>
          </div>
        </div>
      </div>
    </div>




    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 class="h5 mb-4"><?php echo get_subtitle('Our Expertise'); ?></h2>
            <p><?php echo get_description('Our Expertise');?></p>

            <div class="d-flex align-items-center">
              <span class="sign mr-4">
                <img src="images/signature.svg" alt="" class="img-fluid">
              </span>
              <div>
                <span class="d-block font-weight-bold">Oloto Mmesomma</span>
                <span>CEO &amp; Co-Founder </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 ml-auto">
            <h2 class="h5 mb-4"><?php echo get_title('Our Expertise'); ?></h2>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Writing</span>
                <span class="ml-auto">55%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>WordPress</span>
                <span class="ml-auto">85%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Bootstrap</span>
                <span class="ml-auto">93%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>jQuery</span>
                <span class="ml-auto">83%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <p class="lead text-white">Suscipit libero voluptate</p>
            <h2 class="text-white">Get ready to start your exciting journey. <br> Our agency is the best of its kind </h2>
          </div>
        </div>
        
      </div>
    </div> -->

    <!-- <div class="site-section counter-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-building-o wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">14k</span>
                <span class="caption">number of firms</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-home2 wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">2k</span>
                <span class="caption">in house crews</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-code wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">3920k</span>
                <span class="caption">line of codes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->



    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="section-heading text-center"><?php echo get_title('News and Events');?></h3>
            <p class="mb-5 lead"><?php get_subtitle('News and Events');?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>

          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel">
              <div class="news-1" style="background-image: url('images/img_1.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('images/img_2.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('images/img_3.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('images/img_3.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div> -->


    

    <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white section-heading primary-color-icon text-center">More Services<?php //echo get_title('More Services'); ?></h2>
            <p class="lead text-white">Our services are designed and carefully selected to meet your business marketing needs with the sole aim of increasing turnover and brand awareness.<?php //echo get_description('More Services'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-phonelink"></span>
              </span>
              <div class="service-1-contents">
                <h3>Web Development</h3>
                <p>Our team of designers and developers are ever ready to give your brand a voice on the web.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-redeem"></span>
              </span>
              <div class="service-1-contents">
                <h3>Graphics Design</h3>
                <p>Let your business leave a mark in the minds of potential customers through impressive branding and design.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-child_friendly"></span>
              </span>
              <div class="service-1-contents">
                <h3>Search Engine Marketing</h3>
                <p>Optimize search engine marketing by using the most suited keywords for your business.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-attach_money"></span>
              </span>
              <div class="service-1-contents">
                <h3>Mobile App Creation</h3>
                <p>We have all it takes to help you offer the best services to your customers through mobile apps</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-build"></span>
              </span>
              <div class="service-1-contents">
                <h3>Content Development</h3>
                <p>Keep your customers enchanted with impressive content in all aspects of customer interaction</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="icon-photo_camera"></span>
              </span>
              <div class="service-1-contents">
                <h3>Social Media Marketing</h3>
                <p>Make your brand a household name with extensive publicity through various socal media marketing strategies.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


    
    
    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="section-heading text-center"><?php echo get_title('Client Reviews'); ?></h2>
            <p class="lead"><?php echo get_description('Client Reviews'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mx-auto d-block">
                <span>Mike Fisher</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mx-auto d-block">
                <span>Jean Stanley</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mx-auto d-block">
                <span>Katie Rose</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-white section-heading primary-color-icon text-center"><?php echo get_title('Contact Us'); ?></h2>
            <p class="lead text-white mb-5"><?php echo get_description('Contact Us'); ?></p>
            <p><a href="#" class="btn btn-primary">Contact Us Now</a></p>
          </div>
        </div>
      </div>
    </div> -->


    <!-- <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="section-heading text-center"><?php echo get_title('Our Blog'); ?></h2>
            <p><?php echo get_description('Our Blog'); ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


    

    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-3">About Us</h2>
                <p class="mb-5">Are you an SME, Entrepreneur or Business Owner? <span style="color: #00adbf;">VendorCrest</span> is here for you! </p>

                <h2 class="footer-heading mb-4">Newsletter</h2>
                <div id="resp_div">
                  <div class="alert" id="res_alert"></div>
                </div>
                <form action="" id="newsletter_sub" class="d-flex" class="subscribe">
                  <input type="text" id="nl_firstname" class="form-control mr-3" placeholder="firstname" required>
                  <input type="email" id="nl_email" class="form-control mr-3" placeholder="Email" required>
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-4 ml-auto">
                <h2 class="footer-heading mb-4">Social Media: </h2>
                <ul class="list-unstyled">
                  <li><a href="https://instagram.com/vendorcrest_digital"><span class="icon-instagram"></span>  Instagram</a></li>
                  <li><a href="https://facebook.com/vendorcrest1"><span class="icon-facebook"></span>  Facebook</a></li>
                  <li><a href="https://twitter.com/vendorcrest"><span class="icon-twitter"></span>  Twitter</a></li>
                  <li><a href="https://linkedin.com/in/vendorcrest-digital-148583210"><span class="icon-linkedin"></span>  LinkedIn</a></li>
                  <li><a href="https://wa.me/+2348112347977?text=**from%20vendorcrest.com"><span class="icon-whatsapp"></span>  Whatsapp</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="contact.html">Contact Us</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
                
              </div>

              
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
             
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://VendorCrest.com" target="_blank" >VendorCrest</a>
             
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

