<?php
	$left_image = get_sub_field('left_image'); 
	$right_heading = get_sub_field('right_heading'); 
	$right_copy = get_sub_field('right_copy'); 
	$right_icon_rows = get_sub_field('right_icon_rows'); 
	$buttons = get_sub_field('button_links'); 
	$right_large_button_link = get_sub_field('right_large_button_link'); 
	$add_third_column_card = get_sub_field('add_third_column_card'); 
	$third_column_card = get_sub_field('third_column_card'); 
?>
<div class="module text-circle-image-and-text">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="cell small-12 tablet-4">
				<?php 
				$image = $left_image;
				if( !empty( $image ) ): ?>
				<div class="img-wrap circle-img-wrap">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<?php endif; ?>
			</div>
			<div class="cell small-12 tablet-8">
				<?php if( !empty($right_heading) ):?>
					<h2 class="h5"><?php echo $right_heading;?></h2>
				<?php endif;?>
				<?php if( !empty($right_copy) ):?>
					<p><?php echo $right_copy;?></p>
				<?php endif;?>
				<?php if($right_icon_rows):?>
					<div class="right-icon-rows">
					<?php foreach($right_icon_rows as $right_icon_row):
						$icon = $right_icon_row['icon'];
						$heading = $right_icon_row['heading'];
						$text = $right_icon_row['text'];
					?>
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 medium-shrink">
								<?php 
								$image = $icon;
								if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
							<div class="cell small-12 medium-auto">
								<?php if( !empty($heading) ):?>
									<h3 class="p"><b><?php echo $heading;?></b></h3>
								<?php endif;?>
								<?php if( !empty($text) ):?>
									<?php echo $text;?>
								<?php endif;?>
							</div>
						</div>
					<?php endforeach;?>
					</div>
				<?php endif;?>
				<?php if( !empty($buttons) ):?>
					<?php get_template_part('template-parts/part-button-group', null, array( 
						'data'  => array(
							'btns' => $buttons,
						)) 
					);?>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
