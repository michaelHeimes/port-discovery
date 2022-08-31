<?php
	$rows = get_sub_field('rows'); 
?>
<div class="module list-circle-list">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<?php if($rows):
				foreach($rows as $row) :
					$circle_type = $row['circle_type'];
					$theme_color = $row['theme_color'];
					$icon = $row['circle_icon'];
					$image = $row['circle_image'];
					$heading = $row['heading'];
					$sub_heading = $row['sub-heading'];
					$text = $row['text'];
					$buttons = $row['button_links'];
				?>
					<div class="single-row cell">
						<div class="inner">
							<div class="grid-x grid-padding-x align-top">
								<div class="left circle-wrap cell shrink text-left">
								<?php 
								if($circle_type == 'icon'):
									$image = $icon;
									if( !empty( $image ) ): ?>
										<div class="circle <?php echo $theme_color;?>-bg">
											<div class="icon-wrap">
												<div class="grid-x align-center align-middle">
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												</div>
											</div>
										</div>
								<?php 
									endif; 
								endif; ?>	
								<?php 
								if($circle_type == 'image'):
									$image = $image;
									if( !empty( $image ) ): ?>
										<div class="circle img-wrap">
											<img src="<?php echo $image['sizes']['list-circle-list']; ?>" width="<?php echo $image['sizes']['list-circle-list-width']; ?>" height="<?php echo $image['sizes']['list-circle-list-height']; ?>" alt="<?php echo $image['caption']; ?>" />
										</div>
								<?php 
									endif; 
								endif; ?>	
								</div>
								<div class="right cell auto">
									<h2 class="h5 color-<?php echo $theme_color;?>"><?php echo $heading;?></h2>
									<div class="grid-x grid-padding-x">
										<div class="left cell<?php if ( !empty($buttons) ):?> small-8<?php else:?> small-12<?php endif;?>">
											<h3 class="p"><?php echo $sub_heading;?></h3>
											<p><?php echo $text;?></p>
										</div>
										<?php if( !empty($buttons) ):?>
										<div class="right small-4">
											<?php get_template_part('template-parts/part-button-group', null, array( 
												'data'  => array(
													'btns' => $buttons,
												)) 
											);?>
										</div>
										<?php endif;?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach;
			endif;?>				
		</div>
	</div>
</div>