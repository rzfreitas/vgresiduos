<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/js/foundation.min.js', array( 'jquery' ), '6.2.3', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '', true );
     // Register Motion-UI
    wp_enqueue_style( 'motion-ui-css', get_template_directory_uri() . '/vendor/motion-ui/dist/motion-ui.min.css', array(), '', 'all' );
	
	// Select which grid system you want to use (Foundation Grid by default)
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/css/foundation.min.css', array(), '', 'all' );
     //wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/foundation-flex.min.css', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
    
    wp_enqueue_style( 'jquerey-ui-css', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', array(), 'all' );

    wp_register_script( 'jquery-ui-js', '//code.jquery.com/ui/1.12.1/jquery-ui.js', array(), '', true );
    wp_enqueue_script('jquery-ui-js');

    //FontaAwesome and Google Fonts
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '', 'all' );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Ubuntu', false );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

    if (is_page('Home') ) {
        wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array(), '', false );
    }
    
    // Carousel slider (post)
    if (is_page(array('7','Home') ) ) {
        wp_enqueue_script( 'flexSlider-js', get_template_directory_uri() . '/assets/js/flexslider.min.js', array( 'jquery' ), '', true );
        wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/assets/css/flexslider.min.css', array(), '', 'all' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
