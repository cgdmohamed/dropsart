<?php 
/**
 * Template name: About us
 */
$theme_path = get_template_directory_uri();
get_header();
?>
		<!-- Start Education Area -->
		<section class="education-area-two ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="education-content">
							<span class="top-title"><?php the_title(); ?></span>
							<?php the_content(); ?>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="education-img-wrap">
							<div class="education-img-2">
								<img src="<?php echo $theme_path; ?>/assets/img/education-img-2.jpg" alt="Image">
							</div>

							<div class="education-img-3">
								<img src="<?php echo $theme_path; ?>/assets/img/education-img-3.jpg" alt="Image">
							</div>

							<div class="education-img-4">
								<img src="<?php echo $theme_path; ?>/assets/img/education-img-4.jpg" alt="Image">
							</div>

							<div class="education-shape-1">
								<img src="<?php echo $theme_path; ?>/assets/img/education-shape-1.jpg" alt="Image">
							</div>

							<div class="education-shape-2">
								<img src="<?php echo $theme_path; ?>/assets/img/education-shape-2.png" alt="Image">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Education Area -->
<?php
get_footer();