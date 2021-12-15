<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>
<button onclick="topFunction()" id="myBtn" title="Go to top"><div><i class="fas fa-chevron-up"></i></div></button>
           
<footer class="footer">
  <div class="container">
    <div class="row align-items-start justify-content-center mx-auto">
      <div class="col-md-6">
        <ul class="footer-links mt-4 text-center me-5">
        <?php wp_nav_menu(
           array( 
             'theme_location' => 'footer-menu', 
              'class' => 'footer-link'
             ) ); ?>
        </ul>
      </div>
      <div class="col-md-3 offset-md-3">
        <div class="newsletter-title mt-5">
        <p class="newsletter-title mt-5"><?php dynamic_sidebar( 'footer-newsletter-heading'); ?></p></div>       
        <div class="input-group mt-3">          
        <?php dynamic_sidebar( 'footer-newsletter-box'); ?>
        </div>
      </div>
      <div class="col-md-4">
        <div class="footer-copyright text-center mt-5">
          <p><?php dynamic_sidebar( 'footer-copyright'); ?></p>
    </div>
      </div>
    </div>
  
</footer>






        <?php wp_footer(); ?>

    </body>
</html>



