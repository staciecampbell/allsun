<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Allsun Campbell</title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/flickity-docs/flickity.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/animate.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/hover-min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  
  <a><i class="fa fa-bars"></i></a>
    <nav>
      <ul>
        <li><i class="fa fa-times"></i></li>
        <li><a href="<?php echo get_site_url(); ?>" class="hvr-underline-from-center">Home</a></li>
        <li><a href="<?php echo get_site_url(); ?>/about/" class="hvr-underline-from-center">About</a></li>
        <li><a href="<?php echo get_site_url(); ?>/contact/" class="hvr-underline-from-center">Contact</a></li>
        <li><a href="http://allsuncampbell.tumblr.com" class="hvr-underline-from-center">Blog</a></li>
      </ul>
    </nav>
    <div class="group animated slideInLeft">
      <div class="icon">
        <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook social"></i></a>
      </div>
      <div class="icon">
        <a href="http://instagram.com" target="_blank"><i class="fa fa-instagram social"></i></a>
      </div>
      <div class="icon">
        <a href="http://twitter" target="_blank"><i class="fa fa-twitter social"></i></a>
      </div>
    </div>
  

</header><!--/.header-->

