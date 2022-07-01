<?php

/**
 * Main theme functions
 */

//performance
//require_once get_template_directory() . '/inc/class-preformance.php';
require_once get_template_directory() . '/inc/class-breadcrumbs.php';
//require_once get_template_directory() . '/inc/class-testmonials.php';

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

    load_theme_textdomain('dropsart');
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

    wp_enqueue_style('dropsart-swiper', get_template_directory_uri() . "/assets/css/swiper-bundle.min.css", array(), '8.1.6', 'all');

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

    wp_enqueue_script('dropsart-swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '8.1.6', true);

    wp_enqueue_script('dropsart-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.1', true);
}
add_action('wp_enqueue_scripts', 'dropsart_scripts');


function wpdocs_setup_theme()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(550, 400, array('center', 'center'));
}
add_action('after_setup_theme', 'wpdocs_setup_theme');

function dropsart_custom_logo_setup()
{
    $defaults = array(
        /*'height'               => 49,
        'width'                => 167,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,*/
		
	'flex-width'    => true,
	'width'           => 89,
	'flex-height'    => true,
	'height'          => 50,
	'header-selector' => '.site-title a',
	'header-text'     => false
    );

    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'dropsart_custom_logo_setup');


function mytheme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'mytheme_add_woocommerce_support');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support( 'wc-product-gallery-slider' );

add_filter('woocommerce_enqueue_styles', 'jk_dequeue_styles');
function jk_dequeue_styles($enqueue_styles)
{
    return $enqueue_styles;
}

add_filter('woocommerce_product_description_heading', '__return_null');

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);

function woocommerce_template_single_excerpt()
{
    return;
}
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


add_filter('woocommerce_checkout_fields', 'bbloomer_remove_billing_postcode_checkout');

function bbloomer_remove_billing_postcode_checkout($fields)
{
    unset($fields['billing']['billing_postcode']);
    return $fields;
}

add_action('woocommerce_before_add_to_cart_form', 'bbloomer_show_sku_again_single_product', 40);

function bbloomer_show_sku_again_single_product()
{
    global $product;
?>
    <div class="product_sku">
        <?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>
            <span class="sku_wrapper"><?php esc_html_e('SKU:', 'woocommerce'); ?> <span class="sku"><?php echo ($sku = $product->get_sku()) ? $sku : esc_html__('N/A', 'woocommerce'); ?></span></span>
        <?php endif; ?>
    </div>
<?php
}


add_action('woocommerce_before_add_to_cart_quantity', 'bbloomer_show_cats_again_single_product', 40);

function bbloomer_show_cats_again_single_product()
{
    global $product;
?>
    <div class="d-flex align-items-center mt-2">
        <div>مشاركة</div><div><?php echo do_shortcode('[addtoany]'); ?></div>
    </div>
    <div class="product_meta">
        <?php echo wc_get_product_category_list($product->get_id(), ', ', '<span class="posted_in">' . _n('Category:', 'Categories:', count($product->get_category_ids()), 'woocommerce') . ' ', '</span>'); ?>
    </div>
    <hr>
<?php
}

add_action('wp_logout','tutor_redirect_after_logout');
function tutor_redirect_after_logout(){
	wp_redirect( get_site_url() .'/my-account' );
	exit();
}

/**
 * 
 * Discovery Box Hidden
 *  
 * */
  
add_action( 'woocommerce_product_query', 'bbloomer_hide_products_category_shop' );
   
function bbloomer_hide_products_category_shop( $q ) {
  
    $tax_query = (array) $q->get( 'tax_query' );
  
    $tax_query[] = array(
           'taxonomy' => 'product_cat',
           'field' => 'slug',
           'terms' => array( 'uncategorized' ), // Category slug here
           'operator' => 'NOT IN'
    );
  
  
    $q->set( 'tax_query', $tax_query );
  
}

add_action( 'add_meta_boxes_product', 'bbloomer_remove_metaboxes_edit_product', 9999 );
 
function bbloomer_remove_metaboxes_edit_product() {
 
   // e.g. remove short description
   remove_meta_box( 'postexcerpt', 'product', 'normal' );
 
   // e.g. remove product tags
   remove_meta_box( 'tagsdiv-product_tag', 'product', 'side' );
 
}

function remove_product_description_add_cart_button(){
    global $product;
    $category = 'discovery';
    
    if ( has_term( $category, 'product_cat', $product->id ) )
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

}
//add_action('wp','remove_product_description_add_cart_button');
// Remove Author archives
add_action('template_redirect', 'jltwp_adminify_remove_archives_author');
function jltwp_adminify_remove_archives_author()
{
    if (is_author()){
        $target = get_option('siteurl');
        $status = '301';
        wp_redirect($target, 301);
        die();
    }
}