<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
  
    // Adding scripts file in the footer
    wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/scripts/vendor/swiper-bundle.min.js', array(), filemtime(get_template_directory() . '/assets/scripts/vendor/swiper-bundle.min.js'), true );
        
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
    
    // Adding Adobe Fonts
    wp_enqueue_style( 'adobe-fonts', 'https://use.typekit.net/tfl5wzf.css', array(), time(), false );
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/style.css'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);