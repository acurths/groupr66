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
<body class="ideal-x-sub">
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
   <div class="subpage ideal-x-sub">
      <!-- Start Homepage Hero -->
      <section class="subpage-section">
         <div class="row">
            <!-- <div class="col-md-2">
               <i class="fal fa-paper-plane"></i>
               </div> -->
            <div class="col-md-2 ">
               <a onclick="goBack()">
                  <h6><i class="fal fa-long-arrow-left"></i></h6>
               </a>
               <script>
                  function goBack() {
                    window.history.back();
                  }
               </script>
            </div>
            <div class="col-md-10 text-block">



              <h4>Method Drivers</h4>
               <p>Customers are now in the driver's seat and expect a premier experience in exchange for brand loyalty. In the rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight with focused alignment. method is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. Cursus sed in faucibus augue accumsan ut sed. Id sagittis platea ut augue morbi semper pulvinar porta volutpat. Amet sed mauris convallis non. Ornare non sagittis, consectetur sit pharetra. Eget maecenas tortor nisi habitasse magna cras aenean. Venenatis et, nec nunc iaculis sollicitudin arcu. Posuere habitant in malesuada posuere nunc adipiscing magna. Ornare tellus egestas gravida rhoncus, sit vehicula nibh.</p>


       </div>
    </div>

    <div class="row">
       <div class="col-md-2 ">
       </div>

       <div class="col-md-4 ">


          <p><b>method Drivers</b> increase customer equity, reinforce operational effectiveness, enhance marketing KPI’s, and simplify technical alignment. Continuous evaluation, alignment, and advancement ensure the success of digital projects and increase quality of earnings. Amet sed mauris convallis non. Ornare non sagittis, consectetur sit pharetra. Eget maecenas tortor nisi habitasse magna cras aenean. Venenatis et, nec nunc iaculis. </p>
          <a href="connect.php"><b>Optimize customer equity with data-driven action.</b></a>
       </div>
       <div class="col-md-6 ">


       <div class="heading-alt">
         <h4>DIGITAL <span>ALIGNMENT</span></h4>
       </div>
       <div class="row">
         <div class="col-md-12 ">
           <div class="three-columns-icons-stacked">
             <h1><i class="fal fa-user-chart"></i></h1>
             <h4 class="">Customer Demands
             </h4>
             <p>Customers are now in the driver's seat and expect a premier experience in exchange for brand loyalty.
             </p>
           </div>
         </div>
         <div class="col-md-12">
           <div class="three-columns-icons-stacked">
             <h1><i class="fal fa-sort-amount-up"></i></h1>
             <h4 class="">Functional Alignment
             </h4>
             <p>Individual departments must integrate one-off solutions to align with enterprise objectives.
             </p>
           </div>
         </div>
         <div class="col-md-12">
           <div class="three-columns-icons-stacked">
             <h1><i class="fal fa-chart-network"></i></h1>
             <h4 class="">Change Is Difficult
             </h4>
             <p>Technology deployment will no longer affect the desired change to improve customer acquisition and retention.
             </p>
           </div>
         </div>
       </div>
     </div>
     <div class="col-md-6 text-center sbs-fix">
       <div class="heading-alt">
         <h4>MINIMIZE <span>FRICTION</span></h4>
       </div>
       <div class="row">
         <div class="col-md-12 ">
           <div class="three-columns-icons-stacked">
             <i class="fal fa-chart-line"></i><span><h4 class="">Holistic View
             </h4>
             <p>Broad alignment around what digital really means for operational efficiency.
             </p> </span>

           </div>
         </div>
         <div class="col-md-12">
           <div class="three-columns-icons-stacked">
             <h1><i class="fal fa-glasses"></i></h1>
             <h4 class="">Clear Definition
             </h4>
             <p>Fusing digital strategy with business to align organizational objectives for maximum clarity.

             </p>
           </div>
         </div>
         <div class="col-md-12">
           <div class="three-columns-icons-stacked">
             <h1><i class="fal fa-fingerprint"></i></h1>
             <h4 class="">Transformation
             </h4>
             <p>Disruptive economic forces of digital requires a new model to deliver data-driven customer experiences.
             </p>
           </div>
         </div>
       </div>
     </div>

    </div>


   </div>
   </section>
   <?php require_once ('includes/blocks/blog-banner.php'); ?>
   <?php require_once ('includes/blocks/contact-banner.php'); ?>
   <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
