<?php
global $post;
$author_id = $post->post_author;
?>
<!-- Start Blog Details Area -->
<div class="single-blog-area ptb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="single-blog-content">
					<div class="blog-top-content">
						<?php the_post_thumbnail(); ?>

						<span class="tag">
							<?php echo get_the_category_list(); ?></span>

						<h3><?php the_title(); ?></h3>

						<ul class="post-details">
							<li>بواسطة <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_the_author_meta('display_name', $author_id); ?></a></li>
							<li>
								<?php the_date('j F Y'); ?>
							</li>
							<li>
								<a href="#">2 Comments</a>
							</li>
						</ul>

						<?php the_content(); ?>

					</div>

					<ul class="social-wrap d-flex align-items-center">
						<li>
							<span>مشاركة :</span>
						</li>
						<li>
							<?php echo do_shortcode('[addtoany]'); ?>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Blog Details Area -->