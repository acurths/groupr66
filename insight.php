<?php
   /**
    *
    *
    * insight.php
    * @author     Austin Curths
    * @created    5/15/2020
    * @copyright  Copyright (c)  groupr66 (https://groupr66.com)
    *
    */

   // plug config
   require_once('includes/config.php');

   // set page vars
   $page_title = 'Insight - Group R66';

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
               <li><a href="method.php">Method</a></li>
               <li class="active"><a style="cursor: default;">Insight</a></li>
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
   <div class="gr66-insights">
      <!-- Start Homepage Hero -->
      <section class="intro">
         <div class="row">
            <!-- <div class="col-md-2">
               <i class="fal fa-paper-plane"></i>
               </div> -->
            <div class="col-md-3 ">
               <h6>Insight</h6>
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
                     <h2>Make Digital Happen<span></span>
                     </h2>
                     <p>Enterprises of all size are recognizing the value of data and demonstrating this understanding by becoming more data-driven. They are proactively undertaking efforts to use data to make more informed decisions, improve operational efficiency, and enhance the customer experience. Let Group R66 guide you down the path with APEX.</p>
                  </div>
               </div>
               <div class="col-md-5 intro-right-alt padding-0 ">
                 <i class="fas fa-quote-left"></i>
                  <p> "Marketers reported that they are going to market via channel partners 74% of the time, up from 55.4% two years ago. That trend is likely a response to the market’s demand for speed.”

                  <br><br><a href="https://www.forbes.com/sites/christinemoorman/2019/03/27/9-ways-marketers-are-driving-growth-in-2019/#3d16f2f47895" target="_blank">- Forbes</a>
                  </p>
                  <!-- <i class="fal fa-long-arrow-down"></i> -->
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
                <a href="https://www.linkedin.com/pulse/whos-your-data-contexualize-personalize-integrate-kristen-curths/" target="_blank">
                  <img src="img/server.jpg" alt="">

                  <div class="three-col">
                     <h4>Who's Your Data? Contextualize, Personalize, and Integrate</h4>
                     <p>Not all data is created equal. You take the good, filter out the bad and there you have, the data to make digital decisions.</p>
                     <p>View Article<i class="fas fa-long-arrow-right"></i></p>

                  </div>
                  </a>
               </div>

                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                  <a href="https://www.linkedin.com/pulse/refuel-2018-digital-transformations-artificial-ai-internet-curths/" target="_blank">
                  <img src="img/digital.jpg" alt="">
                  <div class="three-col">
                     <h4>Refuel 2018 Digital Transformations with (AI), (IOT) & (BI)</h4>
                     <p>Is your digital strategy outdated? Want to be an AI, IoT, BI digital disruption terminator?</p>
                     <p>View Article<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
                 <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.4s">
                   <a href="https://www.linkedin.com/pulse/unify-your-digital-ecosystem-connecting-dots-kristen-curths/" target="_blank">
                  <img src="img/unify.jpg" alt="">
                  <div class="three-col">
                     <h4>Unify Your Digital Ecosystem by Connecting the Dots</h4>
                     <p>The digital landscape has changed. The formation of ecosystems is now evident in digitally mature organizations.</p>
                     <p>View Article<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeIn" >
                 <a href="https://www.linkedin.com/pulse/5-reasons-why-picking-solution-partner-like-marriage-kristen-curths/" target="_blank">
                  <img src="img/partner.jpeg" alt="">
                  <div class="three-col" >
                     <h4>5 Reasons Why Picking a Solution Partner is Like a Marriage</h4>
                     <p>Have you ever been involved in a digital marketing project that got derailed? Has your launch date been pushed due to...</p>
                     <p>View Article<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                 <a href="https://www.linkedin.com/pulse/what-stopping-you-from-your-digital-transformation-kristen-curths/" target="_blank">
                  <img src="img/transformation.jpeg" alt="">
                  <div class="three-col">
                     <h4>What Is Stopping You From Your Digital Transformation?</h4>
                     <p>The verdict is in. Digital transformation is imperative to every sales and marketing strategy regardless of industry.</p>
                     <p>View Article<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
               <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.4s">
                 <a href="https://www.linkedin.com/pulse/group-r66-looks-back-envision-future-kristen-curths/" target="_blank">
                  <img src="img/future.jpeg" alt="">
                  <div class="three-col">
                     <h4>Group R66 Looks Back To Envision The Futures</h4>
                     <p>The future is here. Self-driving cars, printed human organs, and retinal implants are no longer hypothetical technologies...</p>
                     <p>View Article<i class="fas fa-long-arrow-right"></i></p>
                  </div>
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- <div class="hero insights-bg alt ">
      </div>
      <section class="grey-bg pb-100">
         <div class="container-fluid insights">

            <div class="row ">
               <div class="col-lg-8 col-md-12 text-left">
                  <div class="r66-white-bg-alt ">
                     <h2 class="wow fadeIn">
                        Industry <span>Insights</span>
                     </h2>
                     <p class="wow fadeIn">As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-12 text-center">
               </div>
              <div class="col-lg-4 col-md-6 wow fadeIn" >
                  <img src="img/cdo.jpg" alt="">
                  <div class="three-col">
                     <h4>It's The Job Title Defining 21st Century Companies — But What Does CDO Mean?</h4>
                     <p>Is your digital strategy outdated? Want to be an AI, IoT, BI digital disruption terminator?</p>
                     <p><a href="https://www.forbes.com/sites/delltechnologies/2019/01/30/its-the-job-title-defining-21st-century-companies--but-what-does-cdo-mean/#6da41d9d54e7" target="_blank">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.2s">
                  <img src="img/predictions.png" alt="">
                  <div class="three-col">
                     <h4>Predictions 2019: Transformation Goes Pragmatic</h4>
                     <p>What do we mean by pragmatism? A sense of realism, practical steps, a desire for tangible outcomes.</p>
                     <p><a href="https://go.forrester.com/blogs/predictions-2019-transformation-goes-pragmatic/" target="_blank">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>
                 <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.4s">
                  <img src="img/strategy.jpg" alt="">
                  <div class="three-col">
                     <h4>Driving digital strategy - Digital strategy matters to all business leaders.</h4>
                     <p>Digital strategy matters to all business leaders. As the key facilitator of digital strategy, it is essential that CIOs need...</p>
                     <p><a href="https://www.idginsiderpro.com/article/3314980/driving-digital-strategy.html" target="_blank">View Article<i class="fas fa-long-arrow-right"></i></a></p>
                  </div>
               </div>

            </div>
         </div>
      </section> -->
      <?php require_once ('includes/blocks/contact-banner.php'); ?>
      <?php require_once ('includes/blocks/footer.php'); ?>
   </div>
