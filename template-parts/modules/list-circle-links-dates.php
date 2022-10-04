<?php
	$heading = get_sub_field('heading'); 
	$links = get_sub_field('links'); 
	$footnote = get_sub_field('footnote'); 
?>
<div class="module list-circle-links list-circle-links-dates circle-links-slider text-center">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner">
					<?php if( !empty($heading ) ):?>
					<div class="grid-x grid-padding-x">
						<div class="cell small-12 text-center">
							<h2 class="h5"><?php echo $heading ;?></h2>
						</div>
					</div>
					<?php endif;?>
					<div class="swiper-container">
						<div class="swiper-wrapper small-up-2 medium-up-3 tablet-up-3 xxlarge-up-4">
							<?php if($links):
								foreach($links as $link) :
									$circle_color = $link['circle_color'];
									$circle_text_color = $link['circle_text_color'];
									$link_date = $link['date'];
									$date_string = $link_date;
									$date = DateTime::createFromFormat('Ymd', $date_string);
									$heading = $link['heading'];
									$text = $link['text'];
									$link_data = $link['link'];
									$link_url = $link_data['url'];
									$link_title = $link_data['title'];
									$link_target = $link_data['target'] ? $link['target'] : '_self';
								?>
									<div class="cell swiper-slide">
										<a class="inner" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											<div class="circle grid-x align-middle align-center <?php echo $circle_color;?>-bg">
												<div class="date text-center">
													<h5 class="color-<?php echo $circle_text_color;?>"><?php echo $date->format('M '); ?></h5>
													<h3 class="color-<?php echo $circle_text_color;?>"><?php echo $date->format('j'); ?></h3>
												</div>
											</div>
											<div class="bottom">
												<h3 class="p"><?php echo $heading;?></h3>
												<p class="h7 color-<?php echo $circle_text_color;?>"><u><?php echo esc_html( $link_title ); ?></u></p>
												<p><?php echo $text;?></p>
											</div>
										</a>
									</div>
								<?php endforeach;
							endif;?>				
						</div>
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
					<?php if( !empty($footnote) ):?>
					<div class="grid-x grid-padding-x">
						<div class="cell small-12 text-center">
							<p><small><i><?php echo $footnote ;?></i></small></p>
						</div>
					</div>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
</div>