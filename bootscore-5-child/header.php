<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Bootscore
	 */
	
	?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Loads the internal WP jQuery. Required if a 3rd party plugin loads jQuery in header instead in footer -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
        <header class="main-header d-flex flex-wrap align-items-center justify-content-center justify-content-md-evenly pb-5 mx-auto ">           
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
           <h1 class="header-logo mt-1  animate__animated animate__fadeInDown"><?php dynamic_sidebar('navbar-logo');?></h1>
          </a>
    
          <ul class="nav col-md-auto mb-2 justify-content-center mb-md-0  animate__animated animate__slideInLeft">         
         <?php wp_nav_menu( array( 'theme_location' => 'header-menu',  'class' => 'header-link' ) ); ?>
          </ul>
          
          <div class="col-lg-3 text-end mt-3 animate__animated animate__fadeInDown">
            <ul class="social-icons"> 
              <Div class="social-icons">           
               <?php dynamic_sidebar( 'navbar-social'); ?>                
</div>      
            </ul>
            
            
           
          </div>
        </header>
      </div>

           
     
     







    
        <?php bootscore_ie_alert(); ?>
