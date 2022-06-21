<?php
$theme_path = get_template_directory_uri();
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
$user_id                   = get_current_user_id();
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="navbar-area navbar-area-two">
			<!-- Menu For Mobile Device -->
			<div class="mobile-nav">
				<a href="<?php echo esc_html(get_site_url()); ?>" class="logo mb-2">
					<?php
					if (has_custom_logo()) {
						echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
					?>
				</a>
			</div>

			<!-- Menu For Desktop Device -->
			<div class="main-nav">
				<div class="container-fluid">
					<nav class="navbar navbar-expand-md">
						<div class="collapse navbar-collapse mean-menu d-flex justify-content-start">
							<ul class="navbar-nav ">
								<li class="nav-item">
									<a href="<?php echo esc_html(get_site_url()); ?>" class="nav-link active">
										الرئيسية
									</a>

								</li>

								<li class="nav-item">
									<a href="#" class="nav-link">
										الدورات
										<i class="bx bx-chevron-down"></i>
									</a>

									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="/course-category/recorded/" class="nav-link">الدورات المسجلة</a>
										</li>
										<li class="nav-item">
											<a href="/course-category/live-courses/" class="nav-link">الدورات المباشرة</a>
										</li>
									</ul>
								</li>

								<li class="nav-item">
									<a href="/about-us" class="nav-link">
										عن المدرب والشركة
									</a>
								</li>

								<li class="nav-item">
									<a href="/shop" class="nav-link">
										المنتجات
										<i class="bx bx-chevron-down"></i>
									</a>

									<ul class="dropdown-menu">
										<li class="nav-item">
											<a href="/product-category/perfumes" class="nav-link">العطور</a>
										</li>
										<li class="nav-item">
											<a href="/product-category/oud" class="nav-link">ادهان العود</a>
										</li>
										<li class="nav-item">
											<a href="/discovery-box" class="nav-link">طقم الإستكشاف</a>
										</li>
									</ul>
								</li>

								<li class="nav-item">
									<a href="/blog" class="nav-link">
										المدونة
									</a>
								</li>
								<li class="nav-item">
									<a href="/consultations" class="nav-link">
										الإستشارات
									</a>
								</li>
								<li class="nav-item">
									<a href="/contact" class="nav-link">إتصل بنا</a>
								</li>
							</ul>

							<!-- Start Other Option -->
							<div class="others-option">
								<div class="option-item">
									<i class="search-btn bx bx-search"></i>
									<i class="close-btn bx bx-x"></i>
									<div class="search-overlay search-popup">
										<div class='search-box'>
											<?php echo do_shortcode('[ajaxsearch placeholder="بحث عن" button="بحث"]'); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="user-login">
								<?php if (is_user_logged_in()) {
									echo "<a href='/dashboard' class='user'><i class='bx bxs-user-circle'></i></a>";
								} else { ?>
									<a href="/my-account" class="user">
										<i class='bx bxs-user-circle'></i>
									</a>
								<?php } ?>
							</div>
							<!-- End Other Option -->
						</div>
						<a class="navbar-brand" href="<?php echo esc_html(get_site_url()); ?>">
							<?php
							if (has_custom_logo()) {
								echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
							} else {
								echo '<h1>' . get_bloginfo('name') . '</h1>';
							}
							?>
						</a>
					</nav>
				</div>
			</div>

			<!-- Start Others Option For Responsive -->
			<div class="others-option-for-responsive">
				<div class="container">
					<div class="dot-menu">
						<?php if (is_user_logged_in()) {
							echo "<a href='/dashboard' class='user'><i class='bx bxs-user-circle'></i></a>";
						} else { ?>
							<a href="/my-account" class="user">
								<i class='bx bxs-user-circle'></i>
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
			<!-- End Others Option For Responsive -->
		</div>
	</header>

	<?php wp_body_open(); ?>