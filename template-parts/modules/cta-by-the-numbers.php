<?php
	$icon = get_sub_field('icon'); 
	$text = get_sub_field('text'); 
	$stats = get_sub_field('stats'); 
	$add_bottom = get_sub_field('add_bottom_cta_with_buttons');
	$bottom_text = get_sub_field('bottom_text');
	$buttons = get_sub_field('buttons');
?>
<div class="module cta-by-the-numbers text-center<?php if($add_bottom):?> has-bottom<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner amethyst-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 large-10 large-offset-1">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12 tablet-10 tablet-offset-1 xlarge-8 xlarge-offset-2">
										<div class="text-wrap text-center">
											<?php 
											$image = $icon;
											if( !empty( $image ) ): ?>
											<div class="icon-wrap">
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											</div>
											<?php endif; ?>
											
											<?php if( !empty($text) ):?>
											<p class="h5 color-white">
												<?php echo $text;?>
											</p>
											<?php endif;?>
										</div>
									</div>
									
									<?php if($stats):?>
									<div class="cell small-12">
										<div class="stats grid-x grid-padding-x align-center">	
											<?php $count = count($stats); foreach($stats as $stat) :
												$figure = $stat['figure'];
												$label = $stat['label'];
												$text= $stat['text'];
											?>
											<?php echo $i;?>
												<div class="cell small-6<?php if( $count <= 3) { echo ' large-4';} else { echo ' large-3';};?>">
													<h3 class="color-white"><?php echo $figure;?></h3>
													<h5><?php echo $label;?></h5>
													<p><?php echo $text;?></p>
												</div>
											<?php endforeach;?>				
										</div>
									</div>
									<?php endif;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php if($add_bottom):?>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner purple-bg">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-10 tablet-offset-1 xlarge-8 xlarge-offset-2">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12 tablet-10 tablet-offset-1">
										<?php if(!empty($bottom_text)):?>
										<p><?php echo $bottom_text;?></p>
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
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<?php endif;?>
	
</div>