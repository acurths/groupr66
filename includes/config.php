<?php
   if (substr_count($_SERVER[‘HTTP_ACCEPT_ENCODING’], ‘gzip’))
   ob_start(“ob_gzhandler”);
   else ob_start();
?>
<?php
/**
 *
 *
 * config.php
 * @author     Austin Curths
 * @created    5/15/2020
 * @copyright  Copyright (c)  groupr66 (https://groupr66.com)
 *
 */


// misc page settings
define('DS', DIRECTORY_SEPARATOR);
define('TITLE_SUFFIX', ' | Your partner along the digital highway');
define('COMPANY_PHONE', '(800) 596-0477');
define('COMPANY_EMAIL', 'info@groupr66.com');

// set js/css versioning
// define('VERSIONING', '20191216');

// pull in functions
// require_once ('functions.php');
