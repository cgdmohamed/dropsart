<?php

/**
 * Feedbacks template
 */
?>



<!-- Slider main container -->
<div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">

        <!-- Slides -->
        <div class="swiper-slide">
            <div class="feedback">
                <p class="text-center"><?php echo esc_html(get_the_content()); ?></p>
                <div class="feedback-title">
                    <h3 class="text-center"><?php echo esc_html( get_post_meta( get_the_ID(), 'author', true ) ); ?></h3>
                </div>
            </div>
        </div>

    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>