<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Port_Discovery
 */

get_header();
?>

	<main id="primary" class="site-main">
        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

            <?php
            while ( have_posts() ) :
	            the_post();
    
	            get_template_part( 'template-parts/loop', 'modules' );
    
            endwhile; // End of the loop.
            ?>
            
        </article>

	</main><!-- #main -->

<?php
get_footer();
