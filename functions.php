<?php

/**
 * Main theme functions
 */

//performance
require_once get_template_directory() . '/inc/class-preformance.php';

function dropsart_theme_support()
{

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    // Set post thumbnail size.
    set_post_thumbnail_size(1200, 9999);
    add_theme_support('title-tag');
    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
            'navigation-widgets',
        )
    );

    load_theme_textdomain('drops-art');
    /*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
    //$loader = new dropsart_Script_Loader();
    //add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );

}

add_action('after_setup_theme', 'dropsart_theme_support');

/* theme scripts */
function dropsart_scripts()
{
    // Register CSS files.
    wp_enqueue_style('dropsart-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.rtl.min.css", array(), '5.1.3', 'all');

    wp_enqueue_style('dropsart-owl-theme-default', get_template_directory_uri() . "/assets/css/owl.theme.default.min.css", array(), '2.3.4', 'all');

    wp_enqueue_style('dropsart-magnific-popu', get_template_directory_uri() . "/assets/css/magnific-popup.min.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-animat', get_template_directory_uri() . "/assets/css/animate.min.css", array(), '4.4.1', 'all');

    wp_enqueue_style('dropsart-boxicons', get_template_directory_uri() . "/assets/css/boxicons.min.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-flaticon', get_template_directory_uri() . "/assets/css/flaticon.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-meanmenu', get_template_directory_uri() . "/assets/css/meanmenu.min.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-nice-select', get_template_directory_uri() . "/assets/css/nice-select.min.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-odometer', get_template_directory_uri() . "/assets/css/odometer.min.css", array(), '1.0', 'all');
    
    wp_enqueue_style('dropsart-style', get_template_directory_uri() . "/assets/css/style.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-dark', get_template_directory_uri() . "/assets/css/dark.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-responsive', get_template_directory_uri() . "/assets/css/responsive.css", array(), '1.0', 'all');

    wp_enqueue_style('dropsart-rtl', get_template_directory_uri() . "/assets/css/rtl.css", array(), '1.0', 'all');


    // Register the js files.
    wp_enqueue_script('dropsart-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.4.1', true);
    
    wp_enqueue_script('dropsart-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '4.4.1', true);
    
    wp_enqueue_script('dropsart-meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.min.js', array(), '1.13.12', true);
    
    wp_enqueue_script('dropsart-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2.3.4', true);
    
    wp_enqueue_script('dropsart-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.3', true);

    wp_enqueue_script('dropsart-nice-select', get_template_directory_uri() . '/assets/js/nice-select.min.js', array(), '1.0', true);

    wp_enqueue_script('dropsart-magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), '1.0', true);

    wp_enqueue_script('dropsart-jarallax', get_template_directory_uri() . '/assets/js/jarallax.min.js', array(), '1.0', true);

    wp_enqueue_script('dropsart-appear', get_template_directory_uri() . '/assets/js/appear.min.js', array(), '1.0', true);

    wp_enqueue_script('dropsart-odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), '1.0', true);

    wp_enqueue_script('dropsart-ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.min.js', array(), '1.0', true);

    wp_enqueue_script('dropsart-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.1', true);

}
add_action('wp_enqueue_scripts', 'dropsart_scripts');
