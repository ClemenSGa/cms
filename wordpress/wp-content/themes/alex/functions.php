<?php

// Remove Emoji-Code
remove_action( 'wp_head', 'print_emoji_detection_script', 7  );
remove_action( 'wp_print_styles', 'print_emoji_styles'  );
add_filter( 'emoji_svg_url', '__return_false'  );


// Enable auto-generated title-tag
add_theme_support( 'title-tag'  );

// Add menu
function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
     )
   );
 }
 add_action( 'init', 'register_menus' );

// Enable style-sheets in functions.php
wp_enqueue_style( 'style', get_stylesheet_uri() );

?>
