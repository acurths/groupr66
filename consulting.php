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
   require_once('includes/config.php');

   // set page vars
   $page_title = 'Consulting - Group R66 ';

   // pull in head
   require_once('includes/blocks/head.php');
   // pull in navigation
   // require_once('includes/blocks/navigation.php');

   ?>
<body>
   <!-- Start  Loading Mask-->
   <div id="mask">
   </div>
   <!-- End Loading Mask-->
   <!-- Header -->
   <header>
      <!-- Scroll to top button -->
      <a href="javascript:" id="return-to-top"><i class="fal fa-chevron-up"></i></a>
      <!-- Start Navbar-->
      <div class="header">
         <div class="header-inner">
            <a href="index.php" class="logo"><img src="img/logowide.png" alt=""></a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
               <li class="active"><a href="consulting.php">Consulting</a></li>
               <li><a href="ideal-x.php">IDEAL X</a></li>
               <li><a href="insights.php">Insights</a></li>
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
   <div class="groupr66">
      <!-- Start Homepage Hero -->
      <section class="intro">
         <div class="row">
            <!-- <div class="col-md-2">
               <i class="fal fa-paper-plane"></i>
               </div> -->
            <div class="col-md-3 ">
               <h6>Consulting</h6>
            </div>
            <div class="col-md-9 right">
               <h2>Helping align clients around the <br>elements of <span>complex digital initiatives</span></h2>
            </div>
         </div>
      </section>
      <section class="">
         <div class="container-fluid padding-0">
            <div class="row row-wide padding-0">
               <div class="col-md-7 text-left padding-0 grey-bg">
                  <div class="intro-left">
                     <h2>Refuel your<span></span>
                     </h2>
                     <i class="fal fa-road"></i>
                  </div>
               </div>
               <div class="col-md-5 intro-right padding-0 ">
                  <h2>success</h2>
                  <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
               </div>
            </div>
         </div>
      </section>
      <div class="color-banner">
         <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
               <h2>Minimize risk with a proven <br>framework to reach your Ideal State.</h2>
               <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
            </div>
         </div>
      </div>
      <div class="color-banner-cta">
         <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-10">
               <p><a href="#">Embrace A Data-Driven Digital Framework<i class="fas fa-long-arrow-right"></i></a></p>
            </div>
         </div>
      </div>
      <div class="info-sections">
         <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10 info-block-wide wow fadeIn">
               <a href="consulting-sub.php">
                  <h4>Customer Solution Optimization (CsO)<i class="fas fa-long-arrow-right"></i></h4>
                  <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
                  <img src="img/cso.jpg" alt="">
               </a>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-5 info-block wow fadeIn" data-wow-delay="0.2s">
               <a href="#">
                  <h4>Disruption<i class="fas fa-long-arrow-right"></i></h4>
                  <p>Increased pressure has created a disruptive landscape.</p>
                  <img src="img/road-1.jpg" alt="">
               </a>
            </div>
            <div class="col-md-5 info-block wow fadeIn" data-wow-delay="0.2s">
               <a href="#">
                  <h4>Trusted Advisor<i class="fas fa-long-arrow-right"></i></h4>
                  <p>Partner with industry veterans with decades of experience.</p>
                  <img src="img/road-1.jpg" alt="">
               </a>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-5 info-block wow fadeIn" data-wow-delay="0.2s">
               <a href="#">
                  <h4>Grow Your Business<i class="fas fa-long-arrow-right"></i></h4>
                  <p>Results are the foundation of any successful digital deployment.</p>
                  <img src="img/road-1.jpg" alt="">
               </a>
            </div>
            <div class="col-md-5 info-block wow fadeIn" data-wow-delay="0.2s">
               <a href="ideal-x.php">
                  <h4>IDEALX<i class="fas fa-long-arrow-right"></i></h4>
                  <p>Outpace digital disruption and stay competitive in the rapidly evolving transformative age. </p>
                  <img src="img/road-1.jpg" alt="">
               </a>
            </div>
         </div>
      </div>
      <?php require_once ('includes/blocks/blog-banner.php'); ?>
      <?php require_once ('includes/blocks/contact-banner.php'); ?>
      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
