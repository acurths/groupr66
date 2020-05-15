<?php
/**
 *
 *
 * head.php
 * @author     Austin Curths
 * @created    5/15/2020
 * @copyright  Copyright (c)  groupr66 (https://groupr66.com)
 *
 */

// prime our default og tag values
$defaultOgData = array(
    'title'         => $page_title . TITLE_SUFFIX,
    'description'   => 'Group R66 is a purpose-built service group driven to help align clients around the elements of complex digital initiatives. ',
    'url'           => BASE_URL . strtok($_SERVER["REQUEST_URI"],'?'),
    'image'         => BASE_URL . 'img/_____.png',
    'image-secure'  => BASE_URL . 'img/_____.png',
    'image-width'   => 206,
    'image-height'  => 260,
);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
  <!-- Normalize CSS -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Navbar Stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <!-- Fontawesome 5 Pro -->
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i|Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
