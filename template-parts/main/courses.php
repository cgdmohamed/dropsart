<?php

/**
 * courses levels
 */
global $post, $authordata;

$profile_url        = tutor_utils()->profile_url($authordata->ID, true);
$course_duration    = get_tutor_course_duration_context(get_the_ID(), true);
$course_students = tutor_utils()->count_enrolled_users_by_course();
?>

<div class="row pl-70 pl-sm-0 mb-3">
    <h4>
        <a href="<?php esc_url(the_permalink()); ?>"> <?php the_title(); ?> </a>
    </h4>
    <p><?php the_excerpt(); ?></p>
</div>
<div class="row align-items-center">
    <div class="row course-info">

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex align-items-center">
                <div class="course-users">
                    <i class='bx bxs-user'></i>
                    <?php echo $course_students . __('مشترك', 'dropsart'); ?>
                </div>

                <div class="course-hours">
                    <i class='bx bxs-time-five'></i>
                    <?php echo tutor_utils()->clean_html_content($course_duration); ?>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <a href="<?php esc_url(the_permalink()); ?>" class="default-btn alt-btn mr-2 wow animate__animated animate__fadeInLeft">حجز الدورة</a>
        </div>
    </div>

</div>