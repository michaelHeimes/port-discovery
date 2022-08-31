<?php
	$left_image = get_sub_field('left_image'); 
	$right_heading = get_sub_field('right_heading'); 
	$right_copy = get_sub_field('right_copy'); 
	$right_icon_rows = get_sub_field('right_icon_rows'); 
	$buttons = get_sub_field('button_links'); 
	$right_large_button_link = get_sub_field('right_large_button_link'); 
	$add_third_column_card = get_sub_field('add_third_column_card'); 
	$third_column_card = get_sub_field('third_column_card'); 
	$show_opa_types = get_sub_field('show_opa_types');
	
	$types = get_the_terms( $post->ID, 'opa_type' );
?>
<div class="module text-circle-image-and-text">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			<div class="left cell small-12 tablet-4">
				<?php 
				$image = $left_image;
				if( !empty( $image ) ): ?>
				<div class="img-wrap circle-img-wrap">
					<img src="<?php echo $image['sizes']['text-circle-image-and-text']; ?>" width="<?php echo $image['sizes']['text-circle-image-and-text-width']; ?>" height="<?php echo $image['sizes']['text-circle-image-and-text-height']; ?>" alt="<?php echo $image['caption']; ?>" />
				</div>
				<?php endif; ?>
			</div>
			<div class="right cell small-12 <?php if( $add_third_column_card == 'true' ):?>tablet-5<?php else:?>tablet-8<?php endif;?>">
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
							<div class="icon-wrap cell shrink">
								<?php 
								$image = $icon;
								if( !empty( $image ) ): ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								<?php endif; ?>
							</div>
							<div class="cell auto">
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
			<?php if( $add_third_column_card == 'true' ):?>
			<div class="third-col cell small-12 tablet-3">
				<div class="inner bordered br-30">
					<div class="grid-x grid-padding-x">
						<?php if( !empty($third_column_card) ):?>
							<?php if(!empty($third_column_card['heading'])):?>
							<div class="heading-wrap cell small-12">
								<h5 class="color-aqua"><?php echo $third_column_card['heading'];?></h5>
							</div>
							<?php endif;?>
							<?php if(!empty($third_column_card['copy'])):?>
							<div class="text-wrap cell<?php if($show_opa_types == 'true'):?> small-6 tablet-12<?php else:?> small-12<?php endif;?>">
								<?php echo $third_column_card['copy'];?>
							</div>
							<?php endif;?>
						<?php endif;?>
						<?php if($show_opa_types == 'true' && 'open_play_area' == get_post_type()):?>
							<?php
							$types = get_the_terms( $post->ID, 'opa_type' );
							if($types):?>
							<div class="opa-types cell small-6 tablet-12">
								<ul>
									<?php foreach ($types as $type):
										$type_name = $type->name;
									?>
									<li class="grid-x">
										<span><?php echo $type_name;?></span>
									</li>
									<?php endforeach;?>
								</ul>
							</div>
							<?php endif;?>
						<?php endif;?>
					</div>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>
