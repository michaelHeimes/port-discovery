<?php
	$left_image = get_sub_field('left_image'); 
	$right_image = get_sub_field('right_image'); 
?>
<div class="module image-set">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="left cell small-12 medium-6">
					<?php 
					$image = $left_image;
					if( !empty( $image ) ): ?>
						<figure>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<figcaption><?php echo esc_attr($image['caption']); ?></figcaption>
						</figure>
					<?php endif; ?>
				</div>
				<div class="right cell small-12 medium-6">
					<?php 
					$image = $right_image;
					if( !empty( $image ) ): ?>
						<figure>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<figcaption><?php echo esc_attr($image['caption']); ?></figcaption>
						</figure>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
