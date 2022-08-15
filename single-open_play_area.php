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
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<?php get_template_part( 'template-parts/loop', 'modules' ); ?>
			
		<?php endwhile; else : ?>
		
				<?php get_template_part( 'template-parts/content', 'missing' ); ?>
		
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
