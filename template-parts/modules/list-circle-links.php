<?php
	$links = get_sub_field('links'); 
?>
<div class="module list-circle-links text-center">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-center small-up-1 medium-up-2 tablet-up-3 large-up-4">
				<?php if($links):
					foreach($links as $link) :
						$page = $link['page'];
						$circle_color = $link['circle_color'];
						$icon = $link['icon'];
						$heading = $link['heading'];
						$text = $link['text'];
					?>
						<div class="cell">
							<a href="<?php echo esc_html($page);?>" class="inner">
								<?php 
								$image = $icon;
								if( !empty( $image ) ): ?>
								<div class="circle text-center">
									<div class="icon-wrap circle-image <?php echo $circle_color;?>-bg">
										<div class="grid-x align-center align-middle">
											<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										</div>
									</div>
								</div>
								<?php endif; ?>	
								<h3 class="h7"><u><?php echo $heading;?></u></h3>
								<p><?php echo $text;?></p>
							</a>
						</div>
					<?php endforeach;
				endif;?>				
			</div>
		</div>
	</div>
</div>