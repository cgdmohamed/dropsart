<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<div class="blog-column-three-area ptb-100">
	<div class="container">
		<div class="row">

			<?php if (have_posts()) : ?>

				<header class="page-header alignwide">
					<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
					<?php if ($description) : ?>
						<div class="archive-description"><?php echo wp_kses_post(wpautop($description)); ?></div>
					<?php endif; ?>
				</header><!-- .page-header -->

				<?php while (have_posts()) : ?>
					<?php the_post(); ?>
					<?php get_template_part('template-parts/main/blog-posts'); ?>
				<?php endwhile; ?>
				<?php the_posts_pagination(array('mid_size' => 2)); ?>
				<?php
				$args = array(
					'before'            => '<div class="page-links-XXX"><span class="page-link-text">' . __('More pages: ', 'textdomain') . '</span>',
					'after'             => '</div>',
					'link_before'       => '<span class="page-link">',
					'link_after'        => '</span>',
					'next_or_number'    => 'next',
					'separator'         => ' | ',
					'nextpagelink'      => __('Next &raquo', 'textdomain'),
					'previouspagelink'  => __('&laquo Previous', 'textdomain'),
				);

				wp_link_pages($args);
				?>

			<?php else : ?>
				<?php get_template_part('template-parts/content/content-none'); ?>
			<?php endif; ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>