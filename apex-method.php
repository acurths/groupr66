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
               <li> <a href="service.php">Service</a></li>
               <li class="active"><a href="method.php" >Method</a></li>
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
   <div class="subpage">
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
            <div class="col-md-10 text-block sub-center">

              <!-- <h2>method Process</h2> -->

              <h4>APEX DRIVERS</h4>
               <p>Customers are now in the driver's seat and expect a premier experience in exchange for brand loyalty. In the rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight with focused alignment. method is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. </p>


       </div>
    </div>
    <div class="row">
      <div class="col-md-2 ">
      </div>
   <div class="col-md-5" >
   <!-- <h3>Digital Disruption</h3> -->
   <div class="steps-img">

   </div>
   </div>
   <div class="col-md-5 text-center process">


   </div>

    <div class="row">

       <div class="col-md-2 ">
       </div>
       <div class="col-md-10 ">
           <img src="img/apex-best.jpg" alt="">
       </div>
       <div class="col-md-2 ">
       </div>


       <div class="col-md-5 text-block padding-left-0">
        <br><br>


           <h5>Minimize Friction</h5>

            <p>Customers are now in the driver's seat and expect a premier experience in exchange for brand loyalty. In the rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight with focused alignment. method is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. Cursus sed in faucibus augue accumsan ut sed. Id sagittis platea ut augue morbi semper pulvinar porta volutpat. Amet sed mauris convallis non.</p>
            <a href="connect.php"><b>Optimize customer equity with data-driven action.</b></a>
       </div>
       <div class="col-md-5 text-center process">

           <div class="three-columns-icons-stacked text-left">
             <!-- <h1 style="padding-top: 0px; padding-bottom: 6px;"><i class="fal fa-chart-line"></i></h1> -->
             <h4 class=""><span>1.</span> Evaluate:
             </h4>
             <p>Meet with leadership to capture an honest Current-State condition of each driver category.
             </p>

             <h4 class=""><span>2.</span> Align:
             </h4>
             <p>Collectively review feedback, reveal gaps in the overall model, and deliberate for insights.
             </p>

             <h4 class=""><span>3.</span> Define:
             </h4>
             <p>Individually meet with leadership to define a realistic Ideal-State for each driver category.
             </p>

             <h4 class=""><span>4.</span> Refine:
             </h4>
             <p>Refine individual categories and the overall model, then deliberate for shared commitment.
             </p>

             <h4 class=""><span>5.</span> Plan:
             </h4>
             <p>Distill the executables in each driver category. Activate the Playbook.
             </p>


       </div>
     </div>

    </div>




   </div>
   </section>
   <?php require_once ('includes/blocks/blog-banner.php'); ?>
   <?php require_once ('includes/blocks/contact-banner.php'); ?>
   <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
