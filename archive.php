<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Port_Discovery
 */

get_header();
?>

	<main id="primary" class="site-main">

	<?php
		get_template_part('template-parts/loop', 'archive');
	?>
	
</main><!-- #main -->

<?php
get_footer();
