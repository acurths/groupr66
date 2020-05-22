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
               <li class="active"><a href="consulting.php">Consulting</a></li>
               <li><a href="ideal-x.php">IDEAL X</a></li>
               <li><a href="insights.php">Insights</a></li>
               <li><a href="connect.php">Connect</a></li>
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
            <div class="col-md-10 text-block">
               <h2>Disruption</h2>
               <p>In the rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight with focused alignment. IdealX is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. Cursus sed in faucibus augue accumsan ut sed. Id sagittis platea ut augue morbi semper pulvinar porta volutpat. Amet sed mauris convallis non. Ornare non sagittis, consectetur sit pharetra. Eget maecenas tortor nisi habitasse magna cras aenean. Venenatis et, nec nunc iaculis sollicitudin arcu. Posuere habitant in malesuada posuere nunc adipiscing magna. Ornare tellus egestas gravida rhoncus, sit vehicula nibh.</p>
               <a href="connect.php"><b>Optimize customer equity with data-driven action.</b></a>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-5 ">
               <p>In the rapidly evolving transformative age, accelerated change limitless opportunities, demanding customer insight with focused alignment. IdealX is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. Cursus sed in faucibus augue accumsan ut sed. Id sagittis platea ut augue morbi semper pulvinar porta volutpat. </p>
            </div>
            <div class="col-md-5 ">
               <p>In the rapidly evolving transformative age, accelerated change limitless opportunities, demanding customer insight with focused alignment. IdealX is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. Cursus sed in faucibus augue accumsan ut sed. Id sagittis.</p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-10">
               <img class="subpage-image-wide" src="img/idealx-forest.jpg" alt="">
            </div>
         </div>
         <div class="row">
            <!-- <div class="col-md-2">
               <i class="fal fa-paper-plane"></i>
               </div> -->
            <div class="col-md-2 ">
            </div>
            <div class="col-md-10 text-block">
               <h2>Optimize Disruption</h2>
               <p>In the rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight with focused alignment. IdealX is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. Cursus sed in faucibus augue accumsan ut sed. Id sagittis. </p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-2 ">
            </div>
            <div class="col-md-5 ">
               <p>In the rapidly evolving transformative age, accelerated change limitless opportunities, demanding customer insight with focused alignment. IdealX is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model. Consequat congue mauris adipiscing lorem blandit etiam. Cursus sed in faucibus augue accumsan ut sed. Id sagittis.</p>
               <a href="connect.php"><b>Optimize customer equity with data-driven action.</b></a>
            </div>
            <div class="col-md-5 ">
               <img class="subpage-image "src="img/drivers.jpg" alt="">
            </div>
         </div>
   </div>
   </section>
   <?php require_once ('includes/blocks/blog-banner.php'); ?>
   <?php require_once ('includes/blocks/contact-banner.php'); ?>
   <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
