<?php get_header(); ?>
<div class=" pt-100">
    <div class="pt-100">
        <div class="container">
            <div class="row">
                <h1><?php echo single_post_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php the_content(); ?>
        </div>

    </div>

</div>
<?php get_footer(); ?>