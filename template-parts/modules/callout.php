<?php
	$background_color = get_sub_field('background_color'); 
	$image = get_sub_field('image'); 
	$text = get_sub_field('text'); 
?>
<div class="module callout <?php echo $background_color;?>-bg">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="left cell small-12 medium-shrink">
				<?php 
				if( !empty( $image ) ): ?>
					<div class="img-wrap circle-img-wrap">
						<img src="<?php echo $image['sizes']['text-circle-image-and-text']; ?>" width="<?php echo $image['sizes']['text-circle-image-and-text-width']; ?>" height="<?php echo $image['sizes']['text-circle-image-and-text-height']; ?>" alt="<?php echo $image['caption']; ?>" />
					</div>
				<?php endif; ?>
			</div>
			<div class="right cell small-12 medium-auto grid-x align-middle">
				<?php if( !empty($text) ):?>
					<h2 class="h4 color-white"><?php echo $text;?></h2>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
