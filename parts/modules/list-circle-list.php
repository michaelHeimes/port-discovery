<?php
	$rows = get_sub_field('rows'); 
?>
<div class="module list-circle-list">
	<div class="inner">
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
						$button_links = $row['button_links'];
					?>
						<div class="single-row cell">
							<div class="grid-x grid-padding-x">
								<div class="left circle-wrap cell small-12 medium-2 large-3">
								<?php 
								if($circle_type == 'icon'):
									$image = $icon;
									if( !empty( $image ) ): ?>
										<div class="circle <?php echo $theme_color;?>-bg">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
								<?php 
									endif; 
								endif; ?>	
								<?php 
								if($circle_type == 'image'):
									$image = $image;
									if( !empty( $image ) ): ?>
										<div class="circle img-wrap">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
								<?php 
									endif; 
								endif; ?>	
								</div>
								<div class="right cell small-12 medium-10 large-9 xlarge-8">
									<h2 class="h5 color-<?php echo $theme_color;?>"><?php echo $heading;?></h2>
									<h3 class="p"><?php echo $sub_heading;?></h3>
									<p><?php echo $text;?></p>
								</div>
							</div>
						</div>
					<?php endforeach;
				endif;?>				
			</div>
		</div>
	</div>
</div>