<?php
function add_custom_sizes() {
	add_image_size( 'text-circle-image-and-text', 380, 380, true );
	add_image_size( 'list-gallery-slider-list', 445, 461, true );	
	add_image_size( 'blog-slider', 545, 505, true );
	add_image_size( 'text-circle-image-and-text', 580, 580, true );
	add_image_size( 'list-circle-list', 208, 208, true );
	add_image_size( 'featured-post-thumb', 705 );
	add_image_size( 'post-card', 412, 249, true );
}
add_action('after_setup_theme','add_custom_sizes');