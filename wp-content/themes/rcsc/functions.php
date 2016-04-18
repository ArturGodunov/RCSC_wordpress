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
 * Enabling Support for Post Thumbnails
 */
add_theme_support( 'post-thumbnails' );

/**
 * Change logo in login
 */
function my_custom_login_logo(){
    echo '<style type="text/css">h1 a { background-image: url('.get_bloginfo('template_directory').'/images/header_logo.png) !important; background-size: contain !important; width: 100% !important;}</style>';
}
add_action('login_head', 'my_custom_login_logo');

/**
 * Change logo in adminbar
 */
add_action('add_admin_bar_menus', 'reset_admin_wplogo');
function reset_admin_wplogo(  ){
    remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 ); // remove standard

    add_action( 'admin_bar_menu', 'my_admin_bar_wp_menu', 10 ); // add custom
}
function my_admin_bar_wp_menu( $wp_admin_bar ) {
    $wp_admin_bar->add_menu( array(
        'id'    => 'wp-logo',
        'title' => '<img style="max-width:50px; height:auto; margin-top: 8px; " src="'. get_bloginfo('template_directory') .'/images/logo.png" alt="" >',
        'href'  => home_url(),
        'meta'  => array(
            'title' => 'О моем сайте',
        ),
    ) );
}

/**
 * Hide some items in admin
 */
add_action('admin_head', 'custom_colors');
function custom_colors() {
    echo '<style type="text/css">#wp-admin-bar-new-content, #wp-admin-bar-comments, #collapse-menu, #wp-admin-bar-edit-profile {display: none !important;}</style>';
}

/**
 * Redirect to post
 */
add_action('load-index.php', 'dashboard_Redirect');
function dashboard_Redirect(){
    wp_redirect(admin_url('/edit.php'));
}


/**
 * Remove some items in toolbar
 */
function remove_menus(){
    global $menu;
    $restricted = array(
        __('Dashboard'),
        __('Media'),
        __('Pages'),
        __('Appearance'),
        __('Tools'),
        __('Users'),
        __('Settings'),
        __('Comments'),
        __('Plugins'),
        __('Contact')
    );
    end ($menu);
    while (prev($menu)){
        $value = explode(' ', $menu[key($menu)][0]);
        if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
            unset($menu[key($menu)]);
        }
    }
}
add_action('admin_menu', 'remove_menus');

/**
 * Remove update
 */
if( !current_user_can( 'edit_users' ) ){
    add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
    add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
    // for 3.0+
    add_filter( 'pre_site_transient_update_core', create_function( '$a', "return null;" ) );
}



