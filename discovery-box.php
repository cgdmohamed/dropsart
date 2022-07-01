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
                    <a href="/product/%d8%b7%d9%82%d9%85-%d8%a7%d9%84%d8%a5%d8%b3%d8%aa%d9%83%d8%b4%d8%a7%d9%81/" class="default-btn req-btn">طلب الطقم</a>
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
                    global $paged;
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'product',
                        'paged' => $paged,
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
                            //wc_get_template_part('content', 'product');
                    ?>
                            <div class="col-lg-4 col-sm-6" <?php wc_product_class('', $product); ?>>
                                <div class="single-shop">
                                    <div class="shop-prod border rounded">
                                        <?php
                                        // product image
                                        echo woocommerce_get_product_thumbnail();
                                        ?>
                                    </div>

                                    <?php
                                    //porduct title
                                    do_action('woocommerce_shop_loop_item_title');
                                    ?>

                                </div>
                            </div>
                    <?php
                        endwhile;
                    } else {
                        echo __('No products found');
                    }
                    ?>
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area woocommerce-pagination">
                        <?php previous_posts_link('<i class="bx bx-chevron-right"></i> السابق', $loop->max_num_pages) ?>
                        <?php next_posts_link('التالي <i class="bx bx-chevron-left"></i>', $loop->max_num_pages) ?>
                        </div>
                    </div>
                    <?php
                    wp_reset_postdata();

                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>