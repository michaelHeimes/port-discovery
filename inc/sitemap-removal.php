<?php
// set post to noindex if external link
// https://wordpress.stackexchange.com/questions/192872/yoast-seo-plugin-set-no-index-to-a-post-automatically-when-a-post-is-set-to-st
function mh_update_external_link_people($post_id, $post, $update) {
	if ( wp_is_post_revision( $post_id ) ) return;

	if (empty($post_id)) return;

	if ($_POST['_wp_http_referer'] == '/wp-admin/post-new.php') {
		$remove_from_sitemap = (isset($_POST['acf']['field_630f8f9913113']) ? $_POST['acf']['field_630f8f9913113'] : false );
	} else {
		$remove_from_sitemap = get_post_meta($post_id, 'no_single_post', true);
	}
	
	if ($remove_from_sitemap) {
		add_action( 'wpseo_saved_postdata', function() use ( $post_id ) { 
			update_post_meta( $post_id, '_yoast_wpseo_meta-robots-noindex', '1' );
		}, 999 );
	} else {
		add_action( 'wpseo_saved_postdata', function() use ( $post_id ) { 
			delete_post_meta( $post_id, '_yoast_wpseo_meta-robots-noindex' );
		}, 999 );
	}	
}
add_action('save_post_people_post', 'mh_update_external_link_people', 100, 3);

function my_redirect_function() {
	if(get_field('no_single_post')){
		$home = esc_url( home_url());
		wp_redirect( $home, 301 ); exit;
	}
}

add_action( 'template_redirect', 'my_redirect_function');