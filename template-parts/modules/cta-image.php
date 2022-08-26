<?php
	$heading = get_sub_field('heading'); 
	$button_link = get_sub_field('button_link'); 
	$image = get_sub_field('image');
	$button_color = $button_link['button_color'];
?>
<div class="module cta-image">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-middle">
				<div class="left cell small-12 medium-6 tablet-5">
					<?php if( !empty($heading)):?>
						<h2 class="h3 color-<?php echo $button_color;?>"><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if($button_link):?>
					<div class="right cell small-12 tablet-shrink">
						<?php get_template_part('template-parts/part-button', null, array( 
							'data'  => array(
								'btn' => $button_link,
							)) 
						);?>
					</div>
					<?php endif;?>
				</div>
				<?php 
				if( !empty( $image ) ): ?>
				<div class="right cell small-12 medium-6 tablet-5 tablet-offset-1">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?>				
			</div>
		</div>
	</div>
</div>
