<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */
$featured_post_id = '';
get_header(); ?>
			
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<?php get_template_part('parts/loop', 'archive');?>
				
		    </main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>