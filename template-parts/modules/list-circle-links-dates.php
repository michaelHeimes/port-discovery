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
						<div class="swiper-wrapper small-up-2 medium-up-3 tablet-up-3 xlarge-up-4">
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
													<h5><?php echo $date->format('M '); ?></h5>
													<h3><?php echo $date->format('m'); ?></h3>
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
							<svg xmlns="http://www.w3.org/2000/svg" width="117" height="81" viewBox="0 0 117 81">
					  			<g id="Group_1234" data-name="Group 1234" transform="translate(58 -260)">
									<rect id="Rectangle_172" data-name="Rectangle 172" width="77" height="81" transform="translate(-58 260)" fill="#84bd00"/>
									<g id="Group_1233" data-name="Group 1233">
						  			<g id="Group_260" data-name="Group 260" transform="translate(-21.569 260.216)">
										<g id="Group_72" data-name="Group 72" transform="translate(0 0)">
							  			<circle id="Ellipse_29" data-name="Ellipse 29" cx="40.5" cy="40.5" r="40.5" transform="translate(-0.431 -0.216)" fill="#84bd00"/>
										</g>
						  			</g>
						  			<g id="Group_1232" data-name="Group 1232">
										<path id="Path_204" data-name="Path 204" d="M13.343,0,0,14.418,13.343,27.3" transform="translate(18.333 286.264)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
						  			</g>
									</g>
					  			</g>
							</svg>
						</div>
						
						<div class="swiper-btn swiper-button-next">
							<svg xmlns="http://www.w3.org/2000/svg" width="117" height="81" viewBox="0 0 117 81">
					  			<g id="Group_1235" data-name="Group 1235" transform="translate(-1342 -260)">
									<rect id="Rectangle_173" data-name="Rectangle 173" width="77" height="81" transform="translate(1459 341) rotate(180)" fill="#84bd00"/>
									<g id="Group_1231" data-name="Group 1231">
						  			<g id="Group_261" data-name="Group 261" transform="translate(1422.569 340.784) rotate(180)">
										<g id="Group_72" data-name="Group 72" transform="translate(0 0)">
							  			<circle id="Ellipse_29" data-name="Ellipse 29" cx="40.5" cy="40.5" r="40.5" transform="translate(-0.431 -0.216)" fill="#84bd00"/>
										</g>
						  			</g>
						  			<path id="Path_205" data-name="Path 205" d="M13.343,0,0,14.418,13.343,27.3" transform="translate(1382.667 314.736) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
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