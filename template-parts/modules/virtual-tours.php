<?php
	$theme_color = get_sub_field('theme_color');
	$text_color = get_sub_field('text_color');
	$image = get_sub_field('image');
	$label = get_sub_field('label');
	$button_link = get_sub_field('button_link');
?>
<div class="module video virtual-tour">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x tablet-flex-dir-row-reverse">
				
				<?php 
				if( !empty( $image ) ): ?>
					<div class="left cell small-12<?php if( !empty($label) ):?> tablet-8<?php endif;?>">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					</div>	
				<?php endif;?>
				
				<?php if( !empty($label) ):?>
					<div class="right cell small-12 tablet-4 grid-x align-middle">
						<div class="text-wrap <?php echo $theme_color;?>-bg grid-x align-middle">
							<div class="inner">
								<h5 class="color-<?php echo $text_color;?>"><?php echo $label;?></h5>
								<?php if(!empty($button_link)):?>
								<div class="text-center">
									<?php get_template_part('template-parts/part-button', null, array( 
										'data'  => array(
											'btn' => $button_link,
										)) 
									);?>
								</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endif;?>
				
			</div>
		</div>
	</div>
</div>