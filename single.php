<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Port_Discovery
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="grid-cotnainer">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="cell small-12 tablet-10 tablet-offset-1 large-8 large-offset-2">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<?php get_template_part( 'template-parts/loop', 'single' ); ?>
						
					<?php endwhile; else : ?>
					
		   				<?php get_template_part( 'template-parts/content', 'missing' ); ?>
					
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
