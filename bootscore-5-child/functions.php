<?php

	// style and scripts
	 add_action( 'wp_enqueue_scripts', 'bootscore_5_child_enqueue_styles' );
	 function bootscore_5_child_enqueue_styles() {
         
         // style.css
         wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 

         // custom css
         wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false, '', 'all');
         
         // custom.js
         wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js',  array('jquery'),  null , true);

     };

     //animate.css
     function load_animate_css() {
        // Load Animate CSS
        wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );     
      
      }
      add_action( 'wp_enqueue_scripts', 'load_animate_css' );


      //load Animate On Scroll
      function load_animate_scroll() {
        // Load Animate CSS
        wp_enqueue_style( 'animate-scroll-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
        wp_enqueue_script( 'animate-scroll-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js' );      
      
      }
      add_action( 'wp_enqueue_scripts', 'load_animate_scroll' );



     // Dequeue parent bootstrap.min.css and enqueue child
function bootscore_remove_scripts() {
    
    // Dequeue parent bootstrap.min.css
    wp_dequeue_style( 'bootstrap' );
    wp_deregister_style( 'bootstrap' );

    // Register your child bootstrap.min.css
    wp_enqueue_style( 'child-theme-bootstrap', get_stylesheet_directory_uri() .'/css/lib/bootstrap.min.css' , array('parent-style'));
}
add_action( 'wp_enqueue_scripts', 'bootscore_remove_scripts', 20 );



 /**
 * Filter the except length to number of words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function register_areli_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu (Areli Front-Page)' ),
        'footer-menu' => __( 'Footer Menu (Areli Front-Page)' ),
       )
     );
   }
   add_action( 'init', 'register_areli_menus' );


   add_filter('jpeg_quality', function($arg){return 100;});



function areli_sidebars() {



    register_sidebar( array(
        'id'            => 'navbar-logo',
        'name'          => esc_html__( 'Navbar Logo'),
        'description'   => esc_html__( 'Top Left Navbar Logo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="navbar-brand">',
        'after_title'   => '</h2>',
    ) );
   

    register_sidebar( array(
        'id'            => 'navbar-social',
        'name'          => esc_html__( 'Navbar Social Icons'),
        'description'   => esc_html__( 'Social Icons for Navbar'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'id'            => 'navbar-search',
        'name'          => esc_html__( 'Navbar Search Bar or Icon'),
        'description'   => esc_html__( 'Add a Search Feature to Navbar'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-1',
        'name'          => esc_html__( 'Top Section Photo 1'),
        'class'          => 'image-post-1',
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-1-heading',
        'name'          => esc_html__( 'Top Photo 1 Heading'),
        'class'          => 'image-post-1',
        'description'   => esc_html__( 'Widget to change heading for first photo at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    
    register_sidebar( array(
        'id'            => 'top-photo-1-date',
        'name'          => esc_html__( 'Top Photo 1 Date/Time'),
        'class'          => 'image-post-1',
        'description'   => esc_html__( 'Widget to change date/time for first photo at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );



    register_sidebar( array(
        'id'            => 'top-photo-2',
        'name'          => esc_html__( 'Top Section Photo 2'),
        'description'   => esc_html__( 'Widget to change photos at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'id'            => 'top-photo-2-date',
        'name'          => esc_html__( 'Top Photo 2 Date/Time'),
        'class'          => 'image-post-1',
        'description'   => esc_html__( 'Widget to change date/time for second photo at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );


    register_sidebar( array(
        'id'            => 'top-photo-2-heading',
        'name'          => esc_html__( 'Top Photo 2 Heading'),
        'class'          => 'image-post-1',
        'description'   => esc_html__( 'Widget to change heading for second photo at the top of landing page'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'sidebar-button',
        'name'          => esc_html__( 'Sidebar Button'),
        'class'          => 'image-post-1',
        'description'   => esc_html__( 'Widget to Change Sidebar Button'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'about-me-photo',
        'name'          => esc_html__( 'About Me Photo'),
        'description'   => esc_html__( 'About me photo'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );
    register_sidebar( array(
        'id'            => 'about-heading',
        'name'          => esc_html__( 'About Me Heading'),
        'description'   => esc_html__( 'About Me Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
    register_sidebar( array(
        'id'            => 'about-text',
        'name'          => esc_html__( 'About Me Text'),
        'description'   => esc_html__( 'Text for about me section'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
      'id'            => 'thought-slider-heading',
      'name'          => esc_html__( 'Mini Slide Heading'),
      'description'   => esc_html__( 'Headline for Mini Slider'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<p>',
      'after_title'   => '</p>',
  ) );



    register_sidebar( array(
        'id'            => 'thought-slider-1',
        'name'          => esc_html__( 'Slider Image 1'),
        'description'   => esc_html__( 'First Image for Slider'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img class="d-block w-100 img-fluid">',
        'after_title'   => '</img>',
    ) );
    


    register_sidebar( array(
        'id'            => 'thought-slider-2',
        'name'          => esc_html__( 'Slider Image 2'),
        'description'   => esc_html__( 'Second Image for Slider'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img class="d-block w-100 img-fluid">',
        'after_title'   => '</img>',
    ) );
    register_sidebar( array(
        'id'            => 'thought-slider-3',
        'name'          => esc_html__( 'Slider Image 3'),
        'description'   => esc_html__( 'Third Image for Slider'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img class="d-block w-100 img-fluid">',
        'after_title'   => '</img>',
    ) );
    register_sidebar( array(
        'id'            => 'parallax-bg',
        'name'          => esc_html__( 'Parallax Banner Image'),
        'description'   => esc_html__( 'Parallax Banner'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img class="top-section-1>',
        'after_title'   => '</img>',
    ) );


    register_sidebar( array(
        'id'            => 'article-section-header',
        'name'          => esc_html__( 'Article Section Main Header'),
        'description'   => esc_html__( 'The Headline for Article Section'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>',
    ) );




    register_sidebar( array(
      'id'            => 'article-title-1',
      'name'          => esc_html__( 'Article Title 1'),
      'description'   => esc_html__( 'Article Title 1'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '',
      'after_title'   => ''
  ) );
  




    register_sidebar( array(
        'id'            => 'article-image-1',
        'name'          => esc_html__( 'Article Image 1'),
        'description'   => esc_html__( 'Mid Section Images'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );
    
    register_sidebar( array(
        'id'            => 'article-paragraph-1',
        'name'          => esc_html__( 'Article Paragraph 1'),
        'description'   => esc_html__( 'Mid Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

        
    register_sidebar( array(
        'id'            => 'article-link-1',
        'name'          => esc_html__( 'Article Link 1'),
        'description'   => esc_html__( 'Mid Section Links'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );



    register_sidebar( array(
      'id'            => 'article-title-2',
      'name'          => esc_html__( 'Article Title 2'),
      'description'   => esc_html__( 'Article Title 2'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '',
      'after_title'   => ''
  ) );

    register_sidebar( array(
        'id'            => 'article-image-2',
        'name'          => esc_html__( 'Article Image 2'),
        'description'   => esc_html__( 'Mid Section Images'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    register_sidebar( array(
        'id'            => 'article-paragraph-2',
        'name'          => esc_html__( 'Article Paragraph 2'),
        'description'   => esc_html__( 'Mid Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'article-link-2',
        'name'          => esc_html__( 'Article Link 2'),
        'description'   => esc_html__( 'Mid Section Links'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );


    register_sidebar( array(
      'id'            => 'article-title-3',
      'name'          => esc_html__( 'Article Title 3'),
      'description'   => esc_html__( 'Article Title 3'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '',
      'after_title'   => ''
  ) );
    
    register_sidebar( array(
        'id'            => 'article-image-3',
        'name'          => esc_html__( 'Article Image 3'),
        'description'   => esc_html__( 'Mid Section Images'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );


    register_sidebar( array(
        'id'            => 'article-paragraph-3',
        'name'          => esc_html__( 'Article Paragraph 3'),
        'description'   => esc_html__( 'Mid Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'article-link-3',
        'name'          => esc_html__( 'Article Link 3'),
        'description'   => esc_html__( 'Mid Section Links'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );


    register_sidebar( array(
      'id'            => 'article-title-4',
      'name'          => esc_html__( 'Article Title 4'),
      'description'   => esc_html__( 'Article Title 4'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '',
      'after_title'   => ''
  ) );

    register_sidebar( array(
        'id'            => 'article-image-4',
        'name'          => esc_html__( 'Article Image 4'),
        'description'   => esc_html__( 'Mid Section Images'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    register_sidebar( array(
        'id'            => 'article-paragraph-4',
        'name'          => esc_html__( 'Article Paragraph 4'),
        'description'   => esc_html__( 'Mid Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'article-link-4',
        'name'          => esc_html__( 'Article Link 4'),
        'description'   => esc_html__( 'Mid Section Links'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
      'id'            => 'article-title-5',
      'name'          => esc_html__( 'Article Title 5'),
      'description'   => esc_html__( 'Article Title 5'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '',
      'after_title'   => ''
  ) );

    register_sidebar( array(
        'id'            => 'article-image-5',
        'name'          => esc_html__( 'Article Image 5'),
        'description'   => esc_html__( 'Mid Section Images'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );

    register_sidebar( array(
        'id'            => 'article-paragraph-5',
        'name'          => esc_html__( 'Article Paragraph 5'),
        'description'   => esc_html__( 'Mid Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'article-link-5',
        'name'          => esc_html__( 'Article Link 5'),
        'description'   => esc_html__( 'Mid Section Links'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );
    

    register_sidebar( array(
      'id'            => 'article-title-6',
      'name'          => esc_html__( 'Article Title 6'),
      'description'   => esc_html__( 'Article Title 6'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '',
      'after_title'   => ''
  ) );

    register_sidebar( array(
        'id'            => 'article-image-6',
        'name'          => esc_html__( 'Article Image 6'),
        'description'   => esc_html__( 'Mid Section Images'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) ); 
    
    register_sidebar( array(
        'id'            => 'article-paragraph-6',
        'name'          => esc_html__( 'Article Paragraph 6'),
        'description'   => esc_html__( 'Mid Section Paragraph'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'id'            => 'article-link-6',
        'name'          => esc_html__( 'Article Link 6'),
        'description'   => esc_html__( 'Mid Section Links'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
        'id'            => 'instagram-feed',
        'name'          => esc_html__( 'Instagram Feed'),
        'description'   => esc_html__( 'Add Instagram Feed. You will need a Instagram App or plugin to use this feature.'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<img>',
        'after_title'   => '</img>',
    ) );
    

    register_sidebar( array(
        'id'            => 'instagram-header',
        'name'          => esc_html__( 'Instagram Header'),
        'description'   => esc_html__( 'Add Instagram Heading'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );
    
    
    register_sidebar( array(
        'id'            => 'instagram-social',
        'name'          => esc_html__( 'Instagram Social Icons'),
        'description'   => esc_html__( 'Add Instagram Social Icons'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<ul>',
        'after_title'   => '</ul>',
    ) );


    register_sidebar( array(
        'id'            => 'footer-copyright',
        'name'          => esc_html__( 'Footer Copyright'),
        'description'   => esc_html__( 'Newsletter Section'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<p>',
        'after_title'   => '</p>',
    ) );

    register_sidebar( array(
        'id'            => 'footer-newsletter-heading',
        'name'          => esc_html__( 'Footer Newsletter Heading'),
        'description'   => esc_html__( 'Newsletter Section'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'id'            => 'footer-newsletter-box',
        'name'          => esc_html__( 'Footer Newsletter Form'),
        'description'   => esc_html__( 'Newsletter Form'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );





    
   

    register_sidebar( array(
        'id'            => 'footer-menu-1',
        'name'          => esc_html__( 'Footer Menu 1'),
        'description'   => esc_html__( 'First Footer Menu Area'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<li>',
        'after_title'   => '</li>',
    ) );


    

    register_sidebar( array(
        'id'            => 'footer-social',
        'name'          => esc_html__( 'Footer Social Icons'),
        'description'   => esc_html__( 'Social Icons For Footer'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );




}
  
add_action( 'init', 'areli_sidebars' );




  function theme_customize_register( $wp_customize ) {



    
    //Header Logo Color
    $wp_customize->add_setting( 'nav_logo_color', array(
        'type' => 'theme_mod',
        'default'   => '#C17C74',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_logo_color', array(
        'section' => 'colors',
        'label'   => esc_html__( ' Navbar Logo color', 'theme' ),
        'settings' => 'nav_logo_color'
      ) ) );


    //Header Link color
    $wp_customize->add_setting( 'nav_link_color', array(
      'type' => 'theme_mod',
      'default'   => '#000000',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_link_color', array(
      'section' => 'colors',
      'label'   => esc_html__( ' Navbar Link color', 'theme' ),
      'settings' => 'nav_link_color'
    ) ) );


    
    // Social Icons Colors Navbar
    $wp_customize->add_setting( 'social_link_color', array(
        'type' => 'theme_mod',
        'default'   => '#000000',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_link_color', array(
        'section' => 'colors',
        'label'   => esc_html__( ' Social Icon color', 'theme' ),
        'settings' => 'social_link_color'
      ) ) );

         // Search Icon Color
    $wp_customize->add_setting( 'search_icon_color', array(
      'type' => 'theme_mod',
      'default'   => '#000000',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_icon_color', array(
      'section' => 'colors',
      'label'   => esc_html__( ' Search Icon color', 'theme' ),
      'settings' => 'search_icon_color'
    ) ) );


    //Search Button Background Color
    $wp_customize->add_setting( 'search_button_color', array(
      'type' => 'theme_mod',
      'default'   => '#999999',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_button_color', array(
      'section' => 'colors',
      'label'   => esc_html__( ' Collapsed Search Button Color', 'theme' ),
      'settings' => 'search_button_color'
    ) ) );




      //Instagram Social Icons

      $wp_customize->add_setting( 'insta_social_colors', array(
        'type' => 'theme_mod',
        'default'   => '#f1e7dd',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insta_social_colors', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Instagram Social Icon Color', 'theme' ),
        'settings' => 'insta_social_colors'
      ) ) );

        //Instagram Title

        $wp_customize->add_setting( 'insta_title_colors', array(
            'type' => 'theme_mod',
            'default'   => '#f1e7dd',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
          ) );
      
          $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insta_title_colors', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Instagram Title Color', 'theme' ),
            'settings' => 'insta_title_colors'
          ) ) );


            //Instagram Border Color

        $wp_customize->add_setting( 'insta_border_colors', array(
            'type' => 'theme_mod',
            'default'   => '#2A3D45',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
          ) );
      
          $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'insta_border_colors', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Instagram Border Color', 'theme' ),
            'settings' => 'insta_border_colors'
          ) ) );

    
    // Header background
    $wp_customize->add_setting( 'header_background', array(
      'type' => 'theme_mod',
      'default'   => '#f1e7dd',
      'transport' => 'refresh',
     
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background', array(
      'section' => 'colors',
      'label'   => esc_html__( 'Header Background', 'theme' ),
      'settings' => 'header_background'
    ) ) );


       // Header Image Titles
       $wp_customize->add_setting( 'header_image_title', array(
        'type' => 'theme_mod',
        'default'   => '#000000',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_image_title', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Header Image Title', 'theme' ),
        'settings' => 'header_image_title'
      ) ) );


    
    
    // Date Box Font Color
    $wp_customize->add_setting( 'date_box', array(
        'type' => 'theme_mod',
        'default'   => '#C17C74',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_box', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Date Box Font Colors', 'theme' ),
        'settings' => 'date_box'
      ) ) );

          // Date Box Background Color
    $wp_customize->add_setting( 'date_box_background', array(
        'type' => 'theme_mod',
        'default'   => '#ffffff',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'date_box_background', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Date Box Background Color', 'theme' ),
        'settings' => 'date_box_background'
      ) ) );



      
    // About Me background
    $wp_customize->add_setting( 'about_background', array(
        'type' => 'theme_mod',
        'default'   => '#2A3D45',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'about_background', array(
        'section' => 'colors',
        'label'   => esc_html__( 'About Me Background Color', 'theme' ),
        'settings' => 'about_background'
      ) ) );


      // About Me Heading
    $wp_customize->add_setting( 'about_header', array(
        'type' => 'theme_mod',
        'default'   => '#F1E7DD',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'about_header', array(
        'section' => 'colors',
        'label'   => esc_html__( 'About Me Header Color', 'theme' ),
        'settings' => 'about_header'
      ) ) );


        // About Me Text
    $wp_customize->add_setting( 'about_text', array(
        'type' => 'theme_mod',
        'default'   => '#F1E7DD',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'about_text', array(
        'section' => 'colors',
        'label'   => esc_html__( 'About Me Text', 'theme' ),
        'settings' => 'about_text'
      ) ) );


      

        // Slider Header
    $wp_customize->add_setting( 'slider_text', array(
        'type' => 'theme_mod',
        'default'   => '#F1E7DD',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slider_text', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Slider Header Text', 'theme' ),
        'settings' => 'slider_text'
      ) ) );


            // Article Section Header
    $wp_customize->add_setting( 'article_header', array(
        'type' => 'theme_mod',
        'default'   => '#C17C74',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'article_header', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Article Section Header', 'theme' ),
        'settings' => 'article_header'
      ) ) );


                // Article Section Background
    $wp_customize->add_setting( 'article_background', array(
        'type' => 'theme_mod',
        'default'   => '#f1e7dd',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'article_background', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Article Section Background', 'theme' ),
        'settings' => 'article_background'
      ) ) );

      
                // Article Section Titles
    $wp_customize->add_setting( 'article_titles', array(
        'type' => 'theme_mod',
        'default'   => '#2A3D45',
        'transport' => 'refresh',
       
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'article_titles', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Article Section Titles', 'theme' ),
        'settings' => 'article_titles'
      ) ) );


                // Article Section Paragraphs
                $wp_customize->add_setting( 'article_paragraphs', array(
                    'type' => 'theme_mod',
                    'default'   => '#000000',
                    'transport' => 'refresh',
                   
                  ) );
              
                  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'article_paragraphs', array(
                    'section' => 'colors',
                    'label'   => esc_html__( 'Article Section Paragraphs', 'theme' ),
                    'settings' => 'article_paragraphs'
                  ) ) );


                  
                // Article Section Links
                $wp_customize->add_setting( 'article_links', array(
                    'type' => 'theme_mod',
                    'default'   => '#C17C74',
                    'transport' => 'refresh',
                   
                  ) );
              
                  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'article_links', array(
                    'section' => 'colors',
                    'label'   => esc_html__( 'Article Section Links', 'theme' ),
                    'settings' => 'article_links'
                  ) ) );

          


       // Footer background
       $wp_customize->add_setting( 'footer_background', array(
        'type' => 'theme_mod',
        'default'   => '#c17c74',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_background', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Footer Background', 'theme' ),
        'settings' => 'footer_background'
      ) ) );

       // Footer Links
       $wp_customize->add_setting( 'footer_links', array(
        'type' => 'theme_mod',
        'default'   => '#f1e7dd',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',
      ) );
  
      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_links', array(
        'section' => 'colors',
        'label'   => esc_html__( 'Footer Link Color', 'theme' ),
        'settings' => 'footer_links'
      ) ) );    
      
      
         // Newsletter Title
         $wp_customize->add_setting( 'footer_newsletter', array(
            'type' => 'theme_mod',
            'default'   => '#2A3D45',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
          ) );
      
          $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_newsletter', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Footer Newsletter Title', 'theme' ),
            'settings' => 'footer_newsletter'
          ) ) );    

               // Footer Copyright
         $wp_customize->add_setting( 'footer_copyright', array(
            'type' => 'theme_mod',
            'default'   => '#2A3D45',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_hex_color',
          ) );
      
          $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright', array(
            'section' => 'colors',
            'label'   => esc_html__( 'Footer Copyright Color', 'theme' ),
            'settings' => 'footer_copyright'
          ) ) ); 


                      // Sroll To Top Button Color
         $wp_customize->add_setting( 'scroll_top', array(
          'type' => 'theme_mod',
          'default'   => '#000000',
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',
        ) );
    
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'scroll_top', array(
          'section' => 'colors',
          'label'   => esc_html__( 'Scroll To Top Button', 'theme' ),
          'settings' => 'scroll_top'
        ) ) ); 
  
  }

  add_action( 'customize_register', 'theme_customize_register' );



  add_action( 'wp_head', 'areli_customize_css');
function areli_customize_css()
{
    ?>
         <style type="text/css">
             .header-logo {color:<?php echo get_theme_mod('nav_logo_color', '#C17C74'); ?>; }  
             .top-photo-heading-1 p a, .top-photo-heading-2 p a {color:<?php echo get_theme_mod('header_image_title', '#000000'); ?>; }    
             .top-section-2{ background-color:<?php echo get_theme_mod('header_background', '#f1e7dd'); ?>; }
             .footer { background-color:<?php echo get_theme_mod('footer_background', '#c17c74'); ?>; } 
             .mid-section { background-color:<?php echo get_theme_mod('about_background', '#2A3D45'); ?>; } 
              ul li a {color:<?php echo get_theme_mod('nav_link_color', '#000000'); ?>; }  
             .card-title{color:<?php echo get_theme_mod('about_header', '#F1E7DD'); ?>; }
             .boxed, .boxed-2, .boxed-3, .boxed-4, .boxed-5{color:<?php echo get_theme_mod('date_box', '#C17C74'); ?>; }
             .boxed, .boxed-2, .boxed-3, .boxed-4, .boxed-5{background-color:<?php echo get_theme_mod('date_box_background', '#ffffff'); ?>; }
             .card-text{color:<?php echo get_theme_mod('about_text', '#F1E7DD'); ?>; } 
             .article-title{color:<?php echo get_theme_mod('article_header', '#C17C74'); ?>; }
             .carousel-title{color:<?php echo get_theme_mod('slider_text', '#F1E7DD'); ?>; }
             .article-card-title{color:<?php echo get_theme_mod('article_titles', '#2A3D45'); ?>; }
             .articles-section{ background-color:<?php echo get_theme_mod('article_background', '#f1e7dd'); ?>; }
             .article-card-p{color:<?php echo get_theme_mod('article_paragraphs', '#000000'); ?>; } 
             .article-link a{color:<?php echo get_theme_mod('article_links', '#C17C74'); ?>; }                    
             .social-icons a i{color:<?php echo get_theme_mod('social_link_color', '#000000'); ?>; } 
             .social-icons-insta a {color:<?php echo get_theme_mod('insta_social_colors', '#f1e7dd'); ?>; } 
             .insta-title {color:<?php echo get_theme_mod('insta_title_colors', '#f1e7dd'); ?>; } 
             .instagram-border-top, .instagram-border-bottom  {background-color:<?php echo get_theme_mod('insta_border_colors', '#2A3D45'); ?>; } 
             .footer-links a{color:<?php echo get_theme_mod('footer_links', '#f1e7dd'); ?>; }   
             .newsletter-title{color:<?php echo get_theme_mod('footer_newsletter', '#2A3D45'); ?>; } 
             .footer-copyright{color:<?php echo get_theme_mod('footer_copyright', '#2A3D45'); ?>; } 
             #myBtn{background-color:<?php echo get_theme_mod('scroll_top', '#000000'); ?>; } 
             .search-wpb .fa-search {color:<?php echo get_theme_mod('search_icon_color', '#000000'); ?>; }
             .wpbsearchform {background-color:<?php echo get_theme_mod('search_button_color', '#999999'); ?>; } 

         </style>
    <?php
}



//UPLOAD HEADER BACKGROUND IMAGE -- Theme Customizer
function areli_head_bg( $wp_customize ) {
    $wp_customize->add_section( 'areli_header_bg_section' , array(
    'title'       => __( 'Parallax Background Image', 'your_themename' ),
    'priority'    => 40,
    'description' => 'Parallax Image Background',
) );
$wp_customize->add_setting( 'areli_header_bg' );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'areli_header_bg', array(
    'label'    => __( 'Background Image', 'areli' ),
    'section'  => 'areli_header_bg_section',
    'settings' => 'areli_header_bg',
) ) );    
}
add_action('customize_register', 'areli_head_bg');


//Search Icon
add_filter('wp_nav_menu_items', 'wpb_add_search_toggle', 10, 2);
// Filter in Search Toggle to end of primary menu
function wpb_add_search_toggle($items, $args) {
    if( $args->theme_location == 'header-menu' ) //Swap to your location
        $items .= '<li class="search search-wpb"><a class="search-icon"><i class="fas fa-search"></i></a><div style="display:none;" class="wpbsearchform">'. get_search_form(false) .'</div></li>';
        return $items;
}