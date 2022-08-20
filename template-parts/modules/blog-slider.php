<?php
	$type = get_sub_field('type');
	
?>
<div class="module blog-slider">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="inner bordered border-purple">
					<div class="grid-x grid-padding-x align-middle">
						<div class="cell small-12">
							<div class="slider-wrap">
								<div class="swiper-container">
									<div class="swiper-wrapper">
							
										<?php if($type == 'single-post'):
											$blog_post = get_sub_field('blog_post');
					
											$args = array(  
											'post_type' => 'post',
											'post_status' => 'publish',
											'posts_per_page' => 1,
											'p' => $blog_post->ID
										);
										
										$loop = new WP_Query( $args ); 
										
										if ( $loop->have_posts() ) : 
											
											while ( $loop->have_posts() ) : $loop->the_post();
											
												get_template_part('template-parts/loop', 'post-slider');
										
											endwhile;
										
										endif;
										wp_reset_postdata(); 
					
										else: 	
													
											$args = array(  
												'post_type' => 'post',
												'post_status' => 'publish',
												'posts_per_page' => 3,
											);
											
											$loop = new WP_Query( $args ); 
											
											if ( $loop->have_posts() ) : 
												
												while ( $loop->have_posts() ) : $loop->the_post();
												
													get_template_part('template-parts/loop', 'post-slider');
						
												endwhile;
						
											endif;
											wp_reset_postdata(); 
											
										endif;?>
		
									</div>
									
									<div class="swiper-btn swiper-button-prev">
										<svg xmlns="http://www.w3.org/2000/svg" width="117" height="81" viewBox="0 0 117 81">
									  	<g id="Group_411" data-name="Group 411" transform="translate(58 -6325)">
											<g id="Group_264" data-name="Group 264" transform="translate(-21.568 6325.216)">
										  	<g id="Group_72" data-name="Group 72" transform="translate(0 0)">
												<circle id="Ellipse_29" data-name="Ellipse 29" cx="40.5" cy="40.5" r="40.5" transform="translate(-0.431 -0.216)" fill="#9063cd"/>
										  	</g>
											</g>
											<rect id="Rectangle_183" data-name="Rectangle 183" width="77" height="81" transform="translate(-58 6325)" fill="#9063cd"/>
											<path id="Path_209" data-name="Path 209" d="M13.343,0,0,14.418,13.343,27.3" transform="translate(18.333 6351.264)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
									  	</g>
										</svg>
									</div>
									
									<div class="swiper-btn swiper-button-next">
										<svg xmlns="http://www.w3.org/2000/svg" width="117" height="81" viewBox="0 0 117 81">
									  	<g id="Group_410" data-name="Group 410" transform="translate(-1342 -6325)">
											<g id="Group_265" data-name="Group 265" transform="translate(1422.568 6405.784) rotate(180)">
										  	<g id="Group_72" data-name="Group 72" transform="translate(0 0)">
												<circle id="Ellipse_29" data-name="Ellipse 29" cx="40.5" cy="40.5" r="40.5" transform="translate(-0.431 -0.216)" fill="#9063cd"/>
										  	</g>
											</g>
											<rect id="Rectangle_184" data-name="Rectangle 184" width="77" height="81" transform="translate(1459 6406) rotate(180)" fill="#9063cd"/>
											<path id="Path_210" data-name="Path 210" d="M13.343,0,0,14.418,13.343,27.3" transform="translate(1382.667 6379.736) rotate(180)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="4"/>
									  	</g>
										</svg>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

