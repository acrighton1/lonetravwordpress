<?php
/*
Template Name: Front Page
*/
    
    get_header();
    ?>
<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
}?>

        
<section class="top-section-2">
             
             <div class="container d-flex justify-content-center">
               <div class="row mx-auto px-5 align-items-center justify-content-between pb-5">
              <div class="top-1 col-md-4 position-relative pb-5 img-fluid animate__animated animate__fadeInDown">                      
             <?php dynamic_sidebar( 'top-photo-1') ; ?>
                    <div class="boxed">
                        <p class="top-photo-1-date text-center"><?php dynamic_sidebar( 'top-photo-1-date') ; ?></p>           
                    </div>
                    <h1  class="top-photo-heading-1 text-center fs-4 mt-5"><?php dynamic_sidebar( 'top-photo-1-heading') ; ?></h1>    
              </div>
              
     
              <div class="top-2 col-md-4 position-relative ps-5 animate__animated animate__fadeInDown">
                 <div class="boxed-2">
                     <p class="text-center"><?php dynamic_sidebar( 'top-photo-2-date') ; ?></p>           
                 </div>
                 <?php dynamic_sidebar('top-photo-2'); ?>
                        <h1  class="top-photo-heading-2 text-wrap text-center fs-4 mt-5"><?php dynamic_sidebar( 'top-photo-2-heading') ; ?></h1>                   
              </div> 



              
              
              <?php
           $pageCardPost1 = new WP_Query(array(
             'post_type' => 'post',
             'orderby' => 'date',
             'order'    => 'desc',
             'posts_per_page' => 1,
            
             

           ));


            while ($pageCardPost1->have_posts()) {
              $pageCardPost1->the_post(); ?>                 
               <div class="col-md-4 position-relative ps-5 animate__animated animate__fadeInDown">               
                 <div class="boxed-3">
                     <p class="fs-6 text-center" style=" text-align:center; width:4em;"><?php the_date('M j, Y');?></p>           
                 </div>
                 <a href="<?php the_permalink(); ?>">               
               <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?></a>
                <?php  } wp_reset_postdata();
          ?>

              

<?php
           $pageCardPost1 = new WP_Query(array(
             'post_type' => 'post',
             'orderby' => 'date',
             'order'    => 'desc',
             'posts_per_page' => 1,
             'offset' => 1
            
             

           ));


            while ($pageCardPost1->have_posts()) {
              $pageCardPost1->the_post(); ?> 
              <a href="<?php the_permalink(); ?>">               
               <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?></a>      
               <div class="boxed-4">
            <p class="fs-6 text-center" style=" text-align:center; max-width:4em;"><?php echo get_the_date('M j, Y'); ?></p>           
        </div> <?php  } wp_reset_postdata();
          ?> 

          


<?php
           $pageCardPost1 = new WP_Query(array(
             'post_type' => 'post',
             'orderby' => 'date',
             'order'    => 'desc',
             'posts_per_page' => 1,
             'offset' => 2
            
             

           ));


            while ($pageCardPost1->have_posts()) {
              $pageCardPost1->the_post(); ?> 
              <a href="<?php the_permalink(); ?>">               
               <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?></a>          
               <div class="boxed-5">
                 <p class="fs-6 text-center" style=" text-align:center; max-width:4em;"><?php echo get_the_date('M j, Y'); ?></p>                             
             </div><?php  } wp_reset_postdata();
          ?> 

             <div class="sidebar-button  mt-3">              
               <?php dynamic_sidebar('sidebar-button');?>                      
             </div>    
              </div>
            </div>
              
          </section>
     
          
      
        
        
     <section class="mid-section">
    
     <div class="card mb-3 ms-5 me-5">
       <div class="row g-0">
         <div class="col-md-4">
         <div data-aos="fade-down"
          data-aos-easing="linear"
         data-aos-duration="1500">
         <?php dynamic_sidebar('about-me-photo');?>
         </div>
         </div>



         <div class="col-md-8">
           <div class="card-body">
           <div data-aos="fade-up"
             data-aos-duration="3000">
             <h5 class="card-title text-center fs-1"><?php dynamic_sidebar('about-me-heading');?></h5></div>
             <div data-aos="fade-up"
             data-aos-duration="3000">
             <p class="card-text text-center"><?php dynamic_sidebar('about-text');?></p></div>


             <div data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
             <div class="carousel-flipper mx-auto d-flex justify-content-center">
               <div class="col-md-4">
                 <div class="carousel-flipper mx-auto">            
                     <p class="carousel-title text-center" style="font-family: 'Raleway', sans-serif;"><?php dynamic_sidebar( 'thought-slider-heading' );?></p>
                     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                       <div class="carousel-indicators">
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                       </div>
                       <div class="carousel-inner">
                         <div class="carousel-item active">
                           <?php dynamic_sidebar('thought-slider-1');?>                   
                         </div>
                         <div class="carousel-item">
                         <?php dynamic_sidebar('thought-slider-2');?>            
                         </div>
                         <div class="carousel-item">
                         <?php dynamic_sidebar('thought-slider-3');?>                   
                         </div>
                       </div>
                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                       </button>                  
                     </div>
                     </div>       
           </div>
         </div>
       </div> 
       </div>    
     </section>

     
     <section class="top-section-1" style="background-image: url('<?php echo esc_url( get_theme_mod( 'areli_header_bg' ) ); ?>');">  
          
     </section>
     
     <section class="articles-section">        
     <div data-aos="zoom-in-right"><h1 class="article-title text-center"><?php dynamic_sidebar('article-section-header');?></h1></div>   
       <div class="row row-cols-1 row-cols-md-3 g-4 flex-wrap">
         <div class="article col">  
           <div class="card">
             <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1500">
             <div class="text-center">
           <?php dynamic_sidebar('article-image-1');?></div></div> 
             <div class="article-body card-body">
             <div data-aos="zoom-in">
               <h5 class="article-card-title card-title text-center fs-2"><?php dynamic_sidebar( 'article-title-1') ; ?></h5></div>
               <div data-aos="zoom-in">
                 <div class="article-card-p">
               <p class="article-card-p card-text text-center"><?php dynamic_sidebar( 'article-paragraph-1') ; ?></p>
            </div>
              </div>
              <div class="article-link text-center">
               <p class="article-link text-center"><b><a href="default.asp" target="_blank">
                 <?php dynamic_sidebar( 'article-link-1') ; ?>
            </div>
                </a>
              </b>
            </p>
             </div>
           </div>
         </div>
         <div class="article col">
           <div class="card">
           <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1500">
             <div class="text-center">
           <?php dynamic_sidebar('article-image-2');?></div></div>   
             <div class="article-body card-body">
             <div data-aos="zoom-in">
               <h5 class="article-card-title card-title text-center fs-2"><?php dynamic_sidebar( 'article-title-2') ; ?></h5></div>
               <div data-aos="zoom-in">
               <div class="article-card-p">
               <p class="article-card-text card-text text-center"><?php dynamic_sidebar( 'article-paragraph-2') ; ?></p></div></div>
               <div class="article-link text-center">
               <p class="article-link text-center"><b><a href="default.asp" target="_blank">
                 <?php dynamic_sidebar( 'article-link-2') ; ?>
            </div></a></b></p>
             </div>
           </div>
         </div>
         <div class="article col">
           <div class="card">
           <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1500">
             <div class="text-center">
           <?php dynamic_sidebar('article-image-3');?></div></div>   
             <div class="article-body card-body">
             <div data-aos="zoom-in">
               <h5 class="article-card-title card-title text-center fs-2"><?php dynamic_sidebar( 'article-title-3') ; ?></h5></div>
               <div data-aos="zoom-in">
               <div class="article-card-p">
               <p class="article-card-text card-text text-center"><?php dynamic_sidebar( 'article-paragraph-3') ; ?></p></div></div>
               <div class="article-link text-center">
               <p class="article-link text-center"><b><a href="default.asp" target="_blank">
                 <?php dynamic_sidebar( 'article-link-3') ; ?>
            </div></a></b></p>
             </div>
           </div>
         </div>   
           <div class="article col">
             <div class="card">
             <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1500">
             <div class="text-center">
             <?php dynamic_sidebar('article-image-4');?></div></div>   
               <div class="article-body card-body">
               <div data-aos="zoom-in">
                 <h5 class="article-card-title card-title text-center fs-2"><?php dynamic_sidebar( 'article-title-4') ; ?></h5></div>
                 <div data-aos="zoom-in">
                 <div class="article-card-p">
                 <p class="article-card-text card-text text-center"><?php dynamic_sidebar( 'article-paragraph-4') ; ?></p></div></div>
                 <div class="article-link text-center">
               <p class="article-link text-center"><b><a href="default.asp" target="_blank">
                 <?php dynamic_sidebar( 'article-link-4') ; ?>
            </div></a></b></p>
               </div>
             </div>
           </div>
           <div class="article col">
             <div class="card">
             <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1500">
             <div class="text-center">               
             <?php dynamic_sidebar('article-image-5');?></div></div>  
               <div class="article-body card-body">
               <div data-aos="zoom-in">
                 <h5 class="article-card-title card-title text-center fs-2"><?php dynamic_sidebar( 'article-title-5') ; ?></h5></div>
                 <div data-aos="zoom-in">
                 <div class="article-card-p">
                 <p class="article-card-text card-text text-center"><?php dynamic_sidebar( 'article-paragraph-5') ; ?></p></div></div>
                 <div class="article-link text-center">
               <p class="article-link text-center"><b><a href="default.asp" target="_blank">
                 <?php dynamic_sidebar( 'article-link-5') ; ?>
            </div></a></b></p>
               </div>
             </div>
           </div>
           <div class="article col">
             <div class="card">
             <div data-aos="fade-down"
             data-aos-easing="linear"
             data-aos-duration="1500">
             <div class="text-center">
             <?php dynamic_sidebar('article-image-6');?></div></div>  
               <div class="article-body card-body">
               <div data-aos="zoom-in">
                 <h5 class="article-card-title card-title text-center fs-2"><?php dynamic_sidebar( 'article-title-6') ; ?></h5></div>
                 <div data-aos="zoom-in">
                 <div class="article-card-p">
                 <p class="article-card-text card-text text-center"><?php dynamic_sidebar( 'article-paragraph-6') ; ?></p></div></div>
                 <div class="article-link text-center">
               <p class="article-link text-center"><b><a href="default.asp" target="_blank">
                 <?php dynamic_sidebar( 'article-link-6') ; ?>
            </div></a></b></p>
               </div>
             </div>
           </div>
     </section>
     
     
     
           
     
       
     <section class="instagram">
     <div data-aos="zoom-in"
      data-aos-duration="1500">
       <div class="instagram-border-top">
         <div class="insta-title text-center">
         <p class="text-center text-center"> <?php dynamic_sidebar('instagram-header'); ?></p> 
            </div>  
       </div>
       <div class="text-center">
       <?php dynamic_sidebar('instagram-feed'); ?>
            </div>
       <div class="instagram-border-bottom">         
           <div class="social-icons-insta text-center">
         <?php dynamic_sidebar('instagram-social'); ?>
            </div>    
       </div>
       </div>
     </section>

  
 

<?php
get_footer();
