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
   $page_title = 'Insights - Group R66';

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
               <li><a href="consulting.php">Consulting</a></li>
               <li><a href="ideal-x.php">IDEAL X</a></li>
               <li class="active"><a href="insights.php">Insights</a></li>
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
   <div class="">
      <!-- Start Homepage Hero -->
      <section class="intro">
         <div class="row">
            <!-- <div class="col-md-2">
               <i class="fal fa-paper-plane"></i>
               </div> -->
            <div class="col-md-3 ">
               <h6>Insights</h6>
            </div>
            <div class="col-md-9 right">
               <h2>Sharing our knowledge merged with <br>reputable industry experts <span>that we trust</span></h2>
            </div>
         </div>
      </section>

      <section class="half-color-bg">
         <div class="container-fluid ">
            <div class="row ">
               <div class="col-md-7 text-left grey-bg" >
                  <div class="intro-left-alt">
                     <h2>Making Digital<span></span>
                     </h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare</p>
                  </div>
               </div>
               <div class="col-md-5 intro-right-alt padding-0 ">
                  <p>Group R66 is a purpose-built service group driven to help align clients around the elements of complex digital initiatives. We utilize our proprietary methodology along with our tenure to provide a framework to avoid potholes on the constantly evolving digital highway.
                  </p>
                  <i class="fal fa-long-arrow-down"></i>
               </div>
            </div>

         </div>

      </section>
      <div class="hero insights-bg ">
      </div>
      <section class="grey-bg pb-100">
         <div class="container-fluid insights">

            <div class="row ">
               <div class="col-lg-8 col-md-12 text-left">
                  <div class="r66-white-bg-alt ">
                     <h2 class="wow fadeIn">
                        Our latest <span>insights</span>
                     </h2>
                     <p class="wow fadeIn">As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-12 text-center">
               </div>
              <div class="col-lg-4 col-md-6 wow fadeIn" >
                  <img src="img/road-1.jpg" alt="">
                  <div class="three-col">
                     <h4>Who's Your Data? Contextualize, Personalize, and Integrate</h4>
                     <p>Not all data is created equal. You take the good, filter out the bad and there you have, the data to make digital decisions.</p>
                     <p><a href="#">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                  <img src="img/road-1.jpg" alt="">
                  <div class="three-col">
                     <h4>Refuel 2018 Digital Transformations with (AI), (IOT) & (BI)</h4>
                     <p>Is your digital strategy outdated? Want to be an AI, IoT, BI digital disruption terminator?</p>
                     <p><a href="#">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
                 <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.4s">
                  <img src="img/road-1.jpg" alt="">
                  <div class="three-col">
                     <h4>Unify Your Digital Ecosystem by Connecting the Dots</h4>
                     <p>The digital landscape has changed. The formation of ecosystems is now evident in digitally mature organizations.</p>
                     <p><a href="#">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeIn" >
                  <img src="img/road-1.jpg" alt="">
                  <div class="three-col" >
                     <h4>Who's Your Data? Contextualize, Personalize, and Integrate</h4>
                     <p>Not all data is created equal. You take the good, filter out the bad and there you have, the data to make digital decisions.</p>
                     <p><a href="#">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                  <img src="img/road-1.jpg" alt="">
                  <div class="three-col">
                     <h4>Refuel 2018 Digital Transformations with (AI), (IOT) & (BI)</h4>
                     <p>Is your digital strategy outdated? Want to be an AI, IoT, BI digital disruption terminator?</p>
                     <p><a href="#">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.4s">
                  <img src="img/road-1.jpg" alt="">
                  <div class="three-col">
                     <h4>Unify Your Digital Ecosystem by Connecting the Dots</h4>
                     <p>The digital landscape has changed. The formation of ecosystems is now evident in digitally mature organizations.</p>
                     <p><a href="#">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php require_once ('includes/blocks/contact-banner.php'); ?>
      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
