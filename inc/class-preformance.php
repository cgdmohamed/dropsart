<?php

//remove DNS Perfetch
add_action('init', 'remove_dns_prefetch');
function  remove_dns_prefetch()
{
   remove_action('wp_head', 'wp_resource_hints', 2, 99);
}
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_footer', 'wp_enqueue_global_styles', 1);
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');



add_action('wp_enqueue_scripts', 'aiooc_crunchify_dequeue_dashicon');

function aiooc_crunchify_dequeue_dashicon()
{
if ( is_admin()){
   wp_deregister_style('dashicons');
}
   
}

/**
 * Disable the emoji's
 */
function disable_emojis()
{
   remove_action('wp_head', 'print_emoji_detection_script', 7);
   remove_action('admin_print_scripts', 'print_emoji_detection_script');
   remove_action('wp_print_styles', 'print_emoji_styles');
   remove_action('admin_print_styles', 'print_emoji_styles');
   remove_filter('the_content_feed', 'wp_staticize_emoji');
   remove_filter('comment_text_rss', 'wp_staticize_emoji');
   remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
   add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
   add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce($plugins)
{
   if (is_array($plugins)) {
      return array_diff($plugins, array('wpemoji'));
   } else {
      return array();
   }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch($urls, $relation_type)
{
   if ('dns-prefetch' == $relation_type) {
      /** This filter is documented in wp-includes/formatting.php */
      $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');

      $urls = array_diff($urls, array($emoji_svg_url));
   }

   return $urls;
}


function smartwp_remove_wp_block_library_css()
{
   wp_dequeue_style('wp-block-library');
   wp_dequeue_style('wp-block-library-theme');
   wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


function remove_api()
{
   remove_action('wp_head', 'rest_output_link_wp_head', 10);
   remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
}
add_action('after_setup_theme', 'remove_api');

function remove_wp_version_rss()
{
   return '';
}
add_filter('the_generator', 'remove_wp_version_rss');

add_filter('xmlrpc_enabled', '__return_false');

// Hide xmlrpc.php in HTTP response headers
add_filter( 'wp_headers', function( $headers ) {
    unset( $headers[ 'X-Pingback' ] );
    return $headers;
} ); 

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');


function itsme_disable_feed() {
   wp_die( __( 'No feed available, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">homepage</a>!' ) );
  }
  
  add_action('do_feed', 'itsme_disable_feed', 1);
  add_action('do_feed_rdf', 'itsme_disable_feed', 1);
  add_action('do_feed_rss', 'itsme_disable_feed', 1);
  add_action('do_feed_rss2', 'itsme_disable_feed', 1);
  add_action('do_feed_atom', 'itsme_disable_feed', 1);
  add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
  add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);
  remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
