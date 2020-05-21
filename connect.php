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
   $page_title = 'Group R66';

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
               <li><a href="insights.php">Insights</a></li>
               <li class="active"><a href="connect.php">Connect</a></li>
               <li class="mailto"><a href="mailto:info@groupr66.com"><i class=" fal fa-envelope"></i></a></li>
               <div class="social-menu">
                  <a href="https://www.facebook.com/groupr66/" target="_blank"><i class="fab fa-facebook-f "></i></a>
                   <a href="https://www.linkedin.com/company/groupr66/" target="_blank"><i class="fab fa-linkedin-in "></i></a>
                   <a href="https://twitter.com/groupr66" target="_blank"><i class="fab fa-twitter "></i></a>
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
               <h6>Connect</h6>
            </div>
            <div class="col-md-9 right">
               <h2>Minimize risk with a proven framework<br>to reach your <span>Ideal State</span></h2>
            </div>
         </div>
      </section>
      <section class="half-color-bg">
         <div class="container-fluid ">
            <div class="row ">
               <div class="col-md-7 text-left grey-bg" >
                  <div class="intro-left-alt">
                     <h2>Bridge the Gap<span></span>
                     </h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in ornare</p>
                  </div>
               </div>
               <div class="col-md-5 intro-right-alt connect padding-0 ">
                 <form id="contact-form" name="contact-form" action="mail.php" method="POST">

 						<!--Grid row-->
 						<div class="row">

 							<!--Grid column-->
 							<div class="col-md-6">
 								<div class="md-form mb-0">
 									<input type="text" id="name" name="name" class="form-control">
 									<label for="name" class="">Your name</label>
 								</div>
 							</div>
 							<!--Grid column-->

 							<!--Grid column-->
 							<div class="col-md-6">
 								<div class="md-form mb-0">
 									<input type="text" id="email" name="email" class="form-control">
 									<label for="email" class="">Your email</label>
 								</div>
 							</div>
 							<!--Grid column-->

 						</div>
 						<!--Grid row-->

 						<!--Grid row-->
 						<div class="row">
 							<div class="col-md-12">
 								<div class="md-form mb-0">
 									<input type="text" id="subject" name="subject" class="form-control">
 									<label for="subject" class="">Subject</label>
 								</div>
 							</div>
 						</div>
 						<!--Grid row-->

 						<!--Grid row-->
 						<div class="row">

 							<!--Grid column-->
 							<div class="col-md-12">

 								<div class="md-form">
 									<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
 									<label for="message">Your message</label>
 								</div>

 							</div>
 						</div>
 						<!--Grid row-->

 					</form>
          <div class="form-button">
						<a class="btn-primary" onclick="document.getElementById('contact-form').submit();">Send Message</a>
					</div>
          <div class="status"></div>
               </div>
            </div>
         </div>
         <div class="hero insights-bg ">
         </div>
      </section>


      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
