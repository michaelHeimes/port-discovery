<?php
	$left_heading = get_sub_field('left_heading'); 
	$right_sub_heading = get_sub_field('right_sub-heading'); 
	$right_copy = get_sub_field('right_copy'); 
	$right_icon_rows = get_sub_field('right_icon_rows'); 
	$right_button_link = get_sub_field('right_button_link'); 
?>
<div class="module text-title-text">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="left cell small-12 medium-5 tablet-4">
					<?php if( !empty($left_heading)):?>
						<h2 class="h3"><?php echo $left_heading;?></h2>
					<?php endif;?>
				</div>
				<div class="right cell small-12 medium-7 tablet-8">
					<?php if( !empty($right_sub_heading)):?>
						<h3 class="h5"><?php echo $right_sub_heading;?></h3>
					<?php endif;?>
					<?php if( !empty($right_copy)):?>
						<?php echo $right_copy;?>
					<?php endif;?>			
					<?php if( !empty($right_icon_rows)):?>
						<div class="icon-rows">
						<?php foreach($right_icon_rows as $right_icon_row):
							$icon = $right_icon_row['icon'];
							$heading = $right_icon_row['heading'];
							$text = $right_icon_row['text'];
							$dashed_border_info = $right_icon_row['dashed-border_info'];
							$links = $right_icon_row['links'];
						?>
							<div class="grid-x grid-padding-x">
								<?php 
								$image = $icon;
								if( !empty( $image ) ): ?>
								<div class="cell shrink">
									<div class="icon-wrap">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
								</div>
								<?php endif; ?>
								<div class="cell auto">
									<?php if( !empty($heading)):?>
										<h3 class="h6 color-amethyst"><?php echo $heading;?></h3>
									<?php endif;?>
									<?php if( !empty($text)):?>
										<div class="text-wrap"><?php echo $text;?></div>
									<?php endif;?>
									<?php if( !empty($dashed_border_info)):?>
										<div class="dashed-left purple-dl">
											<p><?php echo $dashed_border_info;?></p>
										</div>
									<?php endif;?>
									<?php if( !empty($links) ):?>
										<div class="links-wrap grid-x grid-padding-x">
										<?php foreach ($links as $link_values):
											$link = $link_values['link'];
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										?>
											<div class="cell shrink">
												<a class="h7" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><u><?php echo esc_html( $link_title ); ?></u></a>
											</div>
										<?php endforeach;?>
										</div>
									<?php endif;?>
								</div>
							</div>
						<?php endforeach; ?>
						</div>
					<?php endif;?>	
					
					<?php 
					$link = $right_button_link;
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
						?>
					<div class="btn-wrap">
						<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
					
						
				</div>
			</div>
		</div>
	</div>
</div>
