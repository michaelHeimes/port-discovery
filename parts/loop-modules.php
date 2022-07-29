<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<?php 
		if( have_rows('page_modules') ):
			while ( have_rows('page_modules') ) : the_row();
				
				if( get_row_layout() == 'home_banner_slider' ):
					get_template_part('parts/modules/home-banner-slider');
				elseif( get_row_layout() == 'text_circle_image_and_text' ):
					get_template_part('parts/modules/text-circle-image-and-text');
				elseif( get_row_layout() == 'hours' ):
					get_template_part('parts/modules/hours');
				endif;
				
				
				
			endwhile;
		endif;
	?>

</article> <!-- end article -->