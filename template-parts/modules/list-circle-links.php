<?php
	$links = get_sub_field('links'); 
?>
<div class="module list-circle-links circle-links-slider text-center">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="cell small-12">
					<div class="swiper-container">
						<div class="swiper-wrapper cell small-up-2 medium-up-3 tablet-up-3 xlarge-up-4">
							<?php if($links):
								foreach($links as $link) :
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
				</div>
			</div>
		</div>
	</div>
</div>