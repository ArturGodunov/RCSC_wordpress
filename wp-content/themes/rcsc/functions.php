<?php
/**
 * Remove rsd
 */
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
add_filter('xmlrcp_enabled','__return_false');
/**
 * Remove emoji
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Hide meta
 */
remove_action('wp_head', 'wp_generator');

/**
 * Turn off admin bar
 */
show_admin_bar(false);

/**
 * Add style
 */
function add_style() {
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/style.css">' . "\n";
}
add_action('wp_head', 'add_style');

/**
 * Add scripts
 */
function add_scripts() {
    echo '<script src="' . get_stylesheet_directory_uri() . '/js/libs/jquery-1.11.1.min.js"></script>' . "\n";
    echo '<script src="' . get_stylesheet_directory_uri() . '/js/libs/jquery.countdown.min.js"></script>' . "\n";
    echo '<script src="https://maps.googleapis.com/maps/api/js"></script>' . "\n";
    echo '<script src="' . get_stylesheet_directory_uri() . '/js/scripts.js"></script>' . "\n";
}
add_action('wp_footer', 'add_scripts');

/**
 * Include templates
 */
//function flats_template( $template ) {
//
//    if( is_page('contacts') ){
//        if ( $new_template = locate_template( array( 'contacts.php' ) ) )
//            return $new_template ;
//    }
//
//    return $template;
//}
//add_filter('template_include', 'flats_template');

