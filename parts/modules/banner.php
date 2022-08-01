<?php
	$background_color = get_sub_field('background_color');
	$alternative_title = get_sub_field('alternative_title');
	$image = get_sub_field('image');
?>
<header class="banner <?php echo $background_color;?>-bg" role="banner">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left cell shrink">
				<h1 class="page-title">
					<?php 
						if($alternative_title) {
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