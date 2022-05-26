<?php

/**
 * Template for displaying course audience
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */


do_action('tutor_course/single/before/audience');

$per_page = tutor_utils()->get_option('pagination_per_page', 10);
$current_page = max(1, (int)tutor_utils()->avalue_dot('current_page', $_POST));
$offset = ($current_page - 1) * $per_page;

$course_id = isset($_POST['course_id']) ? (int)$_POST['course_id'] : get_the_ID();
$is_enrolled = tutor_utils()->is_enrolled($course_id, get_current_user_id());

$reviews = tutor_utils()->get_course_reviews($course_id, $offset, $per_page);
$reviews_total = tutor_utils()->get_course_reviews($course_id, null, null, true);
$rating = tutor_utils()->get_course_rating($course_id);
$my_rating = tutor_utils()->get_reviews_by_user(0, 0, 150, false, $course_id);
$target_audience = tutor_course_target_audience();

if (empty($target_audience)) {
	return;
}

if (is_array($target_audience) && count($target_audience)) {
?>

	<div class="tutor-course-details-widget tutor-mt-40">
		<h3 class="tutor-course-details-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
			<?php _e('Audience', 'tutor'); ?>
		</h3>
		<ul class="tutor-course-details-widget-list tutor-fs-6 tutor-color-black">
			<?php
			foreach ($target_audience as $audience) {
				echo "<li class='tutor-d-flex tutor-mb-12'><span class='tutor-icon-mark tutor-color-primary tutor-mr-12' area-hidden='true'></span><span>{$audience}</span></li>";
			}
			?>
		</ul>
	</div>

<?php } ?>

<div class="tutor-course-details-widget tutor-mt-40 tutor-mb-40 p-5 custom-rating rounded border">
	<div class="tutor-review-summary-average-rating tutor-mb-20">
		<h3 class="tutor-course-details-widget-title tutor-fs-5 tutor-color-black tutor-fw-bold tutor-mb-16">
			التقييمات
		</h3>
		<div class="total-custom-rating"><?php echo number_format($rating->rating_avg, 1) . '/5'; ?></div>
	</div>

	<div class="tutor-fs-6 tutor-color-secondary tutor-mt-12">
		<?php esc_html_e('Total ', 'tutor'); ?>
		<?php echo $reviews_total; ?>
		<?php echo esc_html(_n(' Rating', ' Ratings', count($reviews), 'tutor')); ?>
	</div>

	<div>
		<div class="tutor-d-inline-block">
			<?php tutor_utils()->star_rating_generator_v2($rating->rating_avg, null, false, '', 'lg'); ?>
		</div>
	</div>


</div>

<?php do_action('tutor_course/single/after/audience'); ?>