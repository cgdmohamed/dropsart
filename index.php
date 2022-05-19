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
		
									<a href="courses.html" class="default-btn wow animate__animated animate__fadeInLeft" data-wow-delay="0.9s">
										المتجر
									</a>
									<a href="courses.html" class="default-btn alt-btn mr-2 wow animate__animated animate__fadeInLeft" data-wow-delay="0.9s">
										الدورات
									</a>
								</div>
							</div>
		
							<div class="col-lg-5">
								<div class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/78I9vSem9OQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
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
get_template_part('template-parts/main/courses');
the_content();

get_footer();
