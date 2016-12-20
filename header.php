<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
   <?php wp_head(); ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='http://cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


  <!-- stylesheets should be enqueued in functions.php -->
 
</head>


<body <?php body_class(); ?>>


<nav>
    <div class="pageMenu">

        <?php 

          wp_nav_menu( array(
              'menu' => 'primary',
              'theme_location' => 'primary',
              'before'=> '<h3>',
              'after' => '</h3>',
          ) );
         ?>

    </div>
    <div id="menuIcon" class="fa fa-bars"></div>
    <div class="hamburgerMenu">

        <?php 

          wp_nav_menu( array(
              'menu' => 'primary',
              'theme_location' => 'primary',
              'before'=> '<h3>',
              'after' => '</h3>',
          ) );
         ?>

    </div>     
</nav>







