<?php

/**
 * Template Name: Consultaitons
 */
get_header();
?>

<div class="container">
    <div class="row py-5">
        <h1 class="text-center mt-5"><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
            </div>
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/cgd-mohamed/30min?hide_gdpr_banner=1" style="min-width:320px;height:768px;overflow:hidden;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <!-- Calendly inline widget end -->
    </div>
</div>
<?php get_footer(); ?>