<?php
/**
 * Template part for displaying page content in page.php
 */
?>

						
	<?php 
		if( have_rows('page_modules') ):
			while ( have_rows('page_modules') ) : the_row();

				if( get_row_layout() == 'accordion' ):
					get_template_part('template-parts/modules/accordion');
				elseif( get_row_layout() == 'accordion_sidebar' ):
					get_template_part('template-parts/modules/accordion-sidebar');		
				elseif( get_row_layout() == 'banner' ):
					get_template_part('template-parts/modules/banner');
				elseif( get_row_layout() == 'blog_slider' ):
					get_template_part('template-parts/modules/blog-slider');
				elseif( get_row_layout() == 'buttons_group' ):
					get_template_part('template-parts/modules/buttons-group');
					elseif( get_row_layout() == 'callout' ):
					get_template_part('template-parts/modules/callout');
				elseif( get_row_layout() == 'colored_callout' ):
					get_template_part('template-parts/modules/colored-callout');
				elseif( get_row_layout() == 'cta_bubble' ):
					get_template_part('template-parts/modules/cta-bubble');
				elseif( get_row_layout() == 'cta_by_the_numbers' ):
					get_template_part('template-parts/modules/cta-by-the-numbers');
				elseif( get_row_layout() == 'cta_color' ):
					get_template_part('template-parts/modules/cta-color');
				elseif( get_row_layout() == 'cta_image' ):
					get_template_part('template-parts/modules/cta-image');
				elseif( get_row_layout() == 'faqs' ):
					get_template_part('template-parts/modules/faqs');
				elseif( get_row_layout() == 'form_email_signup' ):
					get_template_part('template-parts/modules/form-email-signup');
				elseif( get_row_layout() == 'form_typeform' ):
					get_template_part('template-parts/modules/form-typeform');
				elseif( get_row_layout() == 'gallery_slider' ):
					get_template_part('template-parts/modules/gallery-slider');
				elseif( get_row_layout() == 'home_banner_slider' ):
					get_template_part('template-parts/modules/home-banner-slider');
				elseif( get_row_layout() == 'hours' ):
					get_template_part('template-parts/modules/hours');
				elseif( get_row_layout() == 'instagram' ):
					get_template_part('template-parts/modules/instagram');
				elseif( get_row_layout() == 'image_set' ):
					get_template_part('template-parts/modules/image-set');
				elseif( get_row_layout() == 'list_circle_links' ):
					get_template_part('template-parts/modules/list-circle-links');
				elseif( get_row_layout() == 'list_circle_links_dates' ):
					get_template_part('template-parts/modules/list-circle-links-dates');
				elseif( get_row_layout() == 'list_circle_list' ):
					get_template_part('template-parts/modules/list-circle-list');
				elseif( get_row_layout() == 'list_gallery_slider_list' ):
					get_template_part('template-parts/modules/list-gallery-slider-list');
				elseif( get_row_layout() == 'list_link_list' ):
					get_template_part('template-parts/modules/list-link-list');
				elseif( get_row_layout() == 'open_play_areas' ):
					get_template_part('template-parts/modules/open-play-areas');
				elseif( get_row_layout() == 'people' ):
					get_template_part('template-parts/modules/people');
				elseif( get_row_layout() == 'pricing' ):
					get_template_part('template-parts/modules/pricing');
				elseif( get_row_layout() == 'supporters' ):
					get_template_part('template-parts/modules/supporters');
				elseif( get_row_layout() == 'testimonial' ):
					get_template_part('template-parts/modules/testimonial');
				elseif( get_row_layout() == 'text_circle_image_and_text' ):
					get_template_part('template-parts/modules/text-circle-image-and-text');
				elseif( get_row_layout() == 'title_and_text' ):
					get_template_part('template-parts/modules/text-title-text');
				elseif( get_row_layout() == 'vertical_tabs' ):
					get_template_part('template-parts/modules/vertical-tabs');
				elseif( get_row_layout() == 'video' ):
					get_template_part('template-parts/modules/video');
				elseif( get_row_layout() == 'text_wysiwyg' ):
					get_template_part('template-parts/modules/text-wysiwyg');
				endif;
	
			endwhile;
		endif;
	?>

