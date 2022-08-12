<?php
	$background_type = get_sub_field('background_type');
	$background_image = get_sub_field('background_image');
	$background_color = get_sub_field('background_color');
	$alternative_title = get_sub_field('alternative_title');
	$image = get_sub_field('image');
	if( is_archive() ) {
		$term_obj = get_queried_object();
		$color_theme = get_field('color_theme', $term_obj);
	}
?>
<header class="banner <?php if($background_type == 'color'): echo $background_color;?>-bg<?php endif;?> <?php if(is_archive()): echo $color_theme?>-bg<?php endif;?>" <?php if($background_type == 'image'):?> style="background-image: url(<?php echo esc_url($background_image['url']); ?>);"<?php endif;?> role="banner">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left cell<?php if($background_type == 'color'):?> small-12<?php else:?> shrink<?php endif;?>">
				<h1 class="page-title">
					<?php 
						if( is_home() ) {
							echo 'Learn';
						} elseif ( is_archive() ) {
							echo single_term_title();
					    } elseif($alternative_title) {
							echo $alternative_title;
						} else {
							the_title();
						}
					?>
				</h1>
			</div>
			<?php 
			if( !empty( $image ) ): ?>
			<div class="right cell auto">
				<div class="ing-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</header> <!-- end article header -->