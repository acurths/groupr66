<?php
   if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’))
   ob_start(“ob_gzhandler”);
   else ob_start();
?>
<?php
/**
 *
 *
 * blog-banner.php
 * @author     Austin Curths
 * @created    5/15/2020
 * @copyright  Copyright (c)  groupr66 (https://groupr66.com)
 *
 */

?>

<!-- Footer -->

<div class="blog-banner">
  <div class="row wow fadeIn">
    <div class="col-md-2">
      <i class="fal fa-rss"></i>
    </div>
    <div class="col-md-4">
      <h4>Insights</h4>
    </div>
    <div class="col-md-6 right">
      <p>Check out our latest insights for an up to date look at GR66 and other industry news.</p>
        <a href="insight.php">
          <h6>Go to our blog page<i class="fas fa-long-arrow-right"></i></h6>
        </a>
    </div>
  </div>
</div>
