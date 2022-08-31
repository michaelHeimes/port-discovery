<?php
	$type_tabs = get_sub_field('classification_tabs');
?>
<div class="module open-play-areas people">
	<div class="inner">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="left cell small-12 medium-4 xlarge-3">
					<div class="grid-x flex-dir-column">
						<div class="tabs-dropdown-wrap">
							<button class="button hide-for-medium trigger-btn amethyst-bg p color-white grid-x align-middle align-center" type="button"><span>View All</span></button>
							<div class="inner">
								<ul class="tabs vertical" data-tabs id="people" data-deep-link="true" data-deep-link-smudge="true" data-deep-link-smudge-offset="200" data-update-history="true">
									
									<li class="tabs-title is-active"><a class="button style-xlarge amethyst-bg grid-x align-middle align-center" href="#all">view all</a></li>
									
									<?php $tab_nav = 2; foreach($type_tabs as $type_tab):
										$type_name = $type_tab['classification']->name;
										$type_slug = $type_tab['classification']->slug;
									?>
										<li class="tabs-title">
											<a class="button style-xlarge amethyst-bg grid-x align-middle align-center" href="#<?php echo $type_slug;?>">
												<span><?php echo $type_name;?></span>
											</a>
										</li>
									<?php $tab_nav++; endforeach;?>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="right cell small-12 medium-8 large-7 large-offset-1  xlarge-8">
					<?php if( !empty($heading) ):?> 
						<h2><?php echo $heading;?></h2>
					<?php endif;?>
					<?php if( !empty($text) ):?> 
						<p><?php echo $text;?></p>
					<?php endif;?>
					<div class="preview-tc-wrap">
						
						<div class="tabs-content" data-tabs-content="people">
							
							<div class="tabs-panel is-active" id="all">
								<div class="grid-x grid-padding-x small-up-2 tablet-up-3">
									<?php			
									$args = array(  
										'post_type' => 'people_post',
										'post_status' => 'publish',
										'posts_per_page' => -1,
									);
									
									$loop = new WP_Query( $args ); 
									
									if ( $loop->have_posts() ) :
										
										while ( $loop->have_posts() ) : $loop->the_post();
											$postid = get_the_ID();
										?>
										
										<div class="person-card cell">
											<div class="pc-inner grid-x flex-dir-column align-justify">
												<div class="top">
													<?php 
													$image = get_field('photo');
													if( !empty( $image ) ): ?>
													<div class="img-wrap circle-img-wrap">
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<?php endif; ?>
													<h3 class="h8 color-amethyst"><?php the_title();?></h3>
													<?php if( $title = get_field('title') ):?>
													<p><?php echo $title;?></p>
													<?php endif;?>
												</div>
												<div class="grid-x align-middle">
													<?php if( get_field('no_single_post') != true ):?>
													<a class="grid-x align-middle permalink h11 color-amethyst" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
														<b>Full Bio</b>
													</a>
													<?php endif;?>
													<?php if( $linkedin_url = get_field('linkedin_url') ):?>
													<a class="grid-x align-middle" href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank">
														<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
													  	<g id="Group_267" data-name="Group 267" transform="translate(-179.721 -911.721)">
															<circle id="Ellipse_137" data-name="Ellipse 137" cx="14" cy="14" r="14" transform="translate(179.721 911.721)" fill="#9063cd"/>
															<g id="Group_218" data-name="Group 218" transform="translate(187.618 919.127)">
														  	<path id="Path_5" data-name="Path 5" d="M12.706,7.654v4.509H10.095v-4.2c0-1.051-.373-1.78-1.322-1.78a1.429,1.429,0,0,0-1.339.949,1.856,1.856,0,0,0-.085.644v4.391H4.721s.034-7.137,0-7.866H7.332V5.416c0,.017-.017.017-.017.034h.017V5.416A2.594,2.594,0,0,1,9.688,4.111c1.729,0,3.018,1.119,3.018,3.543ZM1.975.5A1.371,1.371,0,0,0,.5,1.856,1.351,1.351,0,0,0,1.941,3.212h.017A1.361,1.361,0,0,0,3.433,1.856,1.346,1.346,0,0,0,1.975.5ZM.653,12.163H3.263V4.3H.653Zm0,0" transform="translate(-0.5 -0.5)" fill="#fff"/>
															</g>
													  	</g>
														</svg>
													</a>
													<?php endif;?>
												</div>
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
								$type_name = $type_tab['classification']->name;
								$type_slug = $type_tab['classification']->slug;
								$term_id = $type_tab['classification']->term_id;
								$type_description = get_field('description_copy', 'classification' . '_' . $term_id);
							?>
							
							<div class="tabs-panel" id="<?php echo $type_slug;?>">
								<div class="grid-x grid-padding-x">
									<div class="cell small-12">
										<h2><?php echo $type_name ;?></h2>
										<div class="text-wrap">
											<?php echo $type_description;?>
										</div>
									</div>
								</div>
								<div class="grid-x grid-padding-x small-up-2 tablet-up-3">
								<?php
								$args = array(  
									'post_type' => 'people_post',
									'post_status' => 'publish',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => 'classification',
											'field' => 'slug',
											'terms' => $type_slug,
											'operator' => 'IN'
										),
									)
								);
								
								$loop = new WP_Query( $args ); 
								
								if ( $loop->have_posts() ) : 
									
									while ( $loop->have_posts() ) : $loop->the_post();?>
									
										<div class="person-card cell">
											<div class="pc-inner grid-x flex-dir-column align-justify">
												<div class="top">
													<?php 
													$image = get_field('photo');
													if( !empty( $image ) ): ?>
													<div class="img-wrap circle-img-wrap">
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<?php endif; ?>
													<h3 class="h8 color-amethyst"><?php the_title();?></h3>
													<?php if( $title = get_field('title') ):?>
													<p><?php echo $title;?></p>
													<?php endif;?>
												</div>
												<div class="grid-x align-middle">
													<a class="grid-x align-middle permalink h11 color-amethyst" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
														<b>Full Bio</b>
													</a>
													<?php if( $linkedin_url = get_field('linkedin_url') ):?>
													<a class="grid-x align-middle" href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank">
														<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
													  	<g id="Group_267" data-name="Group 267" transform="translate(-179.721 -911.721)">
															<circle id="Ellipse_137" data-name="Ellipse 137" cx="14" cy="14" r="14" transform="translate(179.721 911.721)" fill="#9063cd"/>
															<g id="Group_218" data-name="Group 218" transform="translate(187.618 919.127)">
														  	<path id="Path_5" data-name="Path 5" d="M12.706,7.654v4.509H10.095v-4.2c0-1.051-.373-1.78-1.322-1.78a1.429,1.429,0,0,0-1.339.949,1.856,1.856,0,0,0-.085.644v4.391H4.721s.034-7.137,0-7.866H7.332V5.416c0,.017-.017.017-.017.034h.017V5.416A2.594,2.594,0,0,1,9.688,4.111c1.729,0,3.018,1.119,3.018,3.543ZM1.975.5A1.371,1.371,0,0,0,.5,1.856,1.351,1.351,0,0,0,1.941,3.212h.017A1.361,1.361,0,0,0,3.433,1.856,1.346,1.346,0,0,0,1.975.5ZM.653,12.163H3.263V4.3H.653Zm0,0" transform="translate(-0.5 -0.5)" fill="#fff"/>
															</g>
													  	</g>
														</svg>
													</a>
													<?php endif;?>
												</div>
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

					</div>
				</div>
			</div>
		</div>
	</div>
</div>