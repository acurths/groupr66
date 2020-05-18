
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
require_once('includes/blocks/navigation.php');

?>

  <!-- Start Homepage Hero -->
  <section class="hero">
    <div class="idealx-hero">
      <div class="hero-box">
        <div class="hero-intro-text text-center wow fadeIn" data-wow-delay="0.4s">
          <div class="col-md-12 padding-0">
            <h1>Outpace digital disruption and stay competitive</h1>
          </div>
        </div>
        <div class="row row-wide hp-hero-large padding-0">
          <div class="col-md-6 padding-0">

          </div>
          <div class="col-md-6 padding-0 hero-right-text">
            <p style="">In the rapidly evolving transformative age, accelerated change creates limitless opportunities, demanding customer insight with focused alignment. IdealX is a revenue-based framework that optimizes customer experiences. The disruptive economic force of digital requires a new model.
              <br><br>
              <a href="#">Optimize customer equity with data-driven action<i class="fas fa-long-arrow-right"></i></a></p>

          </div>
        </div>

      </div>

      <!-- <i class="fal fa-chevron-down"></i> -->
    </div>

      <div class="hero idealx-hero-alt ">
    <div class="row">
      <div class="col-md-12">
        <h3>Revenue based services that optimize customer experiences.</h3>
        <p class="hero-text">GR66 has been implementing technology solutions for marketing and sales since the inception of, “digital marketing”</p><br><br>
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


              <h2>
              Customer Solution Optimization <span>(CSO)</span>
            </h2>
              <p>As business needs adapt to customers, application needs change. Simplify digital marketing deployments and rapidly extract results by aligning business and technology solutions around the drivers of revenue.</p>
</div>
        </div>

        <div class="col-md-4 col-left-img">
          <div class="three-col">
              <i class="fal fa-atom-alt"></i>
          <h4>Disruption</h4>
          <p>Increased pressure has created a disruptive landscape.</p>
          </div>
        </div>
        <div class="col-md-4 col-center-img">
          <div class="three-col">
              <i class="fal fa-chart-line"></i>
          <h4>Trusted Advisor</h4>
          <p>Partner with industry veterans with decades of experience.</p>
          </div>
        </div>
        <div class="col-md-4 col-right-img">
          <div class="three-col ">
              <i class="fal fa-seedling"></i>
          <h4>Grow Your Business</h4>
          <p>Results are the foundation of any successful digital deployment.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php require_once ('includes/blocks/contact-banner.php'); ?>

<?php require_once ('includes/blocks/footer.php'); ?>