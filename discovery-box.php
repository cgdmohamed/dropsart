<?php

/**
 * Template name: Discovery Box
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();
?>

<div class="discovery-box py-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h1> <?php the_title(); ?> </h1>
                <?php echo term_description('26', 'product_cat'); ?>
                <div>
                    <a href="/contact-us" class="default-btn req-btn">طلب الطقم</a>
                </div>
            </div>
            <div class="col">
                <?php the_content(); ?>
            </div>
        </div>
    </div>


</div>

<div class="woocommerce shop-area pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center mb-3">محتويات الطقم</h1>
                <div class="shop-card-wrap">
                    <?php
                    echo "<div class='row gx-5'>";
                    $args = array(
                        'post_type' => 'product',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field'    => 'slug',
                                'terms'    => 'discovery',
                            ),
                        ),
                        'posts_per_page' => 9
                    );
                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) {
                        while ($loop->have_posts()) : $loop->the_post();
                            wc_get_template_part('content', 'product');
                        endwhile;
                        echo "</div>";
                    } else {
                        echo __('No products found');
                    }
                    wp_reset_postdata();

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>