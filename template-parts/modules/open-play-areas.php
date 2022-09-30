<?php
	$heading = get_sub_field('heading'); 
	$text = get_sub_field('text'); 
	$type_tabs = get_sub_field('type_tabs');
	
	$floor = get_the_terms( $post->ID, 'floor' )[0];
	$types = get_the_terms( $post->ID, 'opa_type' );
?>
<div class="module open-play-areas">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="left cell small-12 medium-4">
					<div class="grid-x flex-dir-column">
						<div class="tabs-dropdown-wrap">
							<button class="button hide-for-medium trigger-btn amethyst-bg p color-white grid-x align-middle align-center" type="button"><span>View All</span></button>
							<div class="inner">
								<ul class="tabs vertical" data-tabs id="open-play-areas" data-deep-link="true" data-deep-link-smudge="true" data-deep-link-smudge-offset="200" data-update-history="true">
									
									<li class="tabs-title is-active"><a class="button style-xlarge amethyst-bg grid-x align-middle align-center" href="#all-open-play-areas">view all</a></li>
									
									<?php $tab_nav = 2; foreach($type_tabs as $type_tab):
										$type_name = $type_tab['type']->name;
										$type_slug = $type_tab['type']->slug;
									?>
										<li class="tabs-title">
											<a class="button style-xlarge amethyst-bg grid-x align-middle align-center" href="#<?php echo $type_slug;?>-open-play-areas">
												<span><?php echo $type_name;?></span>
											</a>
										</li>
									<?php $tab_nav++; endforeach;?>
									
								</ul>
							</div>
						</div>
						<div>
							<a class="download-map-btn button green-bg grid-x align-middle align-center" href="<?php the_field('map', 'option');?>" target="_blank">
								<span>download map</span>
							</a>
						</div>
					</div>
				</div>
				<div id="opa-preview" class="right cell small-12 medium-8 large-7 large-offset-1">
					<?php if( !empty($heading) ):?> 
						<h2><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($text) ):?> 
						<p><?php echo $text;?></p>
					<?php endif;?>
					<div class="preview-tc-wrap">
						
						<div class="tabs-content" data-tabs-content="open-play-areas">
							
							<div class="tabs-panel is-active" id="all-open-play-areas">
								<div class="grid-x grid-padding-x small-up-2">
									<?php			
									$args = array(  
										'post_type' => 'open_play_area',
										'post_status' => 'publish',
										'posts_per_page' => -1,
									);
									
									$loop = new WP_Query( $args ); 
									
									if ( $loop->have_posts() ) :
										
										while ( $loop->have_posts() ) : $loop->the_post();
											$postid = get_the_ID();
										?>
										
										<div class="opa-card cell" data-card-target="preview-card-<?php echo $postid;?>" aria-controls="<?php the_title();?>" aria-haspopup="dialog" tabindex="0">
											<?php $floor = get_the_terms( $post->ID, 'floor' )[0];?>
											<div class="inner">
												<div><?php echo $floor->name;?></div>
												<h3 class="h5"><?php the_title();?></h3>
											</div>
										</div>
										
										<?php
										endwhile;
		
									endif;
									wp_reset_postdata(); 
									?>
								</div>
							</div>
	
							<?php $tab_cont = 2; foreach($type_tabs as $type_tab):
								$type_slug = $type_tab['type']->slug;
							?>
							
							<div class="tabs-panel" id="<?php echo $type_slug;?>-open-play-areas">
								<div class="grid-x grid-padding-x small-up-2">
								<?php
								$args = array(  
									'post_type' => 'open_play_area',
									'post_status' => 'publish',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => 'opa_type',
											'field' => 'slug',
											'terms' => $type_slug,
											'operator' => 'IN'
										),
									)
								);
								
								$loop = new WP_Query( $args ); 
								
								if ( $loop->have_posts() ) : 
									
									while ( $loop->have_posts() ) : $loop->the_post();
										$postid = get_the_ID();
									?>
									
									<div class="opa-card cell" data-card-target="preview-card-<?php echo $postid;?>" aria-controls="<?php the_title();?>" aria-haspopup="dialog" tabindex="0">
										<?php $floor = get_the_terms( $post->ID, 'floor' )[0];?>
										<div class="inner">
											<div><?php echo $floor->name;?></div>
											<h3 class="h5"><?php the_title();?></h3>
										</div>
									</div>
									
									<?php
									endwhile;
								
								endif;
								wp_reset_postdata(); 
								?>
								</div>
							</div>
	
							<?php $tab_cont++; endforeach;?>
	
						</div>
						
						<div class="previews">
							<?php			
							$args = array(  
								'post_type' => 'open_play_area',
								'post_status' => 'publish',
								'posts_per_page' => -1,
							);
							
							$loop = new WP_Query( $args ); 
							
							if ( $loop->have_posts() ) : 
								
								while ( $loop->have_posts() ) : $loop->the_post();
								
								$preview_card = get_field('preview_card');
								if($preview_card):
									$postid = get_the_ID();
									$floor = get_the_terms( $post->ID, 'floor' )[0];
								?>

								<div class="preview-card" id="preview-card-<?php echo $postid;?>" aria-hidden="true" tabindex="-1">
									<div class="grid-x grid-padding-x">
										<div class="top cell small-12">
											<div class="inner">
												<div class="grid-x grid-padding-x">
													<div class="cell auto">
														<div><?php echo $floor->name;?></div>
														<h3 class="h5 foo"><?php the_title();?></h3>
													</div>
													<div class="cell shrink grid-x align-middle align-center">
														<button class="close-button" aria-label="Close modal" role="dialog" aria-hidden="false" type="button">
															<svg xmlns="http://www.w3.org/2000/svg" width="24.631" height="23.509" viewBox="0 0 24.631 23.509">
														  	<g id="Group_411" data-name="Group 411" transform="translate(-1213.815 -1130.246)">
																<path id="Path_304" data-name="Path 304" d="M5780.416-6269l-22.57,21.328" transform="translate(-4543 7400.336)" fill="none" stroke="#3d1e65" stroke-width="3"/>
																<g id="Group_410" data-name="Group 410">
															  	<path id="Path_305" data-name="Path 305" d="M5757.847-6269l22.57,21.328" transform="translate(-4543.001 7400.336)" fill="none" stroke="#3d1e65" stroke-width="3"/>
																</g>
														  	</g>
															</svg>
														</button>
													</div>
												</div>
											</div>
										</div>
										<div class="left cell small-12 medium-6">
											<?php 
											$image = $preview_card['image'];
											if( !empty( $image ) ): ?>
												<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
											<?php endif; ?>
											<div class="btn-wrap show-for-medium">
												<a class="button orange-bg" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
													learn more
												</a>
											</div>
										</div>
										<div class="right cell small-12 medium-6">
											<?php 
											$copy = $preview_card['copy'];
											if( !empty( $copy ) ): ?>
												<p class="h9"><?php echo $copy;?></p>
											<?php endif;?>

											<?php
											$types = get_the_terms( $post->ID, 'opa_type' );
											if($types):?>
											<div class="opa-types cell small-6 tablet-12">
												<ul>
													<?php foreach ($types as $type):
														$type_name = $type->name;
													?>
													<li class="grid-x">
														<span><?php echo $type_name;?></span>
													</li>
													<?php endforeach;?>
												</ul>
											</div>
											<?php endif;?>
											<div class="btn-wrap hide-for-medium">
												<a class="button orange-bg" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
													learn more
												</a>
											</div>
										</div>
									</div>
								</div>
								
								<?php endif;
								endwhile;
							
							endif;
							wp_reset_postdata(); 
							?>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>