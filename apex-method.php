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
               <h4>Apex Drivers</h4>
               <p><b>Is your organization attuned to what the customer needs? Can you afford to deliver what customers request? Can you accept what customers say they experience without first telling them what they should experience?</b> <br><br>
                  Change means breaking and reforming relationships with things we care about. 70% of change initiatives fail to meet expectations. Why? Because implementing change is a significant, disruptive, and emotionally taxing undertaking.<br><br>
                  To produce maximum results, change needs to be approached as a unified, disciplined process constructed around a repeatable framework, like APEX.
               </p>
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

                  <h5 style="margin-top:12px;">Humans Are Not Machines</h5>
                  <p>But the best companies run like machines. We cannot manage what we do not measure. We cannot improve what is not aligned.<br><br>
                     The customer data moving through each company offers insight, understanding, and opportunity. APEX isolates this data to expand the operational picture and increase transparency into the drivers of revenue.<br><br>
                  </p>
                  <p>
                     APEX helps “machine” the organization toward delivery of the ideal state by instilling AI/ML across these drivers of revenue and maintaining leadership focus on the levers and gears required to produce the ideal experience, over and over again.<br><br>
                  </p>
                  <a href="connect.php"><b>Optimize customer equity with data-driven action.</b></a>
               </div>
               <!-- <div class="col-md-5 text-block padding-left-0">
                  <br><br>
                  <h5>&nbsp;</h5>
                  <p>
                     APEX helps “machine” the organization toward delivery of the ideal state by instilling AI/ML across these drivers of revenue and maintaining leadership focus on the levers and gears required to produce the ideal experience, over and over again.<br><br>
                  </p>
                  <a href="connect.php"><b>Optimize customer equity with data-driven action.</b></a>
               </div> -->
               <!-- <div class="col-md-2 ">
               </div> -->
               <div class="col-md-5  text-center process">
                  <div class="three-columns-icons-stacked text-left">
                     <!-- <h1 style="padding-top: 0px; padding-bottom: 6px;"><i class="fal fa-chart-line"></i></h1> -->
                     <h4 class=""><span>1.</span> Transformation encourages reflection, self-analysis, alignment, and focus
                     </h4>


                     <h4 class=""><span>2.</span> Intact leadership groups are key leverage points for change
                     </h4>

                     <h4 class=""><span>3.</span> Change requires collaborative relations with a change agent, like Group GR66
                     </h4>

                     <h4 class=""><span>4.</span> APEX produces a playbook for maintaining long range, planned, sustained transformation efforts aligned with company vision
                     </h4>
                     <h4 class=""><span>5.</span> The company’s culture & processes are key strategic points for implementing change (I.e. Customer Experience)
                     </h4>

                     <h4 class=""><span>6.</span> APEX augments organizational optics to be more data-driven and reflective

                     </h4>

                     <h4 class=""><span>7.</span>  The process builds financial, emotional, and cultural commitment from stakeholders
                     </h4>


                  </div>
               </div>
               <!-- <div class="col-md-5 text-center process">
                  <div class="three-columns-icons-stacked text-left">
                     <h4 class=""><span>5.</span> The company’s culture & processes are key strategic points for implementing change (I.e. Customer Experience Driven)
                     </h4>

                     <h4 class=""><span>6.</span> Augments organizational optics to be more data-driven and reflective

                     </h4>

                     <h4 class=""><span>7.</span>  The process builds financial, emotional, and cultural commitment from stakeholders
                     </h4>


                  </div>
               </div> -->
            </div>
         </div>
      </section>
      <?php require_once ('includes/blocks/blog-banner.php'); ?>
      <?php require_once ('includes/blocks/contact-banner.php'); ?>
      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
