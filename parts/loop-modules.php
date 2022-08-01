<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<?php 
		if( have_rows('page_modules') ):
			while ( have_rows('page_modules') ) : the_row();

				if( get_row_layout() == 'accordion' ):
					get_template_part('parts/modules/accordion');		
				elseif( get_row_layout() == 'banner' ):
					get_template_part('parts/modules/banner');
				elseif( get_row_layout() == 'blog_slider' ):
					get_template_part('parts/modules/blog-slider');
				elseif( get_row_layout() == 'cta_bubble' ):
					get_template_part('parts/modules/cta-bubble');
				elseif( get_row_layout() == 'cta_by_the_numbers' ):
					get_template_part('parts/modules/cta-by-the-numbers');
				elseif( get_row_layout() == 'cta_image' ):
					get_template_part('parts/modules/cta-image');
				elseif( get_row_layout() == 'form_email_signup' ):
					get_template_part('parts/modules/form-email-signup');
				elseif( get_row_layout() == 'home_banner_slider' ):
					get_template_part('parts/modules/home-banner-slider');
				elseif( get_row_layout() == 'hours' ):
					get_template_part('parts/modules/hours');
				elseif( get_row_layout() == 'list_circle_links' ):
					get_template_part('parts/modules/list-circle-links');
				elseif( get_row_layout() == 'list_circle_links_dates' ):
					get_template_part('parts/modules/list-circle-links-dates');
				elseif( get_row_layout() == 'list_gallery_slider_list' ):
					get_template_part('parts/modules/list-gallery-slider-list');
				elseif( get_row_layout() == 'list_link_list' ):
					get_template_part('parts/modules/list-link-list');
				elseif( get_row_layout() == 'pricing' ):
					get_template_part('parts/modules/pricing');
				elseif( get_row_layout() == 'text_circle_image_and_text' ):
					get_template_part('parts/modules/text-circle-image-and-text');
				elseif( get_row_layout() == 'title_and_text' ):
					get_template_part('parts/modules/text-title-text');
				elseif( get_row_layout() == 'text_wysiwyg' ):
					get_template_part('parts/modules/text-wysiwyg');
				endif;
	
			endwhile;
		endif;
	?>

</article> <!-- end article -->