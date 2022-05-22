<?php

/**
 * courses levels
 */
global $post, $authordata;

$profile_url        = tutor_utils()->profile_url($authordata->ID, true);
$course_duration    = get_tutor_course_duration_context(get_the_ID(), true);
?>

<div class="pl-70 mb-4">
    <h4><?php the_title(); ?></h4>
    <p><?php the_excerpt(); ?></p>
</div>
<div class="row align-items-center">
    <div class="row align-items-center">
        <div class="col-sm">
            <i class="fas fa-user"></i> users
        </div>
        <div class="col-sm">
            <?php echo tutor_utils()->clean_html_content($course_duration); ?>
        </div>
        <div class="col-sm">
            <a href="<?php esc_url(the_permalink()); ?>" class="default-btn alt-btn mr-2 wow animate__animated animate__fadeInLeft">حجز الدورة</a>
        </div>
    </div>

</div>