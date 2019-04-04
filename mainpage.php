<?php 
  include "includes/session.php";
  // include "includes/login.php";
  include "includes/contact_reg.php";
 ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pels &mdash;Homes Real Estate </title>
<meta name="description" content="">
<meta name="author" content="">


<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="shortcut icon"  href="img/logo_graphic_250h.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="index_main">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo_graphic_250h.png"  id="home_logo" style="margin-top:-35px; margin-left: -80px;" width="150" height="90"></a>
      <div class="phone"><span>Call Today</span>+2348188974303</div>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</i></a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Projects</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="includes/logout.php" class="page-scroll">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Home Construction<br>
              & Remodeling</h1>
            <p>Welcome to Pels-Homes official service website. We are ever able to give you the very best and the quality we offer speaks for itself.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Cost for your home renovation project</h3>
        <p>Get started today and complete our form to request your free estimate</p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/about.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Who We Are</h2>
          <p> <b>Pels-Homes</b> Pels-Homes is non-governmental organization that deals with real estate management,property and development. We are well-known for the quality we offer our clients because of the experience we've got over the years. Whether you're buying, selling or browsing <b>Pels-Homes</b> has something for you. If you're listing a home on <b>Pels-Homes</b> yourself, you'll receive access to a sales proceeds calculator, your home's estimated value, a local news feed, and tools to help you price your home accurately. </p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Years of Experience</li>
                <li>Fully Insured</li>
                <li>Cost Control Experts</li>
                <li>100% Satisfaction Guarantee</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Free Consultation</li>
                <li>Satisfied Customers</li>
                <li>Project Management</li>
                <li>Affordable Pricing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-1.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>New Home Construction</h3>
          <p>This is a newly constructed duplex in Lagos state. well furnished, fully loaded and maximum security guaranteed. If you're interested please contact us.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-2.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Home Additions</h3>
          <p>New home electrical appliances, and some other additions were just being added to this mansion which is located in Abuja. If you're interested please contact us.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-3.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Bathroom Remodels</h3>
          <p>This is just a typical picture of one the bathrooms that we've remodelled. We can help you remodel and add more materials to your bathroom.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-4.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Kitchen Remodels</h3>
          <p>This is just a typical picture of one the kitchens that we've remodelled. We can help you remodel and add more utensils to your kitchen.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-5.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Windows & Doors</h3>
          <p>We also build, repair and remodel doors and windows. Trust us to give you the quality and latest windows and doors.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/service-6.jpg" alt=" "> </div>
        <div class="service-desc">
          <h3>Decks & Porches</h3>
          <p>We also build, repair and remodel Decks and Porches. Trust us to give you the quality and latest Deck and Porches.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Our Works</h2>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>General Gas,Ibadan, oyo state.</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Magodo Estate,Lagos State.</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Suleja Estate, Abuja.</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>RIVTAF Estate,Port-harcourt,River state.</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Banana Island,Lagos state.</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Treasureland Estate,port-harcourt,Rivers state.</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Hilltop Estate, Onitsha,Anambra state.</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Eagles hill estate, Awka, Anambra state. </h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Bandirawo city, Kano state.</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Testimonials</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/01.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Sincerely speaking, Pels-homes is the best real estate firm in Nigeria and one of the best in Africa!"</p>
            <div class="testimonial-meta"> - Olajide Joshua </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/02.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"With Pels-Home, believe you me be rest assured that you're in the save hand. Tested and Trusted!!!"</p>
            <div class="testimonial-meta"> - Solomon Joseph </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/03.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Pels-Homes made it so easier for me to relocated to Nigeria without stress and much spending. Thank You Pels-Homes!"</p>
            <div class="testimonial-meta"> - Chukwuemeka Victor </div>
          </div>
        </div>
      </div>
      <div class="row"> </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/04.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Pels-Homes is not just a real estate firm but also a place where you cna invest your money in land, mansion and even estate. Keep it Up Pels-Homes! "</p>
            <div class="testimonial-meta"> - Johnson Tomler </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/05.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Hey people! I hereby recommend pels-Homes to you, they've proven to be the best and so they are!!"</p>
            <div class="testimonial-meta"> - Peter Adel </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/06.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"I just wanna say a big thanks to you Pels-homes and the best way to say thank you is THANK YOU! You've put smiles on the faces of millions of people from around the world. Kudos to the co-founders of Pels-Homes."</p>
            <div class="testimonial-meta"> - Ademola Oluwaseun </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <form name="sentMessage" id="contactForm" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" name = "c_name"class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" name="c_email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="c_message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" name="c_submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address <i class="fa fa-map-marker"></i></span>48 Adeola Odeku St,<br>
          Victoria Island, Lagos State.</p>
      </div>
      <div class="contact-item">
        <p><span>Phone <i class="fa fa-phone"></i></span> +234 818 897 4303 <br>+234 813 281 5396 <br>+234 708 704 6645</p>
      </div>
      <div class="contact-item">
        <p><span>Email <i class="fa fa-envelope"></i></span> info@pelshomes.com <br>Oluseyiajeigbe@yahoo.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2018. Designed by Pels-Tech </p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>