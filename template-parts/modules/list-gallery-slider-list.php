<?php
	$slides = get_sub_field('slides'); 
	$list = get_sub_field('list');
?>
<div class="module list-gallery-slider-list">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php
			$images = $slides;
			if( $images ): ?>
			<div class="left cell small-12 tablet-6">
					<div class="swiper-container">

						<div class="swiper-wrapper">
							<?php foreach( $images as $image ): ?>
							<div class="swiper-slide" style="width: 100%;">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endforeach;?>
						</div>
						
						<!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						
						<!-- Add Pagination -->
						<div class="swiper-pagination"></div>

					</div>
			</div>
			<?php endif;?>
			<?php if( !empty($list) ):?>
			<div class="right cell small-12 tablet-6">
				<?php echo $list;?>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>