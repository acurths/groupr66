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
   $page_title = 'IDEALX - Group R66';

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
               <li class="active-green"><a href="ideal-x.php">IDEAL X</a></li>
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
   <div class="idealx">
      <!-- Start Homepage Hero -->
      <section class="hero">
         <div class="idealx-hero">
            <div class="hero-box">
               <div class="hero-intro-text text-center">
                 <div class="row">
                 <div class="col-lg-5 col-md-3 padding-0">

                 </div>
                  <div class="col-lg-7 col-md-9  padding-0">
                     <h1>Outpace digital disruption and <span style="color: #17A132;">stay competitive</span></h1>
                  </div>
               </div>
               </div>
               <div class="row  hp-hero-large padding-0">
                  <div class="col-lg-6 col-md-3   padding-0">
                  </div>
                  <div class="col-lg-6 col-md-9  padding-0 hero-right-text">
                     <p style="">In the rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight with focused alignment. <b>IDEALX </b>is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model.
                        <br><br>
                        <a href="#">Optimize customer equity with data-driven action<i class="fas fa-long-arrow-right"></i></a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="hero idealx-hero-alt ">
            <div class="row wow fadeIn">
               <div class="col-md-12">
                  <h3>Implementing <br>technology solutions for marketing and sales</h3>
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
                        Customer Revenue Optimization <span style="color: #17A132">(CRO)</span>
                     </h2>
                     <p class="wow fadeIn">As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="three-col wow fadeIn" >
                  <i class="fal fa-meteor"></i>
                     <h4>Accelerate Acquisition</h4>
                     <p>Drive effective digital business transformation with streamlined acquisition of prospects.</p>
                     <p><a href="#">Learn More<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="three-col wow fadeIn" data-wow-delay="0.2s">
                     <i class="fal fa-chart-line"></i>
                     <h4>Maximize Retention</h4>
                     <p>A customer-led strategy fused with high-impactful processes provides a seamless execution for maximum retention.</p>
                     <p><a href="#">Learn More<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="three-col wow fadeIn" data-wow-delay="0.4s">
                     <i class="fal fa-seedling"></i>
                     <h4>Grow Your Business</h4>
                     <p>Dodge organizational friction with a new operating picture that is aligned around the drivers of revenue.</p>
                     <p><a href="#">Learn More<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="half-color-bg">
         <div class="container-fluid  white-bg">
            <div class="row ">

               <div class="col-lg-7 col-md-6 col-sm-12 text-left" >
                  <div class="intro-left-alt idealx wow fadeIn">
                     <h2>Acquire, Retain, Grow<span></span>
                     </h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare</p>
                  </div>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-12 intro-right-alt idealx padding-0 ">
                  <p class="wow fadeIn">Group R66 is a purpose-built service group driven to help align clients around the elements of complex digital initiatives. We utilize our proprietary methodology along with our tenure to provide a framework to avoid potholes on the constantly evolving digital highway. Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper.
                     <br><br><br>
                    <a class="btn-secondary alt wow fadeIn">Get Started</a>
                  </p>
               </div>
            </div>
         </div>
         <div class="idealx-bottom-bg ">
         </div>
      </section>
      <!--  -->
      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
