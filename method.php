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
   $page_title = 'method - Group R66';

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
               <li><a href="service.php">Service</a></li>
               <li class="active-green"><a href="method.php">Method</a></li>
               <li><a href="insights.php">Insights</a></li>
               <li><a href="connect.php">Connect</a></li>
               <li class="mailto ideal-x-header-i"><a href="mailto:info@groupr66.com"><i class=" fal fa-envelope"></i></a></li>
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
   <div class="method">
      <!-- Start Homepage Hero -->
      <section class="hero">
         <div class="method-hero">
            <div class="hero-box">

               <div class="hero-intro-text text-center">

                 <div class="row">

                 <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 padding-0 text-left">
 <h6>Method</h6>
  <img src="img/mountain.jpg" alt="">
                 </div>
                  <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12  padding-0">
                     <h1>Outpace digital disruption and <span style="color: #2A73B8;">stay competitive</span></h1>
                  </div>
               </div>
               </div>
               <div class="row  hp-hero-large padding-0">
                  <div class="col-xl-6 col-lg-4 col-md-12   padding-0">
                  </div>
                  <div class="col-xl-6 col-lg-8 col-md-12  padding-0 hero-right-text">
                     <p style="">In this rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight and leadership alignment. IDEALX is a revenue-based framework designed to focus leaders around their drivers of revenue. The disruptive economic force of digital requires a new model. This is it.
                        <br><br>
                        <a href="connect.php">Optimize customer equity with data-driven action<i class="fas fa-long-arrow-right"></i></a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="hero method-hero-alt" >
            <div class="row wow fadeIn">
              <!-- <video width="100%" height="100%" autoplay loop muted>
<source src="video/video-2.mp4" type="video/mp4">
</video> -->
               <div class="col-md-12">
                  <h3>Technology solution planning for marketing, sales, and operations.
</h3>
                  <p class="hero-text">Our team of trusted guides will maneuver around the turbulence of the constantly evolving digital highway to help you reach your destination.</p>
                  <br><br>
                  <i class="fal fa-long-arrow-down"></i>
               </div>
            </div>
         </div>
      </section>
      <section class="grey-bg pb-100">
         <div class="container-fluid">
            <div class="row ">
               <div class="col-md-12 text-center">
                  <div class="r66-white-bg ">
                     <h2 class="wow fadeIn">
                        Organizational Machining Framework <span style="color: #2A73B8">(OMF)</span>
                     </h2>
                     <p class="wow fadeIn">The Ideal State is a revenue-based framework that focuses and aligns organizational leadership around the drivers of revenue. The disruptive economic force of digital requires a new model. Optimize customer equity using data to drive your new machine.</p>
                  </div>
               </div>
               <div class="col-md-4">
                <a href="ideal-x-drivers.php">
                  <div class="three-col wow fadeIn" >
            <i class="fal fa-brain"></i>
                     <h4>Machine Learning</h4>
                     <p>Drive effective transformation by building feedback into the organizational machine.</p>
                     <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
               <div class="col-md-4">
              <a href="ideal-x-process.php">
                  <div class="three-col wow fadeIn" data-wow-delay="0.2s">
                     <i class="fal fa-repeat"></i>
                     <h4>Repeatable Process</h4>
                     <p>A customer-led strategy fused with high-impact data provides seamless execution. </p>
                     <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
               <div class="col-md-4">
                 <a href="#">
                  <div class="three-col wow fadeIn" data-wow-delay="0.4s">
                     <i class="fal fa-seedling"></i>
                     <h4>Grow Your Business</h4>
                     <p>Dodge organizational friction with a new operating picture aligned around customers. </p>
                     <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <section class="half-color-bg">
         <div class="container-fluid  white-bg">
            <div class="row ">

               <div class="col-lg-7 col-md-6 col-sm-12 text-left" >
                  <div class="intro-left-alt method wow fadeIn">
                     <h2>Acquire, Retain, Grow<span></span>
                     </h2>
                     <p>The Ideal State drivers improve customer equity, reinforce operational effectiveness, enhance marketing metrics, and simplify technical deployments. Continuous evaluation, alignment, and advancement ensures the success of digital projects and increases quality of earnings.
</p>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-12 ideal intro-right-alt method padding-0 ">
                  <i class="fas fa-quote-left"></i>
                  <p class="wow fadeIn">“17% of directors say their boards are sponsoring digital initiatives yet only 16% fully understand how industry dynamics affecting their companies are changing.”
                    <br>
                        <br>
<a href="#">-McKinsey</a>


                     <br><br><br>
                    <a class="btn-secondary alt wow fadeIn">Refine your playbook</a>
                  </p>
               </div>
            </div>
         </div>
         <div class="method-bottom-bg ">
         </div>
      </section>


      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
