<?php
	$slides = get_sub_field('slides'); 
?>
<div class="module gallery-slider text-center">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<?php if($slides):
					foreach($slides as $slide) :
						$image = $slide['image'];
						$caption = $slide['caption'];
					?>
						<div class="cell">
							<div class="img-wrap">
								<?php if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
								<?php if( !empty( $caption ) ): ?>
									<div class="text-wrap">
										<?php echo $caption;?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach;
				endif;?>				
			</div>
		</div>
	</div>
</div>