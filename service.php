<?php
   if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’))
   ob_start(“ob_gzhandler”);
   else ob_start();
?>
<?php
   /**
    *
    *
    * service.php
    * @author     Austin Curths
    * @created    5/15/2020
    * @copyright  Copyright (c)  groupr66 (https://groupr66.com)
    *
    */

   // plug config
   require_once('includes/config.php');

   // set page vars
   $page_title = 'Service - Group R66 ';

   // pull in head
   require_once('includes/blocks/head.php');
   // pull in navigation
   // require_once('includes/blocks/navigation.php');

   ?>
<body class="service">
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
               <li class="active"><a style="cursor: default;">Service</a></li>
               <li><a href="method.php">Method</a></li>
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
   <div class="groupr66">
      <!-- Start Homepage Hero -->
      <section class="intro">
         <div class="row">
            <!-- <div class="col-md-2">
               <i class="fal fa-paper-plane"></i>
               </div> -->
            <div class="col-md-3 ">
               <h6>Service</h6>
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
                  <p>In the transition from legacy to digital operations, a new way of thinking is required. We have more technological reach than ever, yet still struggle to monetize data by delivering an engaging customer experience.</p>
               </div>
                  </div>
            </div>
         </div>
      </section>
      <div class="color-banner">
         <div class="row wow fadeIn">
            <div class="col-md-2">
            </div>
            <div class="col-lg-10 col-md-12">
               <h2>Repeatedly deliver your ideal state with focus and alignment.</h2>
               <p>GR66 identifies the organizational data relative to delivering the ideal experience and uses the APEX method to quickly align and focus leadership around these drivers of revenue.</p>
               <p>Data and analytics are changing the way business is done. Data is now treated as a true asset with an actual monetary value assigned to it, just like physical assets, intellectual property, and brand equity. Before companies can make meaningful strides with data monetization, they must first set up the fundamental building blocks with APEX.</p>
            </div>
         </div>
      </div>
      <div class="color-banner-cta">
         <div class="row wow fadeIn">
            <div class="col-md-2">

            </div>

            <div class="col-lg-10 col-md-12">
                <a href="connect.php">
               <p>Embrace A Data-Driven Digital Framework<i class="fas fa-long-arrow-right"></i></p>
               </a>
            </div>

         </div>
      </div>
      <section>



        <section class="grey-bg services">
           <div class="container-fluid">
              <div class="row ">
                 <div class="col-lg-2 col-md-12">
                 </div>
                <a href="method.php">  <div class="col-lg-5 col-md-6 padding-left-0 ">
                   <div class="three-col wow fadeIn">


           <img src="img/ideal-state.jpg" alt="">

           <div class="services-text">
             <h4>APEX</h4>
             <p>The disruptive force of digital requires a new model. Customers are now in the driver's seat and expect a premier experience in exchange for loyalty.</p>
             <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                    </div>
                    </div>

          </a>
              </div>
                 <a href="apex-method.php">  <div class="col-lg-5 col-md-6 padding-right-0">
                    <div class="three-col wow fadeIn" data-wow-delay="0.2s">

            <img src="img/grow-1.jpg" alt="">

            <div class="services-text">
                        <h4>Grow your Business</h4>
                        <p>Create a new operating picture devoid of past organizational friction, driven by insight, automation, and actionable intelligence.</p>
                        <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                     </div>
                     </div>
           </a>
                 </div>
                    <div class="col-lg-2 col-md-12">
                    </div>
                   <a href="apex-method.php">  <div class="col-lg-5 col-md-6 padding-left-0">
                      <div class="three-col wow fadeIn " >

              <img src="img/machine.jpg" alt="">

              <div class="services-text">
                          <h4>Organizational Machining</h4>
                          <p>The best companies run like machines. Machine the organization by identifying the levers and gears that produce the ideal experience again and again.</p>
                          <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                       </div>
                       </div>
             </a>
                    </div>
                    <a href="apex-method.php">  <div class="col-lg-5 col-md-6 padding-right-0">
                       <div class="three-col wow fadeIn" data-wow-delay="0.2s">

               <img src="img/advisor.jpg" alt="">

               <div class="services-text">
                           <h4>Repeatable Process</h4>
                           <p style="max-width: 378px;">A customer-led strategy fused with high-impact data provides seamless and reliable execution.</p>
                           <p>Learn More<i class="fas fa-long-arrow-right"></i></p>
                        </div>
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
