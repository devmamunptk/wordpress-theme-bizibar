<?php
/**
 * Bizever functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bizever
 * @since Bizever 1.0
 */

/**
 * Register block styles.
 */

//  define for branding
define('BIZEVER_TEMPLEATE_DIR', get_template_directory());
define('BIZEVER_TEMPLEATE_DIR_URI', get_template_directory_uri());

//  General Function

 function bizever_general() {
    // Text Domain for Translation
    load_theme_textdomain( 'bizever', get_template_directory(). '/lang' );
    
    // Theme Title
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-link' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    
    // Menu with Text Domain name 
    register_nav_menu( 'main-menu', __('Main Menu', 'bizever') );
    
    // Image Size
    add_image_size( 'bizever-blog-thumbnail', 350, 210, true );
    
    // For Featured Image
    add_theme_support( 'post-thumbnails' );
    
    
    
    
    
    }
    
    add_action('after_setup_theme', 'bizever_general');






//  Enqueue scripts
function bizever_enqueue_scripts() {
    // stylesheet enqueue
    wp_enqueue_style( 'bootstrap', get_theme_file_uri( '/assets/css/bootstrap.min.css' ) );
    wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/assets/css/font-awesome.min.css' ) );
    wp_enqueue_style( 'magnific-popup', get_theme_file_uri( '/assets/css/magnific-popup.css' ) );
    wp_enqueue_style( 'jquery-ui', get_theme_file_uri( '/assets/css/jquery-ui.css' ) );
    wp_enqueue_style( 'animate', get_theme_file_uri( '/assets/css/animate.css' ) );
    wp_enqueue_style( 'owl-carousel', get_theme_file_uri( '/assets/css/owl.carousel.min.css' ) );
    wp_enqueue_style( 'bizever-stylesheet', get_theme_file_uri( '/assets/css/main.css' ) );


    // Scripts
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script( 'popper', get_theme_file_uri( 'assets/js/popper.js'), array('jquery'), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/js/bootstrap.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'owl-carousel', get_theme_file_uri( 'assets/js/owl.carousel.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );

    wp_enqueue_script( 'magnific-popup', get_theme_file_uri( 'assets/js/magnific-popup.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );
    // wp_enqueue_script( 'imagesloaded', get_theme_file_uri( 'assets/js/imagesloaded.pkgd.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'isotope', get_theme_file_uri( 'assets/js/isotope.pkgd.min.js'), array('jquery', 'imagesloaded'), wp_get_theme()->get('Version'), true );
    
    wp_enqueue_script( 'waypoints', get_theme_file_uri( 'assets/js/waypoints.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'counterup', get_theme_file_uri( 'assets/js/jquery.counterup.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'wow', get_theme_file_uri( 'assets/js/wow.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );
    wp_enqueue_script( 'scrollUp', get_theme_file_uri( 'assets/js/scrollUp.min.js'), array('jquery'), wp_get_theme()->get('Version'), true );

    wp_enqueue_script( 'bizever-script', get_theme_file_uri( 'assets/js/script.js'), array('jquery'), wp_get_theme()->get('Version'), true );





}
add_action( 'wp_enqueue_scripts', 'bizever_enqueue_scripts' );



// Additional Files
require_once BIZEVER_TEMPLEATE_DIR . '/inc/breadcrumb.php';


// Theme Options
require_once BIZEVER_TEMPLEATE_DIR . '/inc/theme-options-codestar/codestar-framework.php';
require_once BIZEVER_TEMPLEATE_DIR . '/inc/theme-options-codestar/fields.php';


// A Custom function for get an option
if ( ! function_exists( 'bizever_get_option' ) ) {
    function bizever_get_option( $option = '', $default = null ) {
      $options = get_option( 'bizever_framework' ); // Attention: Set your unique id of the framework
      return ( isset( $options[$option] ) ) ? $options[$option] : $default;
    }
  }

  