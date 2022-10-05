<?php
	$links = get_sub_field('links'); 
	$layout_1 = 'small-up-1';
	$layout_2 = 'small-up-2';
	$layout_3 = 'small-up-2 medium-up-3';
	$layout_4 = 'small-up-2 medium-up-3 xxlarge-up-4';
?>
<div class="module list-circle-links circle-links-slider text-center">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<?php if($links):
						$links_count = count($links);
					?>
					<div class="swiper-container">
						<div class="swiper-wrapper <?php if($links_count == 1) { echo $layout_1;} elseif ($links_count == 2) { echo $layout_2;} elseif ($links_count == 3) { echo $layout_3;} elseif ($links_count >= 4) { echo $layout_4;};?>">
							<?php foreach($links as $link) :
								$page = $link['page'];
								$circle_color = $link['circle_color'];
								$icon = $link['icon'];
								$heading = $link['heading'];
								$text = $link['text'];
							?>
								<div class="cell swiper-slide">
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
							<?php endforeach;?>
						</div>
						<?php endif;?>

						<div class="swiper-btn swiper-button-prev">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="81" viewBox="0 0 60 81">
						  	<defs>
								<clipPath id="clip-scroll-button-green-left">
							  	<rect width="60" height="81"/>
								</clipPath>
						  	</defs>
						  	<g id="scroll-button-green-left" clip-path="url(#clip-scroll-button-green-left)">
								<g id="Group_407" data-name="Group 407" transform="translate(10508.001 -1469.25)">
							  	<path id="Union_2" data-name="Union 2" d="M351,3048.75v-81h18.052l.449,0,.47,0H370a40.5,40.5,0,0,1,0,81v0Z" transform="translate(-10859 -1498.5)" fill="#84bd00"/>
							  	<path id="Path_209" data-name="Path 209" d="M13.343,29.3a1.993,1.993,0,0,1-1.389-.561L-2.8,14.5,11.876-1.358A2,2,0,0,1,14.7-1.468a2,2,0,0,1,.109,2.826L2.8,14.339,14.732,25.861A2,2,0,0,1,13.343,29.3Z" transform="translate(-10489.667 1495.514)" fill="#fff"/>
								</g>
						  	</g>
							</svg>
						</div>
						
						<div class="swiper-btn swiper-button-next">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="81" viewBox="0 0 60 81">
						  	<defs>
								<clipPath id="clip-scroll-button-green-right">
							  	<rect width="60" height="81"/>
								</clipPath>
						  	</defs>
						  	<g id="scroll-button-green-right" clip-path="url(#clip-scroll-button-green-right)">
								<g id="Group_406" data-name="Group 406" transform="translate(-10344 1567.25) rotate(180)">
							  	<path id="Union_5" data-name="Union 5" d="M351,3048.75v-81h18.052l.449,0,.47,0H370a40.5,40.5,0,0,1,0,81v0Z" transform="translate(-10755 -1481.5)" fill="#84bd00"/>
							  	<path id="Path_209" data-name="Path 209" d="M13.343,29.3a1.993,1.993,0,0,1-1.389-.561L-2.8,14.5,11.876-1.358A2,2,0,0,1,14.7-1.468a2,2,0,0,1,.109,2.826L2.8,14.339,14.732,25.861A2,2,0,0,1,13.343,29.3Z" transform="translate(-10385.667 1512.514)" fill="#fff"/>
								</g>
						  	</g>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>