
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
<div class="groupr66">
  <!-- Start Homepage Hero -->
  <section class="intro">
    <div class="row row-alt">
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
        <!-- <div class="col-md-4 padding-0 grey-bg">

        </div> -->
        <div class="col-md-7 text-left padding-0 grey-bg">
          <div class="intro-left">

              <h2>Refuel your<span></span>
            </h2>
            <i class="fal fa-road"></i>


</div>
        </div>

        <div class="col-md-5 intro-right padding-0 ">
<h2>success</h2>
  <p>GR66 has been implementing technology solutions for marketing and sales since the inception of “digital marketing”</p>
        </div>


      </div>
    </div>
  </section>


<?php require_once ('includes/blocks/contact-banner.php'); ?>

<?php require_once ('includes/blocks/footer.php'); ?>


</div>
