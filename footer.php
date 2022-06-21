<?php

/**
 * Footer Template
 * Client: DropsArt
 */
$theme_path = get_template_directory_uri();
get_template_part('template-parts/main/footer-cta');
?>
<!-- Start Footer Top Area -->
<footer class="dropsart-footer pt-100 pb-70 px-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget">
					<h3>
						صفحات الموقع
					</h3>
					<ul class="link">
						<li>
							<a href="<?php echo esc_url(site_url()); ?>">الرئيسية</a>
						</li>
						<li>
							<a href="/shop">المنتجات</a>
						</li>
						<li>
							<a href="/about-us">عن المدرب والشركة</a>
						</li>
						<li>
							<a href="/contact">تواصل معنا</a>
						</li>
						<li>
							<a href="/blog">المدونة</a>
						</li>
						<li>
							<a href="/consultations">حجز موعد استشارة</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget">
					<h3>
						الأقسام
					</h3>
					<ul class="link">
						<li>
							<a href="/product-categoires/perfumes">العطور</a>
						</li>
						<li>
							<a href="/product-category/fragrances">ادهان العود</a>
						</li>
						<li>
							<a href="/discovery-box">طقم الإستكشاف</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<div class="footer-widget">
					<h3>
						منطقة المستخدم
					</h3>
					<ul class="link">
						<li>
							<a href="/dashboard/enrolled-courses">دوراتي</a>
						</li>
						<li>
							<a href="/cart">سلة التسوق</a>
						</li>
						<li>
							<a href="/checkout">دفع الطلب</a>
						</li>
						<li>
							<a href="/dashboard">حسابي</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 text-center partners">
				<img src="<?php echo $theme_path; ?>/assets/img/tpf.png" alt="IPF Logo">
				<img src="<?php echo $theme_path; ?>/assets/img/new-luxury.png" alt="IPF Logo2">
				<div class="d-flex justify-content-center ipf-btn">
					<a href="https://www.perfumefoundation.org/index.html" nofollow class="default-btn mt-5">مزيد عن IPF</a>
				</div>
			</div>
		</div>

		<div class="row mt-5 d-flex align-items-center ">
			<hr>
			<div class="col-md-6 col-sm-12">
				<p>
					شركة Drops Art للتدريب
					<br>
					المعتمدة كجهة تدريب رسمياً للشرق الاوسط من
					<br>
					The International Perfume Foundation IPF
				</p>

			</div>
			<div class="col-md-6 col-sm-12">
				<div class="d-flex justify-content-md-end justify-content-sm-center">
					<ul class="soical-icons">
						<li><a href="https://wa.me/message/OZG75IAHC3YNH1"><i class='bx bxl-whatsapp'></i></a></li>
						<li><a href="mailto:info@dropsart.com"><i class='bx bxs-envelope'></i></a></li>
						<li><a href="https://instagram.com/dropsart.kw?r=nametag"><i class='bx bxl-instagram'></i></a></li>
					</ul>
				</div>
			</div>

		</div>

	</div>
</footer>


<!-- Start Go Top Area -->
<div class="go-top">
	<i class='bx bx-chevrons-up'></i>
	<i class='bx bx-chevrons-up'></i>
</div>
<!-- End Go Top Area -->


<?php wp_footer(); ?>
</body>

</html>