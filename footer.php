<?php

/**
 * Footer Template
 * Client: DropsArt
 */
$theme_path = get_template_directory_uri();
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
							<a href="courses.html">الرئيسية</a>
						</li>
						<li>
							<a href="about.html">المنتجات</a>
						</li>
						<li>
							<a href="faq.html">عنا</a>
						</li>
						<li>
							<a href="terms-conditions.html">تواصل معنا</a>
						</li>
						<li>
							<a href="privacy-policy.html">المدونة</a>
						</li>
						<li>
							<a href="privacy-policy.html">حجز موعد استشارة</a>
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
							<a href="courses.html">العطور</a>
						</li>
						<li>
							<a href="about.html">ادهان العود</a>
						</li>
						<li>
							<a href="faq.html">طقم الإستكشاف</a>
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
							<a href="courses.html">دوراتي</a>
						</li>
						<li>
							<a href="about.html">الطلبات</a>
						</li>
						<li>
							<a href="faq.html">سلة التسوق</a>
						</li>
						<li>
							<a href="faq.html">دفع الطلب</a>
						</li>
						<li>
							<a href="faq.html">حسابي</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6">
				<img src="<?php echo $theme_path; ?>/assets/img/ipf-logo.png" alt="IPF Logo">
				<div class="d-flex justify-content-center ipf-btn">
					<a href="#" nofollow class="default-btn mt-5">مزيد عن IPF</a>
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
						<li><a href="https://wa.me/+965"><i class='bx bxl-whatsapp'></i></a></li>
						<li><a href="mailto:mail.com"><i class='bx bxs-envelope'></i></a></li>
						<li><a href="https://instagram.com/"><i class='bx bxl-instagram'></i></a></li>
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