<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $title ?></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/slick-theme.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="fonts/font.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/jquery.fancybox.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</head>
<body>
    <!--Header Start-->

    <header class="header">
        <h1 class="u_logo"><a href="index.php" class="logo"><img src="images/b_global_logo.png" alt="Logo"></a></h1>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="index.php" class="<?php if($page =="index") { echo 'active';} ?>">Home</a></li>
            <li><a href="about_us.php" class="<?php if($page =="about") { echo 'active';} ?>">About us</a></li>
            <li><a href="our_products.php" class="<?php if($page =="products") { echo 'active';} ?>">Our Products</a></li>
            <li><a href="infrastructure.php" class="<?php if($page =="infrastructure") { echo 'active';} ?>">Infrastructure</a></li>
            <li><a href="gallery.php" class="<?php if($page =="gallery") { echo 'active';} ?>">Gallery</a></li>
            <li><a href="javascript:;">Blogs</a></li>
            <li><a href="contact_us.php" class="<?php if($page =="contact") { echo 'active';} ?>">Contact us</a></li>
        </ul>
    </header><!--Header end-->