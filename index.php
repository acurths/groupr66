<?php
   if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’))
   ob_start(“ob_gzhandler”);
   else ob_start();
?>
<?php
   /**
    *
    *
    * index.php
    * @author     Austin Curths
    * @created    5/15/2020
    * @copyright  Copyright (c)  groupr66 (https://groupr66.com)
    *
    */

   // plug config
   // require_once('includes/config.php');

   // set page vars
   $page_title = 'Group R66 - Your Partner Along the Digital Highway';

   // pull in head
   require_once('includes/blocks/head.php');
   // pull in navigation
   // require_once('includes/blocks/navigation.php');

   ?>
<body class="home">
   <!-- Header -->
   <header>
      <!-- Scroll to top button -->
      <a href="javascript:" id="return-to-top"><i class="fal fa-chevron-up"></i></a>
      
      <!-- Start Navbar-->
      <div class="header transparent">
         <div class="header-inner">
            <a class="logo" style="cursor: default;"><img src="img/logoclear.png" alt=""></a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
               <li><a href="service.php">Service</a></li>
               <li><a href="method.php">Method</a></li>
               <li><a href="insight.php">Insight</a></li>
               <li><a href="connect.php">Connect</a></li>
               <li class="mailto"><a href="mailto:info@groupr66.com"><i class=" fal fa-envelope"></i></a></li>
               <div class="social-menu">
                  <a href="https://www.facebook.com/groupr66/" target="_blank"><i class="fab fa-facebook-f "></i></a>
                  <a href="https://twitter.com/groupr66" target="_blank"><i class="fab fa-twitter "></i></a>
                  <a href="https://www.linkedin.com/company/groupr66/" target="_blank"><i class="fab fa-linkedin-in "></i></a>
               </div>
            </ul>
         </div>
      </div>
      <!-- End Navbar-->
   </header>
   <!-- End Header -->
   <!-- Start Homepage Hero -->
   <section class="hero" >
      <div class="parallax homepage-hero" data-parallax-bg-image="img/gr66-hp.jpg"
         data-parallax-speed=".5"
         data-parallax-direction="down">
         <div class="hero-box">
            <div class="hero-intro-text text-center">
               <div class="col-md-12 padding-0">
                  <h1>Your partner along the digital highway</h1>
               </div>
            </div>
            <div class="row row-wide hp-hero-large padding-0">
               <div class="col-lg-7 col-md-6  padding-0">
                  <!-- <h2 class="r66-hp">R66</h2> -->
                  <img src="img/R66.png" alt="">
               </div>
               <div class="col-lg-5 col-md-6  padding-0 hero-right-text">
                  <p style="">Group R66 is a purpose-built service group driven to align clients around the data that defines the ideal customer experience. We utilize our proprietary framework to rapidly move clients through a service methodology that identifies the data needed to realize maximum revenue potential.
                     <br><br>
                     <a href="connect.php">Refeul your succes with data-driven action <i class="fas fa-long-arrow-right"></i></a>
                  </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class=" hero-secondary wow fadeIn">
                  <h3>Revenue based services that optimize quality of earnings.</h3>
                  <p class="hero-text">GR66 has been implementing digital solutions for marketing and sales before “digital marketing” was a thing.</p>
                  <br><br>
                  <i class="fal fa-long-arrow-down"></i>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="grey-bg pb-100">
      <div class="container-fluid">
         <div class="row ">
            <div class="col-md-12 text-left">
               <div class="r66-white-bg">
                  <h2 class="wow fadeIn">
                     Internal Data Monetization <span>(IDM)</span>
                  </h2>
                  <p class="wow fadeIn">Data is used internally to create actionable intelligence and to enable delivery of an ideal state, resulting in improved earnings, cost savings, and avoidance of risk. </p>
               </div>
            </div>
            <!-- <div class="col-md-2">
               </div> -->
            <a href="service.php">
               <div class="col-md-4 ">
                  <div class="three-col wow fadeIn">
                     <!-- <i class="fal fa-road"></i> -->
                     <i class="fal fa-chart-network"></i>
                     <!-- <i class="fal fa-route-interstate"></i> -->
                     <h4>Operational Excellence</h4>
                     <p>Execute more consistently and reliably than the competition. </p>
                     <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                  </div>
            </a>
            </div>
            <a href="service.php">
               <div class="col-md-4">
                  <div class="three-col wow fadeIn" data-wow-delay="0.2s">
                     <!-- <i class="fal fa-user-friends"></i> -->
                     <i class="fal fa-handshake-alt"></i>
                     <!-- <i class="fal fa-user-headset"></i> -->
                     <!-- <i class="fal fa-users"></i> -->
                     <!-- <i class="fal fa-hands-helping"></i> -->
                     <h4>Customer Experience</h4>
                     <p>They demand more personalization and you better deliver, every time. </p>
                     <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                  </div>
            </a>
            </div>
            <a href="method.php">
               <div class="col-md-4">
                  <div class="three-col wow fadeIn" data-wow-delay="0.4s">
                     <!-- <i class="fal fa-mountain"></i> -->
                     <i class="fal fa-mountains"></i>
                     <h4>APEX</h4>
                     <p>Ever evolving and maturing in the use of data to drive revenue.</p>
                     <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                  </div>
            </a>
            </div>
         </div>
      </div>
   </section>
   <?php require_once ('includes/blocks/contact-banner.php'); ?>
   <?php require_once ('includes/blocks/footer.php'); ?>
