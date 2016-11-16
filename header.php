<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon/favicon.ico" type="image/x-icon">
  <title><?php // wp_title('|', true, 'right'); ?>Lauren Codes 🌛</title>
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Montserrat|Roboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href='http://cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
<nav class="grid">
      <div class="hamburger hidden grid">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>

      <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'social'
    )); ?>
</nav>
<header style="background-image: url(<?php echo $url ?>);" >
  <div class="container">

    <div class="triangleBox">
    </div>
     <h1>
      <!-- <a href="<?php //echo home_url( '/' ); ?>" title="<?php //bloginfo( 'name', 'display' ); ?>" rel="home"> -->
        LAUREN CODES
      <!-- </a> -->
    </h1>


  </div> <!-- /.container -->
</header><!--/.header-->
<div class="navChange"></div>
