<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 */
$theme_path = get_template_directory_uri();
get_header();

if (is_front_page()) {
?>

	<!-- Start Banner Area -->
	<section class="banner-area-two">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container-fluid social">
					<div class="row align-items-center">
						<div class="col-lg-7">
							<div class="banner-content">
								<h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.3s">دورة تصميم وصناعة العطور</h1>
								<p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.6s">من هو مصمم العطور ؟ وماهي الادوات التي يحتاجها مصمم العطور؟</p>

								<a href="/courses/%d8%af%d9%88%d8%b1%d8%a9-%d8%aa%d8%b5%d9%85%d9%8a%d9%85-%d9%88%d8%b5%d9%86%d8%a7%d8%b9%d8%a9-%d8%a7%d9%84%d8%b9%d8%b7%d9%88%d8%b1/" class="default-btn wow animate__animated animate__fadeInLeft" data-wow-delay="0.9s">
									المزيد عن الدورة
								</a>
							</div>
						</div>

						<div class="col-lg-5">
							<div class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
								
								<!-- here to add item -->
								<div class="banner-shape-1">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-1.png" alt="Image">
								</div>
								<div class="banner-shape-2">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-2.png" alt="Image">
								</div>
								<div class="banner-shape-3">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-3.png" alt="Image">
								</div>
								<div class="banner-shape-4">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-4.png" alt="Image">
								</div>
								<div class="banner-shape-5 rotated">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-5.png" alt="Image">
								</div>
								<div class="banner-shape-6">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-6.png" alt="Image">
								</div>
								<div class="banner-shape-7 rotated">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-7.png" alt="Image">
								</div>
								<div class="banner-shape-8">
									<img src="<?php echo $theme_path; ?>/assets/img/banner-img/shape-img-8.png" alt="Image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<?php

	get_template_part('template-parts/main/product-cat');
	?>
	<section class="courses pt-10 pb-70">
		<div class="container">
			<div class="section-title">
				<h2>الدورات التدريبية</h2>
			</div>

			<?php
			$args = array(
				'post_type' => 'courses',
				'posts_per_page' => 3
			);
			$loop = new WP_Query($args);
			if ($loop->have_posts()) {
				while ($loop->have_posts()) : $loop->the_post();
					get_template_part('template-parts/main/courses');
				endwhile;
			} else {
				echo __('No courses yet');
			}
			wp_reset_postdata();


			?>

		</div>
	</section>
	<!-- Start Feedback Area -->
	<section class="feedback-area ptb-100">
		<div class="container">
			<div class="section-title">
				<div class="feedback-item">
					<i class="flaticon-quotation"></i>
					<h2>اراء المتدربين</h2>
				</div>
				<img src="<?php echo $theme_path; ?>/assets/img/section-title-shape.png" alt="Image">
			</div>

			<?php
			$args = array(
				'post_type' => 'testimonials',
				'posts_per_page' => 3
			);
			$loop = new WP_Query($args);
			if ($loop->have_posts()) {
				while ($loop->have_posts()) : $loop->the_post();
				get_template_part('template-parts/main/feedbacks');
				endwhile;
			} else {
				echo __('لم يتم اضافة اراء');
			}
			wp_reset_postdata();
			
			
			?>

		</div>
		<div class="feedback-shape-1">
			<img src="<?php echo $theme_path; ?>/assets/img/feedback-img/feedback-shape-1.png" alt="Image">
		</div>
		<div class="feedback-shape-2">
			<img src="<?php echo $theme_path; ?>/assets/img/feedback-img/feedback-shape-2.png" alt="Image">
		</div>
	</section>
	<!-- End Feedback Area -->

	<!-- Start News Area -->
	<section class="news-area-two pt-70 pb-70">
		<div class="container">
			<div class="section-title">
				<h2>مقالات قد تعجبك</h2>
			</div>
			<div class="row">
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3
				);
				$loop = new WP_Query($args);
				if ($loop->have_posts()) {
					while ($loop->have_posts()) : $loop->the_post();
						get_template_part('template-parts/main/blog-posts');
					endwhile;
				} else {
					echo __('No posts');
				}
				wp_reset_postdata();
				?>
			</div>
			<div class="d-flex justify-content-center">
				<a href="/blog" class="default-btn align-center">كل المقالات</a>
			</div>
		</div>
	</section>
	<!-- End News Area -->
<?php
} else {
	get_template_part('template-parts/content-none');
}
get_footer();
