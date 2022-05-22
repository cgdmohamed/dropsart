<?php

/**
 * 
 * Blog Posts
 * 
 */
global $post;
$author_id = $post->post_author;
?>
<div class="col-lg-4 col-md-6">
	<div class="single-news">
		<a href="<?php esc_url(the_permalink()); ?>">
			<?php the_post_thumbnail('post-thumbnails'); ?>
		</a>

		<div class="news-content">
			<span class="tag">
				<?php echo get_the_category_list(); ?></span>

			<a href="<?php esc_url(the_permalink()); ?>">
				<h3><?php the_title(); ?></h3>
			</a>

			<ul class="lessons">
				<li>بواسطة  <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author_meta('display_name', $author_id); ?></a></li>
				<li class="float"><?php the_date('j F Y'); ?></li>
			</ul>
		</div>
	</div>
</div>