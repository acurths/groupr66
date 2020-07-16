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
               <li><a href="method.php">Method</a></li>
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
                 <video width="100%" height="100%" autoplay loop muted>
  <source src="video/video.mp4" type="video/mp4">
</video>
 <div class="intro-right-padding">
                  <h2>success</h2>
                  <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
               </div>
                  </div>
            </div>
         </div>
      </section>
      <div class="color-banner">
         <div class="row wow fadeIn">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
               <h2>Minimize risk with a proven <br>framework to reach your Ideal State.</h2>
               <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
            </div>
         </div>
      </div>
      <div class="color-banner-cta">
         <div class="row wow fadeIn">
            <div class="col-md-2">

            </div>

            <div class="col-md-10">
                <a href="connect.php">
               <p>Embrace A Data-Driven Digital Framework<i class="fas fa-long-arrow-right"></i></p>
               </a>
            </div>

         </div>
      </div>
      <section>




      <div class="info-sections">
         <div class="row">
            <div class="col-md-2">
  <!-- <h6> <i class="fal fa-road"></i></h6> -->


            </div>
            <div class="col-md-10 info-block-wide wow fadeIn box-one">
               <a href="group-r66-cso.php">
                  <h4>Customer Solution Optimization<span> (CsO)</span></h4>

                <div class="img-hover-zoom">
                  <div class="image-opacity">
                  <img src="img/winding-road.jpg" alt="" >
  <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.<br><br><a href="ideal-x-drivers.php"><b>Learn More</b><i class="fas fa-long-arrow-right"></i></a></p>
                    </div>
                    <!-- <div class="hr">
                      <i class="fas fa-horizontal-rule" ></i>
                    </div> -->




                    </div>
               </a>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2 ">


            </div>
            <div class="col-md-5 info-block wow fadeIn box-two" >
               <a href="group-r66-disruption.php">
                  <h4>Disruption</h4>

                    <div class="img-hover-zoom">
                        <div class="image-opacity">
                  <img src="img/disrupt.jpg" alt="">
  <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results.<br><br><a href="ideal-x-drivers.php"><b>Learn More</b><i class="fas fa-long-arrow-right"></i></a></p>
                      </div>
                      <!-- <div class="hr">
                        <i class="fas fa-horizontal-rule" ></i>
                      </div> -->

                  </div>
               </a>
            </div>
            <div class="col-md-5 info-block wow fadeIn box-two" >
               <a href="group-r66-trusted-advisor.php">
                  <h4>Trusted Advisor</h4>

                    <div class="img-hover-zoom">
                      <div class="image-opacity">
                  <img src="img/advisor.jpg" alt="">
                    <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results.<br><br><a href="ideal-x-drivers.php"><b>Learn More</b><i class="fas fa-long-arrow-right"></i></a></p>
                    </div>
                    <!-- <div class="hr">
                      <i class="fas fa-horizontal-rule" ></i>
                    </div> -->

                  </div>
               </a>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-5 info-block wow fadeIn box-three">
               <a href="#">
                  <h4>Grow Your Business</h4>

                    <div class="img-hover-zoom">
                      <div class="image-opacity">
                  <img src="img/grow.jpg" alt="">
              <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results.<br><br><a href="ideal-x-drivers.php"><b>Learn More</b><i class="fas fa-long-arrow-right"></i></a></p>
                    </div>
                  <!-- <div class="hr">
                    <i class="fas fa-horizontal-rule" ></i>
                  </div> -->

                  </div>
               </a>
            </div>
            <div class="col-md-5 info-block wow fadeIn box-three">
               <a href="method.php">
                  <h4>Method</h4>

                    <div class="img-hover-zoom">
                      <div class="image-opacity">
                  <img src="img/method-small.jpg" alt="">
                    <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results.<br><br><a href="ideal-x-drivers.php"><b>Learn More</b><i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
                  <!-- <div class="hr">
                    <i class="fas fa-horizontal-rule" ></i>
                  </div> -->
                </div>
               </a>
            </div>
         </div>
      </div>
        </section>
      <?php require_once ('includes/blocks/blog-banner.php'); ?>
      <?php require_once ('includes/blocks/contact-banner.php'); ?>
      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
